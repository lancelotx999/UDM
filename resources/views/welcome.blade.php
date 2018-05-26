@extends('layouts.app')

@section('content')

<div class="row">

    <div class="panel-one">
        <div class="jumbotron text-center">
            <h1>Urban Development Maps</h1><br />
            <p class="text-uppercase">Urban big data visualized</p><br />
            <a href="https://github.com/lancelotx999/UDM" target="_blank">
                GitHub Project
            </a>
        </div>
    </div>

    <div class="panel-two">
        <div class="container">
            <h3><strong>Urban Development Maps</strong> focuses on visualizing urban big data to simplify raw data reading, thus helping urban development plannings as well as decision-makings for society.</h3>

            <br />

            <h3 class="text-uppercase">Success stories</h3>
            <h4>See how others who have used our map achieved success in their lives.</h4>

            <br />

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="/images/student.jpg">
                        <div class="carousel-caption">
                            <h3>Brooklyn Student</h3>
                            <p>Finding the nearest college was difficult at first, but UDM saved me!</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="/images/fireman.jpg">
                        <div class="carousel-caption">
                            <h3>Brooklyn Fireman</h3>
                            <p>Knowing the newer fire hydrants easily saved time and lives.</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="/images/police.jpg">
                        <div class="carousel-caption">
                            <h3>Brooklyn Policeman</h3>
                            <p>UDM always remembers where all precints are at. Bless this app!</p>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <br />

            <h3 class="text-uppercase">Feautures</h3>

            <hr />

            <div class="row">
                <div class="col-xs-6 col-sm-6">
                    <img src="/images/map.png">
                </div>
                <div class="col-xs-6 col-sm-6 button-style">
                    <h4><strong>The Map</strong></h4>
                    <p>Contains plentiful of simplified urban data as overlays and markers.</p>
                    <a href="/map">Click to go</a>
                </div>
            </div>

            <hr />

            <div class="row">
                <div class="col-xs-6 col-sm-6">
                    <img src="/images/chart.png">
                </div>
                <div class="col-xs-6 col-sm-6 button-style">
                    <h4><strong>Statistical Charts</strong></h4>
                    <p>List of different charts covering overall statistics of the city.</p>
                    <a href="/chart">Click to go</a>
                </div>
            </div>

            <hr />

            <div class="row">
                <div class="col-xs-6 col-sm-6">
                    <img src="/images/editor.png">
                </div>
                <div class="col-xs-6 col-sm-6 button-style">
                    <h4><strong>Adding Future Notes</strong></h4>
                    <p><em>Admin feature</em></p>
                    <p>Missing markers, overlays and others? This is where you can mark them for us.</p>
                    <a href="/editor">Click to go</a>
                </div>
            </div>

            <hr />

            <div class="row">
                <div class="col-xs-6 col-sm-6">
                    <img src="/images/upload.png">
                </div>
                <div class="col-xs-6 col-sm-6 button-style">
                    <h4><strong>Handling CSV via Uploads</strong></h4>
                    <p><em>Admin feature</em></p>
                    <p>Automated process of trimming and uploading raw data into the server.</p>
                    <a href="/upload">Click to go</a>
                </div>
            </div>

            <br /><br />

        </div>
    </div>

</div>

@include('layouts.partials._footer')

@endsection


