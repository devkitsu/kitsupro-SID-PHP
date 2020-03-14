<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Surat</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>#</th>
      <th>Nama Surat</th>
      <th>Tanggal</th>
      <th>Nama File</th>
      <th>Dibuat Oleh</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data_surat as $surat) : ?>
    <tr>
      <td><?php echo $surat['id_surat'] ?></td>
      <td><?php echo $surat['nama_surat'] ?></td>
      <td><?php echo $surat['tanggal'] ?></td>
      <td><?php echo $surat['berkas'] ?></td>
      <td><?php echo $surat['nama_user'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
              <li>
                  <a href="res/<?php echo $surat['berkas'] ?>" data-title="<?php echo $surat['nama_surat'] ?>" >
                    <i class="glyphicon glyphicon-zoom-in"></i>  Lihat
                </li>
            <li>
              <a href="delete.php?id_surat=<?php echo $surat['id_surat'] ?>&&id_user=<?php echo $surat['id_user'] ?>&&nm=<?php echo $surat['berkas'] ?>" onclick="return confirm('Yakin hapus data ini?')">
                <i class="glyphicon glyphicon-trash"></i> Hapus
              </a>
            </li>
          </ul>
        </div>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<?php include('../_partials/bottom.php') ?>
