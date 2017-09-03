<?php include 'includes/header.php';
session_start();
include_once("db/config.php");?>
<!-- <head> its in the php-->
<meta name="description" content="">


  <title>Contact Us</title>


</head>

<body>

  <!--  preloader start -->
  <div id="tb-preloader">
    <div class="tb-preloader-wave"></div>
  </div>
  <!-- preloader end -->



  <div class="wrapper">

    <!--page title start-->
    <section class="page-title background-title dark banner-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-uppercase shadow">Contact us </h2>

                </div>
            </div>
        </div>
    </section>
    <!--page title end-->


    <!--body content start-->
    <section class="body-content">
        <div class="page-content">

            <div class="container">

                <div class="heading-title-alt border-short-bottom text-center ">
                    <h3 class="text-uppercase">feel free to drop us a line</h3>
                    <div class="half-txt">Thank you for visiting with us. We look forward to providing you with beautiful plants.</div>
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

                <div class="row">

                    <div class="col-md-10 col-md-offset-1">
                        <form class="contact-comments js-Mailer" method="post">
                            <div class="row">

                                <div class="col-md-6 ">

                                    <div class="form-group">
                                        <!-- Name -->
                                        <input type="text" name="name" class=" form-control" placeholder="Name *" maxlength="100" required data-error="You must enter name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <!-- Email -->
                                        <input type="email" name="email" class=" form-control" placeholder="Email *" maxlength="100" required data-error="Invalid email address!">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <!-- Subject -->
                                        <input type="text" name="subject" class=" form-control" placeholder="Subject" maxlength="100">
                                    </div>
                                </div>

                                <div class="col-md-6 form-group">
                                    <div class="form-group">
                                        <!-- Comment -->
                                        <textarea name="comments" class="cmnt-text form-control" placeholder="Comments" maxlength="400"></textarea>
                                    </div>
                                    <div class="form-group full-width">
                                        <button type="submit" class="btn btn-small btn-dark-solid ">Send Message</button>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- Google Map start-->
 <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.6950653701506!2d-73.9942373830013!3d40.74673488104389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259af81377907%3A0x3a81a644554e31aa!2sFragrance+Plants+%26+Flowers+Inc!5e0!3m2!1sen!2sus!4v1504397172885"  height="600" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                <!--  Google Map End-->
    </section>
    <!--body content end-->


    <!--header start-->
    <?php include 'includes/navBar.php'; ?>
    <!--header end-->


    <!--hero section-->












      </section>
      <!--body content end-->

      <?php include 'includes/footer.php'; ?>

    </div>

<script src="http://maps.google.com/maps/api/js?key=AIzaSyB1KDTKDCzqZ__OtdFhckkdzvvSGFQErwE&sensor=false"></script>


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

    <script>

    function myMap() {
      var mapOptions = {
          center: new google.maps.LatLng(51.5, -0.12),
          zoom: 10,
          mapTypeId: google.maps.MapTypeId.HYBRID
      }
  var map = new google.maps.Map(document.getElementById("mapper"), mapOptions);
  }
    </script>
  </body>

  </html>
