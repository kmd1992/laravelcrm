<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/montserrat/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/tether/css/tether.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/jscrollpane/jquery.jscrollpane.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/common.min.css') }}">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/themes/primary.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/themes/sidebar-black.min.css') }}" class="ks-sidebar-dark-style">   
    <!-- END THEME STYLES -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/kosmo/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/weather/css/weather-icons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/c3js/c3.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/noty/noty.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/widgets/payment.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/widgets/panels.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/dashboard/tabbed-sidebar.min.css') }}">
</head>
<body class="ks-navbar-fixed ks-sidebar-default ks-sidebar-position-fixed ks-page-header-fixed ks-theme-primary ks-page-loading"> <!-- remove ks-page-header-fixed to unfix header -->

<!-- BEGIN HEADER -->
@include('partials.header_navbar')
<!-- END HEADER -->

<div class="ks-page-container ks-dashboard-tabbed-sidebar-fixed-tabs">
    
    <!-- BEGIN DEFAULT SIDEBAR -->
    @include('partials.left_navbar')
    <!-- END DEFAULT SIDEBAR -->


    <div class="ks-column ks-page">
        <div class="ks-page-header">
            @stack('content-header')
        </div>

        <div class="ks-page-content">
            @yield('content')           
        </div>
    </div>
</div>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('assets/libs/popper/popper.min.js')}}"></script>
<script src="{{ asset('assets/libs/responsejs/response.min.js')}}"></script>
<script src="{{ asset('assets/libs/loading-overlay/loadingoverlay.min.js')}}"></script>
<script src="{{ asset('assets/libs/tether/js/tether.min.js')}}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/libs/jscrollpane/jquery.jscrollpane.min.js')}}"></script>
<script src="{{ asset('assets/libs/jscrollpane/jquery.mousewheel.js')}}"></script>
<script src="{{ asset('assets/libs/flexibility/flexibility.js')}}"></script>
<script src="{{ asset('assets/libs/noty/noty.min.js')}}"></script>
<script src="{{ asset('assets/libs/velocity/velocity.min.js')}}"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{ asset('assets/scripts/common.min.js')}}"></script>
<!-- END THEME LAYOUT SCRIPTS -->

<script src="{{ asset('assets/libs/d3/d3.min.js')}}"></script>
<script src="{{ asset('assets/libs/c3js/c3.min.js')}}"></script>
<script src="{{ asset('assets/libs/noty/noty.min.js')}}"></script>
<script src="{{ asset('assets/libs/maplace/maplace.min.js')}}"></script>
<script src="https://maps.google.com/maps/api/js?libraries=geometry&amp;v=3.26&amp;key=AIzaSyBBjLDxcCjc4s9ngpR11uwBWXRhyp3KPYM"></script>
<script type="application/javascript">
(function ($) {
    $(document).ready(function () {
        c3.generate({
            bindto: '#ks-next-payout-chart',
            data: {
                columns: [
                    ['data1', 6, 5, 6, 5, 7, 8, 7]
                ],
                types: {
                    data1: 'area'
                },
                colors: {
                    data1: '#81c159'
                }
            },
            legend: {
                show: false
            },
            tooltip: {
                show: false
            },
            point: {
                show: false
            },
            axis: {
                x: {show:false},
                y: {show:false}
            }
        });

        c3.generate({
            bindto: '#ks-total-earning-chart',
            data: {
                columns: [
                    ['data1', 6, 5, 6, 5, 7, 8, 7]
                ],
                types: {
                    data1: 'area'
                },
                colors: {
                    data1: '#4e54a8'
                }
            },
            legend: {
                show: false
            },
            tooltip: {
                show: false
            },
            point: {
                show: false
            },
            axis: {
                x: {show:false},
                y: {show:false}
            }
        });

        c3.generate({
            bindto: '.ks-chart-orders-block',
            data: {
                columns: [
                    ['Revenue', 150, 200, 220, 280, 400, 160, 260, 400, 300, 400, 500, 420, 500, 300, 200, 100, 400, 600, 300, 360, 600],
                    ['Profit', 350, 300,  200, 140, 200, 30, 200, 100, 400, 600, 300, 200, 100, 50, 200, 600, 300, 500, 30, 200, 320]
                ],
                colors: {
                    'Revenue': '#f88528',
                    'Profit': '#81c159'
                }
            },
            point: {
                r: 5
            },
            grid: {
                y: {
                    show: true
                }
            }
        });

        setTimeout(function () {
            new Noty({
                text: '<strong>Welcome to Kosmo Admin Template</strong>! <br> You successfully read this important alert message.',
                type   : 'information',
                theme  : 'mint',
                layout : 'topRight',
                timeout: 3000
            }).show();
        }, 1500);

        var maplace = new Maplace({
            map_div: '#ks-payment-widget-table-and-map-map',
            controls_on_map: false
        });
        maplace.Load();
    });
})(jQuery);
</script>

