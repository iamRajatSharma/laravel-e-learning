<!DOCTYPE html>
<html lang="en">

<head>
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
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>EduChamp : Education HTML Template </title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/assets.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/typography.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/shortcodes/shortcodes.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ URL::asset('css/color/color-1.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('vendors/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('vendors/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('vendors/revolution/css/navigation.css') }}">
    <!-- REVOLUTION SLIDER END -->
    <style>
        .header.rs-nav{
            height: 111px!important;
        }
        hr{
            margin-bottom: 0px;
        }
    </style>
</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-icon-bx"></div>
        <!-- Header Top ==== -->
        <header class="header rs-nav" style="height: 109px!important;">
            <div class="top-bar">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="topbar-left">
                            <ul>
                                <li><a href="faq-1.html"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
                                <li><a href="javascript:;"><i class="fa fa-envelope-o"></i>Support@website.com</a></li>
                            </ul>
                        </div>
                        <div class="topbar-right">
                            <ul>
                                <li>
                                    <select class="header-lang-bx">
                                        <option data-icon="flag flag-uk">English UK</option>
                                        <option data-icon="flag flag-us">English US</option>
                                    </select>
                                </li>
                                <li><a href="{{ URL('login') }}">Login</a></li>
                                <li><a href="{{ URL('register') }}">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-header navbar-expand-lg">
                <div class="menu-bar clearfix">
                    <div class="container clearfix">
                        <!-- Header Logo ==== -->
                        <div class="menu-logo">
                            <a href="{{ URL('/') }}"><img src="{{ URL('images/logo.png') }}" alt=""></a>
                        </div>
                        <!-- Mobile Nav Button ==== -->
                        <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- Author Nav ==== -->
                        <div class="secondary-menu">
                            <div class="secondary-inner">
                                <ul>
                                    <li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
                                    <!-- Search Button ==== -->
                                    <li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Search Box ==== -->
                        <div class="nav-search-bar">
                            <form action="#">
                                <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                                <span><i class="ti-search"></i></span>
                            </form>
                            <span id="search-remove"><i class="ti-close"></i></span>
                        </div>
                        <!-- Navigation Menu ==== -->
                        <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                            <div class="menu-logo">
                                <a href="{{ URL('/') }}"><img src="{{ URL('images/logo.png') }}" alt=""></a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="{{ URL('/') }}">Home</a></li>
                                <li class=""><a href="{{ URL('about') }}">About Us</a></li>
                                <li class="add-mega-menu"><a href="javascript:;">Our Courses <i
                                            class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu add-menu">
                                        <li class="add-menu-left">
                                            <h5 class="menu-adv-title">Our Courses</h5>
                                            <ul>
                                                <li><a href="courses.html">Courses </a></li>
                                                <li><a href="courses-details.html">Courses Details</a></li>
                                                <li><a href="profile.html">Instructor Profile</a></li>
                                                <li><a href="event.html">Upcoming Event</a></li>
                                                <li><a href="membership.html">Membership</a></li>
                                            </ul>
                                        </li>
                                        <li class="add-menu-right">
                                            <img src="{{ URL('images/adv/adv.jpg') }}" alt="" />
                                        </li>
                                    </ul>
                                </li>
                                <li class=""><a href="{{ URL('blog') }}">Blogs</a></li>
                                <li class=""><a href="{{ URL('contact') }}">Contact Us</a></li>
                                <li class=""><a href="{{ URL('faq') }}">faq's</a></li>


                            </ul>
                            <div class="nav-social-link">
                                <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                                <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
                                <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <!-- Navigation Menu END ==== -->
                    </div>
                </div>
            </div>
        </header>
        <hr>
       @yield('content')
        <footer>
            <div class="footer-top">
                <div class="pt-exebar">
                    <div class="container">
                        <div class="d-flex align-items-stretch">
                            <div class="pt-logo mr-auto">
                                <a href="/"><img src="{{ URL('images/logo-white.png') }}" alt="" /></a>
                            </div>
                            <div class="pt-social-link">
                                <ul class="list-inline m-a0">
                                    <li><a href="#" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="btn-link"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="pt-btn-join">
                                <a href="{% url 'courses' %}" class="btn ">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
                            <div class="widget">
                                <h5 class="footer-title">Sign Up For A Newsletter</h5>
                                <p class="text-capitalize m-b20">Weekly Breaking news analysis and cutting edge advices on job searching.</p>
                                <div class="subscribe-form m-b20">
                                    <form class="subscription-form" action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php" method="post">
                                        <div class="ajax-message"></div>
                                        <div class="input-group">
                                            <input name="email" required="required" class="form-control" placeholder="Your Email Address" type="email">
                                            <span class="input-group-btn">
                                                <button name="submit" value="Submit" type="submit" class="btn"><i
                                                        class="fa fa-arrow-right"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 col-md-7 col-sm-12">
                            <div class="row">
                                <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="widget footer_widget">
                                        <h5 class="footer-title">Company</h5>
                                        <ul>
                                            <li><a href="{{ URL('/') }}">Home</a></li>
                                            <li><a href="{{ URL('about') }}">About</a></li>
                                            <li><a href="{{ URL('faq') }}">FAQs</a></li>
                                            <li><a href="{{ URL('contact') }}">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="widget footer_widget">
                                        <h5 class="footer-title">Courses</h5>
                                        <ul>
                                            <li><a href="{% url 'courses' %}">Courses</a></li>
                                            <li><a href="{% url 'blog' %}">Blog</a></li>
                                            <li><a href="{% url 'index' %}">Membership</a></li>
                                            <li><a href="{% url 'login' %}">Profile</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
                            <div class="widget widget_gallery gallery-grid-4">
                                <h5 class="footer-title">Our Gallery</h5>
                                <ul class="magnific-image">
                                    <li>
                                        <a href="" class="magnific-anchor"><img src="{{ URL('images/gallery/pic1.jpg') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="" class="magnific-anchor"><img src="{{ URL('images/gallery/pic2.jpg') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="" class="magnific-anchor"><img src="{{ URL('images/gallery/pic3.jpg') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="" class="magnific-anchor"><img src="{{ URL('images/gallery/pic4.jpg') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="" class="magnific-anchor"><img src="{{ URL('images/gallery/pic5.jpg') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="" class="magnific-anchor"><img src="{{ URL('images/gallery/pic6.jpg') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="" class="magnific-anchor"><img src="{{ URL('images/gallery/pic7.jpg') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="" class="magnific-anchor"><img src="{{ URL('images/gallery/pic8.jpg') }}" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer END ==== -->
        <button class="back-to-top fa fa-chevron-up"></button>
    </div>

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
    <script src="{{ URL::asset('js/functions.js') }}"></script>
    <script src="{{ URL::asset('js/contact.js') }}"></script>
    <script src="{{ URL::asset('vendors/switcher/switcher.js') }}"></script>
    <!-- Revolution JavaScripts Files -->
    <script src="{{ URL::asset('vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <script src="{{ URL::asset('vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/revolution/js/extensions/revolution.extension.kenburn.min.j') }}"></script>
    <script
        src="{{ URL::asset('vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script
        src="{{ URL::asset('vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script
        src="{{ URL::asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script>
        jQuery(document).ready(function () {
            var ttrevapi;
            var tpj = jQuery;
            if (tpj("#rev_slider_486_1 ").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_486_1 ");
            } else {
                ttrevapi = tpj("#rev_slider_486_1 ").show().revolution({
                    sliderType: "standard ",
                    jsFileLocation: "assets/vendors/revolution/js/ ",
                    sliderLayout: "fullwidth ",
                    dottedOverlay: "none ",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "on ",
                        keyboard_direction: "horizontal ",
                        mouseScrollNavigation: "off ",
                        mouseScrollReverse: "default ",
                        onHoverStop: "on ",
                        touch: {
                            touchenabled: "on ",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal ",
                            drag_block_vertical: false
                        }
                        ,
                        arrows: {
                            style: "uranus ",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left ",
                                v_align: "center ",
                                h_offset: 10,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right ",
                                v_align: "center ",
                                h_offset: 10,
                                v_offset: 0
                            }
                        },

                    },
                    viewPort: {
                        enable: true,
                        outof: "pause ",
                        visible_area: "80% ",
                        presize: false
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [768, 600, 600, 600],
                    lazyType: "none ",
                    parallax: {
                        type: "scroll ",
                        origo: "enterpoint ",
                        speed: 400,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 46, 47, 48, 49, 50, 55],
                        type: "scroll ",
                    },
                    shadow: 0,
                    spinner: "off ",
                    stopLoop: "off ",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off ",
                    autoHeight: "off ",
                    hideThumbsOnMobile: "off ",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off ",
                        nextSlideOnWindowFocus: "off ",
                        disableFocusListener: false,
                    }
                });
            }
        });	
    </script>
</body>

</html>