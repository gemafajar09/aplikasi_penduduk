<?php
include "../koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
if(isset($_POST['login'])){
  $user = $koneksi->query("SELECT * FROM petugas WHERE no_induk_pejabat='$username'");
  $cek = $user->fetch_assoc();
  if($cek['no_induk_pejabat']== $username){
      if($cek['password']== $password){
          session_start();
          $_SESSION['admin'] = $cek;
          echo"<script>
                  alert('Selamat Datang');
                  window.location='index.php';
              </script>";
      }else{
          echo"<script>
          alert('Password Salah..!!!');
          window.location='login.php';
      </script>";
      }
  }else{
      echo"<script>
          alert('Username Salah..!!!');
          window.location='login.php';
      </script>";
  }
}else{
  echo"<script>
          alert('Username Dan Password Salah..!!!');
          window.location='login.php';
      </script>";
}
?>