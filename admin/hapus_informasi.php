<?php
include_once "../koneksi.php";
$id = $_GET['id'];
$id_penduduk = $_GET['id_penduduk'];
$koneksi->query("UPDATE penduduk SET status_konfirmasi='0' WHERE id_penduduk='$id_penduduk'");
$hapus =$koneksi->query("DELETE FROM informasi WHERE id_informasi='$id'");
if(isset($hapus)){
    echo "<script>alert('Data Terhapus..!');
            window.location='index.php?page=informasi_pengambilan';
          </script>";
}else{
    echo "<script>alert('Data Error!!!!');
            window.location='index.php?page=informasi_pengambilan';
          </script>";
}