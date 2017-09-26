<?php include 'includes/header.php';
session_start();
include_once("db/config.php");
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

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
        <div class="container">
          <div class="row ">
            <div class="heading-title border-short-bottom text-center ">
              <h3 class="text-uppercase">Order Complete!</h3>
            </div>

            <div class="center">
              <h4>Thank you for submitting the order! <br>
                Please contact Fragrance plants and flowers for payment options.</h4>
            </div>

            <div class="row page-content">
                <div class="col-md-4">
                    <div class="featured-item text-center">
                        <div class="icon">
                            <i class="icon-map"></i>
                        </div>
                        <div class="title text-uppercase">
                            <h4>location</h4>
                        </div>
                        <div class="desc">
                             135 w. 28 st. (btw. 6 & 7 ave)
                            <br/>New York NY 10001
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featured-item text-center">
                        <div class="icon">
                            <i class="icon-mobile"></i>
                        </div>
                        <div class="title text-uppercase">
                            <h4>call us</h4>
                        </div>
                        <div class="desc center">
                            We are open </br>Mon- Sat 7:00AM- 7:00PM</br>
                            Sun  9:00AM- 3:00PM
                            <br/>Phone: (212) 564-2103
                            <br/>Fax: (212) 564-2313
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featured-item text-center">
                        <div class="icon">
                            <i class="icon-envelope"></i>
                        </div>
                        <div class="title text-uppercase">
                            <h4>email us</h4>
                        </div>
                        <div class="desc">
                            get support via email
                            <br/>fragranceplants@gmail.com
                        </div>
                    </div>
                </div>
            </div>






            </div>
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
