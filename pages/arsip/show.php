<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Arsip</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-show.php') ?>

<h3>A. Data Berkas</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nama Berkas</th>
    <td width="1%">:</td>
    <td><?php echo $data_arsip[0]['nama_surat'] ?></td>
  </tr>
  <tr>
    <th>Nama File</th>
    <td>:</td>
    <td><?php echo $data_arsip[0]['berkas'] ?></td>
  </tr>
  <tr>
    <th>Keterangan</th>
    <td>:</td>
    <td><?php echo $data_arsip[0]['keterangan'] ?></td>
  </tr>
</table>

<h3>B. Data Arsip</h3>
<table class="table table-striped">
    <tr>
      <th width="20%">Diarsipkan Oleh</th>
      <td width="1%">:</td>
      <td><?php echo $data_arsip[0]['nama_user'] ?></td>
    </tr>
    <tr>
      <th>Tanggal</th>
      <td>:</td>
      <td><?php echo $data_arsip[0]['tanggal'] ?></td>
    </tr>
    <tr>
      <th>Nomor Laci</th>
      <td>:</td>
      <td><?php echo $data_arsip[0]['no_laci'] ?></td>
    </tr>
    <tr>
      <th>Nomor Lemari</th>
      <td>:</td>
      <td><?php echo $data_arsip[0]['no_lemari'] ?></td>
    </tr>
</table>

<?php include('../_partials/bottom.php') ?>
