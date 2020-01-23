<section>
    <div class="row">
        <div class="col-md-4">
            <div class="box">
                <box class="body">
                    
                    <div id="idx-calendar">
                        <div id="calendar-control">
                            <div id="monthNow">Januari 2014</div>
                            <div id="nextMonth"></div>
                            <div id="prevMonth"></div>
                        </div>
                        <div id="dayNames">
                            <ul>
                                <!-- <li>Minggu</li>
                                <li>Senin</li>
                                <li>Selasa</li>
                                <li>Rabu</li>
                                <li>Kamis</li>
                                <li>Jum'at</li>
                                <li>Sabtu</li> -->
                            </ul>
                        </div>
                        <div id="daysNum">
                            </div>
                        </div>
                        <hr><br>
                        <p>
                            <h4>
                                <i style="color:red;">Note :</i>
                            </h4>
                            <br>Isikan Data Berdasarkan Data Yang Ada Pada Kartu Tanda Penduduk Yang Anda Miliki.
                            
                        </p>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <canvas id="canvas" width="200" height="200" style="background-color:transparent"></canvas>
                        <link href="kalender.css" type="text/css" rel="stylesheet">
                        <?php 
                        include "jam.php";
                        include "kalender.php";
                    ?>
                </box>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   <h4>Form Edit Pengisian Data</h3>
                </div>
                <?php
                    $id = $_GET['id'];
                    $data = $koneksi->query("SELECT * FROM penduduk WHERE id_penduduk='$id'")->fetch_assoc();
                ?>
                <div class="card-body">
                    <form action="update_history.php" method="POST" enctype="multipart/form-data"> 
                        <div class="form-group">
                            <label for="">NIK <i style="color:red;">*</i></label>
                            <input type="text" class="form-control" name="nik" value="<?= $data['nik'] ?>">
                            <input type="hidden" class="form-control" name="id_penduduk" value="<?= $data['id_penduduk'] ?>">
                            <input type="hidden" class="form-control" name="id" value="<?= $_SESSION['user']['id_user'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Nama <i style="color:red;">*</i></label>
                            <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir <i style="color:red;">*</i></label>
                            <input type="text" class="form-control" name="tmpLahir" value="<?= $data['tempat_lahir'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal lahir <i style="color:red;">*</i></label>
                            <input type="date" class="form-control" name="tgl" value="<?= $data['tanggal_lahir'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin <i style="color:red;">*</i></label>
                            <select name="jenis" id="" class="form-control">
                                <option value="<?= $data['jenis_kelamin'] ?>"><?= $data['jenis_kelamin'] ?></option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat <i style="color:red;">*</i></label>
                            <textarea name="alamat" id="" style="height: 150px;" value="<?= $data['alamat'] ?>" class="form-control"><?= $data['alamat'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">RT / RW <i style="color:red;">*</i></label>
                            <input type="text" class="form-control" value="<?= $data['rt'] ?>" name="rt">
                        </div>
                        <div class="form-group">
                            <label for="">Kelurahan <i style="color:red;">*</i></label>
                            <input type="text" class="form-control" name="kelurahan" value="<?= $data['kelurahan'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Kecamatan <i style="color:red;">*</i></label>
                            <input type="text" class="form-control" name="kecamatan" value="<?= $data['kecamatan'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Agama <i style="color:red;">*</i></label>
                            <select class="form-control" name="agama">
                                <option value="<?= $data['agama'] ?>"><?= $data['agama'] ?></option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Khong Hu Cu">Khong Hu Cu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Status Perkawinan <i style="color:red;">*</i></label>
                            <select class="form-control" name="status">
                                <option value="<?= $data['status_perkawinan'] ?>"><?= $data['status_perkawinan'] ?></option>
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Kawin">Kawin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Pekerjaan <i style="color:red;">*</i></label>
                            <input type="text" class="form-control" name="pekerjaan" value="<?= $data['pekerjaan'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Kewarganegaraan <i style="color:red;">*</i></label>
                            <input type="text" class="form-control" name="negara" value="<?= $data['kewarganegaraan'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Golongan Darah <i style="color:red;">*</i></label>
                            <select class="form-control" name="golongan">
                                <option value="<?= $data['gol_darah'] ?>"><?= $data['gol_darah'] ?></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="O">O</option>
                                <option value="AB">AB</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Foto <i style="color:red;">*</i></label><br>
                            <img src="images/<?= $data['foto'] ?>" width="120px" height="160px">
                            <input type="hidden" name="fotoo" value="<?= $data['foto'] ?>">
                            <input type="file" class="form-control" name="foto">
                        </div>
                        <div>
                            <button type="submit" name="update" class="btn btn-primary btn-block">UPDATE</button>
                            <button type="reset" class="btn btn-warning btn-block">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>