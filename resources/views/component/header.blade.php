
    <!-- Google Tag Manager (noscript) -->
    <style class="hero-header-style" media="not all">


html,body
{
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
}

        .transparent-header--desktop .header-container,
        .transparent-header--desktop .menu-bar__inner {
          position: absolute;
          top: 0;
          left: 0;
          right: 0;
        }
    
        .transparent-header--desktop .dbtfy-menu_bar .menu-bar__inner {
          top: 70px;
        }
    
        .transparent-header--desktop .site-header .site-nav__link,
        .transparent-header--desktop .site-header .site-header__logo-link,
        .transparent-header--desktop .dbtfy-menu_bar .menu-bar__link {
          color: #FFFFFF;
        }
    
        .transparent-header--desktop .cart-link__bubble--visible {
          border-color: #FFFFFF;
        }
    
        .transparent-header--desktop .site-header .default-logo {
          display: none;
        }
    
        .transparent-header--desktop .site-header .inverted-logo {
          display: block;
        }
    
        .transparent-header--desktop .dbtfy-menu_bar .menu-bar__item {
          border-color: #FFFFFF;
        }
    
        .transparent-header--desktop .site-header,
        .transparent-header--desktop .dbtfy-menu_bar,
        .transparent-header--desktop .dbtfy-menu_bar .menu-bar__link {
          background-color: transparent;
        }@media (max-width: 769px) {
          .transparent-header--mobile .header-container,
          .transparent-header--mobile .menu-bar__inner {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
          }
    
          .transparent-header--mobile .dbtfy-menu_bar .menu-bar__inner {
            top: 60px;
          }
    
          .transparent-header--mobile .site-header .site-nav__link,
          .transparent-header--mobile .site-header .site-header__logo-link,
          .transparent-header--mobile .dbtfy-menu_bar .menu-bar__link {
            color: #FFFFFF;
          }
    
          .transparent-header--mobile .cart-link__bubble--visible {
            border-color: #FFFFFF;
          }
    
          .transparent-header--mobile .dbtfy-menu_bar .menu-bar__item {
            border-color: #FFFFFF;
          }
    
          .transparent-header--mobile .site-header,
          .transparent-header--mobile.dbtfy-menu_bar,
          .transparent-header--mobile .dbtfy-menu_bar .menu-bar__link {
            background-color: transparent;
          }
        }
        
        li{
          text-align: justify;
        }
        
        </style>
        
    
    
        <!-- Blocks --><!-- General Upsell -->
        
    

    
    <div id="shopify-section-drawer-menu" class="shopify-section drawer-menu-section">
      
      <div id="NavDrawer" class="drawer drawer--left overlay-content drawer drawer--left overlay-content " data-section-id="drawer-menu" data-section-type="drawer-menu-section" aria-hidden="true" tabindex="-1">
      <div class="drawer__header">
        <div class="drawer__title">
          <span class="material-icons-outlined"
                
                aria-hidden="true">{{ GoogleTranslate::trans('menu', app()->getLocale()) }} </span>
    
          <span class="spacer-left-xs">{{ GoogleTranslate::trans('Menu', app()->getLocale()) }} 
    </span>
        </div>
        <div class="drawer__close" onclick="hide_nav(this)">
          <button type="button" class="btn btn-square-small drawer__close-button js-drawer-close"  aria-label="Close menu" title="Close menu">
            <span class="material-icons-outlined" aria-hidden="true">{{ GoogleTranslate::trans('close', app()->getLocale()) }}</span>
          </button>
        </div>
      </div>
    
      <div class="drawer__inner drawer-left__inner"><div class="drawer__inner-section">
          <ul class="mobile-nav"><li class="mobile-nav__item">
              <a href="{{URL::to("/about-us")}}"
                 class="mobile-nav__link"
                 >
                {{ GoogleTranslate::trans('ABOUT US', app()->getLocale()) }} 
              </a>
            </li><li class="mobile-nav__item">
              <a href="{{URL::to("/faq")}}"
                 class="mobile-nav__link"
                 >
                {{ GoogleTranslate::trans('FAQ', app()->getLocale()) }}  
              </a>
            </li><li class="mobile-nav__item">
              <a href="{{URL::to("/video")}}"
                 class="mobile-nav__link"
                 >
               {{ GoogleTranslate::trans('VIDEO', app()->getLocale()) }} 
              </a>
            </li>
           <li class="mobile-nav__item">
              <a href="{{URL::to("/shop")}}"
                 class="mobile-nav__link"
                 >
                {{ GoogleTranslate::trans('PRICING', app()->getLocale()) }} 
              </a>
            </li></ul>
        </div><div class="drawer__inner-section">
          @if(Session()->get('is_login')!=true)
          <a href="{{URL::to("/login")}}" class="btn btn--small btn--full spacer-bottom">
              <span class="material-icons-outlined icon-width">exit_to_app</span>
              {{ GoogleTranslate::trans('Log In', app()->getLocale()) }} 
            </a>
            <a href="{{URL::to("/signup")}}" class="btn btn--primary btn--small btn--full">
              <span class="material-icons-outlined icon-width">person_add</span>
              {{ GoogleTranslate::trans('Create Account', app()->getLocale()) }} 
            </a>
          @endif
          </div><div class="drawer__inner-section">
          <ul class="mobile-nav"><li class="mobile-nav__item mobile-nav__item--secondary">
              <a href="mailto:info@turninghearts.com" style="font-size: 14px">
                <span class="material-icons-outlined icon-width" aria-hidden="true">{{ GoogleTranslate::trans('email', app()->getLocale()) }} </span>
                info@digitalgravememory.com
              </a>
            </li><li class="mobile-nav__item mobile-nav__item--secondary">
              
            </li></ul>
        </div><div class="drawer__inner-section">
          <ul class="mobile-nav">
            <li class="mobile-nav__item mobile-nav__item--secondary"><a href="/">{{ GoogleTranslate::trans('HOME', app()->getLocale()) }} </a></li>
            <li class="mobile-nav__item mobile-nav__item--secondary"><a href="/about-us">{{ GoogleTranslate::trans('ABOUT US', app()->getLocale()) }} </a></li>
            <li class="mobile-nav__item mobile-nav__item--secondary"><a href="{{URL::to("/terms")}}">{{ GoogleTranslate::trans('TERMS & CONDITIONS', app()->getLocale()) }} </a></li>
            <li class="mobile-nav__item mobile-nav__item--secondary"><a href="{{URL::to("/privacy")}}">{{ GoogleTranslate::trans('PRIVACY', app()->getLocale()) }} </a></li>
            </ul>
        </div></div><div class="drawer__footer">

          {{-- <ul class="social-medias inline-list"><li>
          <a class="" target="_blank" href="https://www.facebook.com/" title="Digital Grave Memory on Facebook"><svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-svg facebook-svg" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
        </li><li>
          <a class="" target="_blank" href="https://www.instagram.com/" title="Digital Grave Memory on Instagram"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon-svg instagram-svg" fill="currentColor"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg></a>
        </li><li>
          <a class="" target="_blank" href="https://www.tiktok.com/" title="Digital Grave Memory on Tiktok"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon-svg tiktok-svg" fill="currentColor"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg></a>
        </li>
      </ul> --}}
    
    </div></div>
    <div class="overlay-backdrop overlay-drawer"></div>
    
    
    </div><div id="PageContainer" class="page-container">
          <a class="visually-hidden event-focus-box" href="#mainContent">{{ GoogleTranslate::trans('Skip to content', app()->getLocale()) }} </a><div id="shopify-section-announcement" class="shopify-section announcement-section stacked-on-top-of-content"><div id="announcement"
           data-section-id="announcement"
           data-section-type="announcement-section"
           data-template="index">
    
    </div>
    </div>
    <div id="shopify-section-header" class="shopify-section header-section stacked-on-top-of-content"><div class="header-container nav-center"
         data-section-id="header"
         data-section-type="header-section"
         data-template="index">
    
      <!-- Header -->
    
    
      <header class="site-header flex align-center fadeIn" role="banner">
        <div class="wrapper header-wrapper full">
          <div class="grid grid-small flex-nowrap align-center header-grid">
    
            <!-- left icons -->
            <div class="grid__item large--hide flex-fill whitespace-nowrap nav-containers nav-container-left-icons">
              <ul class="inner-nav-containers">
                <li class="site-nav__item site-nav--open">
                  <a onclick="handle_mobile_nav(this)" class="site-nav__link site-nav__link--icon js-drawer-open-button-left" style="transform: translateX(-34px);">
                    <span class="material-icons-outlined" aria-hidden="true">{{ GoogleTranslate::trans('menu', app()->getLocale()) }} </span>
                  </a>
                </li></ul>
            </div>
    
            <!-- Logo -->
            <div class="grid__item large--flex-fill medium--flex-auto small--flex-auto nav-containers nav-container-logo">
              <div class="inner-nav-containers">
                <h1 class="site-header__logo flex" itemscope itemtype="http://schema.org/Organization"><a href="/" itemprop="url" class="site-header__logo-link flex">
                    <meta itemprop="name" content="Digital Grave Memory">
    
                    <!-- default logo -->
                    <img class="default-logo imgset lazyload radius-none"  width="200" src="{{asset("assets/cdn/shop/files/Asset_2adobe_200x.png")}}"  alt="Digital Grave Memory" itemprop="logo">
                        <!-- inverted logo -->
                        <span class="inverted-logo">Digital Grave Memory</span><!-- mobile logo -->
                        <img class="mobile-logo imgset lazyload radius-none"   width="150" src="{{asset("assets/cdn/shop/files/Asset_2adobe_200x.png")}}"    alt="Digital Grave Memory"></a>
                    </h1>
                  </div>
            </div>
    
            <!-- Navigation menu -->
            <div class="grid__item large--six-twelfths medium--hide small--hide nav-containers nav-container-menu">
              <ul class="inner-nav-containers"><!-- only 1 link, no dropdown -->
                    <li class="site-nav__item ">
                      <a href="{{URL::to("/about-us")}}"
                        class="site-nav__link">
                        {{ GoogleTranslate::trans('ABOUT US', app()->getLocale()) }} 
                      </a>
                    </li><!-- only 1 link, no dropdown -->
                    <li class="site-nav__item ">
                      <a href="{{URL::to("/faq")}}"
                        class="site-nav__link"
                        >
                        {{ GoogleTranslate::trans('FAQ', app()->getLocale()) }}  
                      </a>
                    </li><!-- only 1 link, no dropdown -->
                 
                    <li class="site-nav__item ">
                      <a href="{{URL::to("/video")}}"
                        class="site-nav__link"
                        >
                       {{ GoogleTranslate::trans('VIDEO', app()->getLocale()) }} 
                      </a>
                    </li><!-- only 1 link, no dropdown -->
                    <li class="site-nav__item ">
                      <a href="{{URL::to("/shop")}}"
                        class="site-nav__link"
                        >
                        {{ GoogleTranslate::trans('PRICING', app()->getLocale()) }} 
                      </a>
                    </li></ul>
            </div>
    
            <!-- right icons -->
            <div class="grid__item large--flex-fill medium--flex-fill small--flex-fill whitespace-nowrap text-right nav-containers nav-container-right-icons">
              <ul class="inner-nav-containers">
                  <li class="site-nav__item">
                      <div class="">
                        <select class="changeLang">
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                            <option value="bn" {{ session()->get('locale') == 'bn' ? 'selected' : '' }}>Bangla</option>
                            <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France</option>
                            <option value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>Spanish</option>
                            <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>Arabic</option>
                            <option value="hi" {{ session()->get('locale') == 'hi' ? 'selected' : '' }}>Hindi</option>
                            <option value="ga" {{ session()->get('locale') == 'ga' ? 'selected' : '' }}>Irish</option>
                            <option value="de" {{ session()->get('locale') == 'de' ? 'selected' : '' }}>German</option>
                            <option value="el" {{ session()->get('locale') == 'el' ? 'selected' : '' }}>Greek</option>
                            <option value="he" {{ session()->get('locale') == 'he' ? 'selected' : '' }}>Hebrew</option>
                            <option value="zh" {{ session()->get('locale') == 'zh' ? 'selected' : '' }}>Chinese </option>
                            <option value="ja" {{ session()->get('locale') == 'ja' ? 'selected' : '' }}>Japanese </option>
                        </select>
                        </div>
                    </li> 
                  <li class="site-nav__item">
                      
                    <div class="dropdown dropdown-open d-flex justify-content-around" style="width: 5rem">
                      {{-- <button type="button" id="HeaderAccountToggle" class="dropdown-toggle localization-toggle site-nav__link site-nav__link--icon account-link" title="Log In"  data-bs-toggle="dropdown" aria-expanded="false" >
                        <i class="fa fa-user" style="color: #B99470;font-size:1rem" aria-hidden="true"></i>
                      </button> --}}

                      

                      <a class="btn custom_brand_btn btn-sm" title="Its Donate" href="{{URL::to("/donation")}} ">
                         {{-- <img style="width: 1rem;height: 1rem" src="{{asset("assets/cdn/shop/files/donation_5681051.svg")}}" alt=""> --}}
                         <img style="width: 1rem;height: 1rem" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEfElEQVR4nM2aB1MTQRTH/YzWQdRTQUUsITTpOigEEUFBRUA6iCACCkpVUVGkQ0B6kxgIzRBKGgnPeTuSARKSu83mcv+ZnRTI7v323r597+0d4WRHQcx2Pfo8vK4tAdX8b1hYVMPwuBKav7yHrJLHIL99mbrfI2Jc/PmgY5DwOBq+d7bC9rYZnEmtUUF1fTlEJN6QDkiUQgbvmipheXURaDQ0NgAPs+6RiRAdBM3j1dtCmPszA6w0OvkLopOCPA8SGHkO8sqewcjEEOzs7IAnZLFaoKymgD2IX/BJSM9Nhu6Bny7tnqU+tTU4NDXBIJfDfKC6/hWs6bTgLdU0VLgHcinMB6bnJsHbslgtEBofQAeCtxPNSArSG7bs9hzeIOiJpKD1TZ1DD8YLJCY5WNQF7UypWQl0Xssv5BTMqWdBCuod7KR3v7XNb0AqirkvpwMJuxsoGZMamRhyOuFOQfBWSkWZRWl0IMlP74BUZDQZ4Ur4aTqQyZkxkIrau7+69KwOQeIehAgezGQywqMcBXz4WAMTM6OwtKIhzWQ2uQ2Slp1IB1L85oWggTDizchLtusnKM4fdBtrbkFsbK7DxeATdCDPClN5D4Qz/iQ/xa4PHHxiehTcVdOXOpcQh4LIYv145RXD44MQmXjTYceNrXXAQlEKGT0ItrGpYZeDvKzOd/jbpwUpTCB+jSl5QTgFKa3KczlQZ/8Pu0yxorYYDEYDE5D4tAj3QdC8MO53JDS7T98bbb4dk62qD2XMAFA/e9t4QzgFwdY31AUHZbFYIKc0fZ8ZaddWgaWWVjRwNeIsO5D03Pv7BsC4C8sz+Lcr4b7Q1vkZWGtNp3UaHFKBYIFBq/trGyS/PNO2FmY8kPJqlubtUlgmINgq60rJIN86PtsgZlVTzCF6lB2knEoDwQvkWhRH0ssbMRfJZ/RULIV3HNcZLQDHFwSbIiOWvN57FMUMAMuoRa9zwD/0lNsQnNByELpcd2S1WkmOg3n3BflxJgAcDcjk7DgVAO47GDPJ4vyZXjxHC4LhuVAZjHoS3nsKgBMCEnDrDHmta6kSvA6ik+Q2b9c90E68oFdAAiPPQVd/O3kvv32JVPn4aHCk3+ZOMYJdXF6w3aHdiREVpLAii9g4njjh55TMeJJDH25KBhIV71bMMRI4CF9Q/lx8kL7/8dbK32USSOJ3kYqbZAPbtmzbLg7jrbcNFWTf2Y0K3rdUO8xr0MREB1nVLu8L5vbGQRj9YmKFKe3e32D47ezECteO6CBms9ku+m35Vk/qwXsPXAJu+ZKDH+Vwr8vsEgsVooMYjPpDL2hzawPUCypY1a6QzY6vsE/RQRaW1MBa85o/4oP0KDuYg3hlsb94+YQ5SHZJunc2RD3PTZCPtvSbgtNYjgXI3uSKhfAIjzUExxcEcwYWp7lTv8eZ5R8cDQg23PTQzdIKN1bJhPGyOH8yq0I1q5qG4Dv0jzBxrEF2zQyribhoXQn/p/xdETlQ9SQE586zKOjNckozyEMEuMFh1IsN3+N3WMTzhHc6DOQf6O0aL8cenLMAAAAASUVORK5CYII=" alt="">
                        </a>
                        
                        @if(Session()->get('is_login')==true)
                        <a class="btn custom_brand_btn btn-sm" title="Log in" href="{{URL::to("/qr_dashboard")}}">
                        
                    <i class="fa fa-user" aria-hidden="true"></i>
                          </a>
                        @else
                        <a class="btn custom_brand_btn btn-sm" title="Log in" href="{{URL::to("/login")}}">
                        
                         <i class="fa fa-sign-in" aria-hidden="true"></i>
                         </a>
                         @endif
     
                      {{-- <ul id="HeaderAccountMenu" class="dropdown-menu dropdown-parent dropdown-outside dropdown-open"  aria-labelledby="HeaderAccountToggle">
                        <li class="dropdown-item">
                            <a href="{{URL::to("/login")}}"
                              class="dropdown-link"
                              >
                              <i class="fa fa-right-to-bracket"></i>
                              Log In
                            </a>
                          </li>
    
                          <li class="dropdown-item">
                            <a href="{{URL::to("/signup")}}"
                              class="dropdown-link"
                              >
                              <span class="material-icons-outlined icon-width">person_add</span>
                              Create Account
                            </a>
                          </li>
                        </ul> --}}
                    </div>
                  </li>
                  {{-- <li class="site-nav__item">
                  <a href="/cart" class="site-nav__link site-nav__link--icon cart-link js-drawer-open-button-right cart_button" aria-controls="CartDrawer" aria-label="Cart" title="Cart">
                    <i class="fa fa-shopping-bag"  style="color: #B99470;font-size:1rem"  aria-hidden="true"></i>
                    <span class="cart-link__bubble rubberBand infinite slow  cart-link__bubble--visible"></span><span class="cart-count cart_count">5
    </span></a>
                </li> --}}
              </ul>
            </div>
          </div>
        </div>
      </header>
    </div>
    
    
    </div>

    <script>
    // document.getElementById("NavDrawer").onclick = function(){
    //   // this.classList.add("Hi")
    //   console.log("HI")
    // }
    //   console.log(document.getElementById("NavDrawer"))

    function handle_mobile_nav(e){
      console.log(e.id)
      document.getElementById("NavDrawer").classList.add("js-drawer-open")
    }

    function hide_nav(e){
      document.getElementById("NavDrawer").classList.remove("js-drawer-open") 
    }

    </script>

