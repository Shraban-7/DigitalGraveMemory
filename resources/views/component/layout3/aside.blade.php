<aside class="main-sidebar sidebar-light-primary elevation-4">
    <div class="sidebar">    
    <nav class="mt-2">

    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
        <a href="{{URL::to("/")}}" class="nav-link">
        <i class="nav-icon fa fa-home" aria-hidden="true"></i>
        <p>{{ GoogleTranslate::trans('Home', app()->getLocale()) }}</p>
        </a>
        </li>

    <li class="nav-item">
    <a href="{{URL::to("/qr_dashboard")}}" class="nav-link">
    <i class=" nav-icon fa fa-dashcube" aria-hidden="true"></i>
    <p>{{ GoogleTranslate::trans('Dashboard', app()->getLocale()) }}</p>
    </a>
    </li>
    <li class="nav-item ">
    <a href="#" class="nav-link ">
    <i class="nav-icon fa fa-qrcode" aria-hidden="true"></i>
    <p>
    {{ GoogleTranslate::trans('QR-Code', app()->getLocale()) }} 
    <i class="right fas fa-angle-left"></i>
    </p>
    </a>
    <ul class="nav nav-treeview">
        
    <li class="nav-item">
    <a href="{{URL::to("/QR_Code")}}" class="nav-link ">
    <i class="fa fa-list-alt  nav-icon" aria-hidden="true"></i>
    <p>{{ GoogleTranslate::trans('My QR-Code', app()->getLocale()) }}</p>
    </a>
    </li>
    @php
    //It is for free
    $qr_free =  App\Models\QR_Model::where(['paid_status'=>'free'])->where(['user_auth_id'=>Session::get('auth_id')])->count();

    //Family Packs Limited Access
    $qr_fa_p_l_a_5_10 =  App\Models\QR_Model::where(['paid_status'=>'fa_p_l_a_5_10$'])->where(['user_auth_id'=>Session::get('auth_id')])->count();
    $fa_p_l_a_5_10 = App\Models\qr_payment_info::where(['qr_price_info'=>'fa_p_l_a_5_10$'])->where(['payer_id'=>Session::get('auth_id')])->count() ;

    //Premium Access Single profile
    $qr_pr_a_s_p_1_7 = App\Models\QR_Model::where(['paid_status'=>'pr_a_s_p_1_7$'])->where(['user_auth_id'=>Session::get('auth_id')])->count() ;
    $pr_a_s_p_1_7 = App\Models\qr_payment_info::where(['qr_price_info'=>'pr_a_s_p_1_7$'])->where(['payer_id'=>Session::get('auth_id')])->count() ;
    //Family Packs Premium Access
    $qr_fa_pa_ac_10_55 = App\Models\QR_Model::where(['paid_status'=>'fa_pa_ac_10_55$'])->where(['user_auth_id'=>Session::get('auth_id')])->count() ;
    $fa_pa_ac_10_55 = App\Models\qr_payment_info::where(['qr_price_info'=>'fa_pa_ac_10_55$'])->where(['payer_id'=>Session::get('auth_id')])->count() ;

    // @dd( $qr_fa_p_l_a_5_10 )

    @endphp
    @if( $qr_free < 2 )
    <li class="nav-item">
    <a href="{{URL::to("/qr_code_form")}}?type={{base64_encode('free')}}" class="nav-link ">
    <i class="far fa-circle nav-icon"></i>
    <p>{{ GoogleTranslate::trans('Create QR-Code', app()->getLocale()) }}  </p>
    </a>
    </li>
    {{-- @else --}}
    @elseif ($fa_p_l_a_5_10>0&&($fa_p_l_a_5_10*5)>$qr_fa_p_l_a_5_10)
    <li class="nav-item">
        <a href="{{URL::to("/qr_code_form")}}?type={{base64_encode('fa_p_l_a_5_10$')}}" class="nav-link ">
        <i class="far fa-circle nav-icon"></i>
        <p>{{ GoogleTranslate::trans('Create QR-Code', app()->getLocale()) }} </p>
        </a>
        </li>    
        @elseif ($pr_a_s_p_1_7>0&& ($pr_a_s_p_1_7 * 1)>$qr_pr_a_s_p_1_7)

        <li class="nav-item">
            <a href="{{URL::to("/qr_code_form")}}?type={{base64_encode('pr_a_s_p_1_7$')}}" class="nav-link ">
            <i class="far fa-circle nav-icon"></i>
            <p>{{ GoogleTranslate::trans('Create QR-Code', app()->getLocale()) }}  </p>
            </a>
            </li> 
            @elseif ($fa_pa_ac_10_55>0&&($fa_pa_ac_10_55 * 10)>$qr_fa_pa_ac_10_55)
            <li class="nav-item">
                <a href="{{URL::to("/qr_code_form")}}?type={{base64_encode('fa_pa_ac_10_55$')}}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>{{ GoogleTranslate::trans('Create QR-Code', app()->getLocale()) }}  </p>
                </a>
                </li> 

   @endif
    </ul>
    </li>
    @if(App\Models\video::where(['auth_id'=>Session::get('auth_id')])->count() >0)
    <li class="nav-item ">
    <a href="#" class="nav-link ">
    {{-- <i class="nav-icon fa fa-qrcode" aria-hidden="true"></i> --}}
    <i class=" nav-icon fa fa-video-camera" aria-hidden="true"></i>
    <p>
    {{ GoogleTranslate::trans('Premium Video', app()->getLocale()) }}
    <i class="right fas fa-angle-left"></i>
    </p>
    </a>
    <ul class="nav nav-treeview">
        
    <li class="nav-item">
    <a href="{{URL::to("/my_premium_video")}}" class="nav-link ">
    <i class="fa fa-list-alt  nav-icon" aria-hidden="true"></i>
    <p>{{ GoogleTranslate::trans('My premium video', app()->getLocale()) }}</p>
    </a>
    </li>
    </ul>
    </li>
    @endif
    </ul>
    </nav>
    
    </div>
    
    </aside>