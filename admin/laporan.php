<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Cetak Laporan Bulanan</h4>
            </div>
            <div class="card-body">
                <form action="cetak_bulanan.php" method="POST">
                    <div class="form-group">
                    <input type="month" name="bulan" class="form-control">
                    </div>
                    <div align="right">
                        <input type="submit" class="btn btn-success" value="CETAK">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Cetak Laporan Tahunan</h4>
            </div>
            <div class="card-body">
                <form action="cetak_tahunan.php" method="POST">
                    <div class="form-group">
                        <select name="tahun" class="form-control">
                            <option value="">-PILIH TAHUN-</option>
                            <?php
                            $sekarang = date('Y');
                            for($tahun = 2015; $tahun < $sekarang; $tahun++){
                            ?>
                            <option value="<?= $tahun+1 ?>"><?= $tahun+1 ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div align="right">
                        <input type="submit" class="btn btn-success" value="CETAK">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>