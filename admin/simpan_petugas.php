<?php 
include_once "../koneksi.php";
$no = $_POST['no'];
$nama = $_POST['nama'];
$password = md5($_POST['password']);
$data = $koneksi->query("INSERT INTO `petugas`( `no_induk_pejabat`, `nama_petugas`, `password`) VALUES ('$no','$nama','$password')");
if($data == TRUE){
    echo"<script>alert('Berhasil.! ');
            window.location='index.php?page=data_petugas';
            </script>";
}else{
    echo"<script>alert('ERROR.! ');
            window.location='index.php?page=data_petugas';
            </script>";
}

?>