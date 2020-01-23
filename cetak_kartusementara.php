<?php
session_start();
include "koneksi.php";
include "tgl_indo.php";
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
<?php
    $id = $_GET['id'];
    $data = $koneksi->query("SELECT * FROM penduduk WHERE id_penduduk='$id'");
    $a = $data->fetch_assoc();
?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <table style="position: center">
            <tr>
                <th style="text-align:center; width:800px" colspan="4">
                    <h2>PROVINSI SUMATERA BARAT <p>KABUPATEN CANDUANG</p></h2>
                </th>
            </tr>
            <tr>
                <td>
                    <h4>NIK</h4>
                </td>
                <td>:</td>
                <td><h4><?= $a['nik'] ?></h4></td>
                <td>&nbsp;</td>
            </tr>
        </table>
        <table>
            <tr>
                <td style="width: 200px;">
                    Nama
                </td>
                <td>:</td>
                <td style="width: 500px"><?= $a['nama'] ?></td>
                <td rowspan="8" style="text-align:center;">
                    <img src="images/<?= $a['foto'] ?>" width="180px" height="240px" alt="">
                    <p ><h5><b>Canduang</b></h4></p>
                    <p><?= date('d-m-Y') ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    Tempat/ Tanggal Lahir
                </td>
                <td>:</td>
                <td><?= $a['tanggal_lahir'] ?></td>
            </tr>
            <tr>
                <td>
                    Jenis Kelamin
                </td>
                <td>:</td>
                <td><?= $a['jenis_kelamin'] ?></td>
            </tr>
            <tr>
                <td>
                    Alamat
                </td>
                <td>:</td>
                <td><?= $a['alamat'] ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    RT / RW
                </td>
                <td>:</td>
                <td><?= $a['rt'] ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    Kel / Desa
                </td>
                <td>:</td>
                <td><?= $a['kelurahan'] ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    Kecamatan
                </td>
                <td>:</td>
                <td><?= $a['kecamatan'] ?></td>
            </tr>
            <tr>
                <td>
                    Agama
                </td>
                <td>:</td>
                <td><?= $a['agama'] ?></td>
            </tr>
            <tr>
                <td>
                    Status Perkawinan
                </td>
                <td>:</td>
                <td><?= $a['status_perkawinan'] ?></td>
            </tr>
            <tr>
                <td>
                    Pekerjaan
                </td>
                <td>:</td>
                <td><?= $a['pekerjaan'] ?></td>
            </tr>
            <tr>
                <td>
                    Kewarganegaraan
                </td>
                <td>:</td>
                <td><?= $a['kewarganegaraan'] ?></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    Berlaku Hingga
                </td>
                <td>:</td>
                <td><?= $a['masa_berlaku'] ?></td>
                <td></td>
            </tr>
        </table>
    </div>
</div>

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