<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\editor_auth_modal;
use App\Models\video;
use App\Models\order_accepted;
use App\Models\order_cancel;
use App\Models\order_completed;
use Illuminate\Support\Facades\Hash;

class video_editor_auth extends Controller
{

    public function video_editor_signup(Request $req){
        // return $req;
        $user =  $req->user;
     
        if(editor_auth_modal::where(['mail'=>$user["email"]])->count() == 0){
         $result =  editor_auth_modal::insert([
         "mail"=>$user["email"],
         "password"=>Hash::make($user["password"]),
         "name"=>$user["name"],
         "create_date"=>date("Y-m-d"),
 
      ]);
      if($result){
         return redirect('/signup')->with(['message'=>'Registration successful!','condition'=>true]);
 
      }else{
         return redirect('/signup')->with(['message'=>'Registration Faild!','condition'=>false]);
      }
      }else{
         return redirect('/signup')->with(['message'=>'The email has already been taken','condition'=>false]);
 
      }
    }

    public function video_editor_login(Request $req){
        // return $req;
        if(editor_auth_modal::where(['mail'=>$req["email"]])->count() > 0){
            $hashedPassword =  editor_auth_modal::where(['mail'=>$req["email"]])->first()->password;
          if (Hash::check($req["password"], $hashedPassword)) {
            $req->session()->put('is_editor_login', true);
            $req->session()->put('editor_auth_id', editor_auth_modal::where(['mail'=>$req["email"]])->first()->id);
            return redirect('editor/dashboard')->with(['message'=>'You are successfully logged in','condition'=>true]);
    
        }else{
            return redirect('editor/login')->with(['message'=>'Your email Or password do not match. Please try again','condition'=>false]);
        }
        }else{
            return redirect('editor/login')->with(['message'=>'Your email Or password do not match. Please try again','condition'=>false]);
       
        }
    }

    public function suggested_order(Request $req){
        
        $req_order =[];
        if(order_accepted::where(['editor_id'=>$req->session()->get('editor_auth_id')])->count() <5){
        
            $req_order =  \DB::select("SELECT video_edit.* , user_auth.name FROM video_edit LEFT JOIN user_auth ON user_auth.id = video_edit.auth_id WHERE video_edit.is_accept = 0");
            return view("pages.video_editor.suggested_order",['req_order'=>$req_order]);
        }else {
            // $req_order =  \DB::select("SELECT  ");
            return  $req_order;
 
        }
       

       
    }

    public function accepted_order(Request $req){

        order_accepted::insert([
            'video_id'=>decrypt($req->id),
            'editor_id'=>$req->session()->get('editor_auth_id'),
            'create_date'=>date("Y-m-d"),
        ]);
        video::where(['id'=>decrypt($req->id)])->update([
            'is_accept'=>1
        ]);
     return redirect('editor/suggested_order')->with(['message'=>'Order accepted successful','condition'=>true]);


    }

    public function show_order_details(Request $req){
        // return $req;
        $acce_order =  video::where(['id'=>decrypt($req->id)])->first();
        return view("pages.video_editor.video_details",['acce_order'=>$acce_order]);

    }

    public function active_order(Request $req){
        $auth=$req->session()->get('editor_auth_id');  
       $acce_order =  \DB::select("SELECT user_auth.name, video_edit.order_date ,  order_accepted.create_date ,order_accepted.video_id AS id  FROM order_accepted LEFT JOIN  video_edit  ON video_edit.id =  order_accepted.video_id LEFT JOIN user_auth ON   user_auth.id =  video_edit.auth_id WHERE order_accepted.editor_id = '$auth'");
        return view("pages.video_editor.active_order",['acce_order'=>$acce_order]);
    }

    public function order_cancel(Request $req){
        // return $req;
       $editor_id =  order_accepted::where(['video_id'=>decrypt($req->id)])->first()->editor_id ;
        order_cancel::insert([
            // ''=>$req-> 
            'video_id'=>decrypt($req->id),
            'editor_id'=>$editor_id,
            'cancel_date'=>date("Y-m-d"),
        ]);
        order_accepted::where(['video_id'=>decrypt($req->id)])->delete() ;
        return redirect('editor/active_order')->with(['message'=>'Order have been canceled','condition'=>true]);
    }

    public function order_completed(Request $req){
        // return $req;
        $editor_id =  order_accepted::where(['video_id'=>decrypt($req->id)])->first()->editor_id ;
        order_completed::insert([
            'video_id'=>decrypt($req->id),
            'editor_id'=>$editor_id,
            'order_complete_date'=>date("Y-m-d"),
        ]);
        order_accepted::where(['video_id'=>decrypt($req->id)])->delete() ;
        return redirect('editor/active_order')->with(['message'=>'Order have been canceled','condition'=>true]);
    }
    
    public function completed_order(Request $req){
        // $order_completed = order_completed::where(['editor_id'=>$req->session()->get('editor_auth_id')])->first();
        $auth = $req->session()->get('editor_auth_id');
        $completed_order =  \DB::select("SELECT user_auth.name, video_edit.order_date ,  order_completed.order_complete_date ,order_completed.video_id AS id  FROM order_completed LEFT JOIN  video_edit  ON video_edit.id =  order_completed.video_id LEFT JOIN user_auth ON   user_auth.id =  video_edit.auth_id WHERE order_completed.editor_id = '$auth'"); 
        return view("pages.video_editor.completed_order",['completed_order'=>$completed_order]);
    }

    public function dashboard(Request $req){
        $editor_auth_id =  $req->session()->get('editor_auth_id');
        $completed_order  = order_completed::where(['editor_id'=>$editor_auth_id])->count();
        $suggested_order  =  video::where(['is_accept'=>0])->count();
        $order_accept   = order_accepted::where(['editor_id'=>$editor_auth_id])->count();
        $order_cancel    = order_cancel::where(['editor_id'=>$editor_auth_id])->count();
        $req_order =0;
        if(order_accepted::where(['editor_id'=>$req->session()->get('editor_auth_id')])->count() <5){
            $req_order =  video::where(['is_accept'=>0])->count();
        }

        return view("pages.video_editor.dashboard",['completed_order'=>$completed_order,'suggested_order'=>$suggested_order,'order_cencel'=>$order_cancel,'order_accept'=>$order_accept]);

    }
}
