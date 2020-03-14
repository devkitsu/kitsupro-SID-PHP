<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_galeri = htmlspecialchars($_GET['id_galeri']);
$nm = htmlspecialchars($_GET['nm']);

// delete database
$query = "DELETE FROM galeri WHERE id_galeri = $id_galeri";

$hasil = mysqli_query($db, $query);

// delete file
    unlink("res/$nm");

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Berhasil hapus foto!'); window.location.href='../galeri'</script>";
} else {
  echo "<script>window.alert('Foto gagal dihapus!'); window.location.href='../galeri'</script>";
}
