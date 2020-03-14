<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nama_warga = htmlspecialchars($_POST['nama_warga']);
$tempat_lahir_warga = htmlspecialchars($_POST['tempat_lahir_warga']);
$tanggal_lahir_warga = htmlspecialchars($_POST['tanggal_lahir_warga']);
$jenis_kelamin_warga = htmlspecialchars($_POST['jenis_kelamin_warga']);

$alamat_ktp_warga = $_POST['alamat_ktp_warga'];
$alamat_warga = $_POST['alamat_warga'];
$negara_warga = htmlspecialchars($_POST['negara_warga']);
$rt_warga = htmlspecialchars($_POST['rt_warga']);
$rw_warga = htmlspecialchars($_POST['rw_warga']);

$agama_warga = htmlspecialchars($_POST['agama_warga']);
$pekerjaan_warga = htmlspecialchars($_POST['pekerjaan_warga']);
# $status_perkawinan_warga = htmlspecialchars($_POST['status_perkawinan_warga']);
$status_perkawinan = htmlspecialchars($_POST['status_perkawinan']);
$status = htmlspecialchars($_POST['status']);

$id_warga = htmlspecialchars($_POST['id_warga']);

$id_user = $_SESSION['user']['id_user'];

// update database

$query = "UPDATE warga SET nama_warga = '$nama_warga', tempat_lahir_warga = '$tempat_lahir_warga',
        tanggal_lahir_warga = '$tanggal_lahir_warga', jenis_kelamin_warga = '$jenis_kelamin_warga',
        alamat_ktp_warga = '$alamat_ktp_warga', alamat_warga = '$alamat_warga', negara_warga = '$negara_warga',
        rt_warga = '$rt_warga', rw_warga = '$rw_warga', agama_warga = '$agama_warga', pekerjaan_warga = '$pekerjaan_warga',
        status_perkawinan= '$status_perkawinan', status='$status', updated_at = CURRENT_TIMESTAMP WHERE warga.id_warga = $id_warga;";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah data warga berhasil'); window.location.href='../warga'</script>";
} else {
  echo "<script>window.alert('Ubah data warga gagal!'); window.location.href='../warga'</script>";
}
