@extends('layouts.app')

@section('content')
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
	</div>
</div>

<script>
	var securityLogs = {!! json_encode($securityLogs->toArray()) !!};

	// parse the date / time
	var parseTime = d3.timeParse("%Y-%m-%d");

	// format the securityLogs
	securityLogs.forEach(function(d) {
		d.roomId = d.roomId;
		d.date = parseTime(d.date);
		d.transactionQuantity = +d.transactionQuantity;
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
        .attr("height", height + margin.top + margin.bottom)
    	.append("g")
        .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

	// Scale the range of the securityLogs
    x.domain(d3.extent(securityLogs, function(d) { return d.date; }));
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
            .attr("y", height + (margin.bottom/2)+ 5)
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
	  .call(d3.axisBottom(x));

	// Add the Y Axis
	svg.append("g")
	  .attr("class", "axis")
	  .call(d3.axisLeft(y));

</script>

@endsection
