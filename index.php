<?php
ini_set('display_errors', '1');
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
//define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>UniXP - Helping Students Connect</title>

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/unixp-favicon.png">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Scroll To Top Area End ======-->

    <div class="main">
        <!-- ***** Header Start ***** -->
        <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.html">
                    <img class="navbar-brand-regular" src="assets/img/logo/unixp-logo-white.png" alt="UniXP-logo">
                    <img class="navbar-brand-sticky" src="assets/img/logo/unixp-logo.png" alt="sticky UniXP-logo">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-inner">
                    <!--  Mobile Menu Toggler -->
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <nav>
                        <ul class="navbar-nav" id="navbar-nav">
                           
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#features">Features</a>
                            </li>
                            <li class="nav-item dropdown">
                                
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                   
                                    </li>
                                   
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#screenshots">Screenshots</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- ***** Header End ***** -->

        <!-- ***** Welcome Area Start ***** -->
        <section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Welcome Intro Start -->
                    <div class="col-12 col-md-7 col-lg-6">
                        <div class="welcome-intro">
                            <h1 class="text-white">Helping Students Connect...</h1>
                            <p class="text-white my-4">UniXP is a student-friendly app aimed at making campus life interesting and easy.
                                From spots to find great meals on campus, getting authentic news update from the school government and student union body, giving you notifications about your next class (time and venue included) and so on.
                            </p>
                            <!-- Store Buttons -->
                            <div class="button-group store-buttons d-flex">
                                <a href="#">
                                    <img src="assets/img/icon/google-play.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="assets/img/icon/app-store.png" alt="">
                                </a>
                            </div>
                            <span class="d-inline-block text-white fw-3 font-italic mt-3">* Available on iPhone, iPad and all Android devices</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-lg-6">
                        <!-- Welcome Thumb -->
                        <div class="welcome-thumb mx-auto" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
                            <img src="assets/img/welcome/unixp-welcome-mockup1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shape Bottom -->
            <div class="shape-bottom">
                <svg viewBox="0 0 1920 310" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg replaced-svg">
                    <title>UniXP Shape</title>
                    <desc>Created with Sketch</desc>
                    <defs></defs>
                    <g id="sApp-Landing-Page" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="sApp-v1.0" transform="translate(0.000000, -554.000000)" fill="#FFFFFF">
                            <path d="M-3,551 C186.257589,757.321118 319.044414,856.322454 395.360475,848.004007 C509.834566,835.526337 561.525143,796.329212 637.731734,765.961549 C713.938325,735.593886 816.980646,681.910577 1035.72208,733.065469 C1254.46351,784.220361 1511.54925,678.92359 1539.40808,662.398665 C1567.2669,645.87374 1660.9143,591.478574 1773.19378,597.641868 C1848.04677,601.75073 1901.75645,588.357675 1934.32284,557.462704 L1934.32284,863.183395 L-3,863.183395" id="sApp-v1.0"></path>
                        </g>
                    </g>
                </svg>
            </div>
        </section>
        <!-- ***** Welcome Area End ***** -->

        <!-- ***** Counter Area Start ***** -->
        <section class="section counter-area ptb_50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-5 col-sm-3 single-counter text-center">
                        <div class="counter-inner p-3 p-md-0">
                            <!-- Counter Item -->
                            <div class="counter-item d-inline-block mb-3">
                                <span class="counter fw-7">0</span><span class="fw-7"></span>
                            </div>
                            <h5>Users</h5>
                        </div>
                    </div>
                    <div class="col-5 col-sm-3 single-counter text-center">
                        <div class="counter-inner p-3 p-md-0">
                            <!-- Counter Item -->
                            <div class="counter-item d-inline-block mb-3">
                                <span class="counter fw-7">0</span><span class="fw-7"></span>
                            </div>
                            <h5>Download</h5>
                        </div>
                    </div>
                    <!-- <div class="col-5 col-sm-3 single-counter text-center">
                        <div class="counter-inner p-3 p-md-0"> -->
                            <!-- Counter Item -->
                            <!-- <div class="counter-item d-inline-block mb-3">
                                <span class="counter fw-7">0</span><span class="fw-7"></span>
                            </div>
                            <h5>Customer</h5>
                        </div>
                    </div>
                    <div class="col-5 col-sm-3 single-counter text-center">
                        <div class="counter-inner p-3 p-md-0"> -->
                             <!-- Counter Item -->
                            <!-- <div class="counter-item d-inline-block mb-3">
                                <span class="counter fw-7">0</span><span class="fw-7"></span>
                            </div>
                            <h5>Developer</h5>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- ***** Counter Area End ***** -->

        <!-- ***** Features Area Start ***** -->
        <section id="features" class="section features-area style-two overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <span class="d-inline-block rounded-pill shadow-sm fw-5 px-4 py-2 mb-3">
                                <i class="far fa-lightbulb text-primary mr-1"></i>
                                <span class="text-primary">UniXP</span>
                                Features
                            </span>
                            <h2>What Makes UniXP Different?</h2>
                            <p class="d-none d-sm-block mt-4">The most unique thing about our app is that it is the first of its kind. We conducted some research to determine whether an app like that already exists and we found nothing like it. UniXp is basically a student guide/handbook. From helping students move around the university to helping students find tutors, eateries and get the latest news, it presents a solution to an everlasting problem.
                            </p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 res-margin">
                        <!-- Image Box -->
                        <div class="image-box text-center icon-1 p-5 wow fadeInLeft" data-wow-delay="0.4s">
                            <!-- Featured Image -->
                            <div class="featured-img mb-3">
                                <img class="avatar-sm" src="assets/img/icon/featured-img/speak.png" alt="">
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">Chat Rooms</h3>
                                <p>Connect with other students in your school</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 res-margin">
                        <!-- Image Box -->
                        <div class="image-box text-center icon-1 p-5 wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Featured Image -->
                            <div class="featured-img mb-3">
                                <img class="avatar-sm" src="assets/img/icon/featured-img/map.png" alt="">
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">School Map</h3>
                                <p>Locate places in the school faster and with ease</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Image Box -->
                        <div class="image-box text-center icon-1 p-5 wow fadeInRight" data-wow-delay="0.4s">
                            <!-- Featured Image -->
                            <div class="featured-img mb-3">
                                <img class="avatar-sm" src="assets/img/icon/featured-img/info.png" alt="">
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">Reliable Information</h3>
                                <p>Get direct and reliable information of events happening around the school from the Student Union Government</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Features Area End ***** -->

        <!-- ***** Service Area Start ***** -->
        <section class="section service-area bg-gray overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-6 order-2 order-lg-1">
                        <!-- Service Text -->
                        <div class="service-text pt-4 pt-lg-0">
                            <h2 class="text-capitalize mb-4">Make UniXP Manage Everything For you</h2>
                            <!-- Service List -->
                            <ul class="service-list">
                                <!-- Single Service -->
                                <li class="single-service media py-2">
                                    <div class="service-icon pr-4">
                                        <span><i class="fab fa-buffer"></i></span>
                                    </div>
                                    <div class="service-text media-body">
                                        <p>Fully layered dolor sit amet, consectetur adipisicing elit. Facere, nobis, id expedita dolores officiis laboriosam.</p>
                                    </div>
                                </li>
                                <!-- Single Service -->
                                <li class="single-service media py-2">
                                    <div class="service-icon pr-4">
                                        <span><i class="fas fa-brush"></i></span>
                                    </div>
                                    <div class="service-text media-body">
                                        <p>Customizable design dolor sit amet, consectetur adipisicing elit. Facere, nobis, id expedita dolores officiis laboriosam.</p>
                                    </div>
                                </li>
                                <!-- Single Service -->
                                <li class="single-service media py-2">
                                    <div class="service-icon pr-4">
                                        <span><i class="fas fa-burn"></i></span>
                                    </div>
                                    <div class="service-text media-body">
                                        <p>Drop ipsum dolor sit amet, consectetur adipisicing elit. Facere, nobis, id expedita dolores officiis laboriosam.</p>
                                    </div>
                                </li>
                                <!-- Single Service -->
                                <li class="single-service media py-2">
                                    <div class="service-icon pr-4">
                                        <span><i class="fas fa-cart-arrow-down"></i></span>
                                    </div>
                                    <div class="service-text media-body">
                                        <p>Marketing chart dolor sit amet, consectetur adipisicing elit. Facere, nobis, id expedita dolores officiis laboriosam.</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-bordered mt-4">Learn More</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 order-1 order-lg-2 d-none d-lg-block">
                        <!-- Service Thumb -->
                        <div class="service-thumb mx-auto">
                            <img src="assets/img/features/unixp-thumb1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Service Area End ***** -->

        <!-- ***** Discover Area Start ***** -->
        <section class="section discover-area overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-6 order-2 order-lg-1">
                        <!-- Discover Thumb -->
                        <div class="service-thumb discover-thumb mx-auto pt-5 pt-lg-0">
                            <img src="assets/img/discover/unixp_x.png" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 order-1 order-lg-2">
                        <!-- Discover Text -->
                        <div class="discover-text pt-4 pt-lg-0">
                            <h2 class="pb-4 pb-sm-0">Easily connect with students around you using UniXP.</h2>
                            <p class="d-none d-sm-block pt-3 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dolor ut iusto vitae autem neque eum ipsam.</p>
                            <!-- Check List -->
                            <ul class="check-list">
                                <li class="py-1">
                                    <!-- List Box -->
                                    <div class="list-box media">
                                        <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                        <span class="media-body pl-3">Combined with a handful of model sentence structures looks reasonable.</span>
                                    </div>
                                </li>
                                <li class="py-1">
                                    <!-- List Box -->
                                    <div class="list-box media">
                                        <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                        <span class="media-body pl-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</span>
                                    </div>
                                </li>
                                <li class="py-1">
                                    <!-- List Box -->
                                    <div class="list-box media">
                                        <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                        <span class="media-body pl-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</span>
                                    </div>
                                </li>
                                <li class="py-1">
                                    <!-- List Box -->
                                    <div class="list-box media">
                                        <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                        <span class="media-body pl-3">All the Lorem Ipsum generators on the Internet tend to repeat necessary.</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="icon-box d-flex mt-3">
                                <div class="service-icon">
                                    <span><i class="fas fa-bell"></i></span>
                                </div>
                                <div class="service-icon px-3">
                                    <span><i class="fas fa-envelope-open"></i></span>
                                </div>
                                <div class="service-icon">
                                    <span><i class="fas fa-video"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Discover Area End ***** -->

        <!-- ***** Work Area Start ***** -->
        <section class="section work-area bg-overlay overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Work Content -->
                        <div class="work-content text-center">
                            <h2 class="text-white">How UniXP works?</h2>
                            <p class="d-none d-sm-block text-white my-3 mt-sm-4 mb-sm-5">Just 3 basic steps; Install, Create your profile, and you are set to Enjoy our Features</p>
                            <!-- <p class="d-block d-sm-none text-white my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <!-- Single Work -->
                        <div class="single-work text-center p-3">
                            <!-- Work Icon -->
                            <div class="work-icon">
                                <img class="avatar-md" src="assets/img/icon/work/download.png" alt="">
                            </div>
                            <h3 class="text-white py-3">Install the App</h3>
                            <p class="text-white">You can download and install the UniXP app from your respective App stores</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- Single Work -->
                        <div class="single-work text-center p-3">
                            <!-- Work Icon -->
                            <div class="work-icon">
                                <img class="avatar-md" src="assets/img/icon/work/settings.png" alt="">
                            </div>
                            <h3 class="text-white py-3">Setup your profile</h3>
                            <p class="text-white">After installation, you can go ahead to create your UniXP profile</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- Single Work -->
                        <div class="single-work text-center p-3">
                            <!-- Work Icon -->
                            <div class="work-icon">
                                <img class="avatar-md" src="assets/img/icon/work/app.png" alt="">
                            </div>
                            <h3 class="text-white py-3">Enjoy the features!</h3>
                            <p class="text-white">-Easy access to basic services</p>
                            <p class="text-white">-Reliable Information Dissemination</p>
                            <p class="text-white">-School Map</p>
                            <p class="text-white">-Connect with your fellow students</p>
                            <p class="text-white">And so on...</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Work Area End ***** -->

        <!-- ***** Screenshots Area Start ***** -->
        <section id="screenshots" class="section screenshots-area ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <span class="d-inline-block rounded-pill shadow-sm fw-5 px-4 py-2 mb-3">
                                <i class="far fa-lightbulb text-primary mr-1"></i>
                                <span class="text-primary">Awesome</span>
                                Interface
                            </span>
                            <h2 class="text-capitalize">Simple &amp; Beautiful Interface</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- App Screenshot Slider Area -->
                        <div class="app-screenshots">
                            <!-- Single Screenshot Item -->
                            <div class="single-screenshot">
                                <img src="assets/img/screenshots/1.png" alt="">
                            </div>
                            <!-- Single Screenshot Item -->
                            <div class="single-screenshot">
                                <img src="assets/img/screenshots/2.png" alt="">
                            </div>
                            <!-- Single Screenshot Item -->
                            <div class="single-screenshot">
                                <img src="assets/img/screenshots/3.png" alt="">
                            </div>
                            <!-- Single Screenshot Item -->
                            <div class="single-screenshot">
                                <img src="assets/img/screenshots/4.png" alt="">
                            </div>
                            <!-- Single Screenshot Item -->
                            <div class="single-screenshot">
                                <img src="assets/img/screenshots/5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Screenshots Area End ***** -->

        <!-- ***** Review Area Start ***** -->
        <section id="review" class="review-area ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <span class="d-inline-block rounded-pill shadow-sm fw-5 px-4 py-2 mb-3">
                                <i class="far fa-lightbulb text-primary mr-1"></i>
                                <span class="text-primary">Customer's</span>
                                Reviews
                            </span>
                            <h2 class="text-capitalize">What our customers are saying</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 res-margin">
                        <!-- Single Review -->
                        <div class="single-review card">
                            <!-- Card Top -->
                            <div class="card-top p-4">
                                <div class="review-icon">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <h4 class="text-primary mt-4 mb-3">Excellent service &amp; support!!</h4>
                                <!-- Review Text -->
                                <div class="review-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis nam id facilis, provident doloremque placeat eveniet molestias laboriosam. Optio, esse.</p>
                                </div>
                                <!-- Quotation Icon -->
                                <div class="quot-icon">
                                    <img class="avatar-md" src="assets/img/icon/quote.png" alt="">
                                </div>
                            </div>
                            <!-- Reviewer -->
                            <div class="reviewer media bg-gray p-4">
                                <!-- Reviewer Thumb -->
                                <div class="reviewer-thumb">
                                    <img class="avatar-lg radius-100" src="assets/img/avatar/avatar-1.png" alt="">
                                </div>
                                <!-- Reviewer Media -->
                                <div class="reviewer-meta media-body align-self-center ml-4">
                                    <h5 class="reviewer-name color-primary mb-2">Junaid Hasan</h5>
                                    <h6 class="text-secondary fw-6">CEO, UniXP</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 res-margin">
                        <!-- Single Review -->
                        <div class="single-review card">
                            <!-- Card Top -->
                            <div class="card-top p-4">
                                <div class="review-icon">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star-half-alt text-warning"></i>
                                </div>
                                <h4 class="text-primary mt-4 mb-3">Nice work! Keep it up</h4>
                                <!-- Review Text -->
                                <div class="review-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis nam id facilis, provident doloremque placeat eveniet molestias laboriosam. Optio, esse.</p>
                                </div>
                                <!-- Quotation Icon -->
                                <div class="quot-icon">
                                    <img class="avatar-md" src="assets/img/icon/quote.png" alt="">
                                </div>
                            </div>
                            <!-- Reviewer -->
                            <div class="reviewer media bg-gray p-4">
                                <!-- Reviewer Thumb -->
                                <div class="reviewer-thumb">
                                    <img class="avatar-lg radius-100" src="assets/img/avatar/avatar-2.png" alt="">
                                </div>
                                <!-- Reviewer Media -->
                                <div class="reviewer-meta media-body align-self-center ml-4">
                                    <h5 class="reviewer-name color-primary mb-2">Junaid Hasan</h5>
                                    <h6 class="text-secondary fw-6">CEO, UniXP</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Review -->
                        <div class="single-review card">
                            <!-- Card Top -->
                            <div class="card-top p-4">
                                <div class="review-icon">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <h4 class="text-primary mt-4 mb-3">Great support!!</h4>
                                <!-- Review Text -->
                                <div class="review-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis nam id facilis, provident doloremque placeat eveniet molestias laboriosam. Optio, esse.</p>
                                </div>
                                <!-- Quotation Icon -->
                                <div class="quot-icon">
                                    <img class="avatar-md" src="assets/img/icon/quote.png" alt="">
                                </div>
                            </div>
                            <!-- Reviewer -->
                            <div class="reviewer media bg-gray p-4">
                                <!-- Reviewer Thumb -->
                                <div class="reviewer-thumb">
                                    <img class="avatar-lg radius-100" src="assets/img/avatar/avatar-3.png" alt="">
                                </div>
                                <!-- Reviewer Media -->
                                <div class="reviewer-meta media-body align-self-center ml-4">
                                    <h5 class="reviewer-name color-primary mb-2">Junaid Hasan</h5>
                                    <h6 class="text-secondary fw-6">CEO, UniXP</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Review Area End ***** -->

        <!-- ***** Price Plan Area Start ***** -->
        
        <!-- ***** Price Plan Area End ***** -->

        <!-- ***** FAQ Area Start ***** -->
        <section class="section faq-area style-two ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Frequently asked questions</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <!-- FAQ Content -->
                        <div class="faq-content">
                            <!-- sApp Accordion -->
                            <div class="accordion" id="sApp-accordion">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-6">
                                        <!-- Single Card -->
                                        <div class="card border-0">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h4 class="text-black">
                                                    <!-- <button class="btn px-0 py-3" type="button"> -->
                                                        How to install UniXP?
                                                    <!-- </button> -->
                                                </h4>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body px-0 py-3">
                                                The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.
                                            </div>
                                        </div>
                                        <!-- Single Card -->
                                        <div class="card border-0">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn px-0 py-3" type="button">
                                                        Can I get support from the Author?
                                                    </button>
                                                </h2>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body px-0 py-3">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                                            </div>
                                        </div>
                                        <!-- Single Card -->
                                        <div class="card border-0">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn px-0 py-3" type="button">
                                                        Do you have a free trail?
                                                    </button>
                                                </h2>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body px-0 py-3">
                                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <!-- Single Card -->
                                        <div class="card border-0">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn px-0 py-3" type="button">
                                                        How can I edit my personal information?
                                                    </button>
                                                </h2>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body px-0 py-3">
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                            </div>
                                        </div>
                                        <!-- Single Card -->
                                        <div class="card border-0">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn px-0 py-3" type="button">
                                                        Contact form isn't working?
                                                    </button>
                                                </h2>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body px-0 py-3">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                                            </div>
                                        </div>
                                        <!-- Single Card -->
                                        <div class="card border-0">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn px-0 py-3" type="button">
                                                        Contact form isn't working?
                                                    </button>
                                                </h2>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body px-0 py-3">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <p class="text-body text-center pt-4 px-3 fw-5">Haven't find suitable answer? <a href="#contact">Tell us what you need.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** FAQ Area End ***** -->

        <!-- ***** Team Area Start ***** -->
        <section class="section team-area team-style-two overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Our Team</h2>
                            <p class="d-none d-sm-block mt-4">Meet the beautiful minds behind UniXP</p>
                            <!-- <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <!-- Single Team -->
                        <div class="single-team text-center overflow-hidden m-2 m-lg-0">
                            <!-- Team Thumb -->
                            <div class="team-thumb d-inline-block position-relative overflow-hidden">
                                <img src="assets/img/avatar/joshua.jpg" alt="">
                                <!-- Team Overlay -->
                                <div class="team-overlay">
                                    <h4 class="team-name text-white">Fatoke Joshua</h4>
                                    <h6 class="team-post text-white mt-2 mb-3">Co-Founder &amp; CEO</h6>
                                    <!-- Team Icons -->
                                    <div class="team-icons">
                                        <a class="p-2" href="https://github.com/ifeanyiiii" target="_blank"><i class="fab fa-github"></i></a>
                                        <a class="p-2" href="https://twitter.com/_ifeanyiiii" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a class="p-2" href="https://www.linkedin.com/in/joshua-fatoke-631756171" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <!-- Single Team -->
                        <div class="single-team text-center overflow-hidden m-2 m-lg-0">
                            <!-- Team Thumb -->
                            <div class="team-thumb d-inline-block position-relative overflow-hidden">
                                <img src="assets/img/avatar/flex.jpg" alt="">
                                <!-- Team Overlay -->
                                <div class="team-overlay">
                                    <h4 class="team-name text-white">Dunmade Oluwatunmise</h4>
                                    <h6 class="team-post text-white mt-2 mb-3">Co-Founder &amp; Front-end Developer</h6>
                                    <!-- Team Icons -->
                                    <div class="team-icons">
                                        <a class="p-2" href="#" target="_blank"><i class="fab fa-github"></i></a>
                                        <a class="p-2" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a class="p-2" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <!-- Single Team -->
                        <div class="single-team text-center overflow-hidden m-2 m-lg-0">
                            <!-- Team Thumb -->
                            <div class="team-thumb d-inline-block position-relative overflow-hidden">
                                <img src="assets/img/avatar/feranmi.jpg" alt="">
                                <!-- Team Overlay -->
                                <div class="team-overlay">
                                    <h4 class="team-name text-white">Idima Oluwaferanmi</h4>
                                    <h6 class="team-post text-white mt-2 mb-3">Co-Founder &amp; Web Developer</h6>
                                    <!-- Team Icons -->
                                    <div class="team-icons">
                                        <a class="p-2" href="https://github.com/Hck3r1" target="_blank"><i class="fab fa-github"></i></a>
                                        <a class="p-2" href="https://twitter.com/_hck3rrr" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a class="p-2" href="https://www.linkedin.com/in/oluwaferanmi-idima-3967951b2/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <!-- Single Team -->
                        <div class="single-team text-center overflow-hidden m-2 m-lg-0">
                            <!-- Team Thumb -->
                            <div class="team-thumb d-inline-block position-relative overflow-hidden">
                                <img src="assets/img/avatar/nifemi.jpg" alt="">
                                <!-- Team Overlay -->
                                <div class="team-overlay">
                                    <h4 class="team-name text-white">Adegoke Oluwanifemi</h4>
                                    <h6 class="team-post text-white mt-2 mb-3">Co-Founder &amp; Chief Financial Officer</h6>
                                    <!-- Team Icons -->
                                    <div class="team-icons">
                                        <a class="p-2" href="https://github.com/gokethecreator" target="_blank"><i class="fab fa-github"></i></a>
                                        <a class="p-2" href="https://twitter.com/nifemiii__" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a class="p-2" href="https://www.linkedin.com/in/nifemi-adegoke-202591198/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <!-- Single Team -->
                        <div class="single-team text-center overflow-hidden m-2 m-lg-0">
                            <!-- Team Thumb -->
                            <div class="team-thumb d-inline-block position-relative overflow-hidden">
                                <img src="assets/img/avatar/feranmi.jpg" alt="">
                                <!-- Team Overlay -->
                                <div class="team-overlay">
                                    <h4 class="team-name text-white">Idima Oluwaferanmi</h4>
                                    <h6 class="team-post text-white mt-2 mb-3">Co-Founder &amp;Web Developer</h6>
                                    <!-- Team Icons -->
                                    <div class="team-icons">
                                        <a class="p-2" href="#" target="_blank"><i class="fab fa-github"></i></a>
                                        <a class="p-2" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a class="p-2" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <!-- Single Team -->
                        <div class="single-team text-center overflow-hidden m-2 m-lg-0">
                            <!-- Team Thumb -->
                            <div class="team-thumb d-inline-block position-relative overflow-hidden">
                                <img src="assets/img/avatar/feranmi.jpg" alt="">
                                <!-- Team Overlay -->
                                <div class="team-overlay">
                                    <h4 class="team-name text-white">Idima Oluwaferanmi</h4>
                                    <h6 class="team-post text-white mt-2 mb-3">Co-Founder &amp;Web Developer</h6>
                                    <!-- Team Icons -->
                                    <div class="team-icons">
                                        <a class="p-2" href="#" target="_blank"><i class="fab fa-github"></i></a>
                                        <a class="p-2" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a class="p-2" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <!-- Single Team -->
                        <div class="single-team text-center overflow-hidden m-2 m-lg-0">
                            <!-- Team Thumb -->
                            <div class="team-thumb d-inline-block position-relative overflow-hidden">
                                <img src="assets/img/avatar/avatar-4.png" alt="">
                                <!-- Team Overlay -->
                                <div class="team-overlay">
                                    <h4 class="team-name text-white">Yasmin Akter</h4>
                                    <h6 class="team-post text-white mt-2 mb-3">Graphic Designer</h6>
                                    <!-- Team Icons -->
                                    <div class="team-icons">
                                        <a class="p-2" href="#" target="_blank"><i class="fab fa-github"></i></a>
                                        <a class="p-2" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a class="p-2" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Team Area End ***** -->

        <!-- ***** Download Area Start ***** -->
        <section class="section download-area overlay-dark ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-9">
                        <!-- Download Text -->
                        <div class="download-text text-center">
                            <h2 class="text-white">UniXP is available for all devices</h2>
                            <p class="text-white my-3 d-none d-sm-block">UniXP is available for all devices, visit your App store to download and start enjoying our features. Now!!!</p>
                            <p class="text-white my-3 d-block d-sm-none">UniXP is available for all devices, consectetur adipisicing elit. Vel neque, cumque. Temporibus eligendi veniam, necessitatibus aut id labore nisi quisquam.</p>
                            <!-- Store Buttons -->
                            <div class="button-group store-buttons d-flex justify-content-center">
                                <a href="#">
                                    <img src="assets/img/icon/google-play.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="assets/img/icon/app-store.png" alt="">
                                </a>
                            </div>
                            <span class="d-inline-block text-white fw-3 font-italic mt-3">* Available on iPhone, iPad and all Android devices</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Download Area End ***** -->

        <!-- ***** Subscribe Area Start ***** -->
        <section class="section subscribe-area ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="subscribe-content text-center">
                            <h2>Subscribe to get updates from UniXP</h2>
                            <p class="my-4">By subscribing you will get newsleter, promotions from UniXP</p>
                            <!-- Subscribe Form -->
                            <form class="subscribe-form" method="POST">
                            <?php
                                $rand = (rand(1000,9999));
                                $today = date("my");
                                $id = "unixp/".$today."/".$rand;
                                include('db.php');
                                error_reporting(E_ALL);
                                if(isset($_REQUEST['subscribe'])){
                                        $subscriptionmail = $_REQUEST['subscriptionmail'];
                                        $uin = $_REQUEST["uin"];

                                        $check = mysqli_query($conn, "SELECT * FROM newsletter WHERE subscriptionmail='$subscriptionmail'");
                                        $checkrows = mysqli_num_rows($check);
                                        if($checkrows > 0){
                                          echo "<script>alert('This email is already subscribed to UniXP`s newsletter!')
                                          location.href='#contact'</script>";
                                        }
                                        else{
                                            $sql="INSERT INTO newsletter (subscriptionmail, uin) VALUES('$subscriptionmail','$uin')";

                    mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    $num = mysqli_insert_id($conn);
                    if (mysqli_affected_rows($conn) !=1){
                      $message = "Error inserting into database";
                    }
                    // echo "<script>alert('You have succesfully subscribed to UniXP`s newsletter with the email address: $subscriptionmail. Stay Tuned for our updates!')
                    // location.href='#contact'</script>";
                    // Create instance of PHPMailer
                    $mail = new PHPMailer();
                    // Set mailer to use SMTP
                    $mail->isSMTP();
                    // define smtp host
                    $mail->Host = "mail.wetindeycodeacademy.com.ng";
                    // enable smtp authentication
                    $mail->SMTPAuth=true;
                    // set smtp encryption type
                    $mail->SMTPSecure="tls";
                    $mail->Port="587";
                    $mail->Username= "unixpadmin@wetindeycodeacademy.com.ng";
                    $mail->Password = "unixpadmin";
                    $mail->Subject ="You have succesfully subscribed to UniXP's newsletter";
                    $mail->setFrom('unixpadmin@wetindeycodeacademy.com.ng','Feranmi from UniXP',false);
                    $mail->isHTML(true);
                    $mail->Body = "This is a confirmation email for $subscriptionmail<br> If you got this, you have successfully subscribed to UniXP`s newsletter";
                    $mail->addAddress($subscriptionmail);
                    if ($mail->send()){
                      echo "<script>alert('You have succesfully subscribed to UniXP`s newsletter with the email address: $subscriptionmail. Stay Tuned for our updates!')
                      location.href='#contact'</script>";
                    }
                    }
                  
                  }
                                       
                                    
                            ?>
                                <div class="form-group">
                                    <input type="hidden" name="uin" class="form-control" id="exampleInputEmail1" value="<?php echo $id ?>" >
                                </div>
                                <div class="form-group">
                                    <input type="email" name="subscriptionmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                                </div>
                                
                                <button type="submit" name="subscribe" class="btn btn-lg btn-block">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Subscribe Area End ***** -->

        <!--====== Contact Area Start ======-->
        <section id="contact" class="contact-area bg-gray ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Contact Us</h2>
                            <p class="d-none d-sm-block mt-4"><h4>How can we help?</h4><br>Let's build a customized solution that meets all of your needs.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-12 col-md-5">
                        <!-- Contact Us -->
                        <div class="contact-us">
                            <p class="mb-3">You can reach out to UniXP via the following means</p>
                            <ul>
                                <li class="py-2">
                                    <a class="media" href="#">
                                        <div class="social-icon mr-3">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <span class="media-body align-self-center">Vestibulum nulla libero, convallis, tincidunt suscipit diam, DC 2002</span>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a class="media" href="#">
                                        <div class="social-icon mr-3">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <span class="media-body align-self-center">+1 230 456 789-012 345 6789</span>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a class="media" href="https://www.instagram.com/_unixp/">
                                        <div class="social-icon mr-3">
                                            <i class="fab fa-instagram"></i>
                                        </div>
                                        <span class="media-body align-self-center">@_UniXP</span>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a class="media" href="https://www.twitter.com/_unixp/">
                                        <div class="social-icon mr-3">
                                            <i class="fab fa-twitter"></i>
                                        </div>
                                        <span class="media-body align-self-center">@_UniXP</span>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a class="media" href="mailTo: unixpadmin@wetindeycodeacademy.com.ng">
                                        <div class="social-icon mr-3">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <span class="media-body align-self-center">unixpadmin@wetindeycodeacademy.com.ng</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 pt-4 pt-md-0">
                        <!-- Contact Box -->
                        <div class="contact-box text-center">
                            <!-- Contact Form -->
                            <form  method="POST">

                                <?php
                                    if(isset($_REQUEST['submit'])){
                                        $name = $_REQUEST['name'];
                                        $subject = $_REQUEST['subject'];
                                        $mailFrom = $_REQUEST['mail'];
                                        $feedback = $_REQUEST['feedback'];

                                    // Create instance of PHPMailer
                                    $mail = new PHPMailer();
                                    // Set mailer to use SMTP
                                    $mail->isSMTP();
                                    // define smtp host
                                    $mail->Host = "mail.wetindeycodeacademy.com.ng";
                                    // enable smtp authentication
                                    $mail->SMTPAuth="true";
                                    // set smtp encryption type
                                    $mail->SMTPSecure="tls";
                                    $mail->Port="587";
                                    $mail->Username= "unixpadmin@wetindeycodeacademy.com.ng";
                                    $mail->Password = "unixpadmin";
                                    $mail->Subject ="Feedback from $name";
                                    $mail->setFrom('unixpadmin@wetindeycodeacademy.com.ng');
                                    $mail->isHTML(true);
                                    $mail->Body = "'New feedback from ' $name <p><b>'$subject'</b></p> <p>'$feedback'</p>";
                                    $mail->addAddress("unixpadmin@wetindeycodeacademy.com.ng");
                                    if ($mail->send()){
                                      echo "<script>alert('Dear $name, you have succesfully sent your feedback, we wil get back to you!')
                                      location.href='index.php'</script>";
                                    }
                                    }
                                ?>
                          <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="submit" class="btn btn-lg btn-block mt-3"><span class="text-white pr-3" ><i class="fas fa-paper-plane"></i></span>Send Message</button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Contact Area End ======-->

        <!--====== Height Emulator Area Start ======-->
        <div class="height-emulator d-none d-lg-block"></div>
        <!--====== Height Emulator Area End ======-->

        <!--====== Footer Area Start ======-->
        <footer class="footer-area footer-fixed">
            <!-- Footer Top -->
            <div class="footer-top ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Logo -->
                                <a class="navbar-brand" href="https://www.wetindeycodeacademy.com.ng/hck3rr/UniXP">
                                    <img class="logo" src="assets/img/logo/unixp-logo.png" alt="">
                                </a>
                                <p class="mt-2 mb-3">Helping Students Connect...</p>
                                <!-- Social Icons -->
                                <div class="social-icons d-flex">
                                    <a class="vine" href="https://www.instagram.com/_unixp/">
                                        <i class="fab fa-instagram"></i>
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a class="twitter" href="https://www.twitter.com/_unixp/">
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="facebook" href="https://web.facebook.com/Unixp-104291298781397">
                                        <i class="fab fa-facebook"></i>
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                    <!-- <a class="vine" href="#">
                                        <i class="fab fa-vine"></i>
                                        <i class="fab fa-vine"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title mb-2">Useful Links</h3>
                                <ul>
                                    <li class="py-2"><a href="#">Home</a></li>
                                    <li class="py-2"><a href="#">About Us</a></li>
                                    <li class="py-2"><a href="#features">Services</a></li>
                                    <li class="py-2"><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title mb-2">Product Help</h3>
                                <ul>
                                    <li class="py-2"><a href="#faq">FAQ</a></li>
                                    <li class="py-2"><a href="#">Privacy Policy</a></li>
                                    <li class="py-2"><a href="#contact">Support</a></li>
                                    <li class="py-2"><a href="#">Terms &amp; Conditions</a></li>
                                    <li class="py-2"><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title mb-2">Download</h3>
                                <!-- Store Buttons -->
                                <div class="button-group store-buttons store-black d-flex flex-wrap">
                                    <a href="#">
                                        <img src="assets/img/icon/google-play-black.png" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="assets/img/icon/app-store-black.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Copyright Area -->
                            <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                                <!-- Copyright Left -->
                                <div class="copyright-left">&copy; Copyrights 2022 UniXP All rights reserved.</div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--====== Footer Area End ======-->
    </div>


    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>
</body>

</html>