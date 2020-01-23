<?php include"../koneksi.php" ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in| ADMIN</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?= $base_url ?>asset/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>asset/dist/AdminLTE.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>asset/plugins/icheck-bootstrap/blue.css">

  
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>SELAMAT DATANG</b></a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan Login !!!</p>

    <form action="aksi_login.php" method="POST" enctype="multipart/form-data">
      <div class="form-group has-feedback">
        <input type="username" name="username" class="form-control" placeholder="No Induk Pejabat">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-6">
          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Masuk</button>
        </div>
		<div class="col-xs-6">
			  <button type="reset" class="btn btn-warning btn-block btn-flat" value='Batal'>Batal</button>
          </div>
      </div>
    </form>
  </div>
</div>

<script src="<?= $base_url ?>asset/dist/js/login/jquery-3.1.1.min.js"></script>
<script src="<?= $base_url ?>asset/dist/js/login/bootstrap.min.js"></script>
<script src="<?= $base_url ?>asset/dist/js/login/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '30%'
    });
  });
</script>
</body>
</html>
