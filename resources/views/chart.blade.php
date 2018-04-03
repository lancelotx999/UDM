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

	#securityChart,
	#enrollmentChart {
		height: 20vh;
	}

</style>

<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="row">
			<div class="col-sm-3 col-xs-3 chart-filter">
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<hr />
						<h4 class="white-text"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;Filter Options:</h4>
						<hr />
						<div id='populationChartFilters'></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<div id='populationChartApplyButton'></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-8 col-xs-8">
				<hr />
				<h1>&nbsp;&nbsp;&nbsp;<i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;Population Statistics by Boroughs</h1>
				<hr />
				<div id='populationChart'></div>
			</div>
		</div>
	</div>
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
				<h1>&nbsp;&nbsp;&nbsp;<i class="fa fa-line-chart" aria-hidden="true"></i>&nbsp;Water Consumption in New York City</h1>
				<hr />
				<div id='securityChart'></div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12">
		<div class="row">
			<div class="col-xs-3 col-sm-3 chart-filter">
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<hr />
						<h4 class="white-text"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;Filter Options:</h4>
						<hr />
						<div id='clubRecruitmentChartFilters'></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<div id='clubRecruitmentChartApplyButton'></div>
					</div>
				</div>
			</div>
			<div class="col-xs-8 col-sm-8">
				<hr />
				<h1>&nbsp;&nbsp;&nbsp;<i class="fa fa-pie-chart" aria-hidden="true"></i>&nbsp;Club Recruitment Data</h1>
				<hr />
				<div id='clubRecruitmentChart'></div>
			</div>
		</div>
	</div>
</div>

