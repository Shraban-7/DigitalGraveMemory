@extends("layout.video_editor_layout")
@section("content")
 
<div class="content-wrapper">
<div class="content-header">
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h5> {{ GoogleTranslate::trans('Completed order', app()->getLocale()) }}</h5>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{URL::to("/editor/dashboard")}}">{{ GoogleTranslate::trans('Dashboard', app()->getLocale()) }}</a></li>
        <li class="breadcrumb-item active"> {{ GoogleTranslate::trans('Completed order', app()->getLocale()) }}</li>
        </ol>
        </div>
        </div>
    <div class="card">
        <div class="card-body">
            <table class="table  table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ GoogleTranslate::trans('Client', app()->getLocale()) }} </th>
                        <th>{{ GoogleTranslate::trans('Order  Date', app()->getLocale()) }}</th>
                        <th>{{ GoogleTranslate::trans('Order complete Date', app()->getLocale()) }}</th>
                      
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($completed_order as $order )
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $order->name}}</td>
                        <td>{{ date(" d M Y", strtotime($order->order_date))}}</td>
                        <td>{{ date(" d M Y", strtotime($order->order_complete_date))}}</td>
                       
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