<?php
	require_once "../global/assets.php";
	
	/**
	* Get the coupon name from the query string.
	*/
	if(isset($_GET["coupon"])){
		if(in_array($_GET["coupon"],$branding) || $_GET["coupon"] == "" || $_GET["coupon"] == "hvac"){
			$coupon = "default";
		}else{
			$coupon = $_GET["coupon"];
		}		
	}
?>

<!doctype html>


<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			.logo {
				display: block;
				margin: 0 auto;
				padding-bottom: 15px;
			}
			
			.button {
				margin: 0 auto;
				padding-top: 20px;
			}
		
			#coupon_deal {
				width: 360px;
				display: block;
				margin: 0 auto;
			}
		
			.coupon-image {
				display: block;
			}
			
			.close,
			.print {
				background: #585858;
				color: #fff;
				cursor: pointer;
				display: inline-block;
				font-size: 103%;
				margin: 10px 0;
				padding: 10px;
				text-align: center;
				width: 30%;
				-webkit-border-radius: 10px;
				-moz-border-radius: 10px;
				-o-border-radius: 10px;
				-ms-border-radius: 10px;
				border-radius: 10px;
				font-family: 'Roboto Condensed', sans-serif;
			}
			
			.print {
				float: right;
			}
			
			@media (max-width: 767px){
				
			.coupon-image {
				height: auto;
				margin: auto;
				width: 290px;
			}
			#coupon_deal {
				width: 320px;
			}
			.close,
			.print {
			    width: 30%;
			}
			}
		</style>
		<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
		<script src="../js/init.js" type="text/javascript"></script>
	</head>
	<body>
		<section id="coupon_deal">
			
				<img alt="<?php echo $company_name ; ?> specials" class="logo" src="../images/logo.png">
				<img alt="<?php echo $company_name ; ?> coupon" class="coupon-image" src="http://elements.vitalstorm.com/elements/<?php echo $client_id ; ?>/<?php echo $coupon ; ?>.png">
				<div class="button">
					<p class="close">CLOSE</p>
					<p class="print">PRINT</p>
				</div>
		</section>
	</body>
</html>