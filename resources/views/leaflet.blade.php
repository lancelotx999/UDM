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
<!-- <script src="PruneCluster/dist/PruneCluster.js"></script> -->
<script src="{{URL::asset('js/PruneCluster.js')}}"></script>
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
        width: 100%;
        height: 100vh;
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

<!-- <img src="{{URL::asset('images/swinlogo.png')}}" alt="profile Pic" height="200" width="200"> -->
<script>

    var map = L.map('map')
        // .setView([0, 0], 0)
        .setView(new L.LatLng(40, -74), 10) //NYC Location
        .addLayer(new L.TileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"));

    map.options.minZoom = 2;

    var southWest = new L.LatLng(-90, 180);
    var northEast = new L.LatLng(90, -180);

    var colors = ['#ff4b00', '#bac900', '#EC1813', '#55BCBE', '#D2204C', '#FF0000', '#ada59a', '#3e647e'],
        pi2 = Math.PI * 2;

    map.setMaxBounds(new L.LatLngBounds(southWest, northEast));

    map.fitBounds(new L.LatLngBounds(southWest, northEast), {reset: true});

    map.setView(new L.LatLng(40.7, -73.8), 10) //NYC Location

    var pruneCluster = new PruneClusterForLeaflet();

    PruneCluster.Cluster.ENABLE_MARKERS_LIST = true;
    pruneCluster.Cluster.Size = 2;
    

    //overrides for pruneCluster
    pruneCluster.spiderfier.onAdd = function(map){
        this._map = map;
        this._map.on('overlappingmarkers', this.Spiderfy, this);
        // this._map.on('click', this.Unspiderfy, this);
        // this._map.on('zoomend', this.Unspiderfy, this);
    }

    pruneCluster.spiderfier.Spiderfy = function (data) {
        var _this = this;
        if (data.cluster !== this._cluster) {
            return;
        }
        // this.Unspiderfy();
        var markers = data.markers.filter(function (marker) {
            return !marker.filtered;
        });
        this._currentCenter = data.center;
        var centerPoint = this._map.latLngToLayerPoint(data.center);
        var points;
        if (markers.length >= this._spiralCountTrigger) {
            points = this._generatePointsSpiral(markers.length, centerPoint);
        }
        else {
            if (this._multiLines) {
                centerPoint.y += 10;
            }
            points = this._generatePointsCircle(markers.length, centerPoint);
        }
        var polylines = [];
        var leafletMarkers = [];
        var projectedPoints = [];
        for (var i = 0, l = points.length; i < l; ++i) {
            var pos = this._map.layerPointToLatLng(points[i]);
            var m = this._cluster.BuildLeafletMarker(markers[i], data.center);
            m.setZIndexOffset(5000);
            m.setOpacity(0);
            this._currentMarkers.push(m);
            this._map.addLayer(m);
            leafletMarkers.push(m);
            projectedPoints.push(pos);
        }
        window.setTimeout(function () {
            for (i = 0, l = points.length; i < l; ++i) {
                leafletMarkers[i].setLatLng(projectedPoints[i])
                    .setOpacity(1);
            }
            var startTime = +new Date();
            var interval = 42, duration = 290;
            var anim = window.setInterval(function () {
                polylines = [];
                var now = +new Date();
                var d = now - startTime;
                if (d >= duration) {
                    window.clearInterval(anim);
                    stepRatio = 1.0;
                }
                else {
                    var stepRatio = d / duration;
                }
                var center = data.center;
                for (i = 0, l = points.length; i < l; ++i) {
                    var p = projectedPoints[i], diffLat = p.lat - center.lat, diffLng = p.lng - center.lng;
                    polylines.push([center, new L.LatLng(center.lat + diffLat * stepRatio, center.lng + diffLng * stepRatio)]);
                }
                _this._lines.setLatLngs(polylines);
            }, interval);
        }, 1);
        this._lines.setLatLngs(polylines);
        this._map.addLayer(this._lines);
        if (data.marker) {
            this._clusterMarker = data.marker.setOpacity(0.3);
        }
    }

    pruneCluster.BuildLeafletClusterIcon = function(cluster) {
        // console.log("---------- pruneCluster.BuildLeafletClusterIcon ----------");

        var markers = cluster.GetClusterMarkers();


        // e.stats = cluster.stats;
        // e.population = cluster.population;

        // console.log("MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM");
        // console.log(markers);
        // console.log("MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM");

        //TODO setting cluster icon according to ownership of wells
        // var ownershipValue = 0;

        // markers.forEach(function (d){
        //     // console.log("---------- d ----------");
        //     // console.log(d);
        //     // console.log("---------- d ----------");
        //
        //     if (d.data.purpose == "Exploration") {
        //         ownershipValue = 1;
        //         // var e = new L.Icon.MarkerClusterOwned();
        //     }
        //     else {
        //         // var e = new L.Icon.MarkerClusterNotOwned();
        //     }
        //     // console.log("DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD");
        //     // console.log(d.data);
        //     // console.log("DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD");
        //     // console.log("EEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE");
        //     // console.log(e);
        //     // console.log("EEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE");
        //     // console.log("testvar1: ");
        //     // console.log(testvar1);
        // })
        //
        // if (ownershipValue == 1) {
        //     var e = new L.Icon.MarkerClusterOwned();
        // }
        // else {
        //     var e = new L.Icon.MarkerClusterNotOwned();
        // }

        var e = new L.Icon.MarkerClusterDefault();

        e.stats = cluster.stats;
        e.population = cluster.population;
        e.options.data = markers;


        // console.log("---------- cluster ----------");
        // console.log(cluster);
        // console.log("---------- cluster ----------");

        // console.log("---------- markers ----------");
        // console.log(markers);
        // console.log("---------- markers ----------");

        // console.log("---------- e ----------");
        // console.log(e);
        // console.log("---------- e ----------");

        // return PruneClusterForLeaflet.prototype.BuildLeafletClusterIcon.call(this, cluster);
        return e;
    };

    pruneCluster.BuildLeafletCluster = function(cluster, position) {
        var m = new L.Marker(position, {
            icon: pruneCluster.BuildLeafletClusterIcon(cluster)
        });

        m.on('click', function() {
            // Compute the  cluster bounds (it's slow : O(n))
            var markersArea = pruneCluster.Cluster.FindMarkersInArea(cluster.bounds);
            var b = pruneCluster.Cluster.ComputeBounds(markersArea);

            if (b) {
                var bounds = new L.LatLngBounds(new L.LatLng(b.minLat, b.maxLng), new L.LatLng(b.maxLat, b.minLng));

                var zoomLevelBefore = pruneCluster._map.getZoom();
                var zoomLevelAfter = pruneCluster._map.getBoundsZoom(bounds, false, new L.Point(20, 20, null));

                // If the zoom level doesn't change
                if (zoomLevelAfter === zoomLevelBefore) {
                    // Send an event for the LeafletSpiderfier
                    pruneCluster._map.fire('overlappingmarkers', {
                        cluster: pruneCluster,
                        markers: markersArea,
                        center: m.getLatLng(),
                        marker: m
                    });

                    pruneCluster._map.setView(position, zoomLevelAfter);
                }
                else {
                    pruneCluster._map.fitBounds(bounds);
                }
            }

            console.log("click triggered");
        });
        m.on('mouseover', function() {
            //do mouseover stuff here
            console.log("mouseover triggered");
            var markers = cluster.GetClusterMarkers()

            console.log("---------- markers ----------");
            console.log(markers);
            console.log("---------- markers ----------");

            // d3.select(this).style("opacity", 1);
            // d3.select(this).style("fill", "#ffff00");

            div.transition()
                .duration(200)
                .style("opacity", .9);

            var htmlContent = "";

            markers.forEach(function(d){
                htmlContent += "Something in HTML";
            })

            // console.log("---------- event.clientX ----------");
            // console.log(event.clientX);
            // console.log("---------- event.clientX ----------");
            // console.log("---------- event.clientY ----------");
            // console.log(event.clientY);
            // console.log("---------- event.clientY ----------");

            // 169 250

            // div.html(htmlContent)
            //     .style("left", (event.clientX - 20) + "px")
            //     .style("top", (event.clientY -350) + "px");

            div.html(htmlContent)
                .style("left", 50 + "px")
                .style("top", 50 + "px");
        });
        m.on('mouseout', function() {
            //do mouseout stuff here
            console.log("mouseout triggered");

            // d3.select(this).style("opacity", 0.25);
            // d3.select(this).style("fill", function(d) { return d.color; });

            div.transition()
                .duration(500)
                .style("opacity", 0);
        });

        return m;
    };

    L.Icon.MarkerClusterDefault = L.Icon.extend({
        options: {
            // iconUrl: pin_Hover,
            iconSize: new L.Point(44, 44),
            className: 'prunecluster leaflet-markercluster-icon'
        },

        createIcon: function () {
            // based on L.Icon.Canvas from shramov/leaflet-plugins (BSD licence)
            var e = document.createElement('canvas');
            this._setIconStyles(e, 'icon');
            var s = this.options.iconSize;

            if (L.Browser.retina) {
                e.width = s.x + s.x;
                e.height = s.y + s.y;
            } else {
                e.width = s.x;
                e.height = s.y;
            }

            // this.draw(e.getContext('2d'), s.x, s.y);
            this.draw(e.getContext('2d'), e.width, e.height);
            // this.draw(e.getContext('2d'), e.width, e.height);

            // console.log("---------- e ----------");
            // console.log(e);
            // console.log("---------- e ----------");
            // console.log("---------- this ----------");
            // console.log(this);
            // console.log("---------- this ----------");

            return e;
        },

        createShadow: function () {
            return null;
        },

        draw: function(canvas, width, height) {
            // console.log("PASS !!!");
            // console.log("CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCcCCC");
            // console.log(canvas);
            // console.log("CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCcCCC");

            var xa = 2, xb = 50, ya = 18, yb = 21;

            var r = ya + (this.population - xa) * ((yb - ya) / (xb - xa));

            var radiusMarker = Math.min(r, 21),
            radiusCenter = 11,
            center = width / 2;

            if (L.Browser.retina) {
                canvas.scale(2, 2);
                center /= 2;
                canvas.lineWidth = 0.5;
            }

            canvas.strokeStyle = 'rgba(0,0,0,0.25)';

            var start = 0, stroke = true;
            for (var i = 0, l = colors.length; i < l; ++i) {

                var size = this.stats[i] / this.population;

                if (size > 0) {

                    stroke = size != 1;

                    canvas.beginPath();
                    canvas.moveTo(center, center);
                    canvas.fillStyle = colors[i];
                    var from = start + 0.14,
                    to = start + size * pi2;

                    if (to < from || size == 1) {
                        from = start;
                    }
                    canvas.arc(center, center, radiusMarker, from, to);

                    start = start + size * pi2;
                    canvas.lineTo(center, center);
                    canvas.fill();
                    if (stroke) {
                        canvas.stroke();
                    }
                    canvas.closePath();
                }

            }

            if (!stroke) {
                canvas.beginPath();
                canvas.arc(center, center, radiusMarker, 0, Math.PI * 2);
                canvas.stroke();
                canvas.closePath();
            }

            canvas.beginPath();
            canvas.fillStyle = 'white';
            canvas.moveTo(center, center);
            canvas.arc(center, center, radiusCenter, 0, Math.PI * 2);
            canvas.fill();
            canvas.closePath();

            //adding crosses to the circle
            canvas.beginPath();
            canvas.strokeStyle = 'rgba(0,0,0,1)';
            canvas.moveTo(22,10);
            canvas.lineTo(22,34);
            canvas.stroke();
            canvas.closePath();

            canvas.beginPath();
            canvas.strokeStyle = 'rgba(0,0,0,1)';
            canvas.moveTo(10,22);
            canvas.lineTo(34,22);
            canvas.stroke();
            canvas.closePath();

            // console.log("DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD");
            // console.log(data);
            // console.log("DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD");
            // console.log("TTTTTTTTTTTTTTTTTT/TTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT");
            // console.log(cluster.GetClusterMarkers());
            // console.log("TTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT");


            canvas.fillStyle = '#454545';
            canvas.textAlign = 'center';
            canvas.textBaseline = 'middle';
            canvas.font = 'bold '+(this.population < 100 ? '12' : (this.population < 1000 ? '11' : '9'))+'px sans-serif';
            canvas.fillStyle = 'black';
            canvas.strokeStyle = 'rgba(255,255,255,1)';

            canvas.strokeText(this.population, center, center, radiusCenter*2);
            canvas.fillText(this.population, center, center, radiusCenter*2);
        }
    });

    L.Icon = L.Icon.extend({
        _setIconStyles: function (img, name) {
            var options = this.options,
                size = L.point(options[name + 'Size']),
                anchor;

            if (name === 'shadow') {
                anchor = L.point(options.shadowAnchor || options.iconAnchor);
            }
            else {
                anchor = L.point(options.iconAnchor);
            }

            if (!anchor && size) {
                anchor = size.divideBy(2, true);
            }

            img.className = 'leaflet-marker-' + name + ' ' + options.className;

            //adding data tag to <img>
            img.data = options.data;

            if (anchor) {
                img.style.marginLeft = (-anchor.x) + 'px';
                img.style.marginTop  = (-anchor.y) + 'px';
            }

            if (size) {
                img.style.width  = size.x + 'px';
                img.style.height = size.y + 'px';
            }
        }

    });


    var svg = d3.select(map.getPanes().overlayPane).append("svg")
        g = svg.append("g").attr("class", "leaflet-zoom-hide");

    // Define the div for the tooltip
	var popup = d3.select("#popup").append("div")
	    .attr("class", "tooltip")
	    .style("opacity", 0);

    // Overlay selection should be based on radio buttons or tickboxes
    //Major Overlays
    boroughOverlay();
    districtOverlay();
    //
    // // Minor Overlays
    policePrecintOverlay();
    fireBattalionOverlay();
    schoolDistrictOverlay();

    // Markers
    subwayEntranceMarker();

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

    function subwayEntranceMarker(){
        var marker_img = "data:image/png;base64,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";

        pruneCluster.PrepareLeafletMarker = function (marker, data, category) {
            marker.setIcon(
                L.icon({
                    iconUrl: marker_img,
                    iconSize: [24, 24],
                    data: data
                })
            );

            if (marker.getPopup()) {
                marker.setPopupContent(
                    "<P>Well Name - data.well_name: " + data.well_name + "</P>" +
                    "<P>Water Depth/Ground Level (MSL) - data.wellbore_name: " + data.wellbore_name + "</P>" +
                    "<P>Well Depth - data.depth_md_msl: " + data.depth_md_msl + "</P>" +
                    "<P>Pay Type - data.latitude: " + data.latitude + "</P>" +
                    "<P>Region - data.region: " + data.region + "</P>" +
                    "<P>Country - data.country: " + data.country + "</P>" +
                    "<P>Basin - data.basin_name: " + data.basin_name + "</P>" +
                    "<P>Block - data.block: " + data.block + "</P>" +
                    "<P>Field - data.field: " + data.field + "</P>" +
                    "<P>Latitude - data.latitude: " + data.latitude + "</P>" +
                    "<P>Longitude: -  data.longitude" + data.longitude + "</P>" +
                    "<P>Number Of Wellbores  data.number_wellbores: " + data.number_wellbores + "</P>" +
                    "<P>Number Of Operations - data.latitude: " + data.latitude + "</P>" +
                    "<P>Last Operation Date - data.last_operation_date: " + data.last_operation_date + "</P>"
                );
                // marker.setPopupContent(
                //     "<P>Purpose: "+data.purpose + " - " + category + "</P>"
                // );
            }
            else {
                marker.bindPopup(
                    "<P>Well Name - data.well_name: " + data.well_name + "</P>" +
                    "<P>Water Depth/Ground Level (MSL) - data.wellbore_name: " + data.wellbore_name + "</P>" +
                    "<P>Well Depth - data.depth_md_msl: " + data.depth_md_msl + "</P>" +
                    "<P>Pay Type - data.latitude: " + data.latitude + "</P>" +
                    "<P>Region - data.region: " + data.region + "</P>" +
                    "<P>Country - data.country: " + data.country + "</P>" +
                    "<P>Basin - data.basin_name: " + data.basin_name + "</P>" +
                    "<P>Block - data.block: " + data.block + "</P>" +
                    "<P>Field - data.field: " + data.field + "</P>" +
                    "<P>Latitude - data.latitude: " + data.latitude + "</P>" +
                    "<P>Longitude: -  data.longitude" + data.longitude + "</P>" +
                    "<P>Number Of Wellbores  data.number_wellbores: " + data.number_wellbores + "</P>" +
                    "<P>Number Of Operations - data.latitude: " + data.latitude + "</P>" +
                    "<P>Last Operation Date: " + data.last_operation_date + "</P>"
                );

                // marker.bindPopup("<P>Purpose: " + data.purpose + "</P>" + "<P>Well Name: " + data.well_name + "</P>" + "<P>Wellbore Name: " + data.wellbore_name + "</P>" + "<P>Operation Name: " + data.operation_name + "</P>" +"<P>Latitude: " + data.latitude + "</P>" +"<P>Longitude: " + data.longitude + "</P>");
            }

            marker._popup.options.closeOnClick = false;
            marker._popup.options.autoPan = false;

            marker._popup.setLatLng(marker._latlng);

            map.addLayer(marker._popup);

            var pos = map.latLngToLayerPoint(marker._latlng);

            L.DomUtil.setPosition(marker._popup._wrapper.parentNode, pos);

            var draggable = new L.Draggable(marker._popup._container, marker._popup._wrapper);
            draggable.enable();

            map.closePopup(marker._popup);
        };

        d3.json("data/NYC-Markers/subwayEntrances.geojson", function(error, collection) {
            if (error) throw error;

            console.log("---------- collection ----------");
            console.log(collection);
            console.log("---------- collection ----------");

            collection.features.forEach(function(d){
                console.log("---------- d ----------");
                console.log(d);
                console.log("---------- d ----------");

                var m = new PruneCluster.Marker(d.geometry.coordinates[1], d.geometry.coordinates[0]);

                m.data = d.properties;

                // m.category = categories.indexOf(d.purpose);

                pruneCluster.RegisterMarker(m);

                // console.log("---------- pruneCluster ----------");
                // console.log(pruneCluster);
                // console.log("---------- pruneCluster ----------");

            })

            map.addLayer(pruneCluster);

            // svg.selectAll("image").remove();
            //
            // var pin = g.selectAll("pin")
            //     .data(collection.features)
            //     .enter()
            //     .append('image')
            //     .attr('class', 'subwayEntrance-Marker')
            //     // .attr("class", "lasso-marker")
            //     .attr('xlink:href', marker_img)
            //     // .attr('xlink:href', function(d){
            //     //     if (d.selected == true ) {
            //     //         return pin_Selected;
            //     //     }
            //     //     else if (d.found == true){
            //     //         return pin_Found;
            //     //     }
            //     //     else {
            //     //         return pin_Selected;
            //     //     }
            //     // });
            //     // .attr('height', 100)
            //     // .attr('width', 100)
            //     // .attr("x", function(d){
            //     //     var LatLng = new L.LatLng(d.geometry.coordinates[1], d.geometry.coordinates[0]);
            //     //     return map.latLngToLayerPoint(LatLng).x;
            //     // })
            //     // .attr("y", function(d){
            //     //     var LatLng = new L.LatLng(d.geometry.coordinates[1], d.geometry.coordinates[0]);
            //     //     return map.latLngToLayerPoint(LatLng).y;
            //     // });
            //     // .attr("x", -20)
            //     // .attr("y", -20);
            //     .attr("transform",function(d) {
            //
            //         console.log("---------- d ----------");
            //         console.log(d);
            //         console.log("---------- d ----------");
            //
            //         // console.log(d.geometry.coordinates[0]);
            //
            //         // var LatLng = new L.LatLng(d.geometry.coordinates[0], d.geometry.coordinates[1]);
            //         var LatLng = new L.LatLng(d.geometry.coordinates[1], d.geometry.coordinates[0]);
            //
            //         console.log("---------- LatLng ----------");
            //         console.log(LatLng);
            //         console.log("---------- LatLng ----------");
            //
            //         return "translate("+ (map.latLngToLayerPoint(LatLng).x) +","+ (map.latLngToLayerPoint(LatLng).y) +")";
            //         // return "translate("+ (map.latLngToLayerPoint(LatLng).x) +","+ (map.latLngToLayerPoint(LatLng).y) +")";
            //         // return "translate("+ (map.latLngToLayerPoint(LatLng).x) +","+ (map.latLngToLayerPoint(LatLng).y) +")";
            //
            //
            //     });
            //     // .attr("x", function(d){
            //     //     return d.geometry.coordinates[1];
            //     // })
            //     // .attr("y", function(d){
            //     //     return d.geometry.coordinates[0];
            //     // });
            //     // .on("mouseover", function(d) {
            //     //     d3.select(this).attr('xlink:href', pin_Hover)
            //     //         .attr("x", -35)
            //     //         .attr("y", -50)
            //     //         .attr('height', 60)
            //     //         .attr('width', 60);
            //     //
            //     //     popup.transition()
            //     //         .duration(200)
            //     //         .style("opacity", .9);
            //     //
            //     //     popup.html("<table><tr><th>Well Name</th><th>"+d.well_name+"</th></tr><tr><td>Region</td><td>"+d.region+"</td></tr><tr><td>Country</td><td>"+d.country+
            //     //         "</td></tr><tr><td>Block</td><td>"+d.block+"</td></tr><tr><td>Basin</td><td>"+d.basin_name+
            //     //         "</td></tr><tr><td>Location</td><td>" + d.latitude_degree + " " + d.latitude_minute + " " + d.latitude_second + " " + d.latitude_NS + " " +  d.longitude_degree + " " + d.longitude_minute + " " + d.longitude_second + " " + d.longitude_EW +
            //     //         "</td></tr><tr><td>Number Of Wellbores</td><td>"+d.number_wellbores+"</td></tr><tr><td>Purpose</td><td>"+d.purpose+
            //     //         "</td></tr><tr><td>Total Days On Well</td><td>"+parseFloat(Math.round(d.total_days * 100) / 100).toFixed(2)+"</td></tr><tr><td>Last Operation Date</td><td>"+d.last_operation_date+"</td></tr></table>")
            //     //         .attr("style", "top: 70%; left: 0%; position: absolute;");
            //     // })
            //     // .on("mouseout", function(d) {
            //     //     if (d.selected == true || d.existenceCheck == true) {
            //     //         d3.select(this).attr('xlink:href', pin_Selected)
            //     //         .attr('height', 30)
            //     //         .attr('width', 30)
            //     //         .attr("x", -20)
            //     //         .attr("y", -20);
            //     //     }
            //     //     else if (d.found == true) {
            //     //         d3.select(this).attr('xlink:href', pin_Found)
            //     //         .attr('height', 30)
            //     //         .attr('width', 30)
            //     //         .attr("x", -20)
            //     //         .attr("y", -20);
            //     //     }
            //     //     else {
            //     //         d3.select(this).attr('xlink:href', pin_Unselected)
            //     //         .attr('height', 30)
            //     //         .attr('width', 30)
            //     //         .attr("x", -20)
            //     //         .attr("y", -20);
            //     //     }
            //     //
            //     //     popup.transition()
            //     //         .duration(500)
            //     //         .style("opacity", 0);
            //     // })
            //     // .on("contextmenu", function (d) {
            //     //     d3.event.preventDefault();
            //     //     // react on right-clicking
            //     //
            //     //     if (d.existenceCheck == true) {
            //     //         if (actionMenuShowing == true) {
            //     //             d3.select(".actionMenu").remove();
            //     //             actionMenuShowing = false;
            //     //         }
            //     //         else {
            //     //             actionMenuShowing = true;
            //     //             // Build the popup
            //     //             actionMenu = d3.select("#" + "MapMenuHost")
            //     //             .append("div")
            //     //             .attr("class", "actionMenu");
            //     //
            //     //             actionMenu.html("<h1>Action Menu</h1><p>Action 1(Placeholder)</p><p>Action 2(Placeholder)</p><p>Action 3(Placeholder)</p><p>Action 4(Placeholder)</p><p>Action 5(Placeholder)</p><p>Action 6(Placeholder)</p>")
            //     //             .attr("style", "top: "+ ((d3.event.y-100)) + "px; left: "+ ((d3.event.x-100)) + "px; position: absolute;");
            //     //         }
            //     //     }
            //     // });
            //
            //
            // // pin.attr("transform",function(d) {
            // //
            // //     if (typeof d.LatLng != 'undefined') {
            // //         return "translate("+ (map.latLngToLayerPoint(d.LatLng).x - positionOffset) +","+ (map.latLngToLayerPoint(d.LatLng).y - positionOffset) +")";
            // //     }
            // //     else {
            // //         return "";
            // //     }
            // // })
            // //     .attr('xlink:href', function(d){
            // //         if (d.selected == true || d.existenceCheck == true) {
            // //             return pin_Selected;
            // //         }
            // //         else if (d.found == true) {
            // //             return pin_Found;
            // //         }
            // //         else {
            // //             return pin_Unselected;
            // //         }
            // //     });
            //
            // // pin.attr("transform",function(d) {
            // //
            // //     console.log("---------- d ----------");
            // //     console.log(d);
            // //     console.log("---------- d ----------");
            // //
            // //     // console.log(d.geometry.coordinates[0]);
            // //
            // //     // var LatLng = new L.LatLng(d.geometry.coordinates[0], d.geometry.coordinates[1]);
            // //     var LatLng = new L.LatLng(d.geometry.coordinates[1], d.geometry.coordinates[0]);
            // //
            // //     console.log("---------- LatLng ----------");
            // //     console.log(LatLng);
            // //     console.log("---------- LatLng ----------");
            // //
            // //     return "translate("+ (map.latLngToLayerPoint(LatLng).x) +","+ (map.latLngToLayerPoint(LatLng).y) +")";
            // //     // return "translate("+ (map.latLngToLayerPoint(LatLng).x) +","+ (map.latLngToLayerPoint(LatLng).y) +")";
            // //     // return "translate("+ (map.latLngToLayerPoint(LatLng).x) +","+ (map.latLngToLayerPoint(LatLng).y) +")";
            // //
            // //
            // // });

        });

    }





</script>

@endsection
