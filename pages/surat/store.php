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

$id_user = $_SESSION['user']['id_user'];
$tgl=date('Y-m-d');
$uploaddir = 'res/';
$file_type= $_FILES['userfile']['type'];
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$uploadfile = $uploaddir . $fileName;
if ($file_type=="application/pdf" || $file_type=="application/msword" || $file_type=="application/vnd.openxmlformats-officedocument.wordprocessingml.document") {
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
    {
        $sql="INSERT INTO surat (id_surat, id_user, tanggal, nama_surat, berkas)
            VALUES ('', '$id_user', '$tgl', '$judul', '$fileName')";
            mysqli_query($db, $sql) or die ("SQL Error".mysqli_error($db));
            echo "<script>window.alert('Tambah surat berhasil'); window.location.href='../surat'</script>";;
    }else{
        echo "<script>window.alert('Tambah surat gagal!'); window.location.href='../surat/create.php'</script>";
    }
} else{
 echo "<script>window.alert('Hanya Boleh upload PDF dan DOC / DOCX'); window.location.href='../surat/create.php'</script>";
}
