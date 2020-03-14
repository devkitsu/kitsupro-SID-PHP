<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Arsip</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>#</th>
      <th>Nama Surat</th>
      <th>Nomor Laci</th>
      <th>Lemari</th>
      <th>Keterangan</th>
      <th>Diarsipkan Oleh</th>
      <th>Tanggal Diarsipkan</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data_arsip as $arsip) : ?>
    <tr>
      <td><?php echo $arsip['id_arsip'] ?></td>
      <td><?php echo $arsip['nama_surat'] ?></td>
      <td><?php echo $arsip['no_laci'] ?></td>
      <td><?php echo $arsip['no_lemari'] ?></td>
      <td><?php echo $arsip['keterangan'] ?></td>
      <td><?php echo $arsip['nama_user'] ?></td>
      <td><?php echo $arsip['tanggal'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="show.php?id_arsip=<?php echo $arsip['id_arsip'] ?>"><i class="glyphicon glyphicon-sunglasses"></i> Detail</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="edit.php?id_arsip=<?php echo $arsip['id_arsip'] ?>&&id_user=<?php echo $arsip['id_user'] ?>"><span class="glyphicon glyphicon-edit"></span> Ubah</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="delete.php?id_arsip=<?php echo $arsip['id_arsip'] ?>&&id_user=<?php echo $arsip['id_user'] ?>" onclick="return confirm('Yakin hapus data ini?')">
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
