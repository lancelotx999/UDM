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
	var clubRecruitmentData = null,
		dateMin = null,
		dateMax = null;

	createClubRecruitmentChart(clubRecruitmentData, "2016", "2");

	function createClubRecruitmentChart(clubRecruitmentData, year, semester){
		var clubRecruitmentData = {!! json_encode($clubRecruitmentData->toArray()) !!};
		// parse the date / time
		var parseTime = d3.timeParse("%Y-%m-%d");
		// Set the dimensions of the canvas / graph
		var margin = {top: 30, right: 20, bottom: 70, left: 50},
		    width = 600 - margin.left - margin.right,
		    height = 600 - margin.top - margin.bottom,
			radius = Math.min(width, height) / 2;
		// Adds the svg canvas
		var svg = d3.select("#clubRecruitmentChart")
		    .append("svg")
	        .attr("width", width + margin.left + margin.right)
	        .attr("height", (height) + margin.top + margin.bottom)
	    	.append("g")
	        .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");
		// Define the div for the tooltip
		var tooltip = d3.select("#clubRecruitmentChart").append("div")
			.attr("class", "tooltip")
			.style("opacity", 0);
		var color = d3.scaleOrdinal(d3.schemeCategory20);
		var arc = d3.arc()
			.outerRadius(radius - 10)
			.innerRadius(0);
		var labelArc = d3.arc()
			.outerRadius(radius - 40)
			.innerRadius(radius - 40);
		var pie = d3.pie()
		    .sort(null)
		    .value(function(d) { return d.numberOfMembers; });
		var keys = [];
		clubRecruitmentData.forEach(function(d, i){
			// console.log("--------------------------");
			// console.log(d.year);
			// console.log(d.semester);
			// console.log(d.clubName);
			// console.log(d.numberOfMembers);
			d.year = +d.year;
			d.semester = +d.semester;
			d.clubName = d.clubName;
			d.numberOfMembers = +d.numberOfMembers;
			d.key = d.year + " " + d.semester;
			// if (i > 0) {
			// 	if(d.key == clubRecruitmentData[i-1].key){
			// 		tempTotal = tempTotal + d.numberOfMembers;
			// 	}
			// 	else if(d.key != clubRecruitmentData[i-1].key)
			// 	{
			// 		sumTotal.push({key:clubRecruitmentData[i-1].key, total: tempTotal});
			// 		tempTotal = +d.numberOfMembers;
			// 	}
			// }
			// else {
			// 	tempTotal = +d.numberOfMembers;
			// }
			if (!keys.includes(d.key)) {
				keys.push(d.key)
			}
		})
		var filteredData = [];
		clubRecruitmentData.forEach(function(d){
			if (d.year == year && d.semester == semester) {
				filteredData.push({year: d.year,semester: d.semester,clubName: d.clubName,numberOfMembers: +d.numberOfMembers,key: d.year + " " + d.semester});
			}
		})
		g = svg.selectAll(".arc")
			.data(pie(filteredData))
			.enter().append("g")
			.attr("class", "arc");
		g.append("path")
			.attr("d", arc)
			.style("fill", function(d) { return color(d.data.clubName); })
			.on("mouseover", function(d) {
				tooltip.transition()
					.duration(200)
					.style("opacity", .9);
				tooltip.html(
					"Club Name: " + d.data.clubName + "<br/>" + "<br/>" +
					"Number of Members: " + d.data.numberOfMembers + "<br/>" + "<br/>" +
					"Year: " + d.data.year + "<br/>" + "<br/>" +
					"Semester: " + d.data.semester + "<br/>" + "<br/>"
				)
					.style("left", (d3.event.pageX / 1.5) + "px")
					.style("top", (d3.event.pageY / 10) + "px");
			})
			.on("mouseout", function(d) {
				tooltip.transition()
					.duration(500)
					.style("opacity", 0);
			});
		g.append("text")
			.attr("transform", function(d) { return "translate(" + labelArc.centroid(d) + ")"; })
			.attr("dy", ".35em")
			.text(function(d) { return d.data.numberOfMembers; });
		var legend = svg.selectAll(".legend")
			.data(pie(filteredData))
			.enter().append("g")
			.attr("class", "legend")
			.attr("transform", function(d, i) { return "translate(0," + i * 20 + ")"; })
			.style("font", "10px sans-serif");
		legend.append("rect")
			.attr("x", (width/2)+10)
			.attr("y", (-height/2))
			.attr("width", 18)
			.attr("height", 18)
			.attr("fill", function(d){ return color(d.data.clubName)});
		legend.append("text")
			.attr("x", width/1.75)
			.attr("y", (-height/2)+9)
			.attr("dy", ".35em")
			.attr("text-anchor", "start")
			.text(function(d) { return d.data.clubName; });
		createClubRecruitmentFilters(clubRecruitmentData, 'All', 'All');
		createClubRecruitmentApplyButton(clubRecruitmentData);
	}

	function createClubRecruitmentFilters(clubRecruitmentData, year, semester) {
		var yearSelector = "";
		yearSelector += "<p class='white-text'>Year For Enrollment Chart:</p><p><select id='selectYear-clubRecruitmentChart' style='width: 202px;'>";4
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
		semesterSelector += "<p class='white-text'>Semester For Enrollment Chart:</p><p><select id='selectSemester-clubRecruitmentChart' style='width: 202px;'>";4
		semesterSelector += "<option value=1>1</option>";
		semesterSelector += "<option value=2>2</option>";
		semesterSelector += "</select></p><hr />";
		document.getElementById('clubRecruitmentChartFilters').innerHTML = yearSelector + semesterSelector;
	}

	function createClubRecruitmentApplyButton(clubRecruitmentData){
		document.getElementById("clubRecruitmentChartApplyButton").innerHTML = "";
		var clubRecruitmentChartApplyButton = document.createElement("clubRecruitmentChartApplyButton");
		clubRecruitmentChartApplyButton.innerHTML = "<button><i class='fa fa-check' aria-hidden='true'></i>&nbsp;Apply Filter</button>";
		document.getElementById("clubRecruitmentChartApplyButton").appendChild(clubRecruitmentChartApplyButton);
		clubRecruitmentChartApplyButton.addEventListener ("click", function() {
			console.log("---------- Submit Button Clicked ----------");
			console.log($("#selectYear-clubRecruitmentChart").val());
			console.log($("#selectSemester-clubRecruitmentChart").val());
			var year = $("#selectYear-clubRecruitmentChart").val(),
				semester = $("#selectSemester-clubRecruitmentChart").val();
			document.getElementById("clubRecruitmentChart").innerHTML = "";
			createClubRecruitmentChart(clubRecruitmentData, year, semester);
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
