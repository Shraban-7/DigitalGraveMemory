@extends("layout.app")
@section("content")
{{-- @dd(App\Http\Controllers\Controller::$img_url) --}}
<main id="mainContent" class="main-content fadeIn" role="main">
  <div class="index-sections">
    <div  class="shopify-section featured-row-section">
      <div class="  section-blank" >
  <div class="box">
    <div class="wrapper">

      <div class="grid grid-spacer align-center">
        <div class="grid__item large--six-twelfths medium--six-twelfths featured-row-left">
          <div class="media-wrapper" >
            <img class=" lazyload" src="{{asset("assets/cdn/shop/files/image_1.jpeg?v=1675990739")}}">
  </div>
</div>

        <div class="grid__item large--six-twelfths medium--six-twelfths text-center">
          <div class="rte text-lead">
            <p>
              {{ GoogleTranslate::trans("Preserve the stories and memories of your ancestors effortlessly with our platform. We offer unique QR codes that provide a lasting link to your loved ones' profiles. This simple and heartfelt gesture ensures their memories are easily accessible for generations to come.", app()->getLocale()) }}</p>
          </div>
          @if(Session()->get('is_login')!=true)
          <div>
          <a href="{{URL::to("/login")}}" class="btn btn-sm custom_brand_btn ">
            <i class="fa fa-arrow-circle-down " aria-hidden="true"></i> {{ GoogleTranslate::trans("Login", app()->getLocale()) }}
            </a>
            <a href="{{URL::to("/signup")}}" class="btn btn-sm custom_brand_btn">
              <i class="fa fa-sign-in" aria-hidden="true"></i> {{ GoogleTranslate::trans("Sign Up", app()->getLocale()) }}
              </a>
            </div>
            @endif
          </div>
      </div>

    </div>
  </div>
</div>


</div>
<div class="shopify-section featured-row-section">
  <div  class="  section-blank" >
  <div class="box">
    <div class="wrapper">

      <div class="grid grid-spacer align-center">
        <div class="grid__item large--six-twelfths medium--six-twelfths featured-row-left"><div class="media-wrapper" style="padding-top:99.82608695652173%;">
          <a href="{{URL::to("/shop")}}">
          <img class="media lazyload"src="{{asset("assets/cdn/shop/files/image_2.jpeg")}}"></a></div></div>

        <div class="grid__item large--six-twelfths medium--six-twelfths text-center">
          <div class="rte text-lead">
            <p>{{ GoogleTranslate::trans("Scan The QR Code and Create a Profile For The Ones You Love The Most. You Can Create Profiles From Your Dashboard Too", app()->getLocale()) }}</p>
          </div>
          <a href="{{URL::to("/shop")}}" class="btn btn-sm custom_brand_btn"> <i class="fa fa-info" aria-hidden="true"></i> {{ GoogleTranslate::trans("Learn More", app()->getLocale()) }} </a>
        </div>
      </div>

    </div>
  </div>
</div>
</div>

<div class="shopify-section featured-image-section">
  <div class=" section-blank" data-section-id="template--16826824884475__e53f554d-c417-4ce8-9d65-0a29054defa5" data-section-type="featured-image-section">
  <div class="box">
    <div class="wrapper">
      <div class="media-wrapper" style="padding-top:56.25%;">
            <img class="media lazyload"src="{{asset("assets/cdn/shop/files/image_3.jpeg")}}">
          </div>
        </div>
  </div>
</div>


</div>
<div class="shopify-section featured-product-section">
  <div class="  section-blank">

<div class="product-single" >

  <div class="box">
    <div class="wrapper">
      <div class="grid product-single">
        <!-- left grid item  -->
        <div  class="grid__item large--six-twelfths text-center">
          <!-- media group (main media + thumbnails) -->
            <div  class="product-single__media-group-wrapper large--sticky medium--sticky sticky-check-header">
              <div class="grid grid-small grid-spacer product-single__media-group product-single__media-group--single-xr slick slick-initialized slick-slider" >
                <button class="slick-prev slick-arrow slick-disabled" aria-label="Previous" type="button" aria-disabled="true" style="display: block;">{{ GoogleTranslate::trans("Previous", app()->getLocale()) }}</button><div class="slick-list draggable" style="height: 546px;"><div class="slick-track" style="opacity: 1; width: 2810px; transform: translate3d(0px, 0px, 0px);"><div class="grid__item product-single__media-flex-wrapper slick-slide slick-current slick-active" data-slick-media-label="Load image into Gallery viewer, Digital Grave Memory Medallion" data-product-single-media-flex-wrapper="" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 546px;">
                  <div class="product-single__media-flex">
                  <div class="product-single__media-wrapper featured-media" > 
                  <div class="product--wrapper product-single__media media-wrapper thumbnail-bottom_center" style="padding-top:100.0%;"> 
                    <img id="slided_content" class="product--image media product-single__media-template--16826826129659__main-33793472954619 lazyautosizes ls-is-cached lazyloaded" src="{{asset("assets/cdn/shop/files/proccess_3.jpeg")}}">  
                 </div>
                </div>
              </div>
            </div>
          </div>
          </div>

