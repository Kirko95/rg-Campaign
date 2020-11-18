@extends('layouts.app')

@section('content')
<div class="ht-100v d-flex align-items-center justify-content-center">
    <div class="">
        <h3 class="tx-dark mg-b-5 tx-left">Create New Account</h3>
        <p class="tx-gray-500 tx-15 mg-b-40">Welcome back! Please signin to continue.</p>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="d-flex justify-content-between mg-b-5">
                <label class="tx-gray-500 mg-b-0">Full Name</label>
                </div>
                <input type="text" name="fullname" class="form-control" placeholder="Full Name" value="{{ old('fullname') }}" autofocus>
                @error('fullname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group tx-left">
                <label class="tx-gray-500 mg-b-5">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="yourname@yourmail.com" value="{{ old('email') }}" autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <div class="d-flex justify-content-between mg-b-5">
                <label class="tx-gray-500 mg-b-0">Password</label>
                </div>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <div class="d-flex justify-content-between mg-b-5">
                <label class="tx-gray-500 mg-b-0">Confirm Password</label>
                </div>
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password"  autocomplete="new-password">
            </div>
            <button type="submit" class="btn btn-brand btn-block">Create Account</button>
            <div class="tx-13 mg-t-20 tx-center tx-gray-500">Already have an account? <a href="{{ route('login') }}" class="tx-semibold">Sign In</a></div>
        </form>
    </div>
</div>
@endsection
