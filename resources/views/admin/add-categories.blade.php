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
                <form method="post" action="{{ route('cate-store') }}">
                    @csrf
                <div class="card">
                    <div class="card-header">
                        <strong>Category</strong>
                        <small> Form</small>
                    </div>
                    
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="category" class=" form-control-label">Category Name</label>
                            <input type="text" id="category-name" name="category-name" placeholder="Enter your category name" class="form-control" required>
                        </div>
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-spanner fa-lg"></i>&nbsp;
                                <span id="payment-button-amount">Add Category</span>
                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
                            
            </div>
        </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
</div>
@endsection
