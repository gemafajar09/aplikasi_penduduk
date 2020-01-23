
<section>
    <i><h3>Berita Acara</h3></i><hr>
    <div class="row">
    <?php 
        include_once "koneksi.php";
        $data = $koneksi->query("SELECT * FROM berita_acara");
        if(!isset($data)){ ?>
            <div class="alert alert-danger" role="alert">
                <h3>Berita Acara Masih Kosong</h3>
            </div>
        <?php }else{
        foreach($data as $berita){
    ?>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <img src="images/<?= $berita['foto'] ?>" width="300px" alt="">
                </div>
                <div class="card-body">
                    <h4><?= $berita['judul'] ?></h3>
                    <p><?= $berita['isi_berita'] ?></p>
                    <div>
                        <a href="?page=detail_berita&id=<?= $berita['id_berita'] ?>" class="btn btn-primary btn-block">Selanjutnya</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } } ?>
    </div>
</section>
<br><br>

