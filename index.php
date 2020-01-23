<?php include "koneksi.php" ?>
<?php include "template/header.php" ?>
<?php
if(!empty($_GET["page"])){
	include_once($_GET["page"].".php");
}else{
	include "home.php";
}
?>
<?php include "template/footer.php" ?>