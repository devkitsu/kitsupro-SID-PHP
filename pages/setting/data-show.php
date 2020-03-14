<?php
include('../../config/koneksi.php');

// ambil dari url
$get_jenis = $_GET['jenis'];

// ambil dari database
$query = "SELECT * FROM setting WHERE jenis = '$get_jenis'";

$hasil = mysqli_query($db, $query);

$data_setting = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_setting[] = $row;
}
