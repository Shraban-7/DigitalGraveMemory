@extends("layout.layout3")
@section("content")
 
<div class="content-wrapper">
<div class="content-header">
<div class="container-fluid">
   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
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
        <h5 class="card-text">{{ GoogleTranslate::trans('Primary Info', app()->getLocale()) }} </h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>{{ GoogleTranslate::trans('Title', app()->getLocale()) }}</th>
                <th>{{ GoogleTranslate::trans('Info', app()->getLocale()) }} </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ GoogleTranslate::trans('Name', app()->getLocale()) }}</td>
                <td>{{$qr_data->full_name}}</td>
            </tr>

            <tr>
                <td>{{ GoogleTranslate::trans('Birth Day', app()->getLocale()) }} </td>
                <td>{{$qr_data->birth_day}}</td>
            </tr>

            <tr>
                <td>{{ GoogleTranslate::trans('Passed Away', app()->getLocale()) }} </td>
                <td>{{$qr_data->death_day}}</td>
            </tr>

            <tr>
                <td>{{ GoogleTranslate::trans('Bio', app()->getLocale()) }}</td>
                <td>{{$qr_data->slug}}</td>
            </tr>
            <tr>
                <td>{{ GoogleTranslate::trans('Profile Image', app()->getLocale()) }} </td>
                <td><img style="width: 100px;height: 100px;border-radius: 50%;" src="{{App\Http\Controllers\Controller::$img_url."/uploads/".$qr_data->profile_img}}" alt=""> </td>
            </tr>
        </tbody>       
        </table>
    </div>   
    <div class="card-footer">
        <button class="btn btn-sm btn-warning float-end"  data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-edit    "></i> {{ GoogleTranslate::trans('Update', app()->getLocale()) }}</button>
    </div> 
</div>

<hr>


<div class="card">
    <div class="card-header">
        <h5 class="card-text">{{ GoogleTranslate::trans('Diary', app()->getLocale()) }}</h5>
    </div>
    <div class="card-body">
        <div>
            {!! $qr_data->bio !!}
        </div>
    </div>  
    <div class="card-footer">
        <button class="btn btn-sm btn-warning float-end" data-bs-toggle="modal" data-bs-target="#bio_modal" ><i class="fas fa-edit    "></i> {{ GoogleTranslate::trans('Update', app()->getLocale()) }}</button>
    </div>   
</div>

@if( $qr_data->paid_status == 'fr_to_1_7$' || $qr_data->paid_status == 'pr_a_s_p_1_7$'  || $qr_data->paid_status == 'fa_pa_ac_10_55$' )
<div class="card">
    <div class="card-header">
        <h5 class="card-text">{{ GoogleTranslate::trans('Photos', app()->getLocale()) }}</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>{{ GoogleTranslate::trans('Image', app()->getLocale()) }}</th>
                <th>{{ GoogleTranslate::trans('Title', app()->getLocale()) }}  </th>
                <th>{{ GoogleTranslate::trans('Action', app()->getLocale()) }}  </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($qr_photos_link as $qr_photos )
            <tr>
                <td><img style="width: 100px;height: 100px;border-radius: 50%;" src="{{App\Http\Controllers\Controller::$img_url."/uploads/".$qr_photos->photo}}" alt=""> </td>
                <td>{{$qr_photos->title}}</td>
               <td>
                   <a href="{{URL::to("/delete_sub_qr?qr_photo=$qr_photos->id&id=$qr_photos->qr_id")}}" class="btn btn-danger btn-sm float-end"><i class="fa fa-trash" aria-hidden="true"></i>{{ GoogleTranslate::trans('Delete', app()->getLocale()) }}</a>
                </td> 
            </tr>
            @endforeach
        </tbody>
      
        </table>
    </div>    
    <div class="card-footer">
        {{-- <button class="btn btn-sm btn-warning float-end"><i class="fas fa-edit    "></i> {{ GoogleTranslate::trans('Update', app()->getLocale()) }}</button> --}}
    </div> 
</div>

