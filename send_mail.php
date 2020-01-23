<?php
session_start();
include "koneksi.php";
include "tgl_indo.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>
  <link rel="stylesheet" href="<?= $base_url ?>asset/plugins/fontawesome-free/css/all.min.css">
  <link href="<?= $base_url ?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= $base_url ?>asset/css/business-frontpage.css" rel="stylesheet">
 
</head>
<body>
    Verifikasi Akun
    <script src="<?= $base_url ?>asset/vendor/jquery/jquery.min.js"></script>
    <script src="<?= $base_url ?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function()
        {
            window.print();
        });
    </script>
</body>
</html>