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
                    if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
                    {
                    	echo '<div class="cart-view-table-front" id="view-cart">';

                    	echo '<form method="post" action="cart_update.php">';
                    	echo '<table width="100%"  cellpadding="6" cellspacing="0">';
                    	echo '<tbody>';

                    	$total =0;
                    	$b = 0;
                    	foreach ($_SESSION["cart_products"] as $cart_itm)
                    	{
                    		$product_name = $cart_itm["product_name"];
                    		$product_qty = $cart_itm["product_qty"];

                    		$product_code = $cart_itm["product_code"];

                    		$bg_color = ($b++%2==1) ? 'odd' : 'even'; //zebra stripe
                    		echo '<tr class="'.$bg_color.'">';
                    		echo '<td>Qty <input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
                    		echo '<td>'.$product_name.'</td>';
                    		echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /> Remove</td>';
                    		echo '</tr>';

                    	}
                    	echo '</tbody>';
                    	echo '</table>';

                    	$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
                    	echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
                    }
                    ?>
                    <!-- View Cart Box End -->
                  </table>
<br>
                  <div class="s-cart-btn pull-right">
                    <a><button class="btn btn-small btn-theme-color" type="submit">Update</button></a>
                    <a href="cart.php"> <button class="btn btn-small btn-dark-solid" type="button"> Checkout</button></a>
                    </form>
                  </div>
                  <!--cart-->
                </div>
              </div>
            </div>
          </li>
        </ul>
        <!--mega menu end-->
      </nav>
    </div>
  </div>

</header>
