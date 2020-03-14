<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Berita</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-show.php') ?>

<h3>A. Data Berita</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Judul Berita</th>
    <td width="1%">:</td>
    <td><?php echo $data_berita[0]['judul'] ?></td>
  </tr>
  <tr>
    <th>Isi</th>
    <td>:</td>
    <td><textarea readonly><?php echo $data_berita[0]['isi'] ?></textarea></td>
  </tr>
  <tr>
    <th>Tanggal</th>
    <td>:</td>
    <td><?php echo $data_berita[0]['tanggal'] ?></td>
  </tr>
  <tr>
    <th>Gambar</th>
    <td>:</td>
    <td><img style="float:left;"src="res/<?php echo $data_berita[0]['gambar']; ?>" width="auto" height="auto"/></td>
  </tr>
</table>

<h3>B. Data Aplikasi</h3>
<table class="table table-striped">
    <tr>
      <th width="20%">Diinput Oleh</th>
      <td width="1%">:</td>
      <td><?php echo $data_berita[0]['nama_user'] ?></td>
    </tr>
  <tr>
    <th>Diinput</th>
    <td>:</td>
    <td><?php echo $data_berita[0]['created_at'] ?></td>
  </tr>
  <tr>
    <th>Diperbaharui</th>
    <td>:</td>
    <td><?php echo $data_berita[0]['updated_at'] ?></td>
  </tr>
</table>

<?php include('../_partials/bottom.php') ?>
