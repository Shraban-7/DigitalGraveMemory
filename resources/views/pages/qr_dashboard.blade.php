@extends("layout.layout3")
@section("content")
 
<div class="content-wrapper">
<div class="content-header">
<div class="container-fluid">

  <div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="info-box">
        <span class="info-box-icon bg-info"> 
          {{-- <i class="far fa-envelope"></i>  --}}
          <i class="fa fa-qrcode" aria-hidden="true"></i>
        </span>
        <div class="info-box-content">
          <span class="info-box-text">{{ GoogleTranslate::trans("Total QR", app()->getLocale()) }} </span>
          <span class="info-box-number">
            <a href="{{URL::to("/QR_Code")}} ">
              {{App\Models\QR_Model::where(['user_auth_id'=>Session::get('auth_id')])->count()}}
          </a>
         </span>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="info-box">
        <span class="info-box-icon bg-info"> 
          {{-- <i class="far fa-envelope"></i>  --}}
          {{-- <i class="fa fa-qrcode" aria-hidden="true"></i> --}}
          <i class="fa fa-qrcode" aria-hidden="true"></i>
        </span>
        <div class="info-box-content">
          <span class="info-box-text">{{ GoogleTranslate::trans("Normal QR", app()->getLocale()) }}  </span>
          <span class="info-box-number"> <a href="{{URL::to("/QR_Code")}} ">
            {{App\Models\QR_Model::where(['user_auth_id'=>Session::get('auth_id')])->where(['paid_status'=>'free'])->orWhere(['paid_status'=>'fa_p_l_a_5_10$'])->count()}}
          </a> </span>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="info-box">
        <span class="info-box-icon bg-info"> 
         
          <i class="fa fa-qrcode" aria-hidden="true"></i>        </span>
        <div class="info-box-content">
          <span class="info-box-text">{{ GoogleTranslate::trans("Premium QR", app()->getLocale()) }}  </span>
          <span class="info-box-number"> <a href="{{URL::to("/QR_Code")}} ">
            {{App\Models\QR_Model::where(['user_auth_id'=>Session::get('auth_id')])->where(['paid_status'=>'fr_to_1_7$'])->orWhere(['paid_status'=>'pr_a_s_p_1_7$'])->orWhere(['paid_status'=>'fa_pa_ac_10_55$'])->count()}}

          </a> </span>
        </div>
      </div>
    </div>
    @if(App\Models\video::where(['auth_id'=>Session::get('auth_id')])->count() >0)
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="info-box">
        <span class="info-box-icon bg-info"> 
          <i class="fa fa-file-video-o" aria-hidden="true"></i>
         </span>
        <div class="info-box-content">
          <span class="info-box-text">{{ GoogleTranslate::trans("Video Editing", app()->getLocale()) }}</span>
          <span class="info-box-number"> <a href="{{URL::to("/my_premium_video")}} ">
            {{App\Models\video::where(['auth_id'=>Session::get('auth_id')])->count()}}

          </a> </span>
        </div>
      </div>
    </div>

    @endif
    
  </div>


      

</div>
</div>

</div>
    
    

    
@endsection