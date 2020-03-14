<?php include('../_partials/top.php') ?>

<h1 class="page-header">Setting Website</h1>
<?php include('_partials/menu.php') ?>

<form action="store.php" method="post">
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Isi</th>
    <td width="1%">:</td>
    <td><textarea name="isi" ></textarea></td>
  </tr>
  <tr>
    <th>Jenis Setting</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="jenis">
        <option value="" selected disabled>- pilih -</option>
        <option value="Nomor_tpl">Nomor Kontak</option>
        <option value="Kontak">Detail Kontak</option>
        <option value="Tentang">Setting Tentang</option>
        <option value="Alamat">Setting Alamat</option>
      </select>
    </td>
  </tr>
</table>

<button type="submit" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-floppy-save"></i> Simpan
</button>
</form>

<?php include('../_partials/bottom.php') ?>
