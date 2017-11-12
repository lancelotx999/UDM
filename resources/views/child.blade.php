@extends('layouts.app')


@section('content')

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://d3js.org/d3.v4.min.js"></script>

    <style type="text/css">
        
    #main-content {
        width: 85%;
    }

    </style>

    <a class="btn btn-secondary" id="menu-toggle" onclick="toggleOverlay()">Hide/Show Filter</a>
    <svg preserveAspectRatio="xMidYMid meet" viewBox="0 0 800.40002 647.40002" ></svg>

    <script>

    // var dims = {
    //     width: 1800,
    //     height: 1800,
    //     svg_dx: 100,
    //     svg_dy: 100
    // };

    //Zoom panning for SVG
    var svg = d3.select("svg")
        .append("svg")
        .attr("width", "100%")
        .attr("height", "100%")
        .call(d3.zoom()
            // .extent([[dims.svg_dx, dims.svg_dy], [dims.width-(dims.svg_dx*2), dims.height-dims.svg_dy]])
            .scaleExtent([0.85, 3])
            // .translateExtent([[dims.svg_dx, dims.svg_dy], [dims.width-(dims.svg_dx*2), dims.height-dims.svg_dy]])
            .on("zoom", function () {
                svg.attr("transform", d3.event.transform)
            }))
        .on("dblclick.zoom", null)
        .append("g");

    // Requests the chosen floor
    function displayFloor (level) {
        // Clear any loaded or unwanted svg(s)
        svg.selectAll("svg").transition().remove();
        // Check and load the requested svg
        if (level === 'G') {
            // Retrieve floor G
            retrieve('groundfloor.svg');
        }
        else if (level === '1') {
            // Retrieve floor 1
            retrieve('firstfloor.svg');
        }
        else if (level === '2') {
            // Retrieve floor 2
            retrieve('secondfloor.svg');
        }
        else if (level === '3') {
            // Retrieve floor 3
            retrieve('thirdfloor.svg');
        }
        else if (level === '4') {
            // Retrieve floor 4
            retrieve('fourthfloor.svg');
        }
        else if (level === '5') {
            // Retrieve floor 5
            retrieve('fifthfloor.svg');
        }
        else if (level === '6') {
            // Retrieve floor 6
            retrieve('sixthfloor.svg');
        }
        else if (level === '7') {
            // Retrieve floor 7
            retrieve('seventhfloor.svg');
        }
        else if (level === '8') {
            // Retrieve floor 8
            retrieve('eighthfloor.svg');
        }
        else if (level === '9') {
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
    
    // Default load floor G
    displayFloor('G'); 

    function toggleOverlay() {
        var x = document.getElementById("sidebar");
        if (x.style.display === "none") {
            x.style.display = "block";
            $('#main-content').css({
                'width': '85%'
            });
        } else {
            x.style.display = "none";
            $('#main-content').css({
                'width': '100%'
            });
        }
    }

    //variable for database table 
    var heatmapLogs = null,
        securityLogs = null,
        dateMin = null;
    $('input.example').on('change', function() {
            $('input.example').not(this).prop('checked', false);  
    });

    //function on checkbox

    d3.select("#Heatmap").on("change", function(){
        if(d3.select("#Heatmap").property("checked")){
            displayHeatmap(heatmapLogs, dateMin, 'All', 'All');
            document.getElementById('securityMapFilters').innerHTML = "";
            createHeatmapChartFilters(heatmapLogs, dateMin, 'All', 'All');
        }
    });
    d3.select("#Security").on("change",function(){
        if(d3.select("#Security").property("checked")){
            displaySecurity(securityLogs, dateMin, 'All', 'All');
            document.getElementById('heatmapChartFilters').innerHTML = "";
            createSecurityMapFilters(securityLogs, dateMin, 'All', 'All');
        }
    });
    
    //Heatmap checkbox 
    function displayHeatmap(heatmapLogs, dateMin, floor, block){

        //initialize initial floor and block when page loads
        floor = 'G';
        block = 'G';    
        
        //parse date obtained from slider
        if(dateMin != null)
        {
            var parsedateMin = d3.timeFormat("%Y-%m-%d");
            dateMin = parsedateMin(dateMin);
        }

        if(d3.select("#Heatmap").property("checked")){
            var heatmapLogs = {!! json_encode($heatmapLogs->toArray()) !!};
            var parseDate = d3.timeParse("%Y-%m-%d");
           
            //parse array to json
            heatmapLogs.forEach(function(d) {
                if (floor.toUpperCase() == 'ALL' && block.toUpperCase() == 'ALL') {
                    d.roomId = d.roomId;
                    d.block = d.roomId[0].toUpperCase();
                    d.floor = d.roomId[1];
                    d.temperature = +d.temperature;

                    if (d.date instanceof Date) {
                        d.date = d.date;
                    }
                    else {
                        d.date = parseDate(d.date);
                    }
                }
                if (floor.toUpperCase() == d.roomId[1] && block.toUpperCase() == 'ALL') {
                    d.roomId = d.roomId;
                    d.block = d.roomId[0].toUpperCase();
                    d.floor = d.roomId[1];
                    d.temperature = +d.temperature;

                    if (d.date instanceof Date) {
                        d.date = d.date;
                    }
                    else {
                        d.date = parseDate(d.date);
                    }
                }
                if (floor.toUpperCase() == 'ALL' && block.toUpperCase() == d.roomId[0].toUpperCase()) {
                    d.roomId = d.roomId;
                    d.block = d.roomId[0].toUpperCase();
                    d.floor = d.roomId[1];
                    d.temperature = +d.temperature;

                    if (d.date instanceof Date) {
                        d.date = d.date;
                    }
                    else {
                        d.date = parseDate(d.date);
                    }
                }
                else if(floor.toUpperCase() == d.roomId[1] && block.toUpperCase() == d.roomId[0].toUpperCase()){
                    d.roomId = d.roomId;
                    d.block = d.roomId[0].toUpperCase();
                    d.floor = d.roomId[1];
                    d.temperature = +d.temperature;

                    if (d.date instanceof Date) {
                        d.date = d.date;
                    }
                    else {
                        d.date = parseDate(d.date);
                    }
                }
            });

            //check db for highest and lowest temperature value
            var minTemp = d3.min(heatmapLogs, function(d) {return d.temperature;}),
                maxTemp = d3.max(heatmapLogs, function(d) {return d.temperature;});
            
            
            // Set the color range
            var colors = d3.scaleLinear()
                        .range(['#ffffd4','#fed98e','#fe9929','#d95f0e','#993404']);

            // Set the domain for the colors var
            colors.domain([minTemp, maxTemp]).nice();

            // opacity alternative for filling the svg
            var opacityTest = d3.scaleLinear().rangeRound([0, 100]);
            opacityTest.domain([d3.min(heatmapLogs, function(d) { return d.temperature}), d3.max(heatmapLogs, function(d) { return d.temperature})]).nice();
           
            //filters out all the data and selects data based on date selected
            if (dateMin != null && dateMin != undefined) {
                heatmapLogs = heatmapLogs.filter(function (d){
                    return d.date == dateMin;
                })
            }
            
            // Fill the SVG for each room in the DB
            heatmapLogs.forEach(function(d){
                d3.select("#"+d.roomId.toLowerCase())
                    //.style("opacity", opacityTest(d.temperature)/100)
                    //.style("fill", "red");
                    .style("fill", colors(d.temperature));

            })
        }
    }

    function createHeatmapChartFilters(heatmapLogs, dateMin, floor, block){
        var floorSelector = "";
        floorSelector += "<h4 style='color:#fff; margin-bottom: 5px;  margin-top: 70px;'><i class='fa fa-cogs' aria-hidden='true'></i>&nbsp;Filters: Heatmap</h4><hr /><p>Floor For Heatmap: <select id='selectFloor-heatmapChart' size='1' style='width: 80%;color: #000;'>";
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
        floorSelector += "</select></p>";

        var dateSlider = "";

        dateSlider += "<p style='paddingtop:5px;'>Select Date for Heatmap: ";
        dateSlider += "<input type='date-' id='date-heatmapChart' style='color: #000;width:80%;'>";
        dateSlider += "</p>";
        dateSlider += "<div id='dateSlider-heatmapChart' style='width:80%;margin: 2px;'></div>";

        //display filter
        $('#heatmapChartFilters').append(floorSelector + dateSlider);
        
        //display floor base on dropdown selection
        $('select').change(function () {
            floor = $("#selectFloor-heatmapChart").val();
            displayFloor(floor);
        });   

        tempData = [];

        var heatmapLogs = {!! json_encode($heatmapLogs->toArray()) !!};
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

        //map the dates from the DB to the slider
        if (dateMin != null && dateMin != undefined) {
            $(function (){
                $("#dateSlider-heatmapChart").slider({
                    
                    min: Math.min.apply(null, tempData),
                    max: Math.max.apply(null, tempData),
                    value: dateMin.getTime(),
                    //obtain the date value from slider and input in textbox
                    slide: function( event, ui ) {
                        dateMin = new Date(ui.value);
                        $( "#date-heatmapChart").val(getFormattedDate(dateMin));
                    },                    
                    //when user stopped sliding and invoke display simultaneously
                    stop: function(event, ui) {
                        dateMin = new Date(ui.value);
                        displayHeatmap(heatmapLogs, dateMin, floor, block)
                    }
                });
                
            })
        }
        else {
            $(function (){
                $("#dateSlider-heatmapChart").slider({
                    
                    min: Math.min.apply(null, tempData),
                    max: Math.max.apply(null, tempData),
                    value: Math.min.apply(null, tempData),
                    slide: function( event, ui ) {
                        var dateMin = new Date(ui.value);
                        $( "#date-heatmapChart").val(getFormattedDate(dateMin));
                    },
                    stop: function(event, ui) {
                        var dateMin = new Date(ui.value);
                        displayHeatmap(heatmapLogs, dateMin, floor, block)
                    }

                });
                
            })
        }
    }

    //Security overlay
    function displaySecurity(securityLogs, dateMin, floor, block){

        floor = 'G';
        block = 'G';    
        
        if(dateMin != null)
        {
            var parsedateMin = d3.timeFormat("%Y-%m-%d");
            dateMin = parsedateMin(dateMin);
        }    

        if(d3.select("#Security").property("checked")){
            var securityLogs = {!! json_encode($securityLogs->toArray()) !!};

            var parseDate = d3.timeParse("%Y-%m-%d");

            securityLogs.forEach(function(d) {
                if (floor.toUpperCase() == 'ALL' && block.toUpperCase() == 'ALL') {
                    d.roomId = d.roomId;
                    d.block = d.roomId[0].toUpperCase();
                    d.floor = d.roomId[1];
                    d.transactionQuantity = +d.transactionQuantity;

                    if (d.date instanceof Date) {
                        d.date = d.date;
                    }
                    else {
                        d.date = parseDate(d.date);
                    }
                }
                if (floor.toUpperCase() == d.roomId[1] && block.toUpperCase() == 'ALL') {
                    d.roomId = d.roomId;
                    d.block = d.roomId[0].toUpperCase();
                    d.floor = d.roomId[1];
                    d.transactionQuantity = +d.transactionQuantity;

                    if (d.date instanceof Date) {
                        d.date = d.date;
                    }
                    else {
                        d.date = parseDate(d.date);
                    }
                }
                if (floor.toUpperCase() == 'ALL' && block.toUpperCase() == d.roomId[0].toUpperCase()) {
                    d.roomId = d.roomId;
                    d.block = d.roomId[0].toUpperCase();
                    d.floor = d.roomId[1];
                    d.transactionQuantity = +d.transactionQuantity;

                    if (d.date instanceof Date) {
                        d.date = d.date;
                    }
                    else {
                        d.date = parseDate(d.date);
                    }
                }
                else if(floor.toUpperCase() == d.roomId[1] && block.toUpperCase() == d.roomId[0].toUpperCase()){
                    d.roomId = d.roomId;
                    d.block = d.roomId[0].toUpperCase();
                    d.floor = d.roomId[1];
                    d.transactionQuantity = +d.transactionQuantity;

                    if (d.date instanceof Date) {
                        d.date = d.date;
                    }
                    else {
                        d.date = parseDate(d.date);
                    }
                }
            });

            var minSecurity = d3.min(securityLogs, function(d) {return d.transactionQuantity;}),
                maxSecurity = d3.max(securityLogs, function(d) {return d.transactionQuantity;});
            
            var colors = d3.scaleLinear()
                        .range(['#ffffd4','#fed98e','#fe9929','#d95f0e','#993404']);

            colors.domain([minSecurity, maxSecurity]).nice();

            // opacity alternative for filling the svg
            var opacityTest = d3.scaleLinear().rangeRound([0, 100]);
            opacityTest.domain([d3.min(securityLogs, function(d) { return d.transactionQuantity}), d3.max(securityLogs, function(d) { return d.transactionQuantity})]).nice();
           
            //get the temprature data only based on the date selected
            if (dateMin != null && dateMin != undefined) {
                securityLogs = securityLogs.filter(function (d){
                    return d.date == dateMin;
                })
            }
            
            securityLogs.forEach(function(d){
                d3.select("#"+d.roomId.toLowerCase())
                    .style("fill", colors(d.transactionQuantity));

            })


        }
    }

    function createSecurityMapFilters(securityLogs, dateMin, floor, block){
        var floorSelector = "";
        floorSelector += "<h4 style='color:#fff; margin-bottom: 5px;  margin-top: 70px;'><i class='fa fa-cogs' aria-hidden='true'></i>&nbsp;Filters: Security</h4><hr /><p>Floor For Security Map : <select id='selectFloor-securityChart' size='1' style='width: 80%; color: #000;'>";
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
        floorSelector += "</select></p>";

        var dateSlider = "";

        dateSlider += "<p style='paddingtop:5px;'>Select Date for Security display: ";
        dateSlider += "<input type='date-' id='date-securityChart' style='color: #000;width:80%;'>";
        dateSlider += "</p>";
        dateSlider += "<div id='dateSlider-securityChart' style='width:80%;margin: 2px;'></div>";

        $('#securityMapFilters').append(floorSelector + dateSlider);

        $('select').change(function () {
            floor = $("#selectFloor-securityChart").val();
            displayFloor(floor);
        });

        tempData = [];

        var securityLogs = {!! json_encode($securityLogs->toArray()) !!};

        var parseTime = d3.timeParse("%Y-%m-%d");

        securityLogs.forEach(function(d) {
            d.roomId = d.roomId;
            d.block = d.roomId[0].toUpperCase();
            d.floor = d.roomId[1];
            d.transactionQuantity = +d.transactionQuantity;

            if (d.date instanceof Date) {
                d.date = d.date;
            }
            else {
                d.date = parseTime(d.date);
            }
        });

        securityLogs.forEach(function (d){
            tempData.push(d.date.getTime());
        });

        if (dateMin != null && dateMin != undefined) {
            $(function (){
                $("#dateSlider-securityChart").slider({
                    
                    min: Math.min.apply(null, tempData),
                    max: Math.max.apply(null, tempData),
                    values: [Math.min.apply(null, tempData)],
                    slide: function( event, ui ) {
                        dateMin = new Date(ui.value);
                        $( "#date-securityChart").val(getFormattedDate(dateMin));
                    },                    
                    stop: function(event, ui) {
                        dateMin = new Date(ui.value);
                        displaySecurity(securityLogs, dateMin, floor, block)
                    }
                });
            })
        }
        else {
            $(function (){
                $("#dateSlider-securityChart").slider({
                    
                    min: Math.min.apply(null, tempData),
                    max: Math.max.apply(null, tempData),
                    values: [Math.min.apply(null, tempData)],
                    slide: function( event, ui ) {
                        var dateMin = new Date(ui.value);
                        $( "#date-securityChart").val(getFormattedDate(dateMin));
                    },                    
                    stop: function(event, ui) {
                        dateMin = new Date(ui.value);
                        displaySecurity(securityLogs, dateMin, floor, block)
                    }
                });
            })
        }
    }

    //formats date for date input box from UI slider
    function getFormattedDate(date) {
        var year = date.getFullYear();

        var month = (1 + date.getMonth()).toString();
        month = month.length > 1 ? month : '0' + month;

        var day = date.getDate().toString();
        day = day.length > 1 ? day : '0' + day;

        return day + '/' + month + '/' + year;
    }

    //uncheck all boxes on Mozilla browser refresh
    function uncheck() {
        $(':checkbox:checked').prop('checked',false);
    }

    </script>

@endsection
