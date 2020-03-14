<?php include('../_partials/top.php') ?>

<h1 class="page-header">Menu Setting</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-show.php') ?>

<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Jenis</th>
    <td width="1%">:</td>
    <td><?php echo $data_setting[0]['jenis'] ?></td>
  </tr>
  <tr>
    <th>Isi</th>
    <td>:</td>
    <td><textarea><?php echo $data_setting[0]['Isi'] ?></textarea></td>
  </tr>
</table>

<?php include('../_partials/bottom.php') ?>