<script>
	var securityLogs = null,
		enrollmentData = null,
		clubRecruitmentData = null,
		populationData = null;
		dateMin = null,
		dateMax = null;

	createPopulationChart(populationData, new Date("01/01/2000"), new Date("01/01/2040"));

	// new Date("01/01/2015"), new Date("12/31/2015")
	// createSecurityChart(securityLogs, new Date("01/01/2016"), new Date("12/31/2016"), 'All', 'All');
    //
	// createEnrollmentChart(enrollmentData, ['2016'], ['All']);
    //
	// createClubRecruitmentChart(clubRecruitmentData, "2016", "2");

	// function createSecurityChart(securityLogs, dateMin, dateMax, floor, block){
	// 	var securityLogs = {!! json_encode($securityLogs->toArray()) !!};
    //
	// 	// parse the date / time
	// 	var parseTime = d3.timeParse("%Y-%m-%d");
    //
	// 	// format the securityLogs
	// 	securityLogs.forEach(function(d) {
	// 		if (floor.toUpperCase() == 'ALL' && block.toUpperCase() == 'ALL') {
	// 			d.roomId = d.roomId;
	// 			d.block = d.roomId[0].toUpperCase();
	// 			d.floor = d.roomId[1];
	// 			d.transactionQuantity = +d.transactionQuantity;
    //
	// 			if (d.date instanceof Date) {
	// 				d.date = d.date;
	// 			}
	// 			else {
	// 				d.date = parseTime(d.date);
	// 			}
	// 		}
	// 		if (floor.toUpperCase() == d.roomId[1] && block.toUpperCase() == 'ALL') {
	// 			d.roomId = d.roomId;
	// 			d.block = d.roomId[0].toUpperCase();
	// 			d.floor = d.roomId[1];
	// 			d.transactionQuantity = +d.transactionQuantity;
    //
	// 			if (d.date instanceof Date) {
	// 				d.date = d.date;
	// 			}
	// 			else {
	// 				d.date = parseTime(d.date);
	// 			}
	// 		}
	// 		if (floor.toUpperCase() == 'ALL' && block.toUpperCase() == d.roomId[0].toUpperCase()) {
	// 			d.roomId = d.roomId;
	// 			d.block = d.roomId[0].toUpperCase();
	// 			d.floor = d.roomId[1];
	// 			d.transactionQuantity = +d.transactionQuantity;
    //
	// 			if (d.date instanceof Date) {
	// 				d.date = d.date;
	// 			}
	// 			else {
	// 				d.date = parseTime(d.date);
	// 			}
	// 		}
	// 		else if(floor.toUpperCase() == d.roomId[1] && block.toUpperCase() == d.roomId[0].toUpperCase()){
	// 			d.roomId = d.roomId;
	// 			d.block = d.roomId[0].toUpperCase();
	// 			d.floor = d.roomId[1];
	// 			d.transactionQuantity = +d.transactionQuantity;
    //
	// 			if (d.date instanceof Date) {
	// 				d.date = d.date;
	// 			}
	// 			else {
	// 				d.date = parseTime(d.date);
	// 			}
	// 		}
    //
	// 	});
    //
	// 	// Set the dimensions of the canvas / graph
	// 	var margin = {top: 30, right: 20, bottom: 70, left: 50},
	// 	    width = 600 - margin.left - margin.right,
	// 	    height = 300 - margin.top - margin.bottom;
    //
	// 	// Set the ranges
	// 	var x = d3.scaleTime().rangeRound([0, width]),
	// 		y = d3.scaleLinear().rangeRound([height, 0]),
	// 	    z = d3.scaleOrdinal(d3.schemeCategory10);
    //
	// 	// Adds the svg canvas
	// 	var svg = d3.select("#securityChart")
	// 	    .append("svg")
	//         .attr("width", width + margin.left + margin.right)
	//         .attr("height", (height) + margin.top + margin.bottom)
	//     	.append("g")
	//         .attr("transform", "translate(" + margin.left + "," + margin.top + ")");
    //
	// 	// Define the div for the tooltip
	// 	var tooltip = d3.select("#securityChart").append("div")
	// 		.attr("class", "tooltip")
	// 		.style("opacity", 0);
    //
	// 	// Define the line
	// 	var line = d3.line()
	// 		.x(function(d) { return x(d.date); })
	// 		.y(function(d) { return y(d.transactionQuantity); });
    //
	// 	// Scale the range of the securityLogs
	// 	if (dateMin != null && dateMin != undefined && dateMax != null && dateMax != undefined) {
	// 		securityLogs = securityLogs.filter(function (d){
	// 			return d.date >= dateMin;
	// 		})
    //
	// 		securityLogs = securityLogs.filter(function (d){
	// 			return d.date <= dateMax;
	// 		})
	// 		x.domain(d3.extent(securityLogs, function(d) { return d.date; }));
	// 	}
	// 	else {
	// 		x.domain(d3.extent(securityLogs, function(d) { return d.date; }));
	// 	}
    //
	//     y.domain([0, d3.max(securityLogs, function(d) { return d.transactionQuantity; })]);
    //
	// 	// console.log(securityLogs);
    //
	//     // Nest the entries by symbol
	//     var securityLogsNest = d3.nest()
	//         .key(function(d) {return d.roomId;})
	//         .entries(securityLogs);
    //
	//     legendSpace = width/securityLogsNest.length; // spacing for the legend
    //
	// 	// Loop through each symbol / key
	//     securityLogsNest.forEach(function(d,i) {
	//         svg.append("path")
	//             .attr("class", "line")
	//             .style("stroke", function() { // Add the colours dynamically
	//                 return d.z = z(d.key); })
	//             .attr("id", 'tag'+d.key.replace(/\s+/g, '')) // assign an ID
	//             .attr("d", line(d.values));
    //
	// 		d.values.forEach(function(d2){
	// 			svg.append("circle")
	// 				.attr("r", 4)
	// 				.data(d.values)
	// 				.attr("cx", function() { return x(d2.date); })
	// 				.attr("cy", function() { return y(d2.transactionQuantity); })
	// 				.attr("id", 'circle'+d.key.replace(/\s+/g, '')) // assign an ID
	// 				.style("fill", function() { // Add the colours dynamically
	// 	                return d.z = z(d.key); })
	// 				.on("mouseover", function() {
	// 					tooltip.transition()
	// 						.duration(200)
	// 						.style("opacity", .9);
    //
	// 					tooltip.html("Room: " + d.key + "<br/>" + "<br/>" + "Date: " + getFormattedDate(d2.date) + "<br/>" + "<br/>" + "Entries: " + d2.transactionQuantity)
	// 						.style("left", (d3.event.pageX / 1.5) + "px")
	// 						.style("top", (d3.event.pageY / 10) + "px");
	// 				})
	// 				.on("mouseout", function(d) {
	// 					tooltip.transition()
	// 						.duration(500)
	// 						.style("opacity", 0);
	// 				});
	// 		})
    //
	//         // Add the Legend
	//         svg.append("text")
	//             .attr("x", (legendSpace/2)+i*legendSpace)  // space legend
	// 			.attr("y", (height*1.25) + (margin.bottom/2)+ 5)
	//             .attr("class", "legend")    // style the legend
	//             .style("fill", function() { // Add the colours dynamically
	//                 return d.z = z(d.key); })
	//             .on("click", function(){
	//                 // Determine if current line is visible
	//                 var active   = d.active ? false : true,
	//                 newOpacity = active ? 0 : 1;
	//                 // Hide or show the elements based on the ID
	// 				d3.select("#tag"+d.key.replace(/\s+/g, ''))
	//                     .transition().duration(100)
	//                     .style("opacity", newOpacity);
    //
	// 				d3.selectAll("#circle"+d.key.replace(/\s+/g, ''))
	//                     .transition().duration(100)
	// 					.style("opacity", newOpacity)
	//                 // Update whether or not the elements are active
	//                 d.active = active;
	//                 })
	//             .text(d.key);
	//     });
    //
    //
	// 	// Add the X Axis
	// 	svg.append("g")
	// 			.attr("class", "axis")
	// 			.attr("transform", "translate(0," + height + ")")
	// 			.call(d3.axisBottom(x)
	// 				.tickFormat(d3.timeFormat("%d/%m/%Y")))
	// 			.selectAll("text")
	// 			.style("text-anchor", "end")
	// 			.attr("dx", "-.8em")
	// 			.attr("dy", ".15em")
	// 			.attr("transform", "rotate(-65)");
    //
	// 	// Add the Y Axis
	// 	svg.append("g")
	// 	  .attr("class", "axis")
	// 	  .call(d3.axisLeft(y));
    //
	// 	createSecurityChartFilters(securityLogs, dateMin, dateMax, 'All', 'All');
	// 	createSecurityApplyButton(securityLogs);
    //
	// }

	// function createSecurityChartFilters(securityLogs, dateMin, dateMax, floor, block){
	// 	var dateSlider = "";
    //
	// 	dateSlider += "<p class='white-text'>Date Range for Security Chart:&nbsp;</p>";
	// 	dateSlider += "<p><input type='date-' id='date-securityChart'>";
	// 	dateSlider += "</p>";
	// 	dateSlider += "<div id='dateSlider-securityChart' style='width:85%;margin: auto;'></div></br>";
    //
	// 	var floorSelector = "";
	// 	floorSelector += "<p class='white-text'>Floor For Security Chart:</p><p><select id='selectFloor-securityChart' size='1' style='width: 202px;'>";4
	// 	floorSelector += "<option value=All>All</option>";
	// 	floorSelector += "<option value=G>G</option>";
	// 	floorSelector += "<option value=1>1</option>";
	// 	floorSelector += "<option value=2>2</option>";
	// 	floorSelector += "<option value=3>3</option>";
	// 	floorSelector += "<option value=4>4</option>";
	// 	floorSelector += "<option value=5>5</option>";
	// 	floorSelector += "<option value=6>6</option>";
	// 	floorSelector += "<option value=7>7</option>";
	// 	floorSelector += "<option value=8>8</option>";
	// 	floorSelector += "<option value=9>9</option>";
	// 	floorSelector += "</select></p><hr />";
	// 	var blockSelector = "";
	// 	blockSelector += "<p class='white-text'>Buildings For Security Chart:</p><p><select id='selectBlock-securityChart' size='1' style='width: 202px;'>";4
	// 	blockSelector += "<option value=All>All</option>";
	// 	blockSelector += "<option value=A>A</option>";
	// 	blockSelector += "<option value=B>B</option>";
	// 	blockSelector += "<option value=E>E</option>";
	// 	blockSelector += "<option value=G>G</option>";
	// 	blockSelector += "<option value=L>L</option>";
	// 	blockSelector += "</select></p><hr />";
    //
	// 	document.getElementById('securityChartFilters').innerHTML = dateSlider + floorSelector + blockSelector;
    //
	// 	tempData = [];
    //
	// 	var securityLogs = {!! json_encode($securityLogs->toArray()) !!};
    //
	// 	// parse the date / time
	// 	var parseTime = d3.timeParse("%Y-%m-%d");
    //
	// 	// format the securityLogs
	// 	securityLogs.forEach(function(d) {
	// 		d.roomId = d.roomId;
	// 		d.block = d.roomId[0].toUpperCase();
	// 		d.floor = d.roomId[1];
	// 		d.transactionQuantity = +d.transactionQuantity;
    //
	// 		if (d.date instanceof Date) {
	// 			d.date = d.date;
	// 		}
	// 		else {
	// 			d.date = parseTime(d.date);
	// 		}
	// 	});
    //
	// 	securityLogs.forEach(function (d){
	// 		tempData.push(d.date.getTime());
	// 	});
    //
	// 	if (dateMin != null && dateMin != undefined && dateMax != null && dateMax != undefined) {
	// 		$(function (){
	// 			$("#dateSlider-securityChart").slider({
	// 				range: true,
	// 				min: Math.min.apply(null, tempData),
	// 				max: Math.max.apply(null, tempData),
	// 				values: [dateMin.getTime(), dateMax.getTime() ],
	// 				slide: function( event, ui ) {
	// 					dateMin = new Date(ui.values[0]);
	// 					dateMax = new Date(ui.values[1]);
    //
    //
	// 					$( "#date-securityChart").val(getFormattedDate(dateMin) + " - " + getFormattedDate(dateMax) );
	// 				}
	// 			});
	// 		})
	// 	}
	// 	else {
	// 		$(function (){
	// 			$("#dateSlider-securityChart").slider({
	// 				range: true,
	// 				min: Math.min.apply(null, tempData),
	// 				max: Math.max.apply(null, tempData),
	// 				values: [Math.min.apply(null, tempData), Math.max.apply(null, tempData) ],
	// 				slide: function( event, ui ) {
	// 					var dateMin = new Date(ui.values[0]);
	// 					var dateMax = new Date(ui.values[1]);
    //
	// 					$( "#date-securityChart").val(getFormattedDate(dateMin) + " - " + getFormattedDate(dateMax) );
	// 				}
	// 			});
	// 		})
	// 	}
	// }

	// function createSecurityApplyButton(securityLogs){
    //
	// 	document.getElementById("securityChartApplyButton").innerHTML = "";
    //
	// 	var securityChartApplyButton = document.createElement("securityChartApplyButton");
    //
	// 	securityChartApplyButton.innerHTML = "<button><i class='fa fa-check' aria-hidden='true'></i>&nbsp;Apply Filter</button>";
    //
	// 	document.getElementById("securityChartApplyButton").appendChild(securityChartApplyButton);
    //
	// 	securityChartApplyButton.addEventListener ("click", function() {
	// 		console.log("---------- Submit Button Clicked ----------");
	// 		console.log($("#dateSlider-securityChart").val());
	// 		console.log($("#selectFloor-securityChart").val());
	// 		console.log($("#selectBlock-securityChart").val());
    //
	// 		var min = new Date($("#dateSlider-securityChart").slider( "values", 0 )),
	// 			max = new Date($("#dateSlider-securityChart").slider( "values", 1 )),
	// 			floor = $("#selectFloor-securityChart").val(),
	// 			block = $("#selectBlock-securityChart").val();
    //
	// 		document.getElementById("securityChart").innerHTML = "";
    //
	// 		createSecurityChart(securityLogs, min, max, floor, block)
	// 	});
	// }

	// function createEnrollmentChart(enrollmentData, year, semester){
	// 	var enrollmentData = {!! json_encode($enrollmentData->toArray()) !!};
	// 	var faculty = ["business", "engineering", "design", "computing"];
    //
	// 	// format the enrollmentData
	// 	enrollmentData.forEach(function(d){
	// 		d.found = false;
	// 		d.year = d.year;
	// 		d.semester = d.semester;
	// 		d.computing = +d.computing;
	// 		d.design = +d.design;
	// 		d.business = +d.business;
	// 		d.engineering = +d.engineering;
	// 		d.total = d.computing + d.engineering + d.design + d.business;
	// 		d.data = {computing: +d.computing, design: +d.design, business: +d.business, engineering: +d.engineering};
    //
	// 	})
    //
	// 	// Prepare the data for filtering
	// 	enrollmentData.forEach(function(d){
	// 		if (year.includes("All") && semester.includes("All")) {
	// 			d.found = true;
	// 		}
	// 		else if (semester.includes("All")) {
	// 			year.forEach(function(x){
	// 				if (d.year == x) {
	// 					d.found = true;
    //
	// 				}
	// 			})
	// 		}
	// 		else if (year.includes("All")) {
	// 			semester.forEach(function(x){
	// 				if (d.semester == x) {
	// 					d.found = true;
    //
	// 				}
	// 			})
	// 		}
	// 		else {
	// 			year.forEach(function(x){
	// 				semester.forEach(function(y){
	// 					if (d.year == x && d.semester == y) {
	// 						d.found = true;
	// 					}
	// 				})
	// 			})
	// 		}
	// 	})
    //
	// 	// enrollmentData.sort(function(a, b) { return b.total - a.total; })
    //
	// 	// Set the dimensions of the canvas / graph
	// 	var margin = {top: 30, right: 20, bottom: 70, left: 50},
	// 	    width = 600 - margin.left - margin.right,
	// 	    height = 300 - margin.top - margin.bottom;
    //
	// 	// Set the ranges
	// 	// var x = d3.scaleTime().range([0, width]);
	// 	var x = d3.scaleBand().rangeRound([0, width]),
	// 		y = d3.scaleLinear().rangeRound([height, 0]),
	// 		z = d3.scaleOrdinal(d3.schemeCategory10);
    //
	// 	// Adds the svg canvas
	// 	var svg = d3.select("#enrollmentChart")
	// 	    .append("svg")
	//         .attr("width", width + margin.left + margin.right)
	//         .attr("height", height + margin.top + margin.bottom)
	//     	.append("g")
	//         .attr("transform", "translate(" + margin.left + "," + margin.top + ")");
    //
	// 	// Define the div for the tooltip
	// 	var tooltip = d3.select("#enrollmentChart").append("div")
	// 		.attr("class", "tooltip")
	// 		.style("opacity", 0);
    //
	// 	// Define the stack
	// 	var stack = d3.stack()
	// 		.keys(faculty);
	// 		// .order(d3.stackOrderNone)
	// 		// .offset(d3.stackOffsetNone);
    //
	// 	var preparedEnrollmentData = [];
    //
	// 	enrollmentData.forEach(function(d){
	// 		preparedEnrollmentData.push({computing: d.computing, business: d.business, design: d.design, engineering: d.engineering, key: d.year + " " + d.semester});
	// 	})
    //
	// 	var stackData = stack(preparedEnrollmentData);
    //
	// 	//Filter the data
	// 	enrollmentData = enrollmentData.filter(function (d){
	// 		return d.found;
	// 	})
    //
	// 	// Scale the range of the securityLogs
	// 	x.domain(enrollmentData.map(function(d) { return d.year + " " + d.semester; }));
	// 	y.domain([0, d3.max(enrollmentData, function(d) { return d.total})]).nice();
	// 	z.domain(faculty);
    //
	// 	svg.selectAll(".serie")
	// 		.data(stackData)
	// 		.enter().append("g")
	// 		.attr("class", "serie")
	// 		.attr("fill", function(d) { return z(d.key.toLowerCase()); })
	// 		.selectAll("rect")
	// 		.data(function(d){return d;})
	// 		.enter().append("rect")
	// 		.attr("x", function(d) { return x(d.data.key); })
	// 		.attr("y", function(d) {return y(d[1])})
	// 		.attr("height", function(d) { return y(d[0]) - y(d[1]); })
	// 		.on("mouseover", function(d) {
	// 			tooltip.transition()
	// 				.duration(200)
	// 				.style("opacity", .9);
    //
	// 			tooltip.html(
	// 				"Semester: " + d.data.key + "<br/>" + "<br/>" +
	// 				"Computing: " + d.data.computing + "<br/>" + "<br/>" +
	// 				"Engineering: " + d.data.engineering + "<br/>" + "<br/>" +
	// 				"Design: " + d.data.design + "<br/>" + "<br/>" +
	// 				"Business: " + d.data.business + "<br/>" + "<br/>" +
	// 				"Total: " + (d.data.computing + d.data.engineering + d.data.design + d.data.business) + "<br/>" + "<br/>"
	// 			)
	// 				.style("left", (d3.event.pageX / 1.5) + "px")
	// 				.style("top", (d3.event.pageY / 10) + "px");
	// 		})
	// 		.on("mouseout", function(d) {
	// 			tooltip.transition()
	// 				.duration(500)
	// 				.style("opacity", 0);
	// 		})
	// 		.attr("width", x.bandwidth());
    //
    //
	// 	svg.append("g")
	// 		.attr("class", "axis axis--x")
	// 		.attr("transform", "translate(0," + height + ")")
	// 		.call(d3.axisBottom(x))
	// 		.selectAll("text")
	// 		.style("text-anchor", "end")
	// 		.attr("dx", "-.8em")
	// 		.attr("dy", ".15em")
	// 		.attr("transform", "rotate(-65)");
    //
	// 	svg.append("g")
	// 		.attr("class", "axis axis--y")
	// 		.call(d3.axisLeft(y).ticks(null, "s"))
	// 		.append("text")
	// 		.attr("x", 2)
	// 		.attr("y", y(y.ticks(10).pop()))
	// 		.attr("dy", "0.35em")
	// 		.attr("text-anchor", "start")
	// 		.attr("fill", "#000")
	// 		.text("Students");
    //
	// 	var legend = svg.selectAll(".legend")
	// 		.data(faculty.reverse())
	// 		.enter().append("g")
	// 		.attr("class", "legend")
	// 		.attr("transform", function(d, i) { return "translate(0," + i * 20 + ")"; })
	// 		.style("font", "10px sans-serif");
    //
	// 	legend.append("rect")
	// 		.attr("x", width + 18)
	// 		.attr("width", 18)
	// 		.attr("height", 18)
	// 		.attr("fill", z);
    //
	// 	legend.append("text")
	// 		.attr("x", width + 44)
	// 		.attr("y", 9)
	// 		.attr("dy", ".35em")
	// 		.attr("text-anchor", "start")
	// 		.text(function(d) { return d; });
    //
	// 	createEnrollmentChartFilters(enrollmentData, 'All', 'All');
    //
	// 	createEnrollmentApplyButton(enrollmentData);
    //
	// }

	// function createEnrollmentChartFilters(enrollmentData, year, semester){
	// 	var yearSelector = "";
	// 	yearSelector += "<p class='white-text'>Year For Enrollment Chart:</p><p><select id='selectYear-enrollmentChart' multiple size='5' style='width: 202px;'>";4
	// 	yearSelector += "<option value=All selected>All</option>";
	// 	yearSelector += "<option value=2016>2016</option>";
	// 	yearSelector += "<option value=2015>2015</option>";
	// 	yearSelector += "<option value=2014>2014</option>";
	// 	yearSelector += "<option value=2013>2013</option>";
	// 	yearSelector += "<option value=2012>2012</option>";
	// 	yearSelector += "<option value=2011>2011</option>";
	// 	yearSelector += "<option value=2010>2010</option>";
	// 	yearSelector += "<option value=2009>2009</option>";
	// 	yearSelector += "<option value=2008>2008</option>";
	// 	yearSelector += "<option value=2007>2007</option>";
	// 	yearSelector += "<option value=2006>2006</option>";
	// 	yearSelector += "<option value=2005>2005</option>";
	// 	yearSelector += "<option value=2004>2004</option>";
	// 	yearSelector += "<option value=2003>2003</option>";
	// 	yearSelector += "<option value=2002>2002</option>";
	// 	yearSelector += "<option value=2001>2001</option>";
	// 	yearSelector += "<option value=2000>2000</option>";
	// 	yearSelector += "</select></p><hr />";
    //
	// 	var semesterSelector = "";
	// 	semesterSelector += "<p class='white-text'>Semester For Enrollment Chart:</p><p><select id='selectSemester-enrollmentChart' multiple size='5' style='width: 202px;'>";4
	// 	semesterSelector += "<option value=All selected>All</option>";
	// 	semesterSelector += "<option value=1>1</option>";
	// 	semesterSelector += "<option value=2>2</option>";
	// 	semesterSelector += "<option value=Winter>Winter</option>";
	// 	semesterSelector += "<option value=Summer>Summer</option>";
	// 	semesterSelector += "</select></p><hr />";
    //
	// 	document.getElementById('enrollmentChartFilters').innerHTML = yearSelector + semesterSelector;
    //
	// }

	// function createEnrollmentApplyButton(enrollmentData){
	// 	document.getElementById("enrollmentChartApplyButton").innerHTML = "";
    //
	// 	var enrollmentChartApplyButton = document.createElement("enrollmentChartApplyButton");
    //
	// 	enrollmentChartApplyButton.innerHTML = "<button><i class='fa fa-check' aria-hidden='true'></i>&nbsp;Apply Filter</button>";
    //
	// 	document.getElementById("enrollmentChartApplyButton").appendChild(enrollmentChartApplyButton);
    //
	// 	enrollmentChartApplyButton.addEventListener ("click", function() {
	// 		console.log("---------- Submit Button Clicked ----------");
	// 		console.log($("#selectYear-enrollmentChart").val());
	// 		console.log($("#selectSemester-enrollmentChart").val());
    //
	// 		var year = $("#selectYear-enrollmentChart").val(),
	// 			semester = $("#selectSemester-enrollmentChart").val();
    //
	// 		document.getElementById("enrollmentChart").innerHTML = "";
    //
	// 		createEnrollmentChart(enrollmentData, year, semester);
	// 	});
    //
	// }

	// function createClubRecruitmentChart(clubRecruitmentData, year, semester){
	// 	var clubRecruitmentData = {!! json_encode($clubRecruitmentData->toArray()) !!};
    //
	// 	// parse the date / time
	// 	var parseTime = d3.timeParse("%Y-%m-%d");
    //
	// 	// Set the dimensions of the canvas / graph
	// 	var margin = {top: 30, right: 20, bottom: 70, left: 50},
	// 	    width = 600 - margin.left - margin.right,
	// 	    height = 600 - margin.top - margin.bottom,
	// 		radius = Math.min(width, height) / 2;
    //
	// 	// Adds the svg canvas
	// 	var svg = d3.select("#clubRecruitmentChart")
	// 	    .append("svg")
	//         .attr("width", width + margin.left + margin.right)
	//         .attr("height", (height) + margin.top + margin.bottom)
	//     	.append("g")
	//         .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");
    //
	// 	// Define the div for the tooltip
	// 	var tooltip = d3.select("#clubRecruitmentChart").append("div")
	// 		.attr("class", "tooltip")
	// 		.style("opacity", 0);
    //
	// 	var color = d3.scaleOrdinal(d3.schemeCategory20);
    //
	// 	var arc = d3.arc()
	// 		.outerRadius(radius - 10)
	// 		.innerRadius(0);
    //
	// 	var labelArc = d3.arc()
	// 		.outerRadius(radius - 40)
	// 		.innerRadius(radius - 40);
    //
	// 	var pie = d3.pie()
	// 	    .sort(null)
	// 	    .value(function(d) { return d.numberOfMembers; });
    //
	// 	var keys = [];
    //
	// 	clubRecruitmentData.forEach(function(d, i){
	// 		// console.log("--------------------------");
	// 		// console.log(d.year);
	// 		// console.log(d.semester);
	// 		// console.log(d.clubName);
	// 		// console.log(d.numberOfMembers);
	// 		d.year = +d.year;
	// 		d.semester = +d.semester;
	// 		d.clubName = d.clubName;
	// 		d.numberOfMembers = +d.numberOfMembers;
	// 		d.key = d.year + " " + d.semester;
    //
	// 		// if (i > 0) {
	// 		// 	if(d.key == clubRecruitmentData[i-1].key){
	// 		// 		tempTotal = tempTotal + d.numberOfMembers;
	// 		// 	}
	// 		// 	else if(d.key != clubRecruitmentData[i-1].key)
	// 		// 	{
	// 		// 		sumTotal.push({key:clubRecruitmentData[i-1].key, total: tempTotal});
	// 		// 		tempTotal = +d.numberOfMembers;
	// 		// 	}
	// 		// }
	// 		// else {
	// 		// 	tempTotal = +d.numberOfMembers;
	// 		// }
	// 		if (!keys.includes(d.key)) {
	// 			keys.push(d.key)
	// 		}
    //
    //
    //
	// 	})
    //
	// 	var filteredData = [];
    //
	// 	clubRecruitmentData.forEach(function(d){
	// 		if (d.year == year && d.semester == semester) {
	// 			filteredData.push({year: d.year,semester: d.semester,clubName: d.clubName,numberOfMembers: +d.numberOfMembers,key: d.year + " " + d.semester});
    //
	// 		}
	// 	})
    //
	// 	g = svg.selectAll(".arc")
	// 		.data(pie(filteredData))
	// 		.enter().append("g")
	// 		.attr("class", "arc");
    //
	// 	g.append("path")
	// 		.attr("d", arc)
	// 		.style("fill", function(d) { return color(d.data.clubName); })
	// 		.on("mouseover", function(d) {
	// 			tooltip.transition()
	// 				.duration(200)
	// 				.style("opacity", .9);
    //
	// 			tooltip.html(
	// 				"Club Name: " + d.data.clubName + "<br/>" + "<br/>" +
	// 				"Number of Members: " + d.data.numberOfMembers + "<br/>" + "<br/>" +
	// 				"Year: " + d.data.year + "<br/>" + "<br/>" +
	// 				"Semester: " + d.data.semester + "<br/>" + "<br/>"
	// 			)
	// 				.style("left", (d3.event.pageX / 1.5) + "px")
	// 				.style("top", (d3.event.pageY / 10) + "px");
	// 		})
	// 		.on("mouseout", function(d) {
	// 			tooltip.transition()
	// 				.duration(500)
	// 				.style("opacity", 0);
	// 		});
    //
	// 	g.append("text")
	// 		.attr("transform", function(d) { return "translate(" + labelArc.centroid(d) + ")"; })
	// 		.attr("dy", ".35em")
	// 		.text(function(d) { return d.data.numberOfMembers; });
    //
	// 	var legend = svg.selectAll(".legend")
	// 		.data(pie(filteredData))
	// 		.enter().append("g")
	// 		.attr("class", "legend")
	// 		.attr("transform", function(d, i) { return "translate(0," + i * 20 + ")"; })
	// 		.style("font", "10px sans-serif");
    //
	// 	legend.append("rect")
	// 		.attr("x", (width/2)+10)
	// 		.attr("y", (-height/2))
	// 		.attr("width", 18)
	// 		.attr("height", 18)
	// 		.attr("fill", function(d){ return color(d.data.clubName)});
    //
	// 	legend.append("text")
	// 		.attr("x", width/1.75)
	// 		.attr("y", (-height/2)+9)
	// 		.attr("dy", ".35em")
	// 		.attr("text-anchor", "start")
	// 		.text(function(d) { return d.data.clubName; });
    //
	// 	createClubRecruitmentFilters(clubRecruitmentData, 'All', 'All');
    //
	// 	createClubRecruitmentApplyButton(clubRecruitmentData);
    //
	// }

	// function createClubRecruitmentFilters(clubRecruitmentData, year, semester) {
	// 	var yearSelector = "";
	// 	yearSelector += "<p class='white-text'>Year For Enrollment Chart:</p><p><select id='selectYear-clubRecruitmentChart' style='width: 202px;'>";4
	// 	yearSelector += "<option value=2016>2016</option>";
	// 	yearSelector += "<option value=2015>2015</option>";
	// 	yearSelector += "<option value=2014>2014</option>";
	// 	yearSelector += "<option value=2013>2013</option>";
	// 	yearSelector += "<option value=2012>2012</option>";
	// 	yearSelector += "<option value=2011>2011</option>";
	// 	yearSelector += "<option value=2010>2010</option>";
	// 	yearSelector += "<option value=2009>2009</option>";
	// 	yearSelector += "<option value=2008>2008</option>";
	// 	yearSelector += "<option value=2007>2007</option>";
	// 	yearSelector += "<option value=2006>2006</option>";
	// 	yearSelector += "<option value=2005>2005</option>";
	// 	yearSelector += "<option value=2004>2004</option>";
	// 	yearSelector += "<option value=2003>2003</option>";
	// 	yearSelector += "<option value=2002>2002</option>";
	// 	yearSelector += "<option value=2001>2001</option>";
	// 	yearSelector += "<option value=2000>2000</option>";
	// 	yearSelector += "</select></p><hr />";
    //
	// 	var semesterSelector = "";
	// 	semesterSelector += "<p class='white-text'>Semester For Enrollment Chart:</p><p><select id='selectSemester-clubRecruitmentChart' style='width: 202px;'>";4
	// 	semesterSelector += "<option value=1>1</option>";
	// 	semesterSelector += "<option value=2>2</option>";
	// 	semesterSelector += "</select></p><hr />";
    //
	// 	document.getElementById('clubRecruitmentChartFilters').innerHTML = yearSelector + semesterSelector;
	// }

	// function createClubRecruitmentApplyButton(clubRecruitmentData){
	// 	document.getElementById("clubRecruitmentChartApplyButton").innerHTML = "";
    //
	// 	var clubRecruitmentChartApplyButton = document.createElement("clubRecruitmentChartApplyButton");
    //
	// 	clubRecruitmentChartApplyButton.innerHTML = "<button><i class='fa fa-check' aria-hidden='true'></i>&nbsp;Apply Filter</button>";
    //
	// 	document.getElementById("clubRecruitmentChartApplyButton").appendChild(clubRecruitmentChartApplyButton);
    //
	// 	clubRecruitmentChartApplyButton.addEventListener ("click", function() {
	// 		console.log("---------- Submit Button Clicked ----------");
	// 		console.log($("#selectYear-clubRecruitmentChart").val());
	// 		console.log($("#selectSemester-clubRecruitmentChart").val());
    //
	// 		var year = $("#selectYear-clubRecruitmentChart").val(),
	// 			semester = $("#selectSemester-clubRecruitmentChart").val();
    //
	// 		document.getElementById("clubRecruitmentChart").innerHTML = "";
    //
	// 		createClubRecruitmentChart(clubRecruitmentData, year, semester);
	// 	});
    //
	// }

	// function getFormattedDate(date) {
	// 	var year = date.getFullYear();
    //
	// 	var month = (1 + date.getMonth()).toString();
	// 	month = month.length > 1 ? month : '0' + month;
    //
	// 	var day = date.getDate().toString();
	// 	day = day.length > 1 ? day : '0' + day;
    //
	// 	return day + '/' + month + '/' + year;
	// }

	function createPopulationChart(populationData, dateMin, dateMax){
		// console.log("---------- createVehicleCollisionChart ----------");
		// console.log(createVehicleCollisionChart);
		// console.log("---------- createVehicleCollisionChart ----------");

		// Set the dimensions of the canvas / graph
		var margin = {top: 30, right: 20, bottom: 70, left: 50},
			width = 600 - margin.left - margin.right,
			height = 300 - margin.top - margin.bottom;

		// Adds the svg canvas
		var svg = d3.select("#populationChart")
			.append("svg")
			.attr("width", width + margin.left + margin.right)
			.attr("height", height + margin.top + margin.bottom)
			.append("g")
			.attr("transform", "translate(" + margin.left + "," + margin.top + ")");

		// Define the div for the tooltip
		var tooltip = d3.select("#populationChart").append("div")
			.attr("class", "tooltip")
			.style("opacity", 0);

		var populationData = [];
		var boroughs = [];

		d3.csv("data/NYC-bigData/New_York_City_Population_by_Borough__1950_-_2040.csv", function (data){
			// console.log("---------- data ----------");
			// console.log(data);
			// console.log("---------- data ----------");

			data.forEach(function (d){
				if (boroughs.indexOf(d.Borough) == -1) {
					boroughs.push(d.Borough)
				}
				// console.log("---------- d ----------");
				// console.log(d);
				// console.log("---------- d ----------");

				// console.log("---------- d ----------");
				// console.log(d);
				// console.log("---------- d ----------");

				populationData.push({boroughName: d.Borough, date: new Date("1970"), population: d.population1970});
				populationData.push({boroughName: d.Borough, date: new Date("1980"), population: d.population1980});
				populationData.push({boroughName: d.Borough, date: new Date("1990"), population: d.population1990});
				populationData.push({boroughName: d.Borough, date: new Date("2000"), population: d.population2000});
				populationData.push({boroughName: d.Borough, date: new Date("2010"), population: d.population2010});
				populationData.push({boroughName: d.Borough, date: new Date("2020"), population: d.population2020});
				populationData.push({boroughName: d.Borough, date: new Date("2030"), population: d.population2030});
				populationData.push({boroughName: d.Borough, date: new Date("2040"), population: d.population2040});
				// populationData.push()
				// Borough,CDNumber,CDName,1970Population,1980Population,1990Population,2000Population,2010Population


			})

			populationData.sort(function(a, b) { return b.population - a.population; });

			// console.log("---------- populationData ----------");
			// console.log(populationData);
			// console.log("---------- populationData ----------");
			// console.log("---------- boroughs ----------");
			// console.log(boroughs);
			// console.log("---------- boroughs ----------");

			// Set the ranges
			// var x = d3.scaleTime().range([0, width]);
			var x = d3.scaleBand().rangeRound([0, width]),
				y = d3.scaleLinear().rangeRound([height, 0]),
				z = d3.scaleOrdinal(d3.schemeCategory10);

			// var keys = data.columns.slice(3);

			// Scale the range of the data
			// x.domain(populationData.map(function(d) { return d.date.getFullYear(); }));
			y.domain([0, d3.max(populationData, function(d) { return d.population})]).nice();
			z.domain(boroughs);

			// Scale the range of the securityLogs
			if (dateMin != null && dateMin != undefined && dateMax != null && dateMax != undefined) {
				populationData = populationData.filter(function (d){
					return d.date >= dateMin;
				})

				populationData = populationData.filter(function (d){
					return d.date <= dateMax;
				})
				x.domain(d3.extent(populationData, function(d) { return d.date.getFullYear(); }));
			}
			else {
				x.domain(d3.extent(populationData, function(d) { return d.date.getFullYear(); }));
			}

			// append the rectangles for the bar chart
			svg.selectAll(".bar")
				.data(populationData)
				.enter().append("rect")
				.attr("class", "bar")
				.attr("fill", function(d) { return z(d.boroughName); })
				.attr("x", function(d) { return x(d.date.getFullYear()); })
				.attr("width", x.bandwidth())
				.attr("y", function(d) { return y(d.population); })
				.attr("height", function(d) { return height - y(d.population); })
				.on("mouseover", function(d) {
					// console.log("---------- d ----------");
					// console.log(d);
					// console.log("---------- d ----------");
					tooltip.transition()
						.duration(200)
						.style("opacity", .9);

					tooltip.html(
						"Borough: " + d.boroughName + "<br/>" + "<br/>" +
						"Date: " + d.date.getFullYear() + "<br/>" + "<br/>" +
						"Population: " + d.population + "<br/>" + "<br/>"
					)
						.style("left", (d3.event.pageX / 1.5) + "px")
						.style("top", (d3.event.pageY / 10) + "px");
				})
				.on("mouseout", function(d) {
					tooltip.transition()
						.duration(500)
						.style("opacity", 0);
				});

			// add the x Axis
			svg.append("g")
				.attr("transform", "translate(0," + height + ")")
				.call(d3.axisBottom(x))
				.append("text")
				.attr("x", -10)
				.attr("y", 15)
				.attr("dy", "0.32em")
				.attr("fill", "#000")
				.attr("font-weight", "bold")
				.attr("text-anchor", "start")
				.text("Year");

			// add the y Axis
			svg.append("g")
				.call(d3.axisLeft(y))
				.append("text")
				.attr("x", 2)
				.attr("y", y(y.ticks().pop()) + 0.5)
				.attr("dy", "0.32em")
				.attr("fill", "#000")
				.attr("font-weight", "bold")
				.attr("text-anchor", "start")
				.text("Population");

			createPopulationFilter(populationData, new Date("01/01/1980"), new Date("01/01/2040"));
			createPopulationApplyButton(populationData, new Date("01/01/1980"), new Date("01/01/2040"));
		})


	}

	function createPopulationFilter(populationData, dateMin, dateMax){
		console.log("---------- populationData ----------");
		console.log(populationData);
		console.log("---------- populationData ----------");
		var dateSlider = "";

		dateSlider += "<p class='white-text'>Date Range for Population Chart:&nbsp;</p>";
		dateSlider += "<p><input type='date-' id='date-populationChart'></p>";
		dateSlider += "<div id='dateSlider-populationChart' style='width:85%;margin: auto;'></div></br>";

		document.getElementById('populationChartFilters').innerHTML = dateSlider;

		// parse the date / time
		var parseTime = d3.timeParse("%Y-%m-%d");

		tempData = [];

		populationData.forEach(function (d){
			tempData.push(d.date.getTime());
		});

		console.log("---------- tempData ----------");
		console.log(tempData);
		console.log("---------- tempData ----------");

		if (dateMin != null && dateMin != undefined && dateMax != null && dateMax != undefined) {
			$(function (){
				$("#dateSlider-populationChart").slider({
					range: true,
					min: Math.min.apply(null, tempData),
					max: Math.max.apply(null, tempData),
					values: [dateMin.getTime(), dateMax.getTime() ],
					slide: function( event, ui ) {
						dateMin = new Date(ui.values[0]);
						dateMax = new Date(ui.values[1]);

						// console.log(dateMin);
						// console.log(dateMax);


						$( "#date-populationChart").val((dateMin.getFullYear()) + " - " + (dateMax.getFullYear()) );
					}
				});
			})
		}
		else {
			$(function (){
				$("#dateSlider-populationChart").slider({
					range: true,
					min: Math.min.apply(null, tempData),
					max: Math.max.apply(null, tempData),
					values: [Math.min.apply(null, tempData), Math.max.apply(null, tempData) ],
					slide: function( event, ui ) {
						var dateMin = new Date(ui.values[0]);
						var dateMax = new Date(ui.values[1]);

						// console.log(dateMin);
						// console.log(dateMax);

						$( "#date-populationChart").val((dateMin.getFullYear()) + " - " + (dateMax.getFullYear()) );
					}
				});
			})
		}
	}

	function createPopulationApplyButton(populationData, dateMin, dateMax){
		document.getElementById("populationChartApplyButton").innerHTML = "";

		var populationChartApplyButton = document.createElement("populationChartApplyButton");

		populationChartApplyButton.innerHTML = "<button><i class='fa fa-check' aria-hidden='true'></i>&nbsp;Apply Filter</button>";

		document.getElementById("populationChartApplyButton").appendChild(populationChartApplyButton);

		populationChartApplyButton.addEventListener ("click", function() {
			console.log("---------- Submit Button Clicked ----------");
			console.log($("#dateSlider-populationChart").val());

			var min = new Date($("#dateSlider-populationChart").slider( "values", 0 )),
				max = new Date($("#dateSlider-populationChart").slider( "values", 1 ));

			console.log("---------- min ----------");
			console.log(min);
			console.log("---------- min ----------");
			console.log("---------- max ----------");
			console.log(max);
			console.log("---------- max ----------");


			document.getElementById("populationChart").innerHTML = "";

			createPopulationChart(populationData, min, max);
		});
	}
</script>

@endsection