<hr>
<div class="card">
    <div class="card-header">
        <h5 class="card-text">{{ GoogleTranslate::trans('Video', app()->getLocale()) }}</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>{{ GoogleTranslate::trans('Title', app()->getLocale()) }}</th>
                <th>{{ GoogleTranslate::trans('Info', app()->getLocale()) }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                 <td> <i class="fa fa-youtube" aria-hidden="true"></i> {{ GoogleTranslate::trans('Video', app()->getLocale()) }} </td>
                <td>
                    <iframe style="width:100%;height:200px" src="{{$qr_data->youtube_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                {{-- {!!$qr_data->youtube_link !!} --}}
                </td>
            </tr>
            <tr>
                <td>{{ GoogleTranslate::trans('Video Title', app()->getLocale()) }} </td>
                <td>{{$qr_data->video_title}}</td>
               
            </tr>
            {{-- <tr>
                <td>{{ GoogleTranslate::trans('Description', app()->getLocale()) }}</td>
                <td>{{$qr_data->video_description}}</td>
            </tr> --}}
        </tbody>
        </table>
    </div>    
    <div class="card-footer">
        <button class="btn btn-sm btn-warning float-end"  data-bs-toggle="modal" data-bs-target="#video_modal" ><i class="fas fa-edit    "></i> {{ GoogleTranslate::trans('Update', app()->getLocale()) }}</button>
    </div> 
</div>
<hr>


<div class="card">
    <div class="card-header">
        <h5 class="card-text">{{ GoogleTranslate::trans('Cemetery Information', app()->getLocale()) }}</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>{{ GoogleTranslate::trans('Title', app()->getLocale()) }}</th>
                <th>{{ GoogleTranslate::trans('Info', app()->getLocale()) }} </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ GoogleTranslate::trans('Cemetery Name', app()->getLocale()) }}</td>
                <td>{{$qr_data->cemetery_name}}</td>
            </tr>

            <tr>
                <td>{{ GoogleTranslate::trans('Cemetery plot number', app()->getLocale()) }}</td>
                <td>{{$qr_data->cemetery_plot_number}}</td>
            </tr>

            <tr>
                <td>{{ GoogleTranslate::trans('Cemetery Location', app()->getLocale()) }}</td>
                <td>{{$qr_data->cemetery_plot_location}}</td>
            </tr>

          
        </tbody>
        </table>
    </div>  
    <div class="card-footer">
        <button class="btn btn-sm btn-warning float-end"   data-bs-toggle="modal" data-bs-target="#cemetery_modal"><i class="fas fa-edit    "></i> {{ GoogleTranslate::trans('Update', app()->getLocale()) }}</button>
    </div>   
</div>

<hr>


<div class="card">
    <div class="card-header">
        <h5 class="card-text">{{ GoogleTranslate::trans('Moments', app()->getLocale()) }} </h5>
    </div>
    <div class="card-body">
       
        @foreach ($tributes_link as $tribute)
        <a href="{{URL::to("/delete_sub_qr?qr_tribute=$tribute->id&id=$tribute->qr_id")}}" class="btn btn-danger btn-sm float-end"><i class="fa fa-trash" aria-hidden="true"></i>{{ GoogleTranslate::trans('Delete', app()->getLocale()) }}</a>
        {!! $tribute->tributes_link !!}
        <hr>
            
        @endforeach

    </div>  
    {{-- <div class="card-footer">
        <button class="btn btn-sm btn-warning float-end"   data-bs-toggle="modal" data-bs-target="#cemetery_modal"><i class="fas fa-edit    "></i> {{ GoogleTranslate::trans('Update', app()->getLocale()) }}</button>
    </div>    --}}
</div>
@endif
</div>
</div>
</div>


<!---Modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{URL::to("/qr_data_update")}}"  method="post" enctype="multipart/form-data">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ GoogleTranslate::trans('Primary Info', app()->getLocale()) }}  </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        @csrf
            <div class="form-group col-lg-12 col-sm-12 col-md-12">
                <label for="">{{ GoogleTranslate::trans('Name', app()->getLocale()) }} </label>
                <input type="text" name="full_name" value="{{$qr_data->full_name}}" class="form-control" placeholder="Enter Name" >
            </div>
            <div class="form-group col-lg-12 col-sm-12 col-md-12">
                <label for="">{{ GoogleTranslate::trans('Birth day', app()->getLocale()) }} </label>
                <input type="text" name="birth_day"  class="form-control" value="{{$qr_data->birth_day}}" placeholder="Enter Birth Day" >
                <input type="hidden" name="id"  value="{{$qr_data->id}}">
            </div>
            <div class="form-group col-lg-12 col-sm-12 col-md-12">
                <label for="">{{ GoogleTranslate::trans('Passed Away', app()->getLocale()) }}</label>
                <input type="text" name="death_day"  class="form-control" value="{{$qr_data->death_day}}" placeholder="Enter Passed Away" >
            </div>

            <div class="form-group col-lg-12 col-sm-12 col-md-12">
                <label for="">{{ GoogleTranslate::trans('Bio', app()->getLocale()) }} </label>
                <input type="text" name="slug"  class="form-control" value="{{$qr_data->slug}}" placeholder="Enter Bio" >
            </div>
            <input type="hidden" name="profile_img_path" value="{{$qr_data->profile_img}}">

            <div class="form-group col-lg-12 col-sm-12 col-md-12">
                <label for="profile_img"><img style="width: 100px;height:100px;border-radius:50%;cursor: pointer;" src="{{App\Http\Controllers\Controller::$img_url."/uploads/".$qr_data->profile_img}}" alt=""> </label>
                <input style="display:none" type="file" id="profile_img" name="profile_img"  >
            </div>

      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ GoogleTranslate::trans('Close', app()->getLocale()) }}</button>
          <button type="submit" class="btn btn-primary">{{ GoogleTranslate::trans('Save changes', app()->getLocale()) }}</button>
        </div>
      </div>
    </div>
