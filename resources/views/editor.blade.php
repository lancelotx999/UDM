@extends('layouts.app')

@section('content')

<style type="text/css">

	#export {
        position: absolute;
        top: 280px;
        left: -8px;
        margin: 15px 20px 20px;
  		padding: 5px 15px;
  		border: none;
  		color: #161a1d;
  		box-shadow: 0 1px 5px rgba(0,0,0,0.4);
  		background-color: #fff;
  		transition-duration: 0.4s;
  		-webkit-transition-duration: 0.4s; /* Safari */
    }

	#export:hover {
		background-color: #eeeeee;
		color: #555;
	}

</style>

<div class="row">

	<div id="map"></div>
	<button class="filter" id='export'>Save Notes</button>

</div>

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

    var drawnItems = new L.FeatureGroup();

    map.addLayer(drawnItems);

    var drawControl = new L.Control.Draw({
        edit: {
            featureGroup: drawnItems
        }
    });

    map.addControl(drawControl);

    var idIW = L.popup();
	var content = '<span><b>Shape Name</b></span><br/><input id="shapeName" type="text"/><br/><br/><span><b>Shape Description<b/></span><br/><textarea id="shapeDesc" cols="25" rows="5"></textarea><br/><br/><input type="button" id="okBtn" value="Save" onclick="saveIdIW()"/>';

    map.on('draw:created', function (e) {
        var type = e.layerType,
            layer = e.layer;
        drawnItems.addLayer(layer);

		idIW.setContent(content);

		//calculated based on the e.layertype
		if (type === "circle" || type ===  "marker" || type === "circlemarker") {
			idIW.setLatLng(layer.getLatLng()); 
		} else {
			idIW.setLatLng(layer.getCenter());
		}

		idIW.openOn(map);
    });

	function saveIdIW() {
		var sName = $('#shapeName').val();
		var sDesc = $('#shapeDesc').val();

		var drawings = drawnItems.getLayers();  //drawnItems is a container for the drawn objects
		drawings[drawings.length - 1].title = sName;
		drawings[drawings.length - 1].content = sDesc;

		if (idIW) {
			map.closePopup();
		}
	}    

    $.ajaxSetup({
  		headers: {
    		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  		}
	});

    // get json
	document.getElementById('export').onclick = function(e) {
        // Extract GeoJson from featureGroup
        var data = drawnItems.toGeoJSON();

        // Stringify the GeoJson
        var convertedData = JSON.stringify(data);

        console.log(convertedData);

        // Create export
        $.post("{{ action('EditorController@saveFile') }}", convertedData, console.log('success'));
    }

</script>

@endsection