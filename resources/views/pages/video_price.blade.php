@extends("layout.app")
@section("content")
<main  class="main-content fadeIn" >
<br>
  <h3 style="text-align: center;font-family: fantasy;">WE CREATE YOUR VIDEO</h3>

  <div  class="shopify-section product-section">
    <div >
    

<div class="product-single" >
  <div class="box">
   
    <div class="wrapper">
    
      <div class="grid product-single">
        <!-- left grid item  -->
      
        <!-- right grid item -->

        
        <div id="ProductMeta-template--16826826129659__main" class="grid__item product-single__meta--wrapper large--six-twelfths">
          <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="product-single__meta-info">
        
            <div class="price-container-desktop">
                <div class="price-container-wrapper">
                  <h2 class="font-weight-bold"> {{ GoogleTranslate::trans("dg", app()->getLocale()) }}Premium video price</h2>
  <div class="price-container text-money text-large spacer-bottom flex align-center" data-price-container="">
  
<div class="product-single__unit"><span class="product-unit-price">
        
    </div>
  </div>
</div>
              </div>
              <div class="dbtfy-size-chart-box">

              </div>
              <form  action="{{URL::to("/video_edit_user_info")}}"   class="product-single__form product-single__form--no-variants" >
            <div class="product-single__quantity spacer-bottom">
                  <div class="dbtfy dbtfy-inventory_quantity">
                    
                  </div>
        <div class="quantity-product-single-7974171246843">
            <div class="qty-container">
              <div class="qb-product_breaks">

              <div class="radio qb-quantity">
                <input type="radio" id="30s_35" name="editing_price" value="30s_35" checked >
                <label for="30s_35">{{ GoogleTranslate::trans("Up to 30 seconds video:", app()->getLocale()) }} 35$</label>
              </div>
              <div class="radio qb-quantity">
                <input type="radio" id="60s_55" name="editing_price" value="60s_55" >
                <label for="60s_55">{{ GoogleTranslate::trans("Up to 60 seconds video:", app()->getLocale()) }} 55$</label>
              </div>

              <div class="radio qb-quantity">
                <input type="radio" id="2m_85" name="editing_price" value="2m_85" >
                <label for="2m_85">{{ GoogleTranslate::trans("Up to 2 minutes video:", app()->getLocale()) }} 85$</label>
              </div>

              <div class="radio qb-quantity">
                <input type="radio" id="5m_152" name="editing_price" value="5m_152" >
                <label for="5m_152">{{ GoogleTranslate::trans("Up to 5 minutes video:", app()->getLocale()) }} 152$</label>
              </div>

              
              <div class="radio qb-quantity">
                <input type="radio" id="10m_260" name="editing_price" value="10m_260" >
                <label for="10m_260">{{ GoogleTranslate::trans("UP to 10 minutes video:", app()->getLocale()) }} 260$</label>
              </div>
              <div class="radio qb-quantity">
                <input type="radio" id="30m_685" name="editing_price" value="30m_685" >
                <label for="30m_685">{{ GoogleTranslate::trans("UP to 30 minutes video:", app()->getLocale()) }} 685$</label>
              </div>
           
            </div></div></div></div><div class="product-single__add-to-cart">
                  <button type="submit" name="price_add" class="btn custom_brand_btn btn-sm w-100">
                    <span class="btn__text ">
                      <span class="btn__add-to-cart-text">{{ GoogleTranslate::trans("Next", app()->getLocale()) }} </span>
                    </span>
                  </button>
                </div>
         
        </form>
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

    </div>
    </div>

    

  </div>
</div>
</main>
@endsection