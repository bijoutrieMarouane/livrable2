<?php 
$css = 'layout/css/'; // CSS Directory
$js = 'layout/js/'; // JS Directory
$image = 'layout/image/'; // Image Directory
$font = 'layout/fonts/'; // Font Directory
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Meta -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>M.R.A Shop</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="<?= $css ?>owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?=$css?>bootstrap.min.css" />

  <!-- fonts style -->
  <link href="<?= $css .'css.css'?>" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?= $css .'style.css'?>" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?= $css .'responsive.css'?>" rel="stylesheet" />
  <!-- swiper style -->
  <link href="<?= $css .'swiper-bundle.min.css'?>" rel="stylesheet" />


  <?php
    if (!isset($noNavbar)) {
      include 'navbar.php';
    }    
    if (!isset($noNavbar2)) {
      include 'navbar2.php';
    }
  ?>
</head>

<body>