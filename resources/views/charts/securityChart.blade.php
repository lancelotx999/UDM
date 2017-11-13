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
	div.tooltip {
		position: absolute;
		padding: 2px;
		font: 12px sans-serif;
		background: lightsteelblue;
		border: 1px;
		border-radius: 8px;
		pointer-events: none;
	}
	.arc text {
		font: 10px sans-serif;
		text-anchor: middle;
	}
	.arc path {
		stroke: #fff;
	}
</style>

<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="row">
			<div class="col-xs-3 col-sm-3 chart-filter">
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<hr />
						<h4 class="white-text"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;Filter Options:</h4>
						<hr />
						<div id='securityChartFilters'></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<div id='securityChartApplyButton'></div>
					</div>
				</div>
			</div>
			<div class="col-xs-8 col-sm-8">
				<hr />
				<h1>&nbsp;&nbsp;&nbsp;<i class="fa fa-line-chart" aria-hidden="true"></i>&nbsp;Security Log</h1>
				<hr />				
				<div id='securityChart'></div>
			</div>
		</div>
	</div>
</div>

<script>
	var securityLogs = null,
		dateMin = null,
		dateMax = null;

	createSecurityChart(securityLogs, new Date("01/01/2016"), new Date("12/31/2016"), 'All', 'All');

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
		var x = d3.scaleTime().rangeRound([0, width]),
			y = d3.scaleLinear().rangeRound([height, 0]),
		    z = d3.scaleOrdinal(d3.schemeCategory10);
		// Adds the svg canvas
		var svg = d3.select("#securityChart")
		    .append("svg")
	        .attr("width", width + margin.left + margin.right)
	        .attr("height", (height) + margin.top + margin.bottom)
	    	.append("g")
	        .attr("transform", "translate(" + margin.left + "," + margin.top + ")");
		// Define the div for the tooltip
		var tooltip = d3.select("#securityChart").append("div")
			.attr("class", "tooltip")
			.style("opacity", 0);
		// Define the line
		var line = d3.line()
			.x(function(d) { return x(d.date); })
			.y(function(d) { return y(d.transactionQuantity); });
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
		// console.log(securityLogs);
	    // Nest the entries by symbol
	    var securityLogsNest = d3.nest()
	        .key(function(d) {return d.roomId;})
	        .entries(securityLogs);
	    legendSpace = width/securityLogsNest.length; // spacing for the legend
		// Loop through each symbol / key
	    securityLogsNest.forEach(function(d,i) {
	        svg.append("path")
	            .attr("class", "line")
	            .style("stroke", function() { // Add the colours dynamically
	                return d.z = z(d.key); })
	            .attr("id", 'tag'+d.key.replace(/\s+/g, '')) // assign an ID
	            .attr("d", line(d.values));
			d.values.forEach(function(d2){
				svg.append("circle")
					.attr("r", 4)
					.data(d.values)
					.attr("cx", function() { return x(d2.date); })
					.attr("cy", function() { return y(d2.transactionQuantity); })
					.attr("id", 'circle'+d.key.replace(/\s+/g, '')) // assign an ID
					.style("fill", function() { // Add the colours dynamically
		                return d.z = z(d.key); })
					.on("mouseover", function() {
						tooltip.transition()
							.duration(200)
							.style("opacity", .9);
						tooltip.html("Room: " + d.key + "<br/>" + "<br/>" + "Date: " + getFormattedDate(d2.date) + "<br/>" + "<br/>" + "Entries: " + d2.transactionQuantity)
							.style("left", (d3.event.pageX / 1.5) + "px")
							.style("top", (d3.event.pageY / 10) + "px");
					})
					.on("mouseout", function(d) {
						tooltip.transition()
							.duration(500)
							.style("opacity", 0);
					});
			})
	        // Add the Legend
	        svg.append("text")
	            .attr("x", (legendSpace/2)+i*legendSpace)  // space legend
				.attr("y", (height*1.25) + (margin.bottom/2)+ 5)
	            .attr("class", "legend")    // style the legend
	            .style("fill", function() { // Add the colours dynamically
	                return d.z = z(d.key); })
	            .on("click", function(){
	                // Determine if current line is visible
	                var active   = d.active ? false : true,
	                newOpacity = active ? 0 : 1;
	                // Hide or show the elements based on the ID
					d3.select("#tag"+d.key.replace(/\s+/g, ''))
	                    .transition().duration(100)
	                    .style("opacity", newOpacity);
					d3.selectAll("#circle"+d.key.replace(/\s+/g, ''))
	                    .transition().duration(100)
						.style("opacity", newOpacity)
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
		dateSlider += "<p class='white-text'>Date Range for Security Chart:&nbsp;</p>";
		dateSlider += "<p><input type='date-' id='date-securityChart'>";
		dateSlider += "</p>";
		dateSlider += "<div id='dateSlider-securityChart' style='width:85%;margin: auto;'></div></br>";
		var floorSelector = "";
		floorSelector += "<p class='white-text'>Floor For Security Chart:</p><p><select id='selectFloor-securityChart' size='1' style='width: 202px;'>";4
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
		floorSelector += "</select></p><hr />";
		var blockSelector = "";
		blockSelector += "<p class='white-text'>Buildings For Security Chart:</p><p><select id='selectBlock-securityChart' size='1' style='width: 202px;'>";4
		blockSelector += "<option value=All>All</option>";
		blockSelector += "<option value=A>A</option>";
		blockSelector += "<option value=B>B</option>";
		blockSelector += "<option value=E>E</option>";
		blockSelector += "<option value=G>G</option>";
		blockSelector += "<option value=L>L</option>";
		blockSelector += "</select></p><hr />";
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
		securityChartApplyButton.innerHTML = "<button><i class='fa fa-check' aria-hidden='true'></i>&nbsp;Apply Filter</button>";
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
