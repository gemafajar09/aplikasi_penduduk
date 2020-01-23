<?php
include_once "koneksi.php";

$id = $_GET['id'];

$data = $koneksi->query("UPDATE user SET terferivikasi='1'");

if(isset($data)){
    echo "<script>alert('akun terferifikasi.!!);
        window.location='index.php';
        </script>";
}else{
    echo "<script>alert('ERROR');
        window.location='index.php';
        </script>";
}
?>