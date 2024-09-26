<?php // LP PHP functions & variables

/* Global Variables */
$company_name = "Welborn";

$vs_name = "Marketing by <a target='_blank' href='http://vitalstorm.com/'>VitalStorm</a>";

$copy = " &copy; " . date("Y") . " " . $company_name;

$company_logo = "logo";

$client_id = "WE";

/* $title is used anywhere to return the name of the page */
$title = substr(basename($_SERVER["PHP_SELF"]),0,-4);

/* PHONE NUMBER */
$phone_number = "214-506-0111"; 

/* 
 * Strip dashes or unwanted characters from the page file.
 * 
 * This function is used for the title on the browser tabs.
 *
 */
function title($title){
	$title = ucwords(str_replace("-"," ",$title));
	return $title;
}
		
/* This is for the meta tag keywords */
$meta_keywords = array(
	//branding
	"index"				=> $company_name.", ",
	"about-us"			=> $company_name.", ",
	"our-services"		=> "",
	
);

/* This is for the meta tag descriptions */
$meta_descriptions = array(
	//branding
	"index"				=> "",
	"about-us"			=> "",
	

);


// SERVICE ICONS One 

$iconOneImage = '<svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="garage-open" width="80.655" height="75" class="svg-inline--fa fa-garage-open fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><g class="fa-group"><path class="fa-secondary" fill="currentColor" d="M128.65,224s-.65,0-.65,0l0,64H511.47l.53-64Zm104.21,96-8,32H415.14l-8-32Z" opacity="0.4"></path><path class="fa-primary" fill="currentColor" d="M610.5,117,338.41,3.67A57.4,57.4,0,0,0,320,0,57.4,57.4,0,0,0,301.5,3.67L29.5,117A48.14,48.14,0,0,0,0,161.28V496a16,16,0,0,0,16,16H80a16,16,0,0,0,16-16V224c0-17.59,14.59-32,32.59-32H511.41c18,0,32.59,14.41,32.59,32V496a16,16,0,0,0,16,16h64a16,16,0,0,0,16-16V161.28A48.14,48.14,0,0,0,610.5,117Zm-145,238.42L456.62,320H407.14l8,32H224.86l8-32H183.38l-8.85,35.39A47.93,47.93,0,0,0,144,400v32c0,11.71,6.61,21.52,16,27.1V488a24,24,0,0,0,24,24h32a24,24,0,0,0,24-24V464H400v24a24,24,0,0,0,24,24h32a24,24,0,0,0,24-24V459.1c9.39-5.58,16-15.39,16-27.1V400A47.93,47.93,0,0,0,465.47,355.39ZM208,431.85c-14.4,0-24-9.56-24-23.92S193.6,384,208,384s36,21.53,36,35.88S222.4,431.85,208,431.85Zm224,0c-14.4,0-36,2.39-36-12S417.6,384,432,384s24,9.58,24,23.93S446.4,431.85,432,431.85Z"></path></g></svg>';
$iconOneText = 'Garage Door Repair';
$iconOneLink = 'garage-door-repair.php?expansion=';

// SERVICE ICON TWO

$iconTwoImage	 = '<svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="garage" width="100.808" height="76.783" class="svg-inline--fa fa-garage fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><g class="fa-group"><path class="fa-secondary" fill="currentColor" d="M128,512H512V352H128.11Zm144-96h96a16,16,0,0,1,0,32H272a16,16,0,0,1,0-32Zm240-192L128,224v96H511.52Z" opacity="0.4"></path><path class="fa-primary" fill="currentColor" d="M640,161.28V496a16,16,0,0,1-16,16H560a16,16,0,0,1-16-16V224c0-17.59-14.59-32-32.59-32H128.59c-18,0-32.59,14.41-32.59,32V496a16,16,0,0,1-16,16H16A16,16,0,0,1,0,496V161.28A48.14,48.14,0,0,1,29.5,117l272-113.3A57.4,57.4,0,0,1,320,0a57.4,57.4,0,0,1,18.46,3.67L610.5,117A48.14,48.14,0,0,1,640,161.28Z"></path></g></svg>';
$iconTwoText 	 = 'Garage Door Installs';
$iconTwoLink 	 = 'garage-door-replacement.php?expansion=';

