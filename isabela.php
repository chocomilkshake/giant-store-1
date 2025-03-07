<!DOCTYPE php>
<php lang="en">
  <?php
  session_start();
  include "include/config.php";
  require_once "include/website_body.class.php";
  require_once "include/product.class.php";
  $body = new website_body();
  $item = new product();
  $branch = '2';
  $_SESSION['branch']=$branch;
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

    <main class="site-main">

      <!--================ Hero banner start =================-->
      <section class="hero-banner">
        <div class="container">
          <div class="row no-gutters align-items-center pt-60px">
            <div class="col-5 d-none d-sm-block">
              <div class="hero-banner__img">
                <img class="img-fluid" src="img/home/hero-banner.png" alt="">
              </div>
            </div>
            <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
              <div class="hero-banner__content">
                <h4>Shop is fun</h4>
                <?php echo $body->banner_title($branch)?>
                <p>Experience the ultimate in convenience and quality at CREMPCO Giant Store –
                  where every product is designed to elevate your everyday life</p>
                <a class="button button-hero" href="#">Browse Now</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================ Hero banner start =================-->


      <!-- ================ Our product section start ================= -->
      <section class="section-margin calc-60px">
        <div class="container">
          <div class="section-intro pb-60px">
            <p>Item in the market</p>
            <h2>Our <span class="section-intro__style">Product</span></h2>
          </div>

          <div id="product-container" class="row">

          </div>

        </div>

        <div id="pagination" class="text-center mt-4">
          <button id="prev-btn" class="btn btn-primary" disabled>Previous</button>
          <span id="page-info"></span>
          <button id="next-btn" class="btn btn-primary">Next</button>
        </div>
      </section>
      <!-- ================ trending product section end ================= -->

      <!-- ================ offer section start ================= -->
      <section class="offer" id="parallax-1" data-anchor-target="#parallax-1"
        data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
        <div class="container">
          <div class="row">
            <div class="col-xl-5">
              <div class="offer__content text-center">
                <h3>Up To 50% Off</h3>
                <h4>Winter Sale</h4>
                <p>Him she'd let them sixth saw light</p>
                <a class="button button--active mt-3 mt-xl-4" href="#">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ================ offer section end ================= -->





      <!-- ================ Subscribe section start ================= -->
      <section class="subscribe-position">
        <div class="container">
          <div class="subscribe text-center">
            <h3 class="subscribe__title">Get Update From Anywhere</h3>
            <p>Bearing Void gathering light light his eavening unto dont afraid</p>
            <div id="mc_embed_signup">
              <form target="_blank"
                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                method="get" class="subscribe-form form-inline mt-5 pt-1">
                <div class="form-group ml-sm-auto">
                  <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Enter your email"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '">
                  <div class="info"></div>
                </div>
                <button class="button button-subscribe mr-auto mb-1" type="submit">Subscribe Now</button>
                <div style="position: absolute; left: -5000px;">
                  <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                </div>

              </form>
            </div>

          </div>
        </div>
      </section>
      <!-- ================ Subscribe section end ================= -->



    </main>


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
</php>