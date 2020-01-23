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
                   <h4>Form Pengisian Data</h3>
                </div>
                <div class="card-body">
                    <form action="simpanPengurusan.php" method="POST" enctype="multipart/form-data"> 
                        <div class="form-group">
                            <label for="">NIK <i style="color:red;">*</i></label>
                            <input type="text" class="form-control" name="nik" placeholder="NIK">
                            <input type="hidden" class="form-control" name="id" value="<?= $_SESSION['user']['id_user'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Nama <i style="color:red;">*</i></label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir <i style="color:red;">*</i></label>
                            <input type="text" class="form-control" name="tmpLahir" placeholder="Tempat Lahir">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal lahir <i style="color:red;">*</i></label>
                            <input type="date" class="form-control" name="tgl">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin <i style="color:red;">*</i></label>
                            <select name="jenis" id="" class="form-control">
                                <option value="">-PILIH JENIS KELAMIN-</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat <i style="color:red;">*</i></label>
                            <textarea name="alamat" id="" style="height: 150px;" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">RT / RW <i style="color:red;">*</i></label>
                            <input type="text" class="form-control" name="rt" placeholder="RT / RW">
                        </div>
                        <div class="form-group">
                            <label for="">Kelurahan <i style="color:red;">*</i></label>
                            <input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan">
                        </div>
                        <div class="form-group">
                            <label for="">Kecamatan <i style="color:red;">*</i></label>
                            <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan">
                        </div>
                        <div class="form-group">
                            <label for="">Agama <i style="color:red;">*</i></label>
                            <select class="form-control" name="agama">
                                <option value="">-PILIH AGAMA-</option>
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
                                <option value="">-PILIH STATUS PERKAWINAN-</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Kawin">Kawin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Pekerjaan <i style="color:red;">*</i></label>
                            <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
                        </div>
                        <div class="form-group">
                            <label for="">Kewarganegaraan <i style="color:red;">*</i></label>
                            <input type="text" class="form-control" name="negara" placeholder="Kewarganegaraan">
                        </div>
                        <div class="form-group">
                            <label for="">Golongan Darah <i style="color:red;">*</i></label>
                            <select class="form-control" name="golongan">
                                <option value="">-PILIH GOLONGAN DARAH-</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="O">O</option>
                                <option value="AB">AB</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Foto <i style="color:red;">*</i></label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                       
                        <div>
                            <button type="submit" name="simpan" class="btn btn-primary btn-block">Simpan</button>
                            <button type="reset" class="btn btn-warning btn-block">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>