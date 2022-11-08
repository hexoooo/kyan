
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>KIAN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png")}}>
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href={{asset("css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("css/owl.carousel.min.css")}}>
    <link rel="stylesheet" href={{asset("css/magnific-popup.css")}}>
    <link rel="stylesheet" href={{asset("css/all.css")}}>
    <!-- <link rel="stylesheet" href={{asset("csss/font-awesome.min.css")}}> -->
    <link rel="stylesheet" href={{asset("css/themify-icons.css")}}>
    <link rel="stylesheet" href={{asset("css/nice-select.css")}}>
    <link rel="stylesheet" href={{asset("css/flaticon.css")}}>
    <link rel="stylesheet" href={{asset("css/animate.css")}}>
    <link rel="stylesheet" href={{asset("css/slicknav.css")}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css")}}>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js")}}></script>
    <link rel="stylesheet" href={{asset("css/style.css")}}>
    <!-- <link rel="stylesheet" href={{asset("css/responsive.css")}}> -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href={{route('home')}}>KIAN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href={{route('home')}}>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{route('menu')}}>Menu</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href={{route('contact')}}>Contact</a>
                </li>
            </ul>
            <a href={{route('orders')}}>
                <i class="fa-solid fa-cart-shopping" style="color:#fff;"></i>
            </a>
        </div>
    </nav>
@yield('content')
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget text-center ">
                        <h3 class="footer_title pos_margin">
                            Awlilah
                        </h3>
                        <p>Awlilah, Awlilah, Dakahlia Governorate
                            <br>
                            <a class="number" href="tel:+201283292327">+201283292327</a>

                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget text-center ">
                        <h3 class="footer_title pos_margin">
                            Social Media
                        </h3>
                        <div class="socail_links text-center">
                            <ul>
                                <li>
                                    <a href="mailto:Mohamedelesawy519@gmail.com">
                                        <i class="fa-solid fa-envelope"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+201283292327">
                                        <i class="fa-solid fa-phone"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/kian.cafe.restaurant">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- <a class="number d-block mb-3" href="tel:+201283292327">+201283292327</a>
                        <a class="number" href="mailto:Mohamedelesawy519@gmail.com">راسلنا عبر البريد الالكتروني</a> -->


                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4 father-links">
                    <ul class="links-footer">
                        <li>
                            <a href={{route('home')}}>
                            Home
                        </a>
                        </li>
                        <li>
                            <a href={{route('menu')}}>
                            Menu
                        </a>
                        </li>
                        <li>
                            <a href={{route('contact')}}>
                            Contact
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">KIAN</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

 <!-- JS here -->
 <script src={{asset("js/vendor/modernizr-3.5.0.min.js")}}></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js")}}></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
 <script src={{asset("js/popper.min.js")}}></script>
 <script src={{asset("js/bootstrap.min.js")}}></script>
 <script src={{asset("js/owl.carousel.min.js")}}></script>
 <script src={{asset("js/isotope.pkgd.min.js")}}></script>
 <script src={{asset("js/ajax-form.js")}}></script>
 <script src={{asset("js/waypoints.min.js")}}></script>
 <script src={{asset("js/jquery.counterup.min.js")}}></script>
 <script src={{asset("js/imagesloaded.pkgd.min.js")}}></script>
 <script src={{asset("js/scrollIt.js")}}></script>
 <script src={{asset("js/jquery.scrollUp.min.js")}}></script>
 <script src={{asset("js/wow.min.js")}}></script>
 <script src={{asset("js/nice-select.min.js")}}></script>
 <script src={{asset("js/jquery.slicknav.min.js")}}></script>
 <script src={{asset("js/jquery.magnific-popup.min.js")}}></script>
 <script src={{asset("js/plugins.js")}}></script>

 <!--contact js-->
 <script src={{asset("js/contact.js")}}></script>
 <script src={{asset("js/jquery.ajaxchimp.min.js")}}></script>
 <script src={{asset("js/jquery.form.js")}}></script>
 <script src={{asset("js/jquery.validate.min.js")}}></script>
 <script src={{asset("js/mail-script.js")}}></script>

 <script src={{asset("js/main.js")}}></script>

</body>

</html>