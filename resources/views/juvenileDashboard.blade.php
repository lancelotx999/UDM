@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://d3js.org/d3.v4.min.js"></script>

<style type="text/css">
	.dashboard {
		width: 90%;
		margin: 0 auto;
	}

	.clearfix:after,
	form:after {
	    content: ".";
	    display: block;
	    height: 0;
	    clear: both;
	    visibility: hidden
	}

	.x_panel {
		background: #fff;
		padding: 15px;
		margin: 15px 0px;
		border: 1px solid #e2e2e2;
	}
</style>

<!-- page content -->
<div class="dashboard" role="main">
    <div class="page-title">
      	<div class="title_left">
        	<h1>Dashboards</h1><hr />
      	</div>

    	<div class="clearfix"></div>

    	<div class="row">
      		<div class="col-md-12 col-sm-12 col-xs-12">
        		<div class="x_panel">
          			<div class="x_title" >
            			<h3>Juvenile Statistics of New York</h3>
            			<ul class="nav navbar-right panel_toolbox">
	              			<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
	              			<!-- <li class="dropdown">
	                			<a href="#" classh="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
	                			<ul class="dropdown-menu" role="menu">
	                  				<li><a href="#">Settings 1</a></li>
	                  				<li><a href="#">Settings 2</a></li>
	                			</ul>
	              			</li> -->
            			</ul>
            			<div class="clearfix"></div>
          			</div>
          			<div class="x_content">
						<strong>Population Statistics by Boroughs</strong>

						<hr />

						<div id='juvenileInvestigationChart'></div>

						<div class="row">
							<span id='juvenileInvestigationChartFilters'></span>
							<span id='juvenileInvestigationChartApplyButton'></span>
							<span id='juvenileInvestigationChartResetButton'></span>
						</div>
						<strong>Population Statistics by Community District In A Borough</strong>

						<hr />

						<div id='juvenileIntakesChart'></div>

						<div class="row">
							<span id='juvenileIntakesChartFilters'></span>
							<span id='juvenileIntakesChartApplyButton'></span>
							<span id='juvenileIntakesChartResetButton'></span>
						</div>
            			<!-- <div id="mainb" style="height:350px;"></div> -->
          			</div>
        		</div>
      		</div>
      	</div>

      	

    	<br />

  	</div>
</div>

