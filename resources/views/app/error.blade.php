<!DOCTYPE html>
<html lang="en">


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
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
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

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/typography.css') }}">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/shortcodes/shortcodes.css') }}">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ URL::asset('css/color/color-1.css') }}">

</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-icon-bx"></div>
        <div class="account-form">
            <div class="account-head" style="background-image:url({{ URL('images/background/bg2.jpg') }});">
                <a href="index.html"><img src="{{ URL('images/logo-white-2.png') }}" alt=""></a>
            </div>
            <div class="account-form-inner">
                <div class="account-container">
                    <div class="error-page">
                        <h3>Ooopps :(</h3>
                        <h2 class="error-title">404</h2>
                        <h5>The Page you were looking for, couldn't be found.</h5>
                        <p>The page you are looking for might have been removed, had its name changed, or is temporarily
                            unavailable.</p>
                        <div class="">
                            <a href="{{ URL('/') }}" class="btn outline black">Back To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
</body>

</html>