<?php 
include_once "../koneksi.php";
$id = $_POST['id'];
$no = $_POST['no'];
$nama = $_POST['nama'];
$password = md5($_POST['password']);
$data = $koneksi->query("UPDATE petugas SET no_induk_pejabat='$no',nama_petugas='$nama', password='$password' WHERE id_petugas='$id'");
if($data == TRUE){
    echo"<script>alert('Diupdate.! ');
            window.location='index.php?page=data_petugas';
            </script>";
}else{
    echo"<script>alert('ERROR.! ');
            window.location='index.php?page=data_petugas';
            </script>";
}

?>