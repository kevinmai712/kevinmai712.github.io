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

	</head>
	<body>


		<!-- MOBILE CONTACT FORM -->
		<span class="overlay_black"></span>
		 <section id="mobile-contact-btns">
			<div class="inner">
				<div <?php if ($title === 'thank-you'){ echo 'style="display :none;"'; } ?> class="mobile-contact-schedule">
					<a href="#">Schedule Service</a>
				</div>
				<div class="mobile-contact-call">
					<a href="tel:<?php echo $phone_number ?>"><i class="fa fa-phone" aria-hidden="true"></i></a>
				</div>
			</div>

		</section>
		<!-- MOBILE MENU END -->  
		
		<!-- DESKTOP -->
		<section id="main_wrapper">
			<header>
				<div class="top_container">
					<div id="company_info"><a href="index.php?expansion=<?php echo ucwords(str_replace('-', ' ', $_GET['expansion'])); ?>"><img alt="company logo" src="images/logo.png"></a></div>
					<div id="twentyfour-hours">
						<div id="twentyfour-hours-img">
							<img src="images/24-7-Icon.png">
						</div>
						<div id="twentyfour-hours-text">
							<h3>Garage Door Service</h3>
							<p>Professional Trained Techs, Competitive Prices</p>
						</div>
					</div>
					<div id="number">
						<div id="number_hover">
							<a href="tel:<?php echo $phone_number ?>"><span id="number_rewrite"><i class="fas fa-phone-alt"></i>  <?php echo $phone_number ?></span></a>
						</div>

						<div class="desktop star-desktop">
							<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> Over 2.8k 5 Star Reviews!</p>
						</div>
					</div>
				</div>		
				<!-- Slider -->
				<?php echo Slider::name($title,$slider_name) ; ?>
					<div class="container">
						<div class="inner-padding">
							<div id="learn_more">
								<div class="learn-more-about-us">
									<h2>#1 Most Trusted in 
										<?php if($_GET['expansion'] == '')
										{?>
											DFW
										<?php }else{?>
											<?php echo ucwords(str_replace('-', ' ', $_GET['expansion'])); ?>
										<?php } ?> 
									</h2>
									<h1><?php echo Header::header_name($title,$header) ; ?></h1>
									<?php if(in_array($title,$replacement))
									{?>
										<p class="title_blurb">Welborn carries every style door!</p>
									<?php }else{?>
										<p class="title_blurb">Drug Tested, Background Checked & Trained.</p>
									<?php } ?>
									<br>
									<a href="#" class="form-popup desktop">Schedule Service</a>
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
								<!--<span>
									<i class="far fa-window-minimize"></i>
								</span>-->
								</a> 
							</div>
							<div class="clear"></div>
							<?php echo Coupon::offer_name($title,$coupons_name) ; ?>
							<div class="desktop-schedule-active-open">Click To Schedule</div>
						</div>
						<div id="sliding_marque">
							<!--<hr class="hr-dash">-->
					        <div>
					         	<h4 id="h4_service" class="mobile">SCHEDULE SERVICE</h4>
					        </div>
						</div>   
							<div id="include_mobile_contact_form" class="form">
								<div id="mobile_button_close" class="mobile"><i class="fas fa-times"></i></div>
								<div class="mobile">
									<?php echo Coupon::offer_name($title,$coupons_name) ; ?>
									<hr class="hr-dash">	
								</div>
								<!--span class="mobile"-->
								<?php include "includes/contact_form.inc.php" ; ?>	 
							</span>
							</div>	
					</div>	
				</div>	
				<!-- Review Blurb -->
				<section id="review_blurb">
					<div class="container">
						<div id="review_blurb_text">
							<div>
								<h3>2.8k+</h3>
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
							<!--<div>
								<p></p>
								<h3>5</h3>
								<p>Year Guarantee on Our Service</p>
							</div></-->
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
							<p>Your satisfaction is our number one priority! That’s why we guarantee our workmanship or your money back.</p>
						</div>
						<div>
							<span class="three_box_numbers">03</span>
							<h2>Never Pay More <br>Than You Should</h2>
							<p>Never pay more than you expect! No hidden fees... No surprises. Welborn Garage Doors will show you the total price up-front, before we start the work!</p>
						</div>
					</div>
				</section>
			</header>