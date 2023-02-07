<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="bg-header-dark">
        <div class="content-header bg-white-5">
            <!-- Logo -->
            <a class="fw-semibold text-white tracking-wide" href="index.html">
              <span class="smini-visible">
                D<span class="opacity-75">x</span>
              </span>
                <span class="smini-hidden">
                Dash<span class="opacity-75">mix</span>
              </span>
            </a>
            <!-- END Logo -->

        </div>
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ url('/admin') }}">
                        <i class="nav-main-link-icon fa fa-location-arrow"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                        <span class="nav-main-link-badge badge rounded-pill bg-primary">8</span>
                    </a>
                </li>
                <li class="nav-main-heading">Base</li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-border-all"></i>
                        <span class="nav-main-link-name">Equipments</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ url('/admin/equipments') }}">
                                <span class="nav-main-link-name">All Equipments</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ url('/admin/equipments/create') }}">
                                <span class="nav-main-link-name">Add New</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-border-all"></i>
                        <span class="nav-main-link-name">Features</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ url('/admin/features') }}">
                                <span class="nav-main-link-name">All Features</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ url('/admin/features/create') }}">
                                <span class="nav-main-link-name">Add New</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-vector-square"></i>
                        <span class="nav-main-link-name">Properties</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <span class="nav-main-link-name">Properties</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="{{ url('/admin/properties') }}">
                                        <span class="nav-main-link-name">All Properties</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="{{ url('/admin/properties/create') }}">
                                        <span class="nav-main-link-name">Add New</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <span class="nav-main-link-name">Property Rooms</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="{{ url('/admin/rooms') }}">
                                        <span class="nav-main-link-name">All Property Rooms</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="{{ url('/admin/rooms/create') }}">
                                        <span class="nav-main-link-name">Add New</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <span class="nav-main-link-name">Room Features</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_content_main_full_width.html">
                                        <span class="nav-main-link-name">All Room Features</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_content_main_narrow.html">
                                        <span class="nav-main-link-name">Add New</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <span class="nav-main-link-name">Room Equipments</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_content_main_full_width.html">
                                        <span class="nav-main-link-name">All Room Equipments</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_content_main_narrow.html">
                                        <span class="nav-main-link-name">Add New</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>
