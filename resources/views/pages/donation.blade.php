@extends("layout.app")
@section("content")
<main id="mainContent" class="main-content fadeIn" role="main">
  <div  class="shopify-section featured-row-section">
    <div  class="  section-blank" >
    <div class="box">
        <h3 style="text-align: center">{{ GoogleTranslate::trans('Everyone Can Be Great Because Everyone Can Serve', app()->getLocale()) }} </h3>
        <br><br>
      <div class="wrapper">
  
        <div class="grid grid-spacer align-center">
          <div class="grid__item large--six-twelfths medium--six-twelfths featured-row-left">
            <div class="media-wrapper" style="padding-top:75.0%;">
              <img class="media lazyload" src="{{asset("assets/cdn/shop/files/d_2.jpg")}}">
            </div>
          </div>
  
          <div class="grid__item large--six-twelfths medium--six-twelfths ">
            <h2 class="section-header__title">{{ GoogleTranslate::trans('Love for Pet', app()->getLocale()) }}</h2>
            <div class="rte text-lead">
            <p>{{ GoogleTranslate::trans('We are a non-profit organization reliant on the generosity of individuals, businesses, and foundations through private donations. At Grave Memory Organization, we strive to maximize the impact of every dollar.', app()->getLocale()) }} </p>
              <p>{{ GoogleTranslate::trans('Ever wondered how your contributions make a difference? Your donations directly support the medical needs, food, behavior, socialization, and daily care of our cats and dogs. On average, we care for approximately 2500 animals each day, and the cost of caring for each animal is $45 or more per day.', app()->getLocale()) }}</p>
              <p>{{ GoogleTranslate::trans('There are various ways you can contribute to the mission of Grave Memory Organization! Options include making a donation, sponsoring a pet, shopping at Our Retail Store, or exploring alternative donation methods.', app()->getLocale()) }} </p>
                <p>{{ GoogleTranslate::trans('For any fundraising or donation inquiries, please feel free to contact us. If you prefer to submit your donation using cryptocurrency, please send us a message by mail.', app()->getLocale()) }}
                </p>
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
              <img class="media lazyload" src="{{asset("assets/cdn/shop/files/d_1.jpg")}}">
            </div>
          </div>
  
          <div class="grid__item large--six-twelfths medium--six-twelfths ">
            <h2 class="section-header__title">{{ GoogleTranslate::trans('Love For Old People', app()->getLocale()) }}</h2>
            <div class="rte text-lead">
              <p>{{ GoogleTranslate::trans('In the heart of our community lies Grave Memory Organization, a non-profit organization fueled by the kindness of individuals, businesses, and foundations who share our vision for providing comfort to the elderly. Here at Grave Memory Organization, we believe in the power of every story, and your support helps us write tales of compassion and care.', app()->getLocale()) }}
            </p>
            <p>{{ GoogleTranslate::trans('Have you ever wondered about the stories unfolding within our walls? Your generosity directly impacts the lives of our cherished elderly residents, supporting their health, well-being, and everyday needs. With an average of $60 or more per day per resident, your contribution becomes a vital chapter in their journey.', app()->getLocale()) }}
            </p>
            <p>{{ GoogleTranslate::trans("Discover the various ways you can be part of the Grave Memory Organization! Whether it's through a heartfelt donation, sponsoring a resident, participating in our community events, or exploring innovative ways to make a difference, theres a role for everyone in our story.", app()->getLocale()) }}</p>
            <p>{{ GoogleTranslate::trans("For those curious about fundraising or making donations, our door is always open. Reach out to us with any questions or inquiries. And if you're interested in weaving your story into ours through cryptocurrency donations, drop us a message by mail.", app()->getLocale()) }}
            </p>
            <p>{{ GoogleTranslate::trans("Join us in creating a tapestry of warmth, care, and joy for the wonderful individuals who call Serene Haven Homes their home. Your involvement becomes a meaningful chapter in the collective story of love and support.", app()->getLocale()) }}
            </p>
        
        
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
                      <h5>{{ GoogleTranslate::trans("We can create your loved one's  memory in video format.", app()->getLocale()) }} <a href="{{URL::to("/video")}}">{{ GoogleTranslate::trans('click here', app()->getLocale()) }}</a></h5>
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