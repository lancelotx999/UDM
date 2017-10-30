@extends('layouts.app')

@section('content')

<script src="http://colorbrewer2.org/export/colorbrewer.js">//color scaling for the temperature</script> 
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://d3js.org/d3.v4.min.js"></script>

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
    <div id='HeatmapChartFilters'></div>
    <div id='HeatmapChartApplyButton'></div>
        

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




    var heatmapLogs = null,
        dateMin = null,
        dateMax = null;



    //Heatmap checkbox onclick function 
    d3.select("#Heatmap").on("change",displayHeatmap);
    displayHeatmap(heatmapLogs, dateMin, dateMax, 'All', 'All');

    function displayHeatmap(heatmapLogs, dateMin, dateMax, floor, block){
        if(d3.select("#Heatmap").property("checked")){
            var heatmapLogs = {!! json_encode($heatmapLogs->toArray()) !!};

            var parseDate = d3.timeParse("%Y-%m-%d");
            var parseTime = d3.timeParse("%H:%M:%S");

            heatmapLogs.forEach(function(d) {
                if (floor.toUpperCase() == 'ALL' && block.toUpperCase() == 'ALL') {
                    d.roomId = d.roomId;
                    d.block = d.roomId[0].toUpperCase();
                    d.floor = d.roomId[1];
                    d.temperature = +d.temperature;

                    if (d.date instanceof Date) && (d.time instanceof Date) {
                        d.date = d.date;
                        d.time = d.time;
                    }
                    else {
                        d.date = parseDate(d.dateTime);
                        d.time = parseTime(d.dateTime);
                    }
                }
                if (floor.toUpperCase() == d.roomId[1] && block.toUpperCase() == 'ALL') {
                    d.roomId = d.roomId;
                    d.block = d.roomId[0].toUpperCase();
                    d.floor = d.roomId[1];
                    d.temperature = +d.temperature;

                    if (d.date instanceof Date) && (d.time instanceof Date) {
                        d.date = d.date;
                        d.time = d.time;
                    }
                    else {
                        d.date = parseDate(d.dateTime);
                        d.time = parseTime(d.dateTime);
                    }
                }
                if (floor.toUpperCase() == 'ALL' && block.toUpperCase() == d.roomId[0].toUpperCase()) {
                    d.roomId = d.roomId;
                    d.block = d.roomId[0].toUpperCase();
                    d.floor = d.roomId[1];
                    d.temperature = +d.temperature;

                    if (d.date instanceof Date) && (d.time instanceof Date) {
                        d.date = d.date;
                        d.time = d.time;
                    }
                    else {
                        d.date = parseDate(d.dateTime);
                        d.time = parseTime(d.dateTime);
                    }
                }
                else if(floor.toUpperCase() == d.roomId[1] && block.toUpperCase() == d.roomId[0].toUpperCase()){
                    d.roomId = d.roomId;
                    d.block = d.roomId[0].toUpperCase();
                    d.floor = d.roomId[1];
                    d.temperature = +d.temperature;

                    if (d.date instanceof Date) && (d.time instanceof Date) {
                        d.date = d.date;
                        d.time = d.time;
                    }
                    else {
                        d.date = parseDate(d.dateTime);
                        d.time = parseTime(d.dateTime);
                    }
                }

            });



            var data = d3.range(d.temperature);


            // Set the range
            var colors = d3.scaleLinear()
                .domain([11.00,35.00])
                .range(['#ffffd4','#fed98e','#fe9929','#d95f0e','#993404']);
                    
            var svg = d3.select("svg");
            var rects = svg.selectAll(".rects")
                .data(data)
                .enter()
                .append("rect")
                .attr("fill", d=>colors(d));


            createHeatmapChartFilters(heatmapLogs, dateMin, dateMax, 'All', 'All');
            createHeatmapApplyButton(heatmapLogs);
        }


    }

    function createHeatmapChartFilters(heatmapLogs, dateMin, dateMax, floor, block){

        var dateSlider = "";

        dateSlider += "<p>Date Range for Heatmap Chart : ";
        dateSlider += "<input type='date-' id='date-HeatmapChart'>";
        dateSlider += "</p>";
        dateSlider += "<div id='dateSlider-securityChart' style='width:85%;margin: auto;'></div></br>";

        var floorSelector = "";
        floorSelector += "<p>Floor For Heatmap Chart : <select id='selectFloor-heatmapChart' size='1' style='width: 202px;'>";4
        floorSelector += "<option value=All>All</option>";
        floorSelector += "<option value=G>G</option>";
        floorSelector += "<option value=1>1</option>";
        floorSelector += "<option value=2>2</option>";
        floorSelector += "<option value=3>3</option>";
        floorSelector += "<option value=4>4</option>";
        floorSelector += "<option value=5>5</option>";
        floorSelector += "<option value=6>6</option>";
        floorSelector += "<option value=7>7</option>";
        floorSelector += "<option value=8>8</option>";
        floorSelector += "<option value=9>9</option>";
        floorSelector += "</select></p></br>";

        var blockSelector = "";
        blockSelector += "<p>Buildings For Heatmap Chart : <select id='selectBlock-heatmapChart' size='1' style='width: 202px;'>";4
        blockSelector += "<option value=All>All</option>";
        blockSelector += "<option value=A>A</option>";
        blockSelector += "<option value=B>B</option>";
        blockSelector += "<option value=E>E</option>";
        blockSelector += "<option value=G>G</option>";
        blockSelector += "<option value=L>L</option>";
        blockSelector += "</select></p></br>";



        document.getElementById('heatmapChartFilters').innerHTML = dateSlider + floorSelector + blockSelector;

        tempData = [];

        var securityLogs = {!! json_encode($securityLogs->toArray()) !!};

        // parse the date / time
        var parseTime = d3.timeParse("%Y-%m-%d");

        // format the securityLogs
        heatmapLogs.forEach(function(d) {
            d.roomId = d.roomId;
            d.block = d.roomId[0].toUpperCase();
            d.floor = d.roomId[1];
            d.temperature = +d.temperature;

            if (d.date instanceof Date) {
                d.date = d.date;
            }
            else {
                d.date = parseTime(d.date);
            }
        });

        heatmapLogs.forEach(function (d){
            tempData.push(d.date.getTime());
        });

        if (dateMin != null && dateMin != undefined && dateMax != null && dateMax != undefined) {
            $(function (){
                $("#dateSlider-heatmapChart").slider({
                    range: true,
                    min: Math.min.apply(null, tempData),
                    max: Math.max.apply(null, tempData),
                    values: [dateMin.getTime(), dateMax.getTime() ],
                    slide: function( event, ui ) {
                        dateMin = new Date(ui.values[0]);
                        dateMax = new Date(ui.values[1]);

                        $( "#date-heatmapChart").val(getFormattedDate(dateMin) + " - " + getFormattedDate(dateMax) );
                    }
                });
            })
        }
        else {
            $(function (){
                $("#dateSlider-heatmapChart").slider({
                    range: true,
                    min: Math.min.apply(null, tempData),
                    max: Math.max.apply(null, tempData),
                    values: [Math.min.apply(null, tempData), Math.max.apply(null, tempData) ],
                    slide: function( event, ui ) {
                        var dateMin = new Date(ui.values[0]);
                        var dateMax = new Date(ui.values[1]);

                        $( "#date-heatmapChart").val(getFormattedDate(dateMin) + " - " + getFormattedDate(dateMax) );
                    }
                });
            })
        }



    }


    function createHeatmapApplyButton(heatmapLogs){

        document.getElementById("heatmapChartApplyButton").innerHTML = "";

        var heatmapChartApplyButton = document.createElement("heatmapChartApplyButton");

        heatmapChartApplyButton.innerHTML = "Apply Filter";

        document.getElementById("heatmapChartApplyButton").appendChild(heatmapChartApplyButton);

        heatmapChartApplyButton.addEventListener ("click", function() {
            console.log("---------- Submit Button Clicked ----------");
            console.log($("#dateSlider-heatmapChart").val());
            console.log($("#selectFloor-heatmapChart").val());
            console.log($("#selectBlock-heatmapChart").val());

            var min = new Date($("#dateSlider-heatmapChart").slider( "values", 0 )),
                max = new Date($("#dateSlider-heatmapChart").slider( "values", 1 )),
                floor = $("#selectFloor-heatmapChart").val(),
                block = $("#selectBlock-heatmapChart").val();

            document.getElementById("heatmapChart").innerHTML = "";

            createHeatmapChart(heatmapLogs, min, max, floor, block)
        });
    }

    function getFormattedDate(date) {
        var year = date.getFullYear();

        var month = (1 + date.getMonth()).toString();
        month = month.length > 1 ? month : '0' + month;

        var day = date.getDate().toString();
        day = day.length > 1 ? day : '0' + day;

        return day + '/' + month + '/' + year;
    }




    //Security checkbox onclick function 
    d3.select("#Security").on("change",displaySecurity);
    displaySecurity();
    function displaySecurity(){
        if(d3.select("#Security").property("checked")){
            alert("This is alert box!");
        }
    }





    </script>
        

@endsection
