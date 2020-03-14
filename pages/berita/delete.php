<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_berita = htmlspecialchars($_GET['id_berita']);
$id_user = htmlspecialchars($_GET['id_user']);

// cegah hapus data sendiri
if ($_SESSION['user']['id_user'] != $id_user) {
  echo "<script>window.alert('Tidak dapat menghapus data orang!'); window.location.href='../berita'</script>";
  exit;
}
$nm=$_GET['nm'];
    unlink("res/$nm");
// delete database
$query = "DELETE FROM berita WHERE id_berita = $id_berita";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Berhasil dihapus!'); window.location.href='../berita'</script>";
} else {
    echo mysqli_error($db);
  echo "<script>window.alert('Data user gagal dihapus!'); window.location.href='../berita'</script>";
  exit;
}
