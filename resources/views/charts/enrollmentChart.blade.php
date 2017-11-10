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

	#securityChart svg,
	#enrollmentChart svg,
	#clubRecruitmentChart svg {
		background: url("/images/concrete_seamless.gif");
	}

</style>

<div class="row">
	<div class="col-xs-12 col-sm-12">
		<h1>&nbsp;&nbsp;&nbsp;<i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;Enrolment Statistics</h1>
		<hr />
		<div class="row">
			<div class="col-xs-4 col-sm-4 chart-filter">
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<hr />
						<h4><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;Filter Options: Enrolment</h4>
						<hr />
						<div id='enrollmentChartFilters'></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<div id='enrollmentChartApplyButton'></div>
					</div>
				</div>
			</div>
			<div class="col-xs-8 col-sm-8">
				<div id='enrollmentChart'></div>
			</div>
		</div>
	</div>
</div>

<script>
	var enrollmentData = null;

	createEnrollmentChart(enrollmentData, ['2016'], ['All']);

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

		// Define the div for the tooltip
		var tooltip = d3.select("#enrollmentChart").append("div")
			.attr("class", "tooltip")
			.style("opacity", 0);

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
			.on("mouseover", function(d) {
				tooltip.transition()
					.duration(200)
					.style("opacity", .9);

				tooltip.html(
					"Semester: " + d.data.key + "<br/>" + "<br/>" +
					"Computing: " + d.data.computing + "<br/>" + "<br/>" +
					"Engineering: " + d.data.engineering + "<br/>" + "<br/>" +
					"Design: " + d.data.design + "<br/>" + "<br/>" +
					"Business: " + d.data.business + "<br/>" + "<br/>" +
					"Total: " + (d.data.computing + d.data.engineering + d.data.design + d.data.business) + "<br/>" + "<br/>"
				)
					.style("left", (d3.event.pageX / 1.5) + "px")
					.style("top", (d3.event.pageY / 10) + "px");
			})
			.on("mouseout", function(d) {
				tooltip.transition()
					.duration(500)
					.style("opacity", 0);
			})
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
		yearSelector += "<p>Year For Enrollment Chart:</p><p><select id='selectYear-enrollmentChart' multiple size='5' style='width: 202px;'>";4
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
		yearSelector += "</select></p><hr />";

		var semesterSelector = "";
		semesterSelector += "<p>Semester For Enrollment Chart:</p><p><select id='selectSemester-enrollmentChart' multiple size='5' style='width: 202px;'>";4
		semesterSelector += "<option value=All selected>All</option>";
		semesterSelector += "<option value=1>1</option>";
		semesterSelector += "<option value=2>2</option>";
		semesterSelector += "<option value=Winter>Winter</option>";
		semesterSelector += "<option value=Summer>Summer</option>";
		semesterSelector += "</select></p><hr />";

		document.getElementById('enrollmentChartFilters').innerHTML = yearSelector + semesterSelector;

	}

	function createEnrollmentApplyButton(enrollmentData){
		document.getElementById("enrollmentChartApplyButton").innerHTML = "";

		var enrollmentChartApplyButton = document.createElement("enrollmentChartApplyButton");

		enrollmentChartApplyButton.innerHTML = "<button><i class='fa fa-check' aria-hidden='true'></i>&nbsp;Apply Filter</button>";

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
