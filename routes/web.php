<?php

use App\Http\Controllers\QR;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\Video_controller;
use App\Http\Controllers\video_editor_auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/about-us', function () {
    return view('pages.about_us');
});

Route::get('/faq', function () {
    return view('pages.faq');
});

Route::get('/logout', function () {
    \Session()->flush();
    return redirect("/login");
});
Route::get('/bulk-orders-related-questions', function () {
    return view('pages.bulk-orders-related-questions');
});

Route::get('/shop', function () {
    return view('pages.shop');
});

Route::get('video', function () {
    return view('pages.video');
});
// Route::get('qr_profile', function () {
//     return view('pages.qr_profile');
// });

Route::get('qr_dashboard', function () {

    $count = DB::table('qr_payment_info')
            ->where('payer_id', Session::get('auth_id'))
            ->count();


    return view('pages.qr_dashboard',compact('count'));
})->middleware('user_login')->name('dashboard');

Route::get('qr_code_form', function (Request $req) {

    if(base64_decode($req->type) =='free' || base64_decode($req->type) =='fa_p_l_a_5_10$' ||  base64_decode($req->type) =='pr_a_s_p_1_7$' || base64_decode($req->type) =='fa_pa_ac_10_55$'  ){
        return view('pages.useradmin.qr_code_form');
    }else{
        return back();
    }


})->middleware('user_login');
Route::get('login', function () {
    return view('pages.login');
});

Route::get('signup', function () {
    return view('pages.signup');
});
Route::get('video_price', function () {
    return view('pages.video_price');
});


Route::get('editor/signup', function () {
    return view('pages.video_editor.signup');
});
Route::get('qr_mail', function () {
    return view('pages.qr_mail');
});


Route::get('/privacy', function () {
    return view('pages.privacy');
});


Route::get('/terms', function () {
    return view('pages.terms');
});

Route::get('/donation', function () {
    return view('pages.donation');
});

Route::get('/qr_religion_check', function () {
    return view('pages.qr_religion_check');
});




Route::controller(AuthController::class)->group(function () {
    Route::post("/signup","signup");
    Route::post("/login","login");
    Route::any("/otp_send","otp_send");
    Route::any("/social_log/{social_type}","social_log");
    Route::any("/{social_type}/callback","callback");


});
// user_middleware
Route::controller(QR::class)->group(function () {
    Route::post("/create_qr","create_qr")->middleware('user_login');
    Route::get("/QR_Code","QR_Code")->middleware('user_login');
    Route::get("/generateQRCode","generateQRCode")->middleware('user_login');
    Route::get("/qr_profile/{id}","qr_profile");
    Route::get("/show_qr_data/{id}","show_qr_data")->middleware('user_login');
    Route::any("/qr_data_update","qr_data_update")->middleware('user_login');
    Route::get("/delete_sub_qr","delete_sub_qr")->middleware('user_login');
    Route::get("/add_pub_moments","add_pub_moments")->middleware('user_login');
    Route::any("/add_sub_qr","add_sub_qr")->middleware('user_login');
    Route::get("/payment_qr","payment_qr")->middleware('user_login');
    Route::get("/request_payment","request_payment")->middleware('user_login');
    Route::get("/normal_to_premium/{id}","normal_to_premium")->middleware('user_login');
    Route::get("/qr_mail/{id}","qr_mail")->middleware('user_login');
    Route::get("/qr_public_download/{id}","qr_public_download");
    Route::post("/qr_religion_check","qr_religion_check")->middleware('user_login');
});

Route::controller(Video_controller::class)->group(function () {
    Route::get("/video_edit_user_info","video_edit_user_info")->middleware('user_login');
    Route::get("/my_premium_video","my_premium_video")->middleware('user_login');
    Route::get("/details_premium_video/{id}","details_premium_video")->middleware('user_login');
});


Route::prefix('editor')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    })->middleware('editor_login');
    Route::controller(video_editor_auth::class)->group(function () {
        Route::post("/video_editor_login","video_editor_login");
        Route::post("/video_editor_signup","video_editor_signup");
        Route::get("/login",function(){
            return view("pages.video_editor.login");
        });
        // Route::get("/dashboard",function(){
        //     return view("pages.video_editor.dashboard");
        // })->middleware('editor_login');
        Route::get("/active_order",'active_order')->middleware('editor_login');

        Route::get("/suggested_order","suggested_order")->middleware('editor_login');
        Route::get("/accepted_order","accepted_order")->middleware('editor_login');
        Route::get("/show_order_details","show_order_details")->middleware('editor_login');
        Route::get("/order_cancel","order_cancel")->middleware('editor_login');
        Route::get("/order_completed","order_completed")->middleware('editor_login');
        Route::get("/completed_order","completed_order")->middleware('editor_login'); //It is for view
        Route::get("/dashboard","dashboard")->middleware('editor_login');

        // Route::get("/completed_order ",function(){

        // });
    });


});

// Payment
Route::middleware('user_login')->controller('App\Http\Controllers\PaypalController')->group(function () {
    Route::get('handle-payment', 'handlePayment')->name('make.payment');
    Route::get('cancel-payment', 'paymentCancel')->name('cancel.payment');
    Route::get('payment-success', 'paymentSuccess')->name('success.payment');
});

Route::get('lang/home', [LangController::class, 'index']);
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

