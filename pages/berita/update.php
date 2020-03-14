<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$judul = htmlspecialchars($_POST['judul']);
$isi = $_POST['isi'];
$id_berita = htmlspecialchars($_POST['id_berita']);
$id_user = htmlspecialchars($_POST['id_user']);
$nm=$_POST['nm'];
if ($_SESSION['user']['id_user'] != $id_user) {
  echo "<script>window.alert('Tidak dapat menghapus data orang!'); window.location.href='../berita'</script>";
  exit;
}

$uploaddir = 'res/';
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$uploadfile = $uploaddir . $fileName;
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
{
$sql="update berita set judul='$judul',isi='$isi',gambar='$fileName', updated_at=current_timestamp where id_berita='$id_berita'";
mysqli_query($db,$sql) or die ("SQL Error".mysqli_error($db));
unlink("res/$nm");
echo "<script>window.alert('Berhasil Edit Dengan Gambar!');window.location.href='../berita'</script>";
}else{
$sql="update berita set judul='$judul',isi='$isi',updated_at=current_timestamp where id_berita='$id_berita'";
mysqli_query($db,$sql) or die ("SQL Error".mysqli_error($db));
echo"<script>window.alert('Berhasil Edit Tanpa Gambar!');window.location.href='../berita'</script>";
}
