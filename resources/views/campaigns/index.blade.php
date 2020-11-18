@extends('layouts.dashboard')

@section('content')
<div id="main-wrapper">
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
      <div class="clearfix">
         <div class="container">
            <div class="float-right">
               <a href="{{ route('campaign.create') }}" class="btn btn-primary"><i data-feather="plus-square" class="wd-16 mr-2"></i> Create Campaign</a>
            </div>
         </div>
      </div>
   </div>
   <!--/ Breadcrumb End -->
   <!--================================-->
   <!-- Projects Start -->
   <!--================================-->
   <div class="row clearfix">
      @foreach ($campaigns ?? '' as $data)
         <div class="col-sm-6 col-xl-4">
            <div class="card mg-b-30">
               <div class="card-body d-flex justify-content-between card-header d-flex align-items-center pb-3">
                  <div>
                     <a href="" class="text-body tx-20 tx-semibold">{{ $data->name }}</a>
                  </div>
                  <div class="btn-group project-actions">
                     <a class="dropdown" data-toggle="dropdown">
                        <i class="ti-more"></i>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right">
                        <a href="/" class="dropdown-item"><i data-feather="info" class="wd-16 mr-2"></i>View Details</a>
                        <a href="" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i>Edit</a>
                        <a href="" class="dropdown-item"><i data-feather="trash" class="wd-16 mr-2"></i>Delete</a>
                     </div>
                  </div>
               </div>
               <div class="card-body pb-3 tx-gray-700">
                  <b>Company:</b> <br>
                  {{ $data->company->fullname }}
               </div>
               <div class="card-body pt-0">
                  <div class="row">
                     <div class="col">
                        <div class="tx-gray-500 small">Start</div>
                        <div class="font-weight-bold">{{ $data->start }}</div>
                     </div>
                     <div class="col">
                        <div class="tx-gray-500 small">End</div>
                        <div class="font-weight-bold">{{ $data->end }}</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      @endforeach
   </div>
   <!--/ Projects End -->
</div>
<!--/ Main Wrapper End -->
@endsection