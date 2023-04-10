<?php
require 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toko Printer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/home.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
    <div class="container-fluid">
      <span>
        <a class="navbar-brand" href="index.php"><i class="fa-solid fa-cart-shopping-fast"></i><b>Toko Printer</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </span>
    <span>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <?php if (isset($_SESSION["username"])) : ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $_SESSION["nama_lengkap"];?></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="transaksi.php"><i class="fa-solid fa-basket-shopping me-2"></i>Pesanan Anda</a></li>
                  <li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-right-to-bracket me-2"></i>Logout</a></li>
                </ul>
              </li>
              <a class="nav-link" href="keranjang.php"><i class="fa-solid fa-cart-shopping me-2"></i>Keranjang</a>
              <?php endif; ?>
              <?php if (!isset($_SESSION["username"])) : ?>
                <a class="nav-link" href="login/index.php"><i class="fa-solid fa-right-to-bracket me-2"></i>Login</a>
                <?php endif; ?>
              </span>
        </div>
      </div>
    </div>
  </nav>