<?php // LP PHP functions & variables

/* Global Variables */
$company_name = "Weeks Service Company";

$vs_name = "Marketing by <a target='_blank' href='http://vitalstorm.com/'>VitalStorm</a>";

$copy = "Copyright &copy; " . date("Y") . " " . $company_name;

$company_logo = "logo";

$client_id = "WE";

/* $title is used anywhere to return the name of the page */
$title = substr(basename($_SERVER["PHP_SELF"]),0,-4);

/* PHONE NUMBER */
$phone_number = "281-786-0862"; 

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
	"index"				=> $company_name.", HVAC company, heating company, air conditioning company, A/C company, refrigeration services, furnace repair, heating installation, A/C installation, indoor air quality",
	"about-us"			=> $company_name.", HVAC company, heating company, air conditioning company, A/C company, refrigeration services, furnace repair, heating installation, A/C installation, indoor air quality",
	"our-services"		=> "HVAC company, heating company, air conditioning company, A/C company, refrigeration services, furnace repair, indoor air quality",
	"testimonials"		=> "trusted HVAC services, HVAC experts, expert HVAC services, trusted technician, local technician, HVAC reviews, HVAC testimonials, highly rated HVAC, top rated HVAC, refrigeration repair review, indoor air quality review",
	"coupons"			=> "HVAC coupon, heating repair coupon, heating installation discount, air conditioning repair coupon, A/C repair discount, A/C installation discount, furnace repair coupon, furnace repair discount",
	"thank-you"			=> "Thank You for Contacting Us",
	
	//electrical
	"electrical"		=> "electrical services, expert electricians, electrical experts, local electricians, electrical electricians, best electrical companies, electrical repair, electrical installation, residential electrician, electrical experts",
	"breakers"			=> "breaker repair, breaker experts, local breaker experts, electrical experts, breaker electricians, breaker box repair, breaker box installation, break box electrician, breaker switch replacement, electrical circuit repair, panel ",
	"panels"			=> "panel repair, panel replacement, panel experts, local electrician, local electrical experts, breaker repair, breaker experts, local breaker experts, electrical experts, breaker electricians, breaker box repair, breaker box installation, break box electrician, breaker switch replacement, electrical circuit repair, panel repair, electric box repair, service box repair, breaker board repair, panel board repair, panel board replacement, breaker panel, breaker panel repair",
	"surge"				=> "surge protection, surges, surge protectors, whole home surge protectors, surge experts, whole house surge protection, ",
	"ceiling-fans"		=> "expert ceiling fan installation, trusted electrician, ceiling fan experts, trusted ceiling fan installation, ceiling fan installation, ceiling fan repair, ceiling fan fix, fan installation, fan repair, electrical ceiling fan",
	
	//hvac
	"cooling-repair" 	=> "trusted technician, expert A/C services, A/C experts, A/C technicians, local technicians, expert A/C repair, cooling repairs, expert cooling repair, HVAC repair, air conditioner repair, air conditioning service, air conditioner technician",
	"cooling-replace"	=> "trusted technician, expert A/C services, A/C experts, A/C technicians, local technicians, expert A/C replace, new air conditioner, replace air conditioner, A/C replacement, qualified HVAC installation, expert HVAC installation, replace HVAC, new HVAC, air conditioner installation, A/C unit replacement, new A/C, air conditioning replacement",
	"cooling-tuneup" 	=> "trusted technician, expert A/C services, A/C experts, A/C technicians, local technicians, expert A/C tune-up, HVAC tune-up, HVAC repair, A/C tune-up, HVAC system diagnostics, air conditioning repair, air conditioning tune-up, HVAC technician, air conditioner maintenance, air conditioner tune-up, air conditioner service, air conditioner repair",
	"heating-repair" 	=> "trusted technician, expert furnace services, furnace experts, furnace technicians, local technicians, expert furnace repair, heating repair, furnace fix, expert HVAC repair, HVAC repair service",
	"heating-replace" 	=> "trusted technician, expert heating services, heat experts, heat technicians, local technicians, expert heat replace, HVAC system replace, HVAC replacement, HVAC installation, heater installation, furnace installation, furnace replacement, heating replacement, expert HVAC technician,",
	"heating-tuneup" 	=> "trusted technician, expert heating services, heat experts, heat technicians, local technicians, expert heat tune-up, furnace repair, local furnace repair, broken furnace, fix furnace, heating repair, annual furnace tune-ups",
	
	//specialties
	"air-purification"	=> "indoor air quality solutions, air purification, air purifiers, air knight systems, electric air cleaners, HALO REME, purify indoor air",
	"refrigeration"		=> "refrigerator repair, fridge repair, freezer repair, commercial fridge",
);

