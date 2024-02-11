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
            <h3  style="font-size: 12px">{{ GoogleTranslate::trans('All premium video', app()->getLocale()) }} </h3>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        
                        <th>{{ GoogleTranslate::trans('Date', app()->getLocale()) }}</th>
                        <th>{{ GoogleTranslate::trans('Action', app()->getLocale()) }} </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ( $video as $order )
                    <tr>
                        <td>{{$i++}}</td>
                        {{-- <td>{{ $order->name}}</td> --}}
                        <td>{{ date(" d M Y", strtotime($order->order_date))}}</td>
                        {{-- <td>{{$->}}</td> --}}
                        {{-- <td>20,Dec 2023</td> --}}
                        <td>
                            {{-- <a href="{{URL::to("editor/accepted_order?id=$url_id")}}" class="btn btn-sm btn-success" title="Accept" > <i class="fa fa-check" aria-hidden="true"></i> </a> --}}
                            {{-- <a class="btn btn-sm btn-danger" title="Disaccept"><i class="fa fa-times" aria-hidden="true"></i></a> --}}
                         
                           {{-- {{URL::to("editor/show_order_details?id=$id")}} --}}
                           @php
                               $base_64_id = base64_encode($order->id);
                           @endphp
                            <a href="{{URL::to("/details_premium_video/$base_64_id ")}}"   class="btn btn-sm btn-warning" title="Show" ><i class="fa fa-eye" aria-hidden="true"></i> </a>
                        </td>
                    </tr>
                    @endforeach
                   
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