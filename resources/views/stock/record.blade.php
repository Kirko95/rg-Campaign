@extends('layouts.app.team')

@section('content')
<!--================================-->
<!-- Breadcrumb Start -->
<!--================================-->
<div class="pageheader pd-t-25 pd-b-35">
    <div class="d-flex justify-content-between">
        <div class="clearfix">
            <div class="pd-t-5 pd-b-5">
                <h1 class="pd-0 mg-0 tx-20 tx-dark">Projects</h1>
            </div>
            <div class="breadcrumb pd-0 mg-0">
                <a class="breadcrumb-item" href="#"><i class="icon ion-ios-home-outline"></i> Home</a>
                <a class="breadcrumb-item" href="">Pages</a>
                <span class="breadcrumb-item active">Projects</span>
            </div>
        </div>
    </div>
</div>
<!--/ Breadcrumb End -->
<!--================================-->
<!-- Projects Start -->
<!--================================-->
<div class="row clearfix">
    <div class="col-sm-6 col-xl-12">
        <div class="card mg-b-30">
            <br>
            <div class="card-body d-flex justify-content-between card-header d-flex align-items-center pb-3">
                <div class="card-body pb-3 tx-gray-700">
                    <form action="#" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-5">
                                <label for="product">Product</label>
                                <select name="product[]" class="form-control">
                                    <option selected disabled>Selected Product</option>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <label for="opening">Quantity</label>
                                <input type="number" name="quantity" class="form-control" placeholder="Opening Stock">
                            </div>
                            <div class="col-md-10">
                                <label for="remarks">Remarks</label>
                                <textarea name="remarks" class="form-control" placeholder="Write down your remarks..."></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label for="has_more">Are there more products?</label>
                        </div>
                        <input type="text" name="type" value="opening" class="form-control" hidden>
                        <br>
                        <div class="container">
                            <button class="btn btn-outline-primary rounded-pill btn-block" type="submit">Confirm </button>
                        </div>
                    </form>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection
