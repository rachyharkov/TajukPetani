<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!--custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

    <!--Plugin-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <title><?php echo $title; ?></title>
    <script src="https://kit.fontawesome.com/fd0c5ab4fe.js" crossorigin="anonymous"></script>
    <style>
        
    </style>
  </head>
  <body>
    <div id="warning-body">
        <p style="margin: auto;">Maaf untuk tampilan website saat ini masih dalam pengerjaan
Silahkan buka di smartphone Anda.</p>
        <div class="footer-warning-fun">
          <img src="<?php echo base_url() ?>img/footer-image.png" style="width: 100%; height: auto; display: block;">
          <p style="position: absolute;
    bottom: 4em;
    right: 34%;
    transform: translateY(50%);
    font-weight: bold;
    color: white;">By Kelompok 1 - Teknologi Informasi</p>
        </div>

    </div>
    <div id="loading" class="wait">
      <img src="<?php echo base_url() ?>img/loading.svg">
    </div>
    <div id="loading-back">
      <img src="<?php echo base_url() ?>img/loading.svg">
    </div>
    <div id="drawer-container">
      <button id="btnclosedrawer"><i class="fas fa-times"></i></button>
      <a class="nav-link" href="<?php echo base_url() ?>login">Login</a>
      <a class="nav-link" href="#">Transaksi Anda</a>
      <a class="nav-link" href="#">Rekomendasi</a>
      <a class="nav-link" href="#">Pengaturan User</a>
    </div>
    <div id="body">