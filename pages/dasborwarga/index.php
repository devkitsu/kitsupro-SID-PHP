<?php
session_start();
if (!isset($_SESSION['warga'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Website Kelurahan Kademangan</title>
    <meta name="keywords" content="" />
	<meta name="description" content="" />
    <!--
    Powerful Template
    http://www.templatemo.com/tm-390-powerful
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../css/templatemo_style.css" rel="stylesheet">

    <link href="../../css/circle.css" rel="stylesheet">
    <link href="../../css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../css/nivo-slider.css">
    <script src="../../js/modernizr.custom.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>

    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB4RYXgTatSsv2irhgwqfA8EyKP1CyK32k&callback=myMap"></script>
    <script>
    function myMap() {
        var latlng = {
            center: new google.maps.LatLng(-6.335051,106.669901);
            zoom:9,
        };
        var map = new google.maps.Map(document.getElementById("map"), latlng);
    }
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php include('data-index.php') ?>
    <header>
      <div id="templatemo_top" class="mainTop">
        <div class="container">
          <div class="row">
            <div class="hidden-xs hidden-sm col-md-6">
              <div class="mailme">
                <a href="#"><i class="fa fa-user"></i>  NIK: <?php echo $_SESSION['warga']['nik_warga']; ?> | <?php echo $_SESSION['warga']['nama_warga']; ?> </a>
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="socials">
                <ul>
<!--              <li><a href="#"><i class="fa fa-twitter soc"></i></a></li> -->
                  <li><a href="#"><i class="fa fa-facebook soc"></i></a></li>
<!--              <li><a href="#"><i class="fa fa-rss soc"></i></a></li> -->
<!--              <li><a href="#"><i class="fa fa-dribbble soc"></i></a></li> -->
                  <li><a href="#"><i class="fa fa-instagram soc"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- e/o mainTop -->

      	<div id="slider" class="nivoSlider">
        <?php foreach ($data_galeri as $galeri): ?>
            <a href="#"><img src="../../pages/galeri/res/<?php echo $galeri['nama_file'] ?>" alt="slide 1" /></a>
        <?php endforeach; ?>
    	</div>
    </header>

    <div class="mWrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-4">
            <div class="logo">
              <a href="#"><img src="images/logo.png" alt="LOGO"></a>
                <a href="#"> | WEBSITE WARGA KELURAHAN KADEMANGAN</a>
            </div>
          </div>
          <div class="col-sm-8 col-md-8">
            <nav class="mainMenu">
              <ul class="nav">
                <li><a href="#templatemo_top">Home</a></li>
                <li><a href="#templatemo_services">Layanan</a></li>
                <li><a href="#templatemo_about">Tentang</a></li>
                <li><a href="#templatemo_contact">Kontak</a></li>
                <li><a href="../login/logoutwarga.php">Logout</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
<?php
include("layanan.php");
include("berita.php");
include("tentang.php");
include("kontak.php");
include("../../config/footer.php");
?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="../../js/jquery-1.10.2.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery.cycle2.min.js"></script>
    <script src="../../js/jquery.cycle2.carousel.min.js"></script>
    <script src="../../js/jquery.nivo.slider.pack.js"></script>
    <script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>
    <script src="../../js/jquery.cookie.js"></script>
    <script type="text/javascript">
      $(function(){
          var default_view = 'grid';
          if($.cookie('view') !== 'undefined'){
              $.cookie('view', default_view, { expires: 7, path: '/' });
          }
          function get_grid(){
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0},function(){
                  $('.prod-cnt').removeClass('dbox-list');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
              });
          }
          function get_list(){
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.prod-cnt').animate({opacity:0},function(){
                  $('.prod-cnt').removeClass('dbox');
                  $('.prod-cnt').addClass('dbox-list');
                  $('.prod-cnt').stop().animate({opacity:1});
              });
          }
          if($.cookie('view') == 'list'){
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.prod-cnt').animate({opacity:0});
              $('.prod-cnt').removeClass('dbox');
              $('.prod-cnt').addClass('dbox-list');
              $('.prod-cnt').stop().animate({opacity:1});
          }

          if($.cookie('view') == 'grid'){
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0});
                  $('.prod-cnt').removeClass('dboxlist');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
          }

          $('#list').click(function(){
              $.cookie('view', 'list');
              get_list()
          });

          $('#grid').click(function(){
              $.cookie('view', 'grid');
              get_grid();
          });

          /* filter */
          $('.menuSwitch ul li').click(function(){
              var CategoryID = $(this).attr('category');
              $('.menuSwitch ul li').removeClass('cat-active');
              $(this).addClass('cat-active');

              $('.prod-cnt').each(function(){
                  if(($(this).hasClass(CategoryID)) == false){
                     $(this).css({'display':'none'});
                  };
              });
              $('.'+CategoryID).fadeIn();

          });
      });
    </script>

    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
          prevText: '',
          nextText: '',
          controlNav: false,
        });
    });
    </script>
    <script>
      $(document).ready(function(){

        // hide #back-top first
        $("#back-top").hide();

        // fade in #back-top
        $(function () {
          $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
              $('#back-top').fadeIn();
            } else {
              $('#back-top').fadeOut();
            }
          });

          // scroll body to 0px on click
          $('#back-top a').click(function () {
            $('body,html').animate({
              scrollTop: 0
            }, 800);
            return false;
          });
        });

      });
      </script>
      <script type="text/javascript">
      <!--
          function toggle_visibility(id) {
             var e = document.getElementById(id);
             if(e.style.display == 'block'){
                e.style.display = 'none';
                $('#togg').text('show footer');
            }
             else {
                e.style.display = 'block';
                $('#togg').text('hide footer');
            }
          }
      //-->
      </script>
      <script type="text/javascript" src="../../js/lib/jquery.mousewheel-3.0.6.pack.js"></script>

      <script type="text/javascript">
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
      </script>
      <script src="../../js/stickUp.min.js" type="text/javascript"></script>
      <script type="text/javascript">
        //initiating jQuery
        jQuery(function($) {
          $(document).ready( function() {
            //enabling stickUp on the '.navbar-wrapper' class
            $('.mWrapper').stickUp();
          });
        });
      </script>
</body>
</html>
