@extends('layouts.dashboard')

@section('content')
<div id="main-wrapper">
    <!--================================-->
    <!-- Breadcrumb Start -->
    <!--================================-->
    <div class="pageheader pd-t-25 pd-b-15">
        <div class="d-flex justify-content-between">
            <div class="clearfix">
                <div class="pd-t-5 pd-b-5">
                    <h1 class="pd-0 mg-0 tx-20 tx-dark">Contacts</h1>
                </div>
                <div class="breadcrumb pd-0 mg-0">
                    <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
                    <a class="breadcrumb-item" href="">Pages</a>
                    <span class="breadcrumb-item active">Contacts</span>
                </div>
            </div>
        </div>
        <div class="clearfix">
            <div class="container">
                <div class="float-right">
                    <a href="#addContactModal" data-toggle="modal" class="btn btn-primary"><span data-feather="plus-square" class="wd-16 mr-2"></span> Add contact</a>
                </div>
            </div>
        </div>
    </div>
    <!--/ Breadcrumb End -->
    <!--================================-->
    <!-- Contacts Start -->
    <!--================================-->
    <div class="d-flex flex-wrap justify-content-between mg-b-30">
        <input type="text" class="form-control mg-t-20" placeholder="Search..." style="max-width: 200px;">
        </div>
        <div class="row contacts-col-view">
            @foreach ($users as $data)
                <div class="col-md-6 col-xl-4">
                    <div class="card mg-b-30">
                        <div class="card-body tx-center">
                            <div class="btn-group ft-right">
                                <div class="dropdown">
                                    <a href="" class="" data-toggle="dropdown"><i class="ti-more"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i>Rename</a>
                                        <a href="" class="dropdown-item"><i data-feather="trash" class="wd-16 mr-2"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-content">
                                <img src="#" class="rounded-circle wd-100" alt="">
                                <div class="mg-t-20">
                                    <h5 class="tx-16 mb-1"><a href="">{{ $data->fullname }}</a></h5>
                                    <div class="tx-gray-500 small mb-2">{{ $data->email }}</div>
                                    <div class="tx-gray-500 small mb-2">From: {{ $data->town }}</div>
                                    <div class="tx-center">
                                        <span class="">{{ $data->gender}}</span> |
                                        <span class="">{{ $data->age}} years</span>
                                    </div>
                                    <div class="tx-12 tx-gray-500">
                                        ID: {{ $data->passport }} <br>
                                        Phone: {{ $data->phone}}
                                    </div>
                                </div>
                                <div class="float-left">
                                    <p> {{ $data->role[0]->role }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!--/ Contacts  End-->
    <!--Modal Start-->
    <div class="modal fade effect-scale" id="addContactModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                    <h6 class="mg-b-10">Personal Information</h6>
                    <div class="d-sm-flex">
                        <div class="flex-fill">
                            <form action="{{ route('team.create') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="fullname">Fullname</label>
                                        <input type="text" name="fullname" placeholder="fullname" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" placeholder="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="passport">National ID</label>
                                        <input type="text" name="passport" placeholder="National Id" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" placeholder="Phone Number" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" name="gender">
                                            <option selected disabled>Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="age">Age</label>
                                        <input type="number" name="age" placeholder="Enter Age" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="location">Location</label>
                                        <input type="text" name="location" placeholder="Location" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="profile">Profile</label>
                                        <input type="file" name="profile" placeholder="Profile" class="form-control" required>
                                    </div>
                                </div>
                                <br>
                                <div class="container">
                                    <div class="">
                                        <label for="supervisor">Assign Role</label>
                                        <select class="form-control" name="role">
                                            <option selected disabled>Assign User Role</option>
                                            <option value="client">Client</option>
                                            <option value="supervisor">Supervisor</option>
                                            <option value="team">Team</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary mg-b-5 mg-sm-b-0">Save Changes</button>
                                </div>
                            </form>
                        </div>
                        <!-- col -->
                    </div>
                </div>
            </div>
            <!-- modal-content -->
        </div>
    </div>
    <!--/ Modal End-->
</div>
@endsection