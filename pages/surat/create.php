<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Surat</h1>
<?php include('_partials/menu.php') ?>

<form action="store.php" method="post" enctype="multipart/form-data">
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nama Surat</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="judul" ></td>
  </tr>
  <tr>
    <th>Berkas</th>
    <td>:</td>
    <td><input type="file" class="form-control" name="userfile" ></td>
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
