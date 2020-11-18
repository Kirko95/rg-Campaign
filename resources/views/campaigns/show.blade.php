@extends('layouts.dashboard')

@section('content')
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
<div class="col">
    <div class="row">
        <div class="col-sm-4">
            <div class="card mg-b-30">
               <div class="card-body">
                  <div class="media d-inline-flex">
                     <div>
                        <span class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Growth</span>					  
                        <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">$<span class="counter">2,450</span></h2>
                     </div>
                  </div>
                  <div class="clearfix"> 
                     <span class="float-left tx-11 tx-gray-500">Achievement</span> 
                     <span class="float-right">
                     <i class="ion-android-arrow-up mr-1 tx-success"></i><span class="tx-dark">92</span><span class="small mg-b-0">/100</span>
                     </span>
                  </div>
                  <div class="progress ht-3">
                     <div class="progress-bar bg-primary wd-90p" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="card mg-b-30">
               <div class="card-body">
                  <div class="media d-inline-flex">
                     <div>
                        <span class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Project</span>					  
                        <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark"><span class="counter">2,320</span> </h2>
                     </div>
                  </div>
                  <div class="clearfix"> 
                     <span class="float-left tx-11 tx-gray-500">Achievement</span> 
                     <span class="float-right">
                     <i class="ion-android-arrow-up mr-1 tx-success"></i><span class="tx-dark">95</span><span class="small mg-b-0">/100</span>
                     </span>
                  </div>
                  <div class="progress ht-3">
                     <div class="progress-bar bg-warning wd-95p" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="card mg-b-30">
               <div class="card-body">
                  <div class="media d-inline-flex">
                     <div>
                        <span class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-2">Income</span>					  
                        <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">$<span class="counter">9,750</span> </h2>
                     </div>
                  </div>
                  <div class="clearfix"> 
                     <span class="float-left tx-11 tx-gray-500">Achievement</span> 
                     <span class="float-right">
                     <i class="ion-android-arrow-down mr-1 tx-danger"></i><span class="tx-dark">81</span><span class="small mg-b-0">/100</span>
                     </span>
                  </div>
                  <div class="progress ht-3">
                     <div class="progress-bar bg-danger wd-80p" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix mg-x-15-force">
    <div class="col">
        <div class="card mg-b-30">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h6 class="tx-16 tx-semibold mg-b-0">{{ $campaign->name }}</h6>
            </div>
            <div class="card-body">
                <h6 class="my-3">Stock</h6>
                <div class="row mb-2">
                    <div class="col-md-3 tx-gray-500 tx-semibold">Tshirt:</div>
                    <div class="col-md-9">200 as of 31st Aug 2020</div>
                </div>
                <h6 class="my-3">Merchandise</h6>
                <div class="row mb-2">
                    <div class="col-md-3 tx-gray-500 tx-semibold">Caps:</div>
                    <div class="col-md-9">160 as of 31st Aug 2020</div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-3 tx-gray-500 tx-semibold">Power Bank:</div>
                    <div class="col-md-9">300 as of 31st Aug 2020</div>
                </div>
            </div>
            <div class="card-footer text-center p-0">
                <div class="row no-gutters row-bordered row-border-light">
                    <a href="" class="d-flex col flex-column  py-3">
                        <div class="font-weight-bold">24</div>
                        <div class="text-muted small">posts</div>
                    </a>
                    <a href="" class="d-flex col flex-column  py-3 bd-l bd-r">
                        <div class="font-weight-bold">51</div>
                        <div class="text-muted small">videos</div>
                    </a>
                    <a href="" class="d-flex col flex-column  py-3">
                        <div class="font-weight-bold">215</div>
                        <div class="text-muted small">photos</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card mg-b-30">
            <div class="card-header with-elements d-flex justify-content-between">
                <span class="tx-16 tx-semibold">Team <small class="tx-gray-500">(591)</small></span>
            </div>
            <div class="card-body">
                <ul class="list-unstyled media-list">
                    @foreach ($campaign->users ?? '' as $data)
                        <li class="media align-items-center mg-b-15">
                            <a href="">
                                <div class="avatar avatar-offline"><span class="avatar-initial rounded-circle bg-primary">{{ $data['fullname'][0] }}</span><i></i></div>
                            </a>
                            <div class="media-body pd-l-15 lh-2">
                                <p class="tx-medium mg-b-2"><a href="">{{ $data['fullname'] }}</a></p>
                                <p class="tx-gray-500 mg-b-2 small"><a href="">{{ $data['phone'] }}</a></p>
                                <p class="tx-gray-500 mg-b-2 small"><a href="">{{ $data['email'] }}</a></p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection