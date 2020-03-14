<?php include('../_partials/top.php') ?>

<h1 class="page-header">Setting Website</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>Nama Setting</th>
      <th>Isi</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data_setting as $setting) : ?>
    <tr>
      <td><?php echo $setting['jenis'] ?></td>
      <td><?php echo $setting['Isi'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="edit.php?jenis=<?php echo $setting['jenis'] ?>"><span class="glyphicon glyphicon-edit"></span> Ubah</a>
            </li>
          </ul>
        </div>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<?php include('../_partials/bottom.php') ?>
