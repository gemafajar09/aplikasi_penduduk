<?php
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);

if(isset($_POST['login'])){
    $user = $koneksi->query("SELECT * FROM user WHERE username='$username'");
    $cek = $user->fetch_assoc();
    if($cek['username']== $username){
        if($cek['password']== $password){
            session_start();
            $_SESSION['user'] = $cek;
            echo"<script>
                    alert('Selamat Datang');
                    window.location='index.php';
                </script>";
        }else{
            echo"<script>
            alert('Password Salah..!!!');
            window.location='index.php';
        </script>";
        }
    }else{
        echo"<script>
            alert('Username Salah..!!!');
            window.location='index.php';
        </script>";
    }
}else{
    echo"<script>
            alert('Username Dan Password Salah..!!!');
            window.location='index.php';
        </script>";
}
?>