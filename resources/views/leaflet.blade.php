@extends('layouts.app')

@section('content')

<!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css"> -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- <script src="https://d3js.org/d3.v4.min.js"></script> -->
<script src="https://d3js.org/d3.v3.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

<style type="text/css">

    /* #main-content {
        width: 85%;
    } */

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

    svg {
      position: relative;
    }

    /* path {
      fill: #000;
      fill-opacity: .2;
      stroke: #fff;
      stroke-width: 1.5px;
    }

    path:hover {
      fill: brown;
      fill-opacity: .7;
    } */


</style>
<div id="popup"></div>
<div id="map"></div>

<img src="{{URL::asset('images/swinlogo.png')}}" alt="profile Pic" height="200" width="200">
<script>

    var map = L.map('map')
        // .setView([0, 0], 0)
        .setView(new L.LatLng(40, -74), 10) //NYC Location
        .addLayer(new L.TileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"));

    map.options.minZoom = 2;

    var southWest = new L.LatLng(-90, 180);
    var northEast = new L.LatLng(90, -180);

    map.setMaxBounds(new L.LatLngBounds(southWest, northEast));

    map.fitBounds(new L.LatLngBounds(southWest, northEast), {reset: true});

    map.setView(new L.LatLng(40.7, -73.8), 10) //NYC Location

    var svg = d3.select(map.getPanes().overlayPane).append("svg")
        g = svg.append("g").attr("class", "leaflet-zoom-hide");

    // Define the div for the tooltip
	var popup = d3.select("#popup").append("div")
	    .attr("class", "tooltip")
	    .style("opacity", 0);

    //Major Overlays
    // boroughOverlay();
    // districtOverlay();
    //
    // // Minor Overlays
    // policePrecintOverlay();
    // fireBattalionOverlay();
    schoolDistrictOverlay();

    function boroughOverlay(){
        d3.json("data/NYC-Overlays/boroughs.geojson", function(error, collection) {
            if (error) throw error;

            console.log("---------- collection ----------");
            console.log(collection);
            console.log("---------- collection ----------");

            var transform = d3.geo.transform({point: projectPoint}),
                path = d3.geo.path().projection(transform);

            var feature = g.selectAll("path")
                .attr("class", "boroughOverlay")
                .data(collection.features)
                .enter()
                .append("path")
                .style("fill", "#000")
                .style("fill-opacity", .2)
                .style("stroke", "#fff")
                .style("stroke-width", 1.5 +"px")
                .on("mouseover", function(d){
                    console.log("---------- d ----------");
                    console.log(d);
                    console.log("---------- d ----------");
                    console.log("---------- this ----------");
                    console.log(this);
                    console.log("---------- this ----------");

                    d3.select(this)
                        .style("fill", "grey")
                        .style("fill-opacity", .7);

                    popup.transition()
     				   .duration(200)
     				   .style("opacity", .9);

                   popup.html("this is the text for popup <b>HTML TAGS WORK HERE</b>")
               		.attr("style", "top: "+ ((d3.event.y)) + "px; left: "+ ((d3.event.x)) + "px; position: absolute;");
   					// .attr("style", "top: 58%; left: 0px; position: absolute;");
                })
                .on("mouseout", function(d) {

                    d3.select(this)
                        .style("fill", "#000")
                        .style("fill-opacity", .2);

                    popup.transition()
     				   .duration(500)
     				   .style("opacity", 0);
     		   	});

            // console.log("---------- feature ----------");
            // console.log(feature);
            // console.log("---------- feature ----------");
            // console.log("---------- transform ----------");
            // console.log(transform);
            // console.log("---------- transform ----------");
            // console.log("---------- path ----------");
            // console.log(path);
            // console.log("---------- path ----------");
            // console.log("---------- collection ----------");
            // console.log(collection);
            // console.log("---------- collection ----------");
            // console.log("---------- collection.features ----------");
            // console.log(collection.features);
            // console.log("---------- collection.features ----------");

            map.on("moveend", reset);
            reset();

            // Reposition the SVG to cover the features.
            function reset() {
                var bounds = path.bounds(collection),
                    topLeft = bounds[0],
                    bottomRight = bounds[1];

                svg.attr("width", bottomRight[0] - topLeft[0])
                    .attr("height", bottomRight[1] - topLeft[1])
                    .style("left", topLeft[0] + "px")
                    .style("top", topLeft[1] + "px");

                g.attr("transform", "translate(" + -topLeft[0] + "," + -topLeft[1] + ")");

                feature.attr("d", path);
            }

            // Use Leaflet to implement a D3 geometric transformation.
            function projectPoint(x, y) {
                var point = map.latLngToLayerPoint(new L.LatLng(y, x));
                this.stream.point(point.x, point.y);
            }
        });
    }

    function districtOverlay(){
        d3.json("data/NYC-Overlays/community_districts.geojson", function(error, collection) {
            if (error) throw error;

            console.log("---------- collection ----------");
            console.log(collection);
            console.log("---------- collection ----------");

            var transform = d3.geo.transform({point: projectPoint}),
                path = d3.geo.path().projection(transform);

            var feature = g.selectAll("path")
                .attr("class", "districtOverlay")
                .data(collection.features)
                .enter()
                .append("path")
                .style("fill", "#000")
                .style("fill-opacity", .2)
                .style("stroke", "#fff")
                .style("stroke-width", 1.5 +"px")
                .on("mouseover", function(d){
                    console.log("---------- d ----------");
                    console.log(d);
                    console.log("---------- d ----------");
                    console.log("---------- this ----------");
                    console.log(this);
                    console.log("---------- this ----------");

                    d3.select(this)
                        .style("fill", "brown")
                        .style("fill-opacity", .7);

                    // this.style("fill", "brown")
                    //     .style("fill-opacity", .7);

                    popup.transition()
     				   .duration(200)
     				   .style("opacity", .9);

                   popup.html("District")
               		.attr("style", "top: "+ ((d3.event.y)) + "px; left: "+ ((d3.event.x)) + "px; position: absolute;");
   					// .attr("style", "top: 58%; left: 0px; position: absolute;");
                })
                .on("mouseout", function(d) {

                    d3.select(this)
                        .style("fill", "#000")
                        .style("fill-opacity", .2);

                    // this.style("fill", "#000")
                    //     .style("fill-opacity", .2);

                    popup.transition()
     				   .duration(500)
     				   .style("opacity", 0);
     		   	});

            // console.log("---------- feature ----------");
            // console.log(feature);
            // console.log("---------- feature ----------");
            // console.log("---------- transform ----------");
            // console.log(transform);
            // console.log("---------- transform ----------");
            // console.log("---------- path ----------");
            // console.log(path);
            // console.log("---------- path ----------");
            // console.log("---------- collection ----------");
            // console.log(collection);
            // console.log("---------- collection ----------");
            // console.log("---------- collection.features ----------");
            // console.log(collection.features);
            // console.log("---------- collection.features ----------");

            map.on("moveend", reset);
            reset();

            // Reposition the SVG to cover the features.
            function reset() {
                var bounds = path.bounds(collection),
                    topLeft = bounds[0],
                    bottomRight = bounds[1];

                svg.attr("width", bottomRight[0] - topLeft[0])
                    .attr("height", bottomRight[1] - topLeft[1])
                    .style("left", topLeft[0] + "px")
                    .style("top", topLeft[1] + "px");

                g.attr("transform", "translate(" + -topLeft[0] + "," + -topLeft[1] + ")");

                feature.attr("d", path);
            }

            // Use Leaflet to implement a D3 geometric transformation.
            function projectPoint(x, y) {
                var point = map.latLngToLayerPoint(new L.LatLng(y, x));
                this.stream.point(point.x, point.y);
            }
        });
    }

    function policePrecintOverlay(){
        d3.json("data/NYC-Overlays/police_precincts.geojson", function(error, collection) {
            if (error) throw error;

            console.log("---------- collection ----------");
            console.log(collection);
            console.log("---------- collection ----------");

            var transform = d3.geo.transform({point: projectPoint}),
                path = d3.geo.path().projection(transform);

            var feature = g.selectAll("path")
                .attr("class", "policePrecintOverlay")
                .data(collection.features)
                .enter()
                .append("path")
                .style("fill", "#000")
                .style("fill-opacity", .2)
                .style("stroke", "#fff")
                .style("stroke-width", 1.5 +"px")
                .on("mouseover", function(d){
                    console.log("---------- d ----------");
                    console.log(d);
                    console.log("---------- d ----------");
                    console.log("---------- this ----------");
                    console.log(this);
                    console.log("---------- this ----------");

                    d3.select(this)
                        .style("fill", "blue")
                        .style("fill-opacity", .7);

                    // this.style("fill", "brown")
                    //     .style("fill-opacity", .7);

                    popup.transition()
                       .duration(200)
                       .style("opacity", .9);

                   popup.html("District")
                    .attr("style", "top: "+ ((d3.event.y)) + "px; left: "+ ((d3.event.x)) + "px; position: absolute;");
                    // .attr("style", "top: 58%; left: 0px; position: absolute;");
                })
                .on("mouseout", function(d) {

                    d3.select(this)
                        .style("fill", "#000")
                        .style("fill-opacity", .2);

                    // this.style("fill", "#000")
                    //     .style("fill-opacity", .2);

                    popup.transition()
                       .duration(500)
                       .style("opacity", 0);
                });

            // console.log("---------- feature ----------");
            // console.log(feature);
            // console.log("---------- feature ----------");
            // console.log("---------- transform ----------");
            // console.log(transform);
            // console.log("---------- transform ----------");
            // console.log("---------- path ----------");
            // console.log(path);
            // console.log("---------- path ----------");
            // console.log("---------- collection ----------");
            // console.log(collection);
            // console.log("---------- collection ----------");
            // console.log("---------- collection.features ----------");
            // console.log(collection.features);
            // console.log("---------- collection.features ----------");

            map.on("moveend", reset);
            reset();

            // Reposition the SVG to cover the features.
            function reset() {
                var bounds = path.bounds(collection),
                    topLeft = bounds[0],
                    bottomRight = bounds[1];

                svg.attr("width", bottomRight[0] - topLeft[0])
                    .attr("height", bottomRight[1] - topLeft[1])
                    .style("left", topLeft[0] + "px")
                    .style("top", topLeft[1] + "px");

                g.attr("transform", "translate(" + -topLeft[0] + "," + -topLeft[1] + ")");

                feature.attr("d", path);
            }

            // Use Leaflet to implement a D3 geometric transformation.
            function projectPoint(x, y) {
                var point = map.latLngToLayerPoint(new L.LatLng(y, x));
                this.stream.point(point.x, point.y);
            }
        });
    }

    function fireBattalionOverlay(){
        d3.json("data/NYC-Overlays/fire_battalions.geojson", function(error, collection) {
            if (error) throw error;

            console.log("---------- collection ----------");
            console.log(collection);
            console.log("---------- collection ----------");

            var transform = d3.geo.transform({point: projectPoint}),
                path = d3.geo.path().projection(transform);

            var feature = g.selectAll("path")
                .attr("class", "fireBattalionOverlay")
                .data(collection.features)
                .enter()
                .append("path")
                .style("fill", "#000")
                .style("fill-opacity", .2)
                .style("stroke", "#fff")
                .style("stroke-width", 1.5 +"px")
                .on("mouseover", function(d){
                    console.log("---------- d ----------");
                    console.log(d);
                    console.log("---------- d ----------");
                    console.log("---------- this ----------");
                    console.log(this);
                    console.log("---------- this ----------");

                    d3.select(this)
                        .style("fill", "red")
                        .style("fill-opacity", .7);

                    // this.style("fill", "brown")
                    //     .style("fill-opacity", .7);

                    popup.transition()
                       .duration(200)
                       .style("opacity", .9);

                   popup.html("District")
                    .attr("style", "top: "+ ((d3.event.y)) + "px; left: "+ ((d3.event.x)) + "px; position: absolute;");
                    // .attr("style", "top: 58%; left: 0px; position: absolute;");
                })
                .on("mouseout", function(d) {

                    d3.select(this)
                        .style("fill", "#000")
                        .style("fill-opacity", .2);

                    // this.style("fill", "#000")
                    //     .style("fill-opacity", .2);

                    popup.transition()
                       .duration(500)
                       .style("opacity", 0);
                });

            // console.log("---------- feature ----------");
            // console.log(feature);
            // console.log("---------- feature ----------");
            // console.log("---------- transform ----------");
            // console.log(transform);
            // console.log("---------- transform ----------");
            // console.log("---------- path ----------");
            // console.log(path);
            // console.log("---------- path ----------");
            // console.log("---------- collection ----------");
            // console.log(collection);
            // console.log("---------- collection ----------");
            // console.log("---------- collection.features ----------");
            // console.log(collection.features);
            // console.log("---------- collection.features ----------");

            map.on("moveend", reset);
            reset();

            // Reposition the SVG to cover the features.
            function reset() {
                var bounds = path.bounds(collection),
                    topLeft = bounds[0],
                    bottomRight = bounds[1];

                svg.attr("width", bottomRight[0] - topLeft[0])
                    .attr("height", bottomRight[1] - topLeft[1])
                    .style("left", topLeft[0] + "px")
                    .style("top", topLeft[1] + "px");

                g.attr("transform", "translate(" + -topLeft[0] + "," + -topLeft[1] + ")");

                feature.attr("d", path);
            }

            // Use Leaflet to implement a D3 geometric transformation.
            function projectPoint(x, y) {
                var point = map.latLngToLayerPoint(new L.LatLng(y, x));
                this.stream.point(point.x, point.y);
            }
        });
    }

    function schoolDistrictOverlay(){
        d3.json("data/NYC-Overlays/fire_battalions.geojson", function(error, collection) {
            if (error) throw error;

            console.log("---------- collection ----------");
            console.log(collection);
            console.log("---------- collection ----------");

            var transform = d3.geo.transform({point: projectPoint}),
                path = d3.geo.path().projection(transform);

            var feature = g.selectAll("path")
                .attr("class", "schoolDistrictOverlay")
                .data(collection.features)
                .enter()
                .append("path")
                .style("fill", "#000")
                .style("fill-opacity", .2)
                .style("stroke", "#fff")
                .style("stroke-width", 1.5 +"px")
                .on("mouseover", function(d){
                    console.log("---------- d ----------");
                    console.log(d);
                    console.log("---------- d ----------");
                    console.log("---------- this ----------");
                    console.log(this);
                    console.log("---------- this ----------");

                    d3.select(this)
                        .style("fill", "yellow")
                        .style("fill-opacity", .7);

                    // this.style("fill", "brown")
                    //     .style("fill-opacity", .7);

                    popup.transition()
                       .duration(200)
                       .style("opacity", .9);

                   popup.html("District")
                    .attr("style", "top: "+ ((d3.event.y)) + "px; left: "+ ((d3.event.x)) + "px; position: absolute;");
                    // .attr("style", "top: 58%; left: 0px; position: absolute;");
                })
                .on("mouseout", function(d) {

                    d3.select(this)
                        .style("fill", "#000")
                        .style("fill-opacity", .2);

                    // this.style("fill", "#000")
                    //     .style("fill-opacity", .2);

                    popup.transition()
                       .duration(500)
                       .style("opacity", 0);
                });

            // console.log("---------- feature ----------");
            // console.log(feature);
            // console.log("---------- feature ----------");
            // console.log("---------- transform ----------");
            // console.log(transform);
            // console.log("---------- transform ----------");
            // console.log("---------- path ----------");
            // console.log(path);
            // console.log("---------- path ----------");
            // console.log("---------- collection ----------");
            // console.log(collection);
            // console.log("---------- collection ----------");
            // console.log("---------- collection.features ----------");
            // console.log(collection.features);
            // console.log("---------- collection.features ----------");

            map.on("moveend", reset);
            reset();

            // Reposition the SVG to cover the features.
            function reset() {
                var bounds = path.bounds(collection),
                    topLeft = bounds[0],
                    bottomRight = bounds[1];

                svg.attr("width", bottomRight[0] - topLeft[0])
                    .attr("height", bottomRight[1] - topLeft[1])
                    .style("left", topLeft[0] + "px")
                    .style("top", topLeft[1] + "px");

                g.attr("transform", "translate(" + -topLeft[0] + "," + -topLeft[1] + ")");

                feature.attr("d", path);
            }

            // Use Leaflet to implement a D3 geometric transformation.
            function projectPoint(x, y) {
                var point = map.latLngToLayerPoint(new L.LatLng(y, x));
                this.stream.point(point.x, point.y);
            }
        });
    }






</script>

@endsection
