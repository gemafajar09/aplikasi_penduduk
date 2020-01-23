<?php
include "koneksi.php";

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$telpon = $_POST['telpon'];

$data = $koneksi->query("SELECT * FROM user WHERE username='$username'");
$hasil = $data->fetch_assoc();

if(isset($_POST['register'])){
    if($hasil['username']== $username){
        echo"<script>
            alert('Username Telah Ada..!!!');
            window.location='index.php';
        </script>";
    }else{
        $koneksi->query("INSERT INTO `user`(`nama`, `username`, `password`, `email`, `telpon`) VALUES ('$nama','$username','$password','$email','$telpon')");
        
        echo"<script>
                alert('Registrasi Berhasil..!!!');
                window.location='index.php';
            </script>";
    }
}else{
    echo"<script>
            alert('Registrasi Gagal..!!!');
            window.location='index.php';
        </script>";
}
