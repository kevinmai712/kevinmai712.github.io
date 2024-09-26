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
				<h2>Garage Door Replacement</h2>
				<h3>Garage Door Replacement You Can Always Count On</h3>
				<p>Our team of qualified, skilled experts know your garage door is an important part of your home - for both the style it adds and the functionality you rely on each day. At Welborn, we can help you shop for a new garage door and make it entirely customizable to fit your needs, your style, and your budget.</p>
				<p>The garage door is often one of the most prominent features on a home and selecting the right garage door can really improve your home’s market value and overall curb appeal. We only use products that are high-quality and built to last. When you place your trust in our team at Welborn, you’ll receive exceptional customer care from start to finish - and the best products you can always rely on. </p>
				<h3>The Door Types We Offer:</h3>
				<ul>
					<li>Steel Doors</li>
					<li>Carriage Doors</li>
					<li>Wood Doors</li>
				</ul>
				<h3>Optional Door Features We Offer:</h3>
				<ul>
					<li>Installing Insulation </li>
					<li>Upgrading to Nylon Rollers</li>
					<li>Installing a Perimeter Seal</li>
					<li>Installing Windows</li>
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
					<a href="garage-floor-coatings.php?expansion=<?php echo ucwords(str_replace('-', ' ', $_GET['expansion'])); ?>">					
						<div class="icon">
							<?php echo $iconFiveImage;?>
							<p><?php echo $iconFiveText;?></p>
						</div>
					</a>
				</div>
				<div class="icon_row02">
					<a href="garage-storage.php?expansion=<?php echo ucwords(str_replace('-', ' ', $_GET['expansion'])); ?>">
						<div class="icon">
							<?php echo $iconSevenImage;?>
							<p><?php echo $iconSevenText;?></p>
						</div>	
					</a>
					<a href="gates.php?expansion=<?php echo ucwords(str_replace('-', ' ', $_GET['expansion'])); ?>">								
						<div class="icon">
							<?php echo $iconSixImage;?>
							<p><?php echo $iconSixText;?></p>
						</div>
					</a>
				</div>
			</div>
</div>

		</div>
		<div id="service_content_footer">
			<p>If you’re not sure what garage door type you’re interested in, no problem! Our team can help answer any questions to make your decision easier. When choosing the perfect garage door, it’s important to keep in mind the overall durability, operation, and design. At Welborn, our team of highly-skilled and fully-trained team members are ready to serve you and all your garage door replacement needs!</p>
		</div>
	</div>
</section>

<?php include "includes/footer.inc.php" ; ?>
