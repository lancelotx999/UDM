@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-xs-12 col-sm-12">
    
        <br>
        <ol class="breadcrumb">
            <li class="active">Ground Floor</li>
            <li><a href="#">Level 1</a></li>
            <li><a href="#">Level 2</a></li>
            <li><a href="#">Level 3</a></li>
        </ol>

    </div>

</div>

<div class="row">
    <div class="col-xs-12 col-sm-12">

        <svg viewBox="0 0 1024 768" preserveAspectRatio="xMidYMid meet"></svg>

        <script>

        var svg = d3.select("svg")
          .append("svg")
          .attr("width", "100%")
          .attr("height", "100%")
          .call(d3.zoom().on("zoom", function () {
                  svg.attr("transform", d3.event.transform)
          })).append("g");

        d3.xml("assets/groundfloor.svg")
            .mimeType("image/svg+xml")
            .get(function(error, xml) {
                var g;
                if (error) throw error;
                g = xml.getElementsByTagName('svg')[0];
                return svg.append("g").node().appendChild(g);
            });

        // var vis = document.getElementById("vis"),
        //       w = vis.clientWidth,
        //       h = vis.clientHeight       

        // var svg = d3.select("div#vis")
        //             .append("gnd")
        //             .attr("width", "100%")
        //             .attr("height", "100%")
        //             .call(d3.zoom().on("zoom", function() {
        //                     svg.attr("transform", d3.event.transform)
        //                     }
        //                 )
        //             )
        //             .append("g");


        // Extract the width and height that was computed by CSS.
        // var vis = document.getElementById("vis"),
        //       w = vis.clientWidth,
        //       h = vis.clientHeight;

        // load the external svg from a file
        // d3.xml("assets/groundfloor.svg", "image/svg+xml", function(xml) {
        // var importedNode = document.importNode(xml.documentElement, true);
        // d3.select("div#vis")
        //   .each(function() {
        //     this.appendChild(importedNode);
        //   })

        //   zoomPanSVG();
        // });

        // function zoomPanSVG () {

        //   svg = d3.select('svg');
        //   svg_group = d3.select('g');
          
        //   var width = 400, height = 200;
          
        //   zoom = d3.behavior.zoom()
        //       .translate([0, 0])
        //       .scale(1)
        //       .scaleExtent([.5, 20])
        //       .on("zoom", zoomed);

              
        //   svg.call(zoom);
          
        //   function zoomed() {
        //     svg_group.style("stroke-width", 1.5 / d3.event.scale + "px");
        //     svg_group.attr("transform", "translate(" + d3.event.translate + ")scale(" + d3.event.scale + ")");
        //     // $zoomService.$broadcast('zoom', {
        //     //    scale: d3.event.scale
        //     // });
        //   }
          
        //   var zoomed = false;

        // }

        </script>

    </div>

</div>

@endsection

