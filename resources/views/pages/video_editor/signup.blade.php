<!DOCTYPE html>
<html lang="en"><head>
  <meta name="csrf-param" content="authenticity_token">
<meta name="csrf-token" content="12kCPDiJakQCfziDr-YJsI35no-TKUhBRssvvNsQW0OU41ztphMWi-Ixk781NrgSL-Yxy4XXHEh0RJGXXgBd_g">
  
	<title>{{ GoogleTranslate::trans('Turning Hearts', app()->getLocale()) }}</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="/assets/favicon-3e8308d17871370f37a40e517410a01e4b6374f0db13dc5a44cf9c0c954a9d31.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{asset("assets/application.css")}}">
  <link rel="stylesheet" href="{{asset("assets/custom.css")}}">
  
<!-- Google Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600&amp;display=swap" rel="stylesheet">

<!-- Google tag (gtag.js) -->
<script async="" src="https://www.clarity.ms/s/0.7.20/clarity.js"></script><script async="" src="https://www.clarity.ms/tag/h5l8qu9wjn"></script><script async="" src="https://www.googletagmanager.com/gtag/js?id=G-KWTGS4585D"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-KWTGS4585D');
</script>

<!-- Clarity tracking code -->
<script type="text/javascript">
  (function(c,l,a,r,i,t,y){
    c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
    t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
    y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
  })(window, document, "clarity", "script", "h5l8qu9wjn");
</script>

  <script src="https://accounts.google.com/gsi/client" async="" defer=""></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

  <script>
  
    var path = window.location.pathname;
    if( path != "/forgot"){

      // Variable used to get the width of the submit button component and make it equal to the rendered button component for google sign up
      var submit_button;

      function handleCredentialResponse(response) {
        // Simple POST request with a JSON body using fetch
        const request = {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ credential: response.credential })
        };
        fetch('/auth/gsi/callback', request)
        .then(async response => {
            const isJson = response.headers.get('content-type')?.includes('application/json');
            const data = isJson && await response.json();

            // check for error response
            if (!response.ok) {
                // get error message from body or default to response status
                const error = (data && data.message) || response.status;
                return Promise.reject(error);
            }

            //redirect
            location.href ='/auth/gsi/session/'+ data.success;
        })
        .catch(error => {
            element = document.getElementById("gsi_error"),
            element.innerHTML = `Error: ${error}`;
        });

      }

      if( path === "/signin" || path === "/" || path === "/signup"){

        // Method used to always listen to the screen resize and perform actions
        window.addEventListener("resize", function() {

          // Gets the submit_button component
          submit_button = document.getElementById("submit_button");

          // The button is rendered again in the indicated component with the updated size of submit_button
          google.accounts.id.renderButton(
            document.getElementById("gis_button"),
            { theme: "outline", size: "large", shape: "rectangular", logo_alignment: "lefth", locale: "en_EN", width: submit_button.scrollWidth}  // customization attributes
          );
        });
        window.onload = function () {

          // Gets the submit_button component
          submit_button = document.getElementById("submit_button");

          google.accounts.id.initialize({
            client_id: "332375482718-vol2bvf059cc63vmnva10qs57f5g6k54.apps.googleusercontent.com",
            callback: handleCredentialResponse,
            context: "signup"
          });

          // The button is rendered for the first time in the indicated component with the updated size of submit_button
          google.accounts.id.renderButton(
            document.getElementById("gis_button"),
            { theme: "outline", size: "large", shape: "rectangular", logo_alignment: "lefth", locale: "en_EN", width: submit_button.scrollWidth}  // customization attributes
          );
          // google.accounts.id.prompt(); // also display the One Tap dialog
        } 
      }
    }
  </script>
