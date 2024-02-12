<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User_auth;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalController extends Controller
{
    public function handlePayment(Request $request)
    {

        $session =  $request->session()->all();

        // return $session;

        $authUserId = $request->session()->get('auth_id');

      $user = User_auth::findOrFail($authUserId);

        $userData = [
            'name' => $user->name,
            'mail' => $user->mail,
            'religion'=>$user->religion
        ];

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $accessToken = $provider->getAccessToken();
        $currency = $provider->setCurrency('EUR');

        $success = route('success.payment');
        $cancel = route('cancel.payment');


        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => $success,
                "cancel_url" => $cancel
            ],

            "purchase_units" => [
                [
                  "amount" => [
                    "currency_code" => "EUR",
                    "value" => $session["amount"],
                  ],
                  "custom_id" => $user->id,
                  "description" => "Payment for " . $user->name,
                ]
              ]
        ]);

        if (isset($response['id']) && $response['id'] != null ) {
            foreach ($response['links'] as  $link) {
                if ($link['rel'] == 'approve' ) {
                    $url = $link['href'];
                    return redirect()->away($url);
                }
            }
        }else{
            return redirect()->route('cancel.payment');
        }


    }

    public function paymentCancel()
    {
        dd('Your payment has been declend. The payment cancelation page goes here!');
    }

    public function paymentSuccess(Request $request)
    {
        $session =  $request->session()->all();
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $accessToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);

        if(isset($response['status']) && $response['status'] == 'COMPLETED'){
            DB::table('qr_payment_info')->insert([
                'payer_id' => $session["auth_id"],
                'amount' => $session["amount"],
                'qr_price_info' => $session["pack"],
            ]);

        }

        // dd($response);

        return redirect()->route('dashboard')->with('success','payment successful');
    }
}
