<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\Qr_Mail;
use App\Models\QR_Model;
use App\Models\User_auth;
use Illuminate\Http\Request;
use App\Models\tributes_link;
use App\Models\qr_photos_link;
use App\Models\qr_payment_info;
use Illuminate\Support\Facades\DB;
use  SimpleSoftwareIO\QrCode\Facades\QrCode;

class QR extends Controller
{
   public function create_qr(Request $req){

//    return $this->upload_image($req->file("img_path"));

    // return  $this->upload_image($req->file("profile_img"));

    $req->validate([
        'img_path' => 'image|mimes:png,jpg,jpeg',
        'profile_img' =>'required|image|mimes:png,jpg,jpeg',
        'full_name' => 'required|max:255',
        'birth_day' => 'required|max:255',
        'bio' => 'required|',
        'paid_status' => 'required',
        // 'death_day' => 'required|max:255',
        'diary' => 'required|',
        // 'img_path' => 'required',
        'img_title' => 'max:255',
        // 'youtube_link' => 'required|max:255',
        // 'video_title' => 'max:255',
        // 'video_description' => 'required|max:255',
        // 'tribute_type' => 'required|max:255',
        // 'tributes' => 'required',
        // 'cemetery_name' => 'max:255',
        // 'cemetery_plot_number' => 'max:255',
        // 'cemetery_plot_location' => 'max:255',
    ]);
    // return $req;
   $insert_id =  QR_Model::insertGetId([

        'full_name'=>$req->full_name,
        'birth_day'=>$req->birth_day,
        'profile_img'=>$this->upload_image($req->file("profile_img")),
        'slug'=>$req->bio,
        'death_day'=>$req->passed_away,
        'bio'=>$req->diary,
        'youtube_link'=>$req->video,
        'video_title'=>$req->video_title,
        // 'video_description'=>$req->video_description,
        'cemetery_name'=>$req->cemetery_name,
        'cemetery_plot_number'=>$req->cemetery_plot_number,
        'cemetery_plot_location'=>$req->cemetery_plot_location,
        'paid_status'=>base64_decode($req->paid_status),
        'user_auth_id'=>$req->session()->get('auth_id'),


    ]);

    qr_photos_link::insert([
        'photo'=>$this->upload_image($req->file("img_path")?? null),
        'qr_id'=>$insert_id,
        'title'=>$req->img_title,
    ]);

    tributes_link::insert([
        'qr_id'=>$insert_id,
        'tributes_link'=>$req->tributes,
    ]);

    return redirect("/QR_Code")->with(['condition'=>true,'message'=>'Successfully Inserted']);


   }

   public function QR_Code(Request $req){
     $qr_data =  DB::table('qr_payment_info')
     ->join('qr_profile', 'qr_payment_info.payer_id', '=', 'qr_profile.user_auth_id')
     ->where('qr_payment_info.payer_id', $req->session()->get('auth_id'))
     ->get();
    return view("pages.useradmin.all_qr_code",['qr_data'=>$qr_data]);
   }




    public static function generateQRCode($id)
    {
        $htmlPageUrl = \URL::to("/qr_profile/$id");
       return QrCode::size(50)->generate("$htmlPageUrl");
    }

    public static function downloadQRCode($id)
    {
        $htmlPageUrl = \URL::to("/qr_profile/$id");
       return QrCode::size(335)->generate("$htmlPageUrl");
    }



    public function qr_profile($id){
        $id = base64_decode($id);
       $qr_data=  QR_Model::where(['id'=>$id])->first();
       $tributes_link=  tributes_link::where(['qr_id'=>$id])->get();
       $qr_photos_link=  qr_photos_link::where(['qr_id'=>$id])->get();
       $religion = User_auth::where(['id'=>$qr_data->user_auth_id])->first()->religion;
    //    $qr_data->
    //    $qr_data->religion

        if($qr_data != null){
            return view('pages.qr_profile',['qr_data'=>$qr_data,'qr_photos_link'=>$qr_photos_link,'tributes_link'=>$tributes_link,'religion'=>$religion]);

        }else {
            return redirect("/");
        }
    }

    public function show_qr_data($id){
        $id = base64_decode($id);
        $qr_data=  QR_Model::where(['id'=>$id])->first();
        $tributes_link=  tributes_link::where(['qr_id'=>$id])->get();
        $qr_photos_link=  qr_photos_link::where(['qr_id'=>$id])->get();

        if($qr_data != null){
            return view('pages.useradmin.show_qr_data',['qr_data'=>$qr_data,'qr_photos_link'=>$qr_photos_link,'tributes_link'=>$tributes_link]);

            // return view('pages.useradmin.show_qr_data',['qr_data'=>$qr_data]);

        }else {
            return redirect("/");
        }
    }

    public function add_pub_moments(Request $req){
        $req->validate([
        'qr_id' => 'required',
        'tributes_link' =>'required',
       ]);
        tributes_link::insert([
            'qr_id'=>$req->qr_id,
            'tributes_link'=>$req->tributes_link,
        ]);
        $id = base64_encode($req->qr_id);
        return redirect("/qr_profile/$id")->with(['condition'=>true,'message'=>'Successfully Inserted']);

    }

