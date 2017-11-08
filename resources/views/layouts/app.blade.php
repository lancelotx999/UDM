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

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}">
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

    </head>

    <body id="app-layout">

        @include('layouts.partials._header')

        <div class="container-fluid" >
            <div class="row is-flex row-offcanvas row-offcanvas-left" >

                @include('layouts/partials._overlay')
                
                <div class="col-xs-12 col-sm-9" id="main-content"  >
                        
                    @yield('content')
                    
                </div>
            </div>
            
            @include('layouts/partials._footer')
            
        </div>
    </body>
</html>
