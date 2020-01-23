<?php
include_once "koneksi.php";

$id = $_POST['id'];

$namapdf = $_FILES['pdf']['name'];
$namasm = $_FILES['pdf']['tmp_name'];
$Uploadpdf = "file/";
$berhasil = move_uploaded_file($namasm, $Uploadpdf.$namapdf);

if(isset($_POST['upload'])){
    $koneksi->query("UPDATE penduduk SET pdf='$namapdf' WHERE id_penduduk='$id'");
    echo"<script>alert('Pastikan Data Penduduk Telah Benar.!');
                window.location='index.php';
            </script>";
}else{
    echo"<script>alert('GAGAL UPLOAD!!!!!');
            window.location='index.php';
        </script>";
}