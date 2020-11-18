@extends('layouts.dashboard')

@section('content')
<div class="pageheader pd-t-25 pd-b-35">
    <div class="d-flex justify-content-between">
        <div class="clearfix">
            <div class="pd-t-5 pd-b-5">
                <h1 class="pd-0 mg-0 tx-20 tx-dark">Campaign Name</h1>
            </div>
            <div class="breadcrumb pd-0 mg-0">
                <a class="breadcrumb-item" href="/"><i class="icon ion-ios-home-outline"></i> Home</a>
                <a class="breadcrumb-item" href="">Dashboard</a>
                <span class="breadcrumb-item active">Sales Monitoring</span>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <!--================================-->
    <!-- Heard Card Start -->	
    <!--================================-->
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card mg-b-30">
            <div class="card-body">
                <h5 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Today BA's</h5>
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">45</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card mg-b-30">
            <div class="card-body">
                <h5 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Merchandise</h5>
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">100 / 173</h2>
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
                <h5 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Stock Management</h5>
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-rubik tx-dark tx-normal">400 / 600</h2>
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
                            <p class="tx-13 tx-gray-500 mb-0">Profit Share between customers</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="wd-50p ht-100" id="salesDonut1"></div>
                            <div>
                                <div class="d-flex align-items-center">
                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-primary mr-2"></div>
                                    <div class="tx-gray-500">37% Sport Tickets</div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-warning mr-2"></div>
                                    <div class="tx-gray-500">47% Business Events</div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-success mr-2"></div>
                                    <div class="tx-gray-500">19% Others</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mg-b-30">
                    <div class="card-body">
                        <div class="pd-b-20">
                            <h3 class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-0">Revenue Change</h3>
                            <p class="tx-13 tx-gray-500 mb-0">Revenue change breakdown by cities</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="wd-50p ht-100" id="salesDonut2"></div>
                            <div>
                                <div class="d-flex align-items-center">
                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-primary mr-2"></div>
                                    <div class="tx-gray-500">+10% New York</div>
                                </div>
                                <div class="d-flex align-items-center">
                                        <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-warning mr-2"></div>
                                        <div class="tx-gray-500">-7% London</div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="wd-12 ht-12 bd bd-3 rounded-circle bd-success mr-2"></div>
                                    <div class="tx-gray-500">+20% California</div>
                                </div>
                            </div>
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
                <h6 class="tx-13 mb-0">Campaign Route</h6>
                <div class="card-header-btn">
                    <div class="dropdown">
                        <a href="" class="" data-toggle="dropdown"><i class="ti-more"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="" class="dropdown-item"><i data-feather="info" class="wd-16 mr-2"></i>View Details</a>
                            <a href="" class="dropdown-item"><i data-feather="share" class="wd-16 mr-2"></i>Share</a>
                            <a href="" class="dropdown-item"><i data-feather="download" class="wd-16 mr-2"></i>Download</a>
                            <a href="" class="dropdown-item"><i data-feather="copy" class="wd-16 mr-2"></i>Copy to</a>
                            <a href="" class="dropdown-item"><i data-feather="folder" class="wd-16 mr-2"></i>Move to</a>
                            <a href="" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i>Rename</a>
                            <a href="" class="dropdown-item"><i data-feather="trash" class="wd-16 mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body pd-y-20">
                <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-center mg-b-15">
                        <div class="media-body pd-l-15 lh-2">
                            <p class="tx-medium mg-b-2"><a href="">Archie Cantones</a></p>
                            <span class="tx-12 tx-gray-500">Joined: 01 Mar, 2019</span>
                        </div>
                    </li>
                    <li class="d-flex align-items-center mg-b-15">
                        <div class="media-body pd-l-15 lh-2">
                            <p class="tx-medium mg-b-2"><a href="">Holmes Cherryman</a></p>
                            <span class="tx-12 tx-gray-500">Joined: 06 Mar, 2019</span>
                        </div>
                    </li>
                    <li class="d-flex align-items-center mg-b-15">
                        <div class="media-body pd-l-15 lh-2">
                            <p class="tx-medium mg-b-2"><a href="">Malanie Hanvey</a></p>
                            <span class="tx-12 tx-gray-500">Joined: 11 Mar, 2019</span>
                        </div>
                    </li>
                    <li class="d-flex align-items-center mg-b-15">
                        <div class="media-body pd-l-15 lh-2">
                            <p class="tx-medium mg-b-2"><a href="">Kenneth Hune</a></p>
                            <span class="tx-12 tx-gray-500">Joined: 12 Mar, 2019</span>
                        </div>
                    </li>
                    <li class="d-flex align-items-center mg-b-15">
                        <div class="media-body pd-l-15 lh-2">
                            <p class="tx-medium mg-b-2"><a href="">Kenneth Hune</a></p>
                            <span class="tx-12 tx-gray-500">Joined: 12 Mar, 2019</span>
                        </div>
                    </li>
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
                <div class="card-header-btn">
                    <div class="dropdown">
                        <a href="" class="" data-toggle="dropdown"><i class="ti-more"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="" class="dropdown-item"><i data-feather="info" class="wd-16 mr-2"></i>View Details</a>
                            <a href="" class="dropdown-item"><i data-feather="share" class="wd-16 mr-2"></i>Share</a>
                            <a href="" class="dropdown-item"><i data-feather="download" class="wd-16 mr-2"></i>Download</a>
                            <a href="" class="dropdown-item"><i data-feather="copy" class="wd-16 mr-2"></i>Copy to</a>
                            <a href="" class="dropdown-item"><i data-feather="folder" class="wd-16 mr-2"></i>Move to</a>
                            <a href="" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i>Rename</a>
                            <a href="" class="dropdown-item"><i data-feather="trash" class="wd-16 mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body pd-0 pd-y-15">
                <ul class="list-group list-group-flush tx-13">
                    <li class="list-group-item d-flex pd-y-9 pd-sm-x-20">
                        <div class="pd-sm-l-10">
                            <p class="mg-b-0">Ezekiel O'gondo</p>
                            <span class="tx-12 mg-b-0 tx-gray-500">Transaction ID: #857423</span>
                        </div>
                        <div class="mg-l-auto text-right">
                            <p class="mg-b-0 tx-rubik">$4,550<small class="tx-8">.50</small></p>
                            <span class="tx-success tx-12">Completed</span>
                        </div>
                    </li>
                    <li class="list-group-item d-flex pd-y-9 pd-sm-x-20">
                        <div class="pd-sm-l-10">
                            <p class="mg-b-0">Lorem Ipsum is simply</p>
                            <span class="tx-12 mg-b-0 tx-gray-500">Transaction ID: #452356</span>
                        </div>
                        <div class="mg-l-auto text-right">
                            <p class="mg-b-0 tx-rubik">$2,645<small class="tx-8">.40</small></p>
                            <span class="tx-warning tx-12">Pending</span>
                        </div>
                    </li>
                    <li class="list-group-item d-flex pd-y-9 pd-sm-x-20">
                        <div class="pd-sm-l-10">
                            <p class="mg-b-0">Lorem Ipsum is simply</p>
                            <span class="tx-12 mg-b-0 tx-gray-500">Lunch Break</span>
                        </div>
                        <div class="mg-l-auto text-right">
                            <p class="mg-b-0 tx-rubik">$3,248<small class="tx-8">.80</small></p>
                            <span class="tx-success tx-12">Completed</span>
                        </div>
                    </li>
                    <li class="list-group-item d-flex pd-y-9 pd-sm-x-20">
                        <div class="pd-sm-l-10">
                            <p class="mg-b-0">Lorem Ipsum is simply</p>
                            <span class="tx-12 mg-b-0 tx-gray-500">Transaction ID: #452356</span>
                        </div>
                        <div class="mg-l-auto text-right">
                            <p class="mg-b-0 tx-rubik">$1,243<small class="tx-8">.60</small></p>
                            <p class="mg-b-0 tx-12 tx-warning">Pending</p>
                        </div>
                    </li>
                    <li class="list-group-item d-flex pd-y-9 pd-sm-x-20">
                        <div class="pd-sm-l-10">
                            <p class="mg-b-0">Lorem Ipsum is simply</p>
                            <span class="tx-12 mg-b-0 tx-gray-500">Transaction ID: #452356</span>
                        </div>
                        <div class="mg-l-auto text-right">
                            <p class="mg-b-0 tx-rubik">$1,243<small class="tx-8">.60</small></p>
                            <p class="mg-b-0 tx-12 tx-warning">Pending</p>
                        </div>
                    </li>
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
                <div class="card-header-btn">
                    <div class="dropdown">
                        <a href="" class="" data-toggle="dropdown"><i class="ti-more"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="" class="dropdown-item"><i data-feather="info" class="wd-16 mr-2"></i>View Details</a>
                            <a href="" class="dropdown-item"><i data-feather="share" class="wd-16 mr-2"></i>Share</a>
                            <a href="" class="dropdown-item"><i data-feather="download" class="wd-16 mr-2"></i>Download</a>
                            <a href="" class="dropdown-item"><i data-feather="copy" class="wd-16 mr-2"></i>Copy to</a>
                            <a href="" class="dropdown-item"><i data-feather="folder" class="wd-16 mr-2"></i>Move to</a>
                            <a href="" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i>Rename</a>
                            <a href="" class="dropdown-item"><i data-feather="trash" class="wd-16 mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
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
