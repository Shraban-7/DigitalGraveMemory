<!doctype html>
<html lang="en">
  <head>
    <!-- Basic page needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,shrink-to-fit=no">
    @php
    // @dd( Request::path())
       $seo = App\Models\SEOSetting::where('author','LIKE', "%".Request::path()."%")->first();
    @endphp
      {{-- @dd(   $seo); --}}
    <meta name="keywords" content="{{$seo->keyword ?? null}}">
    <meta name="description" content="{{$seo->description ?? null}}">
    <meta name="author" content="{{$seo->author ?? null}}">
    <meta name="sitemap_link" content="{{$seo->sitemap_link ??null}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&display=swap" rel="stylesheet">
 
    <link rel="preload" href="{{asset("assets/cdn/shop/t/13/assets/theme.scss.css?v=88210945444001586951700689308")}}" as="style">
    <link rel="preload" as="font" href="{{asset("assets/cdn/fonts/poppins/poppins_n7.58aca33913fc6666cc9e8a53f6b16ec5c3c05a3f.woff2?h1=dHVybmluZy1oZWFydHMtdG9kYXkuYWNjb3VudC5teXNob3BpZnkuY29t&h2=dHVybmluZ2hlYXJ0cy5jb20&h3=dHVybmluZy1oZWFydC10b2RheS5teXNob3BpZnkuY29t&h4=dHVybmluZ2hlYXJ0c3RvZGF5LmNvbQ&hmac=899fe481a3706edc80b9dd64e5cd408f78f3a9aace9e6ca377c725c47d1cc3f4")}}" type="font/woff2" crossorigin>
    <link rel="preload" as="font" href="{{asset("assets/cdn/fonts/poppins/poppins_n6.e2fdd168541a5add2d1a8d6f2b89b09c9c9e690d.woff2?h1=dHVybmluZy1oZWFydHMtdG9kYXkuYWNjb3VudC5teXNob3BpZnkuY29t&h2=dHVybmluZ2hlYXJ0cy5jb20&h3=dHVybmluZy1oZWFydC10b2RheS5teXNob3BpZnkuY29t&h4=dHVybmluZ2hlYXJ0c3RvZGF5LmNvbQ&hmac=c5259996853da9071db6db30b305840f0cacf17c92776682fe3163656b2c7a63")}}" type="font/woff2" crossorigin>
    <link rel="preload" as="font" href="{{asset("assets/cdn/fonts/poppins/poppins_n4.934accbf9f5987aa89334210e6c1e9151f37d3b6.woff2?h1=dHVybmluZy1oZWFydHMtdG9kYXkuYWNjb3VudC5teXNob3BpZnkuY29t&h2=dHVybmluZ2hlYXJ0cy5jb20&h3=dHVybmluZy1oZWFydC10b2RheS5teXNob3BpZnkuY29t&h4=dHVybmluZ2hlYXJ0c3RvZGF5LmNvbQ&hmac=294ca40257c731128e5d319dae8662f849beeb8857907bbbc784e5d6744aa21d")}}" type="font/woff2" crossorigin>
    <link rel="preload" as="font" href="{{asset("assets/cdn/shop/t/13/assets/material-icons-outlined.woff2?v=141032514307594503641696874720")}}" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset("assets/cdn/shop/t/13/assets/jquery-2.2.3.min.js?v=40203790232134668251696874751")}}" as="script">
    <link rel="preload" href="{{asset("assets/cdn/shop/t/13/assets/theme.min.js?v=103825426679960428201696874751")}}" as="script">
    <link rel="preload" href="{{asset("assets/cdn/shop/t/13/assets/lazysizes.min.js?v=46221891067352676611696874720")}}" as="script">
    <link rel="preload" href="{{asset("assets/cdn/shop/t/13/assets/dbtfy-addons.min.js?v=159186154946397321921700689308")}}" as="script">
    @php
      $ip = $_SERVER['REMOTE_ADDR'];
      if(App\Models\SiteVisitor::where(['ip'=>$ip])->count() <=0){
        App\Models\SiteVisitor::insert([
          'ip'=>$ip,
          'date'=>date("Y-m-d"),
        ]);
      }else{
        App\Models\SiteVisitor::where(['ip'=>$ip])->update([
          'date'=>date("Y-m-d"),
      ]);
      }
    @endphp
  <!-- CSS  -->
  <link href="{{asset("assets/cdn/shop/t/13/assets/theme.scss.css?v=88210945444001586951700689308")}}" rel="stylesheet" type="text/css" media="all" />
    <!-- Fav icon -->
    <link sizes="192x192" rel="shortcut icon" type="image/png" id="favicon" href="{{asset("assets/cdn/shop/files/TH-favicon_100x100_crop_center.png")}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
 
    <!-- Title and description -->
    <title> {{$seo->sitemap_link ?? 'Digital Grave Memory'}} </title>

    <style>
      html,body{
    overflow-x: hidden;
}

