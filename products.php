<?php include 'includes/header.php';

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
            <div class="col-md-12">


  <div class="portfolio col-4 gutter ">


    <?php
    $query = "SELECT * FROM shop ORDER BY product_id ASC";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
      while($row = mysqli_fetch_array($result))
      {
        ?>

    <div class="portfolio-item cat1 cat3 ">
        <div class="thumb">

            <img src="<?php echo $row["image"]; ?>" alt="">
            <div class="portfolio-hover">
                <div class="action-btn">
                    <a href="<?php echo $row["image"]; ?>" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i>
                    </a>
                </div>
                <div class="portfolio-description">
                    <h4><a href="<?php echo $row["image"]; ?>" class="popup-link" title="lightbox view"><?php echo $row["name"]; ?></a></h4>
                    <p><a href="#">category</a>
                    </p>
                </div>
            </div>


        </div>
        <form method="post" action="shop.php?action=add&id=<?php echo $row["product_id"]; ?>">

          <input type="text" name="quantity" class="form-control" value="1">
          <input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
          <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
          <input type="submit" name="add" style="margin-top:5px;" class="btn btn-default" value="Add to Bag">
</form>
    </div>

    <?php
    }
    }
    ?>


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
