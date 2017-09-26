@extends('layouts.app')

@section('content')
<div id="vis"></div>

<script>
// Extract the width and height that was computed by CSS.
var chartDiv = document.getElementById("vis"),
    width = chartDiv.clientWidth,
    height = chartDiv.clientHeight;

// load the external svg from a file
d3.xml("assets/groundfloor.svg", "image/svg+xml", function(xml) {
var importedNode = document.importNode(xml.documentElement, true);
d3.select("div#vis")
  .each(function() {
    this.appendChild(importedNode);
  })

  zoomPanSVG();
});


function zoomPanSVG () {




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
    // $zoomService.$broadcast('zoom', {
    //    scale: d3.event.scale
    // });
  }
  
  var zoomed = false;

}




</script>
@endsection

