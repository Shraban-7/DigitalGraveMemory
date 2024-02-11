<!DOCTYPE html>
<html lang="en"><head>
     
      <title>Digital Grave Memory</title>
  
      <!-- Meta Tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="/assets/favicon-3e8308d17871370f37a40e517410a01e4b6374f0db13dc5a44cf9c0c954a9d31.ico">
  
  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{asset("assets/application.css")}}">
  <link rel="stylesheet" href="{{asset("assets/custom.css")}}">
  
  {{-- <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600&amp;display=swap" rel="stylesheet">
  
  --}}

  
    <body class="body_layout_login" >
      <main class="body_layout_login">
  
        <div class="row">
    <div class="col">
      <!-- FLASH ALERT -->
      
    </div>
  </div>
  
    <!-- Container START -->
    <div class="container">
      <div class="row justify-content-center align-items-center vh-100 py-1 py-md-4">
        <!-- Main content START -->
        <div class="col-sm-10 col-md-6 col-lg-6 col-xl-5 col-xxl-5">
          <!-- Sign in START -->
          <div class="card card-body p-5 p-sm-5 card_auth_shadow">
            <img class="light-mode-item navbar-brand-item" alt="Digital Grave Memory logo" src="{{asset("assets/cdn/shop/files/Asset_2adobe_200x.png")}}">
            <br>
            <!-- Title -->
            <h5 class="mb-3 text-gray text-center">{{ GoogleTranslate::trans('Forget password', app()->getLocale()) }}</h5>
            <p class="text-center">{{ GoogleTranslate::trans('Please enter your email', app()->getLocale()) }} </p>
            <br>
  
            @if (session('message'))
            <div class="alert @if(session('condition') == true) alert-success @else alert-danger @endif">
                {{ session('message') }}
            </div>
          @endif

            <!-- Form START -->
            <form id="sign_in_form" action="{{URL::to("/otp_send")}}" accept-charset="UTF-8" method="post" novalidate="novalidate" data-gtm-form-interact-id="0">
          
              <!-- Email -->
              <div class="d-flex justify-content-between">
                <h6>{{ GoogleTranslate::trans('Enter OTP :', app()->getLocale()) }}</h6>
              </div>
              <div class="input-group-lg">
                <input type="text" name="my_otp" class="form-control valid" placeholder="123456" autofocus="autofocus">
                @csrf
              </div>
           
             
              
              <div>
                <!-- Button -->
                <div class="d-grid" id="submit_button" style="height: auto !important;">
                  <button type="submit" class="btn btn-gold" id="button_auth_submit">{{ GoogleTranslate::trans('Submit', app()->getLocale()) }}</button>
                </div>
              </div>
  </form>             
            <!-- Form END -->
            <div class="d-flex justify-content-between">
              <p class="p_light_gray">{{ GoogleTranslate::trans("Don't have an account?", app()->getLocale()) }}
                <a class="dark_blue_link" href="/signup" style="text-decoration: underline;">
                  {{ GoogleTranslate::trans('Register Here', app()->getLocale()) }}
                </a>
              </p>
            </div>
          </div>
          <!-- Sign in START -->
        </div>
      </div> <!-- Row END -->
    </div>
    <!-- Container END -->
  
  
  
      </main>
       
 
      </body>
      
      
      </html>