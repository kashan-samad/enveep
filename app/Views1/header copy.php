<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo SITE_NAME; ?></title>
        <!--favincon-->
        <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="assets/images/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- Bootstrap, Font Awesome, Aminate, Owl Carausel, Normalize CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">

        <!-- Site CSS -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/widgets.css" rel="stylesheet">
        <link href="assets/css/color-default.css" rel="stylesheet">
        <link href="assets/css/responsive.css" rel="stylesheet">

        <!-- Bunny fonts-->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=b612-mono:400,400i,700,700i|cabin:400,700|lora:400,400i,700,700i" rel="stylesheet" />

        <!-- Icons fonts-->
        <link href="assets/css/fontello.css" rel="stylesheet">
    </head>
    <body class="home"> <!-- TODO: home/archive/single page-404 -->
        <div class="top-scroll-bar"></div>
        <!--Mobile navigation-->
        <div class="sticky-header fixed d-lg-none d-md-block">
            <div class="text-right">
                <div class="container mobile-menu-fixed pr-5">
                    <h1 class="logo-small navbar-brand"><a href="<?php echo base_url(); ?>" class="logo"><?php echo SITE_NAME; ?></a></h1>

                    <a class="author-avatar" href="#"><img src="assets/images/author-avata-1.jpg" alt=""></a>

                    <ul class="social-network heading navbar-nav d-lg-flex align-items-center">
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                    </ul>

                    <a href="javascript:void(0)" class="menu-toggle-icon">
                        <span class="lines"></span>
                    </a>
                </div>
            </div>

            <div class="mobi-menu">
                <div class="mobi-menu__logo">
                    <h1 class="logo navbar-brand"><a href="<?php echo base_url(); ?>" class="logo"><?php echo SITE_NAME; ?></a></h1>
                </div>
                <form action="#" method="get" class="menu-search-form d-lg-flex">
                    <input type="text" class="search_field" placeholder="Search..." value="" name="s">
                </form>
                <nav>
                    <ul>
                        <li class="current-menu-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="menu-item-has-children"><a href="<?php echo base_url('category'); ?>">Categories</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url('category'); ?>">Politics</a></li>
                                <li><a href="<?php echo base_url('category'); ?>">Health</a></li>
                                <li><a href="<?php echo base_url('category'); ?>">Design</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url('category'); ?>">Politics</a></li>
                        <li><a href="<?php echo base_url('category'); ?>">Health</a></li>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--Mobile navigation-->
        <div id="wrapper">
            <header id="header" class="d-lg-block d-none">
                <div class="container">
                    <div class="align-items-center w-100">
                        <h1 class="logo float-left navbar-brand"><a href="<?php echo base_url(); ?>" class="logo"><?php echo SITE_NAME; ?></a></h1>
                        <!-- <img class="banner-image" src="images/enveep-logo.png" /> -->
                        <div class="header-right float-right w-50">
                            <div class="d-inline-flex float-right text-right align-items-center">
                                <ul class="social-network heading navbar-nav d-lg-flex align-items-center">
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                                </ul>
                                <ul class="top-menu heading navbar-nav w-100 d-lg-flex align-items-center">
                                    <li><a href="#" class="btn">Contact</a></li>
                                </ul>
                                <a class="author-avatar" href="#"><img src="assets/images/author-avata-1.jpg" alt=""></a>
                            </div>
                            <form action="#" method="get" class="search-form d-lg-flex float-right">
                                <a href="javascript:void(0)" class="searh-toggle">
                                    <i class="icon-search"></i>
                                </a>
                                <input type="text" class="search_field" placeholder="Search..." value="" name="s">
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <nav id="main-menu" class="stick d-lg-block d-none">
                    <div class="container">
                        <div class="menu-primary">
                            <ul>
                                <li class="current-menu-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li class="menu-item-has-children"><a href="<?php echo base_url('category'); ?>">Categories</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo base_url('category'); ?>">Politics</a></li>
                                        <li><a href="<?php echo base_url('category'); ?>">Health</a></li>
                                        <li><a href="<?php echo base_url('category'); ?>">Design</a></li>
                                    </ul>
                                </li>
                                <li><a href="category">Politics</a></li>
                                <li><a href="category">Health</a></li>
                                <li><a href="category">Design</a></li>
                                <li><a href="category">Startups</a></li>
                                <li><a href="category">Culture</a></li>
                                <li><a href="contact">Contact</a></li>
                                <li class="menu-item-has-children"><a href="#">More...</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo base_url('search'); ?>">Search</a></li>
                                        <li><a href="<?php echo base_url('author'); ?>">Author</a></li>
                                        <li><a href="<?php echo base_url('error'); ?>">404</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <span></span>
                        </div>
                    </div>
                </nav>
            </header>
            <main id="content">