</div>
<div class="product-single__thumbnails grid grid-small  slick slick-disabled slick-initialized slick-slider" data-product-thumbnails="" data-count="5">               
<div class="slick-list draggable">
<div class="slick-track" style="opacity: 1; width: 565px; transform: translate3d(0px, 0px, 0px);">

  
  <div class="grid__item one-fifth product-thumbnail-wrapper slick-slide slick-active">
    <a class="product--wrapper product-single__thumbnail media-wrapper image-link ">
    <img class="sliding_img product--image product-single__thumb media lazyautosizes ls-is-cached lazyloaded"  src="{{asset("assets/cdn/shop/files/proccess_3.jpeg")}}"></a>
  </div>
  
  <div class="grid__item one-fifth product-thumbnail-wrapper slick-slide slick-current slick-active" >
    <a class="product--wrapper product-single__thumbnail media-wrapper image-link ">
 <img class="sliding_img product--image product-single__thumb media lazyautosizes ls-is-cached lazyloaded" src="{{asset("assets/cdn/shop/files/proccess_2.jpeg")}}" ></a>
 </div>

  <div class="grid__item one-fifth product-thumbnail-wrapper slick-slide slick-current slick-active">
    <a class="product--wrapper product-single__thumbnail media-wrapper image-link  " >
 <img class="sliding_img product--image product-single__thumb media lazyautosizes ls-is-cached lazyloaded" src="{{asset("assets/cdn/shop/files/proccess_1.jpeg")}}" ></a>
 </div>
  

  <div class="grid__item one-fifth product-thumbnail-wrapper slick-slide slick-current slick-active">
    <a class="product--wrapper product-single__thumbnail media-wrapper image-link  "  data-bs-toggle="modal" href="#exampleModalToggle2" role="button" >
 <img class=" product--image product-single__thumb media lazyautosizes ls-is-cached lazyloaded" src="{{asset("assets/cdn/shop/files/video_slide.png")}}" ></a>
 </div>
  
</div>
</div>
                     
