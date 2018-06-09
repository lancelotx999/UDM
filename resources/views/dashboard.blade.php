@extends('layouts.app')

@section('content')

<style type="text/css">
	.dashboard {
		width: 90%;
		margin: 0 auto;
	}

	.clearfix:after,
	form:after {
	    content: ".";
	    display: block;
	    height: 0;
	    clear: both;
	    visibility: hidden
	}

	.x_panel {
		background: #fff;
		padding: 15px;
		margin: 15px 0px;
		border: 1px solid #e2e2e2;
	}
</style>

<!-- page content -->
<div class="dashboard" role="main">
    <div class="page-title">
      	<div class="title_left">
        	<h1>Dashboard</h1><hr />
      	</div>

    	<div class="clearfix"></div>

    	<div class="row">
      		<div class="col-md-12 col-sm-12 col-xs-12">
        		<div class="x_panel">
          			<div class="x_title">
            			<h3>Bar Graph</h3>
            			<ul class="nav navbar-right panel_toolbox">
	              			<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
	              			<!-- <li class="dropdown">
	                			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
	                			<ul class="dropdown-menu" role="menu">
	                  				<li><a href="#">Settings 1</a></li>
	                  				<li><a href="#">Settings 2</a></li>
	                			</ul>
	              			</li> -->
            			</ul>
            			<div class="clearfix"></div>
          			</div>
          			<div class="x_content">
            			<div id="mainb" style="height:350px;"></div>
          			</div>
        		</div>
      		</div>
      	</div>

      	<div class="row">
      		<div class="col-md-4 col-sm-4 col-xs-12">
        		<div class="x_panel">
          			<div class="x_title">
            			<h3>Mini Pie</h3>
            			<ul class="nav navbar-right panel_toolbox">
              				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              				<!-- <li class="dropdown">
                				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                				<ul class="dropdown-menu" role="menu">
                  					<li><a href="#">Settings 1</a></li>
                  					<li><a href="#">Settings 2</a></li>
                				</ul>
              				</li> -->
            			</ul>
            			<div class="clearfix"></div>
          			</div>
          			<div class="x_content">
            			<div id="echart_mini_pie" style="height:350px;"></div>
          			</div>
        		</div>
      		</div>

	      	<div class="col-md-4 col-sm-4 col-xs-12">
        		<div class="x_panel">
          			<div class="x_title">
            			<h3>Pie Graph</h3>
            			<ul class="nav navbar-right panel_toolbox">
              				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              				<!-- <li class="dropdown">
                				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                				<ul class="dropdown-menu" role="menu">
                  					<li><a href="#">Settings 1</a></li>
                  					<li><a href="#">Settings 2</a></li>
                				</ul>
              				</li> -->
            			</ul>
            			<div class="clearfix"></div>
          			</div>
          			<div class="x_content">
            			<div id="echart_pie" style="height:350px;"></div>
          			</div>
        		</div>
      		</div>

      		<div class="col-md-4 col-sm-4 col-xs-12">
        		<div class="x_panel">
          			<div class="x_title">
            			<h3>Pie Area</h3>
            			<ul class="nav navbar-right panel_toolbox">
              				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              				<!-- <li class="dropdown">
                				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                				<ul class="dropdown-menu" role="menu">
                  					<li><a href="#">Settings 1</a></li>
                  					<li><a href="#">Settings 2</a></li>
                				</ul>
              				</li> -->
            			</ul>
            			<div class="clearfix"></div>
          			</div>
          			<div class="x_content">
            			<div id="echart_pie2" style="height:350px;"></div>
          			</div>
        		</div>
      		</div>
		</div>

		<div class="row">
      		<div class="col-md-6 col-sm-6 col-xs-12">
        		<div class="x_panel">
          			<div class="x_title">
            			<h3>Scatter Graph</h3>
            			<ul class="nav navbar-right panel_toolbox">
              				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              				<!-- <li class="dropdown">
                				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                				<ul class="dropdown-menu" role="menu">
                  					<li><a href="#">Settings 1</a></li>
                  					<li><a href="#">Settings 2</a></li>
                				</ul>
              				</li> -->
            			</ul>
            			<div class="clearfix"></div>
          			</div>
          			<div class="x_content">
            			<div id="echart_scatter" style="height:350px;"></div>
          			</div>
        		</div>
      		</div>

      		<div class="col-md-6 col-sm-6 col-xs-12">
    			<div class="x_panel">
      				<div class="x_title">
        				<h3>Line Graph</h3>
        				<ul class="nav navbar-right panel_toolbox">
          					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
          					<!-- <li class="dropdown">
            					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            					<ul class="dropdown-menu" role="menu">
              						<li><a href="#">Settings 1</a></li>
              						<li><a href="#">Settings 2</a></li>
            					</ul>
          					</li> -->
        				</ul>
        				<div class="clearfix"></div>
      				</div>
      				<div class="x_content">
        				<div id="echart_line" style="height:350px;"></div>
      				</div>
    			</div>
  			</div>
  		</div>

  		<div class="row">
  			<div class="col-md-12 col-sm-12 col-xs-12">
    			<div class="x_panel">
      				<div class="x_title">
        				<h3>Horizontal Bar</h3>
        				<ul class="nav navbar-right panel_toolbox">
			              	<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
			              	<!-- <li class="dropdown">
			                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
			                	<ul class="dropdown-menu" role="menu">
			                  		<li><a href="#">Settings 1</a></li>
			                  		<li><a href="#">Settings 2</a></li>
			                	</ul>
			              	</li> -->
        				</ul>
        				<div class="clearfix"></div>
      				</div>
      				<div class="x_content">
        				<div id="echart_bar_horizontal" style="height:370px;"></div>
      				</div>
    			</div>
  			</div>
    	</div>

    	<br />

  	</div>
</div>
<!-- /page content -->

@include('layouts.partials._footer')

@endsection
