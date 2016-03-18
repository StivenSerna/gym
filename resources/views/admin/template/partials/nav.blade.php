<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">GYM</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu message-dropdown">
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                            <span class="pull-left">
                                <img class="media-object" src="http://placehold.it/50x50" alt="">
                            </span>
                            <div class="media-body">
                                <h5 class="media-heading">
                                    <strong>Holi</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                <p>Holi</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="message-footer">
                    <a href="#">Read All New Messages</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu alert-dropdown">
                <li>
                    <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">View All</a>
                </li>
            </ul>
        </li>

        @if (Auth::guest())
        <li><a href="{{ route('login') }}">Login</a></li>
        @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out"></i> Cerrar sesión</a></li>
            </ul>
        </li>
        @endif

    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav" id="side-menu">
            <li id="page-inicio" class="uno">
                <a href="{{route('inicio')}}"><i class="fa fa-fw fa-dashboard"></i> Inicio</a>
            </li>
            <li><hr style="border-color: #008cba;"></li>
            <li>
                <a href="#" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-users"></i> Miembros <span class="fa arrow"></span></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="{{route('admin.member.index')}}"><i class="fa fa-chevron-right"></i> Administrar</a>
                    </li>
                    <li>
                        <a href="{{route('admin.member.create')}}"><i class="fa fa-chevron-right"></i> Registrar</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#membresias"><i class="fa fa-credit-card-alt"></i> Membresias <span class="fa arrow"></span></a>
                <ul id="membresias" class="collapse">
                    <li id="page-memberships">
                        <a href="{{ route('membership.index') }}"><i class="fa fa-chevron-right"></i> Administrar</a>
                    </li>
                    <li>
                        <a href="{{ route('affiliation.index') }}"><i class="fa fa-chevron-right"></i> Afiliaciones </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-money"></i> Ingresos / Egresos</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-line-chart"></i> Reportes</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>