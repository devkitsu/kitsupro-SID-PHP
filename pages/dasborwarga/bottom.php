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
