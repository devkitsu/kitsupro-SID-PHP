<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Arsip</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-select.php') ?>
<form action="store.php" method="post" enctype="multipart/form-data">
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nomor Laci</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="laci" ></td>
  </tr>
  <tr>
    <th>Nomor Lemari</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="lemari" ></td>
  </tr>
  <tr>
    <th>Keterangan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="keterangan" ></td>
  </tr>
  <tr>
    <th>Berkas</th>
    <td>:</td>
    <td><select class="form-control selectlive" name="berkas" required>
      <option value="" selected>Pilih berkas</option>
      <?php foreach ($data_arsip as $arsip) : ?>
      <option value="<?php echo $arsip['id_surat'] ?>">
        <?php echo $arsip['nama_surat'] ?> (Nama berkas: <?php echo $arsip['berkas'] ?>)
      </option>
      <?php endforeach ?>
    </select></td>
  </tr>
</table>

<button type="submit" class="btn btn-success">
  <i class="fa fa-save"></i> Simpan
</button>
<button type="button" class="btn btn-danger" onclick="javascript:history.back();">
  <i class="fa fa-arrow-circle-left"></i> Batal
</button>
</form>

<?php include('../_partials/bottom.php') ?>
