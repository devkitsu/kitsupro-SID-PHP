<?php
session_start();
include('../../config/koneksi.php');

// ambil data
$username_user = htmlspecialchars($_POST['username_user']);
$password_user = md5(htmlspecialchars($_POST['password_user']));

// periksa username dan password
$query = "SELECT * FROM user WHERE username_user = '$username_user' and password_user = '$password_user' ";
$hasil = mysqli_query($db, $query);
$data_user = mysqli_fetch_assoc($hasil);

// cek
if ($data_user != null) {
  // jika user dan password cocok
  $_SESSION['user'] = $data_user;
  header('Location: ../dasbor');
} else{
    $query2 = "SELECT * FROM warga WHERE nik_warga = '$username_user' and password = '$password_user' ";
    $hasil2 = mysqli_query($db, $query2);
    $data_warga = mysqli_fetch_assoc($hasil2);
    if ($data_warga != null) {
      // jika user dan password cocok
      $_SESSION['warga'] = $data_warga;
      header('Location: ../dasborwarga');
  } else {
  // jika user dan password tidak cocok
  echo "<script>window.alert('Username atau password salah'); window.location.href='../login'</script>";
}
}
