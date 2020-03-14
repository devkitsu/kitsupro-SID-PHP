<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Arsip</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-show.php') ?>

<form action="update.php" method="post">
<h3>A. Data arsip</h3>
<table class="table table-striped table-middle">
<tr>
  <th  width="20%">Nama Surat</th>
  <td width="1%">:</td>
  <td><?php echo $data_arsip[0]['nama_surat'] ?></td>
</tr>
<tr>
  <th>Nama File</th>
  <td>:</td>
  <td><?php echo $data_arsip[0]['berkas'] ?></td>
</tr>
  <tr>
    <th>Nomor Laci</th>
    <td >:</td>
    <td><input type="text" class="form-control" name="laci" value="<?php echo $data_arsip[0]['no_laci'] ?>" ></td>
  </tr>
  <tr>
    <th>Nomor Lemari</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="lemari" value="<?php echo $data_arsip[0]['no_lemari'] ?>" ></td>
  </tr>
  <tr>
    <th>Keterangan</th>
    <td>:</td>
    <td>
      <input type="text" class="form-control" name="keterangan" value="<?php echo $data_arsip[0]['keterangan'] ?>" >
    </td>
  </tr>
</table>

<input type="hidden" name="id_user" value="<?php echo $data_arsip[0]['id_user'] ?>">
<input type="hidden" name="id_arsip" value="<?php echo $data_arsip[0]['id_arsip'] ?>">

<button type="submit" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-floppy-save"></i> Simpan
</button>
</form>

<?php include('../_partials/bottom.php') ?>
