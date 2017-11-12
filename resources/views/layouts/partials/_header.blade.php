<style type="text/css">
    
    ul.nav li.dropdown:hover > ul.dropdown-menu {
        display: block;    
    }

</style>

<div class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Urban Development Maps</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Maps</a></li>
                <li><a>&#124;</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="/chart" href="/chart">
                        <i class="fa fa-area-chart" aria-hidden="true"></i>
                        &nbsp;Charts
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/chart/enrollment">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                &nbsp;Enrolment Statistics
                            </a>
                        </li>
                        <li>
                            <a href="/chart/security">
                                <i class="fa fa-line-chart" aria-hidden="true"></i>
                                &nbsp;Security Log
                            </a>
                        </li>
                        <li>
                            <a href="/chart/clubRecruitment">
                                <i class="fa fa-pie-chart" aria-hidden="true"></i>
                                &nbsp;Club Recruitment Data
                            </a>
                        </li>
                    </ul>
                </li>
                <li><a>&#124;</a></li>
                <li><a href="/editor"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Map Editor</a></li>
                <li><a>&#124;</a></li>
                <li><a href="/upload"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;CSV Upload</a></li>
            </ul>
        </div>
        <!-- /.nav-collapse -->
    </div>
    <!-- /.container -->
</div>
<!-- /.navbar -->

<script type="text/javascript">
    $(document).ready(function () {
        var url = window.location;
        // Will only work if string in href matches with location
        $('ul.nav a[href="' + url + '"]').parent().addClass('active');

        // Will also work for relative and absolute hrefs
        $('ul.nav a').filter(function () {
            return this.href == url;
        }).parent().addClass('active').parent().parent().addClass('active');
    });
</script>