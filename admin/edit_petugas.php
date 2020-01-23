<?php

include_once "../koneksi.php";
$id = $_POST['id_petugas'];
$data = $koneksi->query("SELECT * FROM petugas WHERE id_petugas='$id'")->fetch_array();
echo json_encode($data);

?>