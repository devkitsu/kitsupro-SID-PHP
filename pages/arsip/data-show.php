<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_arsip = $_GET['id_arsip'];

// ambil dari database
$query = "SELECT arsip.*, user.*, surat.id_surat, surat.nama_surat, surat.berkas FROM arsip, user, surat
        WHERE arsip.id_user=user.id_user AND arsip.id_surat=surat.id_surat AND id_arsip = $get_id_arsip";

$hasil = mysqli_query($db, $query);

$data_arsip = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_arsip[] = $row;
}
