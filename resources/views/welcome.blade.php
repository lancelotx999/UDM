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
            <h3><strong>Urban Development Maps</strong> focuses on visualizing urban big data to simplify raw data reading, thus helping urban development plannings and decision-makings.</h3>

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
                    <p>Missing markers, overlays and others are reminded through this.</p>
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


