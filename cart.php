<?php include 'includes/header.php';
session_start();
$connect = mysqli_connect("localhost", "root", "a", "project");
if (!$connect) {
  echo "Error: Unable to connect to MySQL." . PHP_EOL;
  echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
  echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
  exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($connect) . PHP_EOL;

?>

<?php include 'includes/header.php';
session_start();
$connect = mysqli_connect("localhost", "root", "a", "project");
if (!$connect) {
  echo "Error: Unable to connect to MySQL." . PHP_EOL;
  echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
  echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
  exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($connect) . PHP_EOL;

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

            <body>
              <h2>My Shopping Bag</h2>
              <div class="table-responsive">
              <table class="table table-bordered">
              <tr>
              <th width="40%">Product Name</th>
              <th width="10%">Quantity</th>

              <th width="5%">Action</th>
              </tr>
              <?php
              if(!empty($_SESSION["cart"]))
              {
              $total = 0;
              foreach($_SESSION["cart"] as $keys => $values)
              {
                ?>
                      <tr>
                      <td><?php echo $values["item_name"]; ?></td>
                      <td><?php echo $values["item_quantity"] ?></td>
                      
                      <td><a href="shop.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span class="text-danger">X</span></a></td>
                      </tr>
                      <?php
                $total = $total + ($values["item_quantity"] * $values["product_price"]);
              }
              ?>
                  <tr>

                  <td></td>
                  </tr>
                  <?php
              }
              ?>
              </table>
              </div>



    </div>






            <!--post style 2 start
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
post style 2 end-->
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
