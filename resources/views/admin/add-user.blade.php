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
                <form method="post" action="{{ route('store-user') }}">
                    @csrf
                <div class="card">
                    <div class="card-header">
                        <strong>Add Users</strong>
                    </div>
                    
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="name" class=" form-control-label">Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class=" form-control-label">Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone" class=" form-control-label">Phone</label>
                            <input type="phone" id="phone" name="phone" placeholder="Enter phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="name" class=" form-control-label">Set Password</label>
                            <input type="password" id="password" name="password" placeholder="Enter password" class="form-control" required>
                        </div>
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-spanner fa-lg"></i>&nbsp;
                                <span id="payment-button-amount">Add User</span>
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