</div>
</div>
            <hr class="hr-divider hr-rev product-single-divider medium--hide large--hide">
        </div>

        <!-- right grid item -->
        <div id="ProductMeta-template--16826826129659__main" class="grid__item product-single__meta--wrapper large--six-twelfths">
          <div class="product-single__meta">
            <div class="">
            <div class="grid grid-xsmall flex-nowrap product-title-container">
              <div class="grid__item flex-fill">
              <h2 class=" font-weight-bold" style="text-align: center" ><b> Digital Grave Memory</b></h2>
              </div>
            </div>
              </div>
              <div class="">
              </div>
                <div  class="product-single__meta-info">
            
                <div class="price-container-desktop">
                  <div class="price-container-wrapper">

                  </div>
                  </div>
                <div class="dbtfy-size-chart-box">
                </div>
                 
                  
                  <div class="product-single__quantity spacer-bottom">
               
                    <div class="dbtfy dbtfy-inventory_quantity">
                      <h4>
                     
                       <div style="text-align: center ">
                        <b >{{ GoogleTranslate::trans("Preserve the memories of loved ones", app()->getLocale()) }}</b>
                       </div>
                       <div  style="text-align: ">
                        <b> </b>
                       </div>
                      </h4>
                      <br>
                      <div style="text-align: center">
                      <a class="btn custom_brand_btn"  @if(Session()->get('is_login') !=true) href="{{URL::to("/shop")}}"  @else href="{{URL::to("/qr_dashboard")}}" @endif>{{ GoogleTranslate::trans("It is free", app()->getLocale()) }} <i class="fa fa-solid fa-arrow-right"></i></a>
                      </div>
                  </div>
                  <div class="quantity-product-single-7974171246843">
                  <div class="qty-container">
                  <div class="qb-product_breaks" >


                  </div>
                  </div>
                  </div>
            </div>
              
            </div>

    <div class="dbtfy-product-tab-box">
      <div class="card tab product-tab vertical-tab background-accent_background">
              <button onclick="handle_collapse(this)" type="button"  class="card-header tab-header tab-header-d519edaa-10c8-4142-a70e-dc829c6405c2 headings-color " role="tab" aria-controls="tab-content-1d519edaa-10c8-4142-a70e-dc829c6405c2" aria-selected="false"><span class="tab-header-title">{{ GoogleTranslate::trans("What Is The Online Profile?", app()->getLocale()) }}</span></button>
              <div class="card-body tab-body text-color " id="tab-content-1d519edaa-10c8-4142-a70e-dc829c6405c2" role="tabpanel" aria-labelledby="tab-button-1d519edaa-10c8-4142-a70e-dc829c6405c2">
                <div class="tab-content dbtfy-shop_protect-text">
          <div class="rte product-tab-text " style="text-align: justify">
            <p>{{ GoogleTranslate::trans("All Profiles include:", app()->getLocale()) }}</p>
            <ul>
              <li>{{ GoogleTranslate::trans("A Biography section", app()->getLocale()) }}</li>
              <li>{{ GoogleTranslate::trans("A Photo gallery", app()->getLocale()) }}</li>
              <li>{{ GoogleTranslate::trans("A Video gallery for attaching YouTube videos", app()->getLocale()) }}</li>
              <li>{{ GoogleTranslate::trans("An Obituary Link", app()->getLocale()) }}</li>
              <li>{{ GoogleTranslate::trans("Gravesite information (Plot number, Cemetery name, etc.)", app()->getLocale()) }}</li>
              <li>{{ GoogleTranslate::trans("Plot coordinates with walking directions to the grave", app()->getLocale()) }}</li>
              <li>{{ GoogleTranslate::trans("A Links section&nbsp;for adding&nbsp;additional&nbsp;links to&nbsp;websites", app()->getLocale()) }}</li>
              <li>{{ GoogleTranslate::trans("An interactive Tributes section for&nbsp;other people to post text, images and videos onto the Profile", app()->getLocale()) }}</li>
              <li>{{ GoogleTranslate::trans("A Follow button for getting relevant updates on Profiles of interest to you", app()->getLocale()) }}</li>
            </ul>
</div>

          </div>
              </div>
            </div>
           
            
            <div class="card tab product-tab vertical-tab background-accent_background" id="product-tab-b067c394-7eec-4c63-88d7-fff8eb72d6fb" data-block-type="text" data-visibility-type="all" data-product="7974171246843" data-product-collection="" data-product-types="" data-product-tags="">

              <button type="button" onclick="handle_collapse(this)" class="card-header tab-header tab-header-b067c394-7eec-4c63-88d7-fff8eb72d6fb headings-color" role="tab" aria-controls="tab-content-5b067c394-7eec-4c63-88d7-fff8eb72d6fb" aria-selected="false"><span class="tab-header-title">{{ GoogleTranslate::trans("How Does It Work?", app()->getLocale()) }}</span></button>

              <div class="card-body tab-body text-color " id="tab-content-5b067c394-7eec-4c63-88d7-fff8eb72d6fb" role="tabpanel" aria-labelledby="tab-button-5b067c394-7eec-4c63-88d7-fff8eb72d6fb">
                <div class="tab-content dbtfy-shop_protect-text" >
          <div class="rte product-tab-text " style="text-align: justify"><p>{{ GoogleTranslate::trans("When you receive the medallion, simply scan it and follow the instructions. You will be able to easily&nbsp;create an online profile&nbsp;to honor and commemorate the lives of those dear to you.", app()->getLocale()) }}</p><p>{{ GoogleTranslate::trans("You can create up to as many individual Digital Grave Memory ancestor profiles for yourself using the same email address, facebook account or gmail account.", app()->getLocale()) }}</p><p>{{ GoogleTranslate::trans("Each account must be made one at a time, this is done by clicking “Create an account” and going through the registration process for each personal account.", app()->getLocale()) }}</p><p>{{ GoogleTranslate::trans("A medallion can be purchased anytime through the profile development and you can also order a medallion without having an account at Digital Grave Memory.", app()->getLocale()) }}</p>
