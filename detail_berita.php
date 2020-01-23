<?php 
$id = $_GET['id'];
$a = $koneksi->query("SELECT * FROM berita_acara WHERE id_berita='$id'")->fetch_array();
?>
<section>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <img src="images/<?= $a['foto'] ?>" width="320px" height="280px">
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3><?= $a['judul'] ?></h3>
                    <p><?= tgl_indo($a['tanggal_terbit']) ?></p>
                </div>
                <div class="card-body">
                    <h6><?= $a['isi_berita'] ?></h6>
                </div>
            </div>
            <br><br><br><br><br>
            <div align="right">
                <a href="index.php" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</section>  
<br><br><br>