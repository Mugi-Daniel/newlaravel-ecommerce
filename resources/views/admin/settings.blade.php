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
                <form method="post" action="{{ route('store') }}">
                    @csrf
                <div class="card">
                    <div class="card-header">
                        <strong>Settings</strong>
                    </div>
                    
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="company-name" class=" form-control-label">Company Name</label>
                            <input type="text" id="company-name" name="company-name" placeholder="Enter your company name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="city" class=" form-control-label">About</label>
                            <textarea id="about" name="about" placeholder="Write more about the company" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="email" class=" form-control-label">Email</label>
                            <input type="email" id="email" name="email" placeholder="Emal address" class="form-control" required>
                        </div>
                        <div class="row form-group">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Phone" class=" form-control-label">Phone</label>
                                    <input type="phone" id="phone" name="phone" placeholder="enter phone number" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="paybill" class=" form-control-label">Mpesa Paybill</label>
                                    <input type="number" id="paybill" name="paybill" placeholder="enter paybill number" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-spanner fa-lg"></i>&nbsp;
                                <span id="payment-button-amount">Save Settings</span>
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
