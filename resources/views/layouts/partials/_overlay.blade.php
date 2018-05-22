<div class="overlay"></div>

<div class="col-xs-6 col-sm-3 sidebar-offcanvas toggle-show" id="sidebar-wrapper" role="navigation" >
	<div class="sidebar-nav">

        <h3 style="color:#fff; margin-bottom: 5px;"><i class="fa fa-map" aria-hidden="true"></i>&nbsp;Overlays</h3>
        <hr />
        <ul class="nav">

            @if (\Request::is('/map/swinburne'))
            <li>
            	<input type="checkbox" id="Heatmap" class="example">
            	<label for="check_heatmap"><span id="cb_span">Heatmap</span></label>
            </li>

            <li>
            	<input type="checkbox" id="Security" class="example">
            	<label for="check_security"><span id="cb_span">Security</span></label>
            </li>

            <li>
                <input type="checkbox" id="Electric" class="example">
                <label for="check_electric"><span id="cb_span">Electrical Foorprint</span></label>
            </li>
            @endif

            @if (\Request::is('/') || \Request::is('map'))
            <li>
                <input type="checkbox" id="Borough" class="example">
                <label for="check_borough"><span id="cb_span">Borough</span></label>
            </li>

            <li>
                <input type="checkbox" id="District" class="example">
                <label for="check_district"><span id="cb_span">District</span></label>
            </li>

            <li>
                <input type="checkbox" id="Precint" class="example">
                <label for="check_precint"><span id="cb_span">Police Precint</span></label>
            </li>

            <li>
                <input type="checkbox" id="Battalion" class="example">
                <label for="check_battalion"><span id="cb_span">Fire Battalion</span></label>
            </li>

            <li>
                <input type="checkbox" id="School" class="example">
                <label for="check_school"><span id="cb_span">School District</span></label>
            </li>

            <li>
                <input type="checkbox" id="Evacuation" class="example">
                <label for="check_evac"><span id="cb_span">Disaster Evacuation Areas</span></label>
            </li> 

            <!-- <li>
                <input type="checkbox" id="Housing" class="example">
                <label for="check_evac"><span id="cb_span">Affordable Housing Program (2018)</span></label>
            </li> -->

            <li>
                <input type="checkbox" id="Subway" class="example">
                <label for="check_subway"><span id="cb_span">Subway Entry & Routes</span></label>
            </li>

            <li>
                <input type="checkbox" id="Neighbourhoods" class="example">
                <label for="check_subway"><span id="cb_span">Neighbourhoods</span></label>
            </li> 

            <li>
                <input type="checkbox" id="Busstop" class="example">
                <label for="check_subway"><span id="cb_span">Bus Stop</span></label>
            </li>

            <li>
                <input type="checkbox" id="CollegeUni" class="example">
                <label for="check_subway"><span id="cb_span">Universities</span></label>
            </li> 

            <li>
                <input type="checkbox" id="Facilities" class="example">
                <label for="check_subway"><span id="cb_span">Public Facilities</span></label>
            </li> 
            @endif
        </ul>

        <div id="overlay-filters">
            <div id='MapFilters'></div>
        </div>

    </div>
</div>

<button type="button" class="hamburger is-closed" data-toggle="offcanvas">
    <span class="hamb-top"></span>
    <span class="hamb-middle"></span>
    <span class="hamb-bottom"></span>
</button>

<script type="text/javascript">
    
    $(document).ready(function () {
    var trigger = $('.hamburger'),
    overlay = $('.overlay'),
    isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
        } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
        }
    }
  
    $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
    });  
});

</script>