<?php
include "koneksi.php";
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
$tanggal = date('Y-m-d');

$namaFile = $_FILES['foto']['name'];
$namaSementara = $_FILES['foto']['tmp_name'];
$Upload = "images/";
$terupload = move_uploaded_file($namaSementara, $Upload.$namaFile);

if(isset($_POST['simpan'])){
    if(isset($namaFile)){
        $koneksi->query("INSERT INTO penduduk  VALUES ('','$nik','$nama','$tempat','$tgl','$jenis','$alamat','$rt','$kelurahan','$kecamatan','$agama','$status','$pekerjaan','$negara','$golongan','$namaFile','','Seumur Hidup','$tanggal','$id','')");

        // echo"<script>alert('Data Tersimpan.!!');
        //         window.location='index.php';
        //     </script>";
    }else{
        $koneksi->query("INSERT INTO penduduk  VALUES ('','$nik','$nama','$tempat','$tgl','$jenis','$alamat','$rt','$kelurahan','$kecamatan','$agama','$status','$pekerjaan','$negara','$golongan','','','Seumur Hidup','$tanggal','$id','')");

        // echo"<script>alert('Data Tersimpan.!! Foto Gagal Diupload.!!');
        //         window.location='index.php';
        //     </script>";
    }
}
?>