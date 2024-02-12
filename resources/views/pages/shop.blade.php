@extends("layout.app")
@section("content")

<main id="mainContent" class="main-content fadeIn" role="main">

  <div  class="shopify-section featured-row-section">
    <div  class="  section-blank" >
   <div class="box">
     <div class="wrapper">
      @if(session()->get('error'))
      <div class="alert alert-danger ">
      {{ session()->get('error')}}
      </div>
      @endif
  
      @if (session()->get('success'))
      <div class="alert  alert-success ">
          {{ session()->get('success') }}
      </div>
      @endif
      <h2 style="text-align: center">{{ GoogleTranslate::trans("One Subscription, Lifetime Facilities", app()->getLocale()) }}</h2>
      <br>
      <div class="c_grid">
        <div  class="c_card">
          <div>
            <h3>0.00$</h3>
            <hr>
          </div>
          
          <div>
           <h4>
            <b>{{ GoogleTranslate::trans("Free", app()->getLocale()) }}</b>
             </h4>
    
          </div>
         
          <br>
         
          <div>
            <ul style="margin-left: 0rem;padding-left: 0.3rem;" class="card_packege_ul">
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Up to two QR profiles.", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Full access to write their story", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i>{{ GoogleTranslate::trans("Unlimited updating facilities.", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i>{{ GoogleTranslate::trans("Lifetime access.", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Follow button for getting relevant updates", app()->getLocale()) }}A </li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> <del> {{ GoogleTranslate::trans("Photos and video upload facilities ", app()->getLocale()) }}</del></li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Third-party ads may come", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> <del> {{ GoogleTranslate::trans("Obituary Link", app()->getLocale()) }} </del></li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> <del>{{ GoogleTranslate::trans("Gravesite information (Plot number, Cemetery name, etc.)", app()->getLocale()) }} </del></li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> <del>{{ GoogleTranslate::trans("Plot coordinates with walking directions to the grave", app()->getLocale()) }} </del></li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> <del>{{ GoogleTranslate::trans("A Links section for adding additional links to websites", app()->getLocale()) }}</del></li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> <del>{{ GoogleTranslate::trans("An interactive Moment section for other people to post text, images", app()->getLocale()) }}</del></li>
            </ul>
          </div>
          <div>
            <br><br>
            <a  @if(session()->get("is_login") != true )
               onclick="handle_login_message()"
               @else
               href="{{URL::to("/qr_dashboard")}}"
              @endif
               class="btn custom_brand_btn btn-block w-100">Go </a>
     
          </div>
        </div>


        <div  class="c_card">
          <div>
            <h3>10.00$</h3>
            <hr>
          </div>
          
          <div>
           <h4> {{ GoogleTranslate::trans("Family Packs Limited Access", app()->getLocale()) }}</h4>
    
          </div>
        
          <br>
         
          <div>
            <ul style="margin-left: 0rem;padding-left: 0.3rem;" class="card_packege_ul">
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Five QR profiles .", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Full access to write their story.", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i>{{ GoogleTranslate::trans("Unlimited updating facilities.", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i>{{ GoogleTranslate::trans("Lifetime access.", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("A Follow button for getting relevant updates", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> <del> {{ GoogleTranslate::trans("Photos and video upload facilities", app()->getLocale()) }} </del></li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Third-party ads may come", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> <del> {{ GoogleTranslate::trans("Obituary Link", app()->getLocale()) }} </del></li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> <del>{{ GoogleTranslate::trans("Gravesite information (Plot number, Cemetery name, etc.)", app()->getLocale()) }} </del></li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> <del>{{ GoogleTranslate::trans("Plot coordinates with walking directions to the grave ", app()->getLocale()) }}</del></li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> <del>{{ GoogleTranslate::trans("A Links section for adding additional links to websites", app()->getLocale()) }}</del></li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> <del>{{ GoogleTranslate::trans("An interactive Moment section for other people to post text, images", app()->getLocale()) }}</del></li>
            </ul>
          </div>
          <div>
            <br><br>
            <a
            @if(session()->get("is_login") != true ) onclick="handle_login_message()"
            @else
            href="payment_qr?pa=fa_p_l_a_5_10$"
            @endif
             
             class="btn custom_brand_btn btn-block w-100">Go </a>
     
          </div>
        </div>


        <div  class="c_card">
          <div>
            <h3>7.00$</h3>
            <hr>
          </div>
          
          <div>
           <h5> {{ GoogleTranslate::trans("Convert Free to Premium For 1 QR profile", app()->getLocale()) }}</h5>
            <p style="margin-bottom: 1.9rem">{{ GoogleTranslate::trans("(You Can Convert Any Free QR Profile To Premium)", app()->getLocale()) }}</p>
          </div>
 
          <div>
            <ul style="margin-left: 0rem;padding-left: 0.3rem;" class="card_packege_ul">
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Full access to write their story.", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i>{{ GoogleTranslate::trans("Unlimited updating facilities.", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Lifetime access to Every section.", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Follow button for getting relevant updates", app()->getLocale()) }}A </li>
              <li> <i class="fa fa-star" aria-hidden="true"></i>{{ GoogleTranslate::trans("Photos and video upload facilities", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("No Third-party ads at all", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Obituary Link", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Gravesite information (Plot number, Cemetery name, etc.)", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i>{{ GoogleTranslate::trans("Plot coordinates with walking directions to the grave", app()->getLocale()) }} </li>
              <li> <i class="fa fa-star" aria-hidden="true"></i>  {{ GoogleTranslate::trans("A Links section for adding additional links to websites", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("An interactive Moment section for other people to post text, images", app()->getLocale()) }}</li>
            </ul>
          </div>
          <div>
            <a  @if(session()->get("is_login") != true )
              onclick="handle_login_message()"
              @else
              href="payment_qr?pa=fr_to_1_7$"
             @endif
              class="btn custom_brand_btn btn-block w-100">Go </a>
     
          </div>
        </div>

        <div  class="c_card">
          <div>
            <h3>7.00$</h3>
            <hr>
          </div>
          
          <div>
           <h5>{{ GoogleTranslate::trans("Premium Access Single profile", app()->getLocale()) }}</h5>
            
          </div>
         
          <br>
         
          <div>
            <ul style="margin-left: 0rem;padding-left: 0.3rem;" class="card_packege_ul">
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Full access to write their story.", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i>{{ GoogleTranslate::trans("Unlimited updating facilities.", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Lifetime access to Every section.", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("A Follow button for getting relevant updates", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i>{{ GoogleTranslate::trans("Photos and video upload facilities", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("No Third-party ads at a ll", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Obituary Link", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Gravesite information (Plot number, Cemetery name, etc.)", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Plot coordinates with walking directions to the grave", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i>  {{ GoogleTranslate::trans("A Links section for adding additional links to websites", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("An interactive Moment section for other people to post text, images", app()->getLocale()) }}</li>
            </ul>
          </div>
          <div>
            <a  @if(session()->get("is_login") != true )
              onclick="handle_login_message()"
              
              @else
              href="payment_qr?pa=pr_a_s_p_1_7$"

             @endif
              class="btn custom_brand_btn btn-block w-100">Go </a>
          </div>
        </div>

        <div  class="c_card">
          <div>
            <h3>55.00$</h3>
            <hr>
          </div>
          
          <div>
           <h5>{{ GoogleTranslate::trans("Family Packs Premium Access", app()->getLocale()) }}</h5>
            
          </div>
         
          
         
          <div>
            <ul style="margin-left: 0rem;padding-left: 0.3rem;" class="card_packege_ul">
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Up to Ten QR profiles.", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Full access to write their story.", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i>{{ GoogleTranslate::trans("Unlimited updating facilities.", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Lifetime access to Every section.", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("A Follow button for getting relevant updates", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i>{{ GoogleTranslate::trans("Photos and video upload facilities", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("No Third-party ads at a ll", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Obituary Link", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Gravesite information (Plot number, Cemetery name, etc.)", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("Plot coordinates with walking directions to the grave", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i>  {{ GoogleTranslate::trans("A Links section for adding additional links to websites", app()->getLocale()) }}</li>
              <li> <i class="fa fa-star" aria-hidden="true"></i> {{ GoogleTranslate::trans("An interactive Moment section for other people to post text, images", app()->getLocale()) }}</li>
            </ul>
          </div>
          <div>
            <a  @if(session()->get("is_login") != true )
              onclick="handle_login_message()"
              @else
              href="payment_qr?pa=fa_pa_ac_10_55$"
             @endif
              class="btn custom_brand_btn btn-block w-100">Go </a>
          </div>
        </div>



     
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
       <div class="grid__item large--six-twelfths medium--six-twelfths featured-row-left">
        <div class="media-wrapper" >
          
          <img class="" src="{{asset("assets/cdn/shop/files/image_1.jpeg")}}"></div></div>

       <div class="grid__item large--six-twelfths medium--six-twelfths text-center">
        <h2 class="section-header__title "></h2>
        <div class="rte text-lead">
          <p>{{ GoogleTranslate::trans("Preserve the stories and memories of your ancestors effortlessly with our platform. We offer unique QR codes that provide a lasting link to your loved ones' profiles. This simple and heartfelt gesture ensures their memories are easily accessible for generations to come.", app()->getLocale()) }}</p>
        </div>
      </div>
     </div>

   </div>
 </div>
</div>


</div>
<div  class="shopify-section featured-columns-section">
  <div class="  section-blank" >
 <div class="box">
   <div class="wrapper"><div class="grid">
         <div class="grid__item large--eight-twelfths push--large--two-twelfths">
           <div class="section-header"><h2 class="section-header__title">{{ GoogleTranslate::trans("Easy 3 Step Proccess", app()->getLocale()) }}</h2></div>
          </div>
       </div><div class="grid grid-spacer text-center">
        <!-- Blocks -->
        <div class="grid__item large--four-twelfths medium--four-twelfths">
          <div class="media-wrapper spacer-bottom" style="padding-top:100.0%;">
            <img class="media lazyload" src="{{asset("assets/cdn/shop/files/proccess_3.jpeg")}}">
          </div>
          
          <h3 class="h4">{{ GoogleTranslate::trans("Print", app()->getLocale()) }} </h3>
             <div class="rte"><p>{{ GoogleTranslate::trans("Print the QR after receiving it. Or you can have it engraved on the grave wall if you want.", app()->getLocale()) }}
            </p></div></div><div class="grid__item large--four-twelfths medium--four-twelfths" 
             ><div class="media-wrapper spacer-bottom" style="padding-top:100.0%;">
              <img class="media lazyload" src="{{asset("assets/cdn/shop/files/proccess_2.jpeg")}}">
            </div>
            <h3 class="h4">{{ GoogleTranslate::trans("Scan", app()->getLocale()) }}</h3>
             <div class="rte">
              <p>{{ GoogleTranslate::trans("Scan your QR and you will be taken to the Digital Grave Memory website. Click the button that says
              “Create profile”.", app()->getLocale()) }}</p>
            </div>
          </div>
          <div class="grid__item large--four-twelfths medium--four-twelfths" >
            
            <div class="media-wrapper spacer-bottom" style="padding-top:100.0%;">
              <img class="media lazyload" src="{{asset("assets/cdn/shop/files/proccess_1.jpeg")}}"></div>
              <h3 class="h4">{{ GoogleTranslate::trans("Create", app()->getLocale()) }}</h3>
             <div class="rte">
              <p>{{ GoogleTranslate::trans("Sign up and start filling out your profile with information about your loved one or even start building a
              profile for yourself.", app()->getLocale()) }}</p>
            </div>
          </div>
        </div>
      </div>
 </div>
</div>


</div><div id="shopify-section-template--16826826129659__pricing-table" class="shopify-section dbtfy dbtfy-pricing_table">
</div><div id="shopify-section-template--16826826129659__product-recommendations" class="shopify-section product-recommendations-section">
</div><div id="shopify-section-template--16826826129659__review-widget" class="shopify-section product-single-reviews-wrapper">
</div><div id="shopify-section-template--16826826129659__related-products" class="shopify-section related-product-section">
</div><div id="shopify-section-template--16826826129659__back-to-collection" class="shopify-section">
</div><div id="shopify-section-template--16826826129659__quotes" class="shopify-section quotes-section">
</div><div id="shopify-section-template--16826826129659__loox-product-reviews-app-section" class="shopify-section">



</div>
<div class="shopify-section featured-image-section">
  <div  class="   section-blank"  >
 <div class="box">
   <div class="wrapper"><div class="media-wrapper" style="padding-top:56.25%;">
           <img class="media lazyload"src="{{asset("assets/cdn/shop/files/image_3.jpeg")}}" >
         </div></div>
 </div>
</div>


</div>
<div  class="shopify-section featured-image-section">
  <div  class="   section-blank" >
 <div class="box">
  <div class="wrapper">
  <div class="media-wrapper" style="padding-top:79.07801418439716%;">
  <img class="media lazyload"src="{{asset("assets/cdn/shop/files/image_9.jpeg")}}">
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
       <div class="grid__item large--six-twelfths medium--six-twelfths featured-row-left">
        <div class="media-wrapper" style="padding-top:100.0%;">
          <img class="media lazyload" src="{{asset("assets/cdn/shop/files/grante_img.jpg")}}">
        </div>
      </div>

       <div class="grid__item large--six-twelfths medium--six-twelfths text-center"><h2 class="section-header__title">{{ GoogleTranslate::trans("Our Guarantee", app()->getLocale()) }}</h2><div class="rte">
        <p>{{ GoogleTranslate::trans("Every Grave Memory QR purchase comes with a free
          lifetime access, with absolutely no questions asked. We are
          a BD based company. And we are extremely confident in our
          site and customer experience. If you have any issues please
          mail us and it will be taken care of immediately!", app()->getLocale()) }} </p>
      </div></div>
     </div>

   </div>
 </div>
</div>


</div>
</main>
@endsection