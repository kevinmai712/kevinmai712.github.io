<?php include "includes/header.inc.php" ; ?>

	<div id="copy">
		<h1><?php echo ucwords(str_replace("-", " ", $_GET["expansion"])); ?> Coupons</h1>
		<div class="all_coupons">
		<p>For more information on our current coupon offers, give us a call. </p>
		<p>Hurry, these deals expire soon!</p>

			<?php
				foreach($specials as $coupon){
					echo "<img alt='" . $coupon . "' src='http://elements.vitalstorm.com/elements/". $client_id . "/" . $coupon . ".png'>";
				}
			?>	
		</div>
	</div>
	<!-- SIDE NAV -->
	<?php include "includes/aside.inc.php" ; ?>
	
	<div class="clear"></div>

<?php include "includes/footer.inc.php" ; ?>
