@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://d3js.org/d3.v4.min.js"></script>

<style> /* set the CSS */

	.line {
		fill: none;
		stroke: steelblue;
		stroke-width: 2px;
	}

	.arc text {
		font: 10px sans-serif;
		text-anchor: middle;
	}

	.arc path {
		stroke: #fff;
	}

</style>

<div class="container wrapper">

	<div class="row">
		<div class="col-sm-6 col-xs-12">

			<hr />

			<strong>Population Statistics by Boroughs</strong>

			<hr />

			<div id='populationByBoroughChart'></div>

			<div class="row">
				<span id='populationByBoroughChartFilters'></span>
				<span id='populationByBoroughChartApplyButton'></span>
				<span id='populationByBoroughChartResetButton'></span>
			</div>
		</div>

		<div class=" col-sm-6 col-xs-12">

			<hr />

			<strong>Population Statistics by Community District In A Borough</strong>

			<hr />

			<div id='populationByCommunityChart'></div>

			<div class="row">
				<span id='populationByCommunityChartFilters'></span>
				<span id='populationByCommunityChartApplyButton'></span>
				<span id='populationByCommunityChartResetButton'></span>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-xs-12">

			<hr />

			<strong>Births By Race Of New York City</strong>

			<hr />

			<div id='birthsByRaceChart'></div>

			<div class="row">
				<span id='birthsByRaceChartFilters'></span>
				<span id='birthsByRaceChartApplyButton'></span>
				<span id='birthsByRaceChartResetButton'></span>
			</div>
		</div>

		<div class=" col-sm-6 col-xs-12">

			<hr />

			<strong>Births By Gender Of New York City</strong>

			<hr />

			<div id='birthsByGenderChart'></div>

			<div class="row">
				<span id='birthsByGenderChartFilters'></span>
				<span id='birthsByGenderChartApplyButton'></span>
				<span id='birthsByGenderChartResetButton'></span>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-xs-12">

			<hr />

			<strong>Water Consumption Statistics Of New York City</strong>

			<hr />

			<div id='waterConsumptionChart'></div>

			<div class="row">
				<span id='waterConsumptionChartFilters'></span>
				<span id='waterConsumptionChartApplyButton'></span>
				<span id='waterConsumptionChartResetButton'></span>
			</div>
		</div>

		<div class=" col-sm-6 col-xs-12">

			<hr />

			<strong>Juvenile Investigations in New York City</strong>

			<hr />

			<div id='juvenileInvestigationChart'></div>

			<div class="row">
				<span id='juvenileInvestigationChartFilters'></span>
				<span id='juvenileInvestigationChartApplyButton'></span>
				<span id='juvenileInvestigationChartResetButton'></span>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-xs-12">

			<hr />

			<strong>Juvenile Arrested in New York City</strong>

			<hr />

			<div id='juvenileIntakesChart'></div>

			<div class="row">
				<span id='juvenileIntakesChartFilters'></span>
				<span id='juvenileIntakesChartApplyButton'></span>
				<span id='juvenileIntakesChartResetButton'></span>
			</div>
		</div>

		<div class=" col-sm-6 col-xs-12">

			<hr />

			<strong>NYC Actual Revenues</strong>

			<hr />

			<div id='actualRevenuesChart'></div>

			<div class="row">
				<span id='actualRevenuesChartFilters'></span>
				<span id='actualRevenuesChartApplyButton'></span>
				<span id='actualRevenuesChartResetButton'></span>
			</div>
		</div>
	</div>

	<br /><br /><br />

</div>

