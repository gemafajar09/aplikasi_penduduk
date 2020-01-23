<?php

include_once "../koneksi.php";
$id = $_POST['id_berita'];
$data = $koneksi->query("SELECT * FROM berita_acara WHERE id_berita='$id'")->fetch_array();
echo json_encode($data);

?>