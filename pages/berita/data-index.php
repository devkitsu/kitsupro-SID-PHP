<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT berita.*, user.* FROM berita, user where berita.id_user=user.id_user order by berita.id_berita";

$hasil = mysqli_query($db, $query);

$data_berita = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_berita[] = $row;
}