<script>

	createPopulationByBoroughChart(null, new Date("01/01/1950"), new Date("01/01/2040"));
	createPopulationByCommunityChart(null, new Date("01/01/1950"), new Date("01/01/2040"), "Manhattan");
	createWaterConsumptionChart();
	createBirthsByGenderChart();
	createBirthsByRaceChart();
	createJuvenileInvestigationChart();
	createJuvenileIntakesChart();
	createActualRevenuesChart(null, "Taxes", null, null);

	function createPopulationByBoroughChart(populationData, dateMin, dateMax){
		// Set the dimensions of the canvas / graph
		var margin = {top: 30, right: 80, bottom: 70, left: 60},
			width = 600 - margin.left - margin.right,
			height = 300 - margin.top - margin.bottom;

		// Adds the svg canvas
		var svg = d3.select("#populationByBoroughChart")
			.append("svg")
			.attr("width", width + margin.left + margin.right)
			.attr("height", height + margin.top + margin.bottom)
			.append("g")
			.attr("transform", "translate(" + margin.left + "," + margin.top + ")");

		// Define the div for the tooltip
		var tooltip = d3.select("#populationByBoroughChart").append("div")
			.attr("class", "tooltip")
			.style("opacity", 0);

		var populationData = [];
		var boroughs = [];

		var populationByBorough = {!! json_encode($populationByBorough->toArray()) !!};

		// console.log("---------- populationByBorough ----------");
		// console.log(populationByBorough);
		// console.log("---------- populationByBorough ----------");

		populationByBorough.forEach(function (d){
			if (boroughs.indexOf(d.Borough) == -1) {
				boroughs.push(d.Borough);
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

		populationData.sort(function(a, b) { return b.date - a.date || b.population - a.population ; });
		// populationData.sort(function(a, b) { return b.population - a.population; });

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
		y.domain([0, Math.max.apply(Math, populationData.map(function(d) { return d.population; }))]).nice();
		z.domain(boroughs);

		// // Scale the range of the date
		if (dateMin != null && dateMin != undefined && dateMax != null && dateMax != undefined) {
			populationData = populationData.filter(function (d){
				return d.date >= dateMin;
			})

			populationData = populationData.filter(function (d){
				return d.date <= dateMax;
			})
			// x.domain(d3.extent(populationData, function(d) { return d.date.getFullYear(); }));
			x.domain(populationData.map(function(d) { return d.date.getFullYear(); }));
		}
		else {
			// x.domain(d3.extent(populationData, function(d) { return d.date.getFullYear(); }));
			x.domain(populationData.map(function(d) { return d.date.getFullYear(); }));
		}

		// console.log("---------- d3.map(populationData, function(d) { return d.date.getFullYear(); }) ----------");
		// console.log(d3.map(populationData, function(d) { return d.date.getFullYear(); }));
		// console.log("---------- d3.map(populationData, function(d) { return d.date.getFullYear(); }) ----------");

		// console.log("---------- x.domain() ----------");
		// console.log(x.domain());
		// console.log("---------- x.domain() ----------");

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

				tooltip.transition()
					.duration(200)
					.style("opacity", 1);

				tooltip.html(
					"<p><strong>Borough:</strong> " + d.boroughName + "</p>" +
					"<p><strong>Date:</strong> " + d.date.getFullYear() + "</p>" +
					"<p><strong>Population:</strong> " + d.population + "</p>"
				)
					.style("left", d3.select(this).attr("cx") + "px")
  					.style("top", d3.select(this).attr("cy") + "px");
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

		createPopulationByBoroughFilter(populationData, d3.extent(populationData, function(d) { return d.date; })[0], d3.extent(populationData, function(d) { return d.date; })[1]);
		createPopulationByBoroughApplyButton(populationData, d3.extent(populationData, function(d) { return d.date; })[0], d3.extent(populationData, function(d) { return d.date; })[1]);
		createPopulationByBoroughResetButton();





	}

	function createPopulationByBoroughFilter(populationData, dateMin, dateMax){
		// console.log("---------- populationData ----------");
		// console.log(populationData);
		// console.log("---------- populationData ----------");
		var dateSlider = "";

		dateSlider += "<p>Date Range for Population By Borough Chart:&nbsp;</p>";
		dateSlider += "<p><input type='date-' id='date-populationByBoroughChart'></p>";
		dateSlider += "<div id='dateSlider-populationByBoroughChart' style='width:92%; left: 0;'></div></br>";

		document.getElementById('populationByBoroughChartFilters').innerHTML = dateSlider;

		// parse the date / time
		var parseTime = d3.timeParse("%Y-%m-%d");

		tempData = [];

		populationData.forEach(function (d){
			tempData.push(d.date.getTime());
		});

		// console.log("---------- tempData ----------");
		// console.log(tempData);
		// console.log("---------- tempData ----------");

		if (dateMin != null && dateMin != undefined && dateMax != null && dateMax != undefined) {
			$(function (){
				$("#dateSlider-populationByBoroughChart").slider({
					range: true,
					min: Math.min.apply(null, tempData),
					max: Math.max.apply(null, tempData),
					values: [dateMin.getTime(), dateMax.getTime() ],
					slide: function( event, ui ) {
						dateMin = new Date(ui.values[0]);
						dateMax = new Date(ui.values[1]);

						// console.log(dateMin);
						// console.log(dateMax);


						$( "#date-populationByBoroughChart").val((dateMin.getFullYear()) + " - " + (dateMax.getFullYear()) );
					}
				});
			})
		}
		else {
			$(function (){
				$("#dateSlider-populationByBoroughChart").slider({
					range: true,
					min: Math.min.apply(null, tempData),
					max: Math.max.apply(null, tempData),
					values: [Math.min.apply(null, tempData), Math.max.apply(null, tempData) ],
					slide: function( event, ui ) {
						var dateMin = new Date(ui.values[0]);
						var dateMax = new Date(ui.values[1]);

						// console.log(dateMin);
						// console.log(dateMax);

						$( "#date-populationByBoroughChart").val((dateMin.getFullYear()) + " - " + (dateMax.getFullYear()) );
					}
				});
			})
		}
	}

	function createPopulationByBoroughApplyButton(populationData, dateMin, dateMax){
		document.getElementById("populationByBoroughChartApplyButton").innerHTML = "";

		var populationByBoroughChartApplyButton = document.createElement("populationByBoroughChartApplyButton");

		populationByBoroughChartApplyButton.innerHTML = "<button>Apply Filter</button>";

		document.getElementById("populationByBoroughChartApplyButton").appendChild(populationByBoroughChartApplyButton);

		populationByBoroughChartApplyButton.addEventListener ("click", function() {
			// console.log("---------- Submit Button Clicked ----------");
			// console.log($("#dateSlider-populationByBoroughChart").val());

			var min = new Date($("#dateSlider-populationByBoroughChart").slider( "values", 0 )),
				max = new Date($("#dateSlider-populationByBoroughChart").slider( "values", 1 ));

			// console.log("---------- min ----------");
			// console.log(min);
			// console.log("---------- min ----------");
			// console.log("---------- max ----------");
			// console.log(max);
			// console.log("---------- max ----------");

			document.getElementById("populationByBoroughChart").innerHTML = "";

			createPopulationByBoroughChart(populationData, min, max);
		});
	}

	function createPopulationByBoroughResetButton(){
		document.getElementById("populationByBoroughChartResetButton").innerHTML = "";

		var populationByBoroughChartResetButton = document.createElement("populationByBoroughChartResetButton");

		populationByBoroughChartResetButton.innerHTML = "<button>Reset Filter</button>";

		document.getElementById("populationByBoroughChartResetButton").appendChild(populationByBoroughChartResetButton);

		var populationData = [];
		var boroughs = [];

		var populationByBorough = {!! json_encode($populationByBorough->toArray()) !!};

		populationByBorough.forEach(function (d){
			if (boroughs.indexOf(d.Borough) == -1) {
				boroughs.push(d.Borough);
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

		populationData.sort(function(a, b) { return b.date - a.date || b.population - a.population ; });

		populationByBoroughChartResetButton.addEventListener ("click", function() {
			populationData = [];
			console.log("---------- populationData ----------");
			console.log(populationData);
			console.log("---------- populationData ----------");

			populationByBorough.forEach(function (d){
				populationData.push({boroughName: d.Borough, date: new Date("1970"), population: d.population1970});
				populationData.push({boroughName: d.Borough, date: new Date("1980"), population: d.population1980});
				populationData.push({boroughName: d.Borough, date: new Date("1990"), population: d.population1990});
				populationData.push({boroughName: d.Borough, date: new Date("2000"), population: d.population2000});
				populationData.push({boroughName: d.Borough, date: new Date("2010"), population: d.population2010});
				populationData.push({boroughName: d.Borough, date: new Date("2020"), population: d.population2020});
				populationData.push({boroughName: d.Borough, date: new Date("2030"), population: d.population2030});
				populationData.push({boroughName: d.Borough, date: new Date("2040"), population: d.population2040});
			})

			populationData.sort(function(a, b) { return b.date - a.date || b.population - a.population ; });

			document.getElementById("populationByBoroughChart").innerHTML = "";

			createPopulationByBoroughChart(populationData, d3.extent(populationData, function(d) { return d.date; })[0], d3.extent(populationData, function(d) { return d.date; })[1]);

		});


	}

	function createPopulationByCommunityChart(populationData, dateMin, dateMax, selectedBorough){
		// Set the dimensions of the canvas / graph
		var margin = {top: 30, right: 80, bottom: 70, left: 60},
			width = 600 - margin.left - margin.right,
			height = 300 - margin.top - margin.bottom;

		// Adds the svg canvas
		var svg = d3.select("#populationByCommunityChart")
			.append("svg")
			.attr("width", width + margin.left + margin.right)
			.attr("height", height + margin.top + margin.bottom)
			.append("g")
			.attr("transform", "translate(" + margin.left + "," + margin.top + ")");

		// Define the div for the tooltip
		var tooltip = d3.select("#populationByCommunityChart").append("div")
			.attr("class", "tooltip")
			.style("opacity", 0);

		var populationData = [];
		var boroughs = [];
		var communityDistricts = [];

		var populationByCommunityDistricts = {!! json_encode($populationByCommunityDistricts->toArray()) !!};

		// console.log("---------- populationByCommunityDistricts ----------");
		// console.log(populationByCommunityDistricts);
		// console.log("---------- populationByCommunityDistricts ----------");
		// var selectedBorough = "Bronx";

		populationByCommunityDistricts.forEach(function (d){
			if (boroughs.indexOf(d.Borough) == -1) {
				boroughs.push(d.Borough);
			}

			if (communityDistricts.indexOf(d.CDName) == -1) {
				communityDistricts.push(d.CDName);
			}

			// if (communityDistricts.map(function(e) { return e.id; }).indexOf(d.CDNumber) == -1) {
			// 	communityDistricts.push({id: d.CDNumber, name: d.CDName});
			// }

			// if ((communityDistricts.findIndex(x => x.id == d.CDNumber) == -1) && (d.Borough == selectedBorough)) {
			// 	communityDistricts.push({id: d.CDNumber, name: d.CDName});
			// }

			if (d.Borough == selectedBorough) {
				populationData.push({boroughName: d.Borough, CDId: d.CDNumber, CDName: d.CDName, date: new Date("1970"), population: d.Population1970});
				populationData.push({boroughName: d.Borough, CDId: d.CDNumber, CDName: d.CDName, date: new Date("1980"), population: d.Population1980});
				populationData.push({boroughName: d.Borough, CDId: d.CDNumber, CDName: d.CDName, date: new Date("1990"), population: d.Population1990});
				populationData.push({boroughName: d.Borough, CDId: d.CDNumber, CDName: d.CDName, date: new Date("2000"), population: d.Population2000});
				populationData.push({boroughName: d.Borough, CDId: d.CDNumber, CDName: d.CDName, date: new Date("2010"), population: d.Population2010});
				// populationData.push({boroughName: d.Borough, CDId: d.CDNumber, CDName: d.CDName, date: new Date("2020"), population: d.population2020});
				// populationData.push({boroughName: d.Borough, CDId: d.CDNumber, CDName: d.CDName, date: new Date("2030"), population: d.population2030});
				// populationData.push({boroughName: d.Borough, CDId: d.CDNumber, CDName: d.CDName, date: new Date("2040"), population: d.population2040});
			}
		})

		populationData.sort(function(a, b) { return b.date - a.date || b.population - a.population ; });


		// console.log("---------- boroughs ----------");
		// console.log(boroughs);
		// console.log("---------- boroughs ----------");
		//
		// console.log("---------- communityDistricts ----------");
		// console.log(communityDistricts);
		// console.log("---------- communityDistricts ----------");

		// console.log("---------- populationData ----------");
		// console.log(populationData);
		// console.log("---------- populationData ----------");

		// Set the ranges
		var x = d3.scaleBand().rangeRound([0, width]),
			y = d3.scaleLinear().rangeRound([height, 0]),
			z = d3.scaleOrdinal(d3.schemeCategory20);

		// Scale the range of the data
		// x.domain(populationData.map(function(d) { return d.date.getFullYear(); }));
		y.domain([0, Math.max.apply(Math, populationData.map(function(d) { return d.population; }))]).nice();
		z.domain(communityDistricts);

		// console.log("---------- d3.max(populationData, function(d) { return d.population}) ----------");
		// console.log(d3.max(populationData, function(d) { return d.population}));
		// console.log("---------- d3.max(populationData, function(d) { return d.population}) ----------");
		//
		// console.log("---------- Math.max.apply(Math, populationData.map(function(d) { return d.population; })) ----------");
		// console.log(Math.max.apply(Math, populationData.map(function(d) { return d.population; })));
		// console.log("---------- Math.max.apply(Math, populationData.map(function(d) { return d.population; })) ----------");
		//
		// console.log("---------- y.domain() ----------");
		// console.log(y.domain());
		// console.log("---------- y.domain() ----------");
		//
		// console.log("---------- z.domain() ----------");
		// console.log(z.domain());
		// console.log("---------- z.domain() ----------");

		// // Scale the range of the date
		if (dateMin != null && dateMin != undefined && dateMax != null && dateMax != undefined) {
			populationData = populationData.filter(function (d){
				return d.date >= dateMin;
			})

			populationData = populationData.filter(function (d){
				return d.date <= dateMax;
			})
			// x.domain(d3.extent(populationData, function(d) { return d.date.getFullYear(); }));
			x.domain(populationData.map(function(d) { return d.date.getFullYear(); }));
		}
		else {
			// x.domain(d3.extent(populationData, function(d) { return d.date.getFullYear(); }));
			x.domain(populationData.map(function(d) { return d.date.getFullYear(); }));
		}

		// append the rectangles for the bar chart
		svg.selectAll(".bar")
			.data(populationData)
			.enter().append("rect")
			.attr("class", "bar")
			.attr("fill", function(d) { return z(d.CDName); })
			.attr("x", function(d) { return x(d.date.getFullYear()); })
			.attr("width", x.bandwidth())
			.attr("y", function(d) { return y(d.population); })
			.attr("height", function(d) { return height - y(d.population); })
			.on("mouseover", function(d) {

				tooltip.transition()
					.duration(200)
					.style("opacity", 1);

				tooltip.html(
					"<p><strong>Borough:</strong> " + d.boroughName + "</p>" +
					"<p><strong>Community District:</strong> " + d.CDName + "</p>" +
					"<p><strong>Date:</strong> " + d.date.getFullYear() + "</p>" +
					"<p><strong>Population:</strong> " + d.population + "</p>"
				)
					.style("left", d3.select(this).attr("cx") + "px")
  					.style("top", d3.select(this).attr("cy") + "px");
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

		createPopulationByCommunityFilter(populationData, boroughs, new Date("01/01/1950"), new Date("01/01/2040"));
		createPopulationByCommunityApplyButton(populationData, new Date("01/01/1950"), new Date("01/01/2040"));
		createPopulationByCommunityResetButton();

	}

	function createPopulationByCommunityFilter(populationData, boroughs, dateMin, dateMax){
		// console.log("---------- createPopulationByCommunityFilter ----------");
		// console.log("---------- populationData ----------");
		// console.log(populationData);
		// console.log("---------- populationData ----------");
		// console.log("---------- boroughs ----------");
		// console.log(boroughs);
		// console.log("---------- boroughs ----------");

		var dateSlider = "";

		dateSlider += "<p>Date Range for Population By Community Chart:&nbsp;</p>";
		dateSlider += "<p><input type='date-' id='date-populationByCommunityChart'></p>";
		dateSlider += "<div id='dateSlider-populationByCommunityChart' style='width:92%; left: 0;'></div></br>";

		var boroughSelector = "";

		boroughSelector += "<p>Select Borough:</p><p><select id='selectBorough-populationByCommunityChart' size='1' style='width: 202px;'>";
		boroughs.forEach(function (d){
			boroughSelector += "<option value=" + d + ">" + d + "</option>";
		})
		boroughSelector += "</select><p/>";

		// boroughSelector += "<div class='dropdown'>";
		// boroughSelector += "<button class='btn btn-primary dropdown-toggle' id='borough-populationByCommunityChart' type='button' data-toggle='dropdown'>Borough Selector";
		// boroughSelector += "<span class='caret'></span></button>";
		// boroughSelector += "<ul class='dropdown-menu' role='menu' aria-labelledby='menu1'>";
        //
		// boroughs.forEach(function (d){
		// 	boroughSelector += "<li role='presentation'><a role='menuitem' tabindex='-1' href='#'>"+ d +"</a></li>"
		// })
		// boroughSelector += "</ul>";
		// boroughSelector += "</div><br>";

		document.getElementById('populationByCommunityChartFilters').innerHTML = dateSlider + boroughSelector;

		// parse the date / time
		var parseTime = d3.timeParse("%Y-%m-%d");

		tempData = [];

		populationData.forEach(function (d){
			tempData.push(d.date.getTime());
		});

		// console.log("---------- tempData ----------");
		// console.log(tempData);
		// console.log("---------- tempData ----------");

		if (dateMin != null && dateMin != undefined && dateMax != null && dateMax != undefined) {
			$(function (){
				$("#dateSlider-populationByCommunityChart").slider({
					range: true,
					min: Math.min.apply(null, tempData),
					max: Math.max.apply(null, tempData),
					values: [dateMin.getTime(), dateMax.getTime() ],
					slide: function( event, ui ) {
						dateMin = new Date(ui.values[0]);
						dateMax = new Date(ui.values[1]);

						// console.log(dateMin);
						// console.log(dateMax);


						$( "#date-populationByCommunityChart").val((dateMin.getFullYear()) + " - " + (dateMax.getFullYear()) );
					}
				});
			})
		}
		else {
			$(function (){
				$("#dateSlider-populationByCommunityChart").slider({
					range: true,
					min: Math.min.apply(null, tempData),
					max: Math.max.apply(null, tempData),
					values: [Math.min.apply(null, tempData), Math.max.apply(null, tempData) ],
					slide: function( event, ui ) {
						var dateMin = new Date(ui.values[0]);
						var dateMax = new Date(ui.values[1]);

						// console.log(dateMin);
						// console.log(dateMax);

						$( "#date-populationByCommunityChart").val((dateMin.getFullYear()) + " - " + (dateMax.getFullYear()) );
					}
				});
			})
		}
	}

	function createPopulationByCommunityApplyButton(populationData, dateMin, dateMax){
		document.getElementById("populationByCommunityChartApplyButton").innerHTML = "";

		var populationByCommunityChartApplyButton = document.createElement("populationByCommunityChartApplyButton");

		populationByCommunityChartApplyButton.innerHTML = "<button>Apply Filter</button>";

		document.getElementById("populationByCommunityChartApplyButton").appendChild(populationByCommunityChartApplyButton);

		populationByCommunityChartApplyButton.addEventListener ("click", function() {
			// console.log("---------- Submit Button Clicked ----------");
			// console.log($("#dateSlider-populationByCommunityChart").val());
			// console.log($("#selectBorough-populationByCommunityChart").val());

			var min = new Date($("#dateSlider-populationByCommunityChart").slider( "values", 0 )),
				max = new Date($("#dateSlider-populationByCommunityChart").slider( "values", 1 )),
				selectedBorough = $("#selectBorough-populationByCommunityChart option:selected").text();

			// console.log("---------- min ----------");
			// console.log(min);
			// console.log("---------- min ----------");
			// console.log("---------- max ----------");
			// console.log(max);
			// console.log("---------- max ----------");


			document.getElementById("populationByCommunityChart").innerHTML = "";

			createPopulationByCommunityChart(populationData, min, max, selectedBorough);
		});
	}

	function createPopulationByCommunityResetButton(){
		document.getElementById("populationByCommunityChartResetButton").innerHTML = "";

		var populationByCommunityChartResetButton = document.createElement("populationByCommunityChartResetButton");

		populationByCommunityChartResetButton.innerHTML = "<button>Reset Filter</button>";

		document.getElementById("populationByCommunityChartResetButton").appendChild(populationByCommunityChartResetButton);

		var populationData = [];
		var boroughs = [];
		var communityDistricts = [];

		populationByCommunityChartResetButton.addEventListener ("click", function() {
			populationData = [];

			var populationByCommunityDistricts = {!! json_encode($populationByCommunityDistricts->toArray()) !!};

			// console.log("---------- populationByCommunityDistricts ----------");
			// console.log(populationByCommunityDistricts);
			// console.log("---------- populationByCommunityDistricts ----------");
			// var selectedBorough = "Bronx";

			populationByCommunityDistricts.forEach(function (d){
				if (boroughs.indexOf(d.Borough) == -1) {
					boroughs.push(d.Borough);
				}

				if (communityDistricts.indexOf(d.CDName) == -1) {
					communityDistricts.push(d.CDName);
				}

				// if (communityDistricts.map(function(e) { return e.id; }).indexOf(d.CDNumber) == -1) {
				// 	communityDistricts.push({id: d.CDNumber, name: d.CDName});
				// }

				// if ((communityDistricts.findIndex(x => x.id == d.CDNumber) == -1) && (d.Borough == selectedBorough)) {
				// 	communityDistricts.push({id: d.CDNumber, name: d.CDName});
				// }

				if (d.Borough == selectedBorough) {
					populationData.push({boroughName: d.Borough, CDId: d.CDNumber, CDName: d.CDName, date: new Date("1970"), population: d.Population1970});
					populationData.push({boroughName: d.Borough, CDId: d.CDNumber, CDName: d.CDName, date: new Date("1980"), population: d.Population1980});
					populationData.push({boroughName: d.Borough, CDId: d.CDNumber, CDName: d.CDName, date: new Date("1990"), population: d.Population1990});
					populationData.push({boroughName: d.Borough, CDId: d.CDNumber, CDName: d.CDName, date: new Date("2000"), population: d.Population2000});
					populationData.push({boroughName: d.Borough, CDId: d.CDNumber, CDName: d.CDName, date: new Date("2010"), population: d.Population2010});
					// populationData.push({boroughName: d.Borough, CDId: d.CDNumber, CDName: d.CDName, date: new Date("2020"), population: d.population2020});
					// populationData.push({boroughName: d.Borough, CDId: d.CDNumber, CDName: d.CDName, date: new Date("2030"), population: d.population2030});
					// populationData.push({boroughName: d.Borough, CDId: d.CDNumber, CDName: d.CDName, date: new Date("2040"), population: d.population2040});
				}
			})

			populationData.sort(function(a, b) { return b.date - a.date || b.population - a.population ; });

			document.getElementById("populationByCommunityChart").innerHTML = "";

			createPopulationByCommunityChart(populationData, d3.extent(populationData, function(d) { return d.date; })[0], d3.extent(populationData, function(d) { return d.date; })[1], "Manhattan");



		});


	}

	function createWaterConsumptionChart(waterConsumptionData, dateMin, dateMax){
		// Set the dimensions of the canvas / graph
		var margin = {top: 30, right: 80, bottom: 70, left: 60},
			width = 600 - margin.left - margin.right,
			height = 300 - margin.top - margin.bottom;

		// Adds the svg canvas
		var svg = d3.select("#waterConsumptionChart")
			.append("svg")
			.attr("width", width + margin.left + margin.right)
			.attr("height", height + margin.top + margin.bottom)
			.append("g")
			.attr("transform", "translate(" + margin.left + "," + margin.top + ")");

		// Define the div for the tooltip
		var tooltip = d3.select("#waterConsumptionChart").append("div")
			.attr("class", "tooltip")
			.style("opacity", 0);

		var waterConsumption = {!! json_encode($waterConsumption->toArray()) !!};

		// console.log("---------- waterConsumption ----------");
		// console.log(waterConsumption);
		// console.log("---------- waterConsumption ----------");

		var waterConsumptionData = [];

		waterConsumption.forEach(function(d){
			waterConsumptionData.push({date: new Date(d.Year), population: Number(d.NewYorkCityPopulation), consumption: Number(d.NYCConsumption), consumptionPerCapita: Number(d.PerCapita) });
		})

		waterConsumptionData.sort(function(a, b) { return a.date - b.date; });

		// console.log("------------ waterConsumptionData ------------");
		// console.log(waterConsumptionData);
		// console.log("------------ waterConsumptionData ------------");


		// Set the ranges
		var x = d3.scaleTime().rangeRound([0, width]),
			yPopulation = d3.scaleLinear().rangeRound([height, 0]),
			yConsumption = d3.scaleLinear().rangeRound([height, 0]),
			yConsumptionPerCapita = d3.scaleLinear().rangeRound([height, 0]);
			// z = d3.scaleOrdinal(d3.schemeCategory20);

		// Scale the range of the data
		// x.domain(populationData.map(function(d) { return d.date.getFullYear(); }));
		yPopulation.domain([0, Math.max.apply(Math, waterConsumptionData.map(function(d) { return d.population; }))]).nice();
		yConsumption.domain([0, Math.max.apply(Math, waterConsumptionData.map(function(d) { return d.consumption; }))]).nice();
		yConsumptionPerCapita.domain([0, Math.max.apply(Math, waterConsumptionData.map(function(d) { return d.consumptionPerCapita; }))]).nice();

		// // Scale the range of the date
		// console.log("---------- dateMin ----------");
		// console.log(dateMin);
		// console.log("---------- dateMin ----------");
		// console.log("---------- dateMax ----------");
		// console.log(dateMax);
		// console.log("---------- dateMax ----------");

		if (dateMin != null && dateMin != undefined && dateMax != null && dateMax != undefined) {
			waterConsumptionData = waterConsumptionData.filter(function (d){
				return d.date >= dateMin;
			})

			waterConsumptionData = waterConsumptionData.filter(function (d){
				return d.date <= dateMax;
			})
			// x.domain(d3.extent(waterConsumptionData, function(d) { return d.date.getFullYear(); }));
			// x.domain(waterConsumptionData.map(function(d) { return d.date; }));
			x.domain(d3.extent(waterConsumptionData, function(d) { return d.date; }));
		}
		else {
			// x.domain(d3.extent(waterConsumptionData, function(d) { return d.date; }));
			// x.domain(waterConsumptionData.map(function(d) { return d.date; }));
			x.domain(d3.extent(waterConsumptionData, function(d) { return d.date; }));
		}

		// console.log("------------ yPopulation.domain() ------------");
		// console.log(yPopulation.domain());
		// console.log("------------ yPopulation.domain() ------------");
		//
		// console.log("------------ yConsumption.domain() ------------");
		// console.log(yConsumption.domain());
		// console.log("------------ yConsumption.domain() ------------");
		//
		// console.log("------------ yConsumptionPerCapita.domain() ------------");
		// console.log(yConsumptionPerCapita.domain());
		// console.log("------------ yConsumptionPerCapita.domain() ------------");
		//
		// console.log("------------ x.domain() ------------");
		// console.log(x.domain());
		// console.log("------------ x.domain() ------------");

		// define the population line
		var populationLine = d3.line()
			.x(function(d) { return x(d.date); })
			.y(function(d) { return yPopulation(d.population); });

		// define the consumption (Million of gallons perday) line
		var consumptionLine = d3.line()
			.x(function(d) { return x(d.date); })
			.y(function(d) { return yConsumption(d.consumption); });

		// define the per capita consumption (Gallons per person per day) line
		var consumptionPerCapitaLine = d3.line()
			.x(function(d) { return x(d.date); })
			.y(function(d) { return yConsumptionPerCapita(d.consumptionPerCapita); });

		// Add the populationLine path.
		svg.append("path")
			.data([waterConsumptionData])
			.attr("class", "populationLine")
			.style("stroke", "FireBrick")
			.style("fill", "none")
			.style("stroke-width", "2px")
			.attr("d", populationLine)
			.on("mouseover", function(d){
				// console.log("------------ d ------------");
				// console.log(d);
				// console.log("------------ d ------------");
			})
			.on("mouseout", function(d){
				// console.log("------------ d ------------");
				// console.log(d);
				// console.log("------------ d ------------");
			});

		// Add the consumptionLine path.
		svg.append("path")
			.data([waterConsumptionData])
			.attr("class", "consumptionLine")
			.style("stroke", "DodgerBlue")
			.style("fill", "none")
			.style("stroke-width", "2px")
			.attr("d", consumptionLine)
			.on("mouseover", function(d){
				// console.log("------------ d ------------");
				// console.log(d);
				// console.log("------------ d ------------");
			})
			.on("mouseout", function(d){
				// console.log("------------ d ------------");
				// console.log(d);
				// console.log("------------ d ------------");
			});

		// Add the consumptionPerCapitaLine path.
		svg.append("path")
			.data([waterConsumptionData])
			.attr("class", "consumptionPerCapitaLine")
			.style("stroke", "CornflowerBlue")
			.style("fill", "none")
			.style("stroke-width", "2px")
			.attr("d", consumptionPerCapitaLine)
			.on("mouseover", function(d){
				// console.log("------------ d ------------");
				// console.log(d);
				// console.log("------------ d ------------");
			})
			.on("mouseout", function(d){
				// console.log("------------ d ------------");
				// console.log(d);
				// console.log("------------ d ------------");
			});

		// Add the X Axis
		svg.append("g")
			.attr("transform", "translate(0," + height + ")")
			.call(d3.axisBottom(x))
			.selectAll("text")
			.style("text-anchor", "end")
			.attr("dx", "-.8em")
			.attr("dy", ".15em")
			.attr("transform", "rotate(-65)")
			.append("text")
			.attr("x", -10)
			.attr("y", 15)
			.attr("dy", "0.32em")
			.attr("fill", "#000")
			.attr("font-weight", "bold")
			.attr("text-anchor", "start")
			.text("Year");

		// Add the yConsumption Axis
		svg.append("g")
			.attr("class", "axis-yConsumption")
			.style("stroke", "FireBrick")
			.call(d3.axisLeft(yPopulation));

		// Add the yPopulation Axis
		svg.append("g")
			.attr("class", "axis-yPopulation")
			.style("stroke", "DodgerBlue")
			.attr("transform", "translate( " + width + ", 0 )")
			.call(d3.axisRight(yConsumption));
			// .append("text")
			// .attr("x", 2)
			// .attr("y", y(y.ticks().pop()) + 0.5)
			// .attr("dy", "0.32em")
			// .attr("fill", "#000")
			// .attr("font-weight", "bold")
			// .attr("text-anchor", "start")
			// .text("Population");

		// Add the yConsumptionPerCapita Axis
		svg.append("g")
			.attr("class", "axis-yConsumptionPerCapita")
			.style("stroke", "CornflowerBlue")
			.attr("transform", "translate( " + width + ", 0 )")
			.call(d3.axisLeft(yConsumptionPerCapita));

		var focusPopulation = svg.append("g")
			.attr("class", "focus")
			.style("display", "none");

		var focusConsumption = svg.append("g")
			.attr("class", "focus")
			.style("display", "none");

		var focusConsumptionPerCapita = svg.append("g")
			.attr("class", "focus")
			.style("display", "none");

		// append the circle at the intersection
		focusPopulation.append("circle")
			.attr("class", "population")
			.style("fill", "none")
			.style("stroke", "blue")
			.attr("r", 4);

		focusPopulation.append("text");

		// append the circle at the intersection
		focusConsumption.append("circle")
			.attr("class", "consumption")
			.style("fill", "none")
			.style("stroke", "blue")
			.attr("r", 4);

		focusConsumption.append("text");

		// append the circle at the intersection
		focusConsumptionPerCapita.append("circle")
			.attr("class", "consumptionPerCapita")
			.style("fill", "none")
			.style("stroke", "blue")
			.attr("r", 4);

		focusConsumptionPerCapita.append("text");

		// append the rectangle to capture mouse
		svg.append("rect")
			.attr("width", width)
			.attr("height", height)
			.style("fill", "none")
			.style("pointer-events", "all")
			.on("mouseover", function() { focusPopulation.style("display", null); focusConsumption.style("display", null); focusConsumptionPerCapita.style("display", null); })
			.on("mouseout", function() { focusPopulation.style("display", "none"); focusConsumption.style("display", "none"); focusConsumptionPerCapita.style("display", "none"); })
			.on("mousemove", mousemove);

			function mousemove() {
				var x0 = x.invert(d3.mouse(this)[0]),
					bisectDate = d3.bisector(function(d) { return d.date; }).left;
					i = bisectDate(waterConsumptionData, x0, 1),
					d0 = waterConsumptionData[i - 1],
					d1 = waterConsumptionData[i],
					d = x0 - d0.date > d1.date - x0 ? d1 : d0;

				// focusPopulation.select("circle.population")
				// 	.attr("transform", "translate(" + x(d.date) + "," + yPopulation(d.population) + ")");
				//
				// focusConsumption.select("circle.consumption")
				// 	.attr("transform", "translate(" + x(d.date) + "," + yConsumption(d.consumption) + ")");
				//
				// focusConsumptionPerCapita.select("circle.consumptionPerCapita")
				// 	.attr("transform", "translate(" + x(d.date) + "," + yConsumptionPerCapita(d.consumptionPerCapita) + ")");

				focusPopulation.attr("transform", "translate(" + x(d.date) + "," + yPopulation(d.population) + ")");
				focusConsumption.attr("transform", "translate(" + x(d.date) + "," + yConsumption(d.consumption) + ")");
				focusConsumptionPerCapita.attr("transform", "translate(" + x(d.date) + "," + yConsumptionPerCapita(d.consumptionPerCapita) + ")");

				focusPopulation.select("text").text("");
				focusConsumption.select("text").text("");
				focusConsumptionPerCapita.select("text").text("");

				focusPopulation.select("text").text(d.population);
				focusConsumption.select("text").text(d.consumption);
				focusConsumptionPerCapita.select("text").text(d.consumptionPerCapita);


			}

		// console.log("---------- d3.extent(waterConsumptionData, function(d) { return d.date; })[0] ----------");
		// console.log(d3.extent(waterConsumptionData, function(d) { return d.date; })[0]);
		// console.log("---------- d3.extent(waterConsumptionData, function(d) { return d.date; })[0] ----------");
		// console.log("---------- dateMax ----------");
		// console.log(dateMax);
		// console.log("---------- dateMax ----------");


		createWaterConsumptionFilter(waterConsumptionData, d3.extent(waterConsumptionData, function(d) { return d.date; })[0], d3.extent(waterConsumptionData, function(d) { return d.date; })[1]);
		createWaterConsumptionApplyButton(waterConsumptionData, d3.extent(waterConsumptionData, function(d) { return d.date; })[0], d3.extent(waterConsumptionData, function(d) { return d.date; })[1]);
		createWaterConsumptionResetButton();

	}

	function createWaterConsumptionFilter(waterConsumptionData, dateMin, dateMax){
		var dateSlider = "";

		// console.log("---------- createWaterConsumptionFilter ----------");
		// console.log("---------- dateMax ----------");
		// console.log(dateMax);
		// console.log("---------- dateMax ----------");
		// console.log("---------- dateMin ----------");
		// console.log(dateMin);
		// console.log("---------- dateMin ----------");

		dateSlider += "<p>Date Range for Water Consumption Chart:&nbsp;</p>";
		dateSlider += "<p><input type='date-' id='date-waterConsumptionChart'></p>";
		dateSlider += "<div id='dateSlider-waterConsumptionChart' style='width:92%; left: 0;'></div></br>";

		document.getElementById('waterConsumptionChartFilters').innerHTML = dateSlider;

		// parse the date / time
		var parseTime = d3.timeParse("%Y-%m-%d");

		tempData = [];

		waterConsumptionData.forEach(function (d){
			tempData.push(d.date.getTime());
		});

		// console.log("---------- tempData ----------");
		// console.log(tempData);
		// console.log("---------- tempData ----------");

		if (dateMin != null && dateMin != undefined && dateMax != null && dateMax != undefined) {
			$(function (){
				$("#dateSlider-waterConsumptionChart").slider({
					range: true,
					min: Math.min.apply(null, tempData),
					max: Math.max.apply(null, tempData),
					values: [dateMin.getTime(), dateMax.getTime() ],
					slide: function( event, ui ) {
						dateMin = new Date(ui.values[0]);
						dateMax = new Date(ui.values[1]);

						// console.log("---------- waterConsumptionChartFilters ----------");
						// console.log("---------- dateMin ----------");
						// console.log(dateMin);
						// console.log("---------- dateMin ----------");
						// console.log("---------- dateMax ----------");
						// console.log(dateMax);
						// console.log("---------- dateMax ----------");


						$( "#date-waterConsumptionChart").val((dateMin.getFullYear()) + " - " + (dateMax.getFullYear()) );
					}
				});
			})
		}
		else {
			$(function (){
				$("#dateSlider-waterConsumptionChart").slider({
					range: true,
					min: Math.min.apply(null, tempData),
					max: Math.max.apply(null, tempData),
					values: [Math.min.apply(null, tempData), Math.max.apply(null, tempData) ],
					slide: function( event, ui ) {
						var dateMin = new Date(ui.values[0]);
						var dateMax = new Date(ui.values[1]);

						// console.log(dateMin);
						// console.log(dateMax);

						// console.log("---------- waterConsumptionChartFilters ----------");
						// console.log("---------- dateMin ----------");
						// console.log(dateMin);
						// console.log("---------- dateMin ----------");
						// console.log("---------- dateMax ----------");
						// console.log(dateMax);
						// console.log("---------- dateMax ----------");

						$( "#date-waterConsumptionChart").val((dateMin.getFullYear()) + " - " + (dateMax.getFullYear()) );
					}
				});
			})
		}
	}

	function createWaterConsumptionApplyButton(waterConsumptionData, dateMin, dateMax){
		document.getElementById("waterConsumptionChartApplyButton").innerHTML = "";

		var waterConsumptionChartApplyButton = document.createElement("waterConsumptionChartApplyButton");

		waterConsumptionChartApplyButton.innerHTML = "<button>Apply Filter</button>";

		document.getElementById("waterConsumptionChartApplyButton").appendChild(waterConsumptionChartApplyButton);

		waterConsumptionChartApplyButton.addEventListener ("click", function() {
			// console.log("---------- Submit Button Clicked ----------");
			// console.log($("#dateSlider-waterConsumptionChart").val());

			var min = new Date($("#dateSlider-waterConsumptionChart").slider( "values", 0 )),
				max = new Date($("#dateSlider-waterConsumptionChart").slider( "values", 1 ));

			// console.log("---------- waterConsumptionChartApplyButton ----------");
			// console.log("---------- min ----------");
			// console.log(min);
			// console.log("---------- min ----------");
			// console.log("---------- max ----------");
			// console.log(max);
			// console.log("---------- max ----------");

			document.getElementById("waterConsumptionChart").innerHTML = "";

			createWaterConsumptionChart(waterConsumptionData, min, max);
		});
	}

	function createWaterConsumptionResetButton(){
		document.getElementById("waterConsumptionChartResetButton").innerHTML = "";

		var waterConsumptionChartResetButton = document.createElement("waterConsumptionChartResetButton");

		waterConsumptionChartResetButton.innerHTML = "<button>Reset Filter</button>";

		document.getElementById("waterConsumptionChartResetButton").appendChild(waterConsumptionChartResetButton);


		var waterConsumptionData = [];



		waterConsumptionChartResetButton.addEventListener ("click", function() {
			waterConsumptionData = [];
			document.getElementById("waterConsumptionChart").innerHTML = "";
			var waterConsumption = {!! json_encode($waterConsumption->toArray()) !!};


			waterConsumption.forEach(function(d){
				waterConsumptionData.push({date: new Date(d.Year), population: Number(d.NewYorkCityPopulation), consumption: Number(d.NYCConsumption), consumptionPerCapita: Number(d.PerCapita) });
			})

			waterConsumptionData.sort(function(a, b) { return a.date - b.date; });

			createWaterConsumptionChart(waterConsumptionData, d3.extent(waterConsumptionData, function(d) { return d.date; })[0], d3.extent(waterConsumptionData, function(d) { return d.date; })[1], "Manhattan");

		});


		// console.log("---------- waterConsumption ----------");
		// console.log(waterConsumption);
		// console.log("---------- waterConsumption ----------");
	}

	function createBirthsByGenderChart(birthData, selectedDate){
		// Set the dimensions of the canvas / graph
		var margin = {top: 30, right: 80, bottom: 70, left: 60},
			width = 600 - margin.left - margin.right,
			height = 300 - margin.top - margin.bottom
			radius = Math.min(width, height) / 2;

		var arc = d3.arc()
			.outerRadius(radius - 10)
			.innerRadius(0);

		var labelArc = d3.arc()
			.outerRadius(radius - 40)
			.innerRadius(radius - 40);

		var pie = d3.pie()
			.sort(null)
			.value(function(d) { return d.value.total; });

		// Adds the svg canvas
		var svg = d3.select("#birthsByGenderChart")
			.append("svg")
			.attr("width", width + margin.left + margin.right)
			.attr("height", height + margin.top + margin.bottom)
			.append("g")
			.attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");
			// .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

		// Define the div for the tooltip
		var tooltip = d3.select("#birthsByGenderChart").append("div")
			.attr("class", "tooltip")
			.style("opacity", 0);

		var color = d3.scaleOrdinal(d3.schemeCategory10);

		var natality = {!! json_encode($natality->toArray()) !!};

		// console.log("---------- natality ----------");
		// console.log(natality);
		// console.log("---------- natality ----------");

		natality.forEach(function(d){
			// console.log("---------- d ----------");
			// console.log(d);
			// console.log("---------- d ----------");
			d.date = new Date(d.date)
		})

		birthData = natality;

		birthData.sort(function(a, b) { return a.date - b.date; });

		// console.log("---------- birthData ----------");
		// console.log(birthData);
		// console.log("---------- birthData ----------");


		// if (selectedDate != null && selectedDate != undefined) {
		// 	selectedDate = selectedDate;
		// }
		// else {
		// 	selectedDate = d3.extent(birthData, function(d) { return d.date; })[0];
		// }

		// console.log("---------- selectedDate-pre ----------");
		// console.log(selectedDate);
		// console.log("---------- selectedDate-pre ----------");

		if (selectedDate == null && selectedDate == undefined) {
			selectedDate = d3.extent(birthData, function(d) { return d.date; })[0];
			// selectedDate = new Date(selectedDate.toString());
		}
		else {
			selectedDate = new Date(selectedDate.toString());
		}

		// console.log("---------- selectedDate-post ----------");
		// console.log(selectedDate);
		// console.log("---------- selectedDate-post ----------");
		//
		// console.log("---------- new Date ----------");
		// console.log(new Date("2015"));
		// console.log("---------- new Date ----------");

		filteredBirthData = [];

		// console.log("---------- selectedDate ----------");
		// console.log(selectedDate);
		// console.log("---------- selectedDate ----------");

		birthData.forEach(function(d){
			// console.log("---------- d ----------");
			// console.log(d);
			// console.log("---------- d ----------");
			if (d.date.getFullYear() == selectedDate.getFullYear()) {
				// console.log("---------- d ----------");
				// console.log(d);
				// console.log("---------- d ----------");
				filteredBirthData.push(d);
			}
		})

		// console.log("---------- filteredBirthData ----------");
		// console.log(filteredBirthData);
		// console.log("---------- filteredBirthData ----------");

		var nestedBirthData = d3.nest()
			.key(function(d) { return d.sex; })
			.rollup(function(v) { return {
				total: d3.sum(v, function(d) { return d.births; }),
				avg: d3.mean(v, function(d) { return d.births; })
			}; })
			.entries(filteredBirthData);

		// console.log("---------- nestedBirthData ----------");
		// console.log(nestedBirthData);
		// console.log("---------- nestedBirthData ----------");

		// birthData = birthData.filter(function(d){return d.date == selectedDate;})

		var g = svg.selectAll(".arc")
			.data(pie(nestedBirthData))
			.enter().append("g")
			.attr("class", "arc")
			.on("mouseover", function(d) {

				tooltip.transition()
					.duration(200)
					.style("opacity", 1);

				tooltip.html(
					"<p><strong>Year:</strong> " + selectedDate.getFullYear() + "</p>" +
					"<p><strong>Gender:</strong> " + d.data.key + "</p>" +
					"<p><strong>Total Births:</strong> " + d.data.value.avg + "</p>"
				)
					.style("left", d3.select(this).attr("cx") + "px")
  					.style("top", d3.select(this).attr("cy") + "px");
			})
			.on("mouseout", function(d) {
				tooltip.transition()
					.duration(500)
					.style("opacity", 0);
			});

		g.append("path")
			.attr("d", arc)
			.style("fill", function(d) { return color(d.data.key); });

		g.append("text")
			.attr("transform", function(d) { return "translate(" + labelArc.centroid(d) + ")"; })
			.attr("dy", ".35em")
			.text(function(d) { return d.data.value.total; });

		createBirthsByGenderFilter(birthData);
		createBirthsByGenderApplyButton(birthData);
		createBirthsByGenderResetButton(birthData);

		//here
	}

	function createBirthsByGenderFilter(birthData){
		var dateSelector = "";

		// console.log("---------- createWaterConsumptionFilter ----------");
		// console.log("---------- dateMax ----------");
		// console.log(dateMax);
		// console.log("---------- dateMax ----------");
		// console.log("---------- dateMin ----------");
		// console.log(dateMin);
		// console.log("---------- dateMin ----------");

		// dateSelector += "<p>Select Year for Birth By Gender Chart:&nbsp;</p>";
		// dateSelector += "<p><input type='text' id='datepicker-birthsByGenderChart'></p>";
		// dateSelector += "<div id='datepicker-birthsByGenderChart' style='width:92%; left: 0;'></div></br>";

		var years = [];

		birthData.forEach(function(d){
			if (years.includes(d.date.getFullYear()) != true) {
				years.push(d.date.getFullYear());
			}
		})

		// console.log("---------- years ----------");
		// console.log(years);
		// console.log("---------- years ----------");


		dateSelector += "<p>Select Year for Birth By Gender Chart:</p><p><select id='selectYear-birthsByGenderChart' size='1' style='width: 202px;'>";
		years.forEach(function (d){
			dateSelector += "<option value=" + d + ">" + d + "</option>";
		})
		dateSelector += "</select></p>";

		document.getElementById('birthsByGenderChartFilters').innerHTML = dateSelector;



		// $(function (){
		// 	$("#datepicker-birthsByGenderChart").datepicker({
		// 		dateFormat: 'yy',
		// 		changeYear: true,
		// 		changeMonth: false
		// 	});
		// })


	}

	function createBirthsByGenderApplyButton(birthData){
		document.getElementById("birthsByGenderChartApplyButton").innerHTML = "";

		var birthsByGenderChartApplyButton = document.createElement("birthsByGenderChartApplyButton");

		birthsByGenderChartApplyButton.innerHTML = "<button>Apply Filter</button>";

		document.getElementById("birthsByGenderChartApplyButton").appendChild(birthsByGenderChartApplyButton);

		birthsByGenderChartApplyButton.addEventListener ("click", function() {
			// console.log("---------- Submit Button Clicked ----------");
			// console.log($("#dateSlider-birthsByGenderChart").val());
			// console.log($("#selectBorough-birthsByGenderChart").val());

			var selectedYear = $("#selectYear-birthsByGenderChart").val();

			// console.log("---------- min ----------");
			// console.log(min);
			// console.log("---------- min ----------");
			// console.log("---------- max ----------");
			// console.log(max);
			// console.log("---------- max ----------");
			console.log("---------- selectedYear ----------");
			console.log(selectedYear);
			console.log("---------- selectedYear ----------");


			document.getElementById("birthsByGenderChart").innerHTML = "";

			createBirthsByGenderChart(birthData, selectedYear);
		});
	}

	function createBirthsByGenderResetButton(birthdata){
		document.getElementById("birthsByGenderChartResetButton").innerHTML = "";

		var birthsByGenderChartResetButton = document.createElement("birthsByGenderChartResetButton");

		birthsByGenderChartResetButton.innerHTML = "<button>Reset Filter</button>";

		document.getElementById("birthsByGenderChartResetButton").appendChild(birthsByGenderChartResetButton);

		birthsByGenderChartResetButton.addEventListener ("click", function() {
			var natality = {!! json_encode($natality->toArray()) !!};
			birthData = [];

			natality.forEach(function(d){
				// console.log("---------- d ----------");
				// console.log(d);
				// console.log("---------- d ----------");

				birthData.push({date: new Date(d.date), sex: d.sex, births: Number(d.births)});
			})

			birthData.sort(function(a, b) { return a.date - b.date; });

			// console.log("---------- birthData ----------");
			// console.log(birthData);
			// console.log("---------- birthData ----------");

			selectedDate = d3.extent(birthData, function(d) { return d.date; })[0];

			document.getElementById("birthsByGenderChart").innerHTML = "";

			createBirthsByGenderChart(birthData,selectedDate);


		});
	}

	function createBirthsByRaceChart(birthData, selectedDate){
		// Set the dimensions of the canvas / graph
		var margin = {top: 30, right: 80, bottom: 70, left: 60},
			width = 600 - margin.left - margin.right,
			height = 300 - margin.top - margin.bottom
			radius = Math.min(width, height) / 2;

		var arc = d3.arc()
			.outerRadius(radius - 10)
			.innerRadius(0);

		var labelArc = d3.arc()
			.outerRadius(radius - 40)
			.innerRadius(radius - 40);

		var pie = d3.pie()
			.sort(null)
			.value(function(d) { return d.value.total; });

		// Adds the svg canvas
		var svg = d3.select("#birthsByRaceChart")
			.append("svg")
			.attr("width", width + margin.left + margin.right)
			.attr("height", height + margin.top + margin.bottom)
			.append("g")
			.attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");
			// .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

		// Define the div for the tooltip
		var tooltip = d3.select("#birthsByRaceChart").append("div")
			.attr("class", "tooltip")
			.style("opacity", 0);

		var color = d3.scaleOrdinal(d3.schemeCategory10);

		var natality = {!! json_encode($natality->toArray()) !!};

		// console.log("---------- natality ----------");
		// console.log(natality);
		// console.log("---------- natality ----------");

		natality.forEach(function(d){
			// console.log("---------- d ----------");
			// console.log(d);
			// console.log("---------- d ----------");
			d.date = new Date(d.date)
		})

		birthData = natality;

		birthData.sort(function(a, b) { return a.date - b.date; });

		// console.log("---------- birthData ----------");
		// console.log(birthData);
		// console.log("---------- birthData ----------");


		// if (selectedDate != null && selectedDate != undefined) {
		// 	selectedDate = selectedDate;
		// }
		// else {
		// 	selectedDate = d3.extent(birthData, function(d) { return d.date; })[0];
		// }

		// console.log("---------- selectedDate-pre ----------");
		// console.log(selectedDate);
		// console.log("---------- selectedDate-pre ----------");

		if (selectedDate == null && selectedDate == undefined) {
			selectedDate = d3.extent(birthData, function(d) { return d.date; })[0];
			// selectedDate = new Date(selectedDate.toString());
		}
		else {
			selectedDate = new Date(selectedDate.toString());
		}

		// console.log("---------- selectedDate-post ----------");
		// console.log(selectedDate);
		// console.log("---------- selectedDate-post ----------");
		//
		// console.log("---------- new Date ----------");
		// console.log(new Date("2015"));
		// console.log("---------- new Date ----------");

		filteredBirthData = [];

		// console.log("---------- selectedDate ----------");
		// console.log(selectedDate);
		// console.log("---------- selectedDate ----------");

		birthData.forEach(function(d){
			// console.log("---------- d ----------");
			// console.log(d);
			// console.log("---------- d ----------");
			if (d.date.getFullYear() == selectedDate.getFullYear()) {
				// console.log("---------- d ----------");
				// console.log(d);
				// console.log("---------- d ----------");
				filteredBirthData.push(d);
			}
		})

		// console.log("---------- filteredBirthData ----------");
		// console.log(filteredBirthData);
		// console.log("---------- filteredBirthData ----------");

		var nestedBirthData = d3.nest()
			.key(function(d) { return d.race; })
			.rollup(function(v) { return {
				total: d3.sum(v, function(d) { return d.births; }),
				avg: d3.mean(v, function(d) { return d.births; })
			}; })
			.entries(filteredBirthData);

		// console.log("---------- nestedBirthData ----------");
		// console.log(nestedBirthData);
		// console.log("---------- nestedBirthData ----------");

		// birthData = birthData.filter(function(d){return d.date == selectedDate;})

		var g = svg.selectAll(".arc")
			.data(pie(nestedBirthData))
			.enter().append("g")
			.attr("class", "arc")
			.on("mouseover", function(d) {

				tooltip.transition()
					.duration(200)
					.style("opacity", 1);

				tooltip.html(
					"<p><strong>Year:</strong> " + selectedDate.getFullYear() + "</p>" +
					"<p><strong>Race:</strong> " + d.data.key + "</p>" +
					"<p><strong>Total Births:</strong> " + d.data.value.avg + "</p>"
				)
					.style("left", d3.select(this).attr("cx") + "px")
  					.style("top", d3.select(this).attr("cy") + "px");
			})
			.on("mouseout", function(d) {
				tooltip.transition()
					.duration(500)
					.style("opacity", 0);
			});

		g.append("path")
			.attr("d", arc)
			.style("fill", function(d) { return color(d.data.key); });

		g.append("text")
			.attr("transform", function(d) { return "translate(" + labelArc.centroid(d) + ")"; })
			.attr("dy", ".35em")
			.text(function(d) { return d.data.value.total; });

		createBirthsByRaceFilter(birthData);
		createBirthsByRaceApplyButton(birthData);
		createBirthsByRaceResetButton(birthData);


	}

	function createBirthsByRaceFilter(birthData){
		var dateSelector = "";

		// console.log("---------- createWaterConsumptionFilter ----------");
		// console.log("---------- dateMax ----------");
		// console.log(dateMax);
		// console.log("---------- dateMax ----------");
		// console.log("---------- dateMin ----------");
		// console.log(dateMin);
		// console.log("---------- dateMin ----------");

		// dateSelector += "<p>Select Year for Birth By Race Chart:&nbsp;</p>";
		// dateSelector += "<p><input type='text' id='datepicker-birthsByRaceChart'></p>";
		// dateSelector += "<div id='datepicker-birthsByRaceChart' style='width:92%; left: 0;'></div></br>";

		var years = [];

		birthData.forEach(function(d){
			if (years.includes(d.date.getFullYear()) != true) {
				years.push(d.date.getFullYear());
			}
		})

		// console.log("---------- years ----------");
		// console.log(years);
		// console.log("---------- years ----------");


		dateSelector += "<p>Select Year for Birth By Race Chart:</p><p><select id='selectYear-birthsByRaceChart' size='1' style='width: 202px;'>";
		years.forEach(function (d){
			dateSelector += "<option value=" + d + ">" + d + "</option>";
		})
		dateSelector += "</select></p>";

		document.getElementById('birthsByRaceChartFilters').innerHTML = dateSelector;



		// $(function (){
		// 	$("#datepicker-birthsByRaceChart").datepicker({
		// 		dateFormat: 'yy',
		// 		changeYear: true,
		// 		changeMonth: false
		// 	});
		// })


	}

	function createBirthsByRaceApplyButton(birthData){
		document.getElementById("birthsByRaceChartApplyButton").innerHTML = "";

		var birthsByRaceChartApplyButton = document.createElement("birthsByRaceChartApplyButton");

		birthsByRaceChartApplyButton.innerHTML = "<button>Apply Filter</button>";

		document.getElementById("birthsByRaceChartApplyButton").appendChild(birthsByRaceChartApplyButton);

		birthsByRaceChartApplyButton.addEventListener ("click", function() {
			// console.log("---------- Submit Button Clicked ----------");
			// console.log($("#dateSlider-birthsByRaceChart").val());
			// console.log($("#selectBorough-birthsByRaceChart").val());

			var selectedYear = $("#selectYear-birthsByRaceChart").val();

			// console.log("---------- min ----------");
			// console.log(min);
			// console.log("---------- min ----------");
			// console.log("---------- max ----------");
			// console.log(max);
			// console.log("---------- max ----------");
			// console.log("---------- selectedYear ----------");
			// console.log(selectedYear);
			// console.log("---------- selectedYear ----------");


			document.getElementById("birthsByRaceChart").innerHTML = "";

			createBirthsByRaceChart(birthData, selectedYear);
		});
	}

	function createBirthsByRaceResetButton(birthdata){
		document.getElementById("birthsByRaceChartResetButton").innerHTML = "";

		var birthsByRaceChartResetButton = document.createElement("birthsByRaceChartResetButton");

		birthsByRaceChartResetButton.innerHTML = "<button>Reset Filter</button>";

		document.getElementById("birthsByRaceChartResetButton").appendChild(birthsByRaceChartResetButton);

		birthsByRaceChartResetButton.addEventListener ("click", function() {
			var natality = {!! json_encode($natality->toArray()) !!};

			birthData = [];
			natality.forEach(function(d){
				// console.log("---------- d ----------");
				// console.log(d);
				// console.log("---------- d ----------");

				birthData.push({date: new Date(d.date), sex: d.sex, births: Number(d.births)});
			})

			birthData.sort(function(a, b) { return a.date - b.date; });

			// console.log("---------- birthData ----------");
			// console.log(birthData);
			// console.log("---------- birthData ----------");

			selectedDate = d3.extent(birthData, function(d) { return d.date; })[0];

			document.getElementById("birthsByRaceChart").innerHTML = "";

			createBirthsByRaceChart(birthData,selectedDate);

		});
	}

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

	function createActualRevenuesChart(revenueAmount, selectedCategory, dateMin, dateMax){
		console.log(revenueAmount, selectedCategory, dateMin, dateMax);

		var margin = {top: 30, right: 80, bottom: 70, left: 60},
			width = 600 - margin.left - margin.right,
			height = 300 - margin.top - margin.bottom;

		var svg = d3.select("#actualRevenuesChart")
			.append("svg")
			.attr("width", width + margin.left + margin.right)
			.attr("height", height + margin.top + margin.bottom)
			.append("g")
			.attr("transform", "translate(" + margin.left + "," + margin.top + ")");

		var tooltip = d3.select("#actualRevenuesChart").append("div")
			.attr("class", "tooltip")
			.style("opacity", 0);

		var revenueAmount = [];
		var revenue_category = [];
		var revenue_class = [];

		var actualRevenues = {!! json_encode($actualRevenues->toArray()) !!};

		actualRevenues.forEach(function (d){
			if (revenue_category.indexOf(d.revenueCategory) == -1) {
				revenue_category.push(d.revenueCategory);
			}

			if (revenue_class.indexOf(d.revenueClass) == -1) {
				revenue_class.push(d.revenueClass);
			}

			if (d.revenueCategory == selectedCategory) {
				revenueAmount.push({revenueCategory: d.revenueCategory, revenueClass: d.revenueClass, date: new Date(d.date), amount: d.amount});
			}
		})

		revenueAmount.sort(function(a, b) { return b.date - a.date || b.amount - a.amount ; });

		// Set the ranges
		var x = d3.scaleBand().rangeRound([0, width]),
			y = d3.scaleLinear().rangeRound([height, 0]),
			z = d3.scaleOrdinal(d3.schemeCategory20);


		y.domain([0, Math.max.apply(Math, revenueAmount.map(function(d) { return d.amount; }))]).nice();
		z.domain(revenue_class);

		if (dateMin != null && dateMin != undefined && dateMax != null && dateMax != undefined) {
			revenueAmount = revenueAmount.filter(function (d){
				return d.date >= dateMin;
			})

			revenueAmount = revenueAmount.filter(function (d){
				return d.date <= dateMax;
			})
			x.domain(revenueAmount.map(function(d) { return d.date.getFullYear(); }));
		}
		else {
			x.domain(revenueAmount.map(function(d) { return d.date.getFullYear(); }));
		}

		svg.selectAll(".bar")
			.data(revenueAmount)
			.enter().append("rect")
			.attr("class", "bar")
			.attr("fill", function(d) { return z(d.revenueClass); })
			.attr("x", function(d) { return x(d.date.getFullYear()); })
			.attr("width", x.bandwidth())
			.attr("y", function(d) { return y(d.amount); })
			.attr("height", function(d) { return height - y(d.amount); })
			.on("mouseover", function(d) {

				tooltip.transition()
					.duration(200)
					.style("opacity", 1);

				tooltip.html(
					"<p><strong>Category:</strong> " + d.revenueCategory + "</p>" +
					"<p><strong>Class:</strong> " + d.revenueClass + "</p>" +
					"<p><strong>Year:</strong> " + d.date.getFullYear() + "</p>" +
					"<p><strong>Actual Revenue:</strong> " + d.amount + "</p>"
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
			.text("Actual Revenue");

		createActualRevenuesFilter(revenueAmount, revenue_category, d3.extent(revenueAmount, function(d) { return d.date; })[0], d3.extent(revenueAmount, function(d) { return d.date; })[1]);
		createActualRevenuesApplyButton(revenueAmount, d3.extent(revenueAmount, function(d) { return d.date; })[0], d3.extent(revenueAmount, function(d) { return d.date; })[1]);
		createActualRevenuesResetButton();
	}

	function createActualRevenuesFilter(revenueAmount, selectedCategory, dateMin, dateMax){

		var dateSlider = "";

		dateSlider += "<p>Date Range for Population By Community Chart:&nbsp;</p>";
		dateSlider += "<p><input type='date-' id='date-actualRevenuesChart'></p>";
		dateSlider += "<div id='dateSlider-actualRevenuesChart' style='width:92%; left: 0;'></div></br>";

		var categorySelector = "";

		categorySelector += "<p>Revenue type</p><p><select id='selectCategory-actualRevenuesChart' size='1' style='width: 202px;'>";
		selectedCategory.forEach(function (d){
			categorySelector += "<option value=" + d + ">" + d + "</option>";
		})
		categorySelector += "</select></p>";

		document.getElementById('actualRevenuesChartFilters').innerHTML = dateSlider + categorySelector;

		var parseTime = d3.timeParse("%Y-%m-%d");

		tempData = [];

		revenueAmount.forEach(function (d){
			tempData.push(d.date.getTime());
		});

		if (dateMin != null && dateMin != undefined && dateMax != null && dateMax != undefined) {
			$(function (){
				$("#dateSlider-actualRevenuesChart").slider({
					range: true,
					min: Math.min.apply(null, tempData),
					max: Math.max.apply(null, tempData),
					values: [dateMin.getTime(), dateMax.getTime() ],
					slide: function( event, ui ) {
						dateMin = new Date(ui.values[0]);
						dateMax = new Date(ui.values[1]);
						$( "#date-actualRevenuesChart").val((dateMin.getFullYear()) + " - " + (dateMax.getFullYear()) );
					}
				});
			})
		}
		else {
			$(function (){
				$("#dateSlider-actualRevenuesChart").slider({
					range: true,
					min: Math.min.apply(null, tempData),
					max: Math.max.apply(null, tempData),
					values: [Math.min.apply(null, tempData), Math.max.apply(null, tempData) ],
					slide: function( event, ui ) {
						var dateMin = new Date(ui.values[0]);
						var dateMax = new Date(ui.values[1]);
						$( "#date-actualRevenuesChart").val((dateMin.getFullYear()) + " - " + (dateMax.getFullYear()) );
					}
				});
			})
		}
	}

	function createActualRevenuesApplyButton(revenueAmount, dateMin, dateMax){
		document.getElementById("actualRevenuesChartApplyButton").innerHTML = "";

		var actualRevenuesChartApplyButton = document.createElement("actualRevenuesChartApplyButton");

		actualRevenuesChartApplyButton.innerHTML = "<button>Apply Filter</button>";

		document.getElementById("actualRevenuesChartApplyButton").appendChild(actualRevenuesChartApplyButton);

		actualRevenuesChartApplyButton.addEventListener ("click", function() {
			var dateMin = new Date($("#dateSlider-actualRevenuesChart").slider( "values", 0 )),
				dateMax = new Date($("#dateSlider-actualRevenuesChart").slider( "values", 1 )),
				category = $("#selectCategory-actualRevenuesChart option:selected").text();

			document.getElementById("actualRevenuesChart").innerHTML = "";

			createActualRevenuesChart(revenueAmount, category, dateMin, dateMax);
		});
	}

	function createActualRevenuesResetButton(){
		document.getElementById("actualRevenuesChartResetButton").innerHTML = "";

		var actualRevenuesChartResetButton = document.createElement("actualRevenuesChartResetButton");

		actualRevenuesChartResetButton.innerHTML = "<button>Reset Filter</button>";

		document.getElementById("actualRevenuesChartResetButton").appendChild(actualRevenuesChartResetButton);

		actualRevenuesChartResetButton.addEventListener ("click", function() {
			var actualRevenues = {!! json_encode($actualRevenues->toArray()) !!};

			data.forEach(function (d){
				revenueAmount.push({revenueCategory: d.revenueCategory, revenueClass: d.revenueClass, date: new Date(d.date), amount: d.amount});
			})

			revenueAmount.sort(function(a, b) { return b.date - a.date || b.amount - a.amount ; });

			document.getElementById("actualRevenuesChart").innerHTML = "";

			createActualRevenuesChart(revenueAmount, "Taxes", d3.extent(revenueAmount, function(d) { return d.date; })[0], d3.extent(revenueAmount, function(d) { return d.date; })[1]);


		});
	}

</script>

@include('layouts.partials._footer')

@endsection
