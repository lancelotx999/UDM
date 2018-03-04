@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://d3js.org/d3.v4.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

    <style type="text/css">

    #main-content {
        width: 85%;
    }

    div.tooltip {
        position: absolute;
        padding: 2px;
        font: 12px sans-serif;
        background: lightsteelblue;
        border: 1px;
        border-radius: 8px;
        pointer-events: none;
    }

    #map {
        width: 960px;
        height: 500px;
    }

    </style>
    <div id="map"></div>

    <script>
        initializeMap();

        function initializeMap()
        {
            var map = L.map('map')
                .setView([0, 0], 0)
                .addLayer(new L.TileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"));

            map.options.minZoom = 2;

            var southWest = new L.LatLng(-90, 180);
            var northEast = new L.LatLng(90, -180);

            map.setMaxBounds(new L.LatLngBounds(southWest, northEast));

            map.fitBounds(new L.LatLngBounds(southWest, northEast), {reset: true});
        }

    </script>

@endsection
