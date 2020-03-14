<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM warga W WHERE NOT EXISTS
                (select * from kartu_keluarga K where W.id_warga = K.id_kepala_keluarga)
                and NOT EXISTS (select * from warga_has_kartu_keluarga W2 where W.id_warga = W2.id_warga)";
/*SELECT warga.nik_warga, warga.nama_warga from warga INNER JOIN kartu_keluarga WHERE warga.nik_warga <> kartu_keluarga.id_kepala_keluarga

$query="SELECT warga.id_warga, warga.nik_warga, warga.nama_warga from warga INNER JOIN kartu_keluarga WHERE warga.id_warga <> kartu_keluarga.id_kepala_keluarga";
*/
$hasil = mysqli_query($db, $query);

$data_warga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_warga[] = $row;
}
