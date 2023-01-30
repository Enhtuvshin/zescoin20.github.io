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
        <title>ZESCOIN</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/zesc.png">
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
                                            <li class="active menu-item-has-children"><a href="#header" class="section-link">Home</a>
                                                <!--<ul class="sub-menu">
                                                    <li class="active"><a href="index.html">Home One</a></li>
                                                    <li><a href="index-2.html">Home Two</a></li>
                                                </ul>-->
                                            </li>
                                            <li><a href="#about" class="section-link">About us</a></li>
                                            <!--<li><a href="#sales" class="section-link">Sales</a></li>-->
                                            <!--<li><a href="#roadmap" class="section-link">Roadmap</a></li>-->
                                            <li><a href="#whitepaper" class="section-link">Whitepaper</a></li>
                                            <li><a href="#assistance" class="section-link">Assistance</a></li>
                                            <li><a href="#burn" class="section-link">Zescoin burn</a></li>

                                          <!--  <li><a href="#roadmap" class="section-link">Zescoin Burning</a></li>
                                            <li class="menu-item-has-children"><a href="blog.html">Blog</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog.html">Our Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>-->
                                            <li><a href="#contact" class="section-link">Contact us</a></li>
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
                                            <li class="header-btn"><a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#wallet-option">Buy on Zescoin</a></li>
                                            
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
        <!-- connect wallet modal start -->
    <div class="wallet-modal modal fade" id="wallet-option" tabindex="-1" aria-labelledby="choose-wallet"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="choose-wallet">Listed Exchanges</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--<p>Please select a wallet to connect for <br> Start Minting your NFTs</p>-->
                <ul class="wallet__list">
                    <li class="wallet__list-item"><a href="https://complex.mn/market/ZESC-MNTC"> <span><img src="assets/img/wallet/complex.png"
                                    alt="metamask">
                            </span> </a></li>
                    <li class="wallet__list-item"><a href="https://www.idax.exchange/mn_MN/newTrade/ZESC_MNT?type=spot"> <span><img src="assets/img/wallet/idax.png"
                                    alt="coinbase">
                            </span> </a></li>
                    <li class="wallet__list-item"><a href="https://capex.mn/trade/ZESC-MNT"> <span><img src="assets/img/wallet/apex.png"
                                    alt="bsc">
                            </span></a></li>
                    <li class="wallet__list-item"><a href="https://trade.mn/exchange/ZESC/MNT/"> <span><img src="assets/img/wallet/trade.png"
                                    alt="Trust Wallet">
                            </span></a></li>
                </ul>
                
                <!--<p>By connecting your wallet, you agree to our Terms of Service and our Privacy Policy.</p>-->
            </div>
        </div>
    </div>
