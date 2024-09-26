<?php include "includes/header.inc.php" ; ?>
<!-- SECTION ARTICLE -->
<section id="service_content">
	<div class="container">
		<div id="service_content_title">
			<h1>YES! We Can Fix Any Garage Issue!</h1>
			<p>Even if it's Not Listed Below - We Specialize in Every Part of the Garage!</p>
		</div>
		<div id="service_content_description">
			<div id="service_content_info">
				<h2>Our Services</h2>
				<h3>Garage door stuck? Not opening all the way? Noisy?</h3>
				<p>If so, call Welborn! We repair and service all brands of garage doors & openers. Whether your doors are off track, not closing, or your springs have broken, we are here to help with all your garage door needs!</p>
				<div class="two-column">
					<ul>
						<li>Broken or Damaged Drums</li>
						<li>Remote and Keyless Entry</li>
						<li>Center & End Bearings</li>
						<li>Bent Tracks</li>
						<li>Bottom Seal</li>
						<li>Broken Cables</li>
						<li>Circuit Boards</li>
						<li>Door Springs</li>
					</ul>
					<ul>
						<li>Force Settings</li>
						<li>Jamb Seals</li>
						<li>Safety Sensors</li>
						<li>Stripped Gears</li>
						<li>Torsion Springs</li>
						<li>Panels</li>
						<li>Rollers</li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>		
			
			<div id="service_content_right">		
			<div id="service_content_icon">
				<div class="icon_row01">
					<a href="garage-door-repair.php?expansion=<?php echo ucwords(str_replace('-', ' ', $_GET['expansion'])); ?>">
						<div class="icon">
							<?php echo $iconOneImage;?>
							<p><?php echo $iconOneText;?></p>
						</div>		
					</a>		
					<a href="garage-door-replacement.php?expansion=<?php echo ucwords(str_replace('-', ' ', $_GET['expansion'])); ?>">					
						<div class="icon">
							<?php echo $iconTwoImage;?>
							<p><?php echo $iconTwoText;?></p>
						</div>
					</a>
				</div>
				<div class="icon_row02">
					<a href="gates.php?expansion=<?php echo ucwords(str_replace('-', ' ', $_GET['expansion'])); ?>">
						<div class="icon">
							<?php echo $iconSixImage;?>
							<p><?php echo $iconSixText;?></p>
						</div>	
					</a>
					<a href="garage-storage.php?expansion=<?php echo ucwords(str_replace('-', ' ', $_GET['expansion'])); ?>">								
						<div class="icon">
							<?php echo $iconSevenImage;?>
							<p><?php echo $iconSevenText;?></p>
						</div>
					</a>
				</div>
			</div>
		</div>
		</div>
		<div id="service_content_footer">
			<p>Whether you need assistance with your garage door, your garage door opener, or your gate, our team at Welborn Garage Doors is here for you!</p>
			<p><b>Have another problem not listed here? We can still help diagnose your problem and get it fixed for you!</b></p>
		</div>
	</div>
</section>

<?php include "includes/footer.inc.php" ; ?>
