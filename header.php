<?php 
    require_once 'functions.php'; 
    require_once 'server-config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ActualCashRewards</title>
    <link rel="shortcut icon" href="assets/logo/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Teko:500|Poppins:400,600" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/slick/slick.css">
    <link rel="stylesheet" href="assets/vendor/slick/slick-theme.css">
    <link rel="stylesheet" href="assets/vendor/lightbox/simplelightbox.min.css">
    <link rel="stylesheet" href="assets/vendor/light/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/acr-main.css">
</head>

<body>
    <?php include('g-anlaytics.php'); ?>
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    
    <header class="header section__primary">
        <div class="section__fluid">
            <div class="header__content">
                <div class="logo">
                    <a href="/">
                        <img class="logo-icon" src="assets/logo/icon.png">
                        <h1>Actual<span>Ca$h</span>Rewards</h1>
                    </a>
                </div>
                <!-- Featured Banner -->
                <div class="banner">
                    <?php $results = mysqli_query($db, "SELECT * FROM ads");
                        while ($row = mysqli_fetch_array($results)):
                            if ($row['name']== 'banner'):
                            ?>

                    <a href="<?php echo $row['url'] ?>">
                        <img src="<?php echo "ads/".$row['ads_img'] ?>" alt="featured__image">
                    </a>

                    <?php endif; break; endwhile;?>

                </div>
            </div>
        </div>
    </header>

    <div class="content section__fluid">
        <main class="content__main">
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