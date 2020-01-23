<?php

include_once "../koneksi.php";
$id = $_POST['id_informasi'];
$data = $koneksi->query("SELECT * FROM informasi WHERE id_informasi='$id'")->fetch_array();
echo json_encode($data);

?>