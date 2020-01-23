<?php
include_once "../koneksi.php";

$id = $_POST['id'];
$id_user = $_POST['id_user'];
$no_info = $_POST['no_info'];
$tanggal_pengambilan = $_POST['tanggal'];
$tempat = $_POST['tempat'];
 if(isset($_POST['konfirmasi'])){
     $koneksi->query("UPDATE penduduk SET status_konfirmasi='1' WHERE id_penduduk='$id'");
     $koneksi->query("INSERT INTO `laporan`(`id_penduduk`, `tanggal`) VALUES ('$id','$tanggal_pengambilan')");
     $koneksi->query("INSERT INTO `informasi`( `id_penduduk`, `id_user`, `no_info`, `tanggal_pengambilan`, `tempat_pengambilan`) VALUES ('$id','$id_user','$no_info','$tanggal_pengambilan','$tempat')");
     echo"<script> alert('Data Telah Dikonfirmasi.');
            window.location='index.php?page=informasi_pengambilan';
        </script>";
 }else{
    echo"<script> alert('Data Gagal Dikonfirmasi.');
            window.location='index.php?page=informasi_pengambilan';
        </script>";
 }
?>