</form>
  </div>

  {{-- Dairy  --}}

   <!-- Modal -->
   <div class="modal fade" id="bio_modal" >
    <div class="modal-dialog">
        <form action="{{URL::to("/qr_data_update")}}">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ GoogleTranslate::trans('Dairy', app()->getLocale()) }} </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <input type="hidden" name="id" value="{{$qr_data->id}}">
         <textarea name="bio" id="summernote" >
            {!! $qr_data->bio !!}
         </textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ GoogleTranslate::trans('Close', app()->getLocale()) }}</button>
          <button type="submit" class="btn btn-primary">{{ GoogleTranslate::trans('Save changes', app()->getLocale()) }}</button>
        </div>
      </div>
    </form>
    </div>
  </div>

  <!-- Youtube video modal --->

   <!-- Modal -->
   <div class="modal fade" id="video_modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{URL::to("/qr_data_update")}}">
        <div class="modal-header">
          <h5 class="modal-title">{{ GoogleTranslate::trans('Video', app()->getLocale()) }}  </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        
            <div class="form-group col-lg-12 col-sm-12 col-md-12">
                <label for=""><i class="fa fa-youtube" aria-hidden="true"></i>{{ GoogleTranslate::trans('Youtube Embed URL', app()->getLocale()) }}</label>
                <input type="text" name="video" value="{{$qr_data->youtube_link}}" class="form-control" placeholder="Enter youtube link" >
                <input type="hidden" name="id" value="{{$qr_data->id}}" class="form-control" placeholder="Enter youtube link" >
            </div>
            <div class="form-group col-lg-12 col-sm-12 col-md-12">
                <label for="">{{ GoogleTranslate::trans('Video Title', app()->getLocale()) }}</label>
                <input type="text" name="video_title"  class="form-control" value="{{$qr_data->video_title}}" placeholder="Enter video title" >
            </div>
            {{-- <div class="form-group col-lg-12 col-sm-12 col-md-12">
                <label for="">{{ GoogleTranslate::trans('Video Description', app()->getLocale()) }} </label>
                
                <textarea class="form-control" name="video_description" rows="7" >{{$qr_data->video_description}}</textarea>
            </div> --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ GoogleTranslate::trans('Close', app()->getLocale()) }}</button>
          <button type="submit" class="btn btn-primary">{{ GoogleTranslate::trans('Save changes', app()->getLocale()) }}</button>
        </div>
    </form>
      </div>
    </div>
  </div>

  
  
  <!-- Cemetery Information --->

   <!-- Modal -->
   <div class="modal fade"  id="cemetery_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{URL::to("/qr_data_update")}}">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{ GoogleTranslate::trans('Cemetery Information', app()->getLocale()) }}  </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <form action="">
            <div class="form-group col-lg-12 col-sm-12 col-md-12">
                <label for=""> {{ GoogleTranslate::trans('Cemetery Name', app()->getLocale()) }} </label>
                <input type="text" name="cemetery_name" value="{{$qr_data->cemetery_name}}" class="form-control" placeholder="Enter Cemetery Name" >
                <input type="hidden" name="id" value="{{$qr_data->id}}" class="form-control" placeholder="Enter Cemetery Name" >
            </div>
            <div class="form-group col-lg-12 col-sm-12 col-md-12">
                <label for="">{{ GoogleTranslate::trans('Cemetery plot number', app()->getLocale()) }}</label>
                <input type="text" name="cemetery_plot_number"  class="form-control" value="{{$qr_data->cemetery_plot_number}}" placeholder="Enter Cemetery plot number" >
            </div>  

            <div class="form-group col-lg-12 col-sm-12 col-md-12">
                <label for="">{{ GoogleTranslate::trans('Cemetery Location', app()->getLocale()) }}	</label>
                <input type="text" name="cemetery_plot_location"  class="form-control" value="{{$qr_data->cemetery_plot_location}}" placeholder="Enter Cemetery Location	" >
            </div>       

         </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ GoogleTranslate::trans('Close', app()->getLocale()) }}</button>
          <button type="submit" class="btn btn-primary">{{ GoogleTranslate::trans('Save changes', app()->getLocale()) }}</button>
        </div>
      </div>
        </form>
    </div>
  </div>



<script>
   $('#summernote').summernote({
  height: 300,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: true,
  toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'insert', [ 'link'] ],
            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
        ]                  // set focus to editable area after initializing summernote
});
    </script>
    
     

@endsection