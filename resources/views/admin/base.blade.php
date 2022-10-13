<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:08:15 GMT -->

<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- DESCRIPTION -->
    <meta name="description" content="EduChamp : Education HTML Template" />

    <!-- OG -->
    <meta property="og:title" content="EduChamp : Education HTML Template" />
    <meta property="og:description" content="EduChamp : Education HTML Template" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="../error-404.html" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>EduChamp : Education HTML Template </title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/assets.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/fullcalendar.css') }}"> --}}

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/typography.css') }}">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/shortcodes/shortcodes.css') }}">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/dashboard.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ URL::asset('css/color/color-1.css') }}">
    <style>
        .example{
            border: 1px solid #e5dbdb;
        }
        .pagination{
            padding: 0px!important;
            float: right!important;
        }
        #example_info{
            font-size: 20px;
        }
        .dataTables_filter{
            float: right;
        }
        #example_length{
            font-size: 20px;
            margin-top: 24px;
        }
        .dataTables_empty{
            text-align: center;
        }
    </style>
</head>

<body class="ttr-opened-sidebar ttr-pinned-sidebar">

    <!-- header start -->
    <header class="ttr-header">
        <div class="ttr-header-wrapper">
            <!--sidebar menu toggler start -->
            <div class="ttr-toggle-sidebar ttr-material-button">
                <i class="ti-close ttr-open-icon"></i>
                <i class="ti-menu ttr-close-icon"></i>
            </div>
            <!--sidebar menu toggler end -->
            <!--logo start -->
            <div class="ttr-logo-box">
                <div>
                    <a href="{% URL 'home' %}" class="ttr-logo">
                        <img class="ttr-logo-mobile" alt="" src="{{ URL('images/logo-mobile.png') }}"
                            width="30" height="30">
                        <img class="ttr-logo-desktop" alt="" src="{{ URL('images/logo-white.png') }}"
                            width="160" height="27">
                    </a>
                </div>
            </div>
            <div class="ttr-header-right ttr-with-seperator">
                <!-- header right menu start -->
                <ul class="ttr-header-navigation">
                    <li>
                        <a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img
                                    alt="" src="{{ URL('images/testimonials/pic3.jpg') }}" width="32"
                                    height="32"></span></a>
                        <div class="ttr-header-submenu">
                            <ul>
                                <li><a href="{{ URL('admin/logout') }}">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- header right menu end -->
            </div>
            <!--header search panel start -->
            <div class="ttr-search-bar">
                <form class="ttr-search-form">
                    <div class="ttr-search-input-wrapper">
                        <input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
                        <button type="submit" name="search" class="ttr-search-submit"><i
                                class="ti-arrow-right"></i></button>
                    </div>
                    <span class="ttr-search-close ttr-search-toggle">
                        <i class="ti-close"></i>
                    </span>
                </form>
            </div>
        </div>
    </header>
    <!-- header end -->
    <!-- Left sidebar menu start -->
    <div class="ttr-sidebar">
        <div class="ttr-sidebar-wrapper content-scroll">
            <!-- side menu logo start -->
            <div class="ttr-sidebar-logo">
                <a href="{{ URL('admin/dashboard') }}"><img alt="" src="{{ URL('images/logo.png') }}" width="122"
                        height="27"></a>
                <div class="ttr-sidebar-toggle-button">
                    <i class="ti-arrow-left"></i>
                </div>
            </div>
            <nav class="ttr-sidebar-navi">
                <ul>
                    <li>
                        <a href="{{ URL('admin/dashboard') }}" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-home"></i></span>
                            <span class="ttr-label">Dashborad</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-user"></i></span>
                            <span class="ttr-label">Instructors</span>
                            <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ URL('admin/view_category') }}" class="ttr-material-button"><span
                                        class="ttr-label">View Instructors</span></a>
                            </li>
                            <li>
                                <a href="{{ URL('admin/add_category') }}" class="ttr-material-button"><span
                                        class="ttr-label">Add Instructors</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-email"></i></span>
                            <span class="ttr-label">Category</span>
                            <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ URL('admin/view_category') }}" class="ttr-material-button"><span
                                        class="ttr-label">View Category</span></a>
                            </li>
                            <li>
                                <a href="{{ URL('admin/add_category') }}" class="ttr-material-button"><span
                                        class="ttr-label">Add Category</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-email"></i></span>
                            <span class="ttr-label">Course</span>
                            <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ URL('admin/view_course') }}" class="ttr-material-button"><span
                                        class="ttr-label">View Course</span></a>
                            </li>
                            <li>
                                <a href="{{ URL('admin/add_course') }}" class="ttr-material-button"><span
                                        class="ttr-label">Add Course</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ URL('admin/enrolled') }}" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-book"></i></span>
                            <span class="ttr-label">Enrolled Students</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL('admin/review') }}" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-bookmark-alt"></i></span>
                            <span class="ttr-label">Course Review</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-bar-chart"></i></span>
                            <span class="ttr-label">Reports</span>
                            <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ URL('admin/report_course') }}" class="ttr-material-button"><span
                                        class="ttr-label">Course Report</span></a>
                            </li>
                            <li>
                                <a href="{{ URL('admin/report_student') }}" class="ttr-material-button"><span
                                        class="ttr-label">Students Report</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="bookmark.html" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-shift-right"></i></span>
                            <span class="ttr-label">Logout</span>
                        </a>
                    </li>
                    <li class="ttr-seperate"></li>
                </ul>
                <!-- sidebar menu end -->
            </nav>
            <!-- sidebar menu end -->
        </div>
    </div>
        @yield('content')
    <div class="ttr-overlay"></div>

    <!-- External JavaScripts -->
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ URL::asset('vendors/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{ URL::asset('vendors/counter/waypoints-min.js') }}"></script>
    <script src="{{ URL::asset('vendors/counter/counterup.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/imagesloaded/imagesloaded.js') }}"></script>
    <script src="{{ URL::asset('vendors/masonry/masonry.js') }}"></script>
    <script src="{{ URL::asset('vendors/masonry/filter.js') }}"></script>

    <script src="{{ URL::asset('vendors/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ URL::asset('vendors/scroll/scrollbar.min.js') }}""></script>
    <script src="{{ URL::asset('js/functions.js') }}"></script>
    {{-- <script src="{{ URL::asset('vendors/chart/chart.min.js') }}"></script> --}}
    <script src="{{ URL::asset('js/admin.js') }}"></script>
    <script src="{{ URL::asset('vendors/calendar/moment.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/calendar/fullcalendar.js') }}"></script>
    <script src="{{ URL::asset('vendors/switcher/switcher.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <script>
        $(document).ready(function () {

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listWeek'
                },
                defaultDate: '2019-03-12',
                navLinks: true, // can click day/week names to navigate views

                weekNumbers: true,
                weekNumbersWithinDays: true,
                weekNumberCalculation: 'ISO',

                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [
                    {
                        title: 'All Day Event',
                        start: '2019-03-01'
                    },
                    {
                        title: 'Long Event',
                        start: '2019-03-07',
                        end: '2019-03-10'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2019-03-09T16:00:00'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2019-03-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2019-03-11',
                        end: '2019-03-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2019-03-12T10:30:00',
                        end: '2019-03-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2019-03-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2019-03-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2019-03-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2019-03-12T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2019-03-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        URL: 'http://google.com/',
                        start: '2019-03-28'
                    }
                ]
            });

        });

    </script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->

</html>