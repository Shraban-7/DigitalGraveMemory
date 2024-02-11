@extends("layout.video_editor_layout")
@section("content")
 
<div class="content-wrapper">
<div class="content-header">
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
    <h5>{{ GoogleTranslate::trans('Dashboard', app()->getLocale()) }}</h5>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="{{URL::to("/")}}">{{ GoogleTranslate::trans('Home', app()->getLocale()) }}</a></li>
    <li class="breadcrumb-item active">{{ GoogleTranslate::trans('Dashboard', app()->getLocale()) }}</li>
    </ol>
    </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="info-box">
          <span class="info-box-icon bg-info"> 
            {{-- <i class="far fa-envelope"></i>  --}}
            <i class="fa fa-brands fa-first-order"></i>
            <i class="fa fa-internet-explorer" aria-hidden="true"></i>
          </span>
          <div class="info-box-content">
            <span class="info-box-text">{{ GoogleTranslate::trans('Suggested Order', app()->getLocale()) }}  </span>
            
            <span class="info-box-number"><a class="info-box-number" href="{{URL::to("/editor/suggested_order")}}">{{$suggested_order}}</a></span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="info-box">
          <span class="info-box-icon bg-info"> 
            {{-- <i class="far fa-envelope"></i>  --}}
            <i class="fa fa-solid fa-clipboard-check"></i>
          </span>
          <div class="info-box-content">
            <span class="info-box-text">{{ GoogleTranslate::trans('Accepted Order', app()->getLocale()) }} </span>
            <span class="info-box-number"> <a href="{{URL::to("/editor/active_order")}} ">{{$order_accept}}</a></span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="info-box">
          <span class="info-box-icon bg-info"> 
            {{-- <i class="far fa-envelope"></i>  --}}
            <i class="fa fa-solid fa-clipboard-list"></i>
          </span>
          <div class="info-box-content">
            <span class="info-box-text">{{ GoogleTranslate::trans('Completed  Order', app()->getLocale()) }} </span>
            <span class="info-box-number"> <a href="{{URL::to("/editor/completed_order")}} ">{{$completed_order}}</a> </span>
          </div>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="info-box">
          <span class="info-box-icon bg-info"> 
            {{-- <i class="far fa-envelope"></i>  --}}
            <i class="fa fa-solid fa-power-off"></i>
          </span>
          <div class="info-box-content">
            <span class="info-box-text">{{ GoogleTranslate::trans('Canceled  Order', app()->getLocale()) }} </span>
            <span class="info-box-number">{{$order_cencel}}</span>
          </div>
        </div>
      </div>

    </div>
      

</div>
</div>

</div>
    
    

    
@endsection