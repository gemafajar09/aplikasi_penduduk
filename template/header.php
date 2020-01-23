<?php
session_start();
error_reporting(0);
include "koneksi.php";
include "tgl_indo.php";
$data = $koneksi->query("SELECT * FROM penduduk WHERE id_user='$_SESSION[user][id_user]'");
$hasil = count($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Selamat Datang Di Sistem Pengurusan Kartu Tanda Penduduk Kecamatan Canduang Kabupaten Agam</title>
  <link rel="stylesheet" href="<?= $base_url ?>asset/plugins/fontawesome-free/css/all.min.css">
  <link href="<?= $base_url ?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= $base_url ?>asset/css/business-frontpage.css" rel="stylesheet">
 
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
<div class="container">
  <?php if($_SESSION['user']['id_user']==''){

  }else{ ?>
    <a class="navbar-brand" href="#">Selamat Datang: <i style="color:grey;"> <?= $_SESSION['user']['nama'] ?></i></a>
  <?php } ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
        <a class="nav-link" href="index.php">Home
            <span class="sr-only">(current)</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
        <!-- </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
        </li> -->
        <?php if($_SESSION['user']['id_user']==''){ ?>
        <li class="nav-item">
        <a class="nav-link" href="#login" data-toggle="modal">Log in</a>
        </li>
        <?php }else{ ?>
        <li class="nav-item">
        <a class="nav-link" href="?page=pengurusanKtp">Pengurusan KTP</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="?page=history">Riwayat Pengurusan <span class="badge badge-info right"><?= $hasil ?></span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
        </li>
        <?php } ?>
    </ul>
    </div>
</div>
</nav>

<header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2">Selamat Datang Di Sistem Pengurusan Kartu Tanda Penduduk Kecamatan Canduang Kaupaten Agam</h1>
        </div>
      </div>
    </div>
</header>

<div class="modal" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="login.php" method="POST">
        <div class="modal-body">
          <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" class="form-control" required>
          </div>
          <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
          </div>
          <div>
              <input type="submit" class="btn btn-primary btn-block" name="login" value="Log In">
          </div>
          <div align="left">
            <a href="#register" data-toggle="modal" data-dismiss="modal">Register</a>
          </div>
          <div align="right">
            <a href="http://localhost/penduduk/admin/login.php" class="btn btn-danger">Login Admin</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="register" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Register</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form action="register.php" method="POST">
      <div class="modal-body " id="scroll" >
        <div class="form-group">
            <label style="color:red;">Nama *</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" required>
        </div>
        <div class="form-group">
            <label style="color:red;">Username *</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group">
            <label style="color:red;">Password *</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group">
            <label style="color:red;">Email *</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label style="color:red;">Telpon *</label>
            <input type="number" name="telpon" class="form-control" placeholder="telpon" required>
        </div>
        <div align="right">
            <button type="button" name="register" onclick="SendMail()" class="btn btn-primary btn-block">Register</button>
            <button type="submit" name="register" id="kirimEmail" style="display: none;"></button>
        </div><br>
      </div>
      </form>
    </div>

  </div>
</div>
<script src="<?= $base_url ?>asset/vendor/jquery/jquery.min.js"></script>
<script>
    function SendMail(){
      var from = "noreply@register.com";
      var to = document.getElementById('email').value;
      var key = "http://localhost/penduduk/index.php";
        $.ajax({
                url  : 'http://registrasiprimadata.com/mail.php',
                type : 'POST',
                data : {'to': to,'key': key },
                success : function(){
                document.getElementById('kirimEmail').click();
            }
    });
    }
</script>
<div class="container">