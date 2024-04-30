<?php
session_start();
if ($_SESSION['signedIn'] == true) {
    echo '

<!DOCTYPE html>
<html class="wide" lang="en">

<head>
    <title>ADMIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../img/CYBERWEEKEND_LOGO.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Barlow%7CBarlow+Condensed:300,400,500,600,700,900">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }
    </style>
</head>

<body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
    </div>
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
            <p>Loading...</p>
        </div>
    </div>
    <div class="page">
        <!-- Section Header Default-->
        <header class="section page-header">
            <!--RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="76px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse">
                        <span></span>
                    </div>
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <!--RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!--RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!--RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <a class="brand" href="index.html">
                                        <img class="brand-logo-light" src="../img/CYBERWEEKEND_LOGO.png" alt="TU CYBERWEEKEND" width="100" height="100" />
                                    </a>
                                </div>
                            </div>
                            <div class="rd-navbar-main-element">
                                <div class="rd-navbar-nav-wrap">
                                    <ul class="rd-navbar-nav">
                                        <li class="rd-nav-item">
                                            <a class="rd-nav-link" href="logout.php">
                                                Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>


        <!-- Breadcrumbs-->
        <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(../images/bg-breadcrumbs-01-1894x424.jpg);">
            <div class="container">
                <h4 class="breadcrumbs-custom-title">HOME - ADMIN</h4>
            </div>
            <div class="parallax-content section-lg context-dark text-center">
                <div class="container">
                    <h4>PARTICIPANTS LIST DOWNLOAD HERE</h4>
                    <div class="row row-30">
                        <div class="col-lg-3">
                            <a class="button button-primary" href="#" data-triangle=".button-overlay">
                                <span>SUDIP MISRA</span>
                                <span class="button-overlay"></span>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a class="button button-primary" href="#" data-triangle=".button-overlay">
                                <span>SURESH V</span>
                                <span class="button-overlay"></span>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a class="button button-primary" href="#" data-triangle=".button-overlay">
                                <span>IoThon</span>
                                <span class="button-overlay"></span>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a class="button button-primary" href="#" data-triangle=".button-overlay">
                                <span>Essay</span>
                                <span class="button-overlay"></span>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a class="button button-primary" href="#" data-triangle=".button-overlay">
                                <span>FIFA</span>
                                <span class="button-overlay"></span>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a class="button button-primary" href="#" data-triangle=".button-overlay">
                                <span>BGMI</span>
                                <span class="button-overlay"></span>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a class="button button-primary" href="#" data-triangle=".button-overlay">
                                <span>VALORANT</span>
                                <span class="button-overlay"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section section-lg bg-gray-900">
            <div class="container">
                <div class="row row-30">
                    <div class="col-xs-10 col-lg-4 align-self-center">
                        <a class="brand" href="index.html">
                            <img class="brand-logo-light" src="../img/CYBERWEEKEND_LOGO.png" alt="TU CYBERWEEKEND">
                        </a>
                    </div>
                    <div class="col-xs-10 col-sm-6 col-lg-4">
                        <a class="brand" href="index.html">
                            <img class="brand-logo-light" src="../img/tu-logo.png" alt="TU CYBERWEEKEND" width="250" height="250">
                        </a>
                    </div>
                    <div class="col-xs-10 col-sm-6 col-lg-4">
                        <h5><span class="big font-weight-sbold">Event detail</span></h5>
                        <div class="event-detail">
                            <p class="event-detail-time big">
                                <time data-splitting datetime="2019-01-05">April 30 - May 1, 2022</time>
                            </p>
                            <p class="event-detail-address big" data-splitting>
                                Department of Computer Science & Engineering, Tezpur University, Nilachal Path, Napaam, Puniani Gaon,
                                Tezpur, Assam-784028
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Divider-->
        <div class="divider divider-gray-900 text-center"></div>
        <!-- Footer Classic-->
        <footer class="section footer-classic context-dark">
            <div class="container">
                <p class="rights">
                    <span>
                        Copyright&nbsp;
                    </span>
                    <span>&copy;&nbsp;</span>
                    <span class="copyright-year">
                    </span>
                    <span>&nbsp;</span>
                    <span>by</span>
                    <a href="#">
                        Team Navalogy
                    </a>
                </p>
            </div>
        </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <div class="block-with-svg-gradients">
        <svg xmlns="http://www.w3.org/2000/svg">
            <defs>
                <lineargradient id="svg-gradient-primary" x1="0%" y1="100%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:rgb(130,46,168);stop-opacity:1"></stop>
                    <stop offset="100%" style="stop-color:rgb(217,14,144);stop-opacity:1"></stop>
                </lineargradient>
            </defs>
        </svg>
    </div>

    <script src="../js/core.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>';
}
