<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ActualCashRewards</title>
    <link rel="shortcut icon" href="<?php $_SERVER['DOCUMENT_ROOT'];?>/assets/logo/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'];?>/assets/vendor/slick/slick.css">
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/vendor/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/vendor/light/baguetteBox.min.css">
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/css/acr-main.css">
</head>

<body>
    <?php include('g-anlaytics.php'); ?>
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    
    

    <div class="content section__fluid">
        <main class="content__main">
            <header class="header section__primary">
     
                    <div class="header__content">
                        <div class="logo">
                            <a href="/">
                                <img class="logo-icon" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/assets/logo/logo.jpg">
                            </a>
                        </div>
                        <?php include('banner.php') ?>
                    </div>
        
            </header>
            <section class="nav section__primary">
                <div class="menu-wrapper">
                    <a href="#menu" class="menu-link"> Menu</a>

                    <nav id="menu" role="navigation">
                        <div class="menu">
                            <li class="menu">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="about.php#how-it-works">how it works</a>
                            </li>
                            <li>
                                <a href="about.php#contact-us">add your reward</a>
                            </li>
                            <li>
                                <a href="about.php">About</a>
                            </li>
                            <li>
                                <a href="about.php#contact-us">contact us</a>
                            </li>
                            </li>
                        </div>
                    </nav>
                </div>
            </section>