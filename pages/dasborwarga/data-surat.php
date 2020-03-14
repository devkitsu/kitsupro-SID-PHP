<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT surat.*, arsip.* FROM surat, arsip where surat.id_surat=arsip.id_surat order by surat.tanggal";

$hasil = mysqli_query($db, $query);

$data_surat = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_surat[] = $row;
}
