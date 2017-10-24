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
	<div class="col-xs-12 col-sm-12">
		<div id='enrollmentChart'>
		</div>
		<div id='enrollmentChartFilters'>
		</div>
		<div id='enrollmentChartApplyButton'>
		</div>
	</div>
</div>

<script>
	var securityLogs = null,
		enrollmentData = null,
		dateMin = null,
		dateMax = null;


	createSecurityChart(securityLogs, dateMin, dateMax, 'All', 'All');

	createEnrollmentChart(enrollmentData, ['All'], ['All']);

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
	        .attr("height", (height*1.2) + margin.top + margin.bottom)
	    	.append("g")
	        .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

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

	function createEnrollmentChart(enrollmentData, year, semester){
		var enrollmentData = {!! json_encode($enrollmentData->toArray()) !!};
		var faculty = ["business", "engineering", "design", "computing"];

		// format the enrollmentData
		enrollmentData.forEach(function(d){
			d.found = false;
			d.year = d.year;
			d.semester = d.semester;
			d.computing = +d.computing;
			d.design = +d.design;
			d.business = +d.business;
			d.engineering = +d.engineering;
			d.total = d.computing + d.engineering + d.design + d.business;
			d.data = {computing: +d.computing, design: +d.design, business: +d.business, engineering: +d.engineering};

		})

		console.log(enrollmentData);

		// Prepare the data for filtering
		enrollmentData.forEach(function(d){
			if (year.includes("All") && semester.includes("All")) {
				d.found = true;
			}
			else if (semester.includes("All")) {
				year.forEach(function(x){
					if (d.year == x) {
						d.found = true;

					}
				})
			}
			else if (year.includes("All")) {
				semester.forEach(function(x){
					if (d.semester == x) {
						d.found = true;

					}
				})
			}
			else {
				year.forEach(function(x){
					semester.forEach(function(y){
						if (d.year == x && d.semester == y) {
							d.found = true;
						}
					})
				})
			}
		})


		// enrollmentData.sort(function(a, b) { return b.total - a.total; })

		// Set the dimensions of the canvas / graph
		var margin = {top: 30, right: 20, bottom: 70, left: 50},
		    width = 600 - margin.left - margin.right,
		    height = 300 - margin.top - margin.bottom;

		// Set the ranges
		// var x = d3.scaleTime().range([0, width]);
		var x = d3.scaleBand().rangeRound([0, width]),
			y = d3.scaleLinear().rangeRound([height, 0]),
			z = d3.scaleOrdinal(d3.schemeCategory10);

		// Adds the svg canvas
		var svg = d3.select("#enrollmentChart")
		    .append("svg")
	        .attr("width", width + margin.left + margin.right)
	        .attr("height", height + margin.top + margin.bottom)
	    	.append("g")
	        .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

		// Define the stack
		var stack = d3.stack()
			.keys(faculty);
			// .order(d3.stackOrderNone)
			// .offset(d3.stackOffsetNone);

		var preparedEnrollmentData = [];

		enrollmentData.forEach(function(d){
			preparedEnrollmentData.push({computing: d.computing, business: d.business, design: d.design, engineering: d.engineering, key: d.year + " " + d.semester});
		})

		var stackData = stack(preparedEnrollmentData);

		//Filter the data
		enrollmentData = enrollmentData.filter(function (d){
			return d.found;
		})

		// Scale the range of the securityLogs
		x.domain(enrollmentData.map(function(d) { return d.year + " " + d.semester; }));
		y.domain([0, d3.max(enrollmentData, function(d) { return d.total})]).nice();
		z.domain(faculty);

		svg.selectAll(".serie")
			.data(stackData)
			.enter().append("g")
			.attr("class", "serie")
			.attr("fill", function(d) { return z(d.key.toLowerCase()); })
			.selectAll("rect")
			.data(function(d){return d;})
			.enter().append("rect")
			.attr("x", function(d) { return x(d.data.key); })
			.attr("y", function(d) {return y(d[1])})
			.attr("height", function(d) { return y(d[0]) - y(d[1]); })
			.attr("width", x.bandwidth());

			svg.append("g")
				.attr("class", "axis axis--x")
				.attr("transform", "translate(0," + height + ")")
				.call(d3.axisBottom(x))
				.selectAll("text")
				.style("text-anchor", "end")
				.attr("dx", "-.8em")
				.attr("dy", ".15em")
				.attr("transform", "rotate(-65)");

			svg.append("g")
				.attr("class", "axis axis--y")
				.call(d3.axisLeft(y).ticks(null, "s"))
				.append("text")
				.attr("x", 2)
				.attr("y", y(y.ticks(10).pop()))
				.attr("dy", "0.35em")
				.attr("text-anchor", "start")
				.attr("fill", "#000")
				.text("Students");

			var legend = svg.selectAll(".legend")
				.data(faculty.reverse())
				.enter().append("g")
				.attr("class", "legend")
				.attr("transform", function(d, i) { return "translate(0," + i * 20 + ")"; })
				.style("font", "10px sans-serif");

			legend.append("rect")
				.attr("x", width + 18)
				.attr("width", 18)
				.attr("height", 18)
				.attr("fill", z);

			legend.append("text")
				.attr("x", width + 44)
				.attr("y", 9)
				.attr("dy", ".35em")
				.attr("text-anchor", "start")
				.text(function(d) { return d; });

			createEnrollmentChartFilters(enrollmentData, 'All', 'All');

			createEnrollmentApplyButton(enrollmentData);

	}

	function createEnrollmentChartFilters(enrollmentData, year, semester){
		var yearSelector = "";
		yearSelector += "<p>Year For Enrollment Chart : <select id='selectYear-enrollmentChart' multiple size='5' style='width: 202px;'>";4
		yearSelector += "<option value=All selected>All</option>";
		yearSelector += "<option value=2016>2016</option>";
		yearSelector += "<option value=2015>2015</option>";
		yearSelector += "<option value=2014>2014</option>";
		yearSelector += "<option value=2013>2013</option>";
		yearSelector += "<option value=2012>2012</option>";
		yearSelector += "<option value=2011>2011</option>";
		yearSelector += "<option value=2010>2010</option>";
		yearSelector += "<option value=2009>2009</option>";
		yearSelector += "<option value=2008>2008</option>";
		yearSelector += "<option value=2007>2007</option>";
		yearSelector += "<option value=2006>2006</option>";
		yearSelector += "<option value=2005>2005</option>";
		yearSelector += "<option value=2004>2004</option>";
		yearSelector += "<option value=2003>2003</option>";
		yearSelector += "<option value=2002>2002</option>";
		yearSelector += "<option value=2001>2001</option>";
		yearSelector += "<option value=2000>2000</option>";
		yearSelector += "</select></p></br>";

		var semesterSelector = "";
		semesterSelector += "<p>Semester For Security Chart : <select id='selectSemester-enrollmentChart' multiple size='5' style='width: 202px;'>";4
		semesterSelector += "<option value=All selected>All</option>";
		semesterSelector += "<option value=1>1</option>";
		semesterSelector += "<option value=2>2</option>";
		semesterSelector += "<option value=Winter>Winter</option>";
		semesterSelector += "<option value=Summer>Summer</option>";
		semesterSelector += "</select></p></br>";

		document.getElementById('enrollmentChartFilters').innerHTML = yearSelector + semesterSelector;

	}

	function createEnrollmentApplyButton(enrollmentData){
		document.getElementById("enrollmentChartApplyButton").innerHTML = "";

		var enrollmentChartApplyButton = document.createElement("enrollmentChartApplyButton");

		enrollmentChartApplyButton.innerHTML = "Apply Filter";

		document.getElementById("enrollmentChartApplyButton").appendChild(enrollmentChartApplyButton);

		enrollmentChartApplyButton.addEventListener ("click", function() {
			console.log("---------- Submit Button Clicked ----------");
			console.log($("#selectYear-enrollmentChart").val());
			console.log($("#selectSemester-enrollmentChart").val());

			var year = $("#selectYear-enrollmentChart").val(),
				semester = $("#selectSemester-enrollmentChart").val();

			document.getElementById("enrollmentChart").innerHTML = "";

			createEnrollmentChart(enrollmentData, year, semester);
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
