<!doctype html>
<html class="fixed dark" data-style-switcher-options="{'backgroundColor': 'dark'}">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Dark Layout | Porto Admin - Responsive HTML5 Template</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="backend/icon/css/fontawesome-all.min.css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ url('/backend') }}//vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="{{ url('/backend') }}//vendor/animate/animate.compat.css">

    <link rel="stylesheet" href="{{ url('/backend') }}//vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="{{ url('/backend') }}//vendor/boxicons/css/boxicons.min.css" />
    <link rel="stylesheet" href="{{ url('/backend') }}//vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="{{ url('/backend') }}//vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{ url('/backend') }}//vendor/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="{{ url('/backend') }}//vendor/jquery-ui/jquery-ui.theme.css" />
    <link rel="stylesheet" href="{{ url('/backend') }}//vendor/bootstrap-multiselect/css/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="{{ url('/backend') }}//vendor/morris/morris.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{ url('/backend') }}//vendor/datatables/media/css/dataTables.bootstrap4.css" />

    <!--(remove-empty-lines-end)-->

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ url('/backend') }}//css/theme.css" />


    <!--(remove-empty-lines-end)-->



    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ url('/backend') }}//css/custom.css">

    <!-- Head Libs -->
    <script src="{{ url('/backend') }}//vendor/modernizr/modernizr.js"></script>
    <script src="{{ url('/backend') }}//master/style-switcher/style.switcher.localstorage.js"></script>



