<?php
function is_active($page) {
  $uri = "$_SERVER[REQUEST_URI]";
  if (strpos($uri, $page)) {
    echo 'active';
  }
}
?>
<div class="nav navbar-sidebar">

<ul class="nav nav-sidebar">
  <li class="<?php is_active('dasbor'); ?>">
    <a href="../dasbor"><i class="fa fa-home"></i> Dashbord</a>
  </li>
</ul>
<ul class="nav nav-sidebar">
  <li class="<?php is_active('warga'); ?>">
    <a href="../warga"><i class="fa fa-user"></i> Data Penduduk</a>
  </li>
  <li class="<?php is_active('kartu-keluarga'); ?>">
    <a href="../kartu-keluarga"><i class="fa fa-user fa-group"></i> Data Kartu Keluarga</a>
  </li>
  <li class="<?php is_active('user'); ?>">
    <a href="../user"><i class="fa fa-shield"></i> Data User</a>
  </li>
  <li class="<?php is_active('galeri'); ?>">
    <a href="../galeri"><i class="fa fa-picture-o"></i> Galeri</a>
  </li>
</ul>

<div class="dropdown">
<ul class="nav nav-sidebar">
  <li class="<?php is_active('mutasi'); ?>">
    <a href="#list" data-toggle="collapse"><i class="fa fa-server fa-fw"></i> Pengarsipan</a>
      <!--<a href="../mutasi"><i class="glyphicon glyphicon-export"></i> Data Mutasi</a>-->
  </li>
    <div id="list" class="collapse">
      <div class="list-group">
        <a href="../arsip" class="list-group-item"><i class="fa fa-archive fa-fw"></i> Data Arsip</a>
        <a href="../surat" class="list-group-item"><i class="fa fa-file-o fa-fw"></i> Data Surat</a>
      </div>
    </div>

</ul>
</div>
<div class="dropdown">
<ul class="nav nav-sidebar">
  <li class="<?php is_active('peristiwa'); ?>">
    <a href="#peristiwa" data-toggle="collapse"><i class="fa fa-newspaper-o fa-fw"></i> Peristiwa</a>
      <!--<a href="../mutasi"><i class="glyphicon glyphicon-export"></i> Data Mutasi</a>-->
  </li>
    <div id="peristiwa" class="collapse">
      <div class="list-group">
        <a href="../berita" class="list-group-item"><i class="fa fa-newspaper-o fa-fw"></i> Data Berita & Agenda</a>
      </div>
    </div>

</ul>
</div>

<!--
<ul class="nav nav-sidebar">
  <li class="<?php is_active('galeri'); ?>">
    <a href="../galeri"><i class="glyphicon glyphicon-picture"></i> Galeri</a>
  </li>
</ul>
-->


</div>
