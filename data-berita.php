<?php
include('config/koneksi.php');
  $halaman = 4;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $query0 = "SELECT * FROM berita";
  $result = mysqli_query($db, $query0);
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);
// ambil dari database
$query = "SELECT * FROM berita limit $mulai, $halaman";
$hasil = mysqli_query($db, $query);
 $no =$mulai+1;
$data_berita = array();
while ($row = mysqli_fetch_assoc($hasil)) {
  $data_berita[] = $row;
}
