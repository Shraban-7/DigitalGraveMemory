<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Models\User_auth;
use Illuminate\Support\Facades\Hash;
use App\Mail\Otp_mail;
use Mail;
class AuthController extends Controller
{
   public function signup(Request $req){
      $user =  $req->user;
     
       if(User_auth::where(['mail'=>$user["email"]])->count() == 0){
        $result =  User_auth::insert([
        "mail"=>$user["email"],
        "password"=>Hash::make($user["password"]),
        "religion"=>$user["religion"],
        "name"=>$user["name"],
        "create_date"=>date("Y-m-d"),

     ]);
     if($result){
        return redirect('/login')->with(['message'=>'Registration successful!','condition'=>true]);

     }else{
        return redirect('/signup')->with(['message'=>'Registration Faild!','condition'=>false]);
     }
     }else{
        return redirect('/signup')->with(['message'=>'The email has already been taken','condition'=>false]);

     }

   }

   public function login(Request $req){
    if(User_auth::where(['mail'=>$req["email"]])->count() > 0){
        $hashedPassword =  User_auth::where(['mail'=>$req["email"]])->first()->password;
      if (Hash::check($req["password"], $hashedPassword)) {
        
        $req->session()->put('is_login', true);
        $req->session()->put('auth_id', User_auth::where(['mail'=>$req["email"]])->first()->id);
        return redirect('/qr_dashboard')->with(['message'=>'You are successfully logged in','condition'=>true]);

    }else{
        return redirect('/login')->with(['message'=>'Your email Or password do not match. Please try again','condition'=>false]);
    }
    }else{
        return redirect('/login')->with(['message'=>'Your email Or password do not match. Please try again','condition'=>false]);
   
    }
   }

   public function otp_send(Request $req){
      if(isset($req->mail) && empty($req->mail) != true){
         if(User_auth::where(['mail'=>$req->mail])->count() > 0){
            $otp =  rand(100000, 999999);
            $req->session()->put('otp', $otp);
            $req->session()->put('otp_mail', trim($req->mail));
         Mail::to(trim($req->mail))->send(new Otp_mail($otp));
         return view("pages.check_otp");
         }else{
            return back()->with(['condition'=>false,'message'=>'Your account not found']);
         }
      
      }else if(isset($req->my_otp) && empty($req->my_otp) != true){
         if($req->session()->get('otp') == $req->my_otp){
            return view("pages.reset_otp");
         }else{
            return back()->with(['condition'=>false,'message'=>'OTP not matched']);
         }
      }elseif(isset($req->password) && empty($req->password) != true){
         $req->validate([
            'password' => 'required|confirmed|min:6'
        ]);
        User_auth::where(['mail'=>$req->session()->get('otp_mail')])->update([
         "password"=>Hash::make($req->password),
        ]);
        return redirect('/login')->with(['condition'=>true,'message'=>'Password updated']);
      }
      else{
         return view("pages.email_check_otp");
      }

   }

   public function social_log(Request $req, $social_type){
      return Socialite::driver("$social_type")->redirect();
   }

   public function callback(Request $req, $social_type){
      $user = Socialite::driver("$social_type")->user();

      if(User_auth::where(['mail'=>$user->email])->count() <= 0){
         $result =  User_auth::insert([
         "mail"=>$user->email,
         "password"=>Hash::make('Admin@123'),
         "name"=>$user->name,
         "create_date"=>date("Y-m-d"),
 
      ]);
      $req->session()->put('is_login', true);
      $req->session()->put('auth_id', User_auth::where(['mail'=>$user->email])->first()->id);
      return redirect('/qr_religion_check')->with(['message'=>'You are successfully logged in','condition'=>true]);
   
   }else{
      $req->session()->put('is_login', true);
      $req->session()->put('auth_id', User_auth::where(['mail'=>$user->email])->first()->id);
      return redirect('/qr_dashboard')->with(['message'=>'You are successfully logged in','condition'=>true]);
   
   }
   }
}
