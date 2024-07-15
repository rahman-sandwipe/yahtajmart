<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs mt-2">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#menu">
                    <i class="fa fa-bars"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#Chat">
                    <i class="icon-book-open"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#setting">
                    <i class="icon-settings"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#profile">
                    <i class="icon-user"></i>
                </a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content p-l-0 p-r-0">
            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        <li class="{{ Request::routeIs('admin') ? 'active' : '' }}">
                            <a href="{{ route(auth()->guard('admin')->user()->role) }}">
                                <i class="fa fa-home"></i> <span>Dashboard</span>
                            </a>
                        </li>

                        {{-- ProductController  --}}
                        <li>
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="fa fa-shopping-cart"></i> <span>Products</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('product.index') }}">Products</a>
                                </li>
                                <li>
                                    <a href="{{ route('product.create') }}">New Product</a>
                                </li>
                            </ul>
                        </li>

                        {{-- BlogController  --}}
                        <li>
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="fa fa-newspaper-o"></i> <span>Blog</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('blog.index') }}">All Post</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog.create') }}">New Post</a>
                                </li>
                            </ul>
                        </li>

                        {{-- PhotoController --}}
                        <li>
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="fa fa-image"></i> <span>Gallary</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('photo.index') }}">Images</a>
                                </li>
                                <li>
                                    <a href="{{ route('photo.create') }}">Add Image</a>
                                </li>
                            </ul>
                        </li>

                        {{-- Video Controller --}}
                        <li>
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-camera"></i> <span>Videos</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('video.index') }}">Videos</a>
                                </li>
                                <li>
                                    <a href="{{ route('video.create') }}">New Video</a>
                                </li>
                            </ul>
                        </li>

                        {{-- FeedbackController  --}}
                        <li>
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-star"></i> <span>FeedBack</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('feedback.index') }}">FeedBack</a>
                                </li>
                                <li>
                                    <a href="{{ route('feedback.create') }}">New New</a>
                                </li>
                            </ul>
                        </li>

                        {{-- BrandController --}}
                        <li>
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-grid"></i> <span>Brands</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('brand.index') }}">Brands</a>
                                </li>
                                <li>
                                    <a href="{{ route('brand.create') }}">Add New</a>
                                </li>
                            </ul>
                        </li>

                        {{-- CategoryController --}}
                        <li>
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-grid"></i> <span>Category</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('category.index') }}">Category</a>
                                </li>
                                <li>
                                    <a href="{{ route('category.create') }}">Add New</a>
                                </li>
                            </ul>
                        </li>
                        
                        {{-- Banner --}}
                        <li>
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-grid"></i> <span>Banners</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('banner.index') }}">Banners</a>
                                </li>
                                <li>
                                    <a href="{{ route('banner.create') }}">Add New</a>
                                </li>
                            </ul>
                        </li>

                        {{-- RegisterUserController --}}
                        <li class="{{ Request::routeIs('users') ? 'active' : '' }}">
                            <a href="JavaScript:void(0);" class="has-arrow">
                                <i class="fa fa-users"></i> <span>Users</span>
                            </a>
                            <ul>
                                <li class="{{ Request::routeIs('users') ? 'active' : '' }}">
                                    <a href="{{ route('users') }}">Users</a>
                                </li>
                                <li class="{{ Request::routeIs('newuser') ? 'active' : '' }}">
                                    <a href="{{ route('newuser') }}">Add New</a>
                                </li>
                            </ul>
                        </li>

                        {{-- SettingController --}}
                        <li>
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="fa fa-cog"></i> <span>Settings</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('config.settings') }}">Config Settings</a>
                                </li>
                                <li>
                                    <a href="{{ route('product.create') }}">New Product</a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li class="{{ Request::routeIs('settings') ? 'active' : '' }}">
                            <a href="{{ route('') }}">
                                <i class="fa fa-cog"></i><span>Settings</span>
                            </a>
                        </li> --}}
                    </ul>
                </nav>
            </div>
            <div class="tab-pane p-l-15 p-r-15" id="Chat">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul class="metismenu">
                        <li>
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="fa fa-shopping-cart"></i> <span>Delivery Area</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('division.index') }}">Divisions</a>
                                </li>
                                <li>
                                    <a href="{{ route('district.index') }}">Districts</a>
                                </li>
                                <li>
                                    <a href="{{ route('thana.index') }}">Thana</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>


            <!-- Page Settings --> 
            <div class="tab-pane p-l-15 p-r-15" id="setting">
                <nav id="" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        <li>
                            <a href="javascript:void(0);">
                                <i class="fa fa-home"></i> <span>Home</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="{{ route('admin.contacts') }}">
                                <i class="icon-grid"></i> <span>Contacts</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.abouts') }}" class="has-arrow">
                                <i class="fa fa-address-card"></i> <span>About</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="fa fa-line-chart"></i> <span>Projects</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="fa fa-wrench"></i> <span>Servece</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="has-arrow"><i class="fa fa-users"></i> <span>Teams</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="has-arrow"><i class="fa fa-video-camera"></i> <span>Videos</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="has-arrow"><i class="fa fa-newspaper-o"></i> <span>Blogs</span></a>
                            <ul>
                                <li class="{{ Request::routeIs('faqs.index') ? 'active' : '' }}">
                                    <a href="{{ route('faqs.index') }}">FAQs</a>
                                </li>
                                <li class="{{ Request::routeIs('faqs.create') ? 'active' : '' }}">
                                    <a href="{{ route('faqs.create') }}">Add FAQs</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="has-arrow"><i class="fa fa-newspaper-o"></i> <span>Blogs</span></a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- User Profile -->
            <div class="tab-pane p-l-15 p-r-15" id="profile">
                <div class="user-account">
                    <img src="{{ asset('uploads/users/default_image.png') }}" class="rounded-circle w-100" alt="User Profile Picture">
                    <div>
                        <span>Welcome,</span>
                        <a href="javascript:void(0);" class="user-name">
                            <strong class="text-center">{{ Auth::guard('admin')->user()->name }}</strong>
                            <p class="text-center">{{ Auth::guard('admin')->user()->email }}</p>
                        </a>
                    </div>
                    <hr>
                    <ul class="row list-unstyled">
                        <li class="col-4">
                            <small>Sales</small>
                            <h6>456</h6>
                        </li>
                        <li class="col-4">
                            <small>Order</small>
                            <h6>1350</h6>
                        </li>
                        <li class="col-4">
                            <small>Revenue</small>
                            <h6>$2.13B</h6>
                        </li>
                    </ul>
                </div>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="page-profile2.html"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>