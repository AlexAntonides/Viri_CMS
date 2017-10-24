@section('head')
        @parent
@endsection

<header id="vcms-adminbar">
        <nav class="navbar sticky-top">
                <div class="container-fluid">
                        <div class="row">
                                <div class="navbar-header">
                                        <a class="navbar-brand" href="{{ route('vcms-dashboard') }}">
                                                <b>Viri</b>CMD
                                        </a>
                                </div>

                                <div class="left-nav pull-left">
                                        @yield('adminbar.leftnav')
                                </div>

                                <div id="vcms-navbar" class="collapse navbar-collapse">
                                        <div class="pull-right">
                                                <ul class="nav navbar-nav">
                                                        <li class="dropdown messages-menu">
                                                                <a class="dropdown-toggle" data-toggle="dropdown" aria-label="View your messages" href="#">
                                                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                                        <span class="label label-success">{{ 4 }}</span>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                        <li class="menu-header">
                                                                                You have {{ 4 }} messages
                                                                        </li>

                                                                        <li class="menu-content">
                                                                                <ul class="menu">
                                                                                        @for ($i = 0; $i < 4; $i++)
                                                                                                <li>
                                                                                                        <a href="#">
                                                                                                                <div class="pull-left">
                                                                                                                        <img class="img-circle" src="http://via.placeholder.com/160x160" width="40" height="40" alt="User Image">
                                                                                                                </div>

                                                                                                                <h4> 
                                                                                                                        {{ "Firstname Lastname" }}                                                
                                                                                                                        <small>
                                                                                                                                <i class="fa fa-clock-o">
                                                                                                                                        {{ "2 hours" }}
                                                                                                                                </i>
                                                                                                                        </small>
                                                                                                                </h4>

                                                                                                                <p>
                                                                                                                        {{ "Message" }}
                                                                                                                </p>
                                                                                                        </a>
                                                                                                </li>
                                                                                        @endfor
                                                                                </ul>
                                                                        </li>

                                                                        <li class="menu-footer">
                                                                                <a href="#">
                                                                                        See All Messages
                                                                                </a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="dropdown notifications-menu">
                                                                <a class="dropdown-toggle" data-toggle="dropdown" aria-label="View your messages" href="#">
                                                                        <i class="fa fa-bell-o" aria-hidden="true"></i>
                                                                        <span class="label label-warning">{{ 10 }}</span>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                        <li class="menu-header">
                                                                                You have {{ 10 }} notifications
                                                                        </li>

                                                                        <li class="menu-content">
                                                                                <ul class="menu">
                                                                                        @for ($i = 0; $i < 10; $i++)
                                                                                                <li>
                                                                                                        <a href="#">
                                                                                                                <i class="fa fa-users" aria-hidden="true"></i>
                                                                                                                {{ "Notification message" }}
                                                                                                        </a>
                                                                                                </li>
                                                                                        @endfor
                                                                                </ul>
                                                                        </li>

                                                                        <li class="menu-footer">
                                                                                <a href="#">
                                                                                        View all
                                                                                </a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="dropdown tasks-menu">
                                                                <a class="dropdown-toggle" data-toggle="dropdown" aria-label="View your messages" href="#">
                                                                        <i class="fa fa-flag-o" aria-hidden="true"></i>
                                                                        <span class="label label-danger">{{ 9 }}</span>
                                                                </a>    
                                                                <ul class="dropdown-menu">
                                                                        <li class="menu-header">
                                                                                You have {{ 9 }} tasks
                                                                        </li>

                                                                        <li class="menu-content">
                                                                                <ul class="menu">
                                                                                        @for ($i = 0; $i < 9; $i++)
                                                                                                <li>
                                                                                                        <a href="#">
                                                                                                                <h3>
                                                                                                                        {{ "Task name" }}
                                                                                                                        <small class="pull-right">{{ 20 }}%</small>
                                                                                                                </h3>
                                                                                                                <div class="progress xs">
                                                                                                                        <div class="progress-bar progress-bar-striped active" style="width: {{ 20 }}%;" role="progressbar" aria-valuenow="{{ 20 }}" aria-valuemin="0" aria-valuemax="100">
                                                                                                                                <span class="sr-only">{{ 20 }}% Complete</span>
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                        </a>
                                                                                                </li>
                                                                                        @endfor
                                                                                </ul>
                                                                        </li>

                                                                        <li class="menu-footer">
                                                                                <a href="#">
                                                                                        View All Tasks
                                                                                </a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="dropdown user-menu">
                                                                <a class="dropdown-toggle" data-toggle="dropdown" aria-label="View your messages" href="#">
                                                                        <img class="img-circle user-image" src="http://via.placeholder.com/160x160" width="25" height="25" alt="Profile Picture">
                                                                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                                                                </a>    
                                                                <ul class="dropdown-menu">
                                                                        <li class="user-header">
                                                                                <img class="img-circle" src="http://via.placeholder.com/160x160" width="90" height="90" alt="Profile Picture">
                                                                                <p>
                                                                                        {{ Auth::user()->name }}
                                                                                        <small>Member since {{ "Date" }}</small>
                                                                                </p>
                                                                        </li>

                                                                        <li class="user-content">
                                                                                <div class="row">
                                                                                        <div class="col-xs-4 text-center">
                                                                                                <a href="#">Followers</a>
                                                                                        </div>

                                                                                        <div class="col-xs-4 text-center">
                                                                                                <a href="#">Sales</a>
                                                                                        </div>

                                                                                        <div class="col-xs-4 text-center">
                                                                                                <a href="#">Friends</a>
                                                                                        </div>
                                                                                </div>
                                                                        </li>

                                                                        <li class="user-footer">
                                                                                <div class="pull-left">
                                                                                        <a class="btn btn-default" href="{{ route('vcms-userprofile', [ 'id' => Auth::user()->id ]) }}">Profile</a>
                                                                                </div>
                                                                                <div class="pull-right">
                                                                                        <a class="btn btn-default" href="#">Sign out</a>
                                                                                </div>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                </ul>
                                        </div>
                                </div>
                        </div>
                </div>
        </nav>
</header>

@section('script')
        @require( asset('/plugins/js/jquery-3.2.1.min.js') )
        @require( asset('/plugins/js/bootstrap.min.js'))
        
        @parent
@endsection