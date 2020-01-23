<?php
include_once "../koneksi.php";

$id = $_GET['id'];
$hapus = $koneksi->query("DELETE FROM `penduduk` WHERE id_penduduk='$id'");
if(isset($hapus)){
    echo "<script>alert('Data Terhapus..!');
            window.location='index.php?page=dataPenduduk';
          </script>";
}else{
    echo "<script>alert('Data Error!!!!');
            window.location='index.php?page=dataPenduduk';
          </script>";
}

?>