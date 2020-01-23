<?php 
session_start();
if(!isset($_SESSION['admin']['id_petugas'])){
	echo"<script>
			alert('Silahkan Login Terlebih Dahulu!!!');
			window.location='login.php';
		</script>";
}else{
?>
<?php include "../koneksi.php"; ?>
<?php include "template/header.php"; ?>
<?php include "template/navbar.php"; ?>
<?php include "template/menu.php"; ?>
<div class="content-wrapper">
<section class="content py-5">
<?php
if(!empty($_GET["page"])){
	include_once($_GET["page"].".php");
}else{
	include "home.php";
}
?>
</section>
</div>
<?php include "template/footer.php"; ?>
<?php } ?>