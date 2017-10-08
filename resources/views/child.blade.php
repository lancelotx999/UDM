@extends('layouts.app')

@section('content')
<br>
<ol class="breadcrumb">
  <li class="active">Ground Floor</li>
  <li><a href="#">Level 1</a></li>
  <li><a href="#">Level 2</a></li>
  <li><a href="#">Level 3</a></li>
</ol>

<div id="vis"></div>
<svg viewBox="0 0 1024 768" preserveAspectRatio="xMidYMid meet"></svg>

<script>
var chartDiv = document.getElementById("vis");
var width = chartDiv.clientWidth;
var height = chartDiv.clientHeight;
        var svg = d3.select("svg")
            .append("svg")
            .attr("width", "100%")
            .attr("height", "100vh")
            .call(d3.zoom()
                .on("zoom", function () {
                    svg.attr("transform", d3.event.transform)
                }))
            .on("dblclick.zoom", null)
            .append("g");

        d3.xml("assets/groundfloor.svg")
            .mimeType("image/svg+xml")
            .get(function(error, xml) {
                var g;
                if (error) throw error;
                g = xml.getElementsByTagName('svg')[0];
                return svg.node().appendChild(g);
            });

        // Due to the document not loaded yet, this line of code will only 
        // execute once the above scripts are done loaded in the document.
        $(document).ready(function () {

            // 'rect3769' = G block
            // 'path4596' = A/B block
            // 'path4598' = E block
            // 'path4600' = L block

            d3.select("#rect3769").on("click", function () {
                console.log("G block was clicked and turned red!");
                d3.select(this).style('fill', 'red');
            });

            d3.select("#path4596").on("click", function () {
                console.log("A/B block was clicked!");
                d3.select(this).style('fill', 'blue');
            });

            d3.select("#path4598").on("click", function () {
                console.log("E block was clicked!");
                d3.select(this).style('fill', 'green');
            });

            d3.select("#path4600").on("click", function () {
                console.log("L block was clicked!");
                d3.select(this).style('fill', 'yellow');
            });

        });

        function floor (level) {
            d3.selectAll('g')
                .filter(function () { 
                    // Filter out 'g' elements without any ID tagged
                    return d3.select(this).attr('id');
                })
                .each(function () {
                    var currfloor = d3.select(this).transition();
                    if (this.id === level) { 
                        currfloor.style('opacity', 1) 
                    } else { 
                        currfloor.style('opacity', 0.01) 
                    }
                }
            );
        };

        


// Extract the width and height that was computed by CSS.
/**
var chartDiv = document.getElementById("vis");
var width = chartDiv.clientWidth;
var height = chartDiv.clientHeight;

// load the external svg from a file
d3.xml("assets/groundfloor.svg")
            .mimeType("image/svg+xml")
            .get(function(error, xml) {
var importedNode = document.importNode(xml.documentElement, true);
d3.select("div#vis")
  .each(function() {
    this.appendChild(importedNode);
  })

  
});


function zoomPanSVG() {


  svg = d3.select('svg');
  svg_group = d3.select('g');
  
  var width = 400, height = 200;
  
  zoom = d3.behavior.zoom()
      .translate([0, 0])
      .scale(1)
      .scaleExtent([.5, 20])
      .on("zoom", zoomed);

      
  svg.call(zoom);
  
  function zoomed() {
    svg_group.style("stroke-width", 1.5 / d3.event.scale + "px");
    svg_group.attr("transform", "translate(" + d3.event.translate + ")scale(" + d3.event.scale + ")");
    
  }
  
  var zoomed = false;

}
*/


</script>

@endsection