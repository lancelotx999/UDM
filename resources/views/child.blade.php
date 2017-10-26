@extends('layouts.app')

@section('content')

    <br />
    <ul class="breadcrumb">
        <li><a href="#" onclick="floor('level_g')">Level G</a></li>
        <li><a href="#" onclick="floor('level_1')">Level 1</a></li>
        <li><a href="#" onclick="floor('level_2')">Level 2</a></li>
        <li><a href="#" onclick="floor('level_3')">Level 3</a></li>
        <li><a href="#" onclick="floor('level_4')">Level 4</a></li>
        <li><a href="#" onclick="floor('level_5')">Level 5</a></li>
        <li><a href="#" onclick="floor('level_6')">Level 6</a></li>
        <li><a href="#" onclick="floor('level_7')">Level 7</a></li>
        <li><a href="#" onclick="floor('level_8')">Level 8</a></li>
        <li><a href="#" onclick="floor('level_9')">Level 9</a></li>
    </ul>

    <svg preserveAspectRatio="xMidYMid meet"></svg>

    <script>

    // Responsible for zooming and panning
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

    // Requests the chosen floor
    function floor (level) {
        // Clear any loaded or unwanted svg(s)
        svg.selectAll("svg").transition().remove();
        // Check and load the requested svg
        if (level === 'level_g') {
            // Retrieve floor G
            retrieve('groundfloor.svg');
        }
        else if (level === 'level_1') {
            // Retrieve floor 1
            retrieve('firstfloor.svg');
        }
        else if (level === 'level_2') {
            // Retrieve floor 2
            retrieve('secondfloor.svg');
        }
        else if (level === 'level_3') {
            // Retrieve floor 3
            retrieve('thirdfloor.svg');
        }
        else if (level === 'level_4') {
            // Retrieve floor 4
            retrieve('fourthfloor.svg');
        }
        else if (level === 'level_5') {
            // Retrieve floor 5
            retrieve('fifthfloor.svg');
        }
        else if (level === 'level_6') {
            // Retrieve floor 6
            retrieve('sixthfloor.svg');
        }
        else if (level === 'level_7') {
            // Retrieve floor 7
            retrieve('seventhfloor.svg');
        }
        else if (level === 'level_8') {
            // Retrieve floor 8
            retrieve('eighthfloor.svg');
        }
        else if (level === 'level_9') {
            // Retrieve floor 9
            retrieve('ninthfloor.svg');
        }
    };

    // Retrieves the SVG file
    function retrieve (file) {
        d3.xml("assets/" + file)
            .mimeType("image/svg+xml")
            .get(function(error, xml) {
                var g;
                if (error) throw error;
                g = xml.getElementsByTagName('svg')[0];
                return svg.node().appendChild(g);
            }
        );
    }

        floor('level_g'); // Default load floor G

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

        </script>

@endsection
