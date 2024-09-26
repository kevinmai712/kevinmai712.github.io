<?php include "includes/header.inc.php" ; ?>

	<div id="copy">
		<h1>Your Form Has Been Submitted</h1>
		<h2>We'll be in touch.</h2>
		<p>We appreciate your interest in <?php echo $company_name;?>. Someone will be with you shortly, but in the meantime...</p>
		<h2>Get the best for less!</h2>
		<p>Check out today's <a href="coupons.php?expansion=<?php echo ucwords(str_replace('-', ' ', $_GET['expansion'])); ?>">special offers</a> and save today. For more information on our current coupon offers, give us a call! </p>
		<p>Thank you for choosing <?php echo $company_name;?>!</p>

	</div>
	<!-- SIDE NAV -->
	<?php include "includes/aside.inc.php" ; ?>
	
	<div class="clear"></div>

<?php include "includes/footer.inc.php" ; ?>
