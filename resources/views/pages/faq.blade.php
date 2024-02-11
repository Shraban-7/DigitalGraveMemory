{{ GoogleTranslate::trans('Submit', app()->getLocale()) }}@extends("layout.layout")
@section("content")
<main  class="main-content fadeIn" >
    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    {{ GoogleTranslate::trans('General Information', app()->getLocale()) }}
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    {{ GoogleTranslate::trans('Things to know about Digital Grave Memory.', app()->getLocale()) }}
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    {{ GoogleTranslate::trans('How to get started?', app()->getLocale()) }}
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>{{ GoogleTranslate::trans('You can create up to as many individual ancestor profiles for yourself using the same email address, Facebook account or gmail account.', app()->getLocale()) }}
                    </p>
                    <p>{{ GoogleTranslate::trans('Each account must be made one at a time, this is done by clicking “Sign up” and going through
                        the registration process for each personal account.', app()->getLocale()) }}</p>
                        {{ GoogleTranslate::trans('We provide QR profiles only. Each QR you can print as you like. We provide PNG files too. So
that QR can be carved anywhere.', app()->getLocale()) }}
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    {{ GoogleTranslate::trans('What you can do at Digital Grave Memory?', app()->getLocale()) }}
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>{{ GoogleTranslate::trans('Digital Grave Memory offers advanced social media features that you can share with the world
                    the stories and memories of your ancestors as well as your own stories and memories.', app()->getLocale()) }}</p>
                   <h4>{{ GoogleTranslate::trans('Articles', app()->getLocale()) }}</h4>
                    <strong>{{ GoogleTranslate::trans('Heartfelt Biographies:', app()->getLocale()) }}</strong>
                    <p>{{ GoogleTranslate::trans('Unveil the essence of each person through their Biography page. Share key moments, making
                        every profile a window into a soul', app()->getLocale()) }}</p>
                        <strong>{{ GoogleTranslate::trans('Tributes That Echo Emotion', app()->getLocale()) }}</strong>
                        <p>{{ GoogleTranslate::trans('Touch others by leaving tributes. Whether through a QR scan or a profile visit, express the
                            emotions stirred within you. Make connections profound', app()->getLocale()) }}</p>
                          
                          <strong>{{ GoogleTranslate::trans('Stories That Speak', app()->getLocale()) }}</strong>
                          <p>{{ GoogleTranslate::trans('Immerse in diverse and beautiful life narratives. Read, watch, and listen to the unique tales shared by others.
                            Every story, a masterpiece; every life, is a canvas of experiences', app()->getLocale()) }}</p>

                            <strong>{{ GoogleTranslate::trans('Account Settings', app()->getLocale()) }}</strong>
                            <p>{{ GoogleTranslate::trans('Learn how to adjust account settings, change profile details, and more.', app()->getLocale()) }}</p>
                            <p>{{ GoogleTranslate::trans('Creating An Account', app()->getLocale()) }}</p>
                          </div>
              </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    {{ GoogleTranslate::trans('Is it free to create an account in Digital Grave Memory?', app()->getLocale()) }}
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>{{ GoogleTranslate::trans('Yes, it is free to create a Digital Grave Memory account. You can create your profile or you can create a profile for
                      your ancestor at no cost. If you want to purchase QR, you will get your profile via QR Code.', app()->getLocale()) }}</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingfive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                    {{ GoogleTranslate::trans('How do I create a Digital Grave Memory?', app()->getLocale()) }}
                  </button>
                </h2>
                <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>{{ GoogleTranslate::trans('Registration to our platform is really easy. Just click on the sign-up button, and you will understand everything.', app()->getLocale()) }}</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    {{ GoogleTranslate::trans('Creating an Ancestor Profile', app()->getLocale()) }}
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>{{ GoogleTranslate::trans('You have just created an account and now you need an ancestor profile to remember your loved ones. Here`s how you can do it:', app()->getLocale()) }}</p>
                    <p>{{ GoogleTranslate::trans('Go to "View Account" (Top right corner, click on your avatar) and click on "Create a new profile"
                      Fill out as many details as possible and hit "Submit" when youre done
                      Go to the "Images" or "Videos" tab to upload any media you may have.', app()->getLocale()) }} 
                      
                     
                    
                     
                      </p>
                      <p> {{ GoogleTranslate::trans('*Note:', app()->getLocale()) }} </p>
                      <p>  {{ GoogleTranslate::trans('We can provide your customized video.', app()->getLocale()) }}</p>
                      <p> {{ GoogleTranslate::trans('Videos must be uploaded to YouTube and all you need to do is to submit the link to each video 
                        Next, you can share any links about your loved one in the "Links" tab. Articles, websites, obituary links, social media profiles, etc.  
                        Your ancestor profile is now complete and ready for the world to remember them by!
                        Please let us know if you have any questions by using the chat button at the bottom right-hand corner of this page :', app()->getLocale()) }} </p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    {{ GoogleTranslate::trans('How do I edit the bio on my Digital Grave Memory profile?', app()->getLocale()) }}
                  </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>{{ GoogleTranslate::trans('You can edit bio such as my story, places lived, languages spoken, and location of birth. To edit your bio:', app()->getLocale()) }}</p>
                 <p>{{ GoogleTranslate::trans('Go to the profile and click "Edit"', app()->getLocale()) }}</p>
                 <p>{{ GoogleTranslate::trans('Select the "About" Tab', app()->getLocale()) }}</p>
                 <p>{{ GoogleTranslate::trans('On this page, you will be able to add or edit information about the loved one', app()->getLocale()) }}</p>
                
                 
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="heading_8">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_8" aria-expanded="false" aria-controls="collapse_8">
                    {{ GoogleTranslate::trans('Login & Password', app()->getLocale()) }}
                  </button>
                </h2>
                <div id="collapse_8" class="accordion-collapse collapse" aria-labelledby="heading_8" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>{{ GoogleTranslate::trans('Learn how to fix login issues and how to change or reset your password at Digital Grave Memory.', app()->getLocale()) }}</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="heading_9">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_9" aria-expanded="false" aria-controls="collapse_9">
                   {{ GoogleTranslate::trans('How do I log into my Digital Grave Memory account?', app()->getLocale()) }}
                  </button>
                </h2>
                <div id="collapse_9" class="accordion-collapse collapse" aria-labelledby="heading_9" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>{{ GoogleTranslate::trans('To log into your Grave Memory account:', app()->getLocale()) }}</p>
                    <p>{{ GoogleTranslate::trans('Go to digitalgravememory.com', app()->getLocale()) }}</p>
                    <p>{{ GoogleTranslate::trans('Enter your email address or username and enter one of the following:', app()->getLocale()) }}</p>
                    <p>{{ GoogleTranslate::trans('Email: You can log in with any email that’s listed on your Grave Memory account.', app()->getLocale()) }}</p>
                    <p>{{ GoogleTranslate::trans('Username: You can also log in with your username.', app()->getLocale()) }}</p>
                    <p>{{ GoogleTranslate::trans('Enter your password.', app()->getLocale()) }}</p>
                    <p>{{ GoogleTranslate::trans('Click “Log In.”', app()->getLocale()) }}</p>

                    <hr>
                    <p>{{ GoogleTranslate::trans('** I am unable to log in, I forgot my password', app()->getLocale()) }}</p>
                    <p>{{ GoogleTranslate::trans('Updated 5 months ago', app()->getLocale()) }}</p>
                    <p>{{ GoogleTranslate::trans('There are 3 ways to login into your Digital Grave Memory account:', app()->getLocale()) }}</p>
                    <p>{{ GoogleTranslate::trans('Email and Password', app()->getLocale()) }}</p>
                    <p>{{ GoogleTranslate::trans('Facebook profile SSO login', app()->getLocale()) }}</p>
                    <p>{{ GoogleTranslate::trans('Gmail account SSO login', app()->getLocale()) }}</p>
                    <p>{{ GoogleTranslate::trans('If you have signed up to Grave Memory with Facebook or Gmail, make sure you have access to those and are logged into those accounts on both your computer and mobile devices and try logging in with the respective options.', app()->getLocale()) }}</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="heading_10">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_10" aria-expanded="false" aria-controls="collapse_10">
                    {{ GoogleTranslate::trans('How do I log out from my Grave Memory account?', app()->getLocale()) }}
                  </button>
                </h2>
                <div id="collapse_10" class="accordion-collapse collapse" aria-labelledby="heading_10" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>{{ GoogleTranslate::trans('To log out from Grave Memory:', app()->getLocale()) }}</p>
                    <p>{{ GoogleTranslate::trans('Click your username in the top right menu.', app()->getLocale()) }}</p>
                    <p>{{ GoogleTranslate::trans('Click “Log Out” from the menu that appears', app()->getLocale()) }}</p>
                   
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="heading_11">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_11" aria-expanded="false" aria-controls="collapse_11">
                  {{ GoogleTranslate::trans('Privacy & Security', app()->getLocale()) }}
                  </button>
                </h2>
                <div id="collapse_11" class="accordion-collapse collapse" aria-labelledby="heading_11" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>{{ GoogleTranslate::trans('Control who can see your account details and what you share.', app()->getLocale()) }}</p>
                    
                   
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="heading_12">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_12" aria-expanded="false" aria-controls="collapse_12">
                    {{ GoogleTranslate::trans('Privacy Settings', app()->getLocale()) }} <br>
                    {{ GoogleTranslate::trans('What is public information on Digital Grave Memory?', app()->getLocale()) }}
                  </button>
                </h2>
                <div id="collapse_12" class="accordion-collapse collapse" aria-labelledby="heading_12" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>{{ GoogleTranslate::trans('Something public can be seen by anyone. That includes people example who aren’t your friends or people off of Digital Grave Memory.', app()->getLocale()) }}</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="heading_13">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_13" aria-expanded="false" aria-controls="collapse_13">
                    {{ GoogleTranslate::trans('What if some random person were to post a negative tribute on the deceased loved ones site, could the account holder remove or delete the post?', app()->getLocale()) }}
                  </button>
                </h2>
                <div id="collapse_13" class="accordion-collapse collapse" aria-labelledby="heading_13" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>{{ GoogleTranslate::trans('only Grave Memory users with an account can post tributes. Profile owners also can remove unwanted tributes.', app()->getLocale()) }}</p>
                  </div>
                </div>
              </div>


              <div class="accordion-item">
                <h2 class="accordion-header" id="heading_14">
                  <h2 class="accordion-header" id="heading_14">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_14" aria-expanded="false" aria-controls="collapse_14">
                      {{ GoogleTranslate::trans('Where is the data stored and how is your website secured?', app()->getLocale()) }}
                    </button>
                  </h2>
                </h2>
                <div id="collapse_14" class="accordion-collapse collapse" aria-labelledby="heading_14" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>{{ GoogleTranslate::trans('Our web site is 100% secured. Media data is stored on Amazon Web Services (AWS)', app()->getLocale()) }}</p>
                    <p>{{ GoogleTranslate::trans('The website and database is located in Google Cloud Platform (GCP)', app()->getLocale()) }}</p>
                    <p>{{ GoogleTranslate::trans('The user connection to the database is IP Locked and whitelisted on GCP by the user`s login activity.', app()->getLocale()) }}</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="heading_15">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_15" aria-expanded="false" aria-controls="collapse_15">
                    {{ GoogleTranslate::trans('How do I choose who I share content with?', app()->getLocale()) }}
                  </button>
                </h2>
                <div id="collapse_15" class="accordion-collapse collapse" aria-labelledby="heading_15" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>{{ GoogleTranslate::trans('Click Do you want to share something? From your lifeline.
                      Below your post, click the audience selector.', app()->getLocale()) }}
                      </p>
                      <p>{{ GoogleTranslate::trans('Click the audience you’d like to see your content (for example Private, Friends, Logged Users, or Public)', app()->getLocale()) }}.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="heading_116">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_116" aria-expanded="false" aria-controls="collapse_116">
                    {{ GoogleTranslate::trans('How do I choose who can like or comment on things I share on Grave Memory?', app()->getLocale()) }}
                  </button>
                </h2>
                <div id="collapse_116" class="accordion-collapse collapse" aria-labelledby="heading_116" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>{{ GoogleTranslate::trans('When you post something on Grave Memory, you can use the audience selector to choose who can like or comment on it.', app()->getLocale()) }}
                      </p>
                      <p>{{ GoogleTranslate::trans('If you create a public post, by default everyone can like or comment, even people who aren’t following you. However, you can change who can like or comment on your public posts in your follower settings.', app()->getLocale()) }}</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="heading_17">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_17" aria-expanded="false" aria-controls="collapse_17">
                    {{ GoogleTranslate::trans('Who can see it when someone shares my Grave Memory post?', app()->getLocale()) }}
                  </button>
                </h2>
                <div id="collapse_17" class="accordion-collapse collapse" aria-labelledby="heading_17" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>{{ GoogleTranslate::trans('When someone clicks “Share” below your post, they aren’t able to share your photos, videos or status updates through Grave Memory with people who weren’t in the audience you originally selected to share with. Only the people who could see those posts when you first made them can see them when someone clicks “Share.” Use the audience selector to adjust who you share posts with.', app()->getLocale()) }}
                      </p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="heading_18">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_18" aria-expanded="false" aria-controls="collapse_18">
                    {{ GoogleTranslate::trans('Who We Are?', app()->getLocale()) }}
                  </button>
                </h2>
                <div id="collapse_18" class="accordion-collapse collapse" aria-labelledby="heading_18" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>{{ GoogleTranslate::trans("In 2015, 'Digital Grave Memory' emerged, driven to reshape how we cherish departed loved ones. We offer a heartfelt approach, crafting a meaningful tribute with special memories, stories, and lessons, helping you honor and preserve their memory.", app()->getLocale()) }}</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="heading_19">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_19" aria-expanded="false" aria-controls="collapse_19">
                    {{ GoogleTranslate::trans('What We Do?', app()->getLocale()) }}
                  </button>
                </h2>
                <div id="collapse_19" class="accordion-collapse collapse" aria-labelledby="heading_19" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>{{ GoogleTranslate::trans("At 'Digital Grave Memory,' we've forged a platform for eternal legacies. Craft profiles that immortalize loved ones or narrate your cherished journey. Inspire generations with shared memories, creating a place where lives resonate for eternity.", app()->getLocale()) }}</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="heading_20">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_20" aria-expanded="false" aria-controls="collapse_20">
                    {{ GoogleTranslate::trans('Why We Exist?', app()->getLocale()) }}
                  </button>
                </h2>
                <div id="collapse_20" class="accordion-collapse collapse" aria-labelledby="heading_20" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>{{ GoogleTranslate::trans('In our hearts, we hold the conviction that every life is worthy of remembrance. A single memory possesses the transformative power to touch a soul profoundly.', app()->getLocale()) }}</p>
                  </div>
                </div>
              </div>


          </div>
    </div>
</main>
@endsection