// SERVICE ICON THREE
$iconThreeImage	 = '<svg id="Group_4" data-name="Group 4" xmlns="http://www.w3.org/2000/svg" width="85.231" height="69.508" viewBox="0 0 85.231 69.508">
  <path id="Path_6" data-name="Path 6" d="M837.028,115.3v13.567h29.1a18.622,18.622,0,0,1,27.032,0h29.1V115.3Z" transform="translate(-837.028 -115.302)" fill="#14345a"/>
  <path id="Path_7" data-name="Path 7" d="M860.977,202.891v-2.978a18.542,18.542,0,0,1,1.7-7.775H837.028V205.7h21.741A9.285,9.285,0,0,1,860.977,202.891Z" transform="translate(-837.028 -173.491)" fill="#14345a"/>
  <path id="Path_8" data-name="Path 8" d="M1084.234,199.913v2.978a9.285,9.285,0,0,1,2.208,2.814h21.741V192.138h-25.651A18.552,18.552,0,0,1,1084.234,199.913Z" transform="translate(-1022.951 -173.491)" fill="#14345a"/>
  <rect id="Rectangle_6" data-name="Rectangle 6" width="20.741" height="13.567" transform="translate(0 37.294)" fill="#14345a"/>
  <rect id="Rectangle_7" data-name="Rectangle 7" width="20.741" height="13.567" transform="translate(64.491 37.294)" fill="#14345a"/>
  <path id="Path_9" data-name="Path 9" d="M892.367,352.413H866.921a9.162,9.162,0,0,1-8.784-6.6H837.028v13.567h85.231V345.81H901.15A9.162,9.162,0,0,1,892.367,352.413Z" transform="translate(-837.028 -289.869)" fill="#14345a"/>
  <path id="Path_10" data-name="Path 10" d="M960.221,168.19a13.6,13.6,0,0,0-13.587,13.587v5.944a4.071,4.071,0,0,0-3.208,3.977v17.049a4.072,4.072,0,0,0,4.071,4.072h25.446a4.072,4.072,0,0,0,4.071-4.072V191.7a4.071,4.071,0,0,0-3.208-3.977v-5.944A13.6,13.6,0,0,0,960.221,168.19Zm3.308,37.467h-6.616l1.434-4.835a3.308,3.308,0,1,1,3.746,0Zm4.227-18.031h-15.07v-5.85a7.535,7.535,0,1,1,15.07,0Z" transform="translate(-917.605 -155.355)" fill="#14345a"/>
</svg>';
$iconThreeText 	 = 'Safety Check';
$iconThreeLink 	 = 'safety-check.php?expansion=';

