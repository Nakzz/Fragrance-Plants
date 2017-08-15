<?php include 'includes/header.php';

require_once 'db/mySQL_connect.php';
?>

<!-- <head> its in the php-->
  <meta name="description" content="">

  <title>Fragrance Plants & Flowers Inc</title>


</head>

<body>





  <div class="wrapper">


    <!--header start-->
    <?php include 'includes/navBar.php'; ?>
    <!--header end-->




    <!--body content start-->
    <section class="body-content">

      <!--intro post-->
      <div class="page-content ">
        <div class="container leaf_top">
          <div class="row ">

              <!--post style 2 start-->
              <div class="portfolio portfolio-with-title portfolio-masonry col-3 gutter">



                <div class="portfolio-item cat2 cat4">
                  <div class="thumb">
                    <img src="assets/img/Agave.jpg" alt="">
                    <div class="portfolio-hover">
                      <div class="action-btn">
                        <a href="portfolio-single.html"> <i class="icon-basic_link"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="portfolio-title">
                    <h4 class="center"><a href="portfolio-single.html">External link</a></h4>

                  </div>
                </div>








              </div>


              <!--post style 2 end-->
            </div>
          </div>
        </div>
        <!--intro post-->










      </section>
      <!--body content end-->

      <?php include 'includes/footer.php'; ?>

    </div>


    <!-- inject:js -->
    <script src="assets/vendor/modernizr/modernizr.js"></script>
    <script src="assets/vendor/jquery/jquery-1.10.2.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/bootstrap-validator/validator.min.js"></script>
    <script src="assets/vendor/breakpoint/breakpoint.js"></script>
    <script src="assets/vendor/count-to/jquery.countTo.js"></script>
    <script src="assets/vendor/countdown/jquery.countdown.js"></script>
    <script src="assets/vendor/easing/jquery.easing.1.3.js"></script>
    <script src="assets/vendor/easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/vendor/elasic-slider/jquery.eislideshow.js"></script>
    <script src="assets/vendor/flex-slider/jquery.flexslider-min.js"></script>
    <script src="assets/vendor/gmap/jquery.gmap.min.js"></script>
    <script src="assets/vendor/images-loaded/imagesloaded.js"></script>
    <script src="assets/vendor/isotope/jquery.isotope.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor/mailchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendor/menuzord/menuzord.js"></script>
    <script src="assets/vendor/nav/jquery.nav.js"></script>
    <script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/parallax-js/parallax.min.js"></script>
    <script src="assets/vendor/smooth/smooth.js"></script>
    <script src="assets/vendor/sticky/jquery.sticky.min.js"></script>
    <script src="assets/vendor/touchspin/touchspin.js"></script>
    <script src="assets/vendor/typist/typist.js"></script>
    <script src="assets/vendor/visible/visible.js"></script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/js/scripts.js"></script>



    <!-- endinject -->

    <script type="text/javascript">
    $(document).ready(function(){
      $('.tb-grid').masonry({
        // options
        itemSelector: '.item',
        percentPosition: true,
        columnWidth: '.box',
      });

      var $imgBoxes = $('.tb-grid').find('.box-img');
      $imgBoxes.each(function(index, item) {
        var $item = $(item), src = $item.data('src');
        if(src) {
          $item.css({
            backgroundImage: 'url(' + src + ')'
          })
        }
      });

      $('.box-img').magnificPopup({
        type:'image',
        gallery: {
          enabled: true
        },
      });
    });
    </script>
  </body>

  </html>
