@extends('layouts.app.client')

@section('content')

<div class="pageheader pd-t-25 pd-b-35">
    <div class="d-flex justify-content-between">
        <div class="clearfix">
            <div class="pd-t-5 pd-b-5">
                <h1 class="pd-0 mg-0 tx-20 tx-dark">{{ $campaign->name }}</h1>
            </div>
            <div class="breadcrumb pd-0 mg-0">
                <a class="breadcrumb-item" href="#"><i class="icon ion-ios-home-outline"></i> Home</a>
                <a class="breadcrumb-item" href="">Dashboard</a>
                <span class="breadcrumb-item active">Details</span>
            </div>
        </div>
        {{-- <div class="container">
            <form action="{{ route('report', [$campaign->id]) }}" method="GET">
                @csrf
                <button class="float-right btn btn-outline-primary">Generate Report</button>
            </form>
        </div> --}}
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card mg-b-30">
            <div class="card-body">
                <h5 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Total Ba's</h5>
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">{{ $teams }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card mg-b-30">
            <div class="card-body">
                <h5 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Merchandise - Stock</h5>
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">{{ $merchandise }} / {{ $stock }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card mg-b-30">
            <div class="card-body">
                <h5 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Sales</h5>
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">400 / 600</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card mg-b-30">
            <div class="card-body">
                <h5 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Products</h5>
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">{{ $products }}</h2>
                </div>
            </div>
        </div>
    </div>
    <!--/ Heard Card End -->
</div>
<div class="row clearfix">
    <!--================================-->
    <!-- Annual Report and Bar Chart Start -->
    <!--================================-->
    <div class="col-xl-12">
        <div class="row">
            <div class="col-md-6">
                <div class="card mg-b-30">
                    <div class="card-body">
                        <div class="pd-b-20">
                            <h3 class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-0">Checkin</h3>
                            <p class="tx-13 tx-gray-500 mb-0">BA's Timeline</p>
                        </div>
                        <div class="d-flex align-items-center">
                            @include('charts.timechart')
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mg-b-30">
                    <div class="card-body">
                        <div class="pd-b-20">
                            <h3 class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-0">Inventory</h3>
                            <p class="tx-13 tx-gray-500 mb-0">Sales vs Merchandise</p>
                        </div>
                        <div class="d-flex align-items-center">
                            @include('charts.stockchart')
                            
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
    <!--/ Annual Report and Bar Chart End -->
</div>
<div class="row">
    <!--================================-->
    <!-- New Customers Start -->
    <!--================================-->
    <div class="col-lg-6 col-xl-4">
        <div class="card mg-b-30">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h6 class="tx-13 mb-0">Campaign Engagement</h6>
            </div>
            <div class="card-body pd-y-20">
                <ul class="list-group list-group-flush tx-13">
                    @foreach ($engagement as $item)
                        <li class="list-group-item d-flex pd-y-9 pd-sm-x-20">
                            <div class="pd-sm-l-10">
                                <p class="mg-b-0">{{ $item->type }}</p>
                                <span class="tx-12 mg-b-0 tx-gray-500">Quantity: {{ $item->quantity }}</span>
                            </div>
                            <div class="mg-l-auto text-right">
                                <p class="mg-b-0 tx-rubik">{{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</p>
                                <p class="mg-b-0 tx-rubik">{{ Carbon\Carbon::parse($item->created_at)->format('g:i A') }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!--/ New Customers End -->
    <!--================================-->
    <!-- Transaction History Start -->
    <!--================================-->
    <div class="col-lg-6 col-xl-4">
        <div class="card mg-b-30">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h6 class="tx-13 mb-0">BA's Logger</h6>
            </div>
            <div class="card-body pd-0 pd-y-15">
                <ul class="list-group list-group-flush tx-13">
                    @foreach ($team_logger as $item)
                        <li class="list-group-item d-flex pd-y-9 pd-sm-x-20">
                            <div class="pd-sm-l-10">
                                <p class="mg-b-0">{{ $item->user->fullname }}</p>
                                <span class="tx-12 mg-b-0 tx-gray-500">ID: {{ $item->id }}</span>
                            </div>
                            <div class="mg-l-auto text-right">
                                <p class="mg-b-0 tx-rubik">{{ Carbon\Carbon::parse($item->time)->calendar() }}</p>
                                <span class="tx-success tx-12">{{ $item->type }}</span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!--/ Transaction History End -->
    <!--================================-->
    <!-- Customer Satisfaction Start -->
    <!--================================-->
    <div class="col-xl-4">
        <div class="card mg-b-30">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h6 class="tx-13 mb-0">Customer Satisfaction</h6>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-baseline">
                    <h1 class="mg-b-0 mg-r-5">9.5<span class="tx-10 tx-success">(<i class="ti-arrow-up tx-8 tx-success tx-8 mr-1"></i>8.60%)</span></h1>
                    <div class="tx-16">
                        <i class="fa fa-star tx-warning"></i>
                        <i class="fa fa-star tx-warning"></i>
                        <i class="fa fa-star tx-warning"></i>
                        <i class="fa fa-star tx-warning"></i>
                        <i class="fa fa-star-half-empty tx-warning"></i>
                    </div>
                </div>
                <div class="card-progressbar">
                    <label class="tx-10 tx-uppercase tx-gray-500 mg-b-0">Score</label>
                    <div class="progress" style="height: 3px">
                        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <label class="tx-10 tx-uppercase tx-gray-500 mg-b-0">85%<i class="ti-arrow-up tx-8 tx-success tx-8 ml-1"></i></label>
                </div>
                <div class="list-group list-group-flush m-t-10 tx-13">
                    <div class="list-group-item pd-0 pd-y-10 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-primary mr-2"></div>
                            <span class="tx-semibold">Excellent</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="mg-r-5">3,345</div>
                            <div class="tx-10 tx-gray-500">(<i class="ti-arrow-up tx-8 tx-success tx-8 mr-1"></i>4.7%)</div>
                        </div>
                    </div>
                    <div class="list-group-item pd-0 pd-y-10 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-danger mr-2"></div>
                            <span class="tx-semibold">Very Good</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="mg-r-5">2,854</div>
                            <div class="tx-10 tx-gray-500">(<i class="ti-arrow-down tx-8 tx-danger tx-8 mr-1"></i>5.8%)</div>
                        </div>
                    </div>
                    <div class="list-group-item pd-0 pd-y-10 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-warning mr-2"></div>
                            <span class="tx-semibold">Good</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="mg-r-5">2,145</div>
                            <div class="tx-10 tx-gray-500">(<i class="ti-arrow-up tx-8 tx-success tx-8 mr-1"></i>2.8%)</div>
                        </div>
                    </div>
                    <div class="list-group-item pd-0 pd-y-10 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-info mr-2"></div>
                            <span class="tx-semibold">Fair</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="mg-r-5">1,574</div>
                            <div class="tx-10 tx-gray-500">(<i class="ti-arrow-down tx-8 tx-danger tx-8 mr-1"></i>3.7%)</div>
                        </div>
                    </div>
                    <div class="list-group-item pd-0 pd-y-10 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-success mr-2"></div>
                            <span class="tx-semibold">Poor</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="mg-r-5">1,540</div>
                            <div class="tx-10 tx-gray-500">(<i class="ti-arrow-up tx-8 tx-success tx-8 mr-1"></i>5.5%)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Customer Satisfaction End -->
</div>
@endsection
