<div class="row">
    <div class="col-12">
        <div class="card">
        <div class="card-header">
            <div>
                <a href="#tambah" data-toggle="modal" class="btn btn-primary">Tambah Berita Acara</a>
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
            <thead align="center">
            <tr>
                <th>NO</th>
                <th>Judul Berita</th>
                <th>Tanggal Keluar</th>
                <th>Isi Berita</th>
                <th>Foto</th>
                <th style="width:180px;">Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                    $data = $koneksi->query("SELECT * FROM berita_acara");
                    foreach($data as $i => $a):
                ?>
                <tr>
                    <td><?= $i+1 ?></td>
                    <td><?= $a['judul'] ?></td>
                    <td><?= $a['tanggal_terbit'] ?></td>
                    <td><?= $a['isi_berita'] ?></td>
                    <td><img src="../images/<?= $a['foto'] ?>" width="80px"></td>
                    <td>
                        <button type="button" style="width: 70px" href="" onclick="tampilData(<?= $a['id_berita'] ?>)" class="btn btn-primary">Edit</button>
                        <a href="hapusDataberita.php?id=<?= $a['id_berita'] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Input Data</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <form action="aksi_berita.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
            <label for="">Judul Berita</label>
            <input type="text" name="judul" class="form-control" placeholder="Judul Berita">
        </div>
        <div class="form-group">
            <label for="">Isi Berita</label>
            <textarea name="isi" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Foto</label>
            <input type="file" name="fotos" class="form-control">
        </div>
        <div>
            <input type="submit" class="btn btn-primary btn-block" name="simpan" value="SIMPAN">
            <input type="reset" class="btn btn-warning btn-block" value="BATAL">
        </div>
      </div>
      </form>

    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal" id="edit">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Data</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <form action="update_berita.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
            <label for="">Judul Berita</label>
            <input type="text" name="judul" id="judul" class="form-control" placeholder="Judul Berita">
        </div>
        <div class="form-group">
            <label for="">Isi Berita</label>
            <textarea name="isi" id="isi" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Foto <p style="color:red; font-size:10px">*Jika Ingin Ganti Foto Silahkan Upload Lagi Kalau Tidak biarkan Saja.</p></label>
            <input type="file" id="foto" name="fotos" class="form-control">
        </div>
        <div>
            <input type="submit" class="btn btn-primary btn-block" name="update" value="UPDATE">
            <input type="reset" class="btn btn-warning btn-block" value="BATAL">
        </div>
      </div>
      </form>

    </div>
  </div>
</div>
<script src="<?= $base_url ?>asset/vendor/jquery/jquery.min.js"></script>
<script>
    function tampilData(id_berita){
        var berita = id_berita;
        $.ajax({
                type : 'POST',
                url  : 'edit_berita.php',
                data : 'id_berita='+ berita,
                success : function(data){
                data = JSON.parse(data);
                document.getElementById("judul").value = data.judul;
                document.getElementById("isi").value = data.isi_berita;
                $('#edit').modal('show');
            }
    });
    }
</script>