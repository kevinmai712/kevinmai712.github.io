<?php include "includes/header.inc.php" ; ?>
<!-- SECTION ARTICLE -->
<section id="service_content">
	<div class="container">
		<div id="service_content_title">
			<h1>Welborn’s Award Winning Service</h1>
			<p>Rain, Ice, Sleet or Snow – Welborn Garage Doors is there when you need us!</p>
		</div>
		<div id="service_content_description">
			<div id="service_content_info">
				<h2>About Us</h2>
				<h3>Why Choose Welborn?</h3>
				<p>Welborn is a top rated garage door and gate repair company in the DFW Metroplex. We have more trained technicians and more satisfied customers than any other garage door company in the Dallas/Fort Worth area. Legally, we cannot say we are “the best”… but we do offer <b>5 Guarantees</b> that no other companies would dare!</p>
				<ul>
					<li><b>UP-FRONT PRICING!</b> – Never pay more than you expect! No hidden fees… No surprises.</li>
					<li><b>SAME DAY SERVICE!</b> – Don’t wait for service! Call before 10 a.m. and we’ll arrive at your doorstep the very same day!</li>
					<li><b>ON-TIME SERVICE!</b> – If we don’t show up when we say, we’ll give you $25.</li>
					<li><b>DONE RIGHT GUARANTEE!</b> – We guarantee our work for 5 Years! If your issue reoccurs within 5 years or your service, we’ll come out and repair it for FREE!</li>
					<li><b>IN GOOD HANDS GUARANTEE!</b> – If we can’t fix it, for any reason, or if we don’t do work on what you requested, you don’t pay a penny!*</li>
				</ul>
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
			<p>Welborn Garage Doors provides garage door service & repair throughout the Dallas and Fort Worth, TX areas. As a locally-owned small business, we are focused on serving our customers, our community, and our team members. Whether your garage door is stuck, loud, or not operating, our skilled technicians are here to take care of all your garage door service and repair needs.</p>
		</div>
	</div>
</section>

<?php include "includes/footer.inc.php" ; ?>
