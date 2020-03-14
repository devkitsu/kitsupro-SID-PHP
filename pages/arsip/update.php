<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$laci = htmlspecialchars($_POST['laci']);
$lemari = htmlspecialchars($_POST['lemari']);
$keterangan = htmlspecialchars($_POST['keterangan']);
$id_arsip = htmlspecialchars($_POST['id_arsip']);
$id_user = htmlspecialchars($_POST['id_user']);
if ($_SESSION['user']['id_user'] != $id_user) {
  echo "<script>window.alert('Tidak dapat mengubah data orang lain!'); window.location.href='../arsip'</script>";
  exit;
}

$sql="update arsip set no_laci='$laci', no_lemari='$lemari', keterangan='$keterangan' where id_arsip='$id_arsip'";
$hasil = mysqli_query($db,$sql) or die ("SQL Error".mysqli_error($db));
if ($hasil)
{
echo "<script>window.alert('Berhasil Edit Data Arsip!');window.location.href='../arsip'</script>";
}else{
echo"<script>window.alert('Gagal Edit Data Arsip!');window.location.href='../arsip'</script>";
}
