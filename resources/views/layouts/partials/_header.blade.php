<div class="navbar navbar-fixed-top navbar-default" role="navigation">
    
    <div class="container-fluid">
        
        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="/">Urban Development Maps</a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <li>
                    <a href="/">
                        <i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home
                    </a>
                </li>

                <li>
                    <a href="/map">
                        <i class="fa fa-globe fa-fw" aria-hidden="true"></i>&nbsp;Map
                    </a>
                </li>

                @if (Auth::check())
                <li>
                    <a href="/editor">
                        <i class="fa fa-map-marker fa-fw" aria-hidden="true"></i>&nbsp;Notes
                    </a>
                </li>
                @endif

                <li>
                    <a href="/chart">
                        <i class="fa fa-area-chart fa-fw" aria-hidden="true"></i>&nbsp;Chart
                    </a>
                </li>

                @if (Auth::check() and Auth::user()->hasRole('admin'))
                <li>
                    <a href="/dashboard">
                        <i class="fa fa-pie-chart fa-fw" aria-hidden="true"></i>&nbsp;Dashboard
                    </a>
                </li>

                <li>
                    <a href="/upload">
                        <i class="fa fa-upload fa-fw" aria-hidden="true"></i>&nbsp;Upload
                    </a>
                </li>
                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                
                <li>
                    <a href="{{ url('/register') }}">
                        <i class="fa fa-user fa-fw" aria-hidden="true"></i>&nbsp;Register
                    </a>
                </li>

                <li>
                    <a href="{{ url('/login') }}">
                        <i class="fa fa-sign-in fa-fw" aria-hidden="true"></i>&nbsp;Login
                    </a>
                </li>

                @else

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-user-circle fa-fw" aria-hidden="true"></i>&nbsp;
                        {{ explode(' ', trim(Auth::user()->name))[0] }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Log out
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endif
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