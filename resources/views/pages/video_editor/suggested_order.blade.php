@extends("layout.video_editor_layout")
@section("content")
 
<div class="content-wrapper">
<div class="content-header">
<div class="container-fluid">
    @if (session('message'))
    <div class="alert @if(session('condition') == true) alert-success @else alert-danger @endif">
        {{ session('message') }}
    </div>
    @endif
    
    <div class="row mb-2">
        <div class="col-sm-6">
        <h5> {{ GoogleTranslate::trans('Suggested order', app()->getLocale()) }}</h5>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{URL::to("/editor/dashboard")}}">{{ GoogleTranslate::trans('Show', app()->getLocale()) }}Dashboard</a></li>
        <li class="breadcrumb-item active"> {{ GoogleTranslate::trans('Suggested order', app()->getLocale()) }}</li>
        </ol>
        </div>
        </div>

    <div class="card" >
        <div class="card-body" >
            {{-- @dd($req_order); --}}
           <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ GoogleTranslate::trans('Client', app()->getLocale()) }} </th>
                    <th>{{ GoogleTranslate::trans('Order Date', app()->getLocale()) }}</th>
                    <th style="width: 10rem;">{{ GoogleTranslate::trans('Action', app()->getLocale()) }}</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($req_order as $order )
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{ $order->name}}</td>
                    <td>{{ date(" d M Y", strtotime($order->order_date))}}</td>
                    {{-- <td>{{$->}}</td> --}}
                    {{-- <td>20,Dec 2023</td> --}}
                    <td>
                        <?php $url_id =  encrypt($order->id); ?>
                        <a href="{{URL::to("editor/accepted_order?id=$url_id")}}" class="btn btn-sm btn-success" title="Accept" > <i class="fa fa-check" aria-hidden="true"></i> </a>
                        {{-- <a class="btn btn-sm btn-danger" title="Disaccept"><i class="fa fa-times" aria-hidden="true"></i></a> --}}
                        <a href="{{URL::to("editor/show_order_details?id=$url_id")}}"   class="btn btn-sm btn-warning" title="Show" ><i class="fa fa-eye" aria-hidden="true"></i> </a>
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
    
    

    
@endsection