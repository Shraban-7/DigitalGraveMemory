@extends("layout.app")
@section("content")
<main id="mainContent" class="main-content fadeIn" role="main">
  <div  class="shopify-section featured-row-section">
    <div  class="  section-blank" >
    <div class="box">
      <div class="wrapper">
  
        <div class="grid grid-spacer align-center">
          <div class="grid__item large--six-twelfths medium--six-twelfths featured-row-left">
            <div class="media-wrapper" style="padding-top:75.0%;">
              <img class="media lazyload" src="{{asset("assets/cdn/shop/files/about_us_1.jpeg")}}">
            </div>
          </div>
  
          <div class="grid__item large--six-twelfths medium--six-twelfths "><h2 class="section-header__title">{{ GoogleTranslate::trans('Who We Are', app()->getLocale()) }}</h2><div class="rte text-lead">
            <p>{{ GoogleTranslate::trans("In 2015, 'Digital Grave Memory' emerged, driven to reshape how we cherish departed loved ones. We offer a heartfelt approach, crafting a meaningful tribute with special memories, stories, and lessons, helping you honor and preserve their memory.", app()->getLocale()) }}</p>
          </div></div>
        </div>
  
      </div>
    </div>
  </div>
  
  
  </div>
  
  <div  class="shopify-section featured-row-section">
    <div  class="  section-blank" >
    <div class="box">
      <div class="wrapper">
  
        <div class="grid grid-spacer align-center">
          <div class="grid__item large--six-twelfths medium--six-twelfths featured-row-right">
            <div class="media-wrapper" style="padding-top:66.69921875%;">
              <img class="media lazyload" src="{{asset("assets/cdn/shop/files/about_us_2.jpeg")}}">
            </div>
          </div>
  
          <div class="grid__item large--six-twelfths medium--six-twelfths ">
            <h2 class="section-header__title">{{ GoogleTranslate::trans('What We Do', app()->getLocale()) }}</h2>
            <div class="rte text-lead">
              <p>{{ GoogleTranslate::trans("At 'Digital Grave Memory,' we've forged a platform for eternal legacies. Craft profiles that immortalize loved ones or narrate your cherished journey. Inspire generations with shared memories, creating a   place where lives resonate for eternity.", app()->getLocale()) }}</p>
          </div>
        </div>
        </div>
  
      </div>
    </div>
  </div>
  
  
  </div>
  
  <div  class="shopify-section custom-html-section">
    <div  class=" section-blank" >
    <div class="box">
      <div class="wrapper-full">
        <div class="grid grid-spacer">
  
            <!-- Blocks -->
            
            <div class="grid__item large--twelfth-twelfths medium--twelfth-twelfths small--twelfth-twelfths">
              <div class="text-center">
                    <div  class="pxFormGenerator" style="margin: 0 auto;">
                      <h5>{{ GoogleTranslate::trans('We can create your loved one`s  memory in video format.', app()->getLocale()) }} <a href="{{URL::to("/video")}}">{{ GoogleTranslate::trans('click here', app()->getLocale()) }}</a></h5>
                    </div>
 
                  </div>
                </div>
              </div>
            </div>
    </div>
  </div>
  
  
  </div>
  </main>
  @endsection