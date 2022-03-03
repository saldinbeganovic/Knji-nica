<?php include_once '../functions/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vrtiljak</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="../image/icons/favico.png" type="image/png">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

  <!-- header section starts  -->

  <header class="header">

      <div class="header-1">

          <a href="../" class="logo"> <i class="fas fa-book"></i> Vrtiljak </a>

          <form action="" class="search-form">
              <input type="search" name="" placeholder="search here..." id="search-box">
              <label for="search-box" class="fas fa-search"></label>
          </form>

          <div class="icons">
              <div id="search-btn" class="fas fa-search"></div>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-shopping-cart"></a>
              <?php if (isset($_SESSION['email'])) {
                ?>
                <a href="profile/"><i id="login-btn" class="fas fa-user"></i></a>
                <?php
              }
              else{
                ?>
                <div id="login-btn" class="fas fa-user"></div>
                <?php
              } ?>

          </div>

      </div>

      <div class="header-2">
          <nav class="navbar">
              <a href="#home">home</a>
              <a href="#featured">featured</a>
              <a href="#arrivals">arrivals</a>
              <a href="#reviews">reviews</a>
              <a href="#blogs">blogs</a>
          </nav>
      </div>

  </header>
