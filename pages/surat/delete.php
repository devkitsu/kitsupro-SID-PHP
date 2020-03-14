<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_agenda = htmlspecialchars($_GET['id_agenda']);
$id_user = htmlspecialchars($_GET['id_user']);

// cegah hapus data sendiri
if ($_SESSION['user']['id_user'] != $id_user) {
  echo "<script>window.alert('Tidak dapat menghapus data orang!'); window.location.href='../agenda'</script>";
  exit;
}
$nm=$_GET['nm'];
    unlink("res/$nm");
// delete database
$query = "DELETE FROM agenda WHERE id_agenda = $id_agenda";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Berhasil dihapus!'); window.location.href='../agenda'</script>";
} else {
    echo mysqli_error($db);
  echo "<script>window.alert('Data user gagal dihapus!'); window.location.href='../agenda'</script>";
  exit;
}
