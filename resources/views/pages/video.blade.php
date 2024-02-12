@extends("layout.app")
@section("content")
<main  class="main-content fadeIn" >
<br>
  <h3 style="text-align: center;font-family: fantasy;">WE CREATE YOUR VIDEO</h3>

  <div  class="shopify-section product-section">
    <div >
      @if(session()->get('errors'))
    <div class="alert alert-danger ">
    {{ session()->get('errors')->first() }}
    </div>
    @endif

    @if (session('message'))
    <div class="alert @if(session('condition') == true) alert-success @else alert-danger @endif">
        {{ session('message') }}
    </div>
    @endif

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
                  {{-- <img id="slided_content" class="product--image media product-single__media-template--16826826129659__main-33793472954619 lazyautosizes ls-is-cached lazyloaded" src="{{asset("assets/cdn/shop/files/proccess_3.jpeg")}}">   --}}
                  <video width="100%" height="100%" id="video_player" src="{{asset("assets/cdn/shop/files/1.mp4")}}" controls > </video>
               
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
<div class="video_gellary">

 <style>
  .video_g{
    cursor: pointer;
  }
 </style>
  <img class="video_g" id="{{asset("assets/cdn/shop/files/1.mp4")}}" src="{{asset("assets/cdn/shop/files/BC1.jpg")}}" alt="">
  <img class="video_g" id="{{asset("assets/cdn/shop/files/2.mp4")}}" src="{{asset("assets/cdn/shop/files/BC2.jpg")}}" alt="">
  <img class="video_g" id="{{asset("assets/cdn/shop/files/3.mp4")}}" src="{{asset("assets/cdn/shop/files/BC3.jpg")}}" alt="">
  <img class="video_g" id="{{asset("assets/cdn/shop/files/4.mp4")}}" src="{{asset("assets/cdn/shop/files/BC4.jpg")}}" alt="">
  <img class="video_g" id="{{asset("assets/cdn/shop/files/5.mp4")}}" src="{{asset("assets/cdn/shop/files/BC5.jpg")}}" alt="">
  <img class="video_g" id="{{asset("assets/cdn/shop/files/6.mp4")}}" src="{{asset("assets/cdn/shop/files/BC6.jpg")}}" alt="">
  <img class="video_g" id="{{asset("assets/cdn/shop/files/7.mp4")}}" src="{{asset("assets/cdn/shop/files/BC7.jpg")}}" alt="">
  <img class="video_g" id="{{asset("assets/cdn/shop/files/8.mp4")}}" src="{{asset("assets/cdn/shop/files/BC8.jpg")}}" alt="">
  <img class="video_g" id="{{asset("assets/cdn/shop/files/9.mp4")}}" src="{{asset("assets/cdn/shop/files/BC9.jpg")}}" alt="">
  <img class="video_g" id="{{asset("assets/cdn/shop/files/10.mp4")}}" src="{{asset("assets/cdn/shop/files/BC.jpg")}}" alt="">
</div>


</div>
</div>
                   
</div>
</div>
         



        </div>

        
        <!-- right grid item -->
        <div  class="grid__item product-single__meta--wrapper large--six-twelfths">
         
          <div class="product-single__meta">
            
            <div class="">
                <div class="grid grid-xsmall flex-nowrap product-title-container">
    <div class="grid__item flex-fill">
    <a href="#explore_box" class="btn btn-sm d-grid" style="background: #B99470;"> 
       <h5 class="product-single__title" style="font-weight: bold;"> {{ GoogleTranslate::trans("CLICK HERE TO EXPLORE", app()->getLocale()) }} </h5>
      </a>
    
    </div>

  </div>
              </div>
              
             
             
              
                
