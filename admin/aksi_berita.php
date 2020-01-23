<?php
include "../koneksi.php";

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$tanggal = date('Y-m-d');

$namaFile = $_FILES['fotos']['name'];
$namaSementara = $_FILES['fotos']['tmp_name'];
$Upload = "../images/";
$terupload = move_uploaded_file($namaSementara, $Upload.$namaFile);

if(isset($_POST['simpan'])){
    if(isset($namaFile)){
    $koneksi->query("INSERT INTO `berita_acara`( `judul`, `isi_berita`, `tanggal_terbit`, `foto`) VALUES ('$judul','$isi','$tanggal','$namaFile') ");
    echo"<script>alert('Berita Acara Ditambahkan.');
        window.location='index.php?page=berita_acara';
        </script>";
    }else{
        $koneksi->query("INSERT INTO `berita_acara`( `judul`, `isi_berita`, `tanggal_terbit`) VALUES ('$judul','$isi','$tanggal') ");
        echo"<script>alert('Berita Acara Ditambahkan.! <br> Foto Gagal Di Upload ');
            window.location='index.php?page=berita_acara';
            </script>";
    }
}else{
    echo"<script>alert('Berita Acara Gagal Ditambahkan.');
        window.location='index.php?page=berita_acara';
        </script>";
}

?>