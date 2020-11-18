<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
</head>
<body>
    <div class="ht-100v text-center">
        <div class="row pd-0 mg-0">
            <div class="col-lg-6 bg-gradient hidden-sm">
                <div class="ht-100v d-flex">
                    <div class="align-self-center">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" class="img-fluid" alt="">
                        <h3 class="tx-20 tx-semibold tx-gray-100 pd-t-50">JOIN OUR GREAT COMMUNITY</h3>
                        <p class="pd-y-15 pd-x-10 pd-md-x-100 tx-gray-200">Where we give transparency in all the processess involved.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 bg-light">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/feather/feather.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- App JS -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
