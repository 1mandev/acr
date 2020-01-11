<?php
    require "../server-config.php";
    session_start();
    $name = "";
    $url = "";
    $id = 0;
    $update = false;
    $errors = array();

    
    if (isset($_POST['cancel'])) {
        header('location: index.php');
    }

    if (isset($_POST['save'])) {
        $name = $_POST['name'];
        $url = $_POST['url'];
        $image = $_FILES['ads-img']['name'];

        $targetFilePath = "ads/".basename($image);
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        $allowTypes = array('jpg','png','jpeg','gif');

        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["ads-img"]["tmp_name"], $_SERVER["DOCUMENT_ROOT"]."/".$targetFilePath)) {
                mysqli_query($db, "INSERT INTO ads (name, url, ads_img) VALUES ('$name', '$url', '$image')");
            }
        } else {
            $_SESSION['message'] = 'Sorry, only JPG, JPEG, PNG, & GIFs files are allowed to upload.';
        }
        $_SESSION['message'] = "New Ads Has Been Created Successfully.";
        header('location: index.php');
    }
    

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM ads WHERE id=$id");
        $_SESSION['message'] = "Ads Deleted!";
        header('location: index.php');
    }

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $url = $_POST['url'];
        $image = $_FILES['ads-img']['name'];

        $targetFilePath = "ads/".basename($image);
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        $allowTypes = array('jpg','png','jpeg','gif');

        if (in_array($fileType, $allowTypes)) {
            if (!file_exists($_SERVER["DOCUMENT_ROOT"]."/".$targetFilePath)) {
                move_uploaded_file($_FILES["ads-img"]["tmp_name"], $_SERVER["DOCUMENT_ROOT"]."/".$targetFilePath);
                die($image);
            }
            mysqli_query($db, "UPDATE ads SET name='$name', url='$url', ads_img='$image' WHERE id=$id");
        } else {
            $_SESSION['message'] = 'Sorry, only JPG, JPEG, PNG, & GIFs files are allowed to upload.';
        }
        
        $_SESSION['message'] = "Ads Updated!";
        header('location: index.php');
    }