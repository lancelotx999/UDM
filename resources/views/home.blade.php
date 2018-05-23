@extends('layouts.app')

@section('content')

<div class="row bottom-space">
    <div class="col-md-8 col-md-offset-2">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if (Auth::check() and Auth::user()->hasRole('admin'))
        <h1>Welcome back Admin {{ explode(' ', trim(Auth::user()->name))[0] }}!</h1>

        <hr />

        <div class="row">
            <div class="col-md-12 col-xs-12">
                <p>As one of the administrator of the system, you have now gained access to the following features:</p>
                <ul class="list-group">
                    <a href="/map" class="list-group-item">
                        <i class="fa fa-globe fa-fw" aria-hidden="true"></i>
                        &nbsp;Map
                    </a>
                    <a href="/chart" class="list-group-item">
                        <i class="fa fa-area-chart fa-fw" aria-hidden="true"></i>
                        &nbsp;Chart
                    </a>
                    <a href="/editor" class="list-group-item">
                        <i class="fa fa-map-marker fa-fw" aria-hidden="true"></i>
                        &nbsp;Notes
                    </a>
                    <a href="/upload" class="list-group-item">
                        <i class="fa fa-upload fa-fw" aria-hidden="true"></i>
                        &nbsp;Upload
                    </a>
                </ul>

                <hr />

            </div>
        </div>
        @else
        <h1>Welcome back User {{ explode(' ', trim(Auth::user()->name))[0] }}!</h1>

        <hr />

        <div class="row">
            <div class="col-md-12 col-xs-12">
                <p>As one the user of the system, you have now gained access to the following features:</p>
                <ul class="list-group">
                    <a href="/map" class="list-group-item">
                        <i class="fa fa-globe fa-fw" aria-hidden="true"></i>
                        &nbsp;Maps
                    </a>
                    <a href="/chart" class="list-group-item">
                        <i class="fa fa-area-chart fa-fw" aria-hidden="true"></i>
                        &nbsp;Charts
                    </a>
                    <a href="/editor" class="list-group-item">
                        <i class="fa fa-map-marker fa-fw" aria-hidden="true"></i>
                        &nbsp;Notes
                    </a>
                </ul>

                <hr />

            </div>
        </div>
        @endif

        <h3>You'll be redirected back to the map page in <span class="count" id="5"></span> seconds, or click any links to go now!</h3>
            
    </div>
</div>

<script type="text/javascript">

function count() {
    var number = $('.count').attr('id');
    var count = number;
    $('.count').text(count);
    setInterval(function(){
        count--;
        if(count > 0){
            $('.count').text(count);
        }
        if(count == 0){
            $('.count').text(0);
        }
    },1000);
}

// Start
count();

// Loop
setInterval(function() {
    count();
},5000);

</script>

@php

header("refresh:5; url='/map'");

@endphp

@endsection