</div>

          </div>
              </div>
            </div>
         

            <div class="card tab product-tab vertical-tab background-accent_background" id="product-tab-62037f7c-2df5-4c30-8430-3685c63342ba" data-block-type="text" data-visibility-type="product" data-product="7974171246843" data-product-collection="" data-product-types="" data-product-tags="">

              <button type="button" onclick="handle_collapse(this)" class="card-header tab-header tab-header-62037f7c-2df5-4c30-8430-3685c63342ba headings-color" role="tab" aria-controls="tab-content-262037f7c-2df5-4c30-8430-3685c63342ba" aria-selected="false"><span class="tab-header-title">{{ GoogleTranslate::trans("What's Included?", app()->getLocale()) }}</span></button>

              <div class="card-body tab-body text-color "  role="tabpanel" aria-labelledby="tab-button-262037f7c-2df5-4c30-8430-3685c63342ba">
                <div class="tab-content dbtfy-shop_protect-text">
          <div class="rte product-tab-text " style="text-align: justify"><p>{{ GoogleTranslate::trans("Every order comes with two weather resistant Digital Grave Memory Medallions, Made of premium grade anodized aluminum.", app()->getLocale()) }}</p><p>{{ GoogleTranslate::trans("You will also receive two double sided 3M adhesives and a free online profile for your loved one.", app()->getLocale()) }} </p><p>{{ GoogleTranslate::trans("But most importantly a lifetime warranty with absolutely no questions asked!", app()->getLocale()) }}</p>
</div>

          </div>
              </div>
            </div></div><div class="product-single-reviews-wrapper">
                
              </div></div>
        </div>
        
        </div>

    </div><!-- /.wrapper -->
  </div>

</div><!-- /.product-single -->
<div class="dbtfy dbtfy-addtocart_animation" data-animation-type="shakeX" data-animation-interval="10000"></div>


</div>


</div>
<div  class="shopify-section featured-image-section">
  <div  class="   section-blank" >
  <div class="box">
    <div class="wrapper">
      <div class="media-wrapper" >
            <img class=""src="{{asset("assets/cdn/shop/files/qr_ad_img.jpeg")}}">
          </div>
        </div>
  </div>
</div>


</div><div id="shopify-section-template--16826824884475__cade9b47-5122-45e6-8075-2812fd1c4994" class="shopify-section quotes-section"><div id="section-template--16826824884475__cade9b47-5122-45e6-8075-2812fd1c4994" class="  section-blank" data-section-id="template--16826824884475__cade9b47-5122-45e6-8075-2812fd1c4994" data-section-type="quotes-section">
  <div class="box">
    <div class="wrapper"><div class="grid">
        <div class="grid__item large--eight-twelfths push--large--two-twelfths">
          <div class="section-header"><h2 class="section-header__title">{{ GoogleTranslate::trans("Tell Their Story", app()->getLocale()) }}</h2>
            <p class="section-header__subtitle">{{ GoogleTranslate::trans("Our loved ones deserve to have their story known, to show the world who they were, to let the memories live on forever. Explore peoples stories below", app()->getLocale()) }}</p>
          </div>
        </div>
      </div><style>
        .quote-icon-wrapper{
          width: 90px;
          height: 90px;
        }
      </style>

      <div  class="grid ">
        <!-- Blocks -->
          
          <div class="one grid__item flex large--four-twelfths medium--four-twelfths quotes-template--17830089687332__cade9b47-5122-45e6-8075-2812fd1c4994-16760079322d15312a-0"  >
          <div class="card text-center">
            <div class="">
              <img class="quote-image spacer-x-auto  lazyload" style="width: 100px;height:100px;margin-top:1rem"  src="{{asset("assets/cdn/shop/files/1st_character.png")}}">
            </div>
            <div class="card-body card-body-lg text-center small--text-center">
              <div class="rte">
                <p>{{ GoogleTranslate::trans("In Mei Lin Chang's 27 vibrant years, laughter graced her family's home. Sadly, orona stole her away,leaving a painful void. A recent bride, Mei Lin brought joy but succumbed to the pandemic. Her laughter  now echoes in cherished memories. Mei Lin's tale, a heart-wrenching loss, underlines the toll of the  pandemic. Yet, her spirit lingers—a resilient melody in the silence. Though Mei Lin is gone, her legacy   persists, a testament to the enduring power of love", app()->getLocale()) }}</p>
              </div>
            </div>
            <div class="card-footer card-footer-xs">
              <cite>{{ GoogleTranslate::trans("Mei Lin Chang", app()->getLocale()) }}</cite>
            </div>
          </div>
        </div>
        <div class="two grid__item flex large--four-twelfths medium--four-twelfths quotes-template--17830089687332__cade9b47-5122-45e6-8075-2812fd1c4994-16760079322d15312a-1" >
          <div class="card text-center">
            <div class="">
              <img class="quote-image spacer-x-auto  lazyload"  style="width: 100px;height:100px;margin-top:1rem" src="{{asset("assets/cdn/shop/files/2nd_character.png")}}" >
            </div>
            <div class="card-body card-body-lg text-center small--text-center">
              <div class="rte">
                <p>{{ GoogleTranslate::trans("Vishal Patel, a dreamer with a cricketing heart, aspired to shine for England. The sole joy of his family, he, the British Indian gem, awaited marriage in three short months. Yet, fate's cruel hand snatched him away in a tragic road accident. The echoes of his laughter and cricket dreams linger in the family's home. Vishal's untimely departure, a heartrending tale, leaves an indelible void. In the quiet moments, his absence speaks volumes. Though Vishal's time was cut short, his spirit endures—a cherished melody in the silence, a testament to the love that transcends earthly bounds.", app()->getLocale()) }}</p>
              </div>
            </div>
            <div class="card-footer card-footer-xs">
              <cite>{{ GoogleTranslate::trans("Vishal Patel", app()->getLocale()) }}</cite>
            </div>
          </div>
        </div>
        <div class="three grid__item flex large--four-twelfths medium--four-twelfths quotes-template--17830089687332__cade9b47-5122-45e6-8075-2812fd1c4994-16760079322d15312a-2"  >
          <div class="card text-center">
            <div class="">
              <img class="quote-image spacer-x-auto  lazyload"  style="width: 100px;height:100px;margin-top:1rem"  src="{{asset("assets/cdn/shop/files/3rd_character.png")}}" >
            </div>
            <div class="card-body card-body-lg text-center small--text-center">
              <div class="rte">
                <p> {{ GoogleTranslate::trans("Jackson Asher Thompson, 42, a lover of adventure and hikes, painted his family's world with joy. Amidst laughter, his two children mirrored his zest. Cancer, a cruel artist, stole him away, leaving behind a palette of sorrow. Jackson's laughter, now a silent melody, echoes in their hearts. His legacy, a poignant reminder to seize life's adventures, to find beauty even in pain. In grief, his spirit remains—an emotional whisper, a guide through the journey of love and loss", app()->getLocale()) }} </p>
              </div>
            </div>
            <div class="card-footer card-footer-xs">
              <cite>{{ GoogleTranslate::trans("Jackson Asher Thompson", app()->getLocale()) }}</cite>
            </div>
          </div>
        </div>
        <div class="dot_c_container" style="display: none">
          <div class="dot_c" onclick="handle_chracter('one')"></div>
          <div class="dot_c" onclick="handle_chracter('two')"></div>
          <div class="dot_c" onclick="handle_chracter('three')"></div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