<script>

	createJuvenileInvestigationChart();
	createJuvenileIntakesChart();


	function createJuvenileInvestigationChart(investigationCount, dateMin, dateMax){
		var margin = {top: 30, right: 80, bottom: 70, left: 60},
			width = 600 - margin.left - margin.right,
			height = 300 - margin.top - margin.bottom;

		var svg = d3.select("#juvenileInvestigationChart")
			.append("svg")
			.attr("width", width + margin.left + margin.right)
			.attr("height", height + margin.top + margin.bottom)
			.append("g")
			.attr("transform", "translate(" + margin.left + "," + margin.top + ")");

		var tooltip = d3.select("#juvenileInvestigationChart").append("div")
			.attr("class", "tooltip")
			.style("opacity", 0);

		var investigationCount = [];
		var boroughs = [];

		var juvenileInvestigation = {!! json_encode($juvenileInvestigation->toArray()) !!};

		juvenileInvestigation.forEach(function (d){
			investigationCount.push({borough: d.borough, date: new Date(d.date), count: Number(d.count) });
		})
		// console.log(investigationCount);
		// console.log(boroughs);
		investigationCount.sort(function(a, b) { return b.date - a.date || b.population - a.population ; });

		// Set the ranges
		var x = d3.scaleBand().rangeRound([0, width]),
			y = d3.scaleLinear().rangeRound([height, 0]),
			z = d3.scaleOrdinal(d3.schemeCategory20);

		y.domain([0, Math.max.apply(Math, investigationCount.map(function(d) { return d.count; }))]).nice();
		z.domain(boroughs);

		if (dateMin != null && dateMin != undefined && dateMax != null && dateMax != undefined) {
			investigationCount = investigationCount.filter(function (d){
				return d.date >= dateMin;
			})

			investigationCount = investigationCount.filter(function (d){
				return d.date <= dateMax;
			})
			x.domain(investigationCount.map(function(d) { return d.date.getFullYear(); }));
		}
		else {
			x.domain(investigationCount.map(function(d) { return d.date.getFullYear(); }));
		}
		svg.selectAll(".bar")
			.data(investigationCount)
			.enter().append("rect")
			.attr("class", "bar")
			.attr("fill", function(d) { return z(d.borough); })
			.attr("x", function(d) { return x(d.date.getFullYear()); })
			.attr("width", x.bandwidth())
			.attr("y", function(d) { return y(d.count); })
			.attr("height", function(d) { return height - y(d.count); })
			.on("mouseover", function(d) {

				tooltip.transition()
					.duration(200)
					.style("opacity", 1);

				tooltip.html(
					"<p><strong>Borough:</strong> " + d.borough + "</p>" +
					"<p><strong>Total Investigations:</strong> " + d.count + "</p>" +
					"<p><strong>Year:</strong> " + d.date.getFullYear() + "</p>"
				)
					.style("left", d3.select(this).attr("cx") + "px")
  					.style("top", d3.select(this).attr("cy") + "px");
			})
			.on("mouseout", function(d) {
				tooltip.transition()
					.duration(500)
					.style("opacity", 0);
			});

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

		svg.append("g")
			.call(d3.axisLeft(y))
			.append("text")
			.attr("x", 2)
			.attr("y", y(y.ticks().pop()) + 0.5)
			.attr("dy", "0.32em")
			.attr("fill", "#000")
			.attr("font-weight", "bold")
			.attr("text-anchor", "start")
			.text("Investigation Counts");

		createJuvenileInvestigationFilter(investigationCount, d3.extent(investigationCount, function(d) { return d.date; })[0], d3.extent(investigationCount, function(d) { return d.date; })[1]);
		createJuvenileInvestigationApplyButton(investigationCount, d3.extent(investigationCount, function(d) { return d.date; })[0], d3.extent(investigationCount, function(d) { return d.date; })[1]);
		createJuvenileInvestigationResetButton();

	}

	function createJuvenileInvestigationFilter(investigationCount, dateMin, dateMax){
		var dateSlider = "";

		dateSlider += "<p>Date Range for Juvenile Investigation:&nbsp;</p>";
		dateSlider += "<p><input type='date-' id='date-juvenileInvestigationChart'></p>";
		dateSlider += "<div id='dateSlider-juvenileInvestigationChart' style='width:92%; left: 0;'></div></br>";

		document.getElementById('juvenileInvestigationChartFilters').innerHTML = dateSlider;

		var parseTime = d3.timeParse("%Y-%m-%d");

		tempData = [];

		investigationCount.forEach(function (d){
			tempData.push(d.date.getTime());
		});
		// console.log(tempData);


		if (dateMin != null && dateMin != undefined && dateMax != null && dateMax != undefined) {
			$(function (){
				$("#dateSlider-juvenileInvestigationChart").slider({
					range: true,
					min: Math.min.apply(null, tempData),
					max: Math.max.apply(null, tempData),
					values: [dateMin.getTime(), dateMax.getTime() ],
					slide: function( event, ui ) {
						dateMin = new Date(ui.values[0]);
						dateMax = new Date(ui.values[1]);
						$( "#date-juvenileInvestigationChart").val((dateMin.getFullYear()) + " - " + (dateMax.getFullYear()) );
					}
				});
			})
		}
		else {
			$(function (){
				$("#dateSlider-juvenileInvestigationChart").slider({
					range: true,
					min: Math.min.apply(null, tempData),
					max: Math.max.apply(null, tempData),
					values: [Math.min.apply(null, tempData), Math.max.apply(null, tempData) ],
					slide: function( event, ui ) {
						var dateMin = new Date(ui.values[0]);
						var dateMax = new Date(ui.values[1]);
						$( "#date-juvenileInvestigationChart").val((dateMin.getFullYear()) + " - " + (dateMax.getFullYear()) );
					}
				});
			})
		}
	}

	function createJuvenileInvestigationApplyButton(investigationCount, dateMin, dateMax){
		document.getElementById("juvenileInvestigationChartApplyButton").innerHTML = "";

		var juvenileInvestigationChartApplyButton = document.createElement("juvenileInvestigationChartApplyButton");

		juvenileInvestigationChartApplyButton.innerHTML = "<button>Apply Filter</button>";

		document.getElementById("juvenileInvestigationChartApplyButton").appendChild(juvenileInvestigationChartApplyButton);

		juvenileInvestigationChartApplyButton.addEventListener ("click", function() {
			// console.log($("#dateSlider-waterConsumptionChart").val());

			var min = new Date($("#dateSlider-juvenileInvestigationChart").slider( "values", 0 )),
				max = new Date($("#dateSlider-juvenileInvestigationChart").slider( "values", 1 ));

			document.getElementById("juvenileInvestigationChart").innerHTML = "";

			createJuvenileInvestigationChart(investigationCount, min, max);
		});
	}

	function createJuvenileInvestigationResetButton(){
		document.getElementById("juvenileInvestigationChartResetButton").innerHTML = "";

		var juvenileInvestigationChartResetButton = document.createElement("juvenileInvestigationChartResetButton");

		juvenileInvestigationChartResetButton.innerHTML = "<button>Reset Filter</button>";

		document.getElementById("juvenileInvestigationChartResetButton").appendChild(juvenileInvestigationChartResetButton);


		juvenileInvestigationChartResetButton.addEventListener ("click", function() {
			var juvenileInvestigation = {!! json_encode($juvenileInvestigation->toArray()) !!};

			investigationCount = [];

			juvenileInvestigation.forEach(function(d){
				investigationCount.push({borough: d.borough, date: new Date(d.date), count: Number(d.count) });
			})

			investigationCount.sort(function(a, b) { return a.date - b.date; });

			document.getElementById("juvenileInvestigationChart").innerHTML = "";

			createJuvenileInvestigationChart(investigationCount, d3.extent(investigationCount, function(d) { return d.date; })[0], d3.extent(investigationCount, function(d) { return d.date; })[1]);
		});
	}

	function createJuvenileIntakesChart(intakesCount, dateMin, dateMax){
		var margin = {top: 30, right: 80, bottom: 70, left: 60},
			width = 600 - margin.left - margin.right,
			height = 300 - margin.top - margin.bottom;

		var svg = d3.select("#juvenileIntakesChart")
			.append("svg")
			.attr("width", width + margin.left + margin.right)
			.attr("height", height + margin.top + margin.bottom)
			.append("g")
			.attr("transform", "translate(" + margin.left + "," + margin.top + ")");

		var tooltip = d3.select("#juvenileIntakesChart").append("div")
			.attr("class", "tooltip")
			.style("opacity", 0);

		var intakesCount = [];
		var boroughs = [];

		var juvenileIntakes = {!! json_encode($juvenileIntakes->toArray()) !!};

		juvenileIntakes.forEach(function (d){
			intakesCount.push({borough: d.borough, date: new Date(d.date), count: Number(d.count) });
		})
		// console.log(intakesCount);
		// console.log(boroughs);
		intakesCount.sort(function(a, b) { return b.date - a.date || b.population - a.population ; });

		// Set the ranges
		var x = d3.scaleBand().rangeRound([0, width]),
			y = d3.scaleLinear().rangeRound([height, 0]),
			z = d3.scaleOrdinal(d3.schemeCategory20);

		y.domain([0, Math.max.apply(Math, intakesCount.map(function(d) { return d.count; }))]).nice();
		z.domain(boroughs);

		if (dateMin != null && dateMin != undefined && dateMax != null && dateMax != undefined) {
			intakesCount = intakesCount.filter(function (d){
				return d.date >= dateMin;
			})

			intakesCount = intakesCount.filter(function (d){
				return d.date <= dateMax;
			})
			x.domain(intakesCount.map(function(d) { return d.date.getFullYear(); }));
		}
		else {
			x.domain(intakesCount.map(function(d) { return d.date.getFullYear(); }));
		}
		svg.selectAll(".bar")
			.data(intakesCount)
			.enter().append("rect")
			.attr("class", "bar")
			.attr("fill", function(d) { return z(d.borough); })
			.attr("x", function(d) { return x(d.date.getFullYear()); })
			.attr("width", x.bandwidth())
			.attr("y", function(d) { return y(d.count); })
			.attr("height", function(d) { return height - y(d.count); })
			.on("mouseover", function(d) {

				tooltip.transition()
					.duration(200)
					.style("opacity", 1);

				tooltip.html(
					"<p><strong>Borough:</strong> " + d.borough + "</p>" +
					"<p><strong>Total Intakes:</strong> " + d.count + "</p>" +
					"<p><strong>Year:</strong> " + d.date.getFullYear() + "</p>"
				)
					.style("left", d3.select(this).attr("cx") + "px")
  					.style("top", d3.select(this).attr("cy") + "px");
			})
			.on("mouseout", function(d) {
				tooltip.transition()
					.duration(500)
					.style("opacity", 0);
			});

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

		svg.append("g")
			.call(d3.axisLeft(y))
			.append("text")
			.attr("x", 2)
			.attr("y", y(y.ticks().pop()) + 0.5)
			.attr("dy", "0.32em")
			.attr("fill", "#000")
			.attr("font-weight", "bold")
			.attr("text-anchor", "start")
			.text("Intakes Counts");

		createJuvenileIntakesFilter(intakesCount, d3.extent(intakesCount, function(d) { return d.date; })[0], d3.extent(intakesCount, function(d) { return d.date; })[1]);
		createJuvenileIntakesApplyButton(intakesCount, d3.extent(intakesCount, function(d) { return d.date; })[0], d3.extent(intakesCount, function(d) { return d.date; })[1]);
		createJuvenileIntakesResetButton();

	}

	function createJuvenileIntakesFilter(intakesCount, dateMin, dateMax){
		var dateSlider = "";

		dateSlider += "<p>Date Range for Juvenile Intakes:&nbsp;</p>";
		dateSlider += "<p><input type='date-' id='date-juvenileIntakesChart'></p>";
		dateSlider += "<div id='dateSlider-juvenileIntakesChart' style='width:92%; left: 0;'></div></br>";

		document.getElementById('juvenileIntakesChartFilters').innerHTML = dateSlider;

		var parseTime = d3.timeParse("%Y-%m-%d");

		tempData = [];

		intakesCount.forEach(function (d){
			tempData.push(d.date.getTime());
		});
		// console.log(tempData);


		if (dateMin != null && dateMin != undefined && dateMax != null && dateMax != undefined) {
			$(function (){
				$("#dateSlider-juvenileIntakesChart").slider({
					range: true,
					min: Math.min.apply(null, tempData),
					max: Math.max.apply(null, tempData),
					values: [dateMin.getTime(), dateMax.getTime() ],
					slide: function( event, ui ) {
						dateMin = new Date(ui.values[0]);
						dateMax = new Date(ui.values[1]);
						$( "#date-juvenileIntakesChart").val((dateMin.getFullYear()) + " - " + (dateMax.getFullYear()) );
					}
				});
			})
		}
		else {
			$(function (){
				$("#dateSlider-juvenileIntakesChart").slider({
					range: true,
					min: Math.min.apply(null, tempData),
					max: Math.max.apply(null, tempData),
					values: [Math.min.apply(null, tempData), Math.max.apply(null, tempData) ],
					slide: function( event, ui ) {
						var dateMin = new Date(ui.values[0]);
						var dateMax = new Date(ui.values[1]);
						$( "#date-juvenileIntakesChart").val((dateMin.getFullYear()) + " - " + (dateMax.getFullYear()) );
					}
				});
			})
		}
	}

	function createJuvenileIntakesApplyButton(intakesCount, dateMin, dateMax){
		document.getElementById("juvenileIntakesChartApplyButton").innerHTML = "";

		var juvenileIntakesChartApplyButton = document.createElement("juvenileIntakesChartApplyButton");

		juvenileIntakesChartApplyButton.innerHTML = "<button>Apply Filter</button>";

		document.getElementById("juvenileIntakesChartApplyButton").appendChild(juvenileIntakesChartApplyButton);

		juvenileIntakesChartApplyButton.addEventListener ("click", function() {
			// console.log($("#dateSlider-waterConsumptionChart").val());

			var min = new Date($("#dateSlider-juvenileIntakesChart").slider( "values", 0 )),
				max = new Date($("#dateSlider-juvenileIntakesChart").slider( "values", 1 ));

			document.getElementById("juvenileIntakesChart").innerHTML = "";

			createJuvenileIntakesChart(intakesCount, min, max);
		});
	}

	function createJuvenileIntakesResetButton(){
		document.getElementById("juvenileIntakesChartResetButton").innerHTML = "";

		var juvenileIntakesChartResetButton = document.createElement("juvenileIntakesChartResetButton");

		juvenileIntakesChartResetButton.innerHTML = "<button>Reset Filter</button>";

		document.getElementById("juvenileIntakesChartResetButton").appendChild(juvenileIntakesChartResetButton);

		juvenileIntakesChartResetButton.addEventListener ("click", function() {
			var juvenileIntakes = {!! json_encode($juvenileIntakes->toArray()) !!};
			intakesCount = [];

			data.forEach(function(d){
				intakesCount.push({borough: d.borough, date: new Date(d.date), count: Number(d.count) });
			})

			intakesCount.sort(function(a, b) { return a.date - b.date; });

			document.getElementById("juvenileIntakesChart").innerHTML = "";

			createJuvenileIntakesChart(intakesCount, d3.extent(intakesCount, function(d) { return d.date; })[0], d3.extent(intakesCount, function(d) { return d.date; })[1]);
		});
	}

</script>
<!-- /page content -->

@include('layouts.partials._footer')

@endsection
