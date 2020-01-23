<?php
session_start();
session_destroy();
echo"<script>
        alert('Akun Anda Telah Keluar.!!!');
        window.location='index.php';
    </script>";
?>