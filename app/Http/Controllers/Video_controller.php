<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\video;
class Video_controller extends Controller
{
    public function video_edit_user_info(Request $req){
        if(isset($req->is_payment)){
    $result =  video::insert([
        'drive_link'=>$req->session()->get("drive_link"),
        'relationship'=>$req->session()->get("relationship"),
        'specific_music_link'=>$req->session()->get("specific_music_link"),
        'shown_beginning'=>$req->session()->get("shown_beginning"),
        'video_type'=>$req->session()->get("video_type"),
        'about_your_desired_video'=>$req->session()->get("about_your_desired_video"),
        'editing_price'=>$req->session()->get("editing_price"),
        'auth_id'=>$req->session()->get('auth_id'),
        'order_date'=>date("Y-m-d"),
    ]);
        if( $result){
            return redirect('/video')->with('success',' Successfully Requested');

        }else{
            return redirect('/video')->with('error',' Opps!  Request failed');

        }
        }

     if(isset($req->editing_price)){
        $req->validate(['editing_price' => 'required|max:255']);
        // return $req;
        $req->session()->put([
            'drive_link'=>$req->drive_link,
        ]);
   

    return view('pages.video_price_payment');
     }

    $req->validate([ 
        'drive_link'=>'required',
        'relationship'=>'required',
        'shown_beginning'=>'required',
        'video_type'=>'required',
        'about_your_desired_video'=>'required',
        'specific_music_link'=>'required',
    ]);
    $req->session()->put([
    'drive_link'=>$req->drive_link,
    'relationship'=>$req->relationship,
    'specific_music_link'=>$req->specific_music_link,
    'shown_beginning'=>$req->shown_beginning,
    'video_type'=>$req->video_type,
    'about_your_desired_video'=>$req->about_your_desired_video,
    ]);
  return redirect("/video_price");


    }

    public function my_premium_video(Request $req){
        $video = video::where(['auth_id'=>$req->session()->get('auth_id')])->get();
        return view("pages.useradmin.my_premium_video",['video'=>$video]);
    }

    public function details_premium_video(Request $req ,$id){
         $id =  base64_decode($id);
         $video=  video::where(['id'=>$id])->first();
        return view("pages.useradmin.details_premium_video",['video'=>$video]);
    }
}
