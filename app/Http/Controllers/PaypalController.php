<?php

namespace App\Http\Controllers;
use App\Model\qr_payment_info;




use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalController extends Controller
{
    public function handlePayment(Request $request)
    {

        $session =  $request->session()->all();
        // $result =  qr_payment_info::insert([
        //     'payer_id'=>$session["auth_id"],
        //     'amount'=>$session["amount"],
        //     'qr_price_info'=>$session["pack"],
        // ]);

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
                    ]
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
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $accessToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);

        if(isset($response['status']) && $response['status'] == 'COMPLETED'){

        }

        dd($response);
    }
}
