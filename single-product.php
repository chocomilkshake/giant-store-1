<!DOCTYPE php>
<php lang="en">
	<?php
	session_start();
	$branch = $_SESSION['branch'];
	include "include/config.php";
	require_once "include/website_body.class.php";
	require_once "include/product.class.php";
	$body = new website_body();
	$item = new product();
	$productId = $_GET['id'];
	$productDetails = $item->product_detail($con, $productId);
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



		<!--================Single Product Area =================-->
		<div class="product_image_area">
			<div class="container">
				<div class="row s_product_inner">
					<div class="col-lg-6">
						<div class="owl-carousel owl-theme s_Product_carousel">
							<div class="single-prd-item">
								<img class="img-fluid" src="<?php echo $productDetails['img_dir'];?>" alt="sample">
							</div>
							<!-- <div class="single-prd-item">
							<img class="img-fluid" src="img/category/s-p1.jpg" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="img/category/s-p1.jpg" alt="">
						</div> -->
						</div>
					</div>
					<div class="col-lg-5 offset-lg-1">
						<div class="s_product_text">
							<h3><?php echo $productDetails['product_name']; ?></h3>
							<h2>₱<?php echo $productDetails['price']; ?></h2>
							<ul class="list">
								<li><a class="active" href="#"><span>Category</span> :
										<?php echo $productDetails['category_name']; ?> |
										<?php echo $productDetails['sub_category_name']; ?></a></li>
								<li><a href="#"><span>Availibility</span> :
										<?php echo $productDetails['quantity']; ?></a></li>
							</ul>
							<p><?php echo $productDetails['description']; ?></p>
							<div class="product_count">
								<label for="qty">Quantity:</label>
								<form id="cartForm" action="checkout.php" method="POST">
									<input type="number" class="form-control" name="qty" id="sst" size="2" maxlength="12" value="1"
										title="Quantity:" class="input-text qty">

									<!-- Your form fields go here -->
									<input type="hidden" name="img_dir" value="<?php echo $productDetails['img_dir'];?>">
									<input type="hidden" name="product_id" value="<?php echo $productId;?>">
								</form>
								<br>
								<a href="#" class="button primary-btn" id="submitLink">Add to Cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--================End Single Product Area =================-->

		<!--================Product Description Area =================-->
		<section class="product_description_area">
			<div class="container">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
							aria-selected="true">Shop</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
							aria-controls="profile" aria-selected="false">Specification</a>
					</li>

				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<p>Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature
							women
							of all shapes
							and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left
							Kendrick School in
							Reading at the age of 15, where she went to secretarial school and then into an insurance
							office. After moving to
							London and then Hampton, she eventually married her next door neighbour from Reading, John
							Cook.
							He was an
							officer in the Merchant Navy and after he left the sea in 1956, they bought a pub for a year
							before John took a
							job in Southern Rhodesia with a motor company. Beryl bought their young son a box of
							watercolours, and when
							showing him how to use it, she decided that she herself quite enjoyed painting. John
							subsequently bought her a
							child’s painting set for her birthday and it was with this that she produced her first
							significant work, a
							half-length portrait of a dark-skinned lady with a vacant expression and large drooping
							breasts.
							It was aptly
							named ‘Hangover’ by Beryl’s husband and</p>
						<p>It is often frustrating to attempt to plan meals that are designed for one. Despite this
							fact, we
							are seeing
							more and more recipe books and Internet websites that are dedicated to the act of cooking
							for
							one. Divorce and
							the death of spouses or grown children leaving for college are all reasons that someone
							accustomed to cooking for
							more than one would suddenly need to learn how to adjust all the cooking practices utilized
							before into a
							streamlined plan of cooking that is more efficient for one person creating less</p>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<td>
											<h5>Width</h5>
										</td>
										<td>
											<h5><?php echo $productDetails['width']; ?></h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Height</h5>
										</td>
										<td>
											<h5><?php echo $productDetails['height']; ?></h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Depth</h5>
										</td>
										<td>
											<h5><?php echo $productDetails['depth']; ?></h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Weight</h5>
										</td>
										<td>
											<h5><?php echo $productDetails['weight']; ?></h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Quality checking</h5>
										</td>
										<td>
											<h5><?php echo $productDetails['Quality Checking']; ?></h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Estimate Delivery</h5>
										</td>
										<td>
											<h5><?php echo $productDetails['Estimate Delivery']; ?></h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Returnable/Refundable</h5>
										</td>
										<td>
											<h5><?php echo $productDetails['Returnable/Refundable']; ?></h5>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================End Product Description Area =================-->

		<!--================ Start related Product area =================-->
		<section class="related-product-area section-margin--small mt-0">
			<div class="container">
				<div class="section-intro pb-60px">
					<p></p>
					<h2>Other <span class="section-intro__style">Shop Product</span></h2>
				</div>
				<div class="row mt-30">
					<div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
						<div class="single-search-product-wrapper">
							<div class="single-search-product d-flex">
								<a href="#"><img src="img/product/product-sm-1.png" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Gray Coffee Cup</a>
									<div class="price">$170.00</div>
								</div>
							</div>
							<div class="single-search-product d-flex">
								<a href="#"><img src="img/product/product-sm-2.png" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Gray Coffee Cup</a>
									<div class="price">$170.00</div>
								</div>
							</div>
							<div class="single-search-product d-flex">
								<a href="#"><img src="img/product/product-sm-3.png" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Gray Coffee Cup</a>
									<div class="price">$170.00</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
						<div class="single-search-product-wrapper">
							<div class="single-search-product d-flex">
								<a href="#"><img src="img/product/product-sm-4.png" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Gray Coffee Cup</a>
									<div class="price">$170.00</div>
								</div>
							</div>
							<div class="single-search-product d-flex">
								<a href="#"><img src="img/product/product-sm-5.png" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Gray Coffee Cup</a>
									<div class="price">$170.00</div>
								</div>
							</div>
							<div class="single-search-product d-flex">
								<a href="#"><img src="img/product/product-sm-6.png" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Gray Coffee Cup</a>
									<div class="price">$170.00</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
						<div class="single-search-product-wrapper">
							<div class="single-search-product d-flex">
								<a href="#"><img src="img/product/product-sm-7.png" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Gray Coffee Cup</a>
									<div class="price">$170.00</div>
								</div>
							</div>
							<div class="single-search-product d-flex">
								<a href="#"><img src="img/product/product-sm-8.png" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Gray Coffee Cup</a>
									<div class="price">$170.00</div>
								</div>
							</div>
							<div class="single-search-product d-flex">
								<a href="#"><img src="img/product/product-sm-9.png" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Gray Coffee Cup</a>
									<div class="price">$170.00</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
						<div class="single-search-product-wrapper">
							<div class="single-search-product d-flex">
								<a href="#"><img src="img/product/product-sm-1.png" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Gray Coffee Cup</a>
									<div class="price">$170.00</div>
								</div>
							</div>
							<div class="single-search-product d-flex">
								<a href="#"><img src="img/product/product-sm-2.png" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Gray Coffee Cup</a>
									<div class="price">$170.00</div>
								</div>
							</div>
							<div class="single-search-product d-flex">
								<a href="#"><img src="img/product/product-sm-3.png" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Gray Coffee Cup</a>
									<div class="price">$170.00</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ end related Product area =================-->

		<!--================ Start footer Area  =================-->
		<footer class="footer">
			<?php echo $body->footer() ?>
		</footer>
		<!--================ End footer Area  =================-->



		<?php
		$item->show_product($con,$branch);
		echo $body->script()
			?>
		<script>
			document.getElementById('submitLink').addEventListener('click', function (event) {
				event.preventDefault(); // Prevent the default link behavior
				document.getElementById('cartForm').submit(); // Submit the form
			});
		</script>
	</body>

	</html>