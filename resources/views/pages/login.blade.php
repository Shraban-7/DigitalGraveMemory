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
            <h2 class="mb-3 text-gray text-center">{{ GoogleTranslate::trans("Welcome back!", app()->getLocale()) }}</h2>
            <p class="text-center">{{ GoogleTranslate::trans("Please enter your email and password below.", app()->getLocale()) }}</p>
            <br>
  
            @if (session('message'))
            <div class="alert @if(session('condition') == true) alert-success @else alert-danger @endif">
                {{ session('message') }}
            </div>
          @endif

            <!-- Form START -->
            <form id="sign_in_form" action="{{URL::to("/login")}}" accept-charset="UTF-8" method="post" novalidate="novalidate" data-gtm-form-interact-id="0">
          
              <!-- Email -->
              <div class="d-flex justify-content-between">
                <h6>{{ GoogleTranslate::trans("Email:", app()->getLocale()) }}</h6>
              </div>
              <div class="input-group-lg">
                <input type="email" name="email" id="email" class="form-control valid" placeholder="john.doe@address.com" autofocus="autofocus" autocomplete="username" data-gtm-form-interact-field-id="0" aria-invalid="false">
                @csrf
              </div>
              <!-- New password -->
              <div class="d-flex mt-3 justify-content-between">
                <h6>{{ GoogleTranslate::trans("Password:", app()->getLocale()) }}</h6>
              </div>
              <div class="position-relative">
                <!-- Password -->
                <div class="input-group input-group-lg">
                  <input type="password" name="password" id="password" class="form-control valid" placeholder="••••••••••" autocomplete="new-password" data-gtm-form-interact-field-id="1" aria-invalid="false"> 
                  {{-- <button type="button" class="show_password_button" id="toggle-password">
                    <i class="underline_text" id="label_show_hide">{{ GoogleTranslate::trans("Show", app()->getLocale()) }}</i>
                  </button> --}}
                </div>
              </div>
              <!-- Remember me -->
              <div class="mb-4 mt-3 d-flex justify-content-between">
                <div></div>
                <a href="{{URL::to("/otp_send")}}"  class="gray_link" style="text-decoration: underline;">
                  {{ GoogleTranslate::trans("Forgot password?", app()->getLocale()) }}
                </a>
              </div>
              <div>
                <!-- Button -->
                <div class="d-grid" id="submit_button" style="height: auto !important;">
                  <button type="submit" class="btn btn-gold" id="button_auth_submit">{{ GoogleTranslate::trans("Sign in", app()->getLocale()) }}</button>
                </div>
              </div>
  </form>              <div class="mb-3 ">
                  <form class="button_to" method="post" action="/social_log/facebook">
                    @csrf
                    <button class="btn btn-primary w-100" style="max-width: 400px; display: flex; align-items: center; justify-content: center; margin: 9px 0; font-size:16px" type="submit"><i class="fa fa-facebook" aria-hidden="true"></i> {{ GoogleTranslate::trans("Sign in with Facebook", app()->getLocale()) }}</button>
                  
                  </form>
                  <form class="button_to" method="post" action="/social_log/google">
                    @csrf
                    <button class="btn btn-primary w-100" style="max-width: 400px; display: flex; align-items: center; justify-content: center; margin: 9px 0; font-size:16px" type="submit"><i class="fa fa-google" aria-hidden="true"></i>{{ GoogleTranslate::trans("Sign in with google", app()->getLocale()) }}</button>
                  
                  </form>
                </div>
            <!-- Form END -->
            <div class="d-flex justify-content-between">
              <p class="p_light_gray">{{ GoogleTranslate::trans("Don't have an account?", app()->getLocale()) }}
                <a class="dark_blue_link" href="/signup" style="text-decoration: underline;">
                  {{ GoogleTranslate::trans("Register Here", app()->getLocale()) }}
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
      <script src="https://kit.fontawesome.com/fbadad80a0.js"></script>

      </body>  
      </html>