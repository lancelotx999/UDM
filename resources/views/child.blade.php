@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-xs-12 col-sm-12">
        <br />
        <ol class="breadcrumb">
            <li class="active"><button onclick="floor('level_g')">Level G</button></li>
            <li><button onclick="floor('level_1')">Level 1</button></li>
            <li><button onclick="floor('level_2')">Level 2</button></li>
            <li><button onclick="floor('level_3')">Level 3</button></li>
            <li><button onclick="floor('level_4')">Level 4</button></li>
            <li><button onclick="floor('level_5')">Level 5</button></li>
            <li><button onclick="floor('level_6')">Level 6</button></li>
            <li><button onclick="floor('level_7')">Level 7</button></li>
            <li><button onclick="floor('level_8')">Level 8</button></li>
            <li><button onclick="floor('level_9')">Level 9</button></li>
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

        </script>

    </div>

</div>

@endsection

