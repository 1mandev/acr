<?php

require "../server-config.php";
session_start();
$banner_script = "";
$id = 0;
$update=false;

if (isset($_POST['save-banner_ads'])) {
    $banner_script = $_POST['add-script'];
    mysqli_query($db, "INSERT INTO `bannerads` (`id`, `script`) VALUES (NULL, '$banner_script');");
    header('location: index.php');
}

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM bannerads WHERE id=$id");
    $_SESSION['message'] = "Ads Deleted!";
    header('location: index.php');
}