</head>
<body>
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="../3.1.0" class="logo">
                    <img src="{{ url('/backend') }}//img/logo.png" width="75" height="35" alt="Porto Admin" />
                </a>
                <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                    <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">

                <form action="pages-search-results.html" class="search nav-form">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                        <span class="input-group-append">
                            <button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
                        </span>
                    </div>
                </form>

                <span class="separator"></span>

                <ul class="notifications">
                    <li>
                        <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                            <i class="bx bx-list-ol"></i>
                            <span class="badge">3</span>
                        </a>

                        <div class="dropdown-menu notification-menu large">
                            <div class="notification-title">
                                <span class="float-right badge badge-default">3</span>
                                Tasks
                            </div>

                            <div class="content">
                                <ul>
                                    <li>
                                        <p class="clearfix mb-1">
                                            <span class="message float-left">Generating Sales Report</span>
                                            <span class="message float-right text-dark">60%</span>
                                        </p>
                                        <div class="progress progress-xs light">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                        </div>
                                    </li>

                                    <li>
                                        <p class="clearfix mb-1">
                                            <span class="message float-left">Importing Contacts</span>
                                            <span class="message float-right text-dark">98%</span>
                                        </p>
                                        <div class="progress progress-xs light">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                                        </div>
                                    </li>

                                    <li>
                                        <p class="clearfix mb-1">
                                            <span class="message float-left">Uploading something big</span>
                                            <span class="message float-right text-dark">33%</span>
                                        </p>
                                        <div class="progress progress-xs light mb-1">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                            <i class="bx bx-envelope"></i>
                            <span class="badge">4</span>
                        </a>

                        <div class="dropdown-menu notification-menu">
                            <div class="notification-title">
                                <span class="float-right badge badge-default">230</span>
                                Messages
                            </div>

                            <div class="content">
                                <ul>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <figure class="image">
                                                <img src="{{ url('/backend') }}//img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle" />
                                            </figure>
                                            <span class="title">Joseph Doe</span>
                                            <span class="message">Lorem ipsum dolor sit.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <figure class="image">
                                                <img src="{{ url('/backend') }}//img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle" />
                                            </figure>
                                            <span class="title">Joseph Junior</span>
                                            <span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <figure class="image">
                                                <img src="{{ url('/backend') }}//img/!sample-user.jpg" alt="Joe Junior" class="rounded-circle" />
                                            </figure>
                                            <span class="title">Joe Junior</span>
                                            <span class="message">Lorem ipsum dolor sit.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <figure class="image">
                                                <img src="{{ url('/backend') }}//img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle" />
                                            </figure>
                                            <span class="title">Joseph Junior</span>
                                            <span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
                                        </a>
                                    </li>
                                </ul>

                                <hr />

                                <div class="text-right">
                                    <a href="#" class="view-more">View All</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                            <i class="bx bx-bell"></i>
                            <span class="badge">3</span>
                        </a>

                        <div class="dropdown-menu notification-menu">
                            <div class="notification-title">
                                <span class="float-right badge badge-default">3</span>
                                Alerts
                            </div>

                            <div class="content">
                                <ul>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <div class="image">
                                                <i class="fas fa-thumbs-down bg-danger text-light"></i>
                                            </div>
                                            <span class="title">Server is Down!</span>
                                            <span class="message">Just now</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <div class="image">
                                                <i class="bx bx-lock bg-warning text-light"></i>
                                            </div>
                                            <span class="title">User Locked</span>
                                            <span class="message">15 minutes ago</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <div class="image">
                                                <i class="fas fa-signal bg-success text-light"></i>
                                            </div>
                                            <span class="title">Connection Restaured</span>
                                            <span class="message">10/10/2017</span>
                                        </a>
                                    </li>
                                </ul>

                                <hr />

                                <div class="text-right">
                                    <a href="#" class="view-more">View All</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <span class="separator"></span>

                <div id="userbox" class="userbox">
                    <a href="#" data-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="{{ url('/backend') }}//img/!logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="{{ url('/backend') }}//img/!logged-user.jpg" />
                        </figure>
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                            <span class="name">{{ Auth::user()->name}}</span>
                            <span class="role">Administrator</span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled mb-2">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="bx bx-user-circle"></i> My Profile</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="bx bx-lock"></i> Lock Screen</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="{{ route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();""><i class=" bx bx-power-off"></i> Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">

                            <ul class="nav nav-main">
                                <li>
                                    <a class="nav-link" href="{{route('Dashboard')}}">
                                        <i class="bx bx-home-alt" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{route('Billing')}}"  style="color:#007bff;;">
                                        <i class="bx bx-home-alt" aria-hidden="true"></i>
                                        <span><b>Billing</b></span>
                                    </a>
                                </li>
                                <li class="nav-parent">
                                    <a class="nav-link" href="#">
                                        <i class="bx bx-cart-alt" aria-hidden="true"></i>
                                        <span>Category</span>
                                    </a>
                                    <ul class="nav nav-children">

                                        <li>
                                            <a class="nav-link" href="{{route('AddCategory')}}">
                                                Categories Add
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{route('AllCategory')}}">
                                                Categories List
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{route('TrashCategory')}}">
                                                Category Trash
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-parent">
                                    <a class="nav-link" href="#">
                                        <i class="bx bx-cart-alt" aria-hidden="true"></i>
                                        <span>Food Menu</span>
                                    </a>
                                    <ul class="nav nav-children">

                                        <li>
                                            <a class="nav-link" href="{{route('AddMenu')}}">
                                                Menu Add
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{route('AllMenu')}}">
                                                Menu List
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{route('TrashMenu')}}">
                                                Menu Trash
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a class="nav-link" href="#">
                                        <i class="bx bx-cart-alt" aria-hidden="true"></i>
                                        <span>Table</span>
                                    </a>
                                    <ul class="nav nav-children">

                                        <li>
                                            <a class="nav-link" href="{{route('AddTable')}}">
                                                Table Add
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{route('AllTable')}}">
                                                Table List
                                            </a>
                                        </li>
                                        

                                    </ul>
                                </li>
                            </ul>
                        </nav>


                    </div>

                    <script>
                        // Maintain Scroll Position
                        if (typeof localStorage !== 'undefined') {
                            if (localStorage.getItem('sidebar-left-position') !== null) {
                                var initialPosition = localStorage.getItem('sidebar-left-position')
                                    , sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                                sidebarLeft.scrollTop = initialPosition;
                            }
                        }

                    </script>


                </div>

            </aside>
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Dark Layout</h2>

                    <div class="right-wrapper text-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="index.html">
                                    <i class="bx bx-home-alt"></i>
                                </a>
                            </li>
                            <li><span>Layouts</span></li>
                            <li><span>Dark</span></li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
                    </div>
                </header>

                <!-- start: page -->
                @yield('content')




                <!-- end: page -->
            </section>
        </div>

        <aside id="sidebar-right" class="sidebar-right">
            <div class="nano">
                <div class="nano-content">
                    <a href="#" class="mobile-close d-md-none">
                        Collapse <i class="fas fa-chevron-right"></i>
                    </a>

                    <div class="sidebar-right-wrapper">

                        <div class="sidebar-widget widget-calendar">
                            <h6>Upcoming Tasks</h6>
                            <div data-plugin-datepicker data-plugin-skin="dark"></div>

                            <ul>
                                <li>
                                    <time datetime="2017-04-19T00:00+00:00">04/19/2017</time>
                                    <span>Company Meeting</span>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar-widget widget-friends">
                            <h6>Friends</h6>
                            <ul>
                                <li class="status-online">
                                    <figure class="profile-picture">
                                        <img src="{{ url('/backend') }}//img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-online">
                                    <figure class="profile-picture">
                                        <img src="{{ url('/backend') }}//img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-offline">
                                    <figure class="profile-picture">
                                        <img src="{{ url('/backend') }}//img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-offline">
                                    <figure class="profile-picture">
                                        <img src="{{ url('/backend') }}//img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </aside>

    </section>

    <!-- Vendor -->
    <script src="{{ url('/backend') }}//vendor/jquery/jquery.js"></script>
    <script src="{{ url('/backend') }}//vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="{{ url('/backend') }}//vendor/jquery-cookie/jquery.cookie.js"></script>
    <script src="{{ url('/backend') }}//master/style-switcher/style.switcher.js"></script>
    <script src="{{ url('/backend') }}//vendor/popper/umd/popper.min.js"></script>
    <script src="{{ url('/backend') }}//vendor/bootstrap/js/bootstrap.js"></script>
    <script src="{{ url('/backend') }}//vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="{{ url('/backend') }}//vendor/common/common.js"></script>
    <script src="{{ url('/backend') }}//vendor/nanoscroller/nanoscroller.js"></script>
    <script src="{{ url('/backend') }}//vendor/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="{{ url('/backend') }}//vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="{{ url('/backend') }}//vendor/jquery-ui/jquery-ui.js"></script>
    <script src="{{ url('/backend') }}//vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>
    <script src="{{ url('/backend') }}//vendor/jquery-appear/jquery.appear.js"></script>
    <script src="{{ url('/backend') }}//vendor/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
    <script src="{{ url('/backend') }}//vendor/jquery.easy-pie-chart/jquery.easypiechart.js"></script>
    <script src="{{ url('/backend') }}//vendor/flot/jquery.flot.js"></script>
    <script src="{{ url('/backend') }}//vendor/flot.tooltip/jquery.flot.tooltip.js"></script>
    <script src="{{ url('/backend') }}//vendor/flot/jquery.flot.pie.js"></script>
    <script src="{{ url('/backend') }}//vendor/flot/jquery.flot.categories.js"></script>
    <script src="{{ url('/backend') }}//vendor/flot/jquery.flot.resize.js"></script>
    <script src="{{ url('/backend') }}//vendor/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="{{ url('/backend') }}//vendor/raphael/raphael.js"></script>
    <script src="{{ url('/backend') }}//vendor/morris/morris.js"></script>
    <script src="{{ url('/backend') }}//vendor/gauge/gauge.js"></script>
    <script src="{{ url('/backend') }}//vendor/snap.svg/snap.svg.js"></script>
    <script src="{{ url('/backend') }}//vendor/liquid-meter/liquid.meter.js"></script>
    <script src="{{ url('/backend') }}//vendor/jqvmap/jquery.vmap.js"></script>
    <script src="{{ url('/backend') }}//vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
    <script src="{{ url('/backend') }}//vendor/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="{{ url('/backend') }}//vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
    <script src="{{ url('/backend') }}//vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
    <script src="{{ url('/backend') }}//vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
    <script src="{{ url('/backend') }}//vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
    <script src="{{ url('/backend') }}//vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
    <script src="{{ url('/backend') }}//vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>


    <!--(remove-empty-lines-end)-->

    <!-- Theme Base, Components and Settings -->
    <script src="{{ url('/backend') }}//js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="{{ url('/backend') }}//js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ url('/backend') }}//js/theme.init.js"></script>
    <!-- Analytics to Track Preview Website -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o)
                , m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-42715764-8', 'auto');
        ga('send', 'pageview');

    </script>

    @yield('footer_js')


    <!-- Specific Page Vendor -->
    <script src="{{ url('/backend') }}//vendor/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/backend') }}//vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>
    <!-- Specific Page Vendor -->
    <script src="{{ url('/backend') }}//vendor/jquery-validation/jquery.validate.js"></script>
    <script src="{{ url('/backend') }}//vendor/select2/js/select2.js"></script>
    <script src="{{ url('/backend') }}//vendor/dropzone/dropzone.js"></script>
    <script src="{{ url('/backend') }}//vendor/pnotify/pnotify.custom.js"></script>

    <!-- Examples -->
    <script src="{{ url('/backend') }}//js/examples/examples.dashboard.js"></script>
    <script src="{{ url('/backend') }}//js/examples/examples.ecommerce.datatables.list.js"></script>
    <script src="{{ url('/backend') }}//js/examples/examples.notifications.js"></script>

    <script src="{{ url('/backend') }}//js/examples/examples.header.menu.js"></script>
    <script src="{{ url('/backend') }}//js/examples/examples.ecommerce.form.js"></script>
    <script src="{{ url('/backend') }}//js/examples/examples.modals.js"></script>



</body>
</html>
