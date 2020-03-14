<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$isi = $_POST['isi'];
$jenis = htmlspecialchars($_POST['jenis']);

$query = "UPDATE setting SET isi = '$isi' WHERE jenis = '$jenis'";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah Setting berhasil'); window.location.href='../setting'</script>";
} else {
  echo "<script>window.alert('Ubah Setting gagal!'); window.location.href='../setting'</script>";
}
