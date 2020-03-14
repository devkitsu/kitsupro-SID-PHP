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

$id_user = $_SESSION['user']['id_user'];
$tgl=date('Y-m-d');
$uploaddir = 'res/';
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$uploadfile = $uploaddir . $fileName;
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
{
    $sql="INSERT INTO berita (id_berita, id_user, judul, isi, tanggal, gambar, created_at, updated_at)
            VALUES ('', '$id_user', '$judul', '$isi', '$tgl', '$fileName', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000')";
    mysqli_query($db, $sql) or die ("SQL Error".mysqli_error($db));
    echo "<script>window.alert('Tambah berita berhasil'); window.location.href='../berita'</script>";;
}else{
    echo "<script>window.alert('Tambah berita gagal!'); window.location.href='../berita/create.php'</script>";
}
