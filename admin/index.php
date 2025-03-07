<!DOCTYPE php>
<php lang="en">
	<?php
	include "include/config.php";
	include "process/login.php";
	require_once "include/website_body.class.php";
	require_once "include/product.class.php";
	$body = new website_body();
	$item = new product();
	$login = new login_class();

	?>
	<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$login->login($con, $_POST['username'], $_POST['password']);
	}
	?>

	<head>
		<?php echo $body->head(); ?>
		<title>CREMPCO Giant Store</title>
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<!--================Login Box Area =================-->
		<section class="login_box_area section-margin">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="login_box_img">
							<div class="hover">
								<img src="img/logo.png" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="login_form_inner">
							<h3>Log in to enter</h3>
							<form class="row login_form" action="#" method="post" id="contactForm">
								<div class="col-md-12 form-group">
									<input type="text" class="form-control" id="username" name="username" placeholder="Username"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
								</div>
								<div class="col-md-12 form-group">
									<input type="password" class="form-control" id="password" name="password"
										placeholder="Password" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Password'">
								</div>
								<div class="col-md-12 form-group">
									<div class="creat_account">
										<input type="checkbox" id="f-option2" name="selector">
										<label for="f-option2">Keep me logged in</label>
									</div>
								</div>
								<div class="col-md-12 form-group">
									<button type="submit" value="submit" class="button button-login w-100">Log
										In</button>
									<a href="#">Forgot Password?</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================End Login Box Area =================-->



		<!--================ Start footer Area  =================-->
		<footer class="footer">
			<?php echo $body->footer() ?>
		</footer>
		<!--================ End footer Area  =================-->



		<?php
		$item->show_product($con);
		echo $body->script()
			?>
	</body>

	</html>