@extends('layouts.admin')
@section('content')
<div class="page-container">
    @include('layouts.header')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container">
                @if (session('success'))
                    <div class="mb-4 bg-success text-white text-center px-4 py-3 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif
                <form method="post" action="{{ route('product-store') }}" enctype="multipart/form-data">
                    @csrf
                <div class="card">
                    <div class="card-header">
                        <strong>Product</strong>
                        <small> Form</small>
                    </div>
                    
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="product" class=" form-control-label">Product Name</label>
                            <input type="text" id="product-name" name="product-name" placeholder="Enter your product name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="category" class=" form-control-label">Category</label>
                            <input type="text" id="category" name="category" placeholder="category" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="price" class=" form-control-label">Price</label>
                            <input type="text" id="price" name="price" placeholder="Enter price" class="form-control" required>
                        </div>
                        <div class="row form-group">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="image" class=" form-control-label">Image</label>
                                    <input type="file" id="image" name="image" placeholder="Enter your city" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-spanner fa-lg"></i>&nbsp;
                                <span id="payment-button-amount">Add Product</span>
                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
                            
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
</div>
@endsection