//SERVICE ICON FOUR
$iconFourImage	 = '<svg xmlns="http://www.w3.org/2000/svg" width="80.655" height="75" viewBox="0 0 79.655 78.31">
  <path id="Path_11" data-name="Path 11" d="M887.867,813.386l7.089,7.089a12.517,12.517,0,0,1,0,17.685l-10.691,10.691A12.455,12.455,0,0,1,868.2,850.18l-.216-.154,6.227-6.227a4.01,4.01,0,0,0,4.107-.9l10.691-10.691a4.1,4.1,0,0,0,0-5.789l-7.089-7.089a4.1,4.1,0,0,0-5.789,0l-10.691,10.691a4.01,4.01,0,0,0-.9,4.107l-6.227,6.227-.154-.217a12.454,12.454,0,0,1,1.329-16.066l10.691-10.691A12.517,12.517,0,0,1,887.867,813.386Zm-31.2,47.954a4.01,4.01,0,0,1-.9,4.107l-10.691,10.691a4.1,4.1,0,0,1-5.789,0l-7.089-7.089a4.1,4.1,0,0,1,0-5.789l10.691-10.691a4.01,4.01,0,0,1,4.107-.9l6.227-6.227-.217-.154a12.455,12.455,0,0,0-16.066,1.329l-10.691,10.691a12.517,12.517,0,0,0,0,17.685l7.089,7.089a12.517,12.517,0,0,0,17.685,0L861.72,871.4a12.455,12.455,0,0,0,1.329-16.066l-.154-.216ZM840.9,829.651l-9.424-9.424a1.768,1.768,0,1,0-2.486,2.486l9.424,9.424a1.768,1.768,0,1,0,2.487-2.486Zm-5.574,9.084a2.114,2.114,0,0,0-1.956-1.956l-12.652-.673a1.635,1.635,0,0,0-1.758,1.758,2.115,2.115,0,0,0,1.956,1.956l12.652.673a1.634,1.634,0,0,0,1.758-1.758Zm13.93-13.929-.674-12.652a2.115,2.115,0,0,0-1.956-1.956,1.635,1.635,0,0,0-1.758,1.758l.674,12.652a2.114,2.114,0,0,0,1.956,1.956,1.634,1.634,0,0,0,1.758-1.758Zm37.51,50.711-9.424-9.424a1.768,1.768,0,1,0-2.487,2.487L884.281,878a1.768,1.768,0,1,0,2.486-2.486Zm-15.876,10.76-.676-12.654a2.115,2.115,0,0,0-1.956-1.956,1.635,1.635,0,0,0-1.758,1.758l.676,12.654a2.115,2.115,0,0,0,1.956,1.956,1.635,1.635,0,0,0,1.758-1.758ZM896.8,860.37a2.115,2.115,0,0,0-1.956-1.956l-12.654-.676a1.635,1.635,0,0,0-1.758,1.758,2.115,2.115,0,0,0,1.956,1.956l12.654.676a1.635,1.635,0,0,0,1.758-1.758Z" transform="translate(-818.959 -809.728)" fill="#14345a"/>
</svg>';
$iconFourText 	 = 'Broken Springs';
$iconFourLink 	 = 'broken-springs.php?expansion=';

//SERVICE ICON FIVE
$iconFiveImage	 = '<svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="paint-roller" class="svg-inline--fa fa-paint-roller fa-w-16" role="img" width="80.655" height="75" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><g class="fa-group"><path class="fa-secondary" fill="currentColor" d="M384 160H32a32 32 0 0 1-32-32V32A32 32 0 0 1 32 0h352a32 32 0 0 1 32 32v96a32 32 0 0 1-32 32z" opacity="0.4"></path><path class="fa-primary" fill="currentColor" d="M512 128v64a96 96 0 0 1-96 96H256v32a32 32 0 0 1 32 32v128a32 32 0 0 1-32 32h-64a32 32 0 0 1-32-32V352a32 32 0 0 1 32-32v-32a64 64 0 0 1 64-64h160a32 32 0 0 0 32-32V64a64 64 0 0 1 64 64z"></path></g></svg>';
$iconFiveText 	 = 'Garage Floor Coatings';
$iconFiveLink 	 = 'garage-floor-coatings.php?expansion=';

//SERVICE ICON SIX
$iconSixImage	 = '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="container-storage" class="svg-inline--fa fa-container-storage fa-w-20" role="img" width="80.655" height="75" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M640 80V48c0-8.8-7.2-16-16-16H16C7.2 32 0 39.2 0 48v32c0 8.8 7.2 16 16 16v320c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h608c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16V96c8.8 0 16-7.2 16-16zM448 416h-32V96h32v320zM192 96h32v320h-32V96zm144 320h-32V96h32v320zM80 96h32v320H80V96zm480 320h-32V96h32v320z"></path></svg>';
$iconSixText 	 = 'Gate Services';
$iconSixLink 	 = 'gates.php?expansion=';

