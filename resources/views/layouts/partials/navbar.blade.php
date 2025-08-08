<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky taglines">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="{{ route('homepage') }}">
                <img src="{{ asset('client/images/logo-dark.png') }}" class="l-dark" width="80"
                    alt="{{ config('app.name') }}" />
                <img src="{{ asset('client/images/logo-light.png') }}" class="l-light" width="80"
                    alt="{{ config('app.name') }}" />
            </a>
        </div>
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-light">
                <li class="{{ request()->routeIs('homepage') ? 'active' : '' }}"><a href="{{ route('homepage') }}"
                        class="sub-menu-item {{ request()->routeIs('homepage') ? '' : 'text-dark' }}">Home</a></li>

                @if (session('unit_logged_in'))

                    <li class="{{ request()->routeIs('supply.management') ? 'active' : '' }}"><a
                            href="{{ route('supply.management') }}"
                            class="sub-menu-item {{ request()->routeIs('homepage') ? '' : 'text-dark' }}">Supply
                            Management</a></li>

                    <li class="{{ request()->routeIs('reports') ? 'active' : '' }}"><a href="{{ route('reports') }}"
                            class="sub-menu-item {{ request()->routeIs('homepage') ? '' : 'text-dark' }}">Reports</a></li>

                @endif

                <li class="{{ request()->routeIs('training.resources') ? 'active' : '' }}"><a
                        href="{{ route('training.resources') }}"
                        class="sub-menu-item {{ request()->routeIs('homepage') ? '' : 'text-dark' }}">Training
                        Resources</a></li>

                <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}"
                        class="sub-menu-item {{ request()->routeIs('homepage') ? '' : 'text-dark' }}">Contact</a></li>

                @if (session('unit_logged_in'))
                    <li class="active"><a href="{{ route('logout') }}" class="sub-menu-item">Logout
                            ({{ session('unit_name') }})</a></li>
                @endif

            </ul>
            <!--end navigation menu-->

            {{-- <ul class="list-unstyled small-tagline d-none mb-0">
                <li class="list-inline-item me-2">
                    <a href="javascript:void(0)" class="text-dark"><i data-feather="settings"
                            class="fea icon-sm"></i></a>
                </li>
                <li class="list-inline-item me-2">
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#LoginForm" class="text-dark"><i
                            data-feather="user" class="fea icon-sm"></i></a>
                </li>
                <li class="list-inline-item me-2">
                    <div class="mb-0">
                        <select class="form-select form-select-sm select-lang">
                            <option value="4">English</option>
                            <option value="1">Spanish</option>
                            <option value="3">French</option>
                        </select>
                    </div>
                </li>

                <li class="list-inline-item me-2">
                    <a href="javascript:void(0)" class="text-dark"><i data-feather="facebook"
                            class="fea icon-sm"></i></a>
                </li>
                <li class="list-inline-item me-2">
                    <a href="javascript:void(0)" class="text-dark"><i data-feather="linkedin"
                            class="fea icon-sm"></i></a>
                </li>
                <li class="list-inline-item me-2">
                    <a href="javascript:void(0)" class="text-dark"><i data-feather="instagram"
                            class="fea icon-sm"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript:void(0)" class="text-dark"><i data-feather="twitter"
                            class="fea icon-sm"></i></a>
                </li>
            </ul> --}}
            <!--end login button-->
        </div>
        <!--end navigation-->
    </div>
    <!--end container-->
</header>
<!--end header-->
<!-- Navbar End -->