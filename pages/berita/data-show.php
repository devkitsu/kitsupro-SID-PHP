<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_berita = $_GET['id_berita'];

// ambil dari database
$query = "SELECT berita.*, user.* FROM berita, user WHERE berita.id_user=user.id_user AND id_berita = $get_id_berita";

$hasil = mysqli_query($db, $query);

$data_berita = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_berita[] = $row;
}
