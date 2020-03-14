<div id="templatemo_portfolio" class="section2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="secHeader">
          <h1 class="text-center">Berita Desa</h1>
         </div>
        <div class="glView">
          <div class="switcher">
          <div class="imgSwitch">
            <div class="row">

                <?php include('data-berita.php') ?>
                <?php foreach ($data_berita as $berita): ?>
              <div class="col-xs-6 col-sm-3 col-md-3 dbox prod-cnt webdesign">
                <div class="itemCont">
                  <a href="berita-show.php?id_berita=<?php echo $berita['id_berita'] ?>">
                    <div class="thumb"><img class="img-responsive center-block" src="../../pages/berita/res/<?php echo $berita['gambar'] ?>" style="width:auto;height:200px;"></div>
                    <div class="itemInfo">
                      <h4><?php echo $berita['judul'] ?></h4>
                      <h6><?php echo $berita['tanggal'] ?></h6>
                      </div>
                  </a>
                  <button type="button" class="btn btn-primary goto">Lihat</button>
                </div>
              </div>
          <?php endforeach; ?>
            </div>
            <div class="">
                <?php for ($i=1; $i<=$pages ; $i++){ ?>
                    <a href="?halaman=<?php echo $i; ?>" class="btn btn-primary"><?php echo $i; ?></a>
                <?php } ?>
            </div></div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- e/o section2 -->
