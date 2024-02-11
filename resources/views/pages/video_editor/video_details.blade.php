@extends("layout.video_editor_layout")
@section("content")
 
<div class="content-wrapper">
<div class="content-header">
<div class="container-fluid">
    {{-- @dd( $acce_order ) --}}

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                {{ GoogleTranslate::trans('The relation between you and your lovable one.', app()->getLocale()) }} 
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>{{$acce_order->relationship}}</p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                {{ GoogleTranslate::trans('Do you have any specific music choices for the video? if yes. then provide the link.', app()->getLocale()) }}
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>{{$acce_order->specific_music_link}}</p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                {{ GoogleTranslate::trans('Who should be shown at the beginning of the video?', app()->getLocale()) }}
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
             {{$acce_order->shown_beginning}}
            </div>
          </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="heading_{{$acce_order->id}}">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{$acce_order->id}}" aria-expanded="false" aria-controls="collapse_{{$acce_order->id}}">
                {{ GoogleTranslate::trans('Will the video be serious? Or would it be Funny? Or joyful. or entertaining?', app()->getLocale()) }}
              </button>
            </h2>
            <div id="collapse_{{$acce_order->id}}" class="accordion-collapse collapse" aria-labelledby="heading_{{$acce_order->id}}" data-bs-parent="#accordionExample">
              <div class="accordion-body">
               {{$acce_order->video_type}}
              </div>
            </div>
          </div>
          
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading_{{$acce_order->id}}_1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{$acce_order->id}}_1" aria-expanded="false" aria-controls="collapse_{{$acce_order->id}}_1">
                {{ GoogleTranslate::trans('Write something about your desired video', app()->getLocale()) }}
              </button>
            </h2>
            <div id="collapse_{{$acce_order->id}}_1" class="accordion-collapse collapse" aria-labelledby="heading_{{$acce_order->id}}_1" data-bs-parent="#accordionExample">
              <div class="accordion-body">
               {{$acce_order->about_your_desired_video}}
              </div>
            </div>
          </div>
  
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading_{{$acce_order->editing_price}}_1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{$acce_order->editing_price}}_1" aria-expanded="false" aria-controls="collapse_{{$acce_order->editing_price}}_1">
                {{ GoogleTranslate::trans('Video Duration Time', app()->getLocale()) }}
              </button>
            </h2>
            <div id="collapse_{{$acce_order->editing_price}}_1" class="accordion-collapse collapse" aria-labelledby="heading_{{$acce_order->editing_price}}_1" data-bs-parent="#accordionExample">
              <div class="accordion-body">
               {{explode('_',$acce_order->editing_price)[0] }}
              </div>
            </div>
          </div>
  
          
      </div>


</div>
</div>
</div>
  @endsection

