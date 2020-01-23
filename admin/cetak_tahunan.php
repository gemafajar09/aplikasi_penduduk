<?php
session_start();
include "../koneksi.php";
include "../tgl_indo.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>
  <link rel="stylesheet" href="<?= $base_url ?>asset/plugins/fontawesome-free/css/all.min.css">
  <link href="<?= $base_url ?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= $base_url ?>asset/css/business-frontpage.css" rel="stylesheet">
 
</head>
<body>
<table class="table">
<tr>
    <td align="center">
        <h3 >Laporan Bulanan Pengurusan Kartu Tanda Penduduk</h3>
        <p><h4>Kabupaten Canduang Tahun : <?= tgl_indo($_POST['tahun']) ?></h4></p><hr>
    </td>
</tr>
</table>
<table class="table">
<thead>
            <tr>
                <th>NO</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>RT/RW</th>
                <th>Kelurahan</th>
                <th>Kecamatan</th>
                <th>Agama</th>
                <th>Status Perkawinan</th>
                <th>Pekerjaan</th>
                <th>Kewarganegaraan</th>
                <th>Golongan Darah</th>
                <th>Foto</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    $tahun = $_POST['tahun'];

                    $data = $koneksi->query("SELECT * FROM penduduk WHERE tanggal_daftar LIKE '$tahun%'");
                    foreach($data as $i => $a):
                ?>
                <tr>
                    <td><?= $i+1 ?></td>
                    <td><?= $a['nik'] ?></td>
                    <td><?= $a['nama'] ?></td>
                    <td><?= $a['tempat_lahir'] ?></td>
                    <td><?= $a['tanggal_lahir'] ?></td>
                    <td><?= $a['jenis_kelamin'] ?></td>
                    <td><?= $a['alamat'] ?></td>
                    <td><?= $a['rt'] ?></td>
                    <td><?= $a['kelurahan'] ?></td>
                    <td><?= $a['kecamatan'] ?></td>
                    <td><?= $a['agama'] ?></td>
                    <td><?= $a['status_perkawinan'] ?></td>
                    <td><?= $a['pekerjaan'] ?></td>
                    <td><?= $a['kewarganegaraan'] ?></td>
                    <td><?= $a['gol_darah'] ?></td>
                    <td><img src="../images/<?= $a['foto'] ?>" width="80px"></td>
                </tr>
                <?php endforeach ?>
            </tbody>
</table>

    <script src="<?= $base_url ?>asset/vendor/jquery/jquery.min.js"></script>
    <script src="<?= $base_url ?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function()
        {
            window.print();
        });
    </script>
</body>
</html>