<style>
.custom_brand_btn{
  background: #5F6F52 !important;
  color: white;
  font-weight: bold;
}
  .c_grid{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 2rem;
  }
  
   .c_card {
      box-shadow: -1px 0px 37px -18px gray;
      border-radius: 0.3rem;
      padding: 0.8rem;
  }
  .card_packege_ul li{
  list-style: none;
  
  }


  .text-lead p{
    text-align: justify;
  }
  
  .video_gellary{
    display: grid;
    grid-template-columns: repeat(5,1fr) ;
    gap: 1rem;
  }

  @media screen and (max-width: 768px) {
    /* .video_gellary{
    grid-template-columns: repeat(4,1fr) ;
   
  } */
    .c_grid{
  
    grid-template-columns: repeat(2,1fr);
  
  }
  .dot_c_container{
    display: flex !important ;
  }
  }
  
  @media screen and (max-width: 425px) {
    .c_grid{
  
    grid-template-columns: repeat(1,1fr);
  
  }
  .two{
    display: none
  }
  .three{
    display:none;
  }
  #slided_content{
    width: 60% !important;
  }
  }

  @media screen and (max-width: 375px) {
  
  #slided_content{
    width: 57% !important;
  }
  .one-fifth {
    width: 13%;
   
}
  }

  @media screen and (max-width: 320px) {
  
    #slided_content {
    width: 51% !important;
}
  }
  .dot_c{
    width: 1rem;
    height: 1rem;
    border-radius: 50%;
    background-color: #B99470;
  }
  .dot_c_container {
    display: flex;
    width: 100%;
    justify-content: space-around;
    margin-top: 1rem;
    cursor: pointer;

  }

  @media screen and (max-width: 425px) {
  
    .grid.slick-initialized .slick-slide {
    margin-left: 0px !important;
    margin-right: -26px !important;
}


@media screen and (max-width: 375px) {
  
  .grid.slick-initialized .slick-slide {
    margin-left: 0px !important;
    margin-right: -3px !important;
}
}
}

.bottom-footer {
    border-color: #5F6F52 !important;
}

.footer-item+.footer-item:before {
 
    border-color: #5F6F52 !important;
   
}

  </style>