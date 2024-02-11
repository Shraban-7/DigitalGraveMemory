{{ GoogleTranslate::trans("dg", app()->getLocale()) }}@extends("layout.layout")
@section("content")

<main id="mainContent" class="main-content fadeIn" role="main">

  <div  class="shopify-section featured-row-section">
    <div  class="  section-blank" >
    <div class="box">
        <div class=" d-flex justify-content-center">
            <div style="width: 10rem">
                <a href="{{URL::to("/video_edit_user_info?is_payment=ok")}}" class="btn custom_brand_btn btn-sm d-flex justify-content-center">{{ GoogleTranslate::trans("Pay With PayPal", app()->getLocale()) }}</a>
            </div>
        </div>
    </div>
    </div>
</div>
</main>
@endsection