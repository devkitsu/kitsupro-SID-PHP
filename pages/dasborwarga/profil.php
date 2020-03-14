
<?php
include("top.php");
include("../../config/koneksi.php");
$id_warga=$_SESSION['warga']['id_warga'] ;
// ambil dari database
$query = "SELECT * FROM warga where id_warga='$id_warga'";

$hasil = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($hasil);
?>
<hr />
<form action="update.php" method="post">
<h3>A. Data Profil Warga</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nama Lengkap</th>
    <td width="1%">:</td>
    <td><?php echo $row['nama_warga'] ?></td>
  </tr>
  <tr>
    <th>NIK</th>
    <td>:</td>
    <td><?php echo $row['nik_warga'] ?></td>
  </tr>
  <tr>
    <th>Password</th>
    <td>:</td>
    <td>
      <input type="password" class="form-control" name="password">
      <small>Jika dikosongkan, maka password tidak berubah</small>
    </td>
  </tr>
  <tr>
    <th>Tempat / Tanggal Lahir</th>
    <td>:</td>
        <td><?php echo $row['tempat_lahir_warga'] ?> / <?php echo $row['tanggal_lahir_warga'] ?></td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>:</td>
        <td><textarea name="alamat" value="<?php echo $row['alamat_warga'] ?>"><?php echo $row['alamat_warga'] ?></textarea></td>
  </tr>
  <tr>
    <th>Pekerjaan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="pekerjaan" value="<?php echo $row['pekerjaan_warga'] ?>"></td>
  </tr>
</table>
<input type="hidden" name="id_warga" value="<?php echo $row['id_warga'] ?>">
<button type="submit" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-floppy-save"></i> Simpan
</button>
</form><br>

<h3>B. Data Kartu Keluarga</h3>
<table class="table table-striped table-middle">
    <?php
    // ambil dari database
    $query = "SELECT * FROM kartu_keluarga where id_kepala_keluarga='$id_warga'";
    $hasil = mysqli_query($db, $query);
    if(mysqli_num_rows($hasil) > 0){
        $query1 = "SELECT * FROM kartu_keluarga where id_kepala_keluarga='$id_warga'";
        $hasil1 = mysqli_query($db, $query1);
        $row2 = mysqli_fetch_array($hasil1);
    } else {
        $query2 = "SELECT kartu_keluarga.id_keluarga, kartu_keluarga.nomor_kk, kartu_keluarga.status,
                warga_has_kartu_keluarga.id_warga, warga_has_kartu_keluarga.status
                FROM kartu_keluarga, warga_has_kartu_keluarga
                WHERE warga_has_kartu_keluarga.id_keluarga=kartu_keluarga.id_keluarga
                AND  warga_has_kartu_keluarga.id_warga='$id_warga'";
        $hasil2 = mysqli_query($db, $query2);
        if (!$hasil2) {
            printf("Error: %s\n", mysqli_error($db));
            exit();
        } else {
        $row2 = mysqli_fetch_array($hasil2);
        }
    }
    ?>
  <tr>
    <th width="20%">Nomor KK</th>
    <td width="1%">:</td>
    <td><?php echo $row2['nomor_kk'] ?></td>
  </tr>
  <tr>
    <th>Status</th>
    <td>:</td>
    <td><?php echo $row2['status'] ?></td>
  </tr>
</table><hr />

<?php
include("../../config/footer.php");
include("bottom.php");
?>
