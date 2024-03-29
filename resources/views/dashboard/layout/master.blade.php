<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        الجودة العالمية للخدمات البحثية
    </title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('dashboard/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('dashboard/css/sb-admin-2.min.css') }}" rel="stylesheet">
    @include('dashboard.includes.rtl')
    <link rel="stylesheet" href="{{ asset('dashboard/css/custom.css') }}">
    @livewireStyles
    @notifyCss
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="{{ route('dashboard.index') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    {{-- <i class="fas fa-laugh-wink"></i> --}}
                </div>
                <div class="sidebar-brand-text mx-3"> الجودة العالمية للخدمات البحثية
                    </sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ isRequestMatchUrl(route('dashboard.index'), 'active') }}">
                <a class="nav-link" href="{{ route('dashboard.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ trans('dashboard.Dashboard') }}</span></a>
            </li>

            <!-- Divider -->
            {{-- <hr class="sidebar-divider"> --}}


            {{-- Levels --}}
            <div class="sidebar-heading">
                {{ trans('dashboard.Levels') }}
            </div>
            <li class="nav-item {{ isRequestMatchUrl(route('levels.index'), 'active') }}">
                <a class="nav-link" href="{{ route('levels.index') }}">
                    {{-- <i class="fas fa-fw fa-cog"></i> --}}
                    <span>{{ trans('dashboard.Levels List') }}</span></a>
            </li>
            <li class="nav-item {{ isRequestMatchUrl(route('levels.create'), 'active') }}">
                <a class="nav-link" href="{{ route('levels.create') }}">
                    {{-- <i class="fas fa-fw fa-cog"></i> --}}
                    <span>{{ trans('dashboard.Create Level') }}</span></a>
            </li>

            {{-- Colleges --}}
            <div class="sidebar-heading">
                {{ trans('dashboard.Colleges') }}
            </div>
            <li class="nav-item {{ isRequestMatchUrl(route('colleges.index'), 'active') }}">
                <a class="nav-link" href="{{ route('colleges.index') }}">
                    {{-- <i class="fas fa-fw fa-cog"></i> --}}
                    <span>{{ trans('dashboard.Colleges List') }}</span></a>
            </li>
            <li class="nav-item {{ isRequestMatchUrl(route('colleges.create'), 'active') }}">
                <a class="nav-link" href="{{ route('colleges.create') }}">
                    {{-- <i class="fas fa-fw fa-cog"></i> --}}
                    <span>{{ trans('dashboard.Create College') }}</span></a>
            </li>

            {{-- Sections --}}
            <div class="sidebar-heading">
                {{ trans('dashboard.Sections') }}
            </div>
            <li class="nav-item {{ isRequestMatchUrl(route('sections.index'), 'active') }}">
                <a class="nav-link" href="{{ route('sections.index') }}">
                    {{-- <i class="fas fa-fw fa-cog"></i> --}}
                    <span>{{ trans('dashboard.Sections List') }}</span></a>
            </li>
            <li class="nav-item {{ isRequestMatchUrl(route('sections.create'), 'active') }}">
                <a class="nav-link" href="{{ route('sections.create') }}">
                    {{-- <i class="fas fa-fw fa-cog"></i> --}}
                    <span>{{ trans('dashboard.Create Section') }}</span></a>
            </li>

            {{-- Majors --}}
            <div class="sidebar-heading">
                {{ trans('dashboard.Majors') }}
            </div>
            <li class="nav-item {{ isRequestMatchUrl(route('majors.index'), 'active') }}">
                <a class="nav-link" href="{{ route('majors.index') }}">
                    {{-- <i class="fas fa-fw fa-cog"></i> --}}
                    <span>{{ trans('dashboard.Majors List') }}</span></a>
            </li>
            <li class="nav-item {{ isRequestMatchUrl(route('majors.create'), 'active') }}">
                <a class="nav-link" href="{{ route('majors.create') }}">
                    {{-- <i class="fas fa-fw fa-cog"></i> --}}
                    <span>{{ trans('dashboard.Create Major') }}</span></a>
            </li>

            {{-- Help Types --}}
            <div class="sidebar-heading">
                {{ trans('dashboard.Help Types') }}
            </div>
            <li class="nav-item {{ isRequestMatchUrl(route('help-types.index'), 'active') }}">
                <a class="nav-link" href="{{ route('help-types.index') }}">
                    {{-- <i class="fas fa-fw fa-cog"></i> --}}
                    <span>{{ trans('dashboard.Help Types List') }}</span></a>
            </li>
            <li class="nav-item {{ isRequestMatchUrl(route('help-types.create'), 'active') }}">
                <a class="nav-link" href="{{ route('help-types.create') }}">
                    {{-- <i class="fas fa-fw fa-cog"></i> --}}
                    <span>{{ trans('dashboard.Create Help Type') }}</span></a>
            </li>

            {{-- Admins --}}
            <div class="sidebar-heading">
                {{ trans('dashboard.Admins') }}
            </div>
            <li class="nav-item {{ isRequestMatchUrl(route('admins.index'), 'active') }}">
                <a class="nav-link" href="{{ route('admins.index') }}">
                    {{-- <i class="fas fa-fw fa-cog"></i> --}}
                    <span>{{ trans('dashboard.Admins List') }}</span></a>
            </li>
            <li class="nav-item {{ isRequestMatchUrl(route('admins.create'), 'active') }}">
                <a class="nav-link" href="{{ route('admins.create') }}">
                    {{-- <i class="fas fa-fw fa-cog"></i> --}}
                    <span>{{ trans('dashboard.Create Admin') }}</span></a>
            </li>


            {{-- Settings --}}
            <div class="sidebar-heading">
                {{ trans('dashboard.Settings') }}
            </div>
            <li class="nav-item {{ isRequestMatchUrl(route('settings.index'), 'active') }}">
                <a class="nav-link" href="{{ route('settings.index') }}">
                    {{-- <i class="fas fa-fw fa-cog"></i> --}}
                    <span>{{ trans('dashboard.Edit Settings') }}</span></a>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->

            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>{{ trans('dashboard.Blood Transfare Requests') }}</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item"
                            href="{{ route('blood-transfare-requests.index') }}">{{ trans('dashboard.Blood Transfare Requests List') }}</a>
                    </div>
                </div>
            </li> --}}
            {{-- <li class="nav-item {{ isRequestMatchUrl(route('dashboard.index'), 'active') }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" onload="return this.click()"
                    data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>{{ trans('dashboard.Hospitals') }}</span>
                </a>
                <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item"
                            href="{{ route('dashboard.index') }}">{{ trans('dashboard.Hospitals List') }}</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>{{ trans('dashboard.Site Settings') }}</span></a>
            </li> --}}

            {{-- <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block"> --}}

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            {{-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="{{ asset('dashboard/img/undraw_rocket.svg') }}"
                    alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components,
                    and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to
                    Pro!</a>
            </div> --}}

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    {{-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> --}}

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        {{-- <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li> --}}

                        <!-- Nav Item - Alerts -->
                        {{-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to
                                            download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                    Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle"
                                            src="{{ asset('dashboard/img/undraw_profile_1.svg') }}" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle"
                                            src="{{ asset('dashboard/img/undraw_profile_2.svg') }}" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle"
                                            src="{{ asset('dashboard/img/undraw_profile_3.svg') }}" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy
                                            with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle"
                                            src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More
                                    Messages</a>
                            </div>
                        </li> --}}

                        {{-- <div class="topbar-divider d-none d-sm-block"></div> --}}

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->guard('admin')->user()->name }}</span>
                                @if (auth()->guard('admin')->user()->image)
                                    <img class="img-profile rounded-circle"
                                        src="{{ asset('storage/' .auth()->guard('admin')->user()->image) }}"
                                        alt="{{ trans('dashboard.Profile Image') }}">
                                @else
                                    <img class="img-profile rounded-circle"
                                        src="{{ asset('dashboard/img/undraw_profile.svg') }}">
                                @endif

                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('admins.profile.index') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ trans('dashboard.Profile') }}
                                </a>
                                {{-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ trans('dashboard.Settings') }}

                                </a> --}}
                                {{-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ trans('dashboard.Logout') }}
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                @yield('content')
                <!-- /.container-fluid -->

                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>جميع الحقوق محفوظة &copy;
                                الجودة العالمية للخدمات البحثية
                                2023</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ trans('dashboard.Ready to Leave') }}</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    {{-- <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div> --}}
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button"
                            data-dismiss="modal">{{ trans('dashboard.Cancel') }}</button>
                        <a class="btn btn-primary"
                            href="{{ route('dashboard.logout') }}">{{ trans('dashboard.Logout') }}</a>
                    </div>
                </div>
            </div>
        </div>

        @include('notify::components.notify')
        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('dashboard/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('dashboard/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('dashboard/js/sb-admin-2.min.js') }}"></script>

        <!-- Page level plugins -->
        <script src="{{ asset('dashboard/vendor/chart.js/Chart.min.js') }}"></script>

        <!-- Page level custom scripts -->
        <script src="{{ asset('dashboard/js/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('dashboard/js/demo/chart-pie-demo.js') }}"></script>

        <script>
            let sideBar = $("#accordionSidebar");
            if (screen.width < 768) {
                sideBar.addClass("toggled");
            }
        </script>
        @livewireScripts
        @notifyJs
</body>

</html>
