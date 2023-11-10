<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="panel/assets/images/favicon.png">
    <!--Page title-->
    <title>Admin easy Learning</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="{{ asset('userbackend/panel/assets/css/bootstrap.min.css') }}">
    <!--font awesome-->
    <link rel="stylesheet" href="{{ asset('userbackend/panel/assets/css/all.min.css') }}">
    <!-- metis menu -->
    <link rel="stylesheet"
        href="{{ asset('userbackend/panel/assets/plugins/metismenu-3.0.4/assets/css/metisMenu.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('userbackend/panel/assets/plugins/metismenu-3.0.4/assets/css/mm-vertical-hover.css') }}">
    <!-- chart -->

    <!-- <link rel="stylesheet" href="assets/plugins/chartjs-bar-chart/chart.css"> -->
    <!--Custom CSS-->
    <link rel="stylesheet" href="{{ asset('userbackend/panel/assets/css/style.css') }}">
    <!-- Toastr css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

</head>

<body id="page-top">
    <!-- preloader -->
    <div class="preloader">
        <img src="{{ asset('userbackend/panel/assets/images/preloader.gif') }}" alt="">
    </div>
    <!-- wrapper -->
    <div class="wrapper">

        <!-- header area -->
        <header class="header_area">
            <!-- logo -->
            <div class="sidebar_logo">
                <a href="index.html">
                    <img src="{{ asset('userbackend/panel/assets/images/logo.png') }}" alt="" class="img-fluid logo1">
                    <img src="{{ asset('userbackend/panel/assets/images/logo_small.png') }}" alt=""
                        class="img-fluid logo2">
                </a>
            </div>
            <div class="sidebar_btn">
                <button class="sidbar-toggler-btn"><i class="fas fa-bars"></i></button>
            </div>
            <ul class="header_menu">
                <li><a href="#" class="search_btn" data-toggle="modal" data-target="#myModal"><i
                            class="fas fa-search"></i></a>
                    <div class="modal fade search_box" id="myModal">
                        <button type="button" class="close m-2 text-white float-right"
                            data-dismiss="modal">&times;</button>
                        <form action="#" class="modal-dialog modal-lg">

                            <div class="modal-content bg-transparent">
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <input class="form-control bg-transparent text-white form-control-lg" type="text"
                                        placeholder="Search...">
                                    <button class="btn btn-lg submit-btn" type="submit">Search</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </li>
                <li><a data-toggle="dropdown" href="#"><i class="far fa-envelope"></i><span>4</span></a>
                    <div class="dropdown_wrapper messages_item dropdown-menu dropdown-menu-right">
                        <div class="dropdown_header">
                            <p>you have 4 messages</p>
                        </div>
                        <ul class="dropdown_body nice_scroll scrollbar">
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <img src="{{ asset('userbackend/panel/assets/images/user1.jpg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="text-part">
                                        <h6>Madelyn <span><i class="far fa-clock"></i> today</span></h6>
                                        <p>Hello Sam...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <img src="{{ asset('userbackend/panel/assets/images/user2.jpg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="text-part">
                                        <h6>Melvin <span><i class="far fa-clock"></i> today</span></h6>
                                        <p>Hello jhon...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <img src="{{ asset('userbackend/panel/assets/images/user3.jpg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="text-part">
                                        <h6>Olinda <span><i class="far fa-clock"></i> today</span></h6>
                                        <p>Hello jhon...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <img src="{{ asset('userbackend/panel/assets/images/user1.jpg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="text-part">
                                        <h6>Johnson <span><i class="far fa-clock"></i> today</span></h6>
                                        <p>Hello Olinda...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <img src="{{ asset('userbackend/panel/assets/images/user3.jpg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="text-part">
                                        <h6>Madelyn <span><i class="far fa-clock"></i> today</span></h6>
                                        <p>Hello Sam...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <img src="{{ asset('userbackend/panel/assets/images/user2.jpg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="text-part">
                                        <h6>Melvin <span><i class="far fa-clock"></i> today</span></h6>
                                        <p>Hello jhon...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <img src="{{ asset('userbackend/panel/assets/images/user3.jpg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="text-part">
                                        <h6>Olinda <span><i class="far fa-clock"></i> today</span></h6>
                                        <p>Hello jhon...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <img src="{{ asset('userbackend/panel/assets/images/user1.jpg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="text-part">
                                        <h6>Johnson <span><i class="far fa-clock"></i> today</span></h6>
                                        <p>Hello Olinda...</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="dropdown_footer">
                            <a href="#">See All Messages</a>
                        </div>
                    </div>
                </li>
                <li><a href="#" data-toggle="dropdown"><i class="far fa-bell"></i><span>9</span></a>
                    <div class="dropdown_wrapper notification_item dropdown-menu dropdown-menu-right">
                        <div class="dropdown_header">
                            <p>You have 9 notifications</p>
                        </div>
                        <ul class="dropdown_body scrollbar nice_scroll">
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <span class="text-success"><i class="fas fa-users"></i></span>
                                    </div>
                                    <div class="text-part">
                                        <p>5 new members joined</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <span class="text-danger"><i class="fas fa-exclamation-triangle"></i></span>
                                    </div>
                                    <div class="text-part">
                                        <p> Very long description here that may...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <span class="text-success"><i class="fas fa-cart-plus"></i></span>
                                    </div>
                                    <div class="text-part">
                                        <p> 25 sales made</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <span class="text-warning"><i class="fas fa-user"></i></span>
                                    </div>
                                    <div class="text-part">
                                        <p> You changed your username</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <span class="text-success"><i class="fas fa-users"></i></span>
                                    </div>
                                    <div class="text-part">
                                        <p>5 new members joined</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <span class="text-danger"><i class="fas fa-exclamation-triangle"></i></span>
                                    </div>
                                    <div class="text-part">
                                        <p> Very long description here that may...</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <span class="text-success"><i class="fas fa-cart-plus"></i></span>
                                    </div>
                                    <div class="text-part">
                                        <p> 25 sales made</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="img-part">
                                        <span class="text-warning"><i class="fas fa-user"></i></span>
                                    </div>
                                    <div class="text-part">
                                        <p> You changed your username</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="dropdown_footer">
                            <a href="#">view All</a>
                        </div>
                    </div>
                </li>
                <li><a data-toggle="dropdown" href="#"><i class="far fa-user"></i></a>
                    <div class="user_item dropdown-menu dropdown-menu-right">
                        <div class="admin">
                            <a href="#" class="user_link"><img
                                    src="{{ asset('userbackend/panel/assets/images/admin.jpg') }}" alt=""></a>
                        </div>
                        <ul>

                            <li><a href="{{ route('user.profile') }}"><span><i class="fas fa-user"></i></span> User
                                    Profile</a></li>
                            <li><a href="{{ route('user.password.edit') }} "><span><i class="fas fa-cogs"></i></span> Password Change</a></li>
                            <li>

                                <a href="{{ route('user.logout') }}"><span><i class="fas fa-unlock-alt"></i></span>
                                    Logout</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>

                    <a class="responsive_menu_toggle" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </header><!-- / header area -->
        <!-- sidebar area -->
        <aside class="sidebar-wrapper ">
            <nav class="sidebar-nav">
                <ul class="metismenu" id="menu1">
                    <li class="single-nav-wrapper">
                        <a href="index.html" class="menu-item">
                            <span class="left-icon"><i class="fas fa-home"></i></span>
                            <span class="menu-text">home</span>
                        </a>
                    </li>
                    <li class="single-nav-wrapper">
                        <a class="menu-item" href="fomrs_editor_ch.html" aria-expanded="false">
                            <span class="left-icon"><i class="far fa-edit"></i></span>
                            <span class="menu-text">Forms</span>
                        </a>
                    </li>
                    <li class="single-nav-wrapper">
                        <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="fas fa-table"></i></span>
                            <span class="menu-text">table</span>
                        </a>
                        <ul class="dashboard-menu">
                            <li><a href="basic_table.html">Basic table</a></li>
                            <li><a href="data_table.html">data table</a></li>
                        </ul>
                    </li>
                    <li class="single-nav-wrapper">
                        <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="fas fa-chart-line"></i></span>
                            <span class="menu-text">Charts</span>
                        </a>
                        <ul class="dashboard-menu">
                            <li><a href="chart-float.html">Float Chart</a></li>
                            <li><a href="chart-float.html">Float Chart</a></li>
                            <li><a href="chart-float.html">Float Chart</a></li>
                        </ul>
                    </li>
                    <li class="single-nav-wrapper">
                        <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="fas fa-sort-alpha-down-alt"></i></span>
                            <span class="menu-text">UI Elements</span>
                        </a>
                        <ul class="dashboard-menu">
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="button.html">Buttons</a></li>
                            <li><a href="notification.html">Notification</a></li>
                            <li><a href="panels.html">Panels</a></li>
                            <li><a href="tabs.html">Tab</a></li>
                            <li><a href="modals.html">Modals</a></li>
                            <li><a href="progressbars.html">Progressber</a></li>
                            <li><a href="list.html">List View</a></li>
                            <li><a href="icheck_toggle_pagination.html">iCheck, Toggle</a></li>
                            <li><a href="label-badge-alert.html">labels, Badges</a></li>
                            <li><a href="treeview.html">Tree View</a></li>
                        </ul>
                    </li>
                    <li class="single-nav-wrapper">
                        <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="fas fa-map-marker-alt"></i></span>
                            <span class="menu-text">Maps</span>
                        </a>
                        <ul class="dashboard-menu">
                            <li><a href="#">Amcharts Maps</a></li>
                            <li><a href="#">Data Maps</a></li>
                            <li><a href="#">Jvector Maps</a></li>
                            <li><a href="#">Google map</a></li>
                            <li><a href="#">Snazzy Map</a></li>
                        </ul>
                    </li>
                    <li class="single-nav-wrapper">
                        <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="far fa-envelope"></i></span>
                            <span class="menu-text">Mailbox</span>
                        </a>
                        <ul class="dashboard-menu">
                            <li><a href="#">Mailbox</a></li>
                            <li><a href="#">Mailbox Details</a></li>
                            <li><a href="#">Compose</a></li>
                        </ul>
                    </li>
                    <li class="single-nav-wrapper">
                        <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="fas fa-mobile-alt"></i></span>
                            <span class="menu-text">App View</span>
                        </a>
                        <ul class="dashboard-menu">
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="#">Vertical timeline</a></li>
                            <li><a href="#">Horizontal timeline</a></li>
                            <li><a href="#">Pricing Table</a></li>
                        </ul>
                    </li>
                    <li class="single-nav-wrapper">
                        <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="far fa-copy"></i></span>
                            <span class="menu-text">Other pages</span>
                        </a>
                        <ul class="dashboard-menu">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="registration.html">Register</a></li>
                            <li><a href="screen_lock.html">screen lock</a></li>
                            <li><a href="forget.html">forget Password</a></li>
                        </ul>
                    </li>
                    <li class="single-nav-wrapper">
                        <a href="#" class="menu-item">
                            <span class="left-icon"><i class="fas fa-home"></i></span>
                            <span class="menu-text">Calender</span>
                        </a>
                    </li>
                    <li class="single-nav-wrapper">
                        <a href="blank_page.html" class="menu-item">
                            <span class="left-icon"><i class="fas fa-file"></i></span>
                            <span class="menu-text">Blank Page</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside><!-- /sidebar Area-->






        <div class="content_wrapper">
            @yield('user')
        </div>
        <!--/ content wrapper -->










    </div>
    <!--/ wrapper -->



    <!-- jquery -->
    <script src="{{ asset('userbackend/panel/assets/js/jquery.min.js') }}"></script>
    <!-- popper Min Js -->
    <script src="{{ asset('userbackend/panel/assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap Min Js -->
    <script src="{{ asset('userbackend/panel/assets/js/bootstrap.min.js') }}"></script>
    <!-- Fontawesome-->
    <script src="{{ asset('userbackend/panel/assets/js/all.min.js') }}"></script>
    <!-- metis menu -->
    <script src="{{ asset('userbackend/panel/assets/plugins/metismenu-3.0.4/assets/js/metismenu.js') }}"></script>
    <script src="{{ asset('userbackend/panel/assets/plugins/metismenu-3.0.4/assets/js/mm-vertical-hover.js') }}">
    </script>
    <!-- nice scroll bar -->
    <script src="{{ asset('userbackend/panel/assets/plugins/scrollbar/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('userbackend/panel/assets/plugins/scrollbar/scroll.active.js') }}"></script>
    <!-- counter -->
    <script src="{{ asset('userbackend/panel/assets/plugins/counter/js/counter.js') }}"></script>
    <!-- chart -->
    <script src="{{ asset('userbackend/panel/assets/plugins/chartjs-bar-chart/Chart.min.js') }}"></script>
    <script src="{{ asset('userbackend/panel/assets/plugins/chartjs-bar-chart/chart.js') }}"></script>
    <!-- pie chart -->
    <script src="{{ asset('userbackend/panel/assets/plugins/pie_chart/chart.loader.js') }}"></script>
    <script src="{{ asset('userbackend/panel/assets/plugins/pie_chart/pie.active.js') }}"></script>


    <!-- Main js -->
    <script src="{{ asset('userbackend/panel/assets/js/main.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;
            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;
            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;
            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
            }
        @endif

    </script>



</body>

</html>