//SERVICE ICON SEVEN
$iconSevenImage	 = '<svg aria-hidden="true" focusable="false" data-prefix="fad" width="80.655" height="75" data-icon="warehouse-alt" class="svg-inline--fa fa-warehouse-alt fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><g class="fa-group"><path class="fa-secondary" fill="currentColor" d="M304 416H144a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h160a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm0-128H144a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h160a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm192 128H368a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16z" opacity="0.4"></path><path class="fa-primary" fill="currentColor" d="M640 161.28V504a8 8 0 0 1-8 8h-48a8 8 0 0 1-8-8V208a16 16 0 0 0-16-16H80a16 16 0 0 0-16 16v296a8 8 0 0 1-8 8H8a8 8 0 0 1-8-8V161.28A48.11 48.11 0 0 1 29.5 117l272-113.3a48.06 48.06 0 0 1 36.9 0L610.5 117a48.11 48.11 0 0 1 29.5 44.28z"></path></g></svg>';
$iconSevenText 	 = 'Garage Storage';
$iconSevenLink 	 = 'garage-storage.php?expansion=';


$iconEightImage = '<svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="garage-open" width="80.655" height="75" class="svg-inline--fa fa-garage-open fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><g class="fa-group"><path class="fa-secondary" fill="currentColor" d="M128.65,224s-.65,0-.65,0l0,64H511.47l.53-64Zm104.21,96-8,32H415.14l-8-32Z" opacity="0.4"></path><path class="fa-primary" fill="currentColor" d="M610.5,117,338.41,3.67A57.4,57.4,0,0,0,320,0,57.4,57.4,0,0,0,301.5,3.67L29.5,117A48.14,48.14,0,0,0,0,161.28V496a16,16,0,0,0,16,16H80a16,16,0,0,0,16-16V224c0-17.59,14.59-32,32.59-32H511.41c18,0,32.59,14.41,32.59,32V496a16,16,0,0,0,16,16h64a16,16,0,0,0,16-16V161.28A48.14,48.14,0,0,0,610.5,117Zm-145,238.42L456.62,320H407.14l8,32H224.86l8-32H183.38l-8.85,35.39A47.93,47.93,0,0,0,144,400v32c0,11.71,6.61,21.52,16,27.1V488a24,24,0,0,0,24,24h32a24,24,0,0,0,24-24V464H400v24a24,24,0,0,0,24,24h32a24,24,0,0,0,24-24V459.1c9.39-5.58,16-15.39,16-27.1V400A47.93,47.93,0,0,0,465.47,355.39ZM208,431.85c-14.4,0-24-9.56-24-23.92S193.6,384,208,384s36,21.53,36,35.88S222.4,431.85,208,431.85Zm224,0c-14.4,0-36,2.39-36-12S417.6,384,432,384s24,9.58,24,23.93S446.4,431.85,432,431.85Z"></path></g></svg>';
$iconEightText = 'Door Openers';
$iconEightLink = 'door-openers.php?expansion=';


/* This is for the the header tag */
$header = array(
	//branding
	"index"				=> " Garage Door Repair",
	"about-us"				=> " Garage Door Repair",
	"our-services"		=> "Our Services",
	"reviews"		=> "Our Customer Reviews",
	"coupons"			=> "Special Offers",
	"thank-you"			=> "Thank You for Contacting Us",
	"hvac"				=> "Our  HVAC Services",
	
	//electrical
	"garage-door-repair" => "Garage Door Repair",
	"broken-springs" => "Broken Springs Repair",
	"safety-check" => "Safety Check",
	"garage-door-replacement" => " Garage Door <br>Replacement",
	"garage-storage" => "Garage Storage Services",
	"door-openers" => "Door Openers Services",
	"gates" => "Gate Service and Repair",
	"garage-floor-coatings" => "Garage Floor Coatings Services",
);


