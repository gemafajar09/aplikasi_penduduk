<?php 
include_once "../koneksi.php";
$id = $_POST['id'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$data = $koneksi->query("UPDATE informasi SET tanggal_pengambilan='$tanggal',tempat_pengambilan='$tempat' WHERE id_informasi='$id'");
if($data == TRUE){
    echo"<script>alert('Informasi Diupdate.! ');
            window.location='index.php?page=informasi_pengambilan';
            </script>";
}else{
    echo"<script>alert('Informasi ERROR.! ');
            window.location='index.php?page=informasi_pengambilan';
            </script>";
}

?>