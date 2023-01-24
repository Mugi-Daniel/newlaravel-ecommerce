@extends('layouts.admin')
@section('content')
<div class="page-container">
    @include('layouts.header')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="card">
            <div class="card-body">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">Products</h2>
                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Product Name</th>
                                    <th>Product Image</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $key)
                                <tr>
                                    <td>{{ $key->created_at }}</td>
                                    <td>{{ $key->Product_name }}</td>
                                    <td><img src="{{ asset('storage/images/products/' . $key->Image_name) }}" alt="pr" style="width:50px"></td>
                                    <td>{{ $key->Category }}</td>
                                    <td>{{ $key->Price }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="paginatoin-area style-2 pt-35 pb-20 text-center paginationstyle">               
                            {{ $products->links() }}
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
