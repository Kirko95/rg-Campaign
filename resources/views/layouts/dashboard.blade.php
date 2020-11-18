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
    <!-- Datepicket CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}"/>
    <!-- Chart CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/chartist/chartist.css') }}">
    <!-- Map CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/jquery-jvectormap-2.0.2.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <div class="page-container">
        @if (Auth()->user()->role == 'client')
          <div class="page-content">
            @include('partials.header')
            <div class="page-inner">
                @yield('content')
            </div>
          </div>
        @else
          @include('partials.side')
          <div class="page-content">
            @include('partials.header')
            <div class="page-inner">
                @yield('content')
            </div>
          </div>
        @endif
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
    <!-- Dashboard Script -->
    <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/jqvmap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jqvmap/gdp-data.js') }}"></script>
    <script src="{{ asset('assets/plugins/jqvmap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/plugins/chartist/chartist.js') }}"></script>
    <script src="{{ asset('assets/plugins/apex-chart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/apex-chart/irregular-data-series.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.j') }}s"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/sampledata.js') }}"></script>
    <!-- Required Script -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/avesta.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/sales-dashboard-init.js') }}"></script>
    <script src="{{ asset('assets/js/avesta-customizer.js') }}"></script>
    <!-- Javascript -->
    <script>
      "use strict";
      // Dashboard DateTimePicker
      $(function() {
        var isRtl = $('body').attr('dir') === 'rtl' || $('html').attr('dir') === 'rtl';

        // Button
        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
          $('#dashboardDate').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        $('#dashboardDate').daterangepicker({
          startDate: start,
          endDate: end,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: (isRtl ? 'left' : 'right')
        }, cb);
        cb(start, end);

        // Replace icons
        $('#dashboardDate').each(function() {
          var obj = $(this).data('daterangepicker');
          var _updateCalendars = obj.updateCalendars;
          obj.updateCalendars = function() {
            // Call original function
            _updateCalendars.call(obj)
            // Replace icons
            obj.container.find('.prev > i').each(function() { this.className = 'ion ion-ios-arrow-back' });
            obj.container.find('.next > i').each(function() { this.className = 'ion ion-ios-arrow-forward' });
            obj.container.find('.daterangepicker_input > i').each(function() { this.className = 'ion ion-md-calendar' });
            obj.container.find('.calendar-time > i').each(function() { this.className = 'ion ion-md-time' });
          };
        });
      });
      $(function(){
        'use strict'

        $('#start').datepicker();

        $('#end').datepicker();

        var dateFormat = 'mm/dd/yy',
        from = $('#dateFrom')
        .datepicker({
          defaultDate: '+1w',
          numberOfMonths: 2
        })

        .on('change', function() {
          to.datepicker('option','minDate', getDate( this ) );
        }),
        to = $('#dateTo').datepicker({
          defaultDate: '+1w',
          numberOfMonths: 2
        })
        .on('change', function() {
          from.datepicker('option','maxDate', getDate( this ) );
        });

        function getDate( element ) {
          var date;
          try {
            date = $.datepicker.parseDate( dateFormat, element.value );
          } catch( error ) {
            date = null;
          }

          return date;
        }
      });
    </script>
  </body>
</html>