html {
    scroll-behavior: smooth;
  }
      @font-face {
  font-family: Poppins;
  font-weight: 700;
  font-style: normal;
  font-display: swap;
  src: url("assets/cdn/fonts/poppins/poppins_n7.58aca33913fc6666cc9e8a53f6b16ec5c3c05a3f.woff2?h1=dHVybmluZy1oZWFydHMtdG9kYXkuYWNjb3VudC5teXNob3BpZnkuY29t&h2=dHVybmluZ2hlYXJ0cy5jb20&h3=dHVybmluZy1oZWFydC10b2RheS5teXNob3BpZnkuY29t&h4=dHVybmluZ2hlYXJ0c3RvZGF5LmNvbQ&hmac=899fe481a3706edc80b9dd64e5cd408f78f3a9aace9e6ca377c725c47d1cc3f4") format("woff2"),
       url("assets/cdn/fonts/poppins/poppins_n7.59016f931f3f39434d2e458fba083eb7db7a07d9.woff?h1=dHVybmluZy1oZWFydHMtdG9kYXkuYWNjb3VudC5teXNob3BpZnkuY29t&h2=dHVybmluZ2hlYXJ0cy5jb20&h3=dHVybmluZy1oZWFydC10b2RheS5teXNob3BpZnkuY29t&h4=dHVybmluZ2hlYXJ0c3RvZGF5LmNvbQ&hmac=54cfec9f3a8e61cda4147ff12abdb9fff572b108146964f3395f7b21929c8285") format("woff");
}

      @font-face {
  font-family: Poppins;
  font-weight: 600;
  font-style: normal;
  font-display: swap;
  src: url("assets/cdn/fonts/poppins/poppins_n6.e2fdd168541a5add2d1a8d6f2b89b09c9c9e690d.woff2?h1=dHVybmluZy1oZWFydHMtdG9kYXkuYWNjb3VudC5teXNob3BpZnkuY29t&h2=dHVybmluZ2hlYXJ0cy5jb20&h3=dHVybmluZy1oZWFydC10b2RheS5teXNob3BpZnkuY29t&h4=dHVybmluZ2hlYXJ0c3RvZGF5LmNvbQ&hmac=c5259996853da9071db6db30b305840f0cacf17c92776682fe3163656b2c7a63") format("woff2"),
       url("assets/cdn/fonts/poppins/poppins_n6.6d62d2d0f11a9ff578d200ad2154f9860db165c1.woff?h1=dHVybmluZy1oZWFydHMtdG9kYXkuYWNjb3VudC5teXNob3BpZnkuY29t&h2=dHVybmluZ2hlYXJ0cy5jb20&h3=dHVybmluZy1oZWFydC10b2RheS5teXNob3BpZnkuY29t&h4=dHVybmluZ2hlYXJ0c3RvZGF5LmNvbQ&hmac=ea891b460ba02b8e1b29a1269e1843d9e45f84d665e8c7f8eb3c79ff4ce505ed") format("woff");
}

      @font-face {
  font-family: Poppins;
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url("assets/cdn/fonts/poppins/poppins_n4.934accbf9f5987aa89334210e6c1e9151f37d3b6.woff2?h1=dHVybmluZy1oZWFydHMtdG9kYXkuYWNjb3VudC5teXNob3BpZnkuY29t&h2=dHVybmluZ2hlYXJ0cy5jb20&h3=dHVybmluZy1oZWFydC10b2RheS5teXNob3BpZnkuY29t&h4=dHVybmluZ2hlYXJ0c3RvZGF5LmNvbQ&hmac=294ca40257c731128e5d319dae8662f849beeb8857907bbbc784e5d6744aa21d") format("woff2"),
       url("assets/cdn/fonts/poppins/poppins_n4.ee28d4489eaf5de9cf6e17e696991b5e9148c716.woff?h1=dHVybmluZy1oZWFydHMtdG9kYXkuYWNjb3VudC5teXNob3BpZnkuY29t&h2=dHVybmluZ2hlYXJ0cy5jb20&h3=dHVybmluZy1oZWFydC10b2RheS5teXNob3BpZnkuY29t&h4=dHVybmluZ2hlYXJ0c3RvZGF5LmNvbQ&hmac=544af02580212fa9a7c38c291ac57a5a622dce866a8f617befbfe720c5e4cb68") format("woff");
}

      @font-face {
  font-family: Poppins;
  font-weight: 700;
  font-style: normal;
  font-display: swap;
  src: url("assets/cdn/fonts/poppins/poppins_n7.58aca33913fc6666cc9e8a53f6b16ec5c3c05a3f.woff2?h1=dHVybmluZy1oZWFydHMtdG9kYXkuYWNjb3VudC5teXNob3BpZnkuY29t&h2=dHVybmluZ2hlYXJ0cy5jb20&h3=dHVybmluZy1oZWFydC10b2RheS5teXNob3BpZnkuY29t&h4=dHVybmluZ2hlYXJ0c3RvZGF5LmNvbQ&hmac=899fe481a3706edc80b9dd64e5cd408f78f3a9aace9e6ca377c725c47d1cc3f4") format("woff2"),
       url("assets/cdn/fonts/poppins/poppins_n7.59016f931f3f39434d2e458fba083eb7db7a07d9.woff?h1=dHVybmluZy1oZWFydHMtdG9kYXkuYWNjb3VudC5teXNob3BpZnkuY29t&h2=dHVybmluZ2hlYXJ0cy5jb20&h3=dHVybmluZy1oZWFydC10b2RheS5teXNob3BpZnkuY29t&h4=dHVybmluZ2hlYXJ0c3RvZGF5LmNvbQ&hmac=54cfec9f3a8e61cda4147ff12abdb9fff572b108146964f3395f7b21929c8285") format("woff");
}

      @font-face {
  font-family: Poppins;
  font-weight: 400;
  font-style: italic;
  font-display: swap;
  src: url("assets/cdn/fonts/poppins/poppins_i4.a7e8d886e15d5fb9bc964a53b3278effbf270e9c.woff2?h1=dHVybmluZy1oZWFydHMtdG9kYXkuYWNjb3VudC5teXNob3BpZnkuY29t&h2=dHVybmluZ2hlYXJ0cy5jb20&h3=dHVybmluZy1oZWFydC10b2RheS5teXNob3BpZnkuY29t&h4=dHVybmluZ2hlYXJ0c3RvZGF5LmNvbQ&hmac=6ca895993dd9dae73e4d0f40b7d1d5ff6d7b6390580bfa37651828decd747e83") format("woff2"),
       url("assets/cdn/fonts/poppins/poppins_i4.e87de252199e27825a41bf81646996685d86452d.woff?h1=dHVybmluZy1oZWFydHMtdG9kYXkuYWNjb3VudC5teXNob3BpZnkuY29t&h2=dHVybmluZ2hlYXJ0cy5jb20&h3=dHVybmluZy1oZWFydC10b2RheS5teXNob3BpZnkuY29t&h4=dHVybmluZ2hlYXJ0c3RvZGF5LmNvbQ&hmac=b4fadf1f70c09088a6339cacfe167d8167b564e7c1d474d09bbbcc1f981be4b1") format("woff");
}

      @font-face {
  font-family: Poppins;
  font-weight: 700;
  font-style: italic;
  font-display: swap;
  src: url("assets/cdn/fonts/poppins/poppins_i7.4f85a5d51a1aecf426eea47ac4570ef7341bfdc1.woff2?h1=dHVybmluZy1oZWFydHMtdG9kYXkuYWNjb3VudC5teXNob3BpZnkuY29t&h2=dHVybmluZ2hlYXJ0cy5jb20&h3=dHVybmluZy1oZWFydC10b2RheS5teXNob3BpZnkuY29t&h4=dHVybmluZ2hlYXJ0c3RvZGF5LmNvbQ&hmac=0ec9407a748d8545d732f168d98b8e2cde95bf6423c17e74ec53ebd3c19995f0") format("woff2"),
       url("assets/cdn/fonts/poppins/poppins_i7.aff3a08a92d1c136586c611b9fc43d357dfbbefe.woff?h1=dHVybmluZy1oZWFydHMtdG9kYXkuYWNjb3VudC5teXNob3BpZnkuY29t&h2=dHVybmluZ2hlYXJ0cy5jb20&h3=dHVybmluZy1oZWFydC10b2RheS5teXNob3BpZnkuY29t&h4=dHVybmluZ2hlYXJ0c3RvZGF5LmNvbQ&hmac=3d10a99b1c4866b91e8481fb461a6549584e801875e856dae858331a391c16a7") format("woff");
}

      @font-face {
  font-family: Poppins;
  font-weight: 900;
  font-style: normal;
  font-display: swap;
  src: url("assets/cdn/fonts/poppins/poppins_n9.ab53309b7e3c2539cb1143634ba608d71386523c.woff2?h1=dHVybmluZy1oZWFydHMtdG9kYXkuYWNjb3VudC5teXNob3BpZnkuY29t&h2=dHVybmluZ2hlYXJ0cy5jb20&h3=dHVybmluZy1oZWFydC10b2RheS5teXNob3BpZnkuY29t&h4=dHVybmluZ2hlYXJ0c3RvZGF5LmNvbQ&hmac=fbd639900b5d60ea60ffcc2942b38a0aec60b01cde9a404f6f222d810d96cd1d") format("woff2"),
       url("assets/cdn/fonts/poppins/poppins_n9.078941d662fb73e03e458f69933d3c3f76d0907f.woff?h1=dHVybmluZy1oZWFydHMtdG9kYXkuYWNjb3VudC5teXNob3BpZnkuY29t&h2=dHVybmluZ2hlYXJ0cy5jb20&h3=dHVybmluZy1oZWFydC10b2RheS5teXNob3BpZnkuY29t&h4=dHVybmluZ2hlYXJ0c3RvZGF5LmNvbQ&hmac=2ba8b0e6046657fbe76e5fbbad5f34babbc216cbc3f73fa4e57221ec1a4f95f7") format("woff");
}

      @font-face {
        font-family: Material Icons Outlined;
        font-weight: 400;
        font-style: normal;
        font-display: block;
        src: url(assets/cdn/shop/t/13/assets/material-icons-outlined.woff2?v=141032514307594503641696874720) format("woff2");
      }
    </style>
    <script src="{{asset("assets/cdn/shop/t/13/assets/jquery-2.2.3.min.js?v=40203790232134668251696874751")}}" type="text/javascript"></script>
    <script src="{{asset("assets/cdn/shop/t/13/assets/theme.min.js?v=103825426679960428201696874751")}}" defer="defer"></script>
    <script src="{{asset("assets/cdn/shop/t/13/assets/lazysizes.min.js?v=46221891067352676611696874720")}}" async="async"></script>
    {{-- <script async="async" src="/checkouts/internal/preloads.js?locale=en-US"></script> --}}




