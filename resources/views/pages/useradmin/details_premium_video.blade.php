@extends("layout.layout3")
@section("content")
 
<div class="content-wrapper">
<div class="content-header">
<div class="container-fluid">
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

    <div class="card">
        <div class="card-header">
            <h3 style="font-size:12px">{{ GoogleTranslate::trans('Video details', app()->getLocale()) }}</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                      
                        <th>{{ GoogleTranslate::trans('Title', app()->getLocale()) }}</th>
                        <th>{{ GoogleTranslate::trans('Info', app()->getLocale()) }}</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @dd($video) --}}
                    <tr>
                        <td> {{ GoogleTranslate::trans('To create your video, please provide us with all the necessary videos and photos of your loved ones via  Google Drive.', app()->getLocale()) }} </td>
                        <td>{{$video->drive_link?? null}}</td>
                    </tr> 
                    
                    <tr>
                        <td> {{ GoogleTranslate::trans('The relation between you and your lovable one.', app()->getLocale()) }} </td>
                        <td>{{$video->relationship}}</td>
                    </tr>
                    <tr>
                        <td> {{ GoogleTranslate::trans('Do you have any specific music choices for the video? if yes. then provide the link.', app()->getLocale()) }}</td>
                        <td>{{$video->specific_music_link}}</td>
                    </tr>
                    <tr>
                        <td>{{ GoogleTranslate::trans('Who should be shown at the beginning of the video?', app()->getLocale()) }}</td>
                        <td>{{$video->shown_beginning}}</td>
                    </tr>
                    <tr>
                        <td>{{ GoogleTranslate::trans('Will the video be serious? Or would it be Funny? Or joyful. or entertaining?', app()->getLocale()) }}</td>
                        <td>{{$video->video_type}}</td>
                    </tr>
                    <tr>
                        <td>{{ GoogleTranslate::trans('Duration & Price', app()->getLocale()) }}</td>
                        @php
                           $du_pri =  explode("_",$video->editing_price)
                        @endphp
                        <td>{{$du_pri[0]}} &  {{$du_pri[1]}}$</td>
                    </tr>
                    <tr>
                        <td>{{ GoogleTranslate::trans('Order Date', app()->getLocale()) }}</td>
                        <td>{{$video->order_date}}</td>
                    </tr>
                    <tr>
                        <td>{{ GoogleTranslate::trans('Editing status', app()->getLocale()) }}</td>
                        <td>
                            @if(App\Models\order_accepted::where(['video_id'=>$video->id])->count() >0)
                            Editing
                            @elseif(App\Models\order_completed::where(['video_id'=>$video->id])->count() >0) 
                            Completed
                            @else
                            Pending 
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>

          

        </div>
    </div>


</div>
</div>
</div>


  <!-- Modal -->
  <div class="modal fade" id="tribute_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{URL::to("add_sub_qr")}}">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ GoogleTranslate::trans('Add more tribute', app()->getLocale()) }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <textarea name="tributes_link" class="form-control" placeholder="Enter Tribute" rows="7"  ></textarea>
            <input type="hidden" name="qr_id" id="tribute">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ GoogleTranslate::trans('Close', app()->getLocale()) }}</button>
          <button type="submit" class="btn btn-primary">{{ GoogleTranslate::trans('Save', app()->getLocale()) }}</button>
        </div>
      </div>
    </form>
    </div>
  </div>

  
  <!-- Modal -->
  <div class="modal fade" id="photo_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{URL::to("add_sub_qr")}}"  method="post" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ GoogleTranslate::trans('Add more photo', app()->getLocale()) }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @csrf
            <input type="text" name="title" class="form-control" placeholder="Ente title">
            <input type="file" name="photo" class="form-control" id="">
            <input type="hidden" id="photo" name="qr_id">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ GoogleTranslate::trans('Close', app()->getLocale()) }}</button>
          <button type="submit" class="btn btn-primary">{{ GoogleTranslate::trans('Save', app()->getLocale()) }}</button>
        </div>
      </div>
        </form>
    </div>
  </div>

  <script>
    function handle_qr_id(e){
        console.log(  document.getElementById(e.split("_")[0]));
        document.getElementById(e.split("_")[0]).value = e.split("_")[1]
      
    }
  </script>

@endsection