<div class="col-xs-6 col-sm-3 sidebar-offcanvas toggle-show" id="sidebar" role="navigation" >
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
                <input type="checkbox" id="Subway" class="example">
                <label for="check_subway"><span id="cb_span">Subway Entry</span></label>
            </li> 

            <li>
                <input type="checkbox" id="Busstop" class="example">
                <label for="check_subway"><span id="cb_span">Bus Stop</span></label>
            </li> 

            <li>
                <input type="checkbox" id="CollegeUni" class="example">
                <label for="check_subway"><span id="cb_span">Universities</span></label>
            </li> 
            @endif
        </ul>

        <div id="overlay-filters">
            <div id='MapFilters'></div>
        </div>

    </div>
</div>
