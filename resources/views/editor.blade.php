@extends('layouts.app')

@section('content')

<div class="row">

	<div id="map"></div>
	<button class="filter" id='export' data-toggle="modal" data-target="#myModal">
		<i class="fa fa-floppy-o" aria-hidden="true"></i>
	</button>

    <!-- Save Modal -->
    <div id="myModal" class="modal fade" role="dialog">

        <br /><br /><br /><br />

        <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Markers Saved</h4>
            </div>

            <div class="modal-body">
                <p>Your markers have been successfully saved!</p> 
                <p>The administrators will see them when they're around.</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>

        </div>
    </div>

    <div class="modal fade" id="firstLoad" role="dialog">

        <br /><br /><br /><br />

        <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">First Visit Instructions</h4>
            </div>
        
            <div class="modal-body">
                <p>Welcome to the Notes page, here are some basic steps that you can follow:</p> 
                <ol>
                    <li>Access the tools on the top left corner.</li>
                    <li>Place your marker on the desired location.</li>
                    <li>Enter a title and description for the marker, then save it.</li>
                    <li>Rinse, repeat step 1-3 until satisfied.</li>
                    <li>Click the floppy disk icon to save your markers.</li>
                </ol>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Got it!</button>
            </div>
        </div>

        </div>
    </div>

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
    	draw: {
             polygon: false,
             circle: false,
             rectangle: false,
             polyline: false,
             circlemarker: false
         },
        edit: {
            featureGroup: drawnItems
        }
    });

    map.addControl(drawControl);

    var idIW = L.popup();

    map.on('draw:created', function (e) {
        var type = e.layerType,
            layer = e.layer;

        var feature = layer.feature = layer.feature || {}; // Intialize layer.feature   

		feature.type = feature.type || "Feature"; // Intialize feature.type
    	var props = feature.properties = feature.properties || {}; // Intialize feature.properties
    		props.title = null;
    		props.content = null;

        drawnItems.addLayer(layer);

		var content = '<span><strong>Shape Name</strong></span><br/><input id="shapeName" type="text"/><br/><br/><span><strong>Shape Description<strong/></span><br/><textarea id="shapeDesc" cols="25" rows="5"></textarea><br/><br/><input type="button" id="okBtn" value="Save" onclick="saveIdIW()"/>'; 

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
		drawings[drawings.length - 1].feature.properties.title = sName;
		drawings[drawings.length - 1].feature.properties.content = sDesc;

		console.log(drawings[drawings.length - 1].feature.properties.title);
		console.log(drawings[drawings.length - 1].feature.properties.content);

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

    // first load modal
    $(window).on('load',function(){
        $('#firstLoad').modal('show');
    });

</script>

@endsection