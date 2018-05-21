<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Urban Development Maps</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/leaflet/leaflet.css') }}" rel="stylesheet">
        <link href="{{ asset('css/leaflet-draw/leaflet.draw.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}">
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
        <script src="{{ asset('js/prunecluster/PruneCluster.js') }}"></script>
        <script src="{{ asset('js/leaflet-draw/leaflet.draw.js') }}"></script>

    </head>

    <body id="app-layout" onload="uncheck()">

        @include('layouts.partials._header')

        <div class="container-fluid wrapper">
            <div class="row" >
                <div class="col-xs-12 col-sm-12">
                        
                @yield('content')
                    
                </div>
            </div>
        </div>
        
        <a class="beta-notice" href="https://github.com/lancelotx999/UDM">
            A beta project of Urban Development Maps. Swinburne University of Technology. UDM &copy; 2017-2018
        </a>

        <script type="text/javascript">

            //uncheck all boxes on Mozilla browser refresh
            function uncheck() { $(':checkbox:checked').prop('checked',false); }

        </script>
        
    </body>
    
</html>
