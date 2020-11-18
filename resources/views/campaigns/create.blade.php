@extends('layouts.dashboard')

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
            <div class="card-body d-flex justify-content-between card-header d-flex align-items-center pb-3">
                <div class="card-body pb-3 tx-gray-700">
                    <form action="{{ route('campaign.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">Campaign Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Campaign Name">
                            </div>
                            <div class="col-md-6">
                                <label for="name">Company Name</label>
                                <select class="form-control" name="company">
                                    <option selected disabled> Choose Client</option>
                                    @foreach ($clients as $item)
                                        <option value="{{ $item->id }}">{{ $item->fullname }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="start">Start Date</label>
                                <input type="text" name="start" class="form-control" placeholder="Choose date" id="start">
                            </div>
                            <div class="col-md-6">
                                <label for="end">End Date</label>
                                <input type="text" name="end" class="form-control" placeholder="Choose date" id="end">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" placeholder="Write the Campaign Description"></textarea>
                        </div>
                        <hr>
                        <div class="container">
                            <label for="team">Team</label>
                            <select name="team[]" class="form-control" multiple>
                                @foreach ($teams ?? '' as $data)
                                    <option value="{{ $data->id }}">{{ $data->fullname }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="container">
                            <h5>Inventory</h5>
                            <div class="float-right">
                                <button type="button" class="btn btn-outline-primary btn-add-inventory">Add Inventory</button>
                            </div>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="end">Product Name</label>
                                    <input type="text" name="product[]" class="form-control" placeholder="Product name" id="product">
                                </div>
                                <div class="col-md-4">
                                    <label for="end">Type</label>
                                    <select name="inventory_type[]" class="form-control" id="inventory_type">
                                        <option value="stock">Stock</option>
                                        <option value="merchandise">Merchandise</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="sku">SKU</label>
                                    <input type="text" name="sku[]" class="form-control" placeholder="SKU quantity" id="sku">
                                </div>
                            </div>
                            <br>
                            <div id="more-inventory"></div>
                        </div>
                        <hr>
                        <div class="container">
                            <button class="btn btn-outline-primary rounded-pill btn-block" type="submit">Create Campaign</button>
                        </div>
                    </form>
                 </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script>
    $(document).ready(function() {
        var i = 1;
        $('.btn-remove').click(function(e) {
            var button_id = $(this).attr('id');
            $('#newvent' + button_id + '').remove();
        });

        $('.btn-add-inventory').click(function(e) {
            e.preventDefault();
            i++
            $('#more-inventory').append(`
                <div class="newvent`+ i +`">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="end">Product Name</label>
                            <input type="text" name="product[]" class="form-control" placeholder="Product name" id="product">
                        </div>
                        <div class="col-md-4">
                            <label for="end">Type</label>
                            <select name="inventory_type[]" class="form-control" id="inventory_type">
                                <option value="stock">Stock</option>
                                <option value="merchandise">Merchandise</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="sku">SKU</label>
                            <input type="text" name="sku[]" class="form-control" placeholder="SKU quantity" id="sku">
                        </div>
                    </div>
                </div>
                <br>
            `);
            
        });
    });
</script>

@endsection