<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM surat";

$hasil = mysqli_query($db, $query);

$data_arsip = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_arsip[] = $row;
}
