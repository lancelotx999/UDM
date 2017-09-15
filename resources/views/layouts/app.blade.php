<!DOCTYPE html>
<html lang="en">
<head>
    <!--required meta-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Urban Development Maps</title>
    <!-- Fonts-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <script src="https://d3js.org/d3.v3.min.js"></script>
    <link href="{{asset('css/app.cs')}}" rel="stylesheet">
    <style>
        @import url("https://bootswatch.com/flatly/bootstrap.min.css");

        body {
          padding-top: 50px;
        }
        footer {
          padding-left: 15px;
          padding-right: 15px;
        }
        /* Make the chart container fill the page using CSS. */
        #chart {
            position: fixed;
            left: 0px;
            right: 0px;
            top: 0px;
            bottom: 0px;
        }

        #states {
  fill: #aaa;
}

#states .active {
  fill: orange;
}

#state-borders {
  fill: none;
  stroke: #fff;
  stroke-width: 1.5px;
  stroke-linejoin: round;
  stroke-linecap: round;
  pointer-events: none;
}

        /*
         * Off Canvas
         * --------------------------------------------------
         */
        @media screen and (max-width: 768px) {
          .row-offcanvas {
            position: relative;
            -webkit-transition: all 0.25s ease-out;
            -moz-transition: all 0.25s ease-out;
            transition: all 0.25s ease-out;
            background:#ecf0f1;
          }

        .row-offcanvas-left
        .sidebar-offcanvas {
            left: -40%;

          }

        .row-offcanvas-left.active {
            left: 40%;

          }

        .sidebar-offcanvas {
            position: absolute;
            top: 0;
            width: 40%;
            margin-left: 12px;

          }
        }

        #sidebar {
            padding:15px;
            margin-top:10px;
            background: linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4) ), url('https://mdbootstrap.com/img/Photos/Others/img (51).jpg');
          -webkit-background-size: cover;
          -moz-background-size:  cover;
          -o-background-size: cover;
          background-size: cover;
            background-color: #224562;
            width:240px;
            height: 800px;
            height:height;
            display: table;
        }
        #cb_span{color:white;}
    </style>


    
</head>




<body id="app-layout">
 @include('layouts.partials._header')

<div class="container-fluid">
    <div class="row row-offcanvas row-offcanvas-left" >
        @include('layouts/partials._overlay')
        

        <div class="col-xs-12 col-sm-9">
            
            <br>
            <ol class="breadcrumb">
                <li class="active">Ground Floor</li>
                <li><a href="#">Level 1</a></li>
                <li><a href="#">Level 2</a></li>
                <li><a href="#">Level 3</a></li>
            </ol>
            @yield('content')
            <!--/row-->
        </div>
        <!--/span-->


    </div>
    <!--/row-->

    @include('layouts/partials._footer')

</div>

  <script src="{{ asset('js/app.js') }}"></script>

</body>
<!--/.container-->
</html>