<div  class="shopify-section featured-image-section">
  <div  class="   section-blank" >
  <div class="box">
    <div class="wrapper">
      <div class="media-wrapper" >
            <img class=" " src="{{asset("assets/cdn/shop/files/image_9.jpeg")}}">
        </div>
    </div>
  </div>
</div>


</div>
</div>
</main>

<script>
// let dbtfy_product_tab_box = document.getElementsByClassName("dbtfy-product-tab-box")[0].children;
//   for (const elem of dbtfy_product_tab_box) {
//     elem.addEventListener('click',function(){
//       for(let el  of dbtfy_product_tab_box) {
//         el.children[1].classList.add("tab-body")
//       }
//       this.children[1].classList.remove("tab-body")
    
//     })
//   }
function handle_collapse(e){  
  if(e.classList.contains("active")){
    e.classList.remove("active")
  }else{
    e.classList.add("active")
  }
}

  function handle_chracter(d){
    ['one','two','three'].forEach((e)=>{
      document.getElementsByClassName(e)[0].style.display='none'
    })
    console.log(d);
    document.getElementsByClassName(d)[0].style.display='block'
  }

  
  let sliding_img = document.getElementsByClassName("sliding_img");
  for (const elem of sliding_img) {
    elem.addEventListener('click',function(){
      slided_content.src = this.src;
    console.log(this.src)
    
    })
  }
</script>
<div class="modal fade " id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      
      <div class="modal-body relative">
        <button type="button" style="float: right" onclick="close_video()" class="btn-close absolute" data-bs-dismiss="modal" aria-label="Close"></button>
       <br>
        <video width="100%" height="500" controls id="slide_video" >
          <source src="{{asset("assets/cdn/shop/files/qr_video.mp4")}}" type="video/mp4">
          
         
        </video>
      </div>
      
    </div>
  </div>
</div>

<script>
  function close_video(){
    slide_video.pause();
    console.log("HI")
  }
</script>

@endsection