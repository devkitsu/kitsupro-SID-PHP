<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_arsip = htmlspecialchars($_GET['id_arsip']);
$id_user = htmlspecialchars($_GET['id_user']);

// cegah hapus data sendiri
if ($_SESSION['user']['id_user'] != $id_user) {
  echo "<script>window.alert('Tidak dapat menghapus data orang lain!'); window.location.href='../arsip'</script>";
  exit;
}
// delete database
$query = "DELETE FROM arsip WHERE id_arsip = $id_arsip";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Berhasil dihapus!'); window.location.href='../arsip'</script>";
} else {
    echo mysqli_error($db);
  echo "<script>window.alert('Data user gagal dihapus!'); window.location.href='../arsip'</script>";
  exit;
}
