<div class="row">
    <div class="col-12">
        <div class="card">
        <div class="card-header">
            <h3 align="center" class="card-title">Data Penduduk</h3>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
            <thead align="center">
            <tr>
                <th>NO</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Foto</th>
                <th style="width: 158px">Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                    $data = $koneksi->query("SELECT * FROM penduduk");
                    foreach($data as $i => $a):
                ?>
                <tr>
                    <td><?= $i+1 ?></td>
                    <td><?= $a['nik'] ?></td>
                    <td><?= $a['nama'] ?></td>
                    <td><?= $a['tempat_lahir'] ?></td>
                    <td><?= $a['tanggal_lahir'] ?></td>
                    <td><?= $a['jenis_kelamin'] ?></td>
                    <td><img src="../images/<?= $a['foto'] ?>" width="80px"></td>
                    <td>
                        <a href="?page=detail_dataPenduduk&id=<?= $a['id_penduduk'] ?>" class="btn btn-primary">Detail</a>
                        <a href="hapusDataPenduduk.php?id=<?= $a['id_penduduk'] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>