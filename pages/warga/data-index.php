<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT *, TIMESTAMPDIFF(YEAR, `tanggal_lahir_warga`, CURDATE()) AS usia_warga FROM warga where status='Aktif'";

$hasil = mysqli_query($db, $query);

$data_warga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_warga[] = $row;
}
