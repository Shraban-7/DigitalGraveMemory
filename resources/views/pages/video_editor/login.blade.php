<!DOCTYPE html>
<html lang="en"><head>
      <title>{{ GoogleTranslate::trans('Video Editor Login', app()->getLocale()) }}</title>
  
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="/assets/favicon-3e8308d17871370f37a40e517410a01e4b6374f0db13dc5a44cf9c0c954a9d31.ico">
  
  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{asset("assets/application.css")}}">
  <link rel="stylesheet" href="{{asset("assets/custom.css")}}">
  
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600&amp;display=swap" rel="stylesheet">
  
 

  
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
            <img class="light-mode-item navbar-brand-item" alt="Turning hearts logo" src="https://app.turninghearts.com/assets/TurningHearts-logo-df086be0f775c0e4f03e0e31c1eff102f70547ba94e699f513b644df5240c80d.png">
            <br>
            <!-- Title -->
            <h2 class="mb-3 text-gray text-center">{{ GoogleTranslate::trans('Video Editor Panel', app()->getLocale()) }} </h2>
            {{-- <p class="text-center">{{ GoogleTranslate::trans('Please enter your email and password below.', app()->getLocale()) }}</p> --}}
            <br>
  
            <!-- Form START -->
            <form id="sign_in_form" action="{{URL::to("/editor/video_editor_login")}}" method="post" >
          
              <!-- Email -->
              <div class="d-flex justify-content-between">
                <h6>{{ GoogleTranslate::trans('Email:', app()->getLocale()) }}</h6>
              </div>
              <div class="input-group-lg">
                <input type="email" name="email" id="email" class="form-control valid" placeholder="john.doe@address.com" autofocus="autofocus" autocomplete="username" data-gtm-form-interact-field-id="0" aria-invalid="false">
                @csrf
              </div>
              <!-- New password -->
              <div class="d-flex mt-3 justify-content-between">
                <h6>{{ GoogleTranslate::trans('Password:', app()->getLocale()) }}</h6>
              </div>
              <div class="position-relative">
                <!-- Password -->
                <div class="input-group input-group-lg">
                  <input type="password" name="password" id="password" class="form-control valid" placeholder="••••••••••" autocomplete="new-password" data-gtm-form-interact-field-id="1" aria-invalid="false"> 
                  {{-- <button type="button" class="show_password_button" id="toggle-password">
                    <i class="underline_text" id="label_show_hide">{{ GoogleTranslate::trans('Show', app()->getLocale()) }}</i>
                  </button> --}}
                
                </div>
              </div>
              <!-- Remember me -->
              {{-- <div class="mb-4 mt-3 d-flex justify-content-between">
                <div></div>
                <a href="/forgot" ,="" class="gray_link" style="text-decoration: underline;">
                  Forgot password?
                </a>
              </div> --}}
              <div>
                <br>
                <!-- Button -->
                <div class="d-grid" id="submit_button" style="height: auto !important;">
                  <button type="submit" class="btn btn-gold" id="button_auth_submit">{{ GoogleTranslate::trans('Sign in', app()->getLocale()) }}</button>
                </div>
              </div>
  {{-- </form>              <div class="mb-3 d-none">
                  <form class="button_to" method="post" action="/auth/facebook"><button class="btn btn-primary w-100" style="max-width: 400px; display: flex; align-items: center; justify-content: center; margin: 9px 0; font-size:16px" type="submit"><i class="fa-brands fa-facebook me-2"></i>{{ GoogleTranslate::trans('Sign in with Facebook', app()->getLocale()) }}</button><input type="hidden" name="authenticity_token" value="_FOiMBgfaas6obasVT7d8h6r7iBC_D33q8BwgZW7xREXbEAR3GLEduWPN7sQSH8RfxnM-JOGJyQ2Yi4zK1Zggg" autocomplete="off"></form>
                  <div id="gis_button" style="height:41.07px"><div class="S9gUrf-YoZ4jf" style="position: relative;"><div></div><iframe src="https://accounts.google.com/gsi/button?theme=outline&amp;size=large&amp;shape=rectangular&amp;logo_alignment=lefth&amp;width=400&amp;client_id=332375482718-vol2bvf059cc63vmnva10qs57f5g6k54.apps.googleusercontent.com&amp;iframe_id=gsi_639738_362343&amp;as=XDvWfchkokcqorvRyGWp2w&amp;hl=en_EN" id="gsi_639738_362343" title="Sign in with Google Button" style="display: block; position: relative; top: 0px; left: 0px; height: 44px; width: 420px; border: 0px; margin: -2px -10px;"></iframe></div></div>
                </div> --}}
            <!-- Form END -->
            {{-- <div class="d-flex justify-content-between">
              <p class="p_light_gray">Don't have an account?
                <a class="dark_blue_link" href="{{URL::to("/editor/signup")}}" style="text-decoration: underline;">
                  Register Here
                </a>
              </p>
            </div> --}}
          </div>
          <!-- Sign in START -->
        </div>
      </div> <!-- Row END -->
    </div>
    <!-- Container END -->
  
  
  
      </main>
       
 
      </body>
      
      
      </html>