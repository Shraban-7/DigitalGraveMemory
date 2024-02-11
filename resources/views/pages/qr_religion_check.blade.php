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
            <h5 class="mb-3 text-gray text-center">{{ GoogleTranslate::trans("Selecting Religion", app()->getLocale()) }}</h5>
            <p class="text-center">{{ GoogleTranslate::trans("Selecting Religion for social media logger", app()->getLocale()) }} </p>
            <br>
  
            @if (session('message'))
            <div class="alert @if(session('condition') == true) alert-success @else alert-danger @endif">
                {{ session('message') }}
            </div>
          @endif

            <!-- Form START -->
            <form id="sign_in_form" action="{{URL::to("/qr_religion_check")}}" method="post" >
          
              <!-- Email -->
              <div class="d-flex justify-content-between">
                <h6>{{ GoogleTranslate::trans("Select Religion", app()->getLocale()) }}</h6>
              </div>
              <div class="input-group-lg">
                <select name="religion" id="" class="form-control">
                    <option value="">{{ GoogleTranslate::trans("Select your Religion", app()->getLocale()) }}</option>
                    <option value="1">{{ GoogleTranslate::trans("Muslims", app()->getLocale()) }}</option>
                    <option value="2">{{ GoogleTranslate::trans("Hindus", app()->getLocale()) }}</option>
                    <option value="3">{{ GoogleTranslate::trans("Buddhists", app()->getLocale()) }}</option>
                    <option value="4">{{ GoogleTranslate::trans("Christians", app()->getLocale()) }}</option>
                  </select>
                @csrf
              </div>
  
              <div>
                <!-- Button -->
                <div class="d-grid" id="submit_button" style="height: auto !important;">
                  <button type="submit" class="btn btn-gold" id="button_auth_submit">{{ GoogleTranslate::trans("Submit", app()->getLocale()) }}</button>
                </div>
              </div>
  </form>             
            <!-- Form END -->
           
          </div>
          <!-- Sign in START -->
        </div>
      </div> <!-- Row END -->
    </div>
    <!-- Container END -->
  
  
  
      </main>
       
 
      </body>
      
      
      </html>