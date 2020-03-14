<?php
include('config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM setting where jenis='Kontak'";
$hasil = mysqli_query($db, $query);
$setting_kontak = array();
while ($row = mysqli_fetch_assoc($hasil)) {
  $setting_kontak[] = $row;
}

$query = "SELECT * FROM setting where jenis='Tentang'";
$hasil = mysqli_query($db, $query);
$setting_tentang = array();
while ($row = mysqli_fetch_assoc($hasil)) {
  $setting_tentang[] = $row;
}

$query = "SELECT * FROM setting where jenis='Alamat'";
$hasil = mysqli_query($db, $query);
$setting_alamat = array();
while ($row = mysqli_fetch_assoc($hasil)) {
  $setting_alamat[] = $row;
}

$query = "SELECT * FROM setting where jenis='Nomor_tpl'";
$hasil = mysqli_query($db, $query);
$setting_tlp = array();
while ($row = mysqli_fetch_assoc($hasil)) {
  $setting_tlp[] = $row;
}
