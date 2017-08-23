<?php include 'includes/header.php';
session_start();
include_once("config.php");


//current URL of the Page. cart_update.php redirects back to this URL
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
        <div class="container leaf_top">
          <div class="row ">
            <div class="heading-title border-short-bottom text-center ">



            </div>
            <div class="col-md-12">

              <div class="text-center">
                <ul class="portfolio-filter">
                  <li class="active"><a href="#" data-filter="*"> All</a>
                  </li>
                  <li><a href="#" data-filter=".test">Orchird</a>
                  </li>
                  <li><a href="#" data-filter=".test2">Plants</a>
                  </li>
                  <li><a href="#" data-filter=".test3">Indoor</a>
                  </li>
                  <li><a href="#" data-filter=".test4">Outdoor</a>
                  </li>
                  <li><a href="#" data-filter=".cat5">BNZ</a>
                  </li>
                </ul>
              </div>

              <div class="portfolio col-4 gutter ">





                <!-- Products List Start -->
                <?php
                $results = $mysqli->query("SELECT product_code, product_name, product_desc, product_img_name, product_category FROM products ORDER BY id ASC");
                if($results){
                $products_item = '<ul class="products">';
                //fetch results set as object and output HTML
                while($obj = $results->fetch_object())
                {
                $products_item .= <<<EOT
                	<li class="product">
                	<form method="post" action="cart_update.php">

                  <div class="portfolio-item {$obj->product_category}">
                      <div class="thumb">

                          <img src="{$obj->product_img_name}" alt="">
                          <div class="portfolio-hover">
                              <div class="action-btn">
                                  <a href="{$obj->product_img_name}" class="popup-link" title="{$obj->product_name}"> <i class="icon-basic_magnifier"></i>
                                  </a>
                              </div>
                              <div class="portfolio-description">
                                  <h4><a href="{$obj->product_img_name}" class="popup-link" title="{$obj->product_name}">{$obj->product_name}</a></h4>
                                  <p><a href="#">category</a>
                                  </p>
                              </div>
                          </div>
                          </div>
                	<fieldset>


</br> <div align="center">
                	<label>
                		<span>Quantity</span>
                		<input type="text" size="1" maxlength="2" name="product_qty" value="1" />
                    <input type="hidden" name="product_code" value="{$obj->product_code}" />
                  	<input type="hidden" name="type" value="add" />
                  	<input type="hidden" name="return_url" value="{$current_url}" />
                  	<button type="submit" class="add_to_cart">Add</button>
                	</label>
</div>
                	</fieldset>


                	</form>
                	</li>
EOT;
                }
                $products_item .= '</ul>';
                echo $products_item;
                }
                ?>
                <!-- Products List End -->







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
