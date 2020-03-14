<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Warga</h1>
<?php include('_partials/menu.php') ?>
<button type="button" class="btn btn-info btn-sm" onclick="javascript:history.back()">
  <i class="fa fa-arrow-circle-left"></i> Kembali
</button>
<form action="store.php" method="post">
<h3>A. Data Pribadi</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">NIK</th>
    <td width="1%">:</td>
    <td><input type="text" placeholder="NIK 16 Digit" class="form-control" name="nik_warga" minlength="16" maxlength="16"  ></td>
  </tr>
  <tr>
    <th>Nama Warga</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_warga"  ></td>
  </tr>
  <tr>
    <th>Tempat Lahir</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="tempat_lahir_warga"  ></td>
  </tr>
  <tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
    <td>
    <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon">
        <span class="fa fa-table"></span>
      </span>
      <input type="text" class="form-control datepicker input-md" name="tanggal_lahir_warga" size="20" readonly="readonly" />
    </div>
    <span class="help-block">
    </span>
    </div>
    </div>
 </tr>
 <tr>
   <th>Kewarganegaraan</th>
   <td>:</td>
   <td><input type="text" class="form-control" name="negara_warga"  ></td>
 </tr><tr>
   <th width="20%">Agama</th>
   <td width="1%">:</td>
   <td>
     <select class="form-control selectlive" name="agama_warga"  >
       <option value="" selected disabled>- pilih -</option>
       <option value="Islam">Islam</option>
       <option value="Kristen">Kristen</option>
       <option value="Katholik">Katholik</option>
       <option value="Hindu">Hindu</option>
       <option value="Budha">Budha</option>
       <option value="Konghucu">Konghucu</option>
     </select>
   </td>
 </tr>
 <tr>
   <th>Pekerjaan</th>
   <td>:</td>
   <td><input type="text" class="form-control" name="pekerjaan_warga"></td>
 </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td>
      <div class="radio">
        <label class="radio"><input type="radio" name="jenis_kelamin_warga" value="L"> Laki - laki</label>
      </div>
      <div class="radio">
        <label class="radio"><input type="radio" name="jenis_kelamin_warga" value="P"> Perempuan</label>
  </div>
  </td>
  </tr>
  <tr>
    <th>Status Perkawinan</th>
    <td>:</td>
    <td>
      <div class="radio">
        <label class="radio"><input type="radio" name="status_perkawinan" value="Kawin">Kawin</label>
      </div>
      <div class="radio">
        <label class="radio"><input type="radio" name="status_perkawinan" value="Lajang">Lajang</label>
  </div>
  </td>
  </tr>
</table>
<h3>B. Data Alamat</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Alamat KTP</th>
    <td width="1%">:</td>
    <td><textarea class="form-control" name="alamat_ktp_warga"  ></textarea></td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>:</td>
    <td><textarea class="form-control" name="alamat_warga"  ></textarea></td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rt" style="width:50px;"></td>
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rw" style="width:50px;"></td>
  </tr>
</table>
<button type="submit" class="btn btn-success">
  <i class="fa fa-save"></i> Simpan
</button>
<button type="button" class="btn btn-danger" onclick="javascript:history.back();">
  <i class="fa fa-arrow-circle-left"></i> Batal
</button>
</form>
<?php include('../_partials/bottom.php') ?>
