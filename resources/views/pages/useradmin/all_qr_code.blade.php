@extends("layout.layout3")
@section("content")
 
<div class="content-wrapper">
<div class="content-header">
<div class="container-fluid">
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
    {{-- @dd(  $qr_data) --}}
    <div class="card">
        <div class="card-header">
            <h3>{{ GoogleTranslate::trans('All QR-Code', app()->getLocale()) }} </h3>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ GoogleTranslate::trans('Name', app()->getLocale()) }}</th>
                        <th>{{ GoogleTranslate::trans('QR Code', app()->getLocale()) }} </th>
                        <th>{{ GoogleTranslate::trans('Action', app()->getLocale()) }} </th>
                    </tr>
                </thead>
                <tbody>
                  <?php $i = 1 ?>
                  @php
                         //Convert Free to Premium For 1 QR profile
    $qr_fr_to_1_7 = App\Models\QR_Model::where(['paid_status'=>'fr_to_1_7$'])->where(['user_auth_id'=>Session::get('auth_id')])->count() ;
    $fr_to_1_7 = App\Models\qr_payment_info::where(['qr_price_info'=>'fr_to_1_7$'])->where(['payer_id'=>Session::get('auth_id')])->count() ;

                  @endphp
                  @foreach ($qr_data as $data)
                    @php
                    $ba_64 = base64_encode($data->id);
                    @endphp
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$data->full_name}}</td>
                        <td>
                          <div style="width: 68%" id="download_id_{{$data->id}}"> {{App\Http\Controllers\QR::generateQRCode($ba_64)}} </div>                        
                        </td>
                        <td>
                         
                            <a href="#" class="btn btn-sm btn-warning"   data-bs-toggle="modal" data-bs-target="#modal_qr_{{$data->id}}" class="btn"> <i class="fa fa-download" aria-hidden="true"></i> </a>

                            {{-- <a onclick="download_qr({{$data->id}})" class="btn btn-sm btn-warning" title="Download"><i class="fa fa-download" aria-hidden="true"></i> </a> --}}
                           <!--- Modal for download qr code -->
                            <div class="modal fade" id="modal_qr_{{$data->id}}" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Download QR Code </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <div style="position: relative;width: 79%" id="qr_img_{{$data->id}}">
                                          <img style="width: 23rem;height: 25.3rem " src="{{asset("assets/images/imagesqr.jpeg")}}" alt="">
                                         <div class="download_qr_code" style="position: absolute; top: 17px;left: 17px">
                                          {{App\Http\Controllers\QR::downloadQRCode($ba_64)}} 
                                         </div>
                                         
                                        
                                      </div>
                                 
                                  </div>
                                  <div class="modal-footer">
                                      <div>
                                          <a href="" class="d-none btn btn-warning" id="btn_download_qr_img_{{$data->id}}" download="digital graveme mory.png">{{ GoogleTranslate::trans('Download', app()->getLocale()) }}</a>
                                      </div>
                                    <button type="button" onclick="handle_download_qr('qr_img_{{$data->id}}')" class="btn btn-primary">{{ GoogleTranslate::trans('Generate Image', app()->getLocale()) }}</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <a href="{{URL::to("/qr_mail/$data->id")}}" class="btn btn-sm btn-warning" title="{{ GoogleTranslate::trans('Send my mail', app()->getLocale()) }}"><i class="fas fa-mail-bulk    "></i> </a>
                            <a href="{{URL::to("/show_qr_data/$ba_64")}}" class="btn btn-sm btn-warning" title="Show"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            @if( $data->paid_status == 'fr_to_1_7$' || $data->paid_status == 'pr_a_s_p_1_7$'  || $data->paid_status == 'fa_pa_ac_10_55$' )
                            <a href="#photo_9" onclick="handle_qr_id('photo_{{$data->id}}')" data-bs-toggle="modal" data-bs-target="#photo_modal"  class="btn btn-sm btn-warning" title="Add more photo"><i class="fas fa-image    "></i></a>
                            <a href="#Tributes_9" onclick="handle_qr_id('tribute_{{$data->id}}')" data-bs-toggle="modal" data-bs-target="#tribute_modal"  class="btn btn-sm btn-warning" title="Add more moments"> <i class="fa fa-tag" aria-hidden="true"></i> </a>
                           @endif
                           @if (  $fr_to_1_7 >0 &&  $fr_to_1_7 > $qr_fr_to_1_7 )
                            @if ( $data->paid_status == 'free' || $data->paid_status == 'fa_p_l_a_5_10$' )
                            <a href="{{URL::to("/normal_to_premium/$ba_64")}}"  class="btn btn-sm btn-warning" title="Convert">  <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>

                            @endif
                           @endif
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
          <h5 class="modal-title" id="exampleModalLabel">{{ GoogleTranslate::trans('Download', app()->getLocale()) }}{{ GoogleTranslate::trans('Add more moments', app()->getLocale()) }} </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <textarea name="tributes_link" class="form-control" placeholder="Enter moments" rows="7"  ></textarea>
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
          <h5 class="modal-title" id="exampleModalLabel">Add more photo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @csrf
            <input type="text" name="title" class="form-control" placeholder="Ente title">
            <input type="file" name="photo" class="form-control" id="">
            <input type="hidden" id="photo" name="qr_id">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
        </form>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    function handle_qr_id(e){
        console.log(  document.getElementById(e.split("_")[0]));
        document.getElementById(e.split("_")[0]).value = e.split("_")[1]
      
    }

    function download_qr(id){
      

  const canvas = document.getElementById(`download_id_${id}`);
  console.log(canvas);

  const dataURL = canvas.toDataUrl("image/jpeg");
  console.log(dataURL);

    }

    function handle_download_qr(id){
        console.log(id)
                html2canvas(document.getElementById(id)).then(canvas => {
                   let convart_base_64 =  canvas.toDataURL('image/png')
                  
                   document.getElementById(`btn_download_${id}`).classList.remove("d-none")
                    document.getElementById(`btn_download_${id}`).href= convart_base_64;

                });
    }
  

  </script>

@endsection