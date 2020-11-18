@extends('layouts.app.team')

@section('content')
<div class="pageheader pd-t-25 pd-b-35">
    <div class="d-flex justify-content-between">
        <div class="clearfix">
            <div class="pd-t-5 pd-b-5">
                <h1 class="pd-0 mg-0 tx-20 tx-dark">Campaign Details</h1>
            </div>
            <div class="breadcrumb pd-0 mg-0">
                <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
                <span class="breadcrumb-item active">Campaign</span>
                <span class="breadcrumb-item active">Details</span>
            </div>
        </div>
        <div class="float-right">
            <form action="{{ route('clockin') }}" method="POST">
                @csrf
                <input type="hidden" name="type" value="clockout">
                <input type="hidden" name="campaign" value="{{ $inventories[0]->campaign->id }}">
                <input type="hidden" name="time" value="{{ Carbon\Carbon::now() }}">
                <button class="btn btn-sm btn-outline-danger tx-gray-500 small">
                    <i data-feather="clock" class="wd-15 align-middle mr-1"></i>Clock Out
                </button>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-6 col-lg-8">
        <div class="card mg-b-30">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class="card-header-title tx-13 mb-0">Inventory</h6>
                </div>
                <div class="float-right btn-group project-actions">
                    <a class="dropdown" data-toggle="dropdown">
                    <i class="ti-more"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#refil" data-toggle="modal" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i>Request</a>
                        <a href="#" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i>Updates</a>
                    </div>
                </div>
            </div>
            <div class="card-body pd-0 table-responsive">
                <table class="table table-hover mg-0">
                    <thead class="tx-10 tx-uppercase bd-t">
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Type</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($inventories as $item)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="tx-semibold d-none d-xl-inline-block">{{ $item->id }}</span>
                                    </div>
                                </td>
                                <td>
                                    {{ $item->name }}
                                </td>
                                <td>
                                    {{ $item->type }}
                                </td>
                                <td>
                                    {{ $item->sku }}
                                </td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#stock-record-{{ $item->id }}" class="btn btn-outline-primary">Record</a>
                                    <div class="modal fade effect-scale" id="stock-record-{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                    <h6 class="mg-b-10">Updating - {{ $item->name }}</h6>
                                                    <div class="d-sm-flex">
                                                        <div class="flex-fill">
                                                            <form action="{{ route('stock.refil') }}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div>
                                                                    <input type="text" name="product" value="{{ $item->id }}" hidden>
                                                                </div>
                                                                <label for="quantity">Quantity</label>
                                                                <input type="number" name="quantity" placeholder="quantity" class="form-control" required>
                                                                <label for="remarks">Remarks</label>
                                                                <textarea name="remarks" class="form-control" placeholder="Remarks..."></textarea>
                                                                <label for="type">Request Type</label>
                                                                <select name="type" class="form-control">
                                                                    <option selected disabled>Select Type</option>
                                                                    <option value="opening">Opening Stock</option>
                                                                    <option value="sales">Sales</option>
                                                                    <option value="giveaway">Give Aways</option>
                                                                    <option value="closing">Closing Stock</option>
                                                                    <option value="refil">Refil</option>
                                                                </select>
                                                                <div class="row">
                                                                    <label for="images"> Images</label>
                                                                    <input type="file" name="images[]" class="form-control" placeholder="Images">
                                                                </div>
                                                                <hr>
                                                                <div class="float-right">
                                                                    <button type="submit" class="btn btn-lg btn-outline-primary">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="card mg-b-30">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class="card-header-title tx-13 mb-0">Action</h6>
                    <div class="float-right">
                        @if (Carbon\Carbon::parse($timesheet[0]->time)->format('d-m-Y') == Carbon\Carbon::today()->format('d-m-Y'))
                            @if ($timesheet[0]->type == 'clockin')
                                <form action="{{ route('clockin') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="type" value="lunch">
                                    <input type="hidden" name="campaign" value="{{ $item->campaign_id }}">
                                    <input type="hidden" name="time" value="{{ Carbon\Carbon::now() }}">
                                    <button class="btn btn-sm btn-outline-primary tx-gray-500 small">
                                        <i data-feather="clock" class="wd-15 align-middle mr-1"></i>Lunch Break
                                    </button>
                                </form>
                            @elseif($timesheet[1]->type == 'lunch')
                                <form action="{{ route('clockin') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="type" value="clockout">
                                    <input type="hidden" name="campaign" value="{{ $item->campaign_id }}">
                                    <input type="hidden" name="time" value="{{ Carbon\Carbon::now() }}">
                                    <button class="btn btn-sm btn-outline-primary tx-gray-500 small">
                                        <i data-feather="clock" class="wd-15 align-middle mr-1"></i>Lunch Break
                                    </button>
                                </form>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-body pd-0 table-responsive">
                <table class="table table-hover mg-0">
                    <thead class="tx-10 tx-uppercase bd-t">
                       <tr>
                          <th>#</th>
                          <th>Time</th>
                          <th>Type</th>
                       </tr>
                    </thead>
                    <tbody>
                        @foreach ($timesheet as $item)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="tx-semibold d-none d-xl-inline-block">{{ $item->id }}</span>
                                    </div>
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($item->time)->format('g:i A') }}
                                </td>
                                <td>
                                    {{ $item->type }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
