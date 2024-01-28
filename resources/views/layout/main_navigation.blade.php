<!-- BEGIN: Main Menu-->

<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ url('/') }}"><span class="brand-logo">
                    <img class="latest-logo" src="{{asset(get_settings('logo'))}}" alt="Maxhype" width="150" height="30" ></span>
                    <h2 class="brand-text"></h2>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>

        </ul>

    </div>

    <div class="shadow-bottom"></div>

    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item dashboard"><a class="d-flex align-items-center" href="{{url('admin/home')}}"><i data-feather="home"></i><span class="menu-title text-truncate">Dashboard</span></a>
            <li class="nav-item"><a class="d-flex align-items-center usermgt" href="#"><i data-feather="users"></i><span class="menu-title text-truncate">User Management</span></a>
                <ul class="menu-content dfdsfsd">
                    <li class="roles d-none"><a class="d-flex align-items-center" href="{{ url('admin/roles') }}"><i data-feather="circle"></i><span class="menu-item text-truncate">Roles</span></a>
                    </li>
                    <li class="users"><a class="d-flex align-items-center" href="{{ url('admin/users') }}"><i data-feather="circle"></i><span class="menu-item text-truncate">User List</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item customer-mng"><a class="d-flex align-items-center" href="{{url('admin/customer')}}"><i data-feather="users"></i><span class="menu-title text-truncate">Customer</span></a>
            </li>
             <li class="roles customer_desc"><a class="d-flex align-items-center" href="{{ url('admin/descriptions') }}"><i data-feather="folder"></i><span class="menu-item text-truncate">Terms</span></a>
            </li>
            <li class=" nav-item settings"><a class="d-flex align-items-center" href="{{url('admin/settings')}}"><i data-feather='settings'></i><span class="menu-title text-truncate">Settings</span></a>
            </li>
        </ul>
    </div>
</div>

<!-- END: Main Menu-->

