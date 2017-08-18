<header class="l-header headerAJ">

  <div class="l-navbar l-navbar_expand l-navbar_t-light-trans js-navbar-sticky">
    <div class="container-fluid">
      <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">
        <!--logo start-->
        <h3>
        <a href="index.php" class="logo-brand ">Fragrance Plants & Flowers Inc.
        </a></h3>
        <!--logo end-->

        <!--mega menu start-->
        <ul class="menuzord-menu menuzord-right c-nav_s-standard">
          <li class="active"><a href="index.php">Home</a></li>

          <li class=""><a href="products.php">Products</a>

          </li>

          <li class=""><a href="contact.php">Contact</a>

          </li>



          <li class="nav-divider" aria-hidden="true"><a href="javascript:void(0)">|</a>
          </li>

          <li class="cart-info">
            <a href="javascript:void(0)"><i class="fa fa-shopping-cart"></i> cart</a>
            <div class="megamenu megamenu-quarter-width ">
              <div class="megamenu-row">
                <div class="col12">

                  <!--cart-->
                  <table class="table cart-table-list table-responsive">
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

                            </tr>
                            <?php

                    }
                    ?>
                        <tr>

                        <td></td>
                        </tr>
                        <?php
                    }
                    ?>
                  </table>


                  <div class="s-cart-btn pull-right">
                    <a href="cart.php" class="btn btn-small btn-theme-color"> View cart</a>
                    <a href="checkout.php" class="btn btn-small btn-dark-solid"> Checkout</a>
                  </div>
                  <!--cart-->

                </div>
              </div>
            </div>
          </li>

          <li>
            <a href="products.php"><i class="fa fa-search"></i> Search</a>
            <!-- <div class="megamenu megamenu-quarter-width navbar-search">
              <form role="searchform">
                <input type="text" class="form-control" placeholder="Search Here">
              </form>
            </div> -->
          </li>
        </ul>
        <!--mega menu end-->

      </nav>
    </div>
  </div>

</header>
