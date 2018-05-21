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
						<div id='populationByBoroughChartFilters'></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-xs-6">
						<div id='populationByBoroughChartApplyButton'></div>
					</div>
					<div class="col-sm-6 col-xs-6">
						<div id='populationByBoroughChartResetButton'></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-8 col-xs-8">
				<hr />
				<h1>&nbsp;&nbsp;&nbsp;<i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;Population Statistics by Boroughs</h1>
				<hr />
				<div id='populationByBoroughChart'></div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12">
		<div class="row">
			<div class="col-sm-3 col-xs-3 chart-filter">
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<hr />
						<h4 class="white-text"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;Filter Options:</h4>
						<hr />
						<div id='populationByCommunityChartFilters'></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-xs-6">
						<div id='populationByCommunityChartApplyButton'></div>
					</div>
					<div class="col-sm-6 col-xs-6">
						<div id='populationByCommunityChartResetButton'></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-8 col-xs-8">
				<hr />
				<h1>&nbsp;&nbsp;&nbsp;<i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;Population Statistics by Community District In A Borough</h1>
				<hr />
				<div id='populationByCommunityChart'></div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12">
		<div class="row">
			<div class="col-sm-3 col-xs-3 chart-filter">
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<hr />
						<h4 class="white-text"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;Filter Options:</h4>
						<hr />
						<div id='waterConsumptionChartFilters'></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-xs-6">
						<div id='waterConsumptionChartApplyButton'></div>
					</div>
					<div class="col-sm-6 col-xs-6">
						<div id='waterConsumptionChartResetButton'></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-8 col-xs-8">
				<hr />
				<h1>&nbsp;&nbsp;&nbsp;<i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;Water Consumption Statistics Of New York City</h1>
				<hr />
				<div id='waterConsumptionChart'></div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12">
		<div class="row">
			<div class="col-sm-3 col-xs-3 chart-filter">
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<hr />
						<h4 class="white-text"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;Filter Options:</h4>
						<hr />
						<div id='birthsByGenderChartFilters'></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-xs-6">
						<div id='birthsByGenderChartApplyButton'></div>
					</div>
					<div class="col-sm-6 col-xs-6">
						<div id='birthsByGenderChartResetButton'></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-8 col-xs-8">
				<hr />
				<h1>&nbsp;&nbsp;&nbsp;<i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;Births By Gender Of New York City</h1>
				<hr />
				<div id='birthsByGenderChart'></div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12">
		<div class="row">
			<div class="col-sm-3 col-xs-3 chart-filter">
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<hr />
						<h4 class="white-text"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;Filter Options:</h4>
						<hr />
						<div id='birthsByRaceChartFilters'></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-xs-6">
						<div id='birthsByRaceChartApplyButton'></div>
					</div>
					<div class="col-sm-6 col-xs-6">
						<div id='birthsByRaceChartResetButton'></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-8 col-xs-8">
				<hr />
				<h1>&nbsp;&nbsp;&nbsp;<i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;Births By Race Of New York City</h1>
				<hr />
				<div id='birthsByRaceChart'></div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12">
		<div class="row">
			<div class="col-sm-3 col-xs-3 chart-filter">
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<hr />
						<h4 class="white-text"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;Filter Options:</h4>
						<hr />
						<div id='juvenileInvestigationChartFilters'></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-xs-6">
						<div id='juvenileInvestigationChartApplyButton'></div>
					</div>
					<div class="col-sm-6 col-xs-6">
						<div id='juvenileInvestigationChartResetButton'></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-8 col-xs-8">
				<hr />
				<h1>&nbsp;&nbsp;&nbsp;<i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;Juvenile Investigations in New York City</h1>
				<hr />
				<div id='juvenileInvestigationChart'></div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12">
		<div class="row">
			<div class="col-sm-3 col-xs-3 chart-filter">
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<hr />
						<h4 class="white-text"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;Filter Options:</h4>
						<hr />
						<div id='juvenileIntakesChartFilters'></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-xs-6">
						<div id='juvenileIntakesChartApplyButton'></div>
					</div>
					<div class="col-sm-6 col-xs-6">
						<div id='juvenileIntakesChartResetButton'></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-8 col-xs-8">
				<hr />
				<h1>&nbsp;&nbsp;&nbsp;<i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;Juvenile Intakes in New York City</h1>
				<hr />
				<div id='juvenileIntakesChart'></div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12">
		<div class="row">
			<div class="col-sm-3 col-xs-3 chart-filter">
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<hr />
						<h4 class="white-text"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;Filter Options:</h4>
						<hr />
						<div id='actualRevenuesChartFilters'></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-xs-6">
						<div id='actualRevenuesChartApplyButton'></div>
					</div>
					<div class="col-sm-6 col-xs-6">
						<div id='actualRevenuesChartResetButton'></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-8 col-xs-8">
				<hr />
				<h1>&nbsp;&nbsp;&nbsp;<i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;Revenues in New York City</h1>
				<hr />
				<div id='actualRevenuesChart'></div>
			</div>
		</div>
	</div>
