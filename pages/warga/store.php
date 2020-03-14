<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nik_warga = ($_POST['nik_warga']);
$pass = md5(substr($nik_warga,10));
$nama_warga = htmlspecialchars($_POST['nama_warga']);
$tempat_lahir_warga = htmlspecialchars($_POST['tempat_lahir_warga']);
$tanggal_lahir_warga = htmlspecialchars($_POST['tanggal_lahir_warga']);
$negara_warga = htmlspecialchars($_POST['negara_warga']);
$jenis_kelamin_warga = htmlspecialchars($_POST['jenis_kelamin_warga']);
$alamat_ktp_warga = $_POST['alamat_ktp_warga'];
$alamat_warga = $_POST['alamat_warga'];
$agama_warga = htmlspecialchars($_POST['agama_warga']);
$pekerjaan_warga = htmlspecialchars($_POST['pekerjaan_warga']);
$status_warga = htmlspecialchars($_POST['status_perkawinan']);
$rt = htmlspecialchars($_POST['rt']);
$rw = htmlspecialchars($_POST['rw']);

$id_user = $_SESSION['user']['id_user'];
//cek nik warga dari database apakah ada atau tidak

$query_cek="SELECT nik_warga from warga where nik_warga=$nik_warga";
$cek_nik=mysqli_num_rows(mysqli_query($db, $query_cek));
if($cek_nik>0){
	echo "<script>window.alert('Tambah warga gagal!, NIK $nik_warga sudah digunakan !'); history.back()</script>";
} else {
$query = "INSERT INTO warga (id_warga, nik_warga, password, nama_warga, tempat_lahir_warga, tanggal_lahir_warga, jenis_kelamin_warga,
            alamat_ktp_warga, alamat_warga, negara_warga, rt_warga, rw_warga, agama_warga, pekerjaan_warga, status_perkawinan,
            created_at, updated_at)
            VALUES (NULL, '$nik_warga', '$pass', '$nama_warga', '$tempat_lahir_warga', '$tanggal_lahir_warga', '$jenis_kelamin_warga',
            '$alamat_ktp_warga', '$alamat_warga', '$negara_warga', '$rt', '$rw', '$agama_warga', '$pekerjaan_warga', '$status_warga',
            CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000')";

$hasil = mysqli_query($db, $query);
	if ($hasil) {
  		echo "<script>window.alert('Tambah warga berhasil'); window.location.href='../warga/index.php'</script>";
	} else {
  		echo "<script>window.alert('Tambah warga gagal!'); history.back()</script>";
	}
}
