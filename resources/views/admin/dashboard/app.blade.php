@include('admin.style')

<body>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('dashboard')}}" class="logo d-flex align-items-center">
                <img src="{{ asset('admin/assets/img/logo.png') }}" alt="">
                <span class="d-none d-lg-block">Venue Finder</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <span class="d-none d-md-block dropdown-toggle ps-2"> {{ Auth::user()->name }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6> {{ Auth::user()->name }}</h6>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>


                            <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-right"></i> <span>Sign Out</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="{{ route('dashboard')}}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->


            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Venue</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="forms-elements.html">
                            <i class="bi bi-circle"></i><span>Add Venue</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-layouts.html">
                            <i class="bi bi-circle"></i><span>Manage Venue</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Forms Nav -->
            
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#division-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Division</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="division-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="forms-elements.html">
                            <i class="bi bi-circle"></i><span>Add Division</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-layouts.html">
                            <i class="bi bi-circle"></i><span>Manage Division</span>
                        </a>
                    </li>
                </ul>
                
            </li><!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#zone-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Zone</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="zone-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="forms-elements.html">
                            <i class="bi bi-circle"></i><span>Add Zone</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-layouts.html">
                            <i class="bi bi-circle"></i><span>Manage Zone</span>
                        </a>
                    </li>
                </ul>
                
            </li><!-- End Forms Nav -->
        </ul>

    </aside><!-- End Sidebar-->
    <main id="main" class="main">

        @yield('main')

    </main>


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>{{date('Y')}}</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Developed by <a href="#">Your Name</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('admin.script')

</body>

</html>
