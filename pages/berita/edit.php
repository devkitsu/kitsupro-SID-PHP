<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data User</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-show.php') ?>

<form action="update.php" method="post" enctype="multipart/form-data">
<h3>A. Data Berita</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Judul</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="judul" value="<?php echo $data_berita[0]['judul'] ?>" ></td>
  </tr>
  <tr>
    <th>Isi</th>
    <td>:</td>
    <td><textarea name="isi" value="<?php echo $data_berita[0]['isi'] ?>" ><?php echo $data_berita[0]['isi'] ?></textarea></td>
  </tr>
  <tr>
    <th>Gambar</th>
    <td>:</td>
    <td>
      <input type="file" name="userfile" value="">
      <small>Jika dikosongkan, maka gambar tidak berubah</small>
    </td>
  </tr>
</table>

<input type="hidden" name="id_user" value="<?php echo $data_berita[0]['id_user'] ?>">
<input type="hidden" name="id_berita" value="<?php echo $data_berita[0]['id_berita'] ?>">
<input type="hidden" name="nm" value="<?php echo $data_berita[0]['gambar'] ?>">

<button type="submit" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-floppy-save"></i> Simpan
</button>
</form>

<?php include('../_partials/bottom.php') ?>
