			<section id="review_footer">
				<div id="review_footer_left">
				</div>
				<div id="review_footer_right">
					<div id="review_footer_right_text">
					<?php if(in_array($title,$reviews))
					{?>
						<h2>My family to Yours</h2>
						<p>"We know your garage is an important part of your home. This is why we hire the most qualified, and trusted technicians. Whether you need a repair, replacement, installation, or a custom design, Welborn is here for all your garage needs!"</p>
						<p><b>-Mike Anderson, Owner of Welborn Garage</b></p>
					<?php }else{?>
						<h2>The Most 5-Star Reviewed Garage Service in 										
							<?php if($_GET['expansion'] == '')
										{?>
											DFW
										<?php }else{?>
											<?php echo ucwords(str_replace('-', ' ', $_GET['expansion'])); ?>
										<?php } ?></h2>
						<p>"We know your garage is an important part of your home. This is why we hire the most qualified, and trusted technicians. Whether you need a repair, replacement, installation, or a custom design, Welborn is here for all your garage needs!"</p>
						<p><b>-Mike Anderson, Owner of Welborn Garage</b></p>
					<?php } ?>
					
					<?php if(in_array($title,$reviews))
					{?>
						<a href="our-services.php?expansion=<?php echo ucwords(str_replace('-', ' ', $_GET['expansion'])); ?>" class="buttonstyle mobile">See Our Services</a>
					<?php }else{?>
						<a href="reviews.php?expansion=<?php echo ucwords(str_replace('-', ' ', $_GET['expansion'])); ?>" class="buttonstyle mobile">See Reviews</a>
					<?php } ?>
					</div>
					<?php if(in_array($title,$reviews))
					{?>
						<a href="our-services.php?expansion=<?php echo ucwords(str_replace('-', ' ', $_GET['expansion'])); ?>" class="buttonstyle desktop">See Our Services</a>
					<?php }else{?>
						<a href="reviews.php?expansion=<?php echo ucwords(str_replace('-', ' ', $_GET['expansion'])); ?>" class="buttonstyle desktop">See Reviews</a>
					<?php } ?>
				</div>
			</section>
			<!-- FOOTER -->
			<footer id="footer_content">
				<div class="container">
					<div id="footer-badges">
						<div>
							<img loading="lazy" src="./images/bbb.png" alt="BBB">
						</div>
						<div>
							<img loading="lazy" src="./images/satisfaction.png" alt="BBB">
						</div>
					</div>
				</div>
				<div class="contact-form-popup">
					<div class="main-form-left">
						<img loading="lazy" src="images/logo-white.png" style="width: 200px;">
						<br>
							<?php echo Coupon::offer_name($title,$coupons_name) ; ?>
							<br>
						<span class="phonenumber"><i class="fa-solid fa-phone"></i> <a href="tel:<?php echo $phone_number ?>"><?php echo $phone_number ?></a></span>
					</div>
					<div class="main-form-right">
						<span class="closeform"><i class="fa-light fa-xmark"></i></i></span>
						<?php include "includes/contact_form.inc.php" ; ?>	
					</div>
				</div>


				<div id="copyright">
					<p id="marketing"><?php echo $copy ; ?> | Marketing by <a title="vitalstorm" href="http://www.vitalstorm.com" target="_blank">VitalStorm</a></p>
				</div>
	
				<!--styles and scripts-->
				<link defer rel="stylesheet" href="https://use.typekit.net/pfj7mgj.css">
				<link defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
				<link defer href="css/metrics-form.css" rel="stylesheet">		
				<link defer rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
				
				<script defer src="js/tel_format.js" type="text/javascript"></script>
				<script defer src="js/init.js" type="text/javascript"></script>	

				<!-- third-party scripts-->
				<script defer src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

				<script type="text/javascript">
					var SETUP_VS_LP = function(){
						INIT_VS_LP({
							env: 'prod'
						});
					};
				</script>

				<script src="https://s3.amazonaws.com/vs.static-files/vs_lp_conv_bundle.js"  async onload="SETUP_VS_LP();"></script>
				
			<!-- end third party scripts -->
			</footer>f
		</section>	
	</body>
</html>
