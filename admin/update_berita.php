<?php
include "../koneksi.php";

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$tanggal = date('Y-m-d');

$namaFile = $_FILES['fotos']['name'];
$namaSementara = $_FILES['fotos']['tmp_name'];
$Upload = "../images/";
$terupload = move_uploaded_file($namaSementara, $Upload.$namaFile);

if(isset($_POST['update'])){
    if($namaFile == TRUE){
    $koneksi->query("UPDATE `berita_acara` SET `judul`='$judul', `isi_berita`='$isi', `foto`='$namaFile' ");
    echo"<script>alert('Berita Acara Diupdate.');
        window.location='index.php?page=berita_acara';
        </script>";
    }else{
        $koneksi->query("UPDATE `berita_acara` SET `judul`='$judul', `isi_berita`='$isi' ");
        echo"<script>alert('Berita Acara Diupdate.! <br> Foto Tidak Di Ubah ');
            window.location='index.php?page=berita_acara';
            </script>";
    }
}else{
    echo"<script>alert('Berita Acara Gagal Diupdate.');
        window.location='index.php?page=berita_acara';
        </script>";
}