<div class="row">
    <div class="col-12">
        <div class="card">
        <div class="card-header">
            <div>
                <a href="#tambah_petugas" data-toggle="modal" class="btn btn-primary">Tambah Petugas</a>
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
            <thead align="center">
            <tr>
                <th>NO</th>
                <th>NO INDUK PEJABAT</th>
                <th>NAMA LENGKAP</th>
                <th style="width: 180px">Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                    $data = $koneksi->query("SELECT * FROM petugas");
                    foreach($data as $i => $a):
                ?>
                <tr>
                    <td><?= $i+1 ?></td>
                    <td><?= $a['no_induk_pejabat'] ?></td>
                    <td><?= $a['nama_petugas'] ?></td>
                    <td>
                        <button type="button" class="btn btn-primary" onclick="Editpetugas(<?= $a['id_petugas'] ?>)">Edit</button>
                        <a href="hapuspetugas.php?id=<?= $a['id_petugas'] ?>" class="btn btn-danger">Hapus</a>
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
<div class="modal" id="tambah_petugas">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <form action="simpan_petugas.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
            <label for="">NO INDUK PEJABAT</label>
            <input type="text" name="no" class="form-control" placeholder="NO induk Pejabat">
        </div>
        <div class="form-group">
            <label for="">NAMA LENGKAP</label>
            <input type="text" name="nama" class="form-control" placeholde="Nama LEngkap">
        <div class="form-group">
            <label for="">PASSWORD</label>
            <input type="password" name="password" class="form-control" placeholde="Password"> 
        </div>
        <div>
            <input type="submit" class="btn btn-primary btn-block" name="simpan" value="SIMPAN">
            <button type="button"  data-dismiss="modal" class="btn btn-warning btn-block">BATAL</button>
        </div>
      </div>
      </form>

    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal" id="petugas_edit">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Data</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <form action="update_petugas.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
            <label for="">NO INDUK PEJABAT</label>
            <input type="text" name="no" id="no" class="form-control" placeholder="Judul Berita">
            <input type="hidden" name="id" id="id" class="form-control" placeholder="Judul Berita">
        </div>
        <div class="form-group">
            <label for="">NAMA LENGKAP</label>
            <textarea name="nama" id="nama" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">PASSWORD</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <div>
            <input type="submit" class="btn btn-primary btn-block" name="update" value="UPDATE">
            <button type="button"  data-dismiss="modal" class="btn btn-warning btn-block">BATAL</button>
        </div>
      </div>
      </form>

    </div>
  </div>
</div>
<script src="<?= $base_url ?>asset/vendor/jquery/jquery.min.js"></script>
<script>
    function Editpetugas(id_petugas){
        var petugas = id_petugas;
        $.ajax({
                type : 'POST',
                url  : 'edit_petugas.php',
                data : 'id_petugas='+ petugas,
                success : function(data){
                data = JSON.parse(data);
                document.getElementById("no").value = data.no_induk_pejabat;
                document.getElementById("id").value = data.id_petugas;
                document.getElementById("nama").value = data.nama_petugas;
                document.getElementById("password").value = data.password;
                $('#petugas_edit').modal('show');
            }
    });
    }
</script>