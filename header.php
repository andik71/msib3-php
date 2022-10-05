<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ZQproject</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Day - v4.9.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">andik849@gmail.com</a>
                <i class="bi bi-phone-fill phone-icon"></i> +62 812 1200 6903
            </div>
            <div class="social-links d-none d-md-block">
                <a target="_blank"  href="https://twitter.com/uzumakireiki5" class="twitter"><i class="bi bi-twitter"></i></a>
                <a target="_blank"  href="https://www.facebook.com/andika.dwi.315428/" class="facebook"><i class="bi bi-facebook"></i></a>
                <a target="_blank"  href="https://www.instagram.com/znthh_/" class="instagram"><i class="bi bi-instagram"></i></a>
                <a target="_blank"  href="https://l.instagram.com/?u=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fandika-dwiyanto&e=ATPOpyFc6_DvOQD2kaE0kU2CwMhYVA-rBrcXq4IHiU4sbPlt8jqXRlK3unRS41gEOUAClf-ROthGx6fC4R63jMcUrugK9kN6muL7hZc&s=1" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">Dika</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <!-- First Attempt -->
                    <li><a class="nav-link scrollto <?php if($_REQUEST && $_REQUEST['page'] == 'home'):?>active<?php endif; ?>" href="index.php?page=home">Home</a></li>
                        <!-- Secon Attempt -->
                    <li><a class="nav-link scrollto <?php if($_REQUEST && $_REQUEST['page'] == 'about') echo 'active' ?>" href="index.php?page=about">About</a></li>
                    <li><a class="nav-link scrollto <?php if($_REQUEST && $_REQUEST['page'] == 'services') echo 'active' ?>" href="index.php?page=services">Services</a></li>
                    <li><a class="nav-link scrollto <?php if($_REQUEST && $_REQUEST['page'] == 'portofolio') echo 'active' ?>" href="index.php?page=portofolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto <?php if($_REQUEST && $_REQUEST['page'] == 'pricing') echo 'active' ?>" href="index.php?page=pricing">Pricing</a></li>
                    <li><a class="nav-link scrollto <?php if($_REQUEST && $_REQUEST['page'] == 'team') echo 'active' ?>" href="index.php?page=team">Team</a></li>
                    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    