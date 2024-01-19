<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Оформление заказа</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&family=Abril+Fatface&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
	<link type="Image/x-icon" href="assets/images/shapes/favicon.png" rel="icon">
    <link type="Image/x-icon" href="assets/images/shapes/favicon.png" rel="shortcut icon">
    <script src="assets/vendors/jquery/jquery-3.5.1.min.js"></script>
    
	<link rel="stylesheet" href="assets/vendors/bootstrap/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
	<link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
	<link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
	<link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
	<link rel="stylesheet" href="assets/vendors/organik-icon/organik-icons.css" />
	<link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
	<link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
	<link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
	<link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
	<link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
	<link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
	<link rel="stylesheet" href="assets/css/organik.css" />
</head>
<body>
	<div class="page-wrapper">
		
		<?php require('static/header.php') ?>

		<section class="checkout-page">
			<div class="container">
				<div class="row">
					<div class="col-lg">
						<h3 class="text-center">Оставить заявку для офомления вашего заказа</h3>
						<form action="do_orders.php" method="POST" class="contact-form-validated contact-one__form">
							<div class="row">
								<div class="col-md-12">
									<input type="text" name="f_name" placeholder="Ваше Ф.И.О." required>
								</div>
								<div class="col-md-12">
									<input type="text" name="f_phone" placeholder="Телефон" class="ss" required>
								</div>
								<div class="col-md-6">
									<select class="selectpicker" name="f_messenger">
										<option value="">Способ связи</option>
										<option value="Telegram">Telegram</option>
										<option value="Whatsapp">Whatsapp</option>
										<option value="Viber">Viber</option>
									</select>
								</div>
								<div class="col-md-6 ">
									<button type="submit" class="thm-btn w-100" style="height: 62px;">Отправить</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<?php require('static/footer.php'); ?>
	</div>

	<?php require('static/mobile-wrapper.php'); ?>

	<script type="text/javascript">
		$('.ss').on('keydown', function(e){
		  if(e.key.length == 1 && e.key.match(/[^0-9'".]/)){
		    return false;
		  };
		})							
	</script>

	<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
	<script src="assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
	<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="assets/vendors/jarallax/jarallax.min.js"></script>
	<script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
	<script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
	<script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
	<script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="assets/vendors/nouislider/nouislider.min.js"></script>
	<script src="assets/vendors/odometer/odometer.min.js"></script>
	<script src="assets/vendors/swiper/swiper.min.js"></script>
	<script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
	<script src="assets/vendors/isotope/isotope.js"></script>
	<script src="assets/vendors/countdown/countdown.min.js"></script>
	<script src="assets/js/organik.js"></script>
</body>
</html>