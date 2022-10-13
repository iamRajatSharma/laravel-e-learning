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
    <div id="loading-icon-bx"></div>
    <div class="account-form">
        <div class="account-head" style="background-image:url({{ URL('images/background/bg2.jpg') }});">
            <a href="/"><img src="{{ URL('images/logo-white-2.png') }}" alt=""></a>
        </div>
        <div class="account-form-inner">
            <div class="account-container">
                <div class="heading-bx left">
                    <h2 class="title-head">Sign Up <span>Now</span></h2>
                    <p>Login Your Account <a href="{{ URL('login') }}">Click here</a></p>
                </div>
                <form class="contact-bx" action="" method="POST">
                    
                    <div class="row placeani">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label>Your Name</label>
                                    <input name="name" type="text" required="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label>Your Email Address</label>
                                    <input name="email" type="email" required="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label>Your Password</label>
                                    <input name="password" type="password" class="form-control" required="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 m-b30">
                            <button name="submit" type="submit" value="Submit" class="btn button-md">Sign Up</button>
                        </div>
                    </div>
                </form>
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
    <script src="{{ URL::asset('vendors/masonry/filter.js') }}" "></script>
    <script src="{{ URL::asset('vendors/owl-carousel/owl.carousel.js') }} "></script>
    <script src="{{ URL::asset('js/functions.js') }} "></script>
    <script src="{{ URL::asset('js/contact.js') }} "></script>
    <script src="{{ URL::asset('vendors/switcher/switcher.js') }} "></script>
</body>

</html>