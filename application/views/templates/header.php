<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url() ?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v2.0.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="<?php echo base_url('member/home') ?>"><span>YournAll</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active mr-5"><a href="<?php echo base_url('member/home') ?>">Home</a></li>
          <li class="drop-down mr-5"><a href="">Search</a>
            <ul>
              <li><a href="<?php echo base_url('member/journal_national') ?>">Journal National</a></li>
              <li><a href="<?php echo base_url('member/journal_international') ?>">Journal International</a></li>
            </ul>
          </li>
          <li class="mr-5"><a href="<?php echo base_url('member/about') ?>">About Us</a></li>
          <li class="mr-5"><a href="<?php echo base_url('member/contact') ?>">Contact Us</a></li>
          <li class="drop-down mr-5"><a href="">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
              <img class="img-profile rounded-circle" style="width: 25px;" src="<?= base_url('assets/img/profile/') . $user['photo']; ?>">
            </a>
            <ul>
              <li><a href="<?php echo base_url('') ?>">Edit Profile</a></li>
              <li><a href="<?php echo base_url('') ?>">Logout</a></li>
            </ul>
          </li>
          <!-- 
          <li><a href="" class="btn-get-started animated fadeInUp">Login</a></li>
          <li><a href="" class="btn-get-started animated fadeInUp">Register</a></li> -->
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->