/* This is for the meta tag descriptions */
$meta_descriptions = array(
	//branding
	"index"				=> "Weeks Service Company can tend to your every heating, air conditioning, indoor air quality and refrigeration need. Same-day service from background checked, drug screened technicians.",
	"about-us"			=> "Weeks Service Company can tend to your every heating, air conditioning, indoor air quality and refrigeration need. Same-day service from background checked, drug screened technicians.",
	"our-services"		=> "Weeks Service specializes in heating, air conditioning, indoor air quality and refrigeration services. Call now for same-day service.",
	"testimonials"		=> "We strive for excellence in every facet of our business, and we take our customers’ opinions very seriously. Read our HVAC and refrigeration tesitmonials!",
	"coupons"			=> "For more information on our current plumbing, heating or air conditioning coupon offers, give us a call. Hurry, these deals expire soon!",
	
	//electrical
	"electrical"		=> "As a homeowner, it’s critical to have your electrical system operating at optimal level. We can find your problem and fix it quickly and efficiently. We are the trusted name for all your electrical needs.",
	"breakers"			=> "We’ve all experienced a tripped breaker at one time or another. A continuously tripping breaker, however, could indicate that you have a larger problem at hand. Call immediately if you suspect any problems with your circuit breaker.",
	"panels"			=> "Your breaker panel is the heart of your home’s electrical system. It controls the electricity coming into your home while also sending electricity to each circuit within your home. Unfortunately, circuit breaker panels don’t last for eternity. In fact, an outdated panel can be very dangerous.",
	"surge"				=> "By purchasing whole-house surge protection, rest assured all of your expensive devices and appliances are out of harm’s way. Protect you and your home from dangerous and costly electrical surges and spikes!",
	"ceiling-fans"		=> "Ceiling fan replacements, installations, and removals require more than just connecting a few wires. Don’t risk electrocution or damage to your electrical system. These jobs call for a licensed, expert electrician. Call now for a licensed and insured electrician you can trust!",
	
	//hvac
	"cooling-repair" 	=> "We perform superior air conditioning repairs at an affordable price! Call now for same-day service.",
	"cooling-replace" 	=> "Do you need expert air conditioning replacement service? Call <?php echo $company_name;?> for same-day service.",
	"cooling-tuneup" 	=> "Annual A/C tune-ups dramatically extend the lifespan of your air conditioner. Schedule your appointment today!",
	"heating-repair" 	=> "Call <?php echo $company_name;?> for professional, on-time heating repair. Same-day service available.",
	"heating-replace" 	=> "Call now for professional heating replacement. We’re here to help you same-day. Background checked, drug tested and licensed technicians.",
	"heating-tuneup" 	=> "Schedule your annual heating tune-up with <?php echo $company_name;?> today! Expert service at an affordable price.",
	
	//plumbing
	"plumbing"			=> "We'll make sure you can remain confident that your home will be handled with the utmost care from the start. ",
	"drain-clean"		=> "It’s important to address any clogs promptly so that your plumbing system doesn’t incur any further damages. ",
	"water-heater"		=> "We understand how important it is to have hot water available at all times. That is why Mr. Rooter provides fast and professional water heater installation and repair services at fair prices.",
	
	//specialties
	"air-purification"	=> "Sick and tired of being sick and tired? Call now to learn more about our air purification systems!",
	"refrigeration"		=> "Call now for same-day residential or commercial refrigerator and freezer repair and service. ",

);

