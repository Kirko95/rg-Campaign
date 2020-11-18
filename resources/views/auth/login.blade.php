@extends('layouts.app')

@section('content')
<div class="ht-100v d-flex align-items-center justify-content-center">
    <div class="">
        <h3 class="tx-dark mg-b-5 tx-left">Sign In</h3>
        <p class="tx-gray-500 tx-15 mg-b-40">Welcome back! Please signin to continue.</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group tx-left">
                <label class="tx-gray-500 mg-b-5">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="email@domain.com" value="{{ old('email') }}" autocomplete="email" autofocus>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="form-group">
                <div class="d-flex justify-content-between mg-b-5">
                    <label class="tx-gray-500 mg-b-0">Password</label>
                {{-- <a href="{{ route('password.request') }}" class="tx-13 mg-b-0 tx-semibold">Forgot password?</a> --}}
                </div>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" autocomplete="current-password">
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <button type="submit" class="btn btn-brand btn-block">Sign In</button>
        </form>
        <div class="pd-y-20 tx-uppercase tx-gray-500">or</div>
        <div class="tx-13 mg-t-20 tx-center tx-gray-500">Don't have an account? <a href="{{ route('register') }}" class="tx-dark tx-semibold">Create an Account</a></div>
    </div>
</div>
@endsection
