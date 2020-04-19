 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        <img src="{{ URL::asset('/img/logo.png')}}" alt="Covid-19 logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Covid-19 (BD)</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chess-rook"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('status')}}" class="nav-link {{ request()->is('status*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-fire"></i>
                        <p>
                            Status
                            <span class="right badge badge-danger">LIVE<i class="fas fa-globe-asia"></i></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('about')}}" class="nav-link {{ request()->is('about*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            About
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('hotline')}}" class="nav-link {{ request()->is('hotline*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-phone-alt"></i>
                        <p>
                            Hotline
                            <span class="right badge badge-info">New</span>
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
