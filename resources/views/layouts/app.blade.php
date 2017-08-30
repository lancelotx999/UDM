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


    <!-- Styles-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    
    <!--link rel="stylesheet" href="{{ URL::asset('css/style.css')}}"-->

    <style>
        @import url("https://bootswatch.com/flatly/bootstrap.min.css");

        body {
          padding-top: 50px;
        }
        footer {
          padding-left: 15px;
          padding-right: 15px;
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
<script>
    $(document).ready(function() {
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
});
</script>
    <div class="navbar navbar-fixed-top navbar-default" role="navigation" >
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Urban Development Maps</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Maps</a></li>
                <li><a href="#about">Charts</a></li>
                
            </ul>
        </div>
        <!-- /.nav-collapse -->
    </div>
    <!-- /.container -->
</div>
<!-- /.navbar -->

<div class="container-fluid">
    <div class="row row-offcanvas row-offcanvas-left" >
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <div class="sidebar-nav">
                <ul class="nav">
                    <li><input type="checkbox" name="vehicle" value="Heatmaps"><span id="cb_span">Security</span></li>
                    <li><input type="checkbox" name="vehicle" value="Security"><span id="cb_span">Heatmaps</span></li>
                    <li><input type="checkbox" name="vehicle" value="Heatmaps"><span id="cb_span">People fucking</span></li>
                    <li><input type="checkbox" name="vehicle" value="Security"><span id="cb_span">People kissing</span></li>
                    <li><input type="checkbox" name="vehicle" value="Heatmaps"><span id="cb_span">cumstains</span></li>
                    <li><input type="checkbox" name="vehicle" value="Security"><span id="cb_span">dropped cash</span></li>
                    
                </ul>
            </div>
            <!--/.well -->
        </div>
        <!--/span-->

        <div class="col-xs-12 col-sm-9">
            <br>
            <div class="jumbotron">
                <a href="#" class="visible-xs" data-toggle="offcanvas"><i class="fa fa-lg fa-reorder"></i></a>
                <h1>Hello, world!</h1>
                <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-lg-4">
                    <h2>Heading</h2>
                    <p>Bootstrap is a front-end framework that uses CSS and JavaScript to facilitate responsive Web design. Bootply is a playground for Bootstrap that enables developers and designers to test, prototype and create mockups using Bootstrap
                        friendly HTML, CSS and Javascript.</p>
                    <p><a class="btn btn-default" href="#">View details »</a></p>
                </div>
                <!--/span-->
                <div class="col-6 col-sm-6 col-lg-4">
                    <h2>Heading</h2>
                    <p>Bootply is a playground for Bootstrap that enables developers and designers to test, prototype and create mockups using Bootstrap friendly HTML, CSS and Javascript. Bootstrap is a front-end framework that uses CSS and JavaScript to
                        facilitate responsive Web design. </p>
                    <p><a class="btn btn-default" href="#">View details »</a></p>
                </div>
                <!--/span-->

                
                <!--/span-->
            </div>
            <!--/row-->
        </div>
        <!--/span-->


    </div>
    <!--/row-->

    <hr>

    <footer>
        <p>©Swinburne University of Technology</p>
    </footer>

</div>
</body>
<!--/.container-->
</html>
