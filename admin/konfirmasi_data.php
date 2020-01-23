<?php
    $id = $_GET['id'];
    $data = $koneksi->query("SELECT * FROM penduduk WHERE id_penduduk='$id'")->fetch_assoc();
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Informasi Pengambilan</h3>
            </div>
            <div class="card-body">
                <form action="aksi_konfirmasi.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Tanggal Pengambilan</label>
                        <input type="hidden" name="id" value="<?= $data['id_penduduk'] ?>">
                        <input type="hidden" name="id_user" value="<?= $data['id_user'] ?>">
                        <input type="text" class="form-control" name="nik" readonly value="<?= $data['nik'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" readonly name="nama" class="form-control" value="<?= $data['nama'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">No Informasi</label>
                        <input type="text" readonly name="no_info" class="form-control" value="IN<?= date('YHis') ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Pengambilan</label>
                        <input type="date" name="tanggal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tempat Pengambilan</label>
                        <input type="text" placeholder="Tempat Pengambilan" name="tempat" class="form-control">
                    </div>
                    <input type="submit" name="konfirmasi" class="btn btn-primary btn-block" value="KONFIRMASI">
                </form>
            </div>
        </div>
    </div>
</div>