/* This is for coupon names */
$coupons_name = array(
	"index" 				=> "<h2>$79 Off</h2><h3> Your Garage Door Repair!</h2>",
	"reviews"				=> "<h2>Special Offers</h2>",
	"coupons" 				=> "<h2>Special Offers</h2>",
	"our-services" 			=> "<h2>Special Offers</h2>",
	"broken-springs" 		=> "<h2>Special Offers</h2>",
	"safety-check" 			=> "<h2>Special Offers</h2>",
	"door-openers" 			=> "<h2>Special Offers</h2>",
	"garage-storage" 		=> "<h2>Special Offers</h2>",
	"garage-floor-coatings" => "<h2>Special Offers</h2>",
	"gates"		 			=> "<h2>Special Offers</h2>",


	"about-us" 				=> "<h2>$79 Off</h2><h3> Your Garage Door Repair!</h2>",
	"garage-door-repair" 		=> "<h2>$79 Off</h2><h3> Your Garage Door Repair!</h3>",
	"garage-door-replacement" 	=> "<h2>$209 Off</h2><h3>Garage Door Replacement!</h3>",

	
);

$specials = array(
);

/* List of the pages */
$branding = array(
	"index",
	"about-us",
	"our-services",
	"testimonials",
	"thank-you",
);

$reviews = array(
	"reviews",
);

$replacement = array(
	"garage-door-replacement",
);


$slider_name = array(
	"about-us",
	"door-openers",
	"garage-floor-coatings",
	"gates",
	"garage-storage", 
	"garage-door-replacement",
	"our-services",
	"safety-check",
);

/* Slider */
class Slider{
    public static function name($title,$slider_name){
        $slider = "";
        
        if(in_array($title,$slider_name)){
            $slider .= "<div class='slider " . $title . "'>";
        }else{
            $slider .= "<div class='slider' >";
        }
        
        return $slider;
    }
}

/* Coupon */
class Coupon{
	public static function offer_name($title,$coupons_name){
		$coupon_container = "";
		
		if(in_array($title,$coupons_name)){
			$coupon_container .= "<div id='coupon_area'>";
			$coupon_container .= "<p id='call'>Schedule This <b>" . date("l"). "</b> for</p>";
			$coupon_container .= "<h2>" . Coupons::offer_name($title,$coupons_name). "</h2>";
			$coupon_container .= "<h3>Your Garage Repair!*</h3>";
			$coupon_container .= "<p id='restriction'>Restrictions may apply.</p>";
			$coupon_container .= "</div>";
		}else{
			$coupon_container .= "<div id='coupon_area'>";
			$coupon_container .= "<p id='call'>Call This <b>" . date("l"). "</b> for</p>";
			$coupon_container .= "" . Coupons::offer_name($title,$coupons_name). "";

			//$coupon_container .= "<h3>Your Garage Repair!*</h3>";
			$coupon_container .= "<p id='restriction'>Restrictions may apply.</p>";
			$coupon_container .= "</div>";
		}
		
		return $coupon_container;
	}
}


/* Phone */
class Phone{

	/* Use this function if there are multiple phone numbers */
	public static function number($title,$hvac,$plumbing,$electrical,$phone_number){
		if(in_array($title,$plumbing)){
			return ("303-502-9112"); // Enter the number you want if you land on this page
		}else if(in_array($title,$hvac)){
			return ("303-578-4053");
		}else if(in_array($title,$electrical)){
			return ("303-835-3615");
		}else{
			self::number_single($phone_number);
		}
	}
	
	/* Use this function if there is only a single phone number */
	public static function number_single($phone_number){
		return $phone_number;
	}
}

/* Meta tags */
class Meta{

	public static function keyword($title,$meta_keywords){
		foreach($meta_keywords as $key => $value){
			if($title == $key){
				return $value;
			}
		}
	}

	public static function description($title,$meta_descriptions){
		foreach($meta_descriptions as $key => $value){
			if($title == $key){
				return $value;
			}
		}
	}
}



/* Title */
class Header{

	public static function header_name($title,$header){
		foreach($header as $key => $value){
			if($title == $key){
				return $value;
			}
		}
	}
}


class Coupons{

	public static function offer_name($title,$coupons_name){
		foreach($coupons_name as $key => $value){
			if($title == $key){
				return $value;
			}
		}
	}
}