<div class="ks-mobile-overlay"></div>

<!-- BEGIN SETTINGS BLOCK -->
<div class="ks-settings-slide-block">
    <a class="ks-settings-slide-control">
        <span class="ks-icon la la-cog"></span>
    </a>

    <div class="ks-header">
        <span class="ks-text">Layout Options</span>
        <a class="ks-settings-slide-close-control">
            <span class="ks-icon la la-close"></span>
        </a>
    </div>

    <div class="ks-themes-list">
        <a href="index-2.html" class="ks-theme ks-primary ks-active"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-primary-dark/index.html" class="ks-theme ks-dark-primary"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-info/index.html" class="ks-theme ks-info"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-pink/index.html" class="ks-theme ks-blink-pink-san-marino"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-bermuda-gray/index.html" class="ks-theme ks-bermuda-gray-malachite"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-royal-blue/index.html" class="ks-theme ks-royal-blue-orchid"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-ebony-clay/index.html" class="ks-theme ks-ebony-clay-cerise-red"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-international-klein-blue/index.html" class="ks-theme ks-international-klein-blue-dixie"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-jungle-green/index.html" class="ks-theme ks-jungle-green-chambray"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-voodoo/index.html" class="ks-theme ks-voodoo-medium-purple"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-cornflower-blue/index.html" class="ks-theme ks-cornflower-blue-ecstasy"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-purple/index.html" class="ks-theme ks-purple-mandy"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-oslo-gray/index.html" class="ks-theme ks-oslo-gray-royal-blue"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-astronaut-blue/index.html" class="ks-theme ks-astronaut-blue-persian-green"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-old-brick/index.html" class="ks-theme ks-old-brick"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-white/index.html" class="ks-theme ks-white"></a>
    </div>

    <ul class="ks-settings-list">
        <li>
            <span class="ks-text">Collapsed Sidebar</span>
            <label class="ks-checkbox-slider ks-on-off ks-primary ks-sidebar-checkbox-toggle">
                <input type="checkbox" value="1">
                <span class="ks-indicator"></span>
                <span class="ks-on">On</span>
                <span class="ks-off">Off</span>
            </label>
        </li>
        <li>
            <span class="ks-text">Fixed page header</span>
            <label class="ks-checkbox-slider ks-on-off ks-primary ks-page-header-checkbox-toggle">
                <input type="checkbox" value="0" checked>
                <span class="ks-indicator"></span>
                <span class="ks-on">On</span>
                <span class="ks-off">Off</span>
            </label>
        </li>
        <li>
            <span class="ks-text">Dark/Light Sidebar</span>
            <label class="ks-checkbox-slider ks-on-off ks-primary ks-sidebar-style-checkbox-toggle">
                <input type="checkbox" value="0" checked>
                <span class="ks-indicator"></span>
                <span class="ks-on">On</span>
                <span class="ks-off">Off</span>
            </label>
        </li>
        <li>
            <span class="ks-text">White/Gray Content Background</span>
            <label class="ks-checkbox-slider ks-on-off ks-primary ks-content-bg-checkbox-toggle">
                <input type="checkbox" value="0" checked>
                <span class="ks-indicator"></span>
                <span class="ks-on">On</span>
                <span class="ks-off">Off</span>
            </label>
        </li>
    </ul>
</div>
<!-- END SETTINGS BLOCK -->
</body>
</html>
