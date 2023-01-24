@extends('layouts.admin')
@section('content')
<div class="page-container">
    @include('layouts.header')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="card">
            <div class="card-body">
                <div class="col-lg-12">
                    
                    <div class="panel panel-flat">
                        <div class="panel-header">
                            <h2 class="title-1 m-b-25">{{ $order->Product_name }}</h2>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">Price: {{ $order->Price }}</li>
                                <li class="list-group-item">Quantity: {{ $order->Quantity }}</li>
                                <li class="list-group-item">Country: {{ $order->Country }}</li>
                                <li class="list-group-item">State: {{ $order->State }}</li>
                                <li class="list-group-item">Status: <?php $order->status === 1 ? print "Confirmed" : print "Not confirmed" ?></li>
                                <li class="list-group-item"><h2 class="title-1 m-b-25">{{ number_format( $order->Totals, 2) }}</h2></li>
                            </ul>
                        </div>
                        <div class="panel-footer">
                            @if(!empty($order->created_at))
                                <p class="text-sm">Created: {{ $order->created_at }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
</div>
@endsection
