<!doctype html>
<html class="no-js" lang="en">

<?php

$url = 'https://seclab.mn/php/api2.php';
$json = $json = file_get_contents($url) ;

$coins = json_decode($json);
?>


    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Bigtech - ICO & Crypto Landing Page Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/mCustomScrollbar.min.css">
        <link rel="stylesheet" href="assets/css/odometer.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/default.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css" media="all">
    </head>
    <body class="home-01">

        <!-- Preloader -->
        <div id="preloader">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
        <!-- Preloader -->

        <!-- header-area -->
        <header id="header">
            <div id="header-fixed-height"></div>
            <div id="sticky-header" class="menu-area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav">
                                    <div class="logo">
                                        <a href="/"><img src="assets/img/logo/zes.png" alt=""></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="active menu-item-has-children"><a href="{{('/')}}" class="section-link">Home</a>
                                                <!--<ul class="sub-menu">
                                                    <li class="active"><a href="index.html">Home One</a></li>
                                                    <li><a href="index-2.html">Home Two</a></li>
                                                </ul>-->
                                            </li>
                                            <!--<li><a href="{{('/about')}}" class="section-link">About us</a></li>-->
                                            <!--<li><a href="#sales" class="section-link">Sales</a></li>-->
                                            <!--<li><a href="#roadmap" class="section-link">Roadmap</a></li>-->
                                            <!--<li><a href="{{('/assistance')}}" class="section-link">Assistance</a></li>
                                            <li><a href="{{('burn')}}" class="section-link">Zescoin burn</a></li>-->

                                          <!--<li><a href="{{('burn')}}" class="section-link">Zescoin Burning</a></li>
                                            <li class="menu-item-has-children"><a href="blog.html">Blog</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog.html">Our Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{('contact')}}" class="section-link">Contact us</a></li>-->
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <!--<li class="header-lang"><span class="selected-lang">ENG</span>
                                                <ul class="lang-list">
                                                    <li><a href="#">IND</a></li>
                                                    <li><a href="#">BNG</a></li>
                                                    <li><a href="#">TUR</a></li>
                                                    <li><a href="#">CIN</a></li>
                                                </ul>
                                            </li>-->
                                            <li class="header-btn"><a href="{{('/')}}" class="btn">Buy on Zescoin</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fas fa-times"></i></div>
                                    <div class="nav-logo"><a href="index.html"><img src="assets/img/logo/logo.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->
        <!-- whitepaper-area -->
        <section id="about" class="about-area pt-130 pb-130">
            <div class="container">
                <div class="row align-items-center">
                    <div class="section-title maxw-1000 mx-auto text-center " data-aos="fade-up">
                        <div class="whitepaper" style="width:100%; ">
                            <!-- <div class="sub-title"> -->
                            <iframe id="iframe" onload="myFunction()" src="https://drive.google.com/file/d/1gmjK_fEIJxu_iuA_c_iw6Uk6S0PArcDV/preview" style="width:80%; height:1000px; overflow:auto; border: none;" allow="autoplay" sandbox="allow-scripts allow-same-origin" title="Whitepaper"
                                frameborder="0" scrolling="no" seamless=""></iframe>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- whitepaper-end -->
        <!-- footer-area -->
        <footer>
            <div class="footer-area">
                <div class="container">
                    <div class="footer-scroll-wrap">
                        <button class="scroll-to-target" data-target="html"><i class="fas fa-arrow-up"></i></button>
                    </div>
                    <div class="footer-top">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="footer-widget wow fadeInUp" data-wow-delay=".2s">
                                    <a href="index.html" class="f-logo"><img src="assets/img/logo/logo.png" alt=""></a>
                                    <div class="footer-content">
                                        <p>Smart contract token to change online advertising industry fundamentally.</p>
                                        <ul class="footer-social">
                                            <li><a href="https://www.youtube.com/@zescoinofficial6453"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="https://twitter.com/Zescoin_"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="https://www.facebook.com/seclab.mn"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://www.instagram.com/zescoin_official/"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="https://www.instagram.com/zescoin_official/"><i class="fab fa-telegram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-5 col-sm-6">
                                <div class="footer-widget  wow fadeInUp" data-wow-delay=".4s">
                                    <h4 class="fw-title">ZesCoin</h4>
                                    <div class="footer-link">
                                        <ul>
                                            <li class="active menu-item-has-children"><a href="#header" class="section-link">Home</a>
                                            <li><a href="#contact" class="section-link">Contact us</a></li>
                                            <li><a href="#about" class="section-link">About us</a></li>
                                            <li><a href="#whitepaper" class="section-link">Whitepaper</a></li>
                                            <li><a href="#assistance" class="section-link">Assistance</a></li>
                                            <li><a href="#burn" class="section-link">Zescoin burn</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="footer-widget wow fadeInUp" data-wow-delay=".6s">
                                    <h4 class="fw-title">"Seclab LLC"</h4>
                                    <div class="footer-link">
                                        <ul>
                                            <li><a href="https://seclab.mn/">Home Page</a></li>
                                            <li><a href="https://seclab.mn/">About</a></li>
                                            <li><a href="https://seclab.mn/">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="footer-widget wow fadeInUp" data-wow-delay=".8s">
                                    <h4 class="fw-title">Subscribe Newsletter</h4>
                                    <div class="footer-newsletter">
                                        <p>Exerci tation ullamcorper suscipit lobortis nisl aliquip ex ea commodo</p>
                                        <form action="#">
                                            <input type="email" placeholder="zescoin@seclab.mn" required>
                                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>-->
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="footer-widget wow fadeInUp" data-wow-delay=".6s">
                                    <h4 class="fw-title">"Application"</h4>
                                    <div class="footer-link">
                                        <ul>
                                            <li><a href="#faq"> guide</a></li>
                                            <li><a href="tos.pdf">Application service condition</a></li>
                                            <li><a href="privacy.pdf">Application Secret</a></li>
                                            <li><a href="#try_app">Application Download</a></li>
                                        </ul>
                                            <div class="footer-content">
                                                <ul class="footer-social">
                                                    <li>
                                                        <a href="https://apps.apple.com/mn/app/zescoin-wallet/id1582435424">
                                                                <i class="fab fa-apple"></i>    
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://play.google.com/store/apps/details?id=com.seclab.melon">
                                                                <i class="fab fa-android"></i>    
                                                            </a>
                                                        </li>
            
                                                    </ul>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="copyright-text">
                                    <p>Copyright &copy; 2023. All Rights Reserved Zescoin</p>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-sm-block">
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="#">Terms and conditions</a></li>
                                        <li><a href="#">Privacy policy</a></li>
                                        <li><a href="#">Login / Signup</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->
        <script>
            var form = document.getElementById('sheetdb-form');
            form.addEventListener("submit", e => {
                e.preventDefault();
                fetch(form.action, {
                    method: "POST",
                    body: new FormData(document.getElementById("sheetdb-form")),
                }).then(
                    response => response.json()
                ).then((html) => {
                    // you can put any JS code here
                    document.getElementById('alert').innerHTML = "Submitted Successfully.";
                });
            });
        </script>
        <!-- JS here -->
        <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.odometer.min.js"></script>
        <script src="assets/js/jquery.countdown.min.js"></script>
        <script src="assets/js/jquery.knob.min.js"></script>
        <script src="assets/js/jquery-countdowngampang.min.js"></script>
        <script src="assets/js/jquery.ba-throttle-debounce.min.js"></script>
        <script src="assets/js/jquery.mCustomScrollbar.min.js"></script>
        <script src="assets/js/jarallax.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/jquery.easing.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/main.js"></script>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js'></script>
        <script src='https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-doughnutlabel/2.0.3/chartjs-plugin-doughnutlabel.js'></script><script  src="./script.js"></script>
    </body>
</html>
