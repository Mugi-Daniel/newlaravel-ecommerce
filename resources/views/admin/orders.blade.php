@extends('layouts.admin')
@section('content')
<div class="page-container">
    @include('layouts.header')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="card">
            <div class="card-body">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">Orders</h2>
                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Country</th>
                                    <th>State</th>
                                    <th>Totals</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $item)
                                <tr>
                                    <td>{{ $item->Product_name }}</td>
                                    <td>{{ $item->Price }}</td>
                                    <td>{{ $item->Quantity }}</td>
                                    <td>{{ $item->Country }}</td>
                                    <td>{{ $item->State }}</td>
                                    <td>{{ $item->Totals }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        @if($item->status === 0)
                                        <form action="{{ route('update-order-status', $item->id) }}" method="post" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Confirm</button>
                                        </form>
                                        @endif
                                        <a class="btn btn-success" href="{{ route('show-orders', $item->id) }}">View</a>
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
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
</div>
@endsection
