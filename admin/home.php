<div class="container-fluid">
<div class="row">
    <?php
        $penduduk = $koneksi->query("SELECT * FROM penduduk");
        if($penduduk == TRUE){
        @$hasil = count($penduduk);
        }else{
            @$hasil = 0;
        }
        $login = $koneksi->query("SELECT * FROM user");
        if($login == TRUE){
            @$user = count($login);
        }else{
            @$user = 0;
        }
        $acara = $koneksi->query("SELECT * FROM berita_acara");
        if($acara == TRUE){
            @$berita = count($acara);
        }else{
            @$berita = 0;
        }
        $informasi = $koneksi->query("SELECT * FROM informasi");
        if($informasi == TRUE){
            @$in = count($informasi);
        }else{
            @$in = 0;
        }
    ?>
    <div class="col-lg-3 col-6">
    <div class="small-box bg-info">
        <div class="inner">
        <h3><?= $hasil ?></h3>

        <p>Jumlah Penduduk</p>
        </div>
        <div class="icon">
        <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer"><i class="fa fa-bullseye"></i></a>
    </div>
    </div>
    <div class="col-lg-3 col-6">
    <div class="small-box bg-success">
        <div class="inner">
        <h3><?= $user ?></h3>

        <p>Julmah User Terdaftar</p>
        </div>
        <div class="icon">
        <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer"> <i class="fa fa-bullseye"></i></a>
    </div>
    </div>
    <div class="col-lg-3 col-6">
    <div class="small-box bg-warning">
        <div class="inner">
        <h3><?= $berita ?></h3>

        <p>Jumlah Berita Acara</p>
        </div>
        <div class="icon">
        <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer"> <i class="fa fa-bullseye"></i></a>
    </div>
    </div>
    <div class="col-lg-3 col-6">
    <div class="small-box bg-danger">
        <div class="inner">
        <h3><?= $in ?></h3>

        <p>Informasi</p>
        </div>
        <div class="icon">
        <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer"> <i class="fa fa-bullseye"></i></a>
    </div>
    </div>
</div>
</div>