</div>
<!-- connect wallet modal end -->

        <!-- main-area -->
        <main class="fix">

            <!-- banner-area -->
            <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
            <section class="banner-area banner-bg">
                <div class="banner-shape-wrap">
                    <img src="assets/img/banner/zesc01.png" alt="" class="img-one">
                    <img src="assets/img/banner/zesc02.png" alt="" class="img-two">
                    <img src="assets/img/banner/zesc03.png" alt="" class="img-three">
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="banner-content text-center">
                                <img src="assets/img/icon/fire.png" alt="">
                                <h1>Online advertising <span class="auto-type"></span></h1>
                            </div>
                            <script>
                                var typed = new Typed(".auto-type", {
                                    strings: ["progress","new generation","evolution","new culture"],
                                    typeSpeed: 150,
                                    backSpeed: 150,
                                    loop: true
                                })
                                </script>
                            <div class="banner-progress-wrap">
                                <ul>
                                    <li>Delivered to the market</li>
                                    <li></li>
                                    <li>Price</li>
                                </ul>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="title">1,000,000,000 (20%)<span>1 ZESC = 0.055 MNT</span></h4>
                            </div>
                        </div>
                    </div>
                    <!--<div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="banner-countdown-wrap text-center">
                                <h2 class="title">ICO Will Start In..</h2>
                                <div class="coming-time" data-countdown="2023/1/29"></div>
                            </div>
                        </div>
                    </div>-->
                    <div class="container" id="token">
                        <div class="pricing-table-head d-flex justify-content-between flex-wrap">
                        <p>Initial exchange offering(IEO)
                            <br> <span>2021.09.07 (12:00)</span></p>
                        <p><b>Second exchange offering</b>
                            <br> <span>2021.09.28 (12:00)</span></p>
                        <p>Traded exchanges
                            <br> <span>Trade.mn, Complex.mn, Capex.mn</span></p>
                        <p>Delivered to the market
                            <br> <span>1,000,000,000 (20%)</span></p>
                        
                    </div>
                        <div class="pricing-table mt-40">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-price-details mb-md-20 mb-lg-0" data-aos="fade-up"
                                        data-aos-duration="1000">
                                        <div class="single-Price text-center">
                                            <div class="coin-type">
    
                                                <a>
                                                    <img style="height: 57px; width: 57px;" src="assets/img/logo/zesc.png" alt="cryptocoin image"  >
                                                </a>
                                                <div class="coin-name my-20">
                                                        <h3>ZesCoin</h3>
                                                    </a>
                                                    <span></span>
                                                </div>
                                                <div class="coin-price-rate d-flex justify-content-between flex-wrap">
                                                    <div class="rate">
                                                        <h6>Price</h6>
                                                        <span > <?php echo  $coins[0]->price; ?> ₮</span>
                                                    </div>
                                                    <div class="rate">
                                                        <h6>Change</h6>
                                                        <span>(<?php echo $coins[0]->percent; ?>%)</span> 
                                                    </div>
                                                    <!-- <div class="rate">
                                                        <h6>Доод</h6>
                                                        <span>5.84 ₮</span>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <div class="rate-fluctuation text-left">
                                                <p>ZESC - MNT </p>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-price-details mb-md-20 mb-lg-0" data-aos="fade-up"
                                        data-aos-duration="1200">
                                        <div class="single-Price text-center">
                                            <div class="coin-type">
                                                <a>
                                                    <img style="height: 57px; width: 57px;"
                                                        src="assets/img/logo/btc.png" alt="cryptocoin image">
                                                </a>
    
                                                <div class="coin-name my-20">
                                                
                                                        <h3>Bitcoin</h3>
                                                    </a>
    
                                                    <span></span>
                                                </div>
                                                <div class="coin-price-rate d-flex justify-content-between flex-wrap">
                                                    <div class="rate">
                                                        <h6>Price</h6>
                                                        <span > <?php echo  $coins[1]->price; ?> ₮</span>
                                                    </div>
                                                    <div class="rate">
                                                        <h6>Change</h6>
                                                        <span>(<?php echo $coins[1]->percent; ?>%)</span> 
                                                    </div>
                                                    <!-- <div class="rate">
                                                        <h6>Доод</h6>
                                                        <span>5.84 ₮</span>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <div class="rate-fluctuation text-left">
                                                <p>BTC - MNT </p>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-price-details mb-md-20 mb-lg-0" data-aos="fade-up"
                                        data-aos-duration="1500">
                                        <div class="single-Price text-center">
                                            <div class="coin-type">
                                                <a >
                                                    <img style="height: 57px; width: 57px;" src="assets/img/logo/eth.png"
                                                        alt="cryptocoin image">
                                                </a>
                                                <div class="coin-name my-20">
                                                    
                                                <a>
                                                        <h3>Ethereum</h3>
                                                    </a>
    
                                                </div>
                                                <div class="coin-price-rate d-flex justify-content-between flex-wrap">
                                                    <div class="rate">
                                                        <h6>Price</h6>
                                                        <span > <?php echo  $coins[2]->price; ?> ₮</span>
                                                    </div>
                                                    <div class="rate">
                                                        <h6>Change</h6>
                                                        <span>(<?php echo $coins[2]->percent; ?>%)</span> 
                                                    </div>
                                                    <!-- <div class="rate">
                                                        <h6>Доод</h6>
                                                        <span>5.84 ₮</span>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <div class="rate-fluctuation text-left">
                                                <p>ETH - MNT </p>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-price-details mb-md-20 mb-lg-0" data-aos="fade-up"
                                        data-aos-duration="1800">
                                        <div class="single-Price text-center">
                                            <div class="coin-type">
                                                <a >
                                                    <img style="width: 57px;" src="assets/img/logo/bnb.png"
                                                        alt="cryptocoin image">
                                                </a>
                                                <div class="coin-name my-20">
                                                    <h3>BNB</h3>
    
                                                </div>
                                                <div class="coin-price-rate d-flex justify-content-between flex-wrap">
                                                    <div class="rate">
                                                        <h6>Price</h6>
                                                        <span > <?php echo  $coins[3]->price; ?> ₮</span>
                                                    </div>
                                                    <div class="rate">
                                                        <h6>Change</h6>
                                                        <span>(<?php echo $coins[3]->percent; ?>%)</span> 
                                                    </div>
                                                    <!-- <div class="rate">
                                                        <h6>Доод</h6>
                                                        <span>5.84 ₮</span>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <div class="rate-fluctuation text-left">
                                                <p>BNB - MNT </p>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area -->
            <section id="about" class="about-area pt-130 pb-130">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img wow fadeInLeft" data-wow-delay=".2s">
                                <img src="assets/img/images/about_img01.png" alt="">
                                <img src="assets/img/images/about_img02.png" alt="" class="img-two">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content wow fadeInRight" data-wow-delay=".2s">
                                <div class="section-title mb-30">
                                    <span class="sub-title">Who we are</span>
                                    <!--<h2 class="title">The World’s <span>1st ICO</span> Platform That Offers Rewards</h2>-->
                                </div>
                                <p>ZesCoin is a smart contract token that is used in online advertising. The project team is developing a social network platform, Melon, which will be the first application of ZesCoin. Our goal is to integrate ZesCoin into existing online systems and make online advertisement payments easier for the payers. Users of these systems can be rewarded by ZesCoin when they view advertisements.</p>
                                <a href="{{('/whitepaper')}}" class="btn">Purchase Tokens</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- partner-area -->
            <div class="partner-area pb-130">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-10">
                                <span class="sub-title">Our top partner</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="partner-wrap">
                                <ul>
                                    <li><img src="assets/img/partner/partner_img01.png" alt=""></li>
                                    <li><img src="assets/img/partner/partner_img02.png" alt=""></li>
                                    <li><img src="assets/img/partner/partner_img03.png" alt=""></li>
                                    <li><img src="assets/img/partner/partner_img04.png" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- partner-area-end -->

            <!-- choose-area 
            <section class="choose-area pb-130">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6">
                            <div class="section-title text-center mb-50">
                                <span class="sub-title">why Choose us</span>
                                <h2 class="title">Why choose our bigtech <span>Token</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row choose-active">
                        <div class="col-lg-3">
                            <div class="choose-item">
                                <div class="choose-icon">
                                    <img src="assets/img/icon/choose_icon01.svg" alt="">
                                </div>
                                <div class="choose-content">
                                    <h2 class="title"><a href="#">Mobile payment make easy</a></h2>
                                    <p>Add new, trending and rare artwork to your collection.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="choose-item">
                                <div class="choose-icon">
                                    <img src="assets/img/icon/choose_icon02.svg" alt="">
                                </div>
                                <div class="choose-content">
                                    <h2 class="title"><a href="#">Lifetime free transaction</a></h2>
                                    <p>Add new, trending and rare artwork to your collection.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="choose-item">
                                <div class="choose-icon">
                                    <img src="assets/img/icon/choose_icon03.svg" alt="">
                                </div>
                                <div class="choose-content">
                                    <h2 class="title"><a href="#">Protect the <br> identity</a></h2>
                                    <p>Add new, trending and rare artwork to your collection.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="choose-item">
                                <div class="choose-icon">
                                    <img src="assets/img/icon/choose_icon04.svg" alt="">
                                </div>
                                <div class="choose-content">
                                    <h2 class="title"><a href="#">Sercurity & control over money</a></h2>
                                    <p>Add new, trending and rare artwork to your collection.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="choose-item">
                                <div class="choose-icon">
                                    <img src="assets/img/icon/choose_icon02.svg" alt="">
                                </div>
                                <div class="choose-content">
                                    <h2 class="title"><a href="#">Lifetime free transaction</a></h2>
                                    <p>Add new, trending and rare artwork to your collection.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="choose-item">
                                <div class="choose-icon">
                                    <img src="assets/img/icon/choose_icon03.svg" alt="">
                                </div>
                                <div class="choose-content">
                                    <h2 class="title"><a href="#">Protect the <br> identity</a></h2>
                                    <p>Add new, trending and rare artwork to your collection.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="choose-item">
                                <div class="choose-icon">
                                    <img src="assets/img/icon/choose_icon04.svg" alt="">
                                </div>
                                <div class="choose-content">
                                    <h2 class="title"><a href="#">Sercurity & control over money</a></h2>
                                    <p>Add new, trending and rare artwork to your collection.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                        <span class="slider__label sr-only"></span>
                    </div>
                </div>
            </section>
            choose-area-end -->

            <!-- chart-area -->
            <section id="sales" class="chart-area chart-bg jarallax">
                <div class="container">
                    <div class="chart-inner">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-6 col-md-10 order-0 order-lg-2">
                                <div class="chart-wrap wow fadeInRight" data-wow-delay=".2s">
                                    <img src="assets/img/images/chart.png" alt="">
                                    <ul>
                                        <li>Contingency: 70%</li>
                                        <li>Business Development: 10%</li>
                                        <li>Investor: 30%</li>
                                        <li>Mongolia</li>
                                        <li>Legal & Regulation:10%</li>
                                        <li>Another country</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-10">
                                <div class="chart-content wow fadeInLeft" data-wow-delay=".2s">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="funding-tab" data-bs-toggle="tab" data-bs-target="#funding" type="button"
                                                role="tab" aria-controls="funding" aria-selected="true">Funding Allocation</button>
                                        </li>
                    
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="funding" role="tabpanel" aria-labelledby="funding-tab">
                                            <div class="chart-content-inner">
                                                <h2 class="title">1 ZESC = 0.055 MNT</h2>
                                                <p>ZesCoin is a smart contract token that is used in online advertising.</p>
                                                <!--<a href="#" class="btn">Buy Now</a>-->
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- chart-area-end -->

            

            <!-- area-bg -->
            <div class="area-bg">

                <!-- roadMap-area -->
                <section id="roadmap" class="roadmap-area pt-130 pb-130">
                    <div class="container custom-container-two">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-8">
                                <div class="section-title text-center mb-6">
                                    <span class="sub-title">Our Roadmap</span>
                                    <p>We present the action plan of the "ZesCoin" project, which will work in the domestic advertising market and provide services to the international market.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="bt-roadmap_x">
                                    <div class="bt-roadmap-wrap">
                                        <div class="bt-roadmap-item">
                                            <span class="roadmap-title">2021.05.21</span>
                                            <div class="roadmap-content">
                                                <span class="dot"></span>
                                                <h4 class="title"></h4>
                                                <span>Releases on</span>
                                                <span>the Ethereum</span>
                                                <span>blockchain</span>
                                            </div>
                                        </div>
                                        <div class="bt-roadmap-item">
                                            <span class="roadmap-title">2021.05.29</span>
                                            <div class="roadmap-content">
                                                <span class="dot"></span>
                                                <h4 class="title"></h4>
                                                <span>Whitepaper</span>
                                                <span>published</span>
                                                
                                            </div>
                                        </div>
                                        <div class="bt-roadmap-item">
                                            <span class="roadmap-title">2021.06.15</span>
                                            <div class="roadmap-content">
                                                <span class="dot"></span>
                                                <h4 class="title"></h4>
                                                <span>Opening of</span>
                                                <span>Zescoin.mn</span>
                                                <span>website</span>
                                            </div>
                                        </div>
                                        <div class="bt-roadmap-item">
                                            <span class="roadmap-title">2021.08.30</span>
                                            <div class="roadmap-content">
                                                <span class="dot"></span>
                                                <h4 class="title"></h4>
                                                <span>Launched the </span>
                                                <span>Zescoin Wallet app</span>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="bt-roadmap-item">
                                            <span class="roadmap-title">2021.09.07</span>
                                            <div class="roadmap-content">
                                                <span class="dot"></span>
                                                <h4 class="title"></h4>
                                                <span>Initial</span>
                                                <span>Exchange</span>
                                                <span>Offering (IEO)</span>
                                            </div>
                                        </div>
                                        <div class="bt-roadmap-item">
                                            <span class="roadmap-title">2021.09.28</span>
                                            <div class="roadmap-content">
                                                <span class="dot"></span>
                                                <h4 class="title"></h4>
                                                <span>Trading started on</span>
                                                <span>(Complex.mn)</span>
                                            </div>
                                        </div>
                                        <div class="bt-roadmap-item">
                                            <span class="roadmap-title">2021.10.21</span>
                                            <div class="roadmap-content">
                                                <span class="dot"></span>
                                                <h4 class="title"></h4>
                                                <span>Launched on <br> Trade.mn</span>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="bt-roadmap-item">
                                            <span class="roadmap-title">2021.IV</span>
                                            <div class="roadmap-content">
                                                <span class="dot"></span>
                                                <h4 class="title"></h4>
                                                <span>Launched on</span>
                                                <span>Capex.mn</span>
                                            </div>
                                        </div>
                                        <div class="bt-roadmap-item">
                                            <span class="roadmap-title">2022 I</span>
                                            <div class="roadmap-content">
                                                <span class="dot"></span>
                                                <h4 class="title"></h4>
                                                <span>Launched on MELON,</span>
                                                <span> social entertainment</span>
                                                <span> platform</span>
                                            </div>
                                        </div>
                                        <div class="bt-roadmap-item">
                                            <span class="roadmap-title">2022 II</span>
                                            <div class="roadmap-content">
                                                <span class="dot"></span>
                                                <h4 class="title"></h4>
                                                <span>Increase the</span>
                                                <span>number of contact</span>
                                                <span>organizations</span>
                                            </div>
                                        </div>
                                        <div class="bt-roadmap-item">
                                            <span class="roadmap-title">2022 IV</span>
                                            <div class="roadmap-content">
                                                <span class="dot"></span>
                                                <h4 class="title"></h4>
                                                <span>Launched on</span>
                                                <span> Idax.exchange</span>
                                            </div>
                                        </div>
                                        <div class="bt-roadmap-item">
                                            <span class="roadmap-title">2023 I</span>
                                            <div class="roadmap-content">
                                                <span class="dot"></span>
                                                <h4 class="title"></h4>
                                                <span>Trading will</span>
                                                <span>begin on the</span>
                                                <span>international exchange</span>
                                            </div>
                                        </div>
                                        <div class="bt-roadmap-item">
                                            <span class="roadmap-title">2023 II</span>
                                            <div class="roadmap-content">
                                                <span class="dot"></span>
                                                <h4 class="title"></h4>
                                                <span>Global services on</span>
                                                <span> a platform with +10</span>
                                                <span>million users</span>
                                            </div>
                                        </div>
                                        <div class="bt-roadmap-item">
                                            <span class="roadmap-title">2023 III</span>
                                            <div class="roadmap-content">
                                                <span class="dot"></span>
                                                <h4 class="title"></h4>
                                                <span>MELON project</span>
                                                <span>phase 2</span>
                                            </div>
                                        </div>
                                        <div class="bt-roadmap-item">
                                            <span class="roadmap-title">2023 IV</span>
                                            <div class="roadmap-content">
                                                <span class="dot"></span>
                                                <h4 class="title">WEB 3.0</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- roadMap-area-end -->

                <!-- burn -->
            <section id="burn" class="roadmap-area pt-130 pb-130">
                <div class="container custom-container-two">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-6">
                            <span class="sub-title">Burn</span>
                        </div>
                        <div class="chart-inner">
                            <canvas id="BA-chart-job-error" width="750" height="550"></canvas>
                        </div>
                    </div>
                </div>
                
                <div id="chart-container"></div>
                </div>
            </section>
            <!--burn -->

                
                <!-- document-area -->
                <section id="whitepaper" class="document-area pt-60">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 order-2 order-lg-0">
                                <div class="document-img text-center wow fadeInUp" data-wow-delay=".2s">
                                    <img src="assets/img/images/document_img.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-7">
                                <div class="document-content mt-50 wow fadeInRight" data-wow-delay=".2s">
                                    <div class="section-title mb-35">
                                        <span class="sub-title">Whitepaper</span>
                                        <h2 class="title"><span>Zes Ad Network</span></h2>
                                    </div>
                                    <ul class="document-list">
                                        <p>Copper Advertising Network connects the people who use websites and phone to the advertisements that was uploaded. Zescoin is based on Blockchain crypto token which was created by Seclab team’s experts and consultants.
                                            
                                            People are able to collect coin by watching advertisements, and also able to expand their businesses by distributing advertisements to the organizations that they work with.</p>
                                    </ul>
                                    <a href="{{url('/whitepaper')}}" class="btn">Whitepaper</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- document-area-end -->
                

                <!-- document-area -->
                <section id="assistance" class="roadmap-area pt-130 pb-130">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 order-2 order-lg-0 center">
                                <h2 class="center">frequently Asked Question</h2>
                            </div>
                            <div class="faq-list">
                                <div>
                                  <details open>
                                    <summary title="ZESCOIN">ZESCOIN</summary>
                                    <div class="faq-content">
                                        <h6>What is ZesCoin ?</h6>
                                    </div>
                                    <p class="faq-content">It is a crypto token issued by "Seclab" LLC in order to distribute online advertising revenue to users and make advertising payments quick and easy. The project team is developing a social network platform, Melon, which will be &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the first application of ZesCoin. Trading exchanges: Trade.mn, Complex.mn, Capex.mn.</p>
                                    <div class="faq-content">
                                        <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Purchase</h6>
                                    </div>
                                        <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;70% of the advertising revenue is for the purchase of the ZesCoin, as reflected in the rules of operation and further &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;actions.</p>
                                  </details>
                                  </div>
                                <div>
                                  <details>
                                    <summary title="CRYPTO">CRYPTO</summary>
                                    <div class="faq-content">
                                        <h6>What is cryptocurrency?</h6>
                                    </div>
                                    <p class="faq-content">Cryptocurrency is an electronic currency that is digitally located in an electronic environment based on Blockchain technology and exists without any central regulatory institution or organization. Cryptocurrency cannot be &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;counterfeited and is created using alphanumeric encryption, or cryptography.</p>
                                    <div class="faq-content">
                                        <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What are the risks of cryptocurrencies?</h6>
                                    </div>    
                                    <p>Anyone interested in cryptocurrency should do a lot of research. Cryptos exist on volatile, intangible, 24-hour unregulated capital markets and are not insured by any authority. Be aware of sudden price changes or price increases.</p>
                                  </details>
                                  </div>
                                <div>
                                  <details>
                                    <summary title="ADMONITION">ADMONITION</summary>
                                    <div class="faq-content">
                                        <h6>Please do your due diligence on the project you are considering investing in. hereto: </h6>
                                    </div>
                                    <div class="faq-content">
                                        <h6><div class="faq-content">
                                            <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                                        </div>
                                        <div class="faq-qus-ans">
                                            <p><span class="icon_check"></span></p>
                                            <p><span class="icon_check"></span></p>
                                        </div></h6>
                                    </div>
                                    <div class="faq-qus-ans">
                                        <p><span class="icon_check"></span> -Carefully read the Whitepaper of the project.</p>
                                        <p><span class="icon_check"></span> -Don't get with personal emotions.</p>
                                        <p><span class="icon_check"></span> -Don't make decisions based on other people's words.</p>
                                        <p><span class="icon_check"></span> -Beware of exposure to Pump (excessive price inflation) and Dump (excessive price reduction).</p>
                                        <p><span class="icon_check"></span> -Get news from official channels</p>
                                    </div>
                                    <div class="faq-content">
                                        <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Things to consider when making a transfer:</h6>
                                    </div>
                                    <div class="faq-qus-ans">
                                        <p><span class="icon_check"></span> -Try transferring a small amount before making a transfer</p>
                                        <p><span class="icon_check"></span> -Check your forwarding address and other information</p>
                                    </div>
                                  </details>
                                  </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </section>
                <!-- document-area-end -->


            </div>
            <!-- area-bg-end -->

            <!-- team-area -->
            <section class="team-area pt-130">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6">
                            <div class="section-title text-center mb-70">
                                <span class="sub-title">OUr team</span>
                                <h3 class="title">The Leadership<br> <span>Team</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <img src="assets/img/team/team_img01.png" alt="">
                                </div>
                                <div class="team-content">
                                    <h2 class="title">Cameron Williamson</h2>
                                    <span>Founder & CO</span>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <img src="assets/img/team/team_img02.png" alt="">
                                </div>
                                <div class="team-content">
                                    <h2 class="title">Eleanor Pena</h2>
                                    <span>Head of Design</span>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <img src="assets/img/team/team_img03.png" alt="">
                                </div>
                                <div class="team-content">
                                    <h2 class="title">Bessie Cooper</h2>
                                    <span>Vp People</span>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <img src="assets/img/team/team_img04.png" alt="">
                                </div>
                                <div class="team-content">
                                    <h2 class="title">Darlene Robertson</h2>
                                    <span>Product Manager</span>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <img src="assets/img/team/team_img05.png" alt="">
                                </div>
                                <div class="team-content">
                                    <h2 class="title">Jacob Jones</h2>
                                    <span>Marketer</span>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <img src="assets/img/team/team_img06.png" alt="">
                                </div>
                                <div class="team-content">
                                    <h2 class="title">Courtney Henry</h2>
                                    <span>Founder</span>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <img src="assets/img/team/team_img07.png" alt="">
                                </div>
                                <div class="team-content">
                                    <h2 class="title">Ronald Richards</h2>
                                    <span>Account Manager</span>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <img src="assets/img/team/team_img08.png" alt="">
                                </div>
                                <div class="team-content">
                                    <h2 class="title">Theresa Webb</h2>
                                    <span>Founder & CO</span>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- team-area-end -->
            <!--FAQ-area--->
            
            <!--FAQ-area-end-->
            <!-- contact-area -->
            <section id="contact" class="contact-area pt-70 pb-110">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span class="sub-title">Contact</span>
                                <!--<h2 class="title"><span>Contact</span></h2>-->
                                <p>Please contact us at the address below for cooperation with our company and the ZesCoin project, distribution of advertising and other matters.</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info-wrap">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-sm-6">
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <span class="icon-background"></span>
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <p>zescoin@seclab.mn<br></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <span class="icon-background"></span>
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <p>+ (976) 77-803-803<br></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <span class="icon-background"></span>
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="content">
                                        <p>State/province/area: <br>Georgia 198</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form-wrap">
                        <form class="form" id="sheetdb-form" action="https://sheetdb.io/api/v1/oc338u0vmw0kt">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label class="form-label" for="last">mail address<sup>*</sup></label>
                                            <input id="last" name="data[email]" class="form-input" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-grp">
                                <label class="form-label" for="sms">Message<sup>*</sup></label>
                                <textarea class="form-input" name="data[text]" id="sms" placeholder="" rows="2"
                                    cols="3" name="message"></textarea>
                            </div>

                            <div class="submit-btn text-center" id="alertbutton" style="left: 80%;">
                                <input id="last"
                                    class=" btn btn-lg gradient-btn rounded-100 mr-20 mb-10 hvr-shutter-out-horizontal"
                                    type="submit" value="Send Message" />

                            </div>
                            <h2 id="alert" style="color:green; font-size:15px "></h2>
                        </form>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->


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
