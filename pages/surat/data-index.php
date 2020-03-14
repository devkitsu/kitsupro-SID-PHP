<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT surat.*, user.* FROM surat, user where surat.id_user=user.id_user order by surat.id_surat";

$hasil = mysqli_query($db, $query);

$data_surat = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_surat[] = $row;
}
