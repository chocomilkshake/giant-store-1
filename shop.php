<!DOCTYPE php>
<php lang="en">
  <?php
  session_start();
  include "include/config.php";
  require_once "include/website_body.class.php";
  require_once "include/product.class.php";
  $body = new website_body();
  $item = new product();
  $branch=$_SESSION['branch'];
  ?>

  <head>
    <?php echo $body->head(); ?>
    <title>CREMPCO Giant Store</title>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
      <?php echo $body->navigation($branch);?>
    </header>
    <!--================ End Header Menu Area =================-->

    <!-- ================ start banner area ================= -->
    <section class="blog-banner-area" id="category">
      <div class="container h-100">
        <div class="blog-banner">
          <div class="text-center">
            <h1>Shop Category</h1>
            <nav aria-label="breadcrumb" class="banner-breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop Category</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ end banner area ================= -->


    <!-- ================ category section start ================= -->
    <section class="section-margin--small mb-5">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-4 col-md-5">
            <div class="sidebar-categories">
              <div class="head">Browse Categories</div>
              <ul class="main-categories">
                <li class="common-filter">
                  <form action="#">
                    <ul>
                      <?php $item->browse_categories($con); ?>
                    </ul>
                  </form>
                </li>
              </ul>
            </div>

          </div>
          <div class="col-xl-9 col-lg-8 col-md-7">
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">

              <div>
                <div class="input-group filter-bar-search">
                  <input type="text" placeholder="Search">
                  <div class="input-group-append">
                    <button type="button"><i class="ti-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Filter Bar -->

            <!-- Start product Seller -->
            <section class="lattest-product-area pb-40 category-list">
              <div class="row">

                <div class="container">
                

                  <div id="product-container" class="row">

                  </div>

                </div>

                <div id="pagination" class="text-center mt-4">
                  <button id="prev-btn" class="btn btn-primary" disabled>Previous</button>
                  <span id="page-info"></span>
                  <button id="next-btn" class="btn btn-primary">Next</button>
                </div>

              </div>
            </section>
            <!-- End Best Seller -->
          </div>
        </div>
      </div>
    </section>
    <!-- ================ category section end ================= -->

    

 


    <!--================ Start footer Area  =================-->
    <footer class="footer">
      <?php echo $body->footer() ?>
    </footer>
    <!--================ End footer Area  =================-->



    <?php
    $item->show_product($con, $branch);
    echo $body->script()
      ?>
  </body>

  </html>