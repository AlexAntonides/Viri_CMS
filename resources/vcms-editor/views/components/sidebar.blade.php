@section('head')
    @parent
@endsection

<?php
    $curRouteName = Request::route()->getName();
?>

<aside id="vcms-sidebar" class="hidden-xs">
    <section class="sidebar">
        <header>
            <div class="pull-left profile-picture">
                <img class="img-circle" src="http://via.placeholder.com/160x160" width="45" height="auto" alt="Profile Picture">
            </div>
            <div class="pull-left profile-information">
                <p>{{ Auth::user()->name }}</p>
                <i class="fa fa-circle text-success"></i>
                Online
            </div>
        </header>

        <form action="#" method="get">
            <div class="input-group">
                <input type="text" name="search-input" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-flat" aria-label="Search">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </span>
            </div>
        </form>
        
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="menu-item {{ ($curRouteName == 'vcms-dashboard') ? 'active' : '' }}">
                <a href="{{ route('vcms-dashboard') }}">
                    <i class="fa fa-dashboard" aria-hidden="true">
                        <b class="b-dashboard"></b>
                    </i>
                    <span> Dashboard</span>
                    <div class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>    
                    </div>
                </a>
            </li>
            <li class="menu-item {{ ($curRouteName == 'vcms-pages') ? 'active' : '' }}">
                <a href="{{ route('vcms-pages') }}">
                    <i class="fa fa-file" aria-hidden="true">
                        <b class="b-pages"></b>
                    </i>
                    <span>Pages</span>
                    <div class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>    
                    </div>
                </a>
            </li>
            <li class="menu-item {{ ($curRouteName == 'vcms-media') ? 'active' : '' }}">
                <a href="{{ route('vcms-media') }}">
                    <i class="fa fa-camera" aria-hidden="true">
                        <b class="b-media"></b>
                    </i>
                    <span>Media</span>
                    <div class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>    
                    </div>
                </a>
            </li>
            <li class="menu-item {{ ($curRouteName == 'vcms-anchors') ? 'active' : '' }}">
                <a href="{{ route('vcms-anchors') }}">
                    <i class="fa fa-link" aria-hidden="true">
                        <b class="b-links"></b>
                    </i>
                    <span>Anchors</span>
                    <div class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>    
                    </div>
                </a>
            </li>
            <li class="menu-item {{ ($curRouteName == 'vcms-messages') ? 'active' : '' }}">
                <a href="{{ route('vcms-messages') }}">
                    <i class="fa fa-comments" aria-hidden="true">
                        <b class="b-messages"></b> 
                    </i>
                    <span>Messages</span>
                    <div class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>    
                    </div>
                </a>
            </li>
            <li class="menu-item {{ ($curRouteName == 'vcms-appearance') ? 'active' : '' }}">
                <a href="{{ route('vcms-appearance') }}">
                    <i class="fa fa-paint-brush" aria-hidden="true">
                        <b class="b-appearance"></b>
                    </i>
                    <span>Appearance</span>
                    <div class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>    
                    </div>
                </a>
            </li>
            <li class="menu-item {{ ($curRouteName == 'vcms-themes') ? 'active' : '' }}">
                <a href="{{ route('vcms-themes') }}">
                    <i class="fa fa-wrench" aria-hidden="true">
                        <b class="b-themes"></b>
                    </i>
                    <span>Themes</span>
                    <div class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>    
                    </div>
                </a>
            </li>
            <li class="menu-item {{ ($curRouteName == 'vcms-users') ? 'active' : '' }}">
                <a href="{{ route('vcms-users') }}">
                    <i class="fa fa-user" aria-hidden="true">
                        <b class="b-users"></b>
                    </i>
                    <span>Users</span>
                    <div class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>    
                    </div>
                </a>
            </li>
            <li class="menu-item {{ ($curRouteName == 'vcms-settings') ? 'active' : '' }}">
                <a href="{{ route('vcms-settings') }}">
                    <i class="fa fa-cogs" aria-hidden="true">
                        <b class="b-settings"></b>
                    </i>
                    <span>Settings</span>
                    <div class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>    
                    </div>
                </a>
            </li>
        </ul>
        
        <footer>
            <p> &copy; <a href="#">Your Company Name</a> - {{ date("Y") }} </p>
        </footer>
    </section>  
</aside>

@section('script')
        @require( asset('/plugins/js/jquery-3.2.1.min.js') )
        @require( asset('/plugins/js/bootstrap.min.js'))
        
        @parent
@endsection