    public function qr_data_update(Request $req){
       $base_64_id = base64_encode($req->id);
     if(isset($req->full_name)){

        $req->validate([
            'full_name' => 'required|max:255',
            'birth_day' => 'required|max:255',
            'slug' => 'required|',
            'death_day' => 'required|max:255',
        ]);
        QR_Model::where(['id'=>$req->id])->update([
            'full_name'=>$req->full_name,
            'birth_day'=>$req->birth_day,
            'death_day'=>$req->death_day,
            'slug'=>$req->slug,
        ]);
        if(isset($req->profile_img)){
            $req->validate(['profile_img' =>'required|image|mimes:png,jpg,jpeg',]);

            QR_Model::where(['id'=>$req->id])->update([
                'profile_img'=>$this->update_img($req->profile_img,$req->profile_img_path),
            ]);

        }
        return redirect("/show_qr_data/$base_64_id")->with(['condition'=>true,'message'=>'Updated Success']);
     }else if(isset($req->bio)){
        QR_Model::where(['id'=>$req->id])->update([
            'bio'=>$req->bio,

        ]);
        return redirect("/show_qr_data/$base_64_id")->with(['condition'=>true,'message'=>'Updated Success']);

     }else if(isset($req->video)){
        $req->validate([
            'video' => 'required',
            'video_title' => 'required|max:255',
            // 'video_description' => 'required|',

        ]);
        QR_Model::where(['id'=>$req->id])->update([
            'youtube_link'=>$req->video,
            'video_title'=>$req->video_title,
            // 'video_description'=>$req->video_description,
        ]);
        return back()->with(['condition'=>true,'message'=>'Updated Success']);

     }else if(isset($req->cemetery_name)){
        $req->validate([
            'cemetery_name' => 'required|max:255',
            'cemetery_plot_number' => 'required|max:255',
            'cemetery_plot_location' => 'required|max:255',

        ]);
        QR_Model::where(['id'=>$req->id])->update([
            'cemetery_name'=>$req->cemetery_name,
            'cemetery_plot_number'=>$req->cemetery_plot_number,
            'cemetery_plot_location'=>$req->cemetery_plot_location,
        ]);
        return redirect("/show_qr_data/$base_64_id")->with(['condition'=>true,'message'=>'Updated Success']);

     }

    }

    public function delete_sub_qr(REquest $req){
        // return $req;
        // dd($req->all());
        $base_64_id = base64_encode($req->id);
        if(isset($req->qr_photo)){

             $this->delete_img(qr_photos_link::where(['id'=>$req->qr_photo])->first()->photo);
             qr_photos_link::where(['id'=>$req->qr_photo])->delete();
             return redirect("/show_qr_data/$base_64_id")->with(['condition'=>true,'message'=>'Deleted Success']);

        }else if($req->qr_tribute){
            tributes_link::where(['id'=>$req->qr_tribute])->delete();
            return redirect("/show_qr_data/$base_64_id")->with(['condition'=>true,'message'=>'Deleted Success']);

        }
    }

    public function add_sub_qr(Request $req){
        // return $req;
        if(isset($req->tributes_link)){
            $req->validate([
                'tributes_link' => 'required',
                'qr_id' => 'required|max:255',
            ]);
            tributes_link::insert([
                'qr_id'=>$req->qr_id,
                'tributes_link'=>$req->tributes_link,
            ]);
            return redirect("/QR_Code")->with(['condition'=>true,'message'=>'Added Success']);


        }else if(isset($req->photo)){
            // return $req;
            qr_photos_link::insert([
                'photo'=>$this->upload_image($req->file("photo")),
                'qr_id'=>$req->qr_id,
                'title'=>$req->title,
            ]);
            return redirect("/QR_Code")->with(['condition'=>true,'message'=>'Added Success']);

        }
    }


    public function payment_qr(Request $req){

        if($req->pa =='fa_p_l_a_5_10$'){
            \Session::put(['amount'=>10,'pack'=>'fa_p_l_a_5_10$']);

        }else if($req->pa =='fr_to_1_7$'){
            \Session::put(['amount'=>7,'pack'=>'fr_to_1_7$']);
        }else if($req->pa =='pr_a_s_p_1_7$'){
            \Session::put(['amount'=>7,'pack'=>'pr_a_s_p_1_7$']);
        }else if($req->pa =='fa_pa_ac_10_55$'){
            \Session::put(['amount'=>55,'pack'=>'fa_pa_ac_10_55$']);

        }else{
            return back();
        }

        return view("pages.payment_qr");
    }

   public  function request_payment  (Request $req){

    $session =  $req->session()->all();
    $result =  qr_payment_info::insert([
        'payer_id'=>$session["auth_id"],
        'amount'=>$session["amount"],
        'qr_price_info'=>$session["pack"],
    ]);

    if($result){
        return redirect("/shop")->with('success','Payment Seccess');
    }else{
        return redirect("/shop")->with('error','Payment failed');

    }
   }

   public function qr_public_download($id){
    // $id = base64_decode($id);
   return view("pages.qr_public_download",['id'=>$id]);

   }

   public function normal_to_premium($id){
    $id =  base64_decode($id);
   $result =  QR_Model::where(['id'=>$id])->update([
        'paid_status'=>'fr_to_1_7$',
    ]);
    if( $result){
        return back()->with('success','Converted Free to Premium  QR profile');
    }else{
        return back()->with('error','failed Convert Free to Premium  QR profile');

    }
   }
   public function qr_mail($id){
    $email = User_auth::where(['id'=>\Session::get("auth_id")])->first()->mail;
    // dd($email );
    Mail::to(trim($email))->send(new Qr_Mail(base64_encode($id)));
    return back()->with("success","QR code Sent in your mail");
   }

   public function qr_religion_check(Request $req){
    User_auth::where(['id'=>\Session::get("auth_id")])->update([
        'religion'=>$req->religion
    ]);
    return redirect('/qr_dashboard')->with(['message'=>'You are successfully logged in','condition'=>true]);

   }

}
