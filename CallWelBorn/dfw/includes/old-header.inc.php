<?php require_once "global/assets.php" ; ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="robots" content="noindex, nofollow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="<?php echo Meta::keyword($title,$meta_keywords) ; ?>">
		<meta name="description" content="<?php echo Meta::description($title,$meta_descriptions) ; ?>">
		<meta name="author" content="VitalStorm.com">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/metrics-form.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300" rel="stylesheet" type="text/css">
		<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/5cfc11f742.js" crossorigin="anonymous"></script>
		<script src="js/tel_format.js" type="text/javascript"></script>
		<script src="js/init.js" type="text/javascript"></script>	
	</head>
	<body>
		

		<!-- MOBILE MENU 
		<section id="off_canvas_menu">
			<div class="close-button">
				<div>
					<img alt="close_button" src="images/close_off_canvas_light.png" >
					<span>Close Menu</span>
				</div>
			</div>		
			<nav id="mobile_menu">
				<?php include "includes/nav.inc.php" ; ?>
			</nav>	
		</section> -->

		<!-- MOBILE CONTACT FORM -->
		<span class="overlay_black"></span>
		 <section id="mobile-contact-btns">
			<div class="inner">
				<div <?php if ($title === 'thank-you'){ echo 'style="display :none;"'; } ?> class="mobile-contact-schedule">
					<a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Schedule Service</a>
				</div>
				<!--<div class="mobile-contact-call">
					<a href="tel:<?php echo $phone_number ?>"><i class="fa fa-phone" aria-hidden="true"></i>Call Now</a>
				</div>-->
			</div>

		</section>
		<!-- MOBILE MENU END -->  
		
		<!-- DESKTOP -->
		<section id="main_wrapper">
			<header>
				<div id="top_container">
					<div id="company_info"><a href="index.php?expansion=<?php echo ucwords(str_replace('-', ' ', $_GET['expansion'])); ?>"><img alt="company logo" src="images/logo.jpg"></a></div>
					<div id="number">
						<div id="number_hover">
							<a href="tel:<?php echo $phone_number ?>"><span id="number_rewrite"><i class="fas fa-phone-alt"></i>  <?php echo $phone_number ?></span></a>
						</div>
						<div class="desktop">
							<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> Over 10,000 5 Star Reviews!</p>
						</div>
					</div>
				</div>		
				<!-- Slider -->
				<div class="slider">
					<div class="container">
						<div class="inner-padding">
							<div id="learn_more">
								<div class="learn-more-about-us">
									<h2>DFW's #1 Most Trusted</h2>
									<h1><?php echo Header::header_name($title,$header) ; ?></h1>
									<p class="title_blurb">Drug Tested, Background Checked & Trained.</p>
								</div>
							</div>
							<div class="clear"></div>	
						</div>	
					</div>	
				</div>
				<!-- SCHEDULE SERVICE -->
				<div id="schedule" class="schedule-non-active">
					<div class="inner-padding">
						<div class="coupon_container">
							<div class="coupon_container_open">
								<a href="#cd-navigation" class="nav-trigger">
								<span>
									<em aria-hidden="true"></em>
								</span>
								</a> 
							</div>
							<div class="clear"></div>
							<?php echo Coupon::offer_name($title,$coupons_name) ; ?>
						</div>

						
						<div id="sliding_marque">
							<hr class="hr-dash">
					        <div>
					         	<h4 id="h4_service">SCHEDULE SERVICE</h4>
					        </div>
						</div>


						<div id="include_desktop_contact_form" class="form, desktop">
							<?php include "includes/contact_form.inc.php" ; ?>	      	
						</div>	



						<div id="include_mobile_contact_form" class="form">
							<div id="mobile_button_close">X</div>
							<?php echo Coupon::offer_name($title,$coupons_name) ; ?>
							<hr class="hr-dash">
							<span>SCHEDULE SERVICE</span>
							<?php include "includes/contact_form.inc.php" ; ?>	      	
						</div>
					</div>	
				</div>	
				<!-- Review Blurb -->
				<section id="review_blurb">
					<div class="container">
						<div id="review_blurb_text">
							<div>
								<p>Over</p>
								<h3>10,000</h3>
								<p>5-Stars Reviews</p>
							</div>
							<div>
								<p></p>
								<h3>4.9</h3>
								<p>Stars in Google</p>
							</div>
							<div>
								<p></p>
								<h3>A+</h3>
								<p>Rated in BBB</p>
							</div>
							<div>
								<p></p>
								<h3>5</h3>
								<p>Your Guarantee on Our Service</p>
							</div>
						</div>
					</div>
				</section>
				<!-- THREE BOX -->
				<section id="three_box">
					<div id="three_box_main_title">
						<h1>3 Promises That No One Else Can Make!</h1>
					</div>
					<div class="three-box-article">
						<div>
							<span class="three_box_numbers">01</span>
							<h2>We Arrive Same Day 24/7</h2>
							<p>We provide same day service 24/7. You don't have to wait for a garage door or gate repair! Call before 10am, and we'll arrive at your doorstep the very same day.</p>
						</div>
						<div>
							<span class="three_box_numbers">02</span>
							<h2>Higher Quality Parts, <br>Better Guarantee</h2>
							<p>Your satisfaction is our number one priority! That's why we guarantee our workmanship for 5 years - or your money back.</p>
						</div>
						<div>
							<span class="three_box_numbers">03</span>
							<h2>Never Pay More <br>Than You Should</h2>
							<p>Never pay more than you expect! No hidden fees... No surprises. Welborn Garage Doors will show you the total price up-front, before we start the work!</p>
						</div>
					</div>
				</section>
			</header>