<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                <form class="sidebar-search  sidebar-search-bordered" action="page_general_search_3.html" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <a href="javascript:;" class="btn submit">
                                <i class="icon-magnifier"></i>
                            </a>
                        </span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            @if(Request::is('admin*'))
            <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : ''}}">
                <a href="{{route('admin.dashboard')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">Project Management</h3>
            </li>
            <li class="nav-item {{ Request::is('admin/project*') ? 'active' : ''}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-layers"></i>
                    <span class="title">Project</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item {{ Request::is('admin/project/create') ? 'active' : ''}} ">
                        <a href="{{route('admin.project.create')}}" class="nav-link ">
                            <i class="icon-bulb"></i>
                            <span class="title">New Project</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/project') ? 'active' : ''}} ">
                        <a href="{{route('admin.project.index')}}" class="nav-link ">
                            <i class="icon-bar-chart"></i>
                            <span class="title">Manage Project</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/project/category*') ? 'active' : ''}} ">
                        <a href="{{route('admin.project.category.index')}}" class="nav-link ">
                            <i class="fa fa-commenting"></i>
                            <span class="title">Project Category</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">Product Management</h3>
            </li>
            <li class="nav-item {{ Request::is('admin/product*') ? 'active' : ''}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-screen-desktop"></i>
                    <span class="title">Product</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item {{ Request::is('admin/product/create') ? 'active' : ''}} ">
                        <a href="{{route('admin.product.create')}}" class="nav-link ">
                            <i class="icon-bulb"></i>
                            <span class="title">New Product</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/product') ? 'active' : ''}} ">
                        <a href="{{route('admin.product.index')}}" class="nav-link ">
                            <i class="icon-bar-chart"></i>
                            <span class="title">Manage Product</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/product/sub/category*') ? 'active' : ''}} ">
                        <a href="{{route('admin.product.sub.category.index')}}" class="nav-link ">
                            <i class="fa fa-subway"></i>
                            <span class="title">Product Sub Category</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/product/main/category*') ? 'active' : ''}} ">
                        <a href="{{route('admin.product.main.category.index')}}" class="nav-link ">
                            <i class="fa fa-commenting"></i>
                            <span class="title">Product Category</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="heading">
                <h3 class="uppercase">Blog Management</h3>
            </li>
            <li class="nav-item {{ Request::is('admin/tag*') ? 'active' : ''}} ">
                <a href="{{route('admin.tag.index')}}" class="nav-link nav-toggle">
                    <i class="fa fa-tag"></i>
                    <span class="title">Tags</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin/category*') ? 'active' : ''}} ">
                <a href="{{route('admin.category.index')}}" class="nav-link nav-toggle">
                    <i class="fa fa-commenting"></i>
                    <span class="title">Categories</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin/post*') ? 'active' : ''}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Posts</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item {{ Request::is('admin/post/create') ? 'active' : ''}} ">
                        <a href="{{route('admin.post.create')}}" class="nav-link ">
                            <i class="icon-bulb"></i>
                            <span class="title">New Post</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/post') ? 'active' : ''}} ">
                        <a href="{{route('admin.post.index')}}" class="nav-link ">
                            <i class="icon-bar-chart"></i>
                            <span class="title">Manage Post</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Request::is('admin/comment') ? 'active' : ''}} ">
                <a href="{{route('admin.comment.index')}}" class="nav-link nav-toggle">
                    <i class="fa fa-commenting"></i>
                    <span class="title">Comments</span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">Subscriber Management</h3>
            </li>
            <li class="nav-item {{ Request::is('admin/subscribe') ? 'active' : ''}} ">
                <a href="{{route('admin.subscribe.index')}}" class="nav-link nav-toggle">
                    <i class="fa fa-envelope"></i>
                    <span class="title">Subscribers</span>
                </a>
            </li>

            <li class="nav-item {{ Request::is('admin/contributor*') ? 'active' : ''}} ">
                <a href="{{route('admin.contributor.index')}}" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">Users</span>
                </a>
            </li>
            @endif

            @if(Request::is('editor*'))
            <li class="nav-item {{ Request::is('editor/dashboard') ? 'active' : ''}}">
                <a href="{{route('editor.dashboard')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            @endif

            @if(Request::is('author*'))
            <li class="nav-item {{ Request::is('author/dashboard') ? 'active' : ''}}">
                <a href="{{route('author.dashboard')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item {{ Request::is('author/post*') ? 'active' : ''}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Posts</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item {{ Request::is('author/post/create') ? 'active' : ''}} ">
                        <a href="{{route('author.post.create')}}" class="nav-link ">
                            <i class="icon-bulb"></i>
                            <span class="title">New Post</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('author/post') ? 'active' : ''}} ">
                        <a href="{{route('author.post.index')}}" class="nav-link ">
                            <i class="icon-bar-chart"></i>
                            <span class="title">Manage Post</span>
                        </a>
                    </li>
                </ul>
            </li>

            @endif

        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>