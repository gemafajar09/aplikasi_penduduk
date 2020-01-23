<?php
include_once "../koneksi.php";

$id = $_GET['id'];
$hapus = $koneksi->query("DELETE FROM `petugas` WHERE id_petugas='$id'");
if(isset($hapus)){
    echo "<script>alert('Data Terhapus..!');
            window.location='index.php?page=data_petugas';
          </script>";
}else{
    echo "<script>alert('Data Error!!!!');
            window.location='index.php?page=data_petugas';
          </script>";
}

?>