</div>
    <div class="dbtfy-product-tab-box">
      <div class="card tab product-tab vertical-tab background-accent_background" >

              <button type="button"  onclick="handle_collapse(this)"  class="card-header tab-header  headings-color">
                <span class="tab-header-title">{{ GoogleTranslate::trans("Eternal Memories, Crafted with Love", app()->getLocale()) }} </span></button>

              <div class="card-body tab-body text-color " >
                <div class="tab-content dbtfy-shop_protect-text">
          <div class="rte product-tab-text " style="text-align: justify">
            <p>{{ GoogleTranslate::trans("In moments of loss, the desire to preserve cherished memories becomes more than a wish – it becomes a heartfelt necessity. At Digital Grave Memory, we understand the significance of  creating a final memory that truly honors your loved one's legacy.", app()->getLocale()) }}</p>
          </div>

          </div>
              </div>
            </div>
            <div class="card tab product-tab vertical-tab background-accent_background" >

              <button onclick="handle_collapse(this)"   class="card-header tab-header ">
                <span class="tab-header-title"> {{ GoogleTranslate::trans("Exclusive Premium Quality", app()->getLocale()) }}
              </span></button>

              <div class="card-body tab-body text-color " >
                <div class="tab-content dbtfy-shop_protect-text">
          <div class="rte product-tab-text " style="text-align: justify"><p>{{ GoogleTranslate::trans("Our commitment to excellence sets us apart. With cutting-edge technology and a passion for   perfection, we deliver exclusive, premium-quality videos that serve as a fitting tribute to the extraordinary lives we celebrate.", app()->getLocale()) }}</p>
</div>

          </div>
              </div>
            </div><div class="card tab product-tab vertical-tab background-accent_background">

              <button  onclick="handle_collapse(this)" class="card-header tab-header  headings-color"  ><span class="tab-header-title">Compassionate Collaboration</span></button>

              <div class="card-body tab-body text-color " >
                <div class="tab-content dbtfy-shop_protect-text">
          <div class="rte product-tab-text " style="text-align: justify"><p>{{ GoogleTranslate::trans("Embark on this emotional journey with a team that cares. We navigate the process with empathy and understanding, ensuring that the video captures the essence of your loved one's  unique story.", app()->getLocale()) }}</p>
</div>

          </div>
              </div>
            </div><div class="card tab product-tab vertical-tab background-accent_background" >

              <button onclick="handle_collapse(this)" class="card-header tab-header  headings-color" role="tab" ><span class="tab-header-title">{{ GoogleTranslate::trans("Premium Quality, Timeless Beauty", app()->getLocale()) }}</span></button>

              <div class="card-body tab-body text-color " >
                <div class="tab-content dbtfy-shop_protect-text">
          <div class="rte product-tab-text " style="text-align: justify"><p>{{ GoogleTranslate::trans("Our commitment to excellence guarantees a video of unparalleled quality. Each frame is  meticulously crafted to capture the warmth, joy, and enduring spirit of your cherished person,  creating a timeless testament to their legacy.", app()->getLocale()) }}
            </p>
</div>

          </div>
              </div>
            </div><div class="card tab product-tab vertical-tab background-accent_background" >

              <button type="button" onclick="handle_collapse(this)"  class="card-header tab-header  headings-color" ><span class="tab-header-title">{{ GoogleTranslate::trans("Timeless Tributes", app()->getLocale()) }}</span></button>

              <div class="card-body tab-body text-color " >
                <div class="tab-content dbtfy-shop_protect-text">
          <div class="rte product-tab-text " style="text-align: justify"><p>{{ GoogleTranslate::trans("Your loved one's legacy deserves a video that stands the test of time. Our skilled editors expertly weave together moments, creating a timeless tribute that preserves love, laughter, and  special memories forever.", app()->getLocale()) }}
            </p>
</div>

          </div>
              </div>
            </div>
            <div class="card tab product-tab vertical-tab background-accent_background " >

              <button onclick="handle_collapse(this)"  class="card-header tab-header " role="tab" ><span class="tab-header-title">{{ GoogleTranslate::trans("**Create with Confidence **", app()->getLocale()) }}</span></button>

              <div class="card-body tab-body text-color " >
                <div class="tab-content dbtfy-shop_protect-text">
          <div class="rte product-tab-text " style="text-align: justify">
            <p>{{ GoogleTranslate::trans("With just a few clicks, you can entrust us with the honor of creating a video that will be your loved one's lasting legacy. Our website facilitates a straightforward ordering process, providing you with the assurance and confidence that this tribute will be handled with utmost care.", app()->getLocale()) }}</p>
        </div>

          </div>
              </div>
            </div>
          
            <div class="card tab product-tab vertical-tab background-accent_background" >

              <button onclick="handle_collapse(this)" class="card-header tab-header " role="tab" ><span class="tab-header-title">{{ GoogleTranslate::trans("**A Legacy of Love, Preserved Forever:**", app()->getLocale()) }}</span></button>

              <div class="card-body tab-body text-color " >
                <div class="tab-content dbtfy-shop_protect-text">
          <div class="rte product-tab-text " style="text-align: justify">
            <p>{{ GoogleTranslate::trans("In choosing Digital Grave Memory, you`re not just acquiring a video you`re preserving a legacy  of love. Let us help you celebrate a life well-lived and ensure that the memory of your dear one remains a source of comfort and inspiration for generations to come.  Choose Digital Grave Memory for an extraordinary tribute that transcends the ordinary. der  now and let us transform your memories into an everlasting masterpiece.", app()->getLocale()) }} </p>
        </div>

          </div>
              </div>
            </div>

          </div>
           </div>
        </div>
        
        
     
  
