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
// masukkan ke database

$query = "INSERT INTO setting (id_setting, jenis, isi)
VALUES ('', '$jenis', '$isi');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Setting berhasil'); window.location.href='../setting'</script>";
} else {
    echo mysqli_error($db);
  echo "<script>window.alert('Setting gagal!'); window.location.href='../setting/create.php'</script>";
}
