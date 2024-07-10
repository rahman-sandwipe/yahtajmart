<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-offcanvas">
                <i class="lnr lnr-menu fa fa-bars"></i>
            </button>
        </div>
        <div class="navbar-brand">
            <a href="{{ route(Auth::guard('admin')->user()->role) }}">
                <img src="{{ asset($config->web_logo) }}" alt="{{ $config->web_name }}" class="img-responsive logo">
            </a>                
        </div>
        <div class="navbar-right">
            <form id="navbar-search" class="navbar-form search-form">
                <input value="" class="form-control" placeholder="Search here..." type="text">
                <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
            </form>
            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ route('home') }}" target="_blank" class="icon-menu tbn-sm btn btn-outline-warning">
                            <i class="fa fa-globe"></i>
                            <span>View website</span>
                        </a>
                    </li>
                    <li>
                        <a href="app-inbox.html" class="icon-menu d-none d-sm-block">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        </a>
                        <ul class="dropdown-menu notifications">
                            <li class="header"><strong>You have 4 new Notifications</strong></li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="icon-info text-warning"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                            <span class="timestamp">10:00 AM Today</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="icon-like text-success"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                            <span class="timestamp">11:30 AM Today</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="icon-pie-chart text-info"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="text">Website visits from Twitter is 27% higher than last week.</p>
                                            <span class="timestamp">04:00 PM Today</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="icon-info text-danger"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="text">Error on website analytics configurations</p>
                                            <span class="timestamp">Yesterday</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="fa fa-user"></i>
                        </a>
                        <ul class="dropdown-menu user-menu menu-icon">
                            <li class="menu-heading">{{ Auth::guard('admin')->user()->name }}</li>
                            <li>
                                <a href="{{ route('profile.edit') }}">
                                    <i class="fa fa-user"></i> <span>Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="icon-equalizer"></i> <span>Preferences</span>
                                </a>
                            </li>
                            <li><a href="javascript:void(0);"><i class="icon-lock"></i> <span>Privacy</span></a></li>
                            <li><a href="javascript:void(0);"><i class="icon-bell"></i> <span>Notifications</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();" class="icon-menu">
                                <i class="icon-login"></i>
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>