<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author"  content=""/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Map CSS --> 
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/jquery-jvectormap-2.0.2.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
    <!-- Favicon -->	
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <script src="{{ asset('assets/plugins/chartist/chartist.js') }}"></script>
  </head>
  <body>
      <div class="page-container">
        <div class="container">
          @include('partials.header')
          <div class="page-inner">
              @yield('content')
          </div>
        </div>
      </div>

    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/plugins/feather/feather.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/typeahead/typeahead.js') }}"></script>
    <script src="{{ asset('assets/plugins/typeahead/typeahead-active.js') }}"></script>
    <script src="{{ asset('assets/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/highlight/highlight.min.js') }}"></script>
    <!-- Required Script -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/avesta.js') }}"></script>
    <script src="{{ asset('assets/js/avesta-customizer.js') }}"></script>
    <!-- Javascript -->
  </body>
</html>