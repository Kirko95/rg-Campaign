@extends('layouts.app.reports')

@section('content')
<div class="conatiner">
    <div class="d-flex justify-content-between">
        <div class="clearfix">
            <div class="pd-t-5 pd-b-5">
                <h1 class="pd-0 mg-0 tx-20 tx-dark">{{ $campaign->name }}</h1>
            </div>
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
          </div>
          <div class="card-body pd-0 table-responsive">
            <table class="table table-hover mg-0">
                <thead class="tx-10 tx-uppercase bd-t">
                   <tr>
                      <th>#</th>
                      <th>Product</th>
                      <th>Request type</th>
                      <th>quantity</th>
                      <th>Date</th>
                   </tr>
                </thead>
                <tbody>
                    @foreach ($inventories ?? '' as $item)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="tx-semibold d-none d-xl-inline-block">{{ $item->id }}</span>
                                </div>
                            </td>
                            <td>
                                <p>
                                    <small>{{ $item->inventory->name }}</small> <br>
                                    <small>{{ $item->inventory->type }}</small> <br>
                                    <small>{{ $item->inventory->sku }}</small>
                                </p>
                            </td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
                            <td></td>
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
                <div>
                    <h6 class="card-header-title tx-13 mb-0">Time sheet</h6>
                </div>
                </div>
            </div>
            <div class="card-body pd-0 table-responsive">
                <table class="table table-hover mg-0">
                    <thead class="tx-10 tx-uppercase bd-t">
                       <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Date & Time</th>
                       </tr>
                    </thead>
                    <tbody>
                        @foreach ($timesheet ?? '' as $item)
                        <tr>
                            <td>
                                <small>{{ $item->user->fullname}}</small>
                            </td>
                            <td><small>{{ $item->user->email}}</small></td>
                            <td><small>{{ $item->user->phone}}</small></td>
                            <td>
                                <p><small>Date: {{ Carbon\Carbon::parse($item->time)->format('d/m/Y') }}</small> <br>
                                <small>{{ Carbon\Carbon::parse($item->time)->format('g:i A') }}</small></p>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-lg-8">
        <div class="card mg-b-30">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class="card-header-title tx-13 mb-0">Team</h6>
                </div>
            </div>
            <div class="card-body pd-0 table-responsive">
                <table class="table table-hover mg-0">
                    <thead class="tx-10 tx-uppercase bd-t">
                        <tr>
                        <th>#</th>
                        <th>Fullname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>From</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($team ?? '' as $item)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="tx-semibold d-none d-xl-inline-block">{{ $item->id }}</span>
                                    </div>
                                </td>
                                <td>{{ $item->user->fullname }}</td>
                                <td>{{ $item->user->email }}</td>
                                <td>{{ $item->user->phone }}</td>
                                <td>{{ $item->user->age }}</td>
                                <td>{{ $item->user->gender }}</td>
                                <td>{{ $item->user->town }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
     </div>
</div>
@endsection