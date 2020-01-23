<div class="row">
    <div class="col-12">
        <div class="card">
        <div class="card-header">
            <h3>Informasi Pengambilan</h3>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
            <thead align="center">
            <tr>
                <th>NO</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tanggal Pengambilan</th>
                <th>Tempat Pengambilan</th>
                <th style="width:180px;">Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                    $data = $koneksi->query("SELECT * FROM informasi a LEFT JOIN penduduk b ON b.id_penduduk=a.id_penduduk");
                    foreach($data as $i => $a):
                ?>
                <tr>
                    <td><?= $i+1 ?></td>
                    <td><?= $a['nik'] ?></td>
                    <td><?= $a['nama'] ?></td>
                    <td><?= $a['tanggal_pengambilan'] ?></td>
                    <td><?= $a['tempat_pengambilan'] ?></td>
                    <td>
                        <button type="button" style="width: 70px" href="" onclick="ambilData(<?= $a['id_informasi'] ?>)" class="btn btn-primary">Edit</button>
                        <a href="hapus_informasi.php?id=<?= $a['id_informasi'] ?>&id_penduduk=<?= $a['id_penduduk'] ?>" class="btn btn-danger">Hapus</a>
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
<div class="modal" id="TampilModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Data</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <form action="update_informasi.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
            <label for="">Tanggal Pengambilan</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="Judul Berita">
            <input type="hidden" name="id" id="id_informasi">
        </div>
        <div class="form-group">
            <label for="">Tempat Pengambilan</label>
            <textarea name="tempat" id="tempat" class="form-control"></textarea>
        </div>
        <div>
            <input type="submit" class="btn btn-primary btn-block" name="update" value="UPDATE">
            <button type="button" class="btn btn-warning btn-block" data-dismiss="modal">BATAL</button>
        </div>
      </div>
      </form>

    </div>
  </div>
</div>
<script src="<?= $base_url ?>asset/vendor/jquery/jquery.min.js"></script>
<script>
    function ambilData(id_informasi){
        var informasi = id_informasi;
        $.ajax({
                type : 'POST',
                url  : 'edit_informasi.php',
                data : 'id_informasi='+ informasi,
                success : function(data){
                data = JSON.parse(data);
                document.getElementById("tanggal").value = data.tanggal_pengambilan;
                document.getElementById("tempat").value = data.tempat_pengambilan;
                document.getElementById("id_informasi").value = data.id_informasi;
                $('#TampilModal').modal('show');
            }
    });
    }
</script>