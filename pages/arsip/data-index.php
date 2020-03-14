<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT arsip.*, user.*, surat.* FROM arsip, user, surat where arsip.id_user=user.id_user
            AND arsip.id_surat=surat.id_surat order by arsip.id_arsip";

$hasil = mysqli_query($db, $query);

$data_arsip = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_arsip[] = $row;
}
