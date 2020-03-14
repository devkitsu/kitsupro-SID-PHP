
<?php
include("top.php");
include("../../config/koneksi.php");
$id_warga=$_SESSION['warga']['id_warga'] ;
// ambil dari database
$query = "SELECT * FROM warga where id_warga='$id_warga'";

$hasil = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($hasil);
include("data-surat.php")
?>
<div id="templatemo_services" class="section1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="secHeader">
          <h1 class="text-center">Unduh Dokumen</h1>
          </div>
        <div class="row">
            <?php foreach ($data_surat as $surat) : ?>
          <div class="col-xs-6 col-sm-6 col-md-3">
            <div class="blok text-center">
              <div class="hexagon-a">
                <a class="hlinktop" href="../../pages/surat/res/<?php echo $surat['berkas'] ?>" data-title="<?php echo $surat['nama_surat'] ?>">
                  <div class="hexa-a">
                    <div class="hcontainer-a">
                      <div class="vertical-align-a">
                        <span class="texts-a"><i class="fa fa-file"></i></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="hexagon">
                <a class="hlinkbott" href="#">
                  <div class="hexa">
                    <div class="hcontainer">
                      <div class="vertical-align">
                        <span class="texts"></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <h4><?php echo $surat['nama_surat'] ?></h4>
              <p><small><?php echo $surat['keterangan'] ?></small></p>
            </div>
          </div>
          <?php endforeach ?>
      </div>
      </div>
    </div>
  </div>
</div> <!-- e/o section1 -->

<?php
include("../../config/footer.php");
include("bottom.php");
?>
