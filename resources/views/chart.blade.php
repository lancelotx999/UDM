@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://d3js.org/d3.v4.min.js"></script>

<style> /* set the CSS */

	.line {
	  fill: none;
	  stroke: steelblue;
	  stroke-width: 2px;
	}

</style>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div id='securityChart'>
		</div>
		<div id='securityChartFilters'>
		</div>
		<div id='securityChartApplyButton'>
		</div>
	</div>
</div>

<script>
	var securityLogs = null,
		dateMin = null,
		dateMax = null;

	createSecurityChart(securityLogs, dateMin, dateMax, 'All', 'All');

	function createSecurityChart(securityLogs, dateMin, dateMax, floor, block){
		var securityLogs = {!! json_encode($securityLogs->toArray()) !!};

		// parse the date / time
		var parseTime = d3.timeParse("%Y-%m-%d");

		// format the securityLogs
		securityLogs.forEach(function(d) {
			if (floor.toUpperCase() == 'ALL' && block.toUpperCase() == 'ALL') {
				d.roomId = d.roomId;
				d.block = d.roomId[0].toUpperCase();
				d.floor = d.roomId[1];
				d.transactionQuantity = +d.transactionQuantity;

				if (d.date instanceof Date) {
					d.date = d.date;
				}
				else {
					d.date = parseTime(d.date);
				}
			}
			if (floor.toUpperCase() == d.roomId[1] && block.toUpperCase() == 'ALL') {
				d.roomId = d.roomId;
				d.block = d.roomId[0].toUpperCase();
				d.floor = d.roomId[1];
				d.transactionQuantity = +d.transactionQuantity;

				if (d.date instanceof Date) {
					d.date = d.date;
				}
				else {
					d.date = parseTime(d.date);
				}
			}
			if (floor.toUpperCase() == 'ALL' && block.toUpperCase() == d.roomId[0].toUpperCase()) {
				d.roomId = d.roomId;
				d.block = d.roomId[0].toUpperCase();
				d.floor = d.roomId[1];
				d.transactionQuantity = +d.transactionQuantity;

				if (d.date instanceof Date) {
					d.date = d.date;
				}
				else {
					d.date = parseTime(d.date);
				}
			}
			else if(floor.toUpperCase() == d.roomId[1] && block.toUpperCase() == d.roomId[0].toUpperCase()){
				d.roomId = d.roomId;
				d.block = d.roomId[0].toUpperCase();
				d.floor = d.roomId[1];
				d.transactionQuantity = +d.transactionQuantity;

				if (d.date instanceof Date) {
					d.date = d.date;
				}
				else {
					d.date = parseTime(d.date);
				}
			}

		});


		// Set the dimensions of the canvas / graph
		var margin = {top: 30, right: 20, bottom: 70, left: 50},
		    width = 600 - margin.left - margin.right,
		    height = 300 - margin.top - margin.bottom;

		// Set the ranges
		var x = d3.scaleTime().range([0, width]);
		var y = d3.scaleLinear().range([height, 0]);

		// Define the line
		var line = d3.line()
		    .x(function(d) { return x(d.date); })
		    .y(function(d) { return y(d.transactionQuantity); });


		// Adds the svg canvas
		var svg = d3.select("#securityChart")
		    .append("svg")
	        .attr("width", width + margin.left + margin.right)
	        .attr("height", (height*1.4) + margin.top + margin.bottom)
	    	.append("g")
	        .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

		// Scale the range of the securityLogs
		if (dateMin != null && dateMin != undefined && dateMax != null && dateMax != undefined) {
			securityLogs = securityLogs.filter(function (d){
				return d.date >= dateMin;
			})

			securityLogs = securityLogs.filter(function (d){
				return d.date <= dateMax;
			})
			x.domain(d3.extent(securityLogs, function(d) { return d.date; }));
		}
		else {
			x.domain(d3.extent(securityLogs, function(d) { return d.date; }));
		}

	    y.domain([0, d3.max(securityLogs, function(d) { return d.transactionQuantity; })]);

	    // Nest the entries by symbol
	    var securityLogsNest = d3.nest()
	        .key(function(d) {return d.roomId;})
	        .entries(securityLogs);

	    // set the colour scale
	    var color = d3.scaleOrdinal(d3.schemeCategory10);

	    legendSpace = width/securityLogsNest.length; // spacing for the legend

		// Loop through each symbol / key
	    securityLogsNest.forEach(function(d,i) {
	        svg.append("path")
	            .attr("class", "line")
	            .style("stroke", function() { // Add the colours dynamically
	                return d.color = color(d.key); })
	            .attr("id", 'tag'+d.key.replace(/\s+/g, '')) // assign an ID
	            .attr("d", line(d.values));

	        // Add the Legend
	        svg.append("text")
	            .attr("x", (legendSpace/2)+i*legendSpace)  // space legend
	            .attr("y", (height*1.25) + (margin.bottom/2)+ 5)
	            .attr("class", "legend")    // style the legend
	            .style("fill", function() { // Add the colours dynamically
	                return d.color = color(d.key); })
	            .on("click", function(){
	                // Determine if current line is visible
	                var active   = d.active ? false : true,
	                newOpacity = active ? 0 : 1;
	                // Hide or show the elements based on the ID
	                d3.select("#tag"+d.key.replace(/\s+/g, ''))
	                    .transition().duration(100)
	                    .style("opacity", newOpacity);
	                // Update whether or not the elements are active
	                d.active = active;
	                })
	            .text(d.key);
	    });

		// Add the X Axis
		svg.append("g")
				.attr("class", "axis")
				.attr("transform", "translate(0," + height + ")")
				.call(d3.axisBottom(x)
					.tickFormat(d3.timeFormat("%d/%m/%Y")))
				.selectAll("text")
				.style("text-anchor", "end")
				.attr("dx", "-.8em")
				.attr("dy", ".15em")
				.attr("transform", "rotate(-65)");

		// Add the Y Axis
		svg.append("g")
		  .attr("class", "axis")
		  .call(d3.axisLeft(y));

		createSecurityChartFilters(securityLogs, dateMin, dateMax, 'All', 'All');
		createSecurityApplyButton(securityLogs);

	}

	function createSecurityChartFilters(securityLogs, dateMin, dateMax, floor, block){

		var dateSlider = "";

		dateSlider += "<p>Date Range for Security Chart : ";
		dateSlider += "<input type='date-' id='date-securityChart'>";
		dateSlider += "</p>";
		dateSlider += "<div id='dateSlider-securityChart' style='width:85%;margin: auto;'></div></br>";

		var floorSelector = "";
		floorSelector += "<p>Floor For Security Chart : <select id='selectFloor-securityChart' size='1' style='width: 202px;'>";4
		floorSelector += "<option value=All>All</option>";
		floorSelector += "<option value=G>G</option>";
		floorSelector += "<option value=1>1</option>";
		floorSelector += "<option value=2>2</option>";
		floorSelector += "<option value=3>3</option>";
		floorSelector += "<option value=4>4</option>";
		floorSelector += "<option value=5>5</option>";
		floorSelector += "<option value=6>6</option>";
		floorSelector += "<option value=7>7</option>";
		floorSelector += "<option value=8>8</option>";
		floorSelector += "<option value=9>9</option>";
		floorSelector += "</select></p></br>";

		var blockSelector = "";
		blockSelector += "<p>Buildings For Security Chart : <select id='selectBlock-securityChart' size='1' style='width: 202px;'>";4
		blockSelector += "<option value=All>All</option>";
		blockSelector += "<option value=A>A</option>";
		blockSelector += "<option value=B>B</option>";
		blockSelector += "<option value=E>E</option>";
		blockSelector += "<option value=G>G</option>";
		blockSelector += "<option value=L>L</option>";
		blockSelector += "</select></p></br>";



		document.getElementById('securityChartFilters').innerHTML = dateSlider + floorSelector + blockSelector;

		tempData = [];

		var securityLogs = {!! json_encode($securityLogs->toArray()) !!};

		// parse the date / time
		var parseTime = d3.timeParse("%Y-%m-%d");

		// format the securityLogs
		securityLogs.forEach(function(d) {
			d.roomId = d.roomId;
			d.block = d.roomId[0].toUpperCase();
			d.floor = d.roomId[1];
			d.transactionQuantity = +d.transactionQuantity;

			if (d.date instanceof Date) {
				d.date = d.date;
			}
			else {
				d.date = parseTime(d.date);
			}
		});

		securityLogs.forEach(function (d){
			tempData.push(d.date.getTime());
		});

		if (dateMin != null && dateMin != undefined && dateMax != null && dateMax != undefined) {
			$(function (){
				$("#dateSlider-securityChart").slider({
					range: true,
					min: Math.min.apply(null, tempData),
					max: Math.max.apply(null, tempData),
					values: [dateMin.getTime(), dateMax.getTime() ],
					slide: function( event, ui ) {
						dateMin = new Date(ui.values[0]);
						dateMax = new Date(ui.values[1]);

						$( "#date-securityChart").val(getFormattedDate(dateMin) + " - " + getFormattedDate(dateMax) );
					}
				});
			})
		}
		else {
			$(function (){
				$("#dateSlider-securityChart").slider({
					range: true,
					min: Math.min.apply(null, tempData),
					max: Math.max.apply(null, tempData),
					values: [Math.min.apply(null, tempData), Math.max.apply(null, tempData) ],
					slide: function( event, ui ) {
						var dateMin = new Date(ui.values[0]);
						var dateMax = new Date(ui.values[1]);

						$( "#date-securityChart").val(getFormattedDate(dateMin) + " - " + getFormattedDate(dateMax) );
					}
				});
			})
		}



	}


	function createSecurityApplyButton(securityLogs){

		document.getElementById("securityChartApplyButton").innerHTML = "";

		var securityChartApplyButton = document.createElement("securityChartApplyButton");

		securityChartApplyButton.innerHTML = "Apply Filter";

		document.getElementById("securityChartApplyButton").appendChild(securityChartApplyButton);

		securityChartApplyButton.addEventListener ("click", function() {
			console.log("---------- Submit Button Clicked ----------");
			console.log($("#dateSlider-securityChart").val());
			console.log($("#selectFloor-securityChart").val());
			console.log($("#selectBlock-securityChart").val());

			var min = new Date($("#dateSlider-securityChart").slider( "values", 0 )),
				max = new Date($("#dateSlider-securityChart").slider( "values", 1 )),
				floor = $("#selectFloor-securityChart").val(),
				block = $("#selectBlock-securityChart").val();

			document.getElementById("securityChart").innerHTML = "";

			createSecurityChart(securityLogs, min, max, floor, block)
		});
	}

	function getFormattedDate(date) {
		var year = date.getFullYear();

		var month = (1 + date.getMonth()).toString();
		month = month.length > 1 ? month : '0' + month;

		var day = date.getDate().toString();
		day = day.length > 1 ? day : '0' + day;

		return day + '/' + month + '/' + year;
	}
</script>

@endsection
