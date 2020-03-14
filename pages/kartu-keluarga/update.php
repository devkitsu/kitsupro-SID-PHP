<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nomor_keluarga = htmlspecialchars($_POST['nomor_keluarga']);
$id_kepala_keluarga = htmlspecialchars($_POST['id_kepala_keluarga']);

$alamat_keluarga = htmlspecialchars($_POST['alamat_keluarga']);
$id_keluarga = htmlspecialchars($_POST['id_keluarga']);

$id_user = $_SESSION['user']['id_user'];

//cek NIK yang sudah terdaftar

$query_cek_kk="SELECT nomor_kk from kartu_keluarga where nomor_kk=$nomor_keluarga";
$query_cek_nik="SELECT id_kepala_keluarga from kartu_keluarga WHERE id_kepala_keluarga=$id_kepala_keluarga";

$cek_kk=mysqli_num_rows(mysqli_query($db, $query_cek_kk));
$cek_nik=mysqli_num_rows(mysqli_query($db, $query_cek_nik));
//echo $cek_kk."<br>";
//echo $cek_nik;
/*
if($cek_kk>0){
	echo "<script>window.alert('No Kartu Keluarga $nomor_keluarga sudah terdaftar !');</script>";
*/
	# cek NIK terdaftar di no kk yang belum terdaftar
/*	if ($cek_nik>0){
		echo "<script>window.alert('NIK sudah terdaftar di Kartu Keluarga lain !'); window.history.back()</script>";
		} else {
		echo "<script>window.history.back()</script>";
	}
/*
} else {

	# cek NIK terdaftar di no kk yang belum terdaftar
	if ($cek_nik>0){
		echo "<script>window.alert('NIK sudah terdaftar !'); window.history.back() </script>";
		} else {
		//echo "NIK belum digunakan :)";
		echo "tinggal save database";
	/*
	}

}
*/

// masukkan ke database

$query = "UPDATE kartu_keluarga SET nomor_kk = '$nomor_keluarga', id_kepala_keluarga = '$id_kepala_keluarga',
        alamat_keluarga = '$alamat_keluarga', id_user = '$id_user', updated_at = CURRENT_TIMESTAMP
        WHERE kartu_keluarga.id_keluarga = $id_keluarga";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah kartu keluarga berhasil'); window.location.href='../kartu-keluarga/'</script>";
} else {
  //echo "<script>window.alert('Ubah kartu keluarga gagal!'); window.location.href='../kartu-keluarga/'</script>";
}