/* This is for the the header tag */
$header = array(
	//branding
	"index"				=> 
	"Learn More About Us",
	"about-us"			=> "Learn More About Us",
	"our-services"		=> "Our " . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Services",
	"testimonials"		=> "Our " . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Customer Reviews",
	"coupons"			=> "Special Offers",
	"thank-you"			=> "Thank You for Contacting Us",
	"hvac"				=> "Our " . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " HVAC Services",
	
	//electrical
	"electrical"		=> ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Electrical Service & Repair",
	"breakers"			=> ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Circuit Breaker Repair & Replacement",
	"panels"			=> ucwords(str_replace('-', ' ', $_GET['expansion'])) .  " Electrical Panel Repair & Replacement",
	"surge"				=> "Trusted " . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Whole-Home Surge Protection",
	"ceiling-fans"		=> ucwords(str_replace('-', ' ', $_GET['expansion'])) .  " Ceiling Fan Repair & Installation",
	
	//hvac
	"cooling-repair" 	=> "Expert ". ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Air Conditioner Repair",
	"cooling-replace" 	=> "Trusted " . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Air Conditioner Replacement",
	"cooling-tuneup" 	=> "Professional " . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Air Conditioner Tune-Up",
	"heating-repair" 	=> "Expert " . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Furnace Repair",
	"heating-replace" 	=> "Trusted " . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Furnace Replacement",
	"heating-tuneup" 	=> "Professional " . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Furnace Tune-Ups",
	
	//plumbing
	"plumbing"			=> "Trusted " . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Plumbing Services",
	"drain-clean"		=> ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Drain Cleaning Experts",
	"water-heater"		=> ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Water Heater Repair and Installation",
	
	//specialties
	"refrigeration" 	=> "Trusted " . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Refrigeration Services",
	"air-purification" 	=> "Trusted " . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Air Purification Services",
	
);


/* This is for coupon names */
$coupon_name = array(
	"coupons",
	
	//hvac
	"cooling-repair",
	"cooling-replace",
	"cooling-tuneup",
	"heating-repair",
	"heating-replace",
	"heating-tuneup",
	"refrigeration",
	"air-purification",
	
	
);

$specials = array(
	"cooling-repair",
	"cooling-replace",
	"cooling-tuneup",
	"heating-repair",
	"heating-replace",
	"heating-tuneup",
);

/* List of the pages */
$branding = array(
	"index",
	"about-us",
	"our-services",
	"testimonials",
	"thank-you",
);

$electrical = array(
	"electrical",
	"breakers",
	"panels",
	"surge",
	"ceiling-fans",
	"generators",
	"lighting",
	"carbon-detectors",
);

$hvac = array(
	"cooling-repair",
	"cooling-replace",
	"cooling-tuneup",
	"heating-repair",
	"heating-replace",
	"heating-tuneup",
	"boilers",
	"thermostats",
	"hvac",
);

$plumbing = array(
	"plumbing",
	"drain-clean",
	"water-heater",
	"toilets",
	"tubs-showers",
	"water-conditioners",
	"faucets",
	"disposals",
);


/* Coupon */
class Coupon{
	public static function name($title,$coupon_name,$client_id){
		$coupon_container = "";
		
		if(in_array($title,$coupon_name)){
			$coupon_container .= "<div id='specials' style='background:url(\"http://elements.vitalstorm.com/elements/" . $client_id . "/" . $title . ".png\") no-repeat scroll rgba(0, 0, 0, 0); background-size: 100%;'>";
			$coupon_container .= "<div id='print_coupon'><span>PRINT</span></div>";
			$coupon_container .= "<p id='call'>Call this <b>" . date("l"). "</b> for</p>";
			$coupon_container .= "</div>";
		}else{
			$coupon_container .= "<div id='specials' style='background:url(\"http://elements.vitalstorm.com/elements/" . $client_id . "/default" . ".png\") no-repeat scroll rgba(0, 0, 0, 0); background-size: 100%;'>";
			$coupon_container .= "<div id='print_coupon'><span>PRINT</span></div>";
			$coupon_container .= "<p id='call'>Call this <b>" . date("l"). "</b> for</p>";
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