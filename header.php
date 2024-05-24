<?php 
include 'classes/dbh.classes.php';
include 'classes/showProduct.classes.php';
include 'classes/showProduct-contr.classes.php'; 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/usefulcube-icon.png">
    <title>UseFulCube</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= ROOT_URL; ?>/css/style.css">
</head>

<body>
    <nav>
        <div class="container nav__container">
            <a href="index.html"><img class="nav__logo" src="./img/logo4.png" alt=""></a>
            <ul class="nav__links">
                <li><a href="<?= ROOT_URL ?>blog">مقالات</a></li>
                <li><a href="#about">درباره ما</a></li>
                <li><a href="#gallery"> تصاویر</a></li>
                <li><a href="<?= ROOT_URL ?>home">خانه</a></li>
            </ul>
            <ul class="nav__socials">
                <li><a href="https://telegram.me/dariush_designer" target="_blank"><i class="uil uil-telegram"></i></a> </li>
                <li><a href="#" target=""><i class="uil uil-twitter-alt"></i></a></li>
                <li><a href="#" target=""><i class="uil uil-instagram"></i></a> </li>
            </ul>
            <button class="nav__toggle-btn" id="nav__toggle-open"><i class="uil uil-bars"></i></button>
            <button class="nav__toggle-btn" id="nav__toggle-close"><i class="uil uil-multiply"></i></button>
        </div>
        <!--container-->
    </nav>
    <!--end nav-->
