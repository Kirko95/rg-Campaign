@extends('layouts.app.team')

@section('content')
<div class="pageheader pd-t-25 pd-b-35">
    <div class="d-flex justify-content-between">
        <div class="clearfix">
            <div class="pd-t-5 pd-b-5">
                <h1 class="pd-0 mg-0 tx-20 tx-dark">Welcome, {{ Auth()->user()->fullname }}</h1>
            </div>
            <div class="breadcrumb pd-0 mg-0">
                <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
                <a class="breadcrumb-item" href="">Dashboard</a>
                <span class="breadcrumb-item active">Active Campaign</span>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-4">
        <div class="card mg-b-30">
            <div class="card-body">
                <div class="float-right">
                    <span class="label label-success"></span>
                </div>
                <div class="media align-items-center">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <a href="" class="d-block text-primary text-big line-height-1"><i class="ti-arrow-up"></i></a>
                        <div class="tx-30 tx-bold my-2">{{ $team->campaign->id }}</div>
                        <a href="" class="d-block text-primary text-big line-height-1"><i class="ti-arrow-down"></i></a>
                    </div>
                    <div class="media-body ml-4">
                        <a href="" class="tx-20 tx-semibold">{{ $team->name }}</a>
                        <div class="my-2"><b>Company:</b> <br>{{ $team->campaign->company->fullname }}</div>
                        <div class="my-2"><b>Description:</b> <br> {{ $team->campaign->description }}</div>
                    </div>
                </div>
                <div class="container">
                    @if (is_null($timesheet))
                        <div class="float-right">
                            <form action="{{ route('clockin') }}" method="POST">
                                @csrf
                                <input type="hidden" name="type" value="clockin">
                                <input type="hidden" name="campaign" value="{{ $team->campaign->id }}">
                                <input type="hidden" name="time" value="{{ Carbon\Carbon::now('Africa/Nairobi') }}">
                                <button class="btn btn-sm btn-outline-warning tx-gray-500 small">
                                    <i data-feather="clock" class="wd-15 align-middle mr-1"></i>Clockin
                                </button>
                            </form>
                        </div>
                    @else
                        <div class="float-right">
                            <a href="{{ route('campaign.details', [$team->campaign->id]) }}" class="btn btn-sm btn-outline-primary tx-gray-500 small">
                                View
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
