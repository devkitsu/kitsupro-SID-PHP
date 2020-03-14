<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM galeri";

$hasil = mysqli_query($db, $query);

$data_galeri = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_galeri[] = $row;
}

$query2 = "SELECT * FROM warga ";

$hasil2 = mysqli_query($db, $query2);

$data_warga = array();

while ($row2 = mysqli_fetch_assoc($hasil2)) {
  $data_warga[] = $row2;
}
