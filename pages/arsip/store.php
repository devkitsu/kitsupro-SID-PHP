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
$berkas = htmlspecialchars($_POST['berkas']);
$id_user = $_SESSION['user']['id_user'];
$tgl=date('Y-m-d');

$query = "SELECT * FROM arsip";
$hasil = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($hasil);

if ($berkas==$row['id_surat'])
{
    echo "<script>window.alert('Data berkas sudah ada, tidak bisa diarsipkan!'); window.location.href='../arsip/create.php'</script>";
}else{
    $sql="INSERT INTO arsip (id_arsip, id_user, id_surat, no_laci, no_lemari, keterangan, tanggal)
            VALUES ('', '$id_user','$berkas','$laci', '$lemari', '$keterangan', '$tgl')";
    mysqli_query($db, $sql) or die ("SQL Error".mysqli_error($db));
    echo "<script>window.alert('Tambah arsip berhasil'); window.location.href='../arsip'</script>";
}
