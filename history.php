<?php
    $id = $_SESSION['user']['id_user'];
    $data = $koneksi->query("SELECT * FROM penduduk WHERE id_user='$id'");
    $a = $data->fetch_assoc();
    if($a['status_konfirmasi']== 0){
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
                <td style="width: 600px"><?= $a['nama'] ?></td>
                <td rowspan="8" style="text-align:center;">
                    <img src="images/<?= $a['foto'] ?>" width="180px" height="260px" alt="">
                    <p ><h5><b>Canduang</b></h4></p>
                    <p><?= date('d-m-Y') ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    Tempat/ Tanggal Lahir
                </td>
                <td>:</td>
                <td><?= tgl_indo($a['tanggal_lahir']) ?></td>
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
        <br>
        <form action="upload_pdf.php" method="POST">
            <div class="form-group">
                <label for=""><b>Upload FIle</b> 
                <p><i style="color:red; font-size:9px;">* Upload File Kartu Tanda Penduduk Dalam Bentuk PDF</i></p>
                </label>
                <input type="file" class="form-control" name="pdf">
                <input type="hidden" value="<?= $a['id_penduduk'] ?>" name="id">
                <input type="submit" class="btn btn-success btn-block" value="UPLOAD" name="upload">
            </div>
        </form>
        <br>
            <a href="?page=edit_history&id=<?= $a['id_penduduk'] ?>" class="btn btn-primary btn-block">EDIT</a>
            <a href="index.php" class="btn btn-warning btn-block">BATAL</a>
    </div>
</div>
    <?php }else{ ?>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Informasi Kartu Tanda Penduduk Atas Nama : <?= $_SESSION['user']['nama'] ?></h4>
                    </div>
                    <div class="card-body">
                        <?php
                                $id = $_SESSION['user']['id_user'];
                                $cetak = $koneksi->query("SELECT * FROM penduduk WHERE id_user='$id'")->fetch_assoc();
                        ?>
                        <i style="color:aqua;">Cetak Kartu Tanda Penduduk Sementara:  <a href="cetak_kartusementara.php?id=<?= $cetak['id_penduduk'] ?>"><i class="fa fa-download">Cetak</i></a></i>
                        <table class="table">
                        <?php 
                            $data = $koneksi->query("SELECT * FROM informasi a LEFT JOIN penduduk b ON b.id_penduduk=a.id_penduduk");
                            foreach($data as $i => $a):
                        ?>
                            <tr>
                                <td>nik</td>
                                <td> : </td>
                                <td><?= $a['nik'] ?></td>
                            </tr>
                            <tr>
                                <td>nama</td>
                                <td> : </td>
                                <td><?= $a['nama'] ?></td>
                            </tr>
                            <tr>
                                <td>tanggal pengambilan</td>
                                <td> : </td>
                                <td><?= tgl_indo($a['tanggal_pengambilan']) ?></td>
                            </tr>
                            <tr>
                                <td>tempat pengambilan</td>
                                <td> : </td>
                                <td><?= $a['tempat_pengambilan'] ?></td>
                            </tr>
                        <?php endforeach ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <br><br>