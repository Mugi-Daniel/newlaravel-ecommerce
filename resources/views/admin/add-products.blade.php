@extends('layouts.admin')
@section('content')
<div class="page-container">
    @include('layouts.header')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <strong>Company</strong>
                        <small> Form</small>
                    </div>
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="company" class=" form-control-label">Company</label>
                            <input type="text" id="company" placeholder="Enter your company name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label">VAT</label>
                            <input type="text" id="vat" placeholder="DE1234567890" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="street" class=" form-control-label">Street</label>
                            <input type="text" id="street" placeholder="Enter street name" class="form-control">
                        </div>
                        <div class="row form-group">
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="city" class=" form-control-label">City</label>
                                    <input type="text" id="city" placeholder="Enter your city" class="form-control">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="postal-code" class=" form-control-label">Postal Code</label>
                                    <input type="text" id="postal-code" placeholder="Postal Code" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="country" class=" form-control-label">Country</label>
                            <input type="text" id="country" placeholder="Country name" class="form-control">
                        </div>
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-lock fa-lg"></i>&nbsp;
                                <span id="payment-button-amount">Pay $100.00</span>
                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                            </button>
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
