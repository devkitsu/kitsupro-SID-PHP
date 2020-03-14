<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Berita</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>#</th>
      <th>Judul</th>
      <th>Tanggal</th>
      <th>Gambar</th>
      <th>Dibuat Oleh</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data_berita as $berita) : ?>
    <tr>
      <td><?php echo $berita['id_berita'] ?></td>
      <td><?php echo $berita['judul'] ?></td>
      <td><?php echo $berita['tanggal'] ?></td>
      <td><?php echo $berita['gambar'] ?></td>
      <td><?php echo $berita['nama_user'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="show.php?id_berita=<?php echo $berita['id_berita'] ?>"><i class="glyphicon glyphicon-sunglasses"></i> Detail</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="edit.php?id_berita=<?php echo $berita['id_berita'] ?>&&id_user=<?php echo $berita['id_user'] ?>&&nm=<?php echo $berita['gambar'] ?>"><span class="glyphicon glyphicon-edit"></span> Ubah</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="delete.php?id_berita=<?php echo $berita['id_berita'] ?>&&id_user=<?php echo $berita['id_user'] ?>&&nm=<?php echo $berita['gambar'] ?>" onclick="return confirm('Yakin hapus data ini?')">
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
