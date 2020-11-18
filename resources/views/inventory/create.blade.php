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
                <a class="breadcrumb-item" href="">Inventory</a>
                <span class="breadcrumb-item active">Create</span>
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
            <div class="card-body d-flex justify-content-between card-header d-flex align-items-center pb-3">
                <div class="card-body pb-3 tx-gray-700">
                    <form action="{{ route('stock.store', [Auth()->user()->id, $campaign->id]) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <label for="name">Type</label>
                                <select name="type" class="form-control">
                                    <option disabled selected>Select Type</option>
                                    <option value="stock">Stock</option>
                                    <option value="merchandise">Merchandise</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="product">Product</label>
                                <input type="text" name="product" class="form-control" placeholder="Product">
                            </div>
                            <div class="col-md-6">
                                <label for="opening">Opening</label>
                                <input type="number" name="opening" class="form-control" placeholder="Opening Stock">
                            </div>
                        </div>
                        <hr>
                        <div class="container">
                            <label for="remarks">Remarks</label>
                            <textarea name="remarks" class="form-control" placeholder="Write down your remarks..."></textarea>
                        </div>
                        <br>
                        <hr>
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