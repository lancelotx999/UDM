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

    div.tooltip {
        position: absolute;
        padding: 2px;
        font: 12px sans-serif;
        background: lightsteelblue;
        border: 1px;
        border-radius: 8px;
        pointer-events: none;
    }

    svg {
      position: relative;
    }

</style>

<div id="sidebar" class="collapse in">
        
    <br />

    <hr />

    <h3 class="white-text">
        <a data-toggle="collapse" href="#overlays_group">
            <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>&nbsp;Overlays
        </a>
    </h3>

    <hr />

    <div id="overlays_group" class="collapse in">
        <ul class="nav">
            <li>            
                <input type="checkbox" id="Borough" class="example">
                <label for="check_borough"><span class="white-text">Borough</span></label>
            </li>
                
            <li>
                <input type="checkbox" id="District" class="example">
                <label for="check_district"><span class="white-text">District</span></label>
            </li>               

            <li>
                <input type="checkbox" id="Precint" class="example">
                <label for="check_precint"><span class="white-text">Police Precint</span></label>
            </li> 

            <li>
                <input type="checkbox" id="Battalion" class="example">
                <label for="check_battalion"><span class="white-text">Fire Battalion</span></label>
            </li> 

            <li>
                <input type="checkbox" id="School" class="example">
                <label for="check_school"><span class="white-text">School District</span></label>
            </li> 
        </ul>
    </div>

    <hr />

    <h3 class="white-text">
        <a data-toggle="collapse" href="#markers_group">
            <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>&nbsp;Markers
        </a>
    </h3>

    <hr />

    <div id="markers_group" class="collapse">
        <ul class="nav">
            <li>
                <input type="checkbox" id="Subway" class="example">
                <label for="check_subway"><span class="white-text">Subway Entry</span></label>
            </li> 

            <li>
                <input type="checkbox" id="Busstop" class="example">
                <label for="check_subway"><span class="white-text">Bus Stop</span></label>
            </li> 

            <li>
                <input type="checkbox" id="CollegeUni" class="example">
                <label for="check_subway"><span class="white-text">Universities</span></label>
            </li> 
        </ul>
    </div>

    <br /><br />

</div>

<button class="filter" href="#sidebar" data-toggle="collapse">
    <i class="fa fa-map" aria-hidden="true"></i>&nbsp;Show / Hide Data Filters
</button>

<div id="popup"></div>
<div id="map"></div>

