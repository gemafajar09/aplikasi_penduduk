<?php
include "koneksi.php";
$id_penduduk = $_POST['id_penduduk'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat = $_POST['tmpLahir'];
$tgl = $_POST['tgl'];
$jenis = $_POST['jenis'];
$alamat = $_POST['alamat'];
$rt = $_POST['rt'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$agama = $_POST['agama'];
$status = $_POST['status'];
$pekerjaan = $_POST['pekerjaan'];
$negara = $_POST['negara'];
$golongan = $_POST['golongan'];
$id = $_POST['id'];

$namaFile = $_FILES['foto']['name'];
$namaSementara = $_FILES['foto']['tmp_name'];
$Upload = "images/";
$terupload = move_uploaded_file($namaSementara, $Upload.$namaFile);

if(isset($_POST['update'])){

    if($namaFile == TRUE){
        $koneksi->query("UPDATE penduduk  SET nik='$nik',nama='$nama',tempat_lahir='$tempat',tanggal_lahir='$tgl',jenis_kelamin='$jenis',alamat='$alamat',rt='$rt',kelurahan='$kelurahan',kecamatan='$kecamatan',agama='$agama',status_perkawinan='$status',pekerjaan='$pekerjaan',kewarganegaraan='$negara',gol_darah='$golongan',foto='$namaFile',id_user='$id' WHERE id_penduduk='$id_penduduk'");

        echo"<script>alert('Data Terupdate.!!');
                window.location='index.php';
            </script>";
    }else{
        $koneksi->query("UPDATE penduduk  SET nik='$nik',nama='$nama',tempat_lahir='$tempat',tanggal_lahir='$tgl',jenis_kelamin='$jenis',alamat='$alamat',rt='$rt',kelurahan='$kelurahan',kecamatan='$kecamatan',agama='$agama',status_perkawinan='$status',pekerjaan='$pekerjaan',kewarganegaraan='$negara',gol_darah='$golongan',id_user='$id' WHERE id_penduduk='$id_penduduk'");

        echo"<script>alert('Data Terupdate');
                window.location='index.php';
            </script>";
    }
}
?>