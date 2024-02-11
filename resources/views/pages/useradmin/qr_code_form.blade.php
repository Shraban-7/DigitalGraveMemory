@extends("layout.layout3")
@section("content")
 
<div class="content-wrapper">
<div class="content-header">
<div class="container-fluid">
    <style>
        /* .card-info{
            background: #FEFAE0 !important;
        } */
        .card-info:not(.card-outline)>.card-header {
        background-color: #FEFAE0 !important;
        }
        .card-info:not(.card-outline)>.card-header, .card-info:not(.card-outline)>.card-header a {
    color: black;
    
}
.divider {
  font-size: 30px;
  display: flex;
  align-items: center;
}

.divider::before, .divider::after {
  flex: 1;
  content: '';
  padding: 1px;
  background-color: gray;
  margin: 5px;
}


.btn-block{
background: #B99470 !important;
outline-color: #B99470 !important;
color: white;
font-weight: bold;
}

@media only screen and (min-width: 600px) {
  .btn-block{
  width: 30% !important;
}
}
@media only screen and (max-width: 600px) {
  .btn-block{
  width: 100% !important;
}
 
}


    </style>
 <style>
  #snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: tomato;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  z-index: 1000;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
<div id="snackbar" style="font-weight: bold;font-size:12px">Oops! This option is only for premium QR. Please! purchases first and enjoy it</div>
  @if(base64_decode(Request::get('type')) == 'free')
    @php
          //It is for free
      $qr_free =  App\Models\QR_Model::where(['paid_status'=>'free'])->where(['user_auth_id'=>Session::get('auth_id')])->count();
      if( $qr_free >= 2 ){
        return back();
      }

    @endphp
    @elseif(base64_decode(Request::get('type')) == 'fa_p_l_a_5_10$') 
    @php
      //Family Packs Limited Access
  $qr_fa_p_l_a_5_10 =  App\Models\QR_Model::where(['paid_status'=>'fa_p_l_a_5_10$'])->where(['user_auth_id'=>Session::get('auth_id')])->count();
  $fa_p_l_a_5_10 = App\Models\qr_payment_info::where(['qr_price_info'=>'fa_p_l_a_5_10$'])->where(['payer_id'=>Session::get('auth_id')])->count() ;

      if($fa_p_l_a_5_10>0&&($fa_p_l_a_5_10*5)<= $qr_fa_p_l_a_5_10){
        return back();
      }
       
    @endphp

    @elseif (base64_decode(Request::get('type')) == 'pr_a_s_p_1_7$')
    @php
      //Premium Access Single profile
  $qr_pr_a_s_p_1_7 = App\Models\QR_Model::where(['paid_status'=>'pr_a_s_p_1_7$'])->where(['user_auth_id'=>Session::get('auth_id')])->count() ;
  $pr_a_s_p_1_7 = App\Models\qr_payment_info::where(['qr_price_info'=>'pr_a_s_p_1_7$'])->where(['payer_id'=>Session::get('auth_id')])->count() ;
 
        if($pr_a_s_p_1_7>0&& ($pr_a_s_p_1_7 * 1) <= $qr_pr_a_s_p_1_7){
        
          return back();
        }

    @endphp
    @elseif (base64_decode(Request::get('type')) == 'fa_pa_ac_10_55$')
    @php

  //Family Packs Premium Access
  $qr_fa_pa_ac_10_55 = App\Models\QR_Model::where(['paid_status'=>'fa_pa_ac_10_55$'])->where(['user_auth_id'=>Session::get('auth_id')])->count() ;
  $fa_pa_ac_10_55 = App\Models\qr_payment_info::where(['qr_price_info'=>'fa_pa_ac_10_55$'])->where(['payer_id'=>Session::get('auth_id')])->count() ;

        if($fa_pa_ac_10_55>0&&($fa_pa_ac_10_55 * 10)<=$qr_fa_pa_ac_10_55){
          return back();

        }
    @endphp
  @endif
  
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
  
    <div class="card card-info" >
        <div class="card-header ">
             {{ GoogleTranslate::trans('QR-Code  Scanner Profile', app()->getLocale()) }} 
        </div>
            @if(session()->get('errors'))
            <div class="alert alert-danger ">
            {{ session()->get('errors')->first() }}
            </div>
            @endif
           
        <div class="card-body">
            {{-- <div class="row g-0 text-center" id="horizontal_divider">
                <label id="divider" class="divider"><span id="divider_label">{{ GoogleTranslate::trans('OR', app()->getLocale()) }}</span></label>
              </div> --}}
              <h5 class="text-muted">{{ GoogleTranslate::trans('Primary info', app()->getLocale()) }} </h5>
              <hr>
            <form action="{{URL::to("/create_qr")}}" class="row" method="post" enctype="multipart/form-data">
                <div class="form-group col-lg-6 col-sm-12 col-md-6">
                  <label for="">{{ GoogleTranslate::trans('Name', app()->getLocale()) }}</label>
                  <input type="text" value="{{old('full_name')}}" name="full_name" id="" class="form-control" placeholder="Enter Name" >
                  {{-- <small id="helpId" class="text-muted">{{ GoogleTranslate::trans('Help text', app()->getLocale()) }}</small> --}}
                </div>
                <div class="form-group col-lg-6 col-sm-12 col-md-6">
                    <label for="">{{ GoogleTranslate::trans('Birth day', app()->getLocale()) }} </label>
                    <input type="text"  value="{{old('birth_day')}}" name="birth_day" id="" class="form-control" placeholder="Enter Birth day " aria-describedby="helpId">
                    <input type="hidden" name="paid_status" value="{{Request::get('type')}}" >
                  </div>

                  <div class="form-group col-lg-6 col-sm-12 col-md-6">
                    <label for="">{{ GoogleTranslate::trans('Passed Away (optional)', app()->getLocale()) }}</label>
                    <input type="text" name="passed_away"  value="{{old('passed_away')}}"  class="form-control" placeholder="Enter Passed Away " >
                  </div>
                  @csrf
                  <div class="form-group col-lg-6 col-sm-12 col-md-6">
                    <label for=""> {{ GoogleTranslate::trans('Bio', app()->getLocale()) }} </label>
                    <input type="text" name="bio"  value="{{old('bio')}}"  class="form-control" placeholder="Enter  Bio" aria-describedby="helpId">
                  </div>

                  <div class="form-group col-lg-6 col-sm-12 col-md-6">
                    <label for="">{{ GoogleTranslate::trans('Profile Image (200 x 200)', app()->getLocale()) }}</label>
                    <input type="file" name="profile_img" class="form-control" placeholder="Enter Slug" aria-describedby="helpId">
                  </div>
                  <h5 class="text-muted">{{ GoogleTranslate::trans('Diary', app()->getLocale()) }} </h5>
                  <hr>
                  <textarea id="summernote" name="diary">{{old('diary')}}</textarea>
                  <br>
                  @php
                     $type =  base64_decode(Request::get('type'));
                  @endphp
                 
                  <br>
                  <h5 class="text-muted">{{ GoogleTranslate::trans('Photos', app()->getLocale()) }} </h5>
                  <hr>
                  <div class="form-group col-lg-6 col-sm-12 col-md-6">
                    <label for="">{{ GoogleTranslate::trans('Upload Photos', app()->getLocale()) }} </label>
                    <input  @if($type == 'fr_to_1_7$' || $type == 'pr_a_s_p_1_7$' ||$type == 'fa_pa_ac_10_55$' ) type="file"  name="img_path" @else readonly onclick="handle_premuim()"  @endif  class="form-control" placeholder="Upload file" aria-describedby="helpId">
                  </div>

                  <div class="form-group col-lg-6 col-sm-12 col-md-6">
                    <label for=""> {{ GoogleTranslate::trans('Photo Title', app()->getLocale()) }} </label>
                    <input  @if($type == 'fr_to_1_7$' || $type == 'pr_a_s_p_1_7$' ||$type == 'fa_pa_ac_10_55$' )  type="text"  name="img_title" value="{{old('img_title')}}" @else readonly onclick="handle_premuim()" @endif class="form-control" placeholder="Enter Photo Title " >
                  </div>
                  <br>
                  <h5>Videos</h5>
                  <p class="text-muted">{{ GoogleTranslate::trans('We provide premium quality videos.', app()->getLocale()) }} <a href="{{URL::to("/video")}}" class="text-muted">{{ GoogleTranslate::trans('Close', app()->getLocale()) }}click here for premium quality video</a> </p>

                  <hr>
                  <div class="form-group col-lg-6 col-sm-12 col-md-6">
                    <label for=""> {{ GoogleTranslate::trans('Youtube Embed URL', app()->getLocale()) }} </label>
                    <input  @if($type == 'fr_to_1_7$' || $type == 'pr_a_s_p_1_7$' ||$type == 'fa_pa_ac_10_55$' )  type="text" name="video"  value="{{old('video')}}" @else readonly onclick="handle_premuim()" @endif class="form-control" placeholder="Enter Youtube Embed URL " aria-describedby="helpId">
                  </div>

                  <div class="form-group col-lg-6 col-sm-12 col-md-6">
                    <label for=""> {{ GoogleTranslate::trans('Video Title', app()->getLocale()) }}  </label>
                    <input  @if($type == 'fr_to_1_7$' || $type == 'pr_a_s_p_1_7$' ||$type == 'fa_pa_ac_10_55$' )  type="text" name="video_title"  value="{{old('video_title')}}" @else readonly onclick="handle_premuim()" @endif class="form-control" placeholder="Enter Video Title  " aria-describedby="helpId">
                  </div>

                  {{-- <div class="form-group col-lg-6 col-sm-12 col-md-6">
                    <label for=""> {{ GoogleTranslate::trans('Description', app()->getLocale()) }}  </label>
                    <input type="text" name="video_description" id="" class="form-control" placeholder="Enter Description" aria-describedby="helpId">
                  </div> --}}
                  
                  <br>
                  <h5>{{ GoogleTranslate::trans('Moments', app()->getLocale()) }}</h5>
                  <hr>
                  <div class="form-group col-lg-6 col-sm-12 col-md-6">
                    <label for=""> {{ GoogleTranslate::trans('Moments', app()->getLocale()) }} </label>
                    {{-- <input type="text" name="tributes" id="" class="form-control" placeholder="Enter Description" aria-describedby="helpId"> --}}
                    <textarea class="form-control" placeholder="You can share your best moments with him in this box."  @if($type == 'fr_to_1_7$' || $type == 'pr_a_s_p_1_7$' ||$type == 'fa_pa_ac_10_55$' )  name="tributes" @else readonly onclick="handle_premuim()" @endif id="" cols="30" rows="7">{{old('tributes')}}</textarea>
                   </div>

                   <br>
                   <h5>{{ GoogleTranslate::trans('Cemetery Information', app()->getLocale()) }}</h5>
                   <hr>

                   <div class="form-group col-lg-6 col-sm-12 col-md-6">
                    <label for=""> {{ GoogleTranslate::trans('Cemetery Name', app()->getLocale()) }}  </label>
                    <input  @if($type == 'fr_to_1_7$' || $type == 'pr_a_s_p_1_7$' ||$type == 'fa_pa_ac_10_55$' )  type="text" name="cemetery_name" value="{{old('cemetery_name')}}" @else readonly onclick="handle_premuim()" @endif class="form-control" placeholder="Enter Cemetery Name" >
                  </div>

                   <div class="form-group col-lg-6 col-sm-12 col-md-6">
                    <label for=""> {{ GoogleTranslate::trans('Cemetery plot number', app()->getLocale()) }}  </label>
                    <input  @if($type == 'fr_to_1_7$' || $type == 'pr_a_s_p_1_7$' ||$type == 'fa_pa_ac_10_55$' )  type="text" name="cemetery_plot_number" value="{{old('cemetery_plot_number')}}" @else readonly onclick="handle_premuim()" @endif class="form-control" placeholder="Enter Cemetery plot number" aria-describedby="helpId">
                  </div>

                   <div class="form-group col-lg-6 col-sm-12 col-md-6">
                    <label for="">{{ GoogleTranslate::trans('Cemetery Location', app()->getLocale()) }}</label>
                    <input  @if($type == 'fr_to_1_7$' || $type == 'pr_a_s_p_1_7$' ||$type == 'fa_pa_ac_10_55$' )  type="text" name="cemetery_plot_location" value="{{old('cemetery_plot_location')}}" @else readonly onclick="handle_premuim()" @endif class="form-control" placeholder="Enter Cemetery Location" aria-describedby="helpId">
                  </div>
                  {{-- @endif --}}
                  <div class="form-group col-lg-12 col-sm-12 col-md-12">
                    <br>
                   <button class="btn btn-sm btn-block btn-warning">{{ GoogleTranslate::trans('Submit', app()->getLocale()) }} </button>
                  </div>
              

            </form>
        </div>
    </div>

</div>
</div>

</div>
    
    
<script>
   $('#summernote').summernote({
  height: 300,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: true,
  toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'insert', [ 'link'] ],
            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
        ]                  // set focus to editable area after initializing summernote
});

function handle_premuim(){
    // alert("Please Loin first")
    var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
  }


    </script>
    
@endsection