</div>

    </div><!-- /.wrapper -->
  </div><!-- /.box -->
</div><!-- /.product-single -->


</div>

</div>


       
</div>
  




</div>

<div class="box">
  <div class="wrapper">

    <div class="grid grid-spacer align-center">
      <div class="grid__item large--six-twelfths medium--six-twelfths featured-row-left">
        <div class="media-wrapper" style="">
        <img class=" " src="{{asset("assets/cdn/shop/files/image_1.jpeg")}}">
      </div></div>

      <div class="grid__item large--six-twelfths medium--six-twelfths text-center">
        <h2 class="section-header__title"></h2>
      <div class="rte text-lead">
      </div>

      <div class="card tab product-tab vertical-tab background-accent_background" id="explore_box" >

       

        <div class="card-body tab-body text-color " style="display:block " >
          <div class="tab-content dbtfy-shop_protect-text">
    <div class="rte product-tab-text ">
     <div class="card">
      <div class="card-header">
       
        {{-- <h5 style="font-size: 14px; font-weight: bold;text-align: justify;">{{ GoogleTranslate::trans("To create your video, please provide us with all the necessary videos and photos of your loved ones via  Google Drive.", app()->getLocale()) }}</h5> --}}
      </div>
      <div class="card-body" >
        
        <form action="{{URL::to("/video_edit_user_info")}}" class="row" style="text-align: justify">
        
          <div class="form-group ">
            <label for="relationship"><small> {{ GoogleTranslate::trans("To create your video, please provide us with all the necessary videos and photos of your loved ones via  Google Drive.", app()->getLocale()) }} </small>
            </label>
            <input type="text" name="drive_link" id="relationship" class="form-control" placeholder="Enter google drive link " >
           
          </div>
        
          <div class="form-group ">
            <label for="relationship"><small> {{ GoogleTranslate::trans("The relation between you and your lovable one.", app()->getLocale()) }} </small>
            </label>
            <input type="text" name="relationship" id="relationship" class="form-control" placeholder="Enter here 
            " >
           
          </div>
          <div class="form-group ">
              <label for="specific_music_link"><small> {{ GoogleTranslate::trans("Do you have any specific music choices for the video? if yes. then provide the link.", app()->getLocale()) }}</small> 
              </label>
              <input type="text" name="specific_music_link" id="specific_music_link" class="form-control" placeholder="Enter here" >
            </div>

            <div class="form-group ">
              <label for="shown_beginning"><small>{{ GoogleTranslate::trans("Who should be shown at the beginning of the video?", app()->getLocale()) }}</small></label>
              <input type="text" name="shown_beginning" id="shown_beginning" class="form-control" placeholder="Enter here " aria-describedby="helpId">
            </div>

            <div class="form-group ">
              <label for="video_type"><small>{{ GoogleTranslate::trans("Will the video be serious? Or would it be Funny? Or joyful. or entertaining?", app()->getLocale()) }}</small> </label>
              <input type="text" name="video_type" id="video_type" class="form-control" placeholder="Enter here" aria-describedby="helpId">
            </div>

            <div class="form-group ">
              <label for="about_your_desired_video"><small>{{ GoogleTranslate::trans("Write something about your desired video", app()->getLocale()) }}</small> </label>
              {{-- <input type="text" name="" id="" class="form-control" placeholder="Enter here" aria-describedby="helpId"> --}}
          <textarea class="form-control" name="about_your_desired_video" id="about_your_desired_video" rows="5"></textarea>
            </div>

            <div class="d-grid  ">
              <hr>
             <button
             @if(session()->get("is_login") != true ) onclick="handle_login_message()" type="button" @else  type="submit"   @endif  class="btn custom_brand_btn btn-sm btn-blok ">{{ GoogleTranslate::trans("Next", app()->getLocale()) }}</button>
              
            </div>

      </form>
      </div>
     </div>
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