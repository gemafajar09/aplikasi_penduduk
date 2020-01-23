<?php
include_once "../koneksi.php";

$id = $_GET['id'];
$hapus = $koneksi->query("DELETE FROM `berita_acara` WHERE id_berita='$id'");
if(isset($hapus)){
    echo "<script>alert('Data Terhapus..!');
            window.location='index.php?page=berita_acara';
          </script>";
}else{
    echo "<script>alert('Data Error!!!!');
            window.location='index.php?page=berita_acara';
          </script>";
}

?>