<style >
  body{

font-family: 'Open Sans', sans-serif !important;
  }
@media screen and (min-width: 750px) {
  #dynamic-checkout-cart {
    min-height: 50px;
  }
}

@media screen and (max-width: 750px) {
  #dynamic-checkout-cart {
    min-height: 120px;
  }
}

@media screen and (max-width: 750px) {
.site-nav__item .dropdown {
  transform: translateX(-52px);
}

.site-header__logo .mobile-logo {
  transform: translateX(-20px);
}
}



</style>

<link href="{{asset("assets/cdn/shop/t/13/assets/fancybox.min.css?v=178684395451874162921696874720")}}" rel="stylesheet" type="text/css" media="all" />
  
  <!-- BEGIN app block: shopify://apps/klaviyo-email-marketing-sms/blocks/klaviyo-onsite-embed/2632fe16-c075-4321-a88b-50b567f42507 -->


 <style type="text/css">.okeReviews[data-oke-container],div.okeReviews{font-size:14px;font-size:var(--oke-text-regular);font-weight:400;font-family:var(--oke-text-fontFamily);line-height:1.6}.okeReviews[data-oke-container] *,.okeReviews[data-oke-container] :after,.okeReviews[data-oke-container] :before,div.okeReviews *,div.okeReviews :after,div.okeReviews :before{box-sizing:border-box}.okeReviews[data-oke-container] h1,.okeReviews[data-oke-container] h2,.okeReviews[data-oke-container] h3,.okeReviews[data-oke-container] h4,.okeReviews[data-oke-container] h5,.okeReviews[data-oke-container] h6,div.okeReviews h1,div.okeReviews h2,div.okeReviews h3,div.okeReviews h4,div.okeReviews h5,div.okeReviews h6{font-size:1em;font-weight:400;line-height:1.4;margin:0}.okeReviews[data-oke-container] ul,div.okeReviews ul{padding:0;margin:0}.okeReviews[data-oke-container] li,div.okeReviews li{list-style-type:none;padding:0}.okeReviews[data-oke-container] p,div.okeReviews p{line-height:1.8;margin:0 0 4px}.okeReviews[data-oke-container] p:last-child,div.okeReviews p:last-child{margin-bottom:0}.okeReviews[data-oke-container] a,div.okeReviews a{text-decoration:none;color:inherit}.okeReviews[data-oke-container] button,div.okeReviews button{border-radius:0;border:0;box-shadow:none;margin:0;width:auto;min-width:auto;padding:0;background-color:transparent;min-height:auto}.okeReviews[data-oke-container] button,.okeReviews[data-oke-container] input,.okeReviews[data-oke-container] select,.okeReviews[data-oke-container] textarea,div.okeReviews button,div.okeReviews input,div.okeReviews select,div.okeReviews textarea{font-family:inherit;font-size:1em}.okeReviews[data-oke-container] label,.okeReviews[data-oke-container] select,div.okeReviews label,div.okeReviews select{display:inline}.okeReviews[data-oke-container] select,div.okeReviews select{width:auto}.okeReviews[data-oke-container] article,.okeReviews[data-oke-container] aside,div.okeReviews article,div.okeReviews aside{margin:0}.okeReviews[data-oke-container] table,div.okeReviews table{background:transparent;border:0;border-collapse:collapse;border-spacing:0;font-family:inherit;font-size:1em;table-layout:auto}.okeReviews[data-oke-container] table td,.okeReviews[data-oke-container] table th,.okeReviews[data-oke-container] table tr,div.okeReviews table td,div.okeReviews table th,div.okeReviews table tr{border:0;font-family:inherit;font-size:1em}.okeReviews[data-oke-container] table td,.okeReviews[data-oke-container] table th,div.okeReviews table td,div.okeReviews table th{background:transparent;font-weight:400;letter-spacing:normal;padding:0;text-align:left;text-transform:none;vertical-align:middle}.okeReviews[data-oke-container] table tr:hover td,.okeReviews[data-oke-container] table tr:hover th,div.okeReviews table tr:hover td,div.okeReviews table tr:hover th{background:transparent}.okeReviews[data-oke-container] fieldset,div.okeReviews fieldset{border:0;padding:0;margin:0;min-width:0}.okeReviews[data-oke-container] img,div.okeReviews img{max-width:none}.okeReviews[data-oke-container] div:empty,div.okeReviews div:empty{display:block}.okeReviews[data-oke-container] .oke-icon:before,div.okeReviews .oke-icon:before{font-family:oke-widget-icons!important;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;color:inherit}.okeReviews[data-oke-container] .oke-icon--select-arrow:before,div.okeReviews .oke-icon--select-arrow:before{content:""}.okeReviews[data-oke-container] .oke-icon--loading:before,div.okeReviews .oke-icon--loading:before{content:""}.okeReviews[data-oke-container] .oke-icon--pencil:before,div.okeReviews .oke-icon--pencil:before{content:""}.okeReviews[data-oke-container] .oke-icon--filter:before,div.okeReviews .oke-icon--filter:before{content:""}.okeReviews[data-oke-container] .oke-icon--play:before,div.okeReviews .oke-icon--play:before{content:""}.okeReviews[data-oke-container] .oke-icon--tick-circle:before,div.okeReviews .oke-icon--tick-circle:before{content:""}.okeReviews[data-oke-container] .oke-icon--chevron-left:before,div.okeReviews .oke-icon--chevron-left:before{content:""}.okeReviews[data-oke-container] .oke-icon--chevron-right:before,div.okeReviews .oke-icon--chevron-right:before{content:""}.okeReviews[data-oke-container] .oke-icon--thumbs-down:before,div.okeReviews .oke-icon--thumbs-down:before{content:""}.okeReviews[data-oke-container] .oke-icon--thumbs-up:before,div.okeReviews .oke-icon--thumbs-up:before{content:""}.okeReviews[data-oke-container] .oke-icon--close:before,div.okeReviews .oke-icon--close:before{content:""}.okeReviews[data-oke-container] .oke-icon--chevron-up:before,div.okeReviews .oke-icon--chevron-up:before{content:""}.okeReviews[data-oke-container] .oke-icon--chevron-down:before,div.okeReviews .oke-icon--chevron-down:before{content:""}.okeReviews[data-oke-container] .oke-icon--star:before,div.okeReviews .oke-icon--star:before{content:""}.okeReviews[data-oke-container] .oke-icon--magnifying-glass:before,div.okeReviews .oke-icon--magnifying-glass:before{content:""}@font-face{font-family:oke-widget-icons;src:url(https://d3hw6dc1ow8pp2.cloudfront.net/reviews-widget-plus/fonts/oke-widget-icons.ttf) format("truetype"),url(https://d3hw6dc1ow8pp2.cloudfront.net/reviews-widget-plus/fonts/oke-widget-icons.woff) format("woff"),url(https://d3hw6dc1ow8pp2.cloudfront.net/reviews-widget-plus/img/oke-widget-icons.bc0d6b0a.svg) format("svg");font-weight:400;font-style:normal;font-display:block}.okeReviews[data-oke-container] .oke-button,div.okeReviews .oke-button{display:inline-block;border-style:solid;border-color:var(--oke-button-borderColor);border-width:var(--oke-button-borderWidth);background-color:var(--oke-button-backgroundColor);line-height:1;padding:12px 24px;margin:0;border-radius:var(--oke-button-borderRadius);color:var(--oke-button-textColor);text-align:center;position:relative;font-weight:var(--oke-button-fontWeight);font-size:var(--oke-button-fontSize);font-family:var(--oke-button-fontFamily);outline:0}.okeReviews[data-oke-container] .oke-button-text,.okeReviews[data-oke-container] .oke-button .oke-icon,div.okeReviews .oke-button-text,div.okeReviews .oke-button .oke-icon{line-height:1}.okeReviews[data-oke-container] .oke-button.oke-is-loading,div.okeReviews .oke-button.oke-is-loading{position:relative}.okeReviews[data-oke-container] .oke-button.oke-is-loading:before,div.okeReviews .oke-button.oke-is-loading:before{font-family:oke-widget-icons!important;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;content:"";color:undefined;font-size:12px;display:inline-block;animation:oke-spin 1s linear infinite;position:absolute;width:12px;height:12px;top:0;left:0;bottom:0;right:0;margin:auto}.okeReviews[data-oke-container] .oke-button.oke-is-loading>*,div.okeReviews .oke-button.oke-is-loading>*{opacity:0}.okeReviews[data-oke-container] .oke-button.oke-is-active,div.okeReviews .oke-button.oke-is-active{background-color:var(--oke-button-backgroundColorActive);color:var(--oke-button-textColorActive);border-color:var(--oke-button-borderColorActive)}.okeReviews[data-oke-container] .oke-button:not(.oke-is-loading),div.okeReviews .oke-button:not(.oke-is-loading){cursor:pointer}.okeReviews[data-oke-container] .oke-button:not(.oke-is-loading):not(.oke-is-active):hover,div.okeReviews .oke-button:not(.oke-is-loading):not(.oke-is-active):hover{background-color:var(--oke-button-backgroundColorHover);color:var(--oke-button-textColorHover);border-color:var(--oke-button-borderColorHover);box-shadow:0 0 0 2px var(--oke-button-backgroundColorHover)}.okeReviews[data-oke-container] .oke-button:not(.oke-is-loading):not(.oke-is-active):active,.okeReviews[data-oke-container] .oke-button:not(.oke-is-loading):not(.oke-is-active):hover:active,div.okeReviews .oke-button:not(.oke-is-loading):not(.oke-is-active):active,div.okeReviews .oke-button:not(.oke-is-loading):not(.oke-is-active):hover:active{background-color:var(--oke-button-backgroundColorActive);color:var(--oke-button-textColorActive);border-color:var(--oke-button-borderColorActive)}.okeReviews[data-oke-container] .oke-title,div.okeReviews .oke-title{font-weight:var(--oke-title-fontWeight);font-size:var(--oke-title-fontSize);font-family:var(--oke-title-fontFamily)}.okeReviews[data-oke-container] .oke-bodyText,div.okeReviews .oke-bodyText{font-weight:var(--oke-bodyText-fontWeight);font-size:var(--oke-bodyText-fontSize);font-family:var(--oke-bodyText-fontFamily)}.okeReviews[data-oke-container] .oke-linkButton,div.okeReviews .oke-linkButton{cursor:pointer;font-weight:700;pointer-events:auto;text-decoration:underline}.okeReviews[data-oke-container] .oke-linkButton:hover,div.okeReviews .oke-linkButton:hover{text-decoration:none}.okeReviews[data-oke-container] .oke-select,div.okeReviews .oke-select{cursor:pointer;background-repeat:no-repeat;background-position-x:100%;background-position-y:50%;border:none;padding:0 24px 0 12px;appearance:none;color:inherit;-webkit-appearance:none;background-color:transparent;background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg fill='currentColor' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3Cpath d='M0 0h24v24H0z' fill='none'/%3E%3C/svg%3E");outline-offset:4px}.okeReviews[data-oke-container] .oke-select:disabled,div.okeReviews .oke-select:disabled{background-color:transparent;background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg fill='%239a9db1' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3Cpath d='M0 0h24v24H0z' fill='none'/%3E%3C/svg%3E")}.okeReviews[data-oke-container] .oke-loader,div.okeReviews .oke-loader{position:relative}.okeReviews[data-oke-container] .oke-loader:before,div.okeReviews .oke-loader:before{font-family:oke-widget-icons!important;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;content:"";color:var(--oke-text-secondaryColor);font-size:12px;display:inline-block;animation:oke-spin 1s linear infinite;position:absolute;width:12px;height:12px;top:0;left:0;bottom:0;right:0;margin:auto}.okeReviews[data-oke-container] .oke-a11yText,div.okeReviews .oke-a11yText{border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.okeReviews[data-oke-container] .oke-hidden,div.okeReviews .oke-hidden{display:none}.okeReviews[data-oke-container] .oke-modal,div.okeReviews .oke-modal{bottom:0;left:0;overflow:auto;position:fixed;right:0;top:0;z-index:2147483647;max-height:100%;background-color:rgba(0,0,0,.5);padding:40px 0 32px}@media only screen and (min-width:1024px){.okeReviews[data-oke-container] .oke-modal,div.okeReviews .oke-modal{display:flex;align-items:center;padding:48px 0}}.okeReviews[data-oke-container] .oke-modal ::selection,div.okeReviews .oke-modal ::selection{background-color:rgba(39,45,69,.2)}.okeReviews[data-oke-container] .oke-modal,.okeReviews[data-oke-container] .oke-modal p,div.okeReviews .oke-modal,div.okeReviews .oke-modal p{color:#272d45}.okeReviews[data-oke-container] .oke-modal-content,div.okeReviews .oke-modal-content{background-color:#fff;margin:auto;position:relative;will-change:transform,opacity;width:calc(100% - 64px)}@media only screen and (min-width:1024px){.okeReviews[data-oke-container] .oke-modal-content,div.okeReviews .oke-modal-content{max-width:1000px}}.okeReviews[data-oke-container] .oke-modal-close,div.okeReviews .oke-modal-close{cursor:pointer;position:absolute;width:32px;height:32px;top:-32px;padding:4px;right:-4px;line-height:1}.okeReviews[data-oke-container] .oke-modal-close:before,div.okeReviews .oke-modal-close:before{font-family:oke-widget-icons!important;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;content:"";color:#fff;font-size:24px;display:inline-block;width:24px;height:24px}.okeReviews[data-oke-container] .oke-modal-overlay,div.okeReviews .oke-modal-overlay{background-color:rgba(43,46,56,.9)}@media only screen and (min-width:1024px){.okeReviews[data-oke-container] .oke-modal--large .oke-modal-content,div.okeReviews .oke-modal--large .oke-modal-content{max-width:1200px}}.okeReviews[data-oke-container] .oke-modal .oke-helpful,.okeReviews[data-oke-container] .oke-modal .oke-helpful-vote-button,.okeReviews[data-oke-container] .oke-modal .oke-reviewContent-date,div.okeReviews .oke-modal .oke-helpful,div.okeReviews .oke-modal .oke-helpful-vote-button,div.okeReviews .oke-modal .oke-reviewContent-date{color:#676986}.oke-modal .okeReviews[data-oke-container].oke-w,.oke-modal div.okeReviews.oke-w{color:#272d45}.okeReviews[data-oke-container] .hooper,div.okeReviews .hooper{height:auto}.okeReviews :focus{outline:0}.okeReviews--left{text-align:left}.okeReviews--right{text-align:right}.okeReviews--center{text-align:center}.is-oke-keyboardUser .okeReviews :not([tabindex="-1"]):focus{outline:5px auto highlight;outline:5px auto -webkit-focus-ring-color}.is-oke-modalOpen{overflow:hidden!important}img.oke-is-error{background-color:var(--oke-shadingColor);background-size:cover;background-position:50% 50%;box-shadow:inset 0 0 0 1px var(--oke-border-color)}@keyframes oke-spin{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}@keyframes oke-fade-in{0%{opacity:0}to{opacity:1}}
.oke-stars{line-height:1;position:relative;display:inline-block}.oke-stars-background svg{overflow:visible}.oke-stars-foreground{overflow:hidden;position:absolute;top:0;left:0}.oke-sr{display:inline-block;padding-top:var(--oke-starRating-spaceAbove);padding-bottom:var(--oke-starRating-spaceBelow)}.oke-sr .oke-is-clickable{cursor:pointer}.oke-sr-count,.oke-sr-rating,.oke-sr-stars{display:inline-block;vertical-align:middle}.oke-sr-stars{line-height:1;margin-right:8px}.oke-sr-rating{display:none}.oke-sr-count--brackets:before{content:"("}.oke-sr-count--brackets:after{content:")"}</style>

    {{-- <script type="application/json" id="oke-reviews-settings">
        {"subscriberId":"1b3b2306-54fb-4c7a-865a-802133435d96","analyticsSettings":{"provider":"none"},"widgetSettings":{"global":{"dateSettings":{"format":{"type":"relative"}},"hideOkendoBranding":false,"recorderPlusEnabled":true,"showIncentiveIndicator":false,"searchEnginePaginationEnabled":false,"stars":{"backgroundColor":"#E5E5E5","borderColor":"#2C3E50","foregroundColor":"#FFCF2A","interspace":2,"shape":{"type":"default"},"showBorder":false},"font":{"fontType":"inherit-from-page"}},"homepageCarousel":{"slidesPerPage":{"large":3,"medium":2},"totalSlides":12,"scrollBehaviour":"slide","style":{"showDates":true,"border":{"color":"#E5E5EB","width":{"value":1,"unit":"px"}},"headingFont":{"hasCustomFontSettings":false},"bodyFont":{"hasCustomFontSettings":false},"arrows":{"color":"#676986","size":{"value":24,"unit":"px"},"enabled":true},"avatar":{"backgroundColor":"#E5E5EB","placeholderTextColor":"#2C3E50","size":{"value":48,"unit":"px"},"enabled":true},"media":{"size":{"value":80,"unit":"px"},"imageGap":{"value":4,"unit":"px"},"enabled":true},"stars":{"height":{"value":18,"unit":"px"}},"productImageSize":{"value":48,"unit":"px"},"layout":{"name":"default","reviewDetailsPosition":"below","showProductName":false,"showAttributeBars":false,"showProductVariantName":false,"showProductDetails":"only-when-grouped"},"highlightColor":"#0E7A82","spaceAbove":{"value":20,"unit":"px"},"text":{"primaryColor":"#2C3E50","fontSizeRegular":{"value":14,"unit":"px"},"fontSizeSmall":{"value":12,"unit":"px"},"secondaryColor":"#676986"},"spaceBelow":{"value":20,"unit":"px"}},"defaultSort":"rating desc","autoPlay":false,"truncation":{"bodyMaxLines":4,"enabled":true,"truncateAll":false}},"mediaCarousel":{"minimumImages":1,"linkText":"Read More","autoPlay":false,"slideSize":"medium","arrowPosition":"outside"},"mediaGrid":{"gridStyleDesktop":{"layout":"default-desktop"},"gridStyleMobile":{"layout":"default-mobile"},"showMoreArrow":{"arrowColor":"#676986","enabled":true,"backgroundColor":"#f4f4f6"},"linkText":"Read More","infiniteScroll":false,"gapSize":{"value":10,"unit":"px"}},"questions":{"initialPageSize":6,"loadMorePageSize":6},"reviewsBadge":{"layout":"large","colorScheme":"dark"},"reviewsTab":{"backgroundColor":"#676986","position":"top-left","textColor":"#FFFFFF","enabled":true,"positionSmall":"top-left"},"reviewsWidget":{"tabs":{"reviews":true},"header":{"columnDistribution":"space-between","verticalAlignment":"top","blocks":[{"columnWidth":"one-third","modules":[{"name":"rating-average","layout":"one-line"},{"name":"rating-breakdown","backgroundColor":"#F4F4F6","shadingColor":"#9A9DB1","stretchMode":"contain"}],"textAlignment":"left"},{"columnWidth":"two-thirds","modules":[{"name":"recommended"},{"name":"media-carousel","imageGap":{"value":4,"unit":"px"},"imageHeight":{"value":120,"unit":"px"}}],"textAlignment":"left"}]},"style":{"showDates":true,"border":{"color":"#E5E5EB","width":{"value":1,"unit":"px"}},"bodyFont":{"hasCustomFontSettings":false},"headingFont":{"hasCustomFontSettings":false},"filters":{"backgroundColorActive":"#676986","backgroundColor":"#FFFFFF","borderColor":"#DBDDE4","borderRadius":{"value":100,"unit":"px"},"borderColorActive":"#676986","textColorActive":"#2C3E50","textColor":"#2C3E50","searchHighlightColor":"#ecdbb3"},"avatar":{"backgroundColor":"#E5E5EB","placeholderTextColor":"#2C3E50","size":{"value":48,"unit":"px"},"enabled":true},"stars":{"height":{"value":18,"unit":"px"}},"shadingColor":"#F7F7F8","productImageSize":{"value":48,"unit":"px"},"button":{"backgroundColorActive":"#D0A640","borderColorHover":"#DBDDE4","backgroundColor":"#D0A640","borderColor":"#DBDDE4","backgroundColorHover":"#b79238","textColorHover":"#272D45","borderRadius":{"value":4,"unit":"px"},"borderWidth":{"value":1,"unit":"px"},"borderColorActive":"#D0A640","textColorActive":"#FFFFFF","textColor":"#2C3E50","font":{"hasCustomFontSettings":false}},"highlightColor":"#D0A640","spaceAbove":{"value":20,"unit":"px"},"text":{"primaryColor":"#2C3E50","fontSizeRegular":{"value":14,"unit":"px"},"fontSizeLarge":{"value":20,"unit":"px"},"fontSizeSmall":{"value":12,"unit":"px"},"secondaryColor":"#676986"},"spaceBelow":{"value":20,"unit":"px"},"attributeBar":{"style":"default","backgroundColor":"#D3D4DD","shadingColor":"#9A9DB1","markerColor":"#D0A640"}},"showWhenEmpty":false,"reviews":{"list":{"layout":{"collapseReviewerDetails":false,"columnAmount":4,"name":"default","showAttributeBars":false,"borderStyle":"full","showProductVariantName":false,"showProductDetails":"only-when-grouped"},"initialPageSize":5,"media":{"layout":"featured","size":{"value":200,"unit":"px"}},"truncation":{"bodyMaxLines":4,"truncateAll":false,"enabled":true},"loadMorePageSize":5},"controls":{"filterMode":"closed","defaultSort":"has_media desc","writeReviewButtonEnabled":true,"freeTextSearchEnabled":false}}},"starRatings":{"showWhenEmpty":false,"clickBehavior":"scroll-to-widget","style":{"text":{"content":"review-count","style":"number-and-text","brackets":false},"spaceAbove":{"value":0,"unit":"px"},"singleStar":false,"spaceBelow":{"value":0,"unit":"px"},"height":{"value":18,"unit":"px"}}}},"features":{"recorderPlusEnabled":true,"recorderQandaPlusEnabled":true}}
    </script> --}}
            <style id="oke-css-vars">:root{--oke-widget-spaceAbove:20px;--oke-widget-spaceBelow:20px;--oke-starRating-spaceAbove:0;--oke-starRating-spaceBelow:0;--oke-button-backgroundColor:#d0a640;--oke-button-backgroundColorHover:#b79238;--oke-button-backgroundColorActive:#d0a640;--oke-button-textColor:#2c3e50;--oke-button-textColorHover:#272d45;--oke-button-textColorActive:#fff;--oke-button-borderColor:#dbdde4;--oke-button-borderColorHover:#dbdde4;--oke-button-borderColorActive:#d0a640;--oke-button-borderRadius:4px;--oke-button-borderWidth:1px;--oke-button-fontWeight:700;--oke-button-fontSize:var(--oke-text-regular,14px);--oke-button-fontFamily:inherit;--oke-border-color:#e5e5eb;--oke-border-width:1px;--oke-text-primaryColor:#2c3e50;--oke-text-secondaryColor:#676986;--oke-text-small:12px;--oke-text-regular:14px;--oke-text-large:20px;--oke-text-fontFamily:inherit;--oke-avatar-size:48px;--oke-avatar-backgroundColor:#e5e5eb;--oke-avatar-placeholderTextColor:#2c3e50;--oke-highlightColor:#d0a640;--oke-shadingColor:#f7f7f8;--oke-productImageSize:48px;--oke-attributeBar-shadingColor:#9a9db1;--oke-attributeBar-borderColor:undefined;--oke-attributeBar-backgroundColor:#d3d4dd;--oke-attributeBar-markerColor:#d0a640;--oke-filter-backgroundColor:#fff;--oke-filter-backgroundColorActive:#676986;--oke-filter-borderColor:#dbdde4;--oke-filter-borderColorActive:#676986;--oke-filter-textColor:#2c3e50;--oke-filter-textColorActive:#2c3e50;--oke-filter-borderRadius:100px;--oke-filter-searchHighlightColor:#ecdbb3;--oke-mediaGrid-chevronColor:#676986;--oke-stars-foregroundColor:#ffcf2a;--oke-stars-backgroundColor:#e5e5e5;--oke-stars-borderWidth:0}.oke-w,oke-modal{--oke-title-fontWeight:600;--oke-title-fontSize:var(--oke-text-regular,14px);--oke-title-fontFamily:inherit;--oke-bodyText-fontWeight:400;--oke-bodyText-fontSize:var(--oke-text-regular,14px);--oke-bodyText-fontFamily:inherit}</style>
            
            {{-- <template id="oke-reviews-body-template">
            <svg id="oke-star-symbols" style="display:none!important" data-oke-id="oke-star-symbols"><symbol id="oke-star-empty" style="overflow:visible;"><path id="star-default--empty" fill="var(--oke-stars-backgroundColor)" stroke="var(--oke-stars-borderColor)" stroke-width="var(--oke-stars-borderWidth)" d="M3.34 13.86c-.48.3-.76.1-.63-.44l1.08-4.56L.26 5.82c-.42-.36-.32-.7.24-.74l4.63-.37L6.92.39c.2-.52.55-.52.76 0l1.8 4.32 4.62.37c.56.05.67.37.24.74l-3.53 3.04 1.08 4.56c.13.54-.14.74-.63.44L7.3 11.43l-3.96 2.43z"/></symbol><symbol id="oke-star-filled" style="overflow:visible;"><path id="star-default--filled" fill="var(--oke-stars-foregroundColor)" stroke="var(--oke-stars-borderColor)" stroke-width="var(--oke-stars-borderWidth)" d="M3.34 13.86c-.48.3-.76.1-.63-.44l1.08-4.56L.26 5.82c-.42-.36-.32-.7.24-.74l4.63-.37L6.92.39c.2-.52.55-.52.76 0l1.8 4.32 4.62.37c.56.05.67.37.24.74l-3.53 3.04 1.08 4.56c.13.54-.14.74-.63.44L7.3 11.43l-3.96 2.43z"/></symbol></svg></template>
             --}}
            <script>document.addEventListener('readystatechange',() =>{Array.from(document.getElementById('oke-reviews-body-template')?.content.children)?.forEach(function(child){if(!Array.from(document.body.querySelectorAll('[data-oke-id='.concat(child.getAttribute('data-oke-id'),']'))).length){document.body.prepend(child)}})},{once:true});</script>


<!-- END app snippet -->
<!-- BEGIN app snippet: okendo-reviews-json-ld -->
<!-- END app snippet -->
<!-- BEGIN app snippet: widget-plus-initialisation-script -->
<script async id="okendo-reviews-script" src="https://d3hw6dc1ow8pp2.cloudfront.net/reviews-widget-plus/js/okendo-reviews.js"></script>

<!-- END app snippet -->


</head>

<body id="turning-hearts" class="container-fluid sticky-header transparent-header--desktop  transparent-header--mobile  menu_bar--present  template-index">
    @component("component.header")@endcomponent
    @yield("content")
    @component("component.footer")@endcomponent
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{asset("assets/cdn/shop/t/13/assets/fancybox.min.js?v=21420772457045656331696874720")}}" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/fbadad80a0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<style>
  #snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: tomato;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  z-index: 1000;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
p{
  text-align: justify
}

p.guarantee-icon {
    text-align: center;
}

</style>
<div id="snackbar">{{ GoogleTranslate::trans('Please! Login first', app()->getLocale()) }} </div>
<script>

function handle_collapse(e){  
  if(e.classList.contains("active")){
    e.classList.remove("active")
  }else{
    e.classList.add("active")
  }
}


// let dbtfy_product_tab_box = document.getElementsByClassName("dbtfy-product-tab-box")[0].children;
//   for (const elem of dbtfy_product_tab_box) {
//     elem.addEventListener('click',function(){
//       for(let el  of dbtfy_product_tab_box) {
//         el.children[1].classList.add("tab-body")
//       }
//       this.children[1].classList.remove("tab-body")
    
//     })
//   }


  function handle_login_message(){
    // alert("Please Loin first")
    var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
  }

  let sliding_img = document.getElementsByClassName("sliding_img");
  for (const elem of sliding_img) {
    elem.addEventListener('click',function(){
      slided_content.src = this.src;
    console.log(this.src)
    
    })
  }

  let video_g = document.getElementsByClassName("video_g");
  for (const elem of video_g) {
    elem.addEventListener('click',function(){
      // slided_content.src = this.src;
    console.log(this.id)
    video_player.src=this.id;
    video_player.play();
    })
  }
  
</script>

<script type="text/javascript">
    
    var url = "{{ route('changeLang') }}";
    
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
    
</script>

</body>
</html>
