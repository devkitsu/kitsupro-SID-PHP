<div id="templatemo_contact" class="section5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="secHeader">
          <h1 class="text-center">Kontak Kami</h1>
                          <?php include('data-setting.php') ?>
          <p class="text-center"><small><?php echo $setting_kontak[0]['Isi'] ?> <br><br><a href="https://goo.gl/maps/gAKem7mvttQqpeg17" style="color:#0000FF;text-align:left" target="_blank">Lihat di Google Maps</a></small></p>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="templatemo_maps">
          <div id="map">
          </div>
        </div>
      </div>
    </div>
</div> -->

  <div class="container">
    <div class="row" align="center">
      <div class="col-md-6">
        <div class="addr">
            <ul>
              <li><i class="fa fa-map-marker"></i>Alamat Desa<br><?php echo $setting_alamat[0]['Isi'] ?></li>
          </ul>
      </div>
  </div>
  <div class="col-md-6">
    <div class="addr">
        <ul>
          <li><i class="fa fa-mobile-phone"></i>Nomor Telepon<br><?php echo $setting_tlp[0]['Isi'] ?></li>
      </ul>
  </div>
</div>
    </div>
  </div>

</div> <!-- eo section 5 -->
