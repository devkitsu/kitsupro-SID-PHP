<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM setting";

$hasil = mysqli_query($db, $query);

$data_setting = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_setting[] = $row;
}