<!-- <img src="{{URL::asset('images/swinlogo.png')}}" alt="profile Pic" height="200" width="200"> -->
<script>

    var map = L.map('map', { zoomControl: false })
        // .setView([0, 0], 0)
        .setView(new L.LatLng(40, -74), 10) //NYC Location
        .addLayer(new L.TileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"));

    //add zoom control with your options
    L.control.zoom({ position:'topright' }).addTo(map);

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

            // popup.transition()
            //     .duration(200)
            //     .style("opacity", .9);
            //
            // var htmlContent = "";
            //
            // markers.forEach(function(d){
            //     htmlContent += "Something in HTML";
            // })

            // console.log("---------- event.clientX ----------");
            // console.log(event.clientX);
            // console.log("---------- event.clientX ----------");
            // console.log("---------- event.clientY ----------");
            // console.log(event.clientY);
            // console.log("---------- event.clientY ----------");

            // 169 250

            // popup.html(htmlContent)
            //     .style("left", (event.clientX - 20) + "px")
            //     .style("top", (event.clientY -350) + "px");

            // popup.html(htmlContent)
            //     .style("left", d3.event.x + "px")
            //     .style("top", d3.event.y + "px");

                // .attr("style", "top: "+ ((d3.event.y)) + "px; left: "+ ((d3.event.x)) + "px; position: absolute;");

        });
        m.on('mouseout', function() {
            //do mouseout stuff here
            console.log("mouseout triggered");

            // d3.select(this).style("opacity", 0.25);
            // d3.select(this).style("fill", function(d) { return d.color; });

            // popup.transition()
            //     .duration(500)
            //     .style("opacity", 0);
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

            // //adding crosses to the circle
            // canvas.beginPath();
            // canvas.strokeStyle = 'rgba(0,0,0,1)';
            // canvas.moveTo(22,10);
            // canvas.lineTo(22,34);
            // canvas.stroke();
            // canvas.closePath();
            //
            // canvas.beginPath();
            // canvas.strokeStyle = 'rgba(0,0,0,1)';
            // canvas.moveTo(10,22);
            // canvas.lineTo(34,22);
            // canvas.stroke();
            // canvas.closePath();

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
    d3.select("#Borough").on("change", function(){
        if(d3.select("#Borough").property("checked")){
            boroughOverlay();
        } else {
            g.selectAll("path").attr("class", "boroughOverlay").remove();
        }
    });
    
    d3.select("#District").on("change", function(){
        if(d3.select("#District").property("checked")){
            districtOverlay();
        } else {
            g.selectAll("path").attr("class", "districtOverlay").remove();
        }
    });
    
    //
    // // Minor Overlays
    d3.select("#Precint").on("change", function(){
        if(d3.select("#Precint").property("checked")){
            policePrecintOverlay();
        } else {
            g.selectAll("path").attr("class", "policePrecintOverlay").remove();
        }
    });

    d3.select("#Battalion").on("change", function(){
        if(d3.select("#Battalion").property("checked")){
            fireBattalionOverlay();
        } else {
            g.selectAll("path").attr("class", "fireBattalionOverlay").remove();
        }
    });

    d3.select("#School").on("change", function(){
        if(d3.select("#School").property("checked")){
            schoolDistrictOverlay();
        } else {
            g.selectAll("path").attr("class", "schoolDistrictOverlay").remove();
        }
    });

    // Markers
    d3.select("#Subway").on("change", function(){
        if(d3.select("#Subway").property("checked")){
            subwayEntranceMarker();
        } else {
            map.removeLayer(pruneCluster);
        }
    });

    d3.select("#Busstop").on("change", function(){
        if(d3.select("#Busstop").property("checked")){
            busStopMarker();
        } else {
            map.removeLayer(pruneCluster);
        }
    });

    d3.select("#CollegeUni").on("change", function(){
        if(d3.select("#CollegeUni").property("checked")){
            collegesUniversitiesMarker();
        } else {
            map.removeLayer(pruneCluster);
        }
    });

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

                    popup.html("<p>Borough Code: " + d.properties.BoroCode + "</p>" + "<p>Borough Name: " + d.properties.BoroName + "</p>")
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

                   popup.html("<p> Borough Community District ID: " + d.properties.BoroCD + "</p>")
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

                    popup.html("<p>Police Precinct: " + d.properties.Precinct + "</p>")
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

                    popup.html("<p>Fire Battalion: " + d.properties.FireBN + "</p>")
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
        d3.json("data/NYC-Overlays/school_districts.geojson", function(error, collection) {
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

                   popup.html("<p>School District: " + d.properties.SchoolDist + "</p>")
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

    function subwayLineOverlay(){
        d3.json("data/NYC-Overlays/subway_lines.geojson", function(error, collection) {
            if (error) throw error;

            console.log("---------- collection ----------");
            console.log(collection);
            console.log("---------- collection ----------");

            var transform = d3.geo.transform({point: projectPoint}),
                path = d3.geo.path().projection(transform);

            // var transform = d3.geo.orthographic(),
            //     path = d3.geo.path().projection(transform);

            // var transform = d3.geo.path(),
            //     path = d3.geo.path().projection(transform);

            // var feature = g.selectAll("path")
            //     .attr("class", "subwayLineOverlay")
            //     .data(collection.features)
            //     .enter()
            //     .append("path")
            //     .style("fill", "red")
            //     .style("fill-opacity", 1)
            //     .style("stroke", "#fff")
            //     .style("stroke-width", 0.5 +"px")
            //     .on("mouseover", function(d){
            //         console.log("---------- d ----------");
            //         console.log(d);
            //         console.log("---------- d ----------");
            //         console.log("---------- this ----------");
            //         console.log(this);
            //         console.log("---------- this ----------");
            //
            //         d3.select(this)
            //             .style("fill", "red")
            //             .style("fill-opacity", .7);
            //
            //         // this.style("fill", "brown")
            //         //     .style("fill-opacity", .7);
            //
            //         popup.transition()
            //            .duration(200)
            //            .style("opacity", .9);
            //
            //        popup.html("District")
            //         .attr("style", "top: "+ ((d3.event.y)) + "px; left: "+ ((d3.event.x)) + "px; position: absolute;");
            //         // .attr("style", "top: 58%; left: 0px; position: absolute;");
            //     })
            //     .on("mouseout", function(d) {
            //
            //         d3.select(this)
            //             .style("fill", "#000")
            //             .style("fill-opacity", .2);
            //
            //         // this.style("fill", "#000")
            //         //     .style("fill-opacity", .2);
            //
            //         popup.transition()
            //            .duration(500)
            //            .style("opacity", 0);
            //     });

            // var lineFeatures = g.selectAll("path")
            //     .data(collection.features)
            //     .enter()
            //     .append("path")
            //     .attr("class", "subwayLineOverlay")
            //     .attr("style", "opacity:1")
            //     .style("fill", "red")
            //     .style("fill-opacity", 1)
            //     .style("stroke", "#fff")
            //     .style("stroke-width", 0.5 +"px");


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

            console.log("---------- data ----------");
            console.log(data);
            console.log("---------- data ----------");

            if (marker.getPopup()) {
                marker.setPopupContent(
                    "<P>Subway: " + data.name + "</P>" +
                    "<P>Line: " + data.line + "</P>"
                );
                // marker.setPopupContent(
                //     "<P>Purpose: "+data.purpose + " - " + category + "</P>"
                // );
            }
            else {
                marker.bindPopup(
                    "<P>Subway: " + data.name + "</P>" +
                    "<P>Line: " + data.line + "</P>"
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

            // console.log("---------- collection ----------");
            // console.log(collection);
            // console.log("---------- collection ----------");

            collection.features.forEach(function(d){
                // console.log("---------- d ----------");
                // console.log(d);
                // console.log("---------- d ----------");

                var m = new PruneCluster.Marker(d.geometry.coordinates[1], d.geometry.coordinates[0]);

                console.log("---------- m ----------");
                console.log(m);
                console.log("---------- m ----------");

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

    function busStopMarker(){
        var marker_img = "data:image/png;base64,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"

        pruneCluster.PrepareLeafletMarker = function (marker, data, category) {
            marker.setIcon(
                L.icon({
                    iconUrl: marker_img,
                    iconSize: [24, 24],
                    data: data
                })
            );

            // console.log("---------- data ----------");
            // console.log(data);
            // console.log("---------- data ----------");

            if (marker.getPopup()) {
                marker.setPopupContent(
                    "<P>Borough: " + data.boro_name + "</P>" +
                    "<P>Borough ID: " + data.boro_code + "</P>" +
                    "<P>Borough Community District ID: " + data.boro_cd + "</P>" +
                    "<P>Street: " + data.street + "</P>"
                );
                // marker.setPopupContent(
                //     "<P>Purpose: "+data.purpose + " - " + category + "</P>"
                // );
            }
            else {
                marker.bindPopup(
                    "<P>Borough: " + data.boro_name + "</P>" +
                    "<P>Borough ID: " + data.boro_code + "</P>" +
                    "<P>Borough Community District ID: " + data.boro_cd + "</P>" +
                    "<P>Street: " + data.street + "</P>"
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

        d3.json("data/NYC-Markers/busStops.geojson", function(error, collection) {
            if (error) throw error;

            // console.log("---------- collection ----------");
            // console.log(collection);
            // console.log("---------- collection ----------");

            collection.features.forEach(function(d){
                // console.log("---------- d ----------");
                // console.log(d);
                // console.log("---------- d ----------");

                var m = new PruneCluster.Marker(d.geometry.coordinates[1], d.geometry.coordinates[0]);

                m.data = d.properties;

                console.log("---------- m ----------");
                console.log(m);
                console.log("---------- m ----------");

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

    function collegesUniversitiesMarker(){
        var marker_img = "data:image/png;base64,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";

        pruneCluster.PrepareLeafletMarker = function (marker, data, category) {
            marker.setIcon(
                L.icon({
                    iconUrl: marker_img,
                    iconSize: [24, 24],
                    data: data
                })
            );

            console.log("---------- data ----------");
            console.log(data);
            console.log("---------- data ----------");

            // console.log("---------- marker ----------");
            // console.log(marker);
            // console.log("---------- marker ----------");

            if (marker.getPopup()) {
                marker.setPopupContent(
                    "<P>Name: " + data.name + "</P>" +
                    "<P>Area: " + data.city + "</P>"
                );
                // marker.setPopupContent(
                //     "<P>Purpose: "+data.purpose + " - " + category + "</P>"
                // );
            }
            else {
                marker.bindPopup(
                    "<P>Name: " + data.name + "</P>" +
                    "<P>Area: " + data.city + "</P>"
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

        d3.json("data/NYC-Markers/collegesUniversities.geojson", function(error, collection) {
            if (error) throw error;

            // console.log("---------- collection ----------");
            // console.log(collection);
            // console.log("---------- collection ----------");

            collection.features.forEach(function(d){
                // console.log("---------- d ----------");
                // console.log(d);
                // console.log("---------- d ----------");

                var m = new PruneCluster.Marker(d.geometry.coordinates[1], d.geometry.coordinates[0]);

                console.log("---------- m ----------");
                console.log(m);
                console.log("---------- m ----------");

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

    function vehicleCollisionMarker(){

        var warning_img = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAC3FBMVEUAAAAAAABEREBEREB/f39EREBVVVU/Pz9EREBVVVVEREBISEg/Pz9EREBEREBUVFREREBMTExEREBFRUVLS0pVVVVEREBFRUROTk5EREBEREBVVVVAQDxPT09KSkdLS0tGRkZHR0NNTUpQUFBMTExISEhFRUJJSUhKSkhRUVFHR0VKSkdRUVFJSUdOTk5LS0tISEZISEhISEZMTExKSkpPT09ISEdLS0pNTU1LS0tPT09JSUlMTExMTEpKSklNTU1LS0tOTk5OTk5LS0pLS0pPT09JSUhNTU1MTExPT05LS0tKSklOTk5LS0tNTU1MTExOTk5NTU1LS0tMTExLS0tMTEtNTU1MTExOTk5NTU1NTU1LS0tNTU1MTExLS0pLS0tOTk5MTEtMTExNTU1KSklLS0tNTU1MTExLS0tMTExOTk5NTU1LS0pMTExNTU1MTExMTEtNTU1MTExMTExNTU1OTk5NTU1MTExMTEtMTExNTU1MTExLS0tNTU1LS0pNTU1MTEtMTExMTExLS0tNTU1NTU1LS0tNTU1MTExMTExMTExMTExMTExNTU1MTExLS0tNTU1MTExNTU1MTExMTExNTU1NTU1NTU1NTU1LS0tNTU1MTExNTU1NTU1NTU1NTU1KSkpNTU1NTU1MTExMTExMTExNTU1MTExNTU1LS0tMTExMTExNTU1LS0tNTU1MTExNTU1MTExNTU1NTU1LS0tMTExNTU1KSkpLS0tNTU1MTExNTU1NTU1MTExMTExLS0tLS0tLS0tMTExNTU1LS0tMTExNTU1LS0tLS0tLS0pNTU1LS0pNTU1LS0tNTU1NTU1LS0tMTExNTU1LS0tLS0pLS0tLS0tNTU1MTExNTU1LS0tMTExLS0pMTExNTU1LS0tLS0pLS0tLS0pNTU1LS0tNTU1LS0pLS0tMTExMTExNTU1LS0pLS0tLS0pLS0tMTExNTU1MTExNTUxNTU1crPG4AAAA8XRSTlMAAQECAgMDBAUGBwcICAkJCgoLCwwMDQ0NDg8PEBARERISEhMUFRYWFhYXGBkaGhscHB4eHyAiJCQlJSYmJy0uLy8xNjk6Ozs8PD1BQUJCQ0RFR0lMTExNTk9QUVJTVFRVVldZWltcXV5hYmNkZGZnaWlqa21vcHJ0dXZ4eXl6en5+f4CAgYKEhYaIiYqKjI2NjpGSlJSYm56ioqOkpaarrq6vsLG0tre5uru8vL2/wMDBwcLExcbIy8zNz9DS09TV2Nja29zd3t/g4OHh4uPk5ebn6Onp7O3u7u/v8PDx8vPz9PX29/n5+vv7/Pz9/f7+7qSLqwAABGNJREFUWMOtl/l7E0UYxydJo6UlTZrC2oOKWu6rKooiCoI3ogIVChQQUMEDUbwQEJRTRav1RPBAUKogh3IpNyog1iINaCuoIEohAq0k8w+4s9n3nZnd2U3kYX5p8z7v592Zd973OzOEnOvh8/v9vrO06cObzoaX/XtRWUXlzrpotO67ytdHtk3YVH6yPSMQCGTo9qYPrGykwmhcMa6pys/KZ4VCoSwvyZ5yQIDj8Tj7s39y0OpnW35Y07SwjwytkvFEAEr3DJb9bHxefn5+ni/7XXHu8VgsFsdf84Pcz4kv3urMU7q5UzK+e7Ubry/jWnf+siQ8pT9e58bnbE/Gx2PbOjrzZKHk+/tH00ffdkvppEWHpZgL7Lw3nOBHifz28W1grpljd4hzGmqvH83gc2s4/vczF4prPe/per6mqmxr/YY0w3cG5/feaOY6CBXcp4bnZCpn2SfSAyGN+TavQ76mp8kX7d1TaPpe8zPm9Jcg9pRfT6AewKjLR5Gvvxn2eial0yDPtx/HPXkQ5s4C+NMDWcZaN2CAZ7FWNlK6AfdpFu7pqoQtK5AIkOjLLsh/ezHwaSf0dHpgny/ZCR5nWhs9FQqk+1iARF+Oxb1+DPPfif0uwjqZgN8YxWyaHoAFMvv6HeD/7Ij714MZrsQ6yz0GAd5gNi0kacqXUCtL+f5fzSxX8P77FAIsZzZN1pQI1NrzvH4KmakZ7z+slGpmC8uadAJq9T6h1mspjQj9ey8E+Mve002w1u8QrKso/VzwHQh5+reFrafPx1rvJ1jLafwV4VslkKeGFvaePgK1fo9gHBaPjRS+dT/k6VeFJlRBrzwn6MTlDf9cKvjOgXXuUmjKauiVpaLObPpK/NYKWGelQpPegl47livo1MtzBb5lFPL0kkLTxmOvTRR0rvMFgtdTqCkjFJrYrQE2+ftM5Ht++F5X9Ar+BHy0QKWJ67FVZqPOrqF0Gbq9iJq0UqmJj2OAk32hf3Qx3QJudzaipj2k1MTcoxihrrdZv6UHa0tMt+sPIX8oW6mJ5G0uqr8NMuvP4zFd+//Bz5lXiVITSXE9Pz9OvdZBrJWccj5/erQ9UWoiIRXimbZvUivA20+OiOfcC7B3sibqoyAinYkn1857uGz4I+XrTkvnZHUO3DNkTWRjjPOZym1DoHYsmmiMxcn597H2LJpojKJIMr6qAGtXU92z7j7lzkdv4n0S9qruCbNcefqkdJ9Q3jM+duMXJufzmm105tdlJud9pHifE7+7dSo8Ib0Oq/naHqnxhAyIqvj6W1PlCRmn4BvLUucJmWqv6Sf+D29og8zPc+PhniiMtCUy/4HHjTfvidKc2n0t8l80cePhniiv6aofOP9NSwde1kRLTm44AvzB7k68rInWnJaa767TA5x4qyZa92RmIsAUB96uidY9TfuM8Z94HHiFJlrfZK326/fuQvU7TbcpNNH6JiyhZ+5SvxMNW4bL29Ucb1ao36mOb1fFmzhV21m+3f8DGzgroWEhagoAAAAASUVORK5CYII=";

        var death_img = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAHV0lEQVR42u1baWxVRRSmrbW0tbYq1CoYQtlCNNgQXEIwbZD3+u5bumiLiYKJRGsi+sdEwh8tAWMwUhIMpAUSl6q4BKpERcGtpmpMNDFRfwhCbFFEY0GxmAq01e+kc+np7V3mzkzfK8aXnLy7zD33fGfOzFlm7qRJ///0fsuWVWWDchhl/5f5ccZZoFwXynK2jUajlycSifpUKtUC2ofj7/F/IplMniWiY9AhuofzzYlEvMGyYqVe/EzLp8o8DzSZUR5nXllZORlA7wZ9ABoEuH/CkHjmfShkJfEyLZ8u+HxQAaN8mzkELoDgawDgl3Cgk4zG3D8Ovo80NDTk68pnYrwXgooYFdrjCoLWgrrVgXsqwLaKH/CfVJXPBPhLQcWM6Dxb9PozYc2cwOLZ8+QH3kE7ndbgJ9+4gkevTIPwX6cRvE1f1dfXX5Vp8HMgSE8GwJ8fEnh+bkbAx2Kx6ZkEP6KEeE8yGZ+XVvCRSKQQ2v820+AZv2/i8eqytIAXs327LngQBUMHoMgDOD6syw982k2BzxKuwxV8TU1No6qwMNdB/O+AyV7nFLaurm4W2m6TC5o8LanWVJBT5AG+CAIeU+ypc8lkYkWQmeIdeEXijOIw6iaXrBveFjAFjBIWzB9TNVOAelJ2jKL9w6pzCK6vDYE3m1/IFTGzrYBRwjY2Nl4ikhaVMdqfSiWmy45RvOvise+Sm0Ch6F+DQmaWKOXwSY8rYEz4iJferzHhfRp2ggKQN1W9B9rcI2HpoxSQwxSQ7yYsGH+m6uoA5rWwQxK8ntdwnR/5eLd8gdNVAa4pIyamq3X8PI5fEKAWQBmv4nxPbW3tYmZdUdBe3H8RNFu03aURNwwhUJvqkSgVMAVkOxWQ5dEbK3SCHIB+VvDpYs8cZOb+OzPfPSRYPB7v0AmayF27xDVFXAFO7WT5mGObToSHa88JPtvY9VbGv4O1XUfC4v8dzYhxi0tQZysgXHEEQnysGd7+SFWdpqamXPT2XSJgyUIvV1BChXsX4dpy9NryRCJWEotFZ+D6KZ1wGc++5xLRFikVR8DsZwXwQ472bzvdE12zrcMWFlHiNVDM55yfSkmNEjWXcL5QqTLkHpn5jvmjyNVLcX0hjgfYc13w8cVMAVvRZr0N3rJicyixsflRwRTPXw+FlIWNQBF2nzaSIougRBo8zt8i02bKO+p4vpPM3zlBWVZ0Kgcv2h5hVrgQ5++G8EZDVVVLSrRTZDE+Zc3+lDMWhzuiCa0Z9AdTUso5QSFPeJDFDeQVHqXcw9EZFI3+JZt4CQXop8gQ6E/JCe+4Fw/4/RLc30C8QL043gweTwlqg8B9+Kf3rOfDhP+am5uz/cPxUfKdNFYfGK70ygUllDDRbI9hMF/UDW52LpLg2kYaoyOJUvw0lLIpGo1McShtMUWElmXNFUNxQ4jw+7Cx4giYdYYJSlxmbVrxuYGbPcDOwrWnQVssq3omFxamfxOe2R/AM2hY7jNWGQLTrSbKWACBCdK6xafYsohco4kyG46fMFYWg4nea6iG1w8ltC5dWnWlEzzFCGQRaPe3iRojzm83VhOMxarLaVbV6PkzEGgn+MznPQ+BK3D/WofXoGpzq39VKBD8Wa+JVLkmSDm9QjhKK7/boTwOnCzqRlzfTdEijW20exnmP4/LgUl0Bq0Agc6FDb9pQdZ4TRAvekCipwcoC0NbC7Qdx+XckgB8EdrsdpvQ6FlKm+10mLngclzbQSkz/u8E2KGgCRnvXWW8JigKon0BCjjmNowQ5FRA2FeggAEZJVL6jOOZHhPyb37gKYiSKYyGrgnasbsEgAYOHqbcThVhhQmUTL+Ng7cn44A4ZFOIzRPyNUFhjtPwkv4ABdzmMPs+jbW/3tGWlFwVUBDtoyRM0tLD1QSZFbT4CY0e/9B2cxB0ta7rxPC5b9iSqssAviuA3+MS3i18TdCRkBRL1Ad60fOHDK79HQS/EwH8emjNUmLzRPiaoEuB5I40LnxK8cMkXSMR16jVBD2GQsdEAU/VZMmgTq0m6Parq6u7YngoZBx8t1fUZ6wm6MUcs26SfHumwFOkydcXJJb4C03uFhOJUmJdhnqe6CGV/Q3GN09A4DcyAL59QoAXERrV6r5MF3hY3SfIGvMmBHibuYgSf0pDzx9xrvtlHDxzjQuoMjyOPd9L9cEJCZ4pISLqAKZ7vh9tl0xo8CxSXGm45wdpu/0FAZ4pYa2pcBltV19Q4N3rB8rgN6YbvO8+wTA/sZLzuka4/BJfR0wXeM99giqWFI/HSjF+v1AA30mrQekG77tPUGNdYTaoWxY8FPYd6LLxBK9UE9SZQ6gUPrLI6ksnaddIGsCHrwka+LIk5bfGJzZTRNIAXr0mqOs9aK+AT++vGWfw+jVBXdcpPMN+F3e3123niGHwZmqCPsylvtYC2Cm0mYLvKaINFKr8Qspnpibo4jpDfadHy2f2bjIc36rLL6R8eWn7gjRACbQc3mKKn2n5ZF2JkW9zJzo/r3F1wX81/i8ETfWY5ctwngAAAABJRU5ErkJggg==";


        var collisionData = [];

        d3.csv("data/NYC-bigData/NYPD_Motor_Vehicle_Collisions.csv", function (data){
            console.log("---------- data ----------");
            console.log(data);
            console.log("---------- data ----------");

            data.forEach(function(d){

            })


        })
    }

    function educationModule(){
        schoolDistrictOverlay();
        collegesUniversitiesMarker();
    }

    //uncheck all boxes on Mozilla browser refresh
    function uncheck() {
        $(':checkbox:checked').prop('checked',false);
    }


</script>

@endsection
