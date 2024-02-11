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
    <a href="{{URL::to("editor/dashboard")}}" class="nav-link">
    <i class=" nav-icon fa fa-dashcube" aria-hidden="true"></i>
    <p>{{ GoogleTranslate::trans('Dashboard', app()->getLocale()) }}</p>
    </a>
    </li>
    <li class="nav-item ">
    <a href="#" class="nav-link ">
    <i class="nav-icon fa fa-qrcode" aria-hidden="true"></i>
    <p>
    {{ GoogleTranslate::trans('My work', app()->getLocale()) }} 
    <i class="right fas fa-angle-left"></i>
    </p>
    </a>
    <ul class="nav nav-treeview">
        
    <li class="nav-item">
    <a href="{{URL::to("/editor/suggested_order")}}" class="nav-link ">
    <i class="fa fa-list-alt  nav-icon" aria-hidden="true"></i>
    <p>{{ GoogleTranslate::trans('Suggested order', app()->getLocale()) }}</p>
    </a>
    </li>
    
    <li class="nav-item">
    <a href="{{URL::to("/editor/active_order")}}" class="nav-link ">
    <i class="fa fa-list-alt  nav-icon" aria-hidden="true"></i>
    <p>{{ GoogleTranslate::trans('Accepted order', app()->getLocale()) }} </p>
    </a>
    </li>

    <li class="nav-item">
    <a href="{{URL::to("/editor/completed_order")}}" class="nav-link ">
    <i class="fa fa-list-alt  nav-icon" aria-hidden="true"></i>
    <p>{{ GoogleTranslate::trans('Completed order', app()->getLocale()) }}</p>
    </a>
    </li>
{{-- 
    <li class="nav-item">
        <a href="/qr_code_form" class="nav-link ">
        <i class="far fa-circle nav-icon"></i>
        <p>{{ GoogleTranslate::trans('Create QR-Code', app()->getLocale()) }}</p>
        </a>
        </li>
   
    </ul>
    </li>
    <li class="nav-item ">
    <a href="#" class="nav-link ">
    <i class="nav-icon fa fa-qrcode" aria-hidden="true"></i>
    <p>
    {{ GoogleTranslate::trans('Premium Video', app()->getLocale()) }}
    <i class="right fas fa-angle-left"></i>
    </p>
    </a>
    <ul class="nav nav-treeview">
        
    <li class="nav-item">
    <a href="/QR_Code" class="nav-link ">
    <i class="fa fa-list-alt  nav-icon" aria-hidden="true"></i>
    <p>{{ GoogleTranslate::trans('My QR-Code', app()->getLocale()) }}</p>
    </a>
    </li>

    <li class="nav-item">
        <a href="/qr_code_form" class="nav-link ">
        <i class="far fa-circle nav-icon"></i>
        <p>{{ GoogleTranslate::trans('Create QR-Code', app()->getLocale()) }}</p>
        </a>
        </li>
   
    </ul>
    </li> --}}

    {{-- <li class="nav-item ">
        <a href="#" class="nav-link ">
        <i class="nav-icon fa fa-video-camera" aria-hidden="true"></i>
        <p>
        
        <i class="right fas fa-angle-left"></i>
        </p>
        </a>
        <ul class="nav nav-treeview">
        <li class="nav-item">
        <a href="#" class="nav-link ">
        <i class="far fa-circle nav-icon"></i>
        <p>Active Page</p>
        </a>
        </li>
       
        </ul>
        </li> --}}

    </ul>
    </nav>
    
    </div>
    
    </aside>