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
              <h3 class="text-uppercase">View Cart</h3>
            </div>
            <div class="cart-view-table-back">
              <form method="post" action="cart_update.php">
                <table width="80%"  cellpadding="6" cellspacing="0">
                  <thead><tr><th>Quantity</th><th>Name</th><th>Remove</th></tr></thead>
                  <tbody>
                    <?php
                    if(isset($_SESSION["cart_products"])) //check session var
                    {
                      $total = 0; //set initial total value
                      $b = 0; //var for zebra stripe table
                      foreach ($_SESSION["cart_products"] as $cart_itm)
                      {
                        //set variables to use in content below
                        $product_name = $cart_itm["product_name"];
                        $product_qty = $cart_itm["product_qty"];
                        $product_code = $cart_itm["product_code"];
                        $bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe
                        echo '<tr class="'.$bg_color.'">';
                        echo '<td><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
                        echo '<td>'.$product_name.'</td>';
                        echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /></td>';
                        echo '</tr>';
                      }
                    }
                    ?>


                    <div class="s-cart-btn pull-right">
                      <tr><br><td colspan="5"><span style="float:right;text-align: right;"><a href="cart.php"> </span>
                        <br><button class="btn btn-small btn-theme-color" type="submit">Update</button></a></td></tr>

                      </div>



                    </tbody>
                  </table>
                  <input type="hidden" name="return_url" value="<?php
                  $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
                  echo $current_url; ?>" />
                </form>
              </div>

              <!-- form start-->
              <div style="padding-top:5%" class="">

                <form id="checkout" class="" action="checkout_process.php" method="post">
                  <div class="alert alert-success">
  <strong>Success!</strong> Please contact Fragrance plants and flowers for payment.
</div>
                  <div class="row">
                    <div class="col-md-6 ">
                      <div class="form-group">
                        <input placeholder="Your name *" class=" form-control" type="text" name="name" value="<?= $name ?>" required autofocus>
                      <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                        <input placeholder="Your Email *" class=" form-control" type="text" name="email" value="<?= $email ?>" required >
                      <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                        <input placeholder="Your Phone Number *" class=" form-control" type="text" name="phone" value="<?= $phone ?>" required >
                      </div>
                      <div class="form-group">
                        <input placeholder="Your Address" class=" form-control" type="text" name="address" value="<?= $address ?>">
                      </div>
                    </div>

                    <div class="col-md-6 form-group">
                      <div class="form-group">
                        <textarea placeholder="Additional Instructions" maxlength="400" class=" form-control" type="text" name="message" value=""></textarea>
                      </div>
                      <div class="form-group full-width">
                        <button name="submit" class="btn btn-small btn-dark-solid " type="submit" id="contact-submit" data-submit="...Sending">Checkout</button>
                        <input type="hidden" name="return_url" value="<?php
                        $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
                        echo $current_url; ?>" />

                      </div>
                    </div>

                  </div>

                  <?php
                  if(isset($_SESSION["cart_products"])) //check session var
                  {
                    $total = 0; //set initial total value
                    $b = 1; //var for zebra stripe table
                    foreach ($_SESSION["cart_products"] as $cart_itm)
                    {
                      //set variables to use in content below
                      $product_name = $cart_itm["product_name"];
                      $product_qty = $cart_itm["product_qty"];

                      echo '<input id="Order '.$b.'" name="Order '.$b.'" type="hidden" value="'.$product_name. ' x' .$product_qty. '">';
                      $b++;
                    }
                  }
                  ?>


                </form>
              </div>


              <!-- form end-->




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
<script type="text/javascript">
$("#checkout").submit(function() {

  var url = "checkout_process.php"; // the script where you handle the form input.

  $.ajax({
         type: "POST",
         url: url,
         // serialize your form's elements.
         data: $("#checkout").serialize(),
         success: function(data)
         {
             // "something" is the class of your form wrapper
             $('.alert-success').html(data);
         }
       });
  // avoid to execute the actual submit of the form.
  return false;
});
</script>

</body>

</html>
