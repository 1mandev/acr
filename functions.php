<?php

function listFolderFiles($dir){
    $ffs = scandir($dir);
    $dirLists = array();
    unset($ffs[array_search('.', $ffs, true)]);
    unset($ffs[array_search('..', $ffs, true)]);
    if (count($ffs) < 1) return;
    foreach($ffs as $ff){
        array_push($dirLists, $ff);
    }
    return $dirLists;
}

function GetImagesArray($dir) {
    $ImagesArray = [];
    $file_display = [ 'jpg', 'jpeg', 'png', 'gif' ];

    if (!file_exists($dir)) {
        return ["Directory \'', $dir, '\' not found!"];
    } else {
        $dir_contents = scandir($dir);
        foreach ($dir_contents as $file) {
            $file_type = pathinfo($file, PATHINFO_EXTENSION);
            if (in_array($file_type, $file_display) == true) {
                $ImagesArray[] = $file;
            }
        }
        return $ImagesArray;
    }
}

function createThumbnail($filename, $path_to_image_directory, $path_to_thumbs_directory, $final_height_of_image) {
    if (!file_exists($path_to_thumbs_directory)) {
        if (!mkdir($path_to_thumbs_directory)) {
            die("Something Went wrong with the Server.");
        }
    }

    if (!file_exists($path_to_thumbs_directory.$filename)) {
        if (preg_match('/[.](jpg)|(jpeg)$/', $filename)) {
            $im = imagecreatefromjpeg($path_to_image_directory . $filename);
        } elseif (preg_match('/[.](gif)$/', $filename)) {
            $im = imagecreatefromgif($path_to_image_directory . $filename);
        } elseif (preg_match('/[.](png)$/', $filename)) {
            $im = imagecreatefrompng($path_to_image_directory . $filename);
        }
    
        $ox = imagesx($im);
        $oy = imagesy($im);
        $nx =  floor($ox * ($final_height_of_image / $oy)); //200
        $ny = $final_height_of_image;

        $box_blur = array([1, 1, 1], [1, 1, 1], [1, 1, 1]);
        imageconvolution($im, $box_blur, 9, 0);

        $nm = imagecreatetruecolor($nx, $ny);        
        imageAlphaBlending($nm, false);
        imageSaveAlpha($nm, true);
        imageantialias($nm, true);

        imagecopyresized($nm, $im, 0, 0, 0, 0, $nx, $ny, $ox, $oy);
        imagejpeg($nm, $path_to_thumbs_directory . $filename, 100);
    }
}

function generateThubmnails($dir, $thumb_dir, $thumb_height = 200){
    $dir_full_images = GetImagesArray($dir);
    foreach ($dir_full_images as $image) {
        if (preg_match('/[.](jpg)|(gif)|(png)|(jpeg)$/', $image)) {
            createThumbnail($image, $dir, $thumb_dir, $thumb_height);
        }
    }
}

$allSubDirs = listFolderFiles('images');

// Genarate Thumbnails For Each Sub Directories
foreach($allSubDirs as $subdir){
    generateThubmnails("images/".$subdir."/"."full/", "images/".$subdir."/"."thumb/");
}

// Delete Unneccessary Thumbnails
foreach($allSubDirs as $subdir){
    $all_thumbs = GetImagesArray("images/".$subdir."/"."thumb/");
    foreach($all_thumbs as $image){
        if(!file_exists("images/".$subdir."/"."full/".$image)){
            unlink("images/".$subdir."/"."thumb/".$image);
        } 
    }
}

function array_random($arr, $num) {
    $r = array();
    for ($i = 0; $i < $num; $i++) {
        $r[] = $arr[$i];
        shuffle($r);
    }
    return $r;
}

