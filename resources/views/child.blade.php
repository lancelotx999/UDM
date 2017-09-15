@extends('layouts.app')

@section('content')

<!-- Map section -->
<p>fsdfsdf</p>
<div id="vis"></div>

<script>
      // Extract the width and height that was computed by CSS.
      var chartDiv = document.getElementById("vis");
      var width = chartDiv.clientWidth;
      var height = chartDiv.clientHeight;
      

      // load the external svg from a file
      d3.xml("assets/groundfloor.svg", "image/svg+xml", function(xml) {
      var importedNode = document.importNode(xml.documentElement, true);
      d3.select("div#vis")
        .each(function() {
          this.appendChild(importedNode);
        })
        // inside of our d3.xml callback, call another function
        // that styles individual paths inside of our imported svg
        styleImportedSVG();
        

      });


      function styleImportedSVG () {
      	//this is what mbostock do to click rect/apth to zoom

      	//this is just hover change opacity 
        d3.select('svg')
          .on('mouseover', function() {
            console.log('mouseover');
            console.log('this', this);
            d3.selectAll('path')
              .style({
                'fill-opacity':   0.1,
                'stroke-opacity': 0.3
              })
          })
          .on('mouseout', function() {
            console.log('mouseout');
            d3.selectAll('path')
              .style({
                'fill-opacity':   1,
                'stroke-opacity': 1
              })
          })
        
      }
function clicked(d) {
  var x, y, k;

  if (d && centered !== d) {
    var centroid = path.centroid(d);
    x = centroid[0];
    y = centroid[1];
    k = 4;
    centered = d;
  } else {
    x = width / 2;
    y = height / 2;
    k = 1;
    centered = null;
  }

  g.selectAll("path")
      .classed("active", centered && function(d) { return d === centered; });

  g.transition()
      .duration(750)
      .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")scale(" + k + ")translate(" + -x + "," + -y + ")")
      .style("stroke-width", 1.5 / k + "px");
}
    
</script>
@endsection