</div>

<script>

	// createPopulationByBoroughChart(populationData, null, null);
	createPopulationByBoroughChart(null, new Date("01/01/1950"), new Date("01/01/2040"));
	createPopulationByCommunityChart(null, new Date("01/01/1950"), new Date("01/01/2040"), "Manhattan");
	createWaterConsumptionChart();
	createBirthsByGenderChart();
	createBirthsByRaceChart();
	createJuvenileInvestigationChart();
	createJuvenileIntakesChart();
	createActualRevenuesChart();



	function createPopulationByBoroughChart(populationData, dateMin, dateMax){
		// Set the dimensions of the canvas / graph
		var margin = {top: 30, right: 80, bottom: 70, left: 80},
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

		createPopulationByBoroughFilter(populationData, d3.extent(populationData, function(d) { return d.date; })[0], d3.extent(populationData, function(d) { return d.date; })[1]);
		createPopulationByBoroughApplyButton(populationData, d3.extent(populationData, function(d) { return d.date; })[0], d3.extent(populationData, function(d) { return d.date; })[1]);
		createPopulationByBoroughResetButton();





	}

	function createPopulationByBoroughFilter(populationData, dateMin, dateMax){
		// console.log("---------- populationData ----------");
		// console.log(populationData);
		// console.log("---------- populationData ----------");
		var dateSlider = "";

		dateSlider += "<p class='white-text'>Date Range for Population By Borough Chart:&nbsp;</p>";
		dateSlider += "<p><input type='date-' id='date-populationByBoroughChart'></p>";
		dateSlider += "<div id='dateSlider-populationByBoroughChart' style='width:85%;margin: auto;'></div></br>";

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

		populationByBoroughChartApplyButton.innerHTML = "<button><i class='fa fa-check' aria-hidden='true'></i>&nbsp;Apply Filter</button>";

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

		populationByBoroughChartResetButton.innerHTML = "<button><i class='fa fa-check' aria-hidden='true'></i>&nbsp;Reset Filter</button>";

		document.getElementById("populationByBoroughChartResetButton").appendChild(populationByBoroughChartResetButton);

		populationByBoroughChartResetButton.addEventListener ("click", function() {
			d3.csv("data/NYC-bigData/New_York_City_Population_by_Borough__1950_-_2040.csv", function (data){
				populationData = [];

				data.forEach(function (d){
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

				console.log("---------- populationData ----------");
				console.log(populationData);
				console.log("---------- populationData ----------");

				document.getElementById("populationByBoroughChart").innerHTML = "";

				createPopulationByBoroughChart(populationData, d3.extent(populationData, function(d) { return d.date; })[0], d3.extent(populationData, function(d) { return d.date; })[1]);


			});

		});


	}

	function createPopulationByCommunityChart(populationData, dateMin, dateMax, selectedBorough){
		// Set the dimensions of the canvas / graph
		var margin = {top: 30, right: 80, bottom: 70, left: 80},
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
				// console.log("---------- d ----------");
				// console.log(d);
				// console.log("---------- d ----------");
				tooltip.transition()
					.duration(200)
					.style("opacity", .9);

				tooltip.html(
					"Borough: " + d.boroughName + "<br/>" + "<br/>" +
					"Community District: " + d.CDName + "<br/>" + "<br/>" +
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

		dateSlider += "<p class='white-text'>Date Range for Population By Community Chart:&nbsp;</p>";
		dateSlider += "<p><input type='date-' id='date-populationByCommunityChart'></p>";
		dateSlider += "<div id='dateSlider-populationByCommunityChart' style='width:85%;margin: auto;'></div></br>";

		var boroughSelector = "";

		boroughSelector += "<p class='white-text'>Floor For Security Chart:</p><p><select id='selectBorough-populationByCommunityChart' size='1' style='width: 202px;'>";
		boroughs.forEach(function (d){
			boroughSelector += "<option value=" + d + ">" + d + "</option>";
		})
		boroughSelector += "</select></p><hr />";

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

		populationByCommunityChartApplyButton.innerHTML = "<button><i class='fa fa-check' aria-hidden='true'></i>&nbsp;Apply Filter</button>";

		document.getElementById("populationByCommunityChartApplyButton").appendChild(populationByCommunityChartApplyButton);

		populationByCommunityChartApplyButton.addEventListener ("click", function() {
			// console.log("---------- Submit Button Clicked ----------");
			// console.log($("#dateSlider-populationByCommunityChart").val());
			// console.log($("#selectBorough-populationByCommunityChart").val());

			var min = new Date($("#dateSlider-populationByCommunityChart").slider( "values", 0 )),
				max = new Date($("#dateSlider-populationByCommunityChart").slider( "values", 1 )),
				selectedBorough = $("#selectBorough-populationByCommunityChart").val();

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

		populationByCommunityChartResetButton.innerHTML = "<button><i class='fa fa-check' aria-hidden='true'></i>&nbsp;Reset Filter</button>";

		document.getElementById("populationByCommunityChartResetButton").appendChild(populationByCommunityChartResetButton);

		populationByCommunityChartResetButton.addEventListener ("click", function() {
			d3.csv("data/NYC-bigData/New_York_City_Population_By_Community_Districts.csv", function (data){
				populationData = [];

				data.forEach(function (d){
					populationData.push({boroughName: d.Borough, CDId: d.CDNumber, CDName: d.CDName, date: new Date("1970"), population: d.Population1970});
					populationData.push({boroughName: d.Borough, CDId: d.CDNumber, CDName: d.CDName, date: new Date("1980"), population: d.Population1980});
					populationData.push({boroughName: d.Borough, CDId: d.CDNumber, CDName: d.CDName, date: new Date("1990"), population: d.Population1990});
					populationData.push({boroughName: d.Borough, CDId: d.CDNumber, CDName: d.CDName, date: new Date("2000"), population: d.Population2000});
					populationData.push({boroughName: d.Borough, CDId: d.CDNumber, CDName: d.CDName, date: new Date("2010"), population: d.Population2010});
				})

				populationData.sort(function(a, b) { return b.date - a.date || b.population - a.population ; });

				// console.log("---------- populationData ----------");
				// console.log(populationData);
				// console.log("---------- populationData ----------");

				document.getElementById("populationByCommunityChart").innerHTML = "";

				createPopulationByCommunityChart(populationData, d3.extent(populationData, function(d) { return d.date; })[0], d3.extent(populationData, function(d) { return d.date; })[1], "Manhattan");


			});

		});


	}

	function createWaterConsumptionChart(waterConsumptionData, dateMin, dateMax){
		// Set the dimensions of the canvas / graph
		var margin = {top: 30, right: 80, bottom: 70, left: 80},
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

		dateSlider += "<p class='white-text'>Date Range for Water Consumption Chart:&nbsp;</p>";
		dateSlider += "<p><input type='date-' id='date-waterConsumptionChart'></p>";
		dateSlider += "<div id='dateSlider-waterConsumptionChart' style='width:85%;margin: auto;'></div></br>";

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

		waterConsumptionChartApplyButton.innerHTML = "<button><i class='fa fa-check' aria-hidden='true'></i>&nbsp;Apply Filter</button>";

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

		waterConsumptionChartResetButton.innerHTML = "<button><i class='fa fa-check' aria-hidden='true'></i>&nbsp;Reset Filter</button>";

		document.getElementById("waterConsumptionChartResetButton").appendChild(waterConsumptionChartResetButton);

		waterConsumptionChartResetButton.addEventListener ("click", function() {
			d3.csv("data/NYC-bigData/Water_Consumption_In_The_New_York_City.csv", function (data){
				waterConsumptionData = [];

				data.forEach(function(d){
					waterConsumptionData.push({date: new Date(d.Year), population: Number(d.NewYorkCityPopulation), consumption: Number(d.NYCConsumption), consumptionPerCapita: Number(d.PerCapita) });
				})

				waterConsumptionData.sort(function(a, b) { return a.date - b.date; });
				// console.log("---------- waterConsumptionData ----------");
				// console.log(waterConsumptionData);
				// console.log("---------- waterConsumptionData ----------");

				document.getElementById("waterConsumptionChart").innerHTML = "";

				createWaterConsumptionChart(waterConsumptionData, d3.extent(waterConsumptionData, function(d) { return d.date; })[0], d3.extent(waterConsumptionData, function(d) { return d.date; })[1], "Manhattan");


			});

		});


	}

	function createBirthsByGenderChart(birthData, selectedDate){
		// Set the dimensions of the canvas / graph
		var margin = {top: 30, right: 80, bottom: 70, left: 80},
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
				// console.log("---------- d ----------");
				// console.log(d);
				// console.log("---------- d ----------");
				tooltip.transition()
					.duration(200)
					.style("opacity", .9);

				tooltip.html(
					"Year: " + selectedDate.getFullYear() + "<br/>" + "<br/>" +
					"Gender: " + d.data.key + "<br/>" + "<br/>" +
					"Total Births: " + d.data.value.avg + "<br/>" + "<br/>"
				)
					.style("left", (d3.event.pageX / 1.5) + "px")
					.style("top", (d3.event.pageY / 10) + "px");
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



		d3.csv("data/NYC-bigData/Natality.csv", function (data){

		})
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

		// dateSelector += "<p class='white-text'>Select Year for Birth By Gender Chart:&nbsp;</p>";
		// dateSelector += "<p><input type='text' id='datepicker-birthsByGenderChart'></p>";
		// dateSelector += "<div id='datepicker-birthsByGenderChart' style='width:85%;margin: auto;'></div></br>";

		var years = [];

		birthData.forEach(function(d){
			if (years.includes(d.date.getFullYear()) != true) {
				years.push(d.date.getFullYear());
			}
		})

		// console.log("---------- years ----------");
		// console.log(years);
		// console.log("---------- years ----------");


		dateSelector += "<p class='white-text'>Select Year for Birth By Gender Chart:</p><p><select id='selectYear-birthsByGenderChart' size='1' style='width: 202px;'>";
		years.forEach(function (d){
			dateSelector += "<option value=" + d + ">" + d + "</option>";
		})
		dateSelector += "</select></p><hr />";

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

		birthsByGenderChartApplyButton.innerHTML = "<button><i class='fa fa-check' aria-hidden='true'></i>&nbsp;Apply Filter</button>";

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

		birthsByGenderChartResetButton.innerHTML = "<button><i class='fa fa-check' aria-hidden='true'></i>&nbsp;Reset Filter</button>";

		document.getElementById("birthsByGenderChartResetButton").appendChild(birthsByGenderChartResetButton);

		birthsByGenderChartResetButton.addEventListener ("click", function() {
			d3.csv("data/NYC-bigData/Natality.csv", function (data){
				birthData = [];
				data.forEach(function(d){
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

		});
	}

	function createBirthsByRaceChart(birthData, selectedDate){
		// Set the dimensions of the canvas / graph
		var margin = {top: 30, right: 80, bottom: 70, left: 80},
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
				// console.log("---------- d ----------");
				// console.log(d);
				// console.log("---------- d ----------");
				tooltip.transition()
					.duration(200)
					.style("opacity", .9);

				tooltip.html(
					"Year: " + selectedDate.getFullYear() + "<br/>" + "<br/>" +
					"Race: " + d.data.key + "<br/>" + "<br/>" +
					"Total Births: " + d.data.value.avg + "<br/>" + "<br/>"
				)
					.style("left", (d3.event.pageX / 1.5) + "px")
					.style("top", (d3.event.pageY / 10) + "px");
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

		// dateSelector += "<p class='white-text'>Select Year for Birth By Race Chart:&nbsp;</p>";
		// dateSelector += "<p><input type='text' id='datepicker-birthsByRaceChart'></p>";
		// dateSelector += "<div id='datepicker-birthsByRaceChart' style='width:85%;margin: auto;'></div></br>";

		var years = [];

		birthData.forEach(function(d){
			if (years.includes(d.date.getFullYear()) != true) {
				years.push(d.date.getFullYear());
			}
		})

		// console.log("---------- years ----------");
		// console.log(years);
		// console.log("---------- years ----------");


		dateSelector += "<p class='white-text'>Select Year for Birth By Race Chart:</p><p><select id='selectYear-birthsByRaceChart' size='1' style='width: 202px;'>";
		years.forEach(function (d){
			dateSelector += "<option value=" + d + ">" + d + "</option>";
		})
		dateSelector += "</select></p><hr />";

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

		birthsByRaceChartApplyButton.innerHTML = "<button><i class='fa fa-check' aria-hidden='true'></i>&nbsp;Apply Filter</button>";

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

		birthsByRaceChartResetButton.innerHTML = "<button><i class='fa fa-check' aria-hidden='true'></i>&nbsp;Reset Filter</button>";

		document.getElementById("birthsByRaceChartResetButton").appendChild(birthsByRaceChartResetButton);

		birthsByRaceChartResetButton.addEventListener ("click", function() {
			d3.csv("data/NYC-bigData/Natality.csv", function (data){
				birthData = [];
				data.forEach(function(d){
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

		});
	}

	function createJuvenileInvestigationChart(investigationCount, dateMin, dateMax){
		var margin = {top: 30, right: 80, bottom: 70, left: 80},
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
					.style("opacity", .9);

				tooltip.html(
					"Borough: " + d.borough + "<br/>" + "<br/>" +
					"Total Investigations: " + d.count + "<br/>" + "<br/>" +
					"Year: " + d.date.getFullYear() + "<br/>" + "<br/>" 
				)
					.style("left", (d3.event.pageX / 1.5) + "px")
					.style("top", (d3.event.pageY / 10) + "px");
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

		dateSlider += "<p class='white-text'>Date Range for Juvenile Investigation:&nbsp;</p>";
		dateSlider += "<p><input type='date-' id='date-juvenileInvestigationChart'></p>";
		dateSlider += "<div id='dateSlider-juvenileInvestigationChart' style='width:85%;margin: auto;'></div></br>";

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

		juvenileInvestigationChartApplyButton.innerHTML = "<button><i class='fa fa-check' aria-hidden='true'></i>&nbsp;Apply Filter</button>";

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

		juvenileInvestigationChartResetButton.innerHTML = "<button><i class='fa fa-check' aria-hidden='true'></i>&nbsp;Reset Filter</button>";

		document.getElementById("juvenileInvestigationChartResetButton").appendChild(juvenileInvestigationChartResetButton);

		juvenileInvestigationChartResetButton.addEventListener ("click", function() {
			d3.csv("data/NYC-bigData/DOP_Juvenile_Investigations_by_Calendar_Year.csv", function (data){
				investigationCount = [];

				data.forEach(function(d){
					investigationCount.push({borough: d.borough, date: new Date(d.date), count: Number(d.count) });
				})

				investigationCount.sort(function(a, b) { return a.date - b.date; });

				document.getElementById("juvenileInvestigationChart").innerHTML = "";

				createJuvenileInvestigationChart(investigationCount, d3.extent(investigationCount, function(d) { return d.date; })[0], d3.extent(investigationCount, function(d) { return d.date; })[1]);
			});
		});
	}

	function createJuvenileIntakesChart(intakesCount, dateMin, dateMax){
		var margin = {top: 30, right: 80, bottom: 70, left: 80},
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
					.style("opacity", .9);

				tooltip.html(
					"Borough: " + d.borough + "<br/>" + "<br/>" +
					"Total Intakess: " + d.count + "<br/>" + "<br/>" +
					"Year: " + d.date.getFullYear() + "<br/>" + "<br/>" 
				)
					.style("left", (d3.event.pageX / 1.5) + "px")
					.style("top", (d3.event.pageY / 10) + "px");
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

		dateSlider += "<p class='white-text'>Date Range for Juvenile Intakes:&nbsp;</p>";
		dateSlider += "<p><input type='date-' id='date-juvenileIntakesChart'></p>";
		dateSlider += "<div id='dateSlider-juvenileIntakesChart' style='width:85%;margin: auto;'></div></br>";

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

		juvenileIntakesChartApplyButton.innerHTML = "<button><i class='fa fa-check' aria-hidden='true'></i>&nbsp;Apply Filter</button>";

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

		juvenileIntakesChartResetButton.innerHTML = "<button><i class='fa fa-check' aria-hidden='true'></i>&nbsp;Reset Filter</button>";

		document.getElementById("juvenileIntakesChartResetButton").appendChild(juvenileIntakesChartResetButton);

		juvenileIntakesChartResetButton.addEventListener ("click", function() {
			d3.csv("data/NYC-bigData/DOP_Juvenile_Intakes_by_Calendar_Year.csv", function (data){
				intakesCount = [];

				data.forEach(function(d){
					intakesCount.push({borough: d.borough, date: new Date(d.date), count: Number(d.count) });
				})

				intakesCount.sort(function(a, b) { return a.date - b.date; });

				document.getElementById("juvenileIntakesChart").innerHTML = "";

				createJuvenileIntakesChart(intakesCount, d3.extent(intakesCount, function(d) { return d.date; })[0], d3.extent(intakesCount, function(d) { return d.date; })[1]);
			});
		});
	}
	
	function createActualRevenuesChart(revenueAmount, selectedCategory, dateMin, dateMax){
	}

	function createActualRevenuesFilter(revenueAmount, category, dateMin, dateMax){
	}

	function createActualRevenuesApplyButton(revenueAmount, dateMin, dateMax){
	}

	function createActualRevenuesReset(){
	}
</script>

@endsection
