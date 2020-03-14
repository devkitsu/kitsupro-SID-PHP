<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../dasbor">Aplikasi Penduduk Kelurahan Kademangan - ADMINISTRATOR</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <p class="navbar-text"><i class="fa fa-circle-o-notch fa-spin fa-1x fa-fw"></i> Hai, <?php echo $_SESSION['user']['nama_user'] ?></p>
        <li><a href="../setting/index.php"><i class="fa fa-cog fa-spin fa-1x fa-fw"></i> Setting</a></li>
        <li><a href="../login/logout.php"><i class="fa fa-sign-out fa-fw"></i> Keluar</a></li>
      </ul>
    </div>
  </div>
</nav>
