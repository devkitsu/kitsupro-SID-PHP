<?php include('../_partials/top.php') ?>

<h1 class="page-header">Menu Setting</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-show.php') ?>

<form action="update.php" method="post">
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Isi</th>
    <td width="1%">:</td>
    <td><textarea name="isi" value="<?php echo $data_setting[0]['Isi'] ?>"><?php echo $data_setting[0]['Isi'] ?></textarea></td>
  </tr>
  <tr>
    <th>Jenis</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="jenis" required>
        <option value="<?php echo $data_setting[0]['jenis'] ?>" selected><?php echo $data_setting[0]['jenis'] ?></option>
      </select>
    </td>
  </tr>
</table>
<button type="submit" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-floppy-save"></i> Simpan
</button>
</form>

<?php include('../_partials/bottom.php') ?>