<style id="googleidentityservice_button_styles">.qJTHM{-webkit-user-select:none;color:#202124;direction:ltr;-webkit-touch-callout:none;font-family:"Roboto-Regular",arial,sans-serif;-webkit-font-smoothing:antialiased;font-weight:400;margin:0;overflow:hidden;-webkit-text-size-adjust:100%}.ynRLnc{left:-9999px;position:absolute;top:-9999px}.L6cTce{display:none}.bltWBb{word-break:break-all}.hSRGPd{color:#1a73e8;cursor:pointer;font-weight:500;text-decoration:none}.Bz112c-W3lGp{height:16px;width:16px}.Bz112c-E3DyYd{height:20px;width:20px}.Bz112c-r9oPif{height:24px;width:24px}.Bz112c-uaxL4e{-webkit-border-radius:10px;border-radius:10px}.LgbsSe-Bz112c{display:block}.S9gUrf-YoZ4jf,.S9gUrf-YoZ4jf *{border:none;margin:0;padding:0}.fFW7wc-ibnC6b>.aZ2wEe>div{border-color:#4285f4}.P1ekSe-ZMv3u>div:nth-child(1){background-color:#1a73e8!important}.P1ekSe-ZMv3u>div:nth-child(2),.P1ekSe-ZMv3u>div:nth-child(3){background-image:linear-gradient(to right,rgba(255,255,255,.7),rgba(255,255,255,.7)),linear-gradient(to right,#1a73e8,#1a73e8)!important}.haAclf{display:inline-block}.nsm7Bb-HzV7m-LgbsSe{-webkit-border-radius:4px;border-radius:4px;-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-transition:background-color .218s,border-color .218s;transition:background-color .218s,border-color .218s;-webkit-user-select:none;-webkit-appearance:none;background-color:#fff;background-image:none;border:1px solid #dadce0;color:#3c4043;cursor:pointer;font-family:"Google Sans",arial,sans-serif;font-size:14px;height:40px;letter-spacing:0.25px;outline:none;overflow:hidden;padding:0 12px;position:relative;text-align:center;vertical-align:middle;white-space:nowrap;width:auto}@media screen and (-ms-high-contrast:active){.nsm7Bb-HzV7m-LgbsSe{border:2px solid windowText;color:windowText}}.nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe{font-size:14px;height:32px;letter-spacing:0.25px;padding:0 10px}.nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe{font-size:11px;height:20px;letter-spacing:0.3px;padding:0 8px}.nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe{padding:0;width:40px}.nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.pSzOP-SxQuSe{width:32px}.nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.purZT-SxQuSe{width:20px}.nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK{-webkit-border-radius:20px;border-radius:20px}.nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK.pSzOP-SxQuSe{-webkit-border-radius:16px;border-radius:16px}.nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK.purZT-SxQuSe{-webkit-border-radius:10px;border-radius:10px}.nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc{border:none;color:#fff}.nsm7Bb-HzV7m-LgbsSe.MFS4be-v3pZbf-Ia7Qfc{background-color:#1a73e8}.nsm7Bb-HzV7m-LgbsSe.MFS4be-JaPV2b-Ia7Qfc{background-color:#202124;color:#e8eaed}.nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c{height:18px;margin-right:8px;min-width:18px;width:18px}.nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c{height:14px;min-width:14px;width:14px}.nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c{height:10px;min-width:10px;width:10px}.nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-Bz112c{margin-left:8px;margin-right:-4px}.nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c{margin:0;padding:10px}.nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.pSzOP-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c{padding:8px}.nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c{padding:4px}.nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf{-webkit-border-top-left-radius:3px;border-top-left-radius:3px;-webkit-border-bottom-left-radius:3px;border-bottom-left-radius:3px;display:-webkit-box;display:-webkit-flex;display:flex;justify-content:center;-webkit-align-items:center;align-items:center;background-color:#fff;height:36px;margin-left:-10px;margin-right:12px;min-width:36px;width:36px}.nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf .nsm7Bb-HzV7m-LgbsSe-Bz112c,.nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf .nsm7Bb-HzV7m-LgbsSe-Bz112c{margin:0;padding:0}.nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf{height:28px;margin-left:-8px;margin-right:10px;min-width:28px;width:28px}.nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf{height:16px;margin-left:-6px;margin-right:8px;min-width:16px;width:16px}.nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf{-webkit-border-radius:3px;border-radius:3px;margin-left:2px;margin-right:0;padding:0}.nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf{-webkit-border-radius:18px;border-radius:18px}.nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf{-webkit-border-radius:14px;border-radius:14px}.nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf{-webkit-border-radius:8px;border-radius:8px}.nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-bN97Pc-sM5MNb{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-align-items:center;align-items:center;-webkit-flex-direction:row;flex-direction:row;justify-content:space-between;-webkit-flex-wrap:nowrap;flex-wrap:nowrap;height:100%;position:relative;width:100%}.nsm7Bb-HzV7m-LgbsSe .oXtfBe-l4eHX{justify-content:center}.nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-BPrWId{-webkit-flex-grow:1;flex-grow:1;font-family:"Google Sans",arial,sans-serif;font-weight:500;overflow:hidden;text-overflow:ellipsis;vertical-align:top}.nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-BPrWId{font-weight:300}.nsm7Bb-HzV7m-LgbsSe .oXtfBe-l4eHX .nsm7Bb-HzV7m-LgbsSe-BPrWId{-webkit-flex-grow:0;flex-grow:0}.nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-MJoBVe{-webkit-transition:background-color .218s;transition:background-color .218s;bottom:0;left:0;position:absolute;right:0;top:0}.nsm7Bb-HzV7m-LgbsSe:hover,.nsm7Bb-HzV7m-LgbsSe:focus{-webkit-box-shadow:none;box-shadow:none;border-color:#d2e3fc;outline:none}.nsm7Bb-HzV7m-LgbsSe:hover .nsm7Bb-HzV7m-LgbsSe-MJoBVe,.nsm7Bb-HzV7m-LgbsSe:focus .nsm7Bb-HzV7m-LgbsSe-MJoBVe{background:rgba(66,133,244,.04)}.nsm7Bb-HzV7m-LgbsSe:active .nsm7Bb-HzV7m-LgbsSe-MJoBVe{background:rgba(66,133,244,.1)}.nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc:hover .nsm7Bb-HzV7m-LgbsSe-MJoBVe,.nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc:focus .nsm7Bb-HzV7m-LgbsSe-MJoBVe{background:rgba(255,255,255,.24)}.nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc:active .nsm7Bb-HzV7m-LgbsSe-MJoBVe{background:rgba(255,255,255,.32)}.nsm7Bb-HzV7m-LgbsSe .n1UuX-DkfjY{-webkit-border-radius:50%;border-radius:50%;display:-webkit-box;display:-webkit-flex;display:flex;height:20px;margin-left:-4px;margin-right:8px;min-width:20px;width:20px}.nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId{font-family:"Roboto";font-size:12px;text-align:left}.nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .ssJRIf,.nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff .fmcmS{overflow:hidden;text-overflow:ellipsis}.nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-align-items:center;align-items:center;color:#5f6368;fill:#5f6368;font-size:11px;font-weight:400}.nsm7Bb-HzV7m-LgbsSe.jVeSEe.MFS4be-Ia7Qfc .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff{color:#e8eaed;fill:#e8eaed}.nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff .Bz112c{height:18px;margin:-3px -3px -3px 2px;min-width:18px;width:18px}.nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf{-webkit-border-top-left-radius:0;border-top-left-radius:0;-webkit-border-bottom-left-radius:0;border-bottom-left-radius:0;-webkit-border-top-right-radius:3px;border-top-right-radius:3px;-webkit-border-bottom-right-radius:3px;border-bottom-right-radius:3px;margin-left:12px;margin-right:-10px}.nsm7Bb-HzV7m-LgbsSe.jVeSEe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf{-webkit-border-radius:18px;border-radius:18px}.L5Fo6c-sM5MNb{border:0;display:block;left:0;position:relative;top:0}.L5Fo6c-bF1uUb{-webkit-border-radius:4px;border-radius:4px;bottom:0;cursor:pointer;left:0;position:absolute;right:0;top:0}.L5Fo6c-bF1uUb:focus{border:none;outline:none}sentinel{}</style><meta http-equiv="origin-trial" content="A+N5HpM5gDAUeupaWw3J2yuMrpgH0IC7KtFHAqtmHkW8Vr+dPpJWuOpMNIRh3ybxyoIUKlvDQs7+VGPfYdQ/qQUAAABxeyJvcmlnaW4iOiJodHRwczovL2FjY291bnRzLmdvb2dsZS5jb206NDQzIiwiZmVhdHVyZSI6IkZlZENtQXV0b1JlYXV0aG4iLCJleHBpcnkiOjE2OTE1MzkxOTksImlzVGhpcmRQYXJ0eSI6dHJ1ZX0="><link rel="prefetch" as="script" href="https://assets.gorgias.chat/build/static/js/998.b5ad0dc8e327ca5a.js"><link rel="prefetch" as="script" href="https://assets.gorgias.chat/build/static/js/gcmw.8e559cd8a277e4fb.js"><style data-emotion="gorgias-chat-key" data-s=""></style><link id="googleidentityservice" type="text/css" media="all" rel="stylesheet" href="https://accounts.google.com/gsi/style"></head>

  <body class="body_layout_login" data-new-gr-c-s-check-loaded="14.1143.0" data-gr-ext-installed="">
    <main class="body_layout_login">

      <div class="row">
  <div class="col">
    <!-- FLASH ALERT -->
    
  </div>
</div>

<div class="container">
  <div class="row justify-content-center align-items-center vh-100 py-1 py-md-4">
    <!-- Main content START -->
    <div class="col-sm-10 col-md-6 col-lg-6 col-xl-5 col-xxl-5">
      <!-- Sign up START -->
      <div class="card card-body rounded-3 p-5 p-sm-5 card_auth_shadow">
        <div>
          <!-- Title -->
          <img class="light-mode-item navbar-brand-item" src="https://app.turninghearts.com/assets/TurningHearts-logo-df086be0f775c0e4f03e0e31c1eff102f70547ba94e699f513b644df5240c80d.png">
          <br>
          <h4 class="mb-2 text-gray text-center" id="create_account_label">{{ GoogleTranslate::trans('Create your account', app()->getLocale()) }}</h4>
          <p class="text-center">{{ GoogleTranslate::trans('Welcome to Turning Hearts!', app()->getLocale()) }}<br>{{ GoogleTranslate::trans('Please enter the information requested to create your account as a video editor', app()->getLocale()) }}</p>
        <div class="container d-none">
          <form class="button_to" method="post" action="/auth/facebook"><button class="btn btn-primary w-100 my-3" type="submit"><i class="fa-brands fa-facebook me-2"></i>{{ GoogleTranslate::trans('Sign in with Facebook', app()->getLocale()) }}</button><input type="hidden" name="authenticity_token" value="4EILfehMZGvi_JRvwBJqt8ZQNoGiVBi3gDqg0XA8Mn8LfelcLDHJtj3SFXiFZMhUp-IUWXMuAmQdmP5jztGX7A" autocomplete="off"></form>
          <div id="gis_button"><div class="S9gUrf-YoZ4jf" style="position: relative;"><div></div><iframe src="https://accounts.google.com/gsi/button?theme=outline&amp;size=large&amp;shape=rectangular&amp;logo_alignment=lefth&amp;width=365&amp;client_id=332375482718-vol2bvf059cc63vmnva10qs57f5g6k54.apps.googleusercontent.com&amp;iframe_id=gsi_412844_384222&amp;as=cYC6kTPmj56awpcKn2IWPg&amp;hl=en_EN" id="gsi_412844_384222" title="Sign in with Google Button" style="display: block; position: relative; top: 0px; left: 0px; height: 44px; width: 385px; border: 0px; margin: -2px -10px;"></iframe></div></div>
        </div>
        <div class="row g-0 text-center" id="horizontal_divider">
          {{-- <label id="divider_container"><span id="divider_label">OR</span></label> --}}
        </div>
              @if (session('message'))
                <div class="alert @if(session('condition') == true) alert-success @else alert-danger @endif">
                    {{ session('message') }}
                </div>
              @endif
        <!-- Form START -->
        <form class="new_user" id="sign_up_form" action="{{URL::to("editor/video_editor_signup")}}" accept-charset="UTF-8" method="post" novalidate="novalidate">
          
          <!-- first and last name -->
          <div class="d-flex justify-content-between">
            <h6>{{ GoogleTranslate::trans('Full name:', app()->getLocale()) }}</h6>
          </div>
          <div class="input-group-lg">
            <input class="form-control" placeholder="First name" autofocus="autofocus" autocomplete="first-name" type="text" name="user[name]" id="user_full_name">
          </div>
          @csrf
         
      
          <!-- Email -->
          <div class="mt-3 d-flex justify-content-between">
            <h6>{{ GoogleTranslate::trans('Email:', app()->getLocale()) }}</h6>
          </div>
          <div class="input-group-lg">
            <input class="form-control" placeholder="john.doe@address.com" autofocus="autofocus" autocomplete="username" type="text" name="user[email]" id="user_email">
            <div class="position-relative text-center" id="email_subtitle_label">
              <small>{{ GoogleTranslate::trans('We`ll never share your email with anyone else.', app()->getLocale()) }}</small>
            </div>
          </div>
          <!-- New password -->
          <div class="mt-3 d-flex justify-content-between">
            <h6>Password:</h6>
          </div>
          <div class="position-relative">
            <!-- Input group -->
            <div class="input-group input-group-lg">
              <input id="password" class="form-control" placeholder="••••••••••" autocomplete="new-password" type="password" name="user[password]">
              <button type="button" class="show_password_button" id="toggle-password">
                <i class="underline_text" id="label_show_hide">{{ GoogleTranslate::trans('Show', app()->getLocale()) }}</i>
              </button>
            </div>
            <!-- Pswmeter -->
            <div id="pswmeter" class="mt-2"></div>
            <div class="d-flex mt-1">
              <div id="pswmeter-message" class="rounded"></div>
              <!-- Password message notification -->
              <div class="ms-auto">
                <i id="popover_button" class="bi bi-info-circle ps-1" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover" data-bs-content="Include at least one uppercase, one lowercase, one special character, one number and 8 characters long." data-bs-original-title="" title=""></i>
              </div>
            </div>
          </div>
          <!-- Confirm password -->
          <div class="d-flex justify-content-between">
            <h6>{{ GoogleTranslate::trans('Confirm password:', app()->getLocale()) }}</h6>
          </div>
          <div class="input-group input-group-lg">
            <input id="confirm_password" class="form-control" placeholder="••••••••••" autocomplete="new-password" type="password" name="user[password_confirmation]">
            <button type="button" class="show_password_button" id="show-confirm-password">
              <i class="underline_text" id="label_show_hide_confirm_Password">{{ GoogleTranslate::trans('Show', app()->getLocale()) }}</i>
            </button>
          </div>
          <br>
          <!-- Button -->
          <div class="mt-3 container">
            <div class="d-grid" id="submit_button">
              <button type="button" class="btn btn-gold button_auth_submit" id="button_auth_submit">{{ GoogleTranslate::trans('Register my account', app()->getLocale()) }}</button>
            </div>
          </div>
          <div class="d-flex justify-content-between" id="sign_in_link">
            <p class="p_light_gray">{{ GoogleTranslate::trans('Already have an account?', app()->getLocale()) }}
              <a class="dark_blue_link" href="{{URL::to("editor/login")}}" style="text-decoration: underline;">
                {{ GoogleTranslate::trans('Sign In Here', app()->getLocale()) }}
              </a>
            </p>
          </div>
        </form> <!-- Form END -->
      </div> 
    </div> <!-- Sign up END -->
  </div> <!-- main content END -->
</div>

<script>
  $(document).ready(function() {
    // Custom method to validate the password requirements
    $.validator.addMethod("passwordRequirements", function(value, element) {
      // Define the password requirements
      var requirements = {
        lowercase: {
          pattern: /.*[a-z].*/,
          message: "one lowercase letter"
        },
        uppercase: {
          pattern: /.*[A-Z].*/,
          message: "one uppercase letter"
        },
        number: {
          pattern: /.*\d.*/,
          message: "one number"
        },
        specialCharacter: {
          pattern: /.*[!@#$%^&*()].*/,
          message: "one special character"
        }
      };

      // Check each requirement individually
      var missingRequirements = [];
      if (!requirements.lowercase.pattern.test(value)) {
        missingRequirements.push(requirements.lowercase.message);
      }
      if (!requirements.uppercase.pattern.test(value)) {
        missingRequirements.push(requirements.uppercase.message);
      }
      if (!requirements.number.pattern.test(value)) {
        missingRequirements.push(requirements.number.message);
      }
      if (!requirements.specialCharacter.pattern.test(value)) {
        missingRequirements.push(requirements.specialCharacter.message);
      }

      // Store the missing requirements as a data attribute on the element
      $(element).data("missingRequirements", missingRequirements);

      // Return true if all requirements are met, false otherwise
      return missingRequirements.length === 0;
    }, function(params, element) {
      // Retrieve the missing requirements from the data attribute
      var missingRequirements = $(element).data("missingRequirements");

      // Set the error message based on the missing requirements
      var errorMessage = "Your password must contain at least: " + missingRequirements.join(", ") + ".";
      return errorMessage;
    });

    $("#sign_up_form").validate({
      rules: {
        "user[name]": {
          required: true,
          minlength: 2,
          
        },
      
        "user[email]": {
          required: true,
          minlength: 2,
          nowhitespace: true,
          email: true
        },
        "user[password]": {
          required: true,
          minlength: 8,
          nowhitespace: true,
          passwordRequirements: true,
        },
        "user[password_confirmation]": {
          required: true,
          nowhitespace: true,
          equalTo: "#password"
        },
      },
      messages: {
        "user[name]": {
          required: "This field is required.",
          minlength: "This field requires at least 2 characters.",
        
        },
       
        "user[email]": {
          required: "This field is required.",
          minlength: "This field requires at least 2 characters.",
          nowhitespace: "Blank characters are not allowed.",
          email: "Please enter a valid email address."
        },
        "user[password]": {
          required: "This field is required.",
          minlength: "This field requires at least 8 characters.",
          nowhitespace: "Blank characters are not allowed."
        },
        "user[password_confirmation]": {
          required: "This field is required.",
          nowhitespace: "Blank characters are not allowed.",
          equalTo: "Passwords do not match."
        },
      },
      errorPlacement: function(error, element) {
        if (element.attr("name") === "user[password]" || element.attr("name") === "user[password_confirmation]")
        {
          error.insertAfter(element.parent());
        }else{
          error.insertAfter(element);
        }
      }
    });

    // Custom method to validate non white spaces on inputs
    $.validator.addMethod("nowhitespace", function(value, element) {
      return this.optional(element) || /^\S+$/i.test(value);
    });

    var isLoadingSignUp = false;

    $("#button_auth_submit").on("click", function() {
      var isValid = $("#sign_up_form").valid();
      if (isValid) {
        if (!isLoadingSignUp) {
          isLoadingSignUp = true;
          // buttonLoadingState variable is used to change button's html
          var buttonLoadingState = "<span class='spinner-border spinner-border-sm me-2' role='status' aria-hidden='true'></span>" + "<span>Registering</span>";
          $(this).html(buttonLoadingState);
          $("#sign_up_form").submit();
        }
      }
    });
  });
</script>


    </div></main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>

      var path = window.location.pathname;
      if( path != "/forgot"){
        
        // Method in charge of specifying the popover function in the specific document once the document is loaded
        $(document).ready(function(){
          
          // Indicating popover initialization in the document taking the id assigned as [popover_button]
          var popover = new bootstrap.Popover(document.querySelector('#popover_button'), {
            container: 'body'
          })
        });

        // Method worked with Jquery to work on all devices with the click event
        // Pointing to the show/hide password
        $('#toggle-password').on('click', function(){

          // input
          const passwordFieldInput = document.getElementById("password");
          // label
          const passwordLabel = document.querySelector("#label_show_hide");

          if(passwordFieldInput.type === "password"){

            passwordFieldInput.type = "text";
            passwordLabel.innerHTML = 'Hide'
          } else{
            passwordFieldInput.type = "password";
            passwordLabel.innerHTML = 'Show'
          }
        });

        // Method worked with Jquery to work on all devices with the click event
        // Pointing to the show/hide of confirm password
        $('#show-confirm-password').on('click', function(){

          // input
          const confirmPasswordFieldInput = document.getElementById("confirm_password");
          // label
          const confirmPasswordLabel = document.querySelector("#label_show_hide_confirm_Password");

          if(confirmPasswordFieldInput.type === "password"){

            confirmPasswordFieldInput.type = "text";
            confirmPasswordLabel.innerHTML = 'Hide'
          } else{
            confirmPasswordFieldInput.type = "password";
            confirmPasswordLabel.innerHTML = 'Show'
          }
        });
      }
    </script>
  
  <script id="gorgias-chat-widget-install-v2" src="https://config.gorgias.chat/gorgias-chat-bundle-loader.js?applicationId=18871"></script><!--Gorgias Chat Widget End-->

<script>var unOpenedWindowIcon = "/assets/icon-turning-hearts-46c619d9c921fc2a67d73897597c640cf9e0f0ee3d4847a7a13deff03adc5037.svg";</script>
<script src="/assets/gorgias_custom_styles-f21bfe38ba26f7578ed7c7c6d81ec7aa7b87b64c7467ce90858fff2c220fc5d6.js"></script>

<script src="https://config.gorgias.chat/gorgias-chat-bundle.js?rev=cb040157&amp;applicationId=18871" id="gorgias-chat-bundle" data-ot-ignore=""></script><div id="gorgias-chat-container"><div class="gorgias-chat-key-safhmg"><iframe id="chat-button" title="Gorgias live chat messenger" class="gorgias-chat-key-1spa6uy" srcdoc="<!DOCTYPE html><html lang=&quot;en-US&quot;><head></head><body><div id=&quot;mountHere&quot; class=&quot;frame-root&quot;></div></body></html>" style="right: 20px; bottom: 20px; visibility: visible; width: 70px; height: 64px;"></iframe></div></div></body><!--Gorgias Chat Widget Start--><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>