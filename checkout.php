<!DOCTYPE php>
<php lang="en">
  <?php
  session_start();
  include "include/config.php";
  require_once "include/website_body.class.php";
  require_once "include/product.class.php";
  $body = new website_body();
  $item = new product();
  $productId = $_POST['product_id'];
  $productDetails = $item ->product_detail($con, $productId);
  $branch = $_SESSION['branch'];
  ?>

  <head>
    <?php echo $body->head(); ?>
    <title>CREMPCO Giant Store</title>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
      <?php echo $body->navigation($branch); ?>
    </header>
    <!--================ End Header Menu Area =================-->

    <!-- ================ start banner area ================= -->
    <section class="blog-banner-area" id="category">
      <div class="container h-100">
        <div class="blog-banner">
          <div class="text-center">
            <h1>Product Checkout</h1>
            <nav aria-label="breadcrumb" class="banner-breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ end banner area ================= -->


    <!--================Checkout Area =================-->
    <section class="checkout_area section-margin--small">
      <div class="container">
        <div class="returning_customer">
          <div class="check_title">
            <h2>Returning Customer? <a href="#">Click here to login</a></h2>
          </div>
          <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new
            customer, please proceed to the Billing & Shipping section.</p>
          <form class="row contact_form" action="" method="post" novalidate="novalidate">
            <div class="col-md-6 form-group p_star">
              <input type="text" class="form-control" placeholder="Username or Email*" onfocus="this.placeholder=''"
                onblur="this.placeholder = 'Username or Email*'" id="name" name="name">
              <!-- <span class="placeholder" data-placeholder="Username or Email"></span> -->
            </div>
            <div class="col-md-6 form-group p_star">
              <input type="password" class="form-control" placeholder="Password*" onfocus="this.placeholder=''"
                onblur="this.placeholder = 'Password*'" id="password" name="password">
              <!-- <span class="placeholder" data-placeholder="Password"></span> -->
            </div>
            <div class="col-md-12 form-group">
              <button type="submit" value="submit" class="button button-login">login</button>
              <div class="creat_account">
                <input type="checkbox" id="f-option" name="selector">
                <label for="f-option">Remember me</label>
              </div>
              <a class="lost_pass" href="#">Lost your password?</a>
            </div>
          </form>
        </div>
        
        <div class="billing_details">
          <div class="row">
            <div class="col-lg-8">
              <h3>Billing Details</h3>
              <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="first" name="name">
                  <span class="placeholder" data-placeholder="First name">First Name</span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="last" name="name">
                  <span class="placeholder" data-placeholder="Last name">Last Name</span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="number" name="number">
                  <span class="placeholder" data-placeholder="Phone number">Phone Number</span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="email" name="compemailany">
                  <span class="placeholder" data-placeholder="Email Address">Email</span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="add1" name="add1">
                  <span class="placeholder" data-placeholder="Address line 01">Address Line 01</span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="add2" name="add2">
                  <span class="placeholder" data-placeholder="Address line 02">Address Line 02</span>
                </div>
                
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP">
                </div>

                <div class="col-md-12 form-group">
                  <select name="payment" id="payment" class="form-control">
                    <option value="" disabled selected>Select Payment Method</option>
                    <option value="Gcash">Gcash</option>
                    <option value="COD">Cash on Delivery</option>
                  </select>
                </div>

                <div class="col-md-12 form-group mb-0">
                  <textarea class="form-control" name="message" id="message" rows="1"
                    placeholder="Order Notes"></textarea>
                </div>
              </form>
            </div>
            <div class="col-lg-4">
              <div class="order_box">
                <h2>Your Order</h2>
                <ul class="list">
                  <li>
                    <img src="<?php echo $productDetails['img_dir'];?>" alt="">
                  </li>
                  <li><a href="#">
                      <h4>Product <span>Total</span></h4>
                    </a></li>
                  <li><a href="#"><?php echo $productDetails['product_name'];?><span class="middle">x<?php echo $_POST['qty']?></span> <span
                        class="last">₱<?php echo $productDetails['price']; ?></span></a></li>
                </ul>
                <ul class="list list_2">
                  <li><a href="#">Subtotal <span>₱<?php echo $productDetails['price']*$_POST['qty']; ?></span></a></li>
                  <li><a href="#">Shipping <span>Flat rate: ₱50.00</span></a></li>
                  <li><a href="#">Total <span>₱<?php echo $productDetails['price']*$_POST['qty']+50; ?></span></a></li>
                </ul>
                <br>
                
                <div class="text-center">
                  <a class="button button-paypal" href="#">Proceed to Order</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Checkout Area =================-->



    <!--================ Start footer Area  =================-->
    <footer class="footer">
      <?php echo $body->footer() ?>
    </footer>
    <!--================ End footer Area  =================-->



    <?php
    $item->show_product($con,$branch);
    echo $body->script()
      ?>
  </body>

  </html>