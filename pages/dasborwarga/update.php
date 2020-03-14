<?php
session_start();
if (!isset($_SESSION['warga'])) {
  // jika warga belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$alamat = $_POST['alamat'];
$pekerjaan = htmlspecialchars($_POST['pekerjaan']);
$password = md5(htmlspecialchars($_POST['password']));

$id_warga = htmlspecialchars($_POST['id_warga']);

if ($_POST['password'] == '') {
  // jika tidak ubah password

  $query = "UPDATE warga SET alamat_warga = '$alamat', pekerjaan_warga = '$pekerjaan', updated_at = CURRENT_TIMESTAMP WHERE id_warga = '$id_warga'";
} else {
  // jika ubah password

  $query = "UPDATE warga SET alamat_warga = '$alamat', pekerjaan_warga = '$pekerjaan', password = '$password', updated_at = CURRENT_TIMESTAMP WHERE id_warga = '$id_warga'";
}

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah data warga berhasil'); window.location.href='../dasborwarga/profil.php'</script>";
} else {
  echo "<script>window.alert('Ubah data warga gagal!'); window.location.href='../dasborwarga/profil.php'</script>";
}
