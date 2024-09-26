<?php // LP PHP functions & variables

/* Global Variables */
$company_name = "Welborn";

$vs_name = "Marketing by <a target='_blank' href='http://vitalstorm.com/'>VitalStorm</a>";

$copy = "Copyright &copy; " . date("Y") . " " . $company_name;

$company_logo = "logo";

$client_id = "LG";

/* $title is used anywhere to return the name of the page */
$title = substr(basename($_SERVER["PHP_SELF"]),0,-4);

/* PHONE NUMBER */
$phone_number = "508-343-8742"; 

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
	"index"				=> $company_name.", electrical services, expert electricians, electrical experts, local electricians, electrical electricians, best electrical companies, electrical company, trusted electrician",
	"about-us"			=> $company_name.", electrical services, expert electricians, electrical experts, local electricians, electrical electricians, best electrical companies, electrical company, trusted electrician",
	"our-services"		=> "electrical services, expert electricians, electrical experts, local electricians, electrical electricians, full service electrician, electrical repair",
	"testimonials"		=> "electrical services, expert electricians, electrical experts, local electricians, electrical electricians, electrical customer reviews, local electrical reviews, top rated electrician, best electrician, local electrician reviews, electrician testimonials, commercial electrician, commercial electrical repair, commercial electrical reviews, commercial electrical services",
	"coupons"			=> "electrical coupon, electrician coupon, electrical discount, electrical repair coupon, electrical deals, electrical savings",
	"thank-you"			=> "Thank You for Contacting Us",
	
	//electrical
	"electrical"		=> "electrical wiring expert, electrical wiring expert, expert electrician, electrical expert, local electrician, electrical electricians, electrical service, electrical repair, local electrical service, best electrical,",
	"breakers"			=> "Call <?php echo $company_name;?> immediately if you suspect any problems with your circuit breaker.",
	"panels"			=> "panel repair, panel replacement, panel experts, local electrician, local electrical experts, breaker repair, breaker experts, local breaker experts, electrical experts, breaker electricians, breaker box repair, breaker box installation, break box electrician, breaker switch replacement, electrical circuit repair, panel repair, electric box repair, service box repair, breaker board repair, panel board repair, panel board replacement, breaker panel, breaker panel repair",
	"surge"				=> "surge protection, surges, surge protectors, whole home surge protectors, surge experts, whole house surge protection, ",
	"ceiling-fans"		=> "expert ceiling fan installation, trusted electrician, ceiling fan experts, trusted ceiling fan installation, ceiling fan installation, ceiling fan repair, ceiling fan fix, fan installation, fan repair, electrical ceiling fan",
	"generators"		=> "generator, electrical generator, electric generator, backup generator, standby generator, home generator, generator repair, generator installation, generator maintenance, solar generator, residential generator",
	
	//hvac
	"cooling-repair" 	=> "trusted technician, expert A/C services, A/C experts, A/C technicians, local technicians, expert A/C repair, cooling repairs, expert cooling repair, HVAC repair, air conditioner repair, air conditioning service, air conditioner technician",
	"cooling-replace"	=> "trusted technician, expert A/C services, A/C experts, A/C technicians, local technicians, expert A/C replace, new air conditioner, replace air conditioner, A/C replacement, qualified HVAC installation, expert HVAC installation, replace HVAC, new HVAC, air conditioner installation, A/C unit replacement, new A/C, air conditioning replacement",
	"cooling-tuneup" 	=> "trusted technician, expert A/C services, A/C experts, A/C technicians, local technicians, expert A/C tune-up, HVAC tune-up, HVAC repair, A/C tune-up, HVAC system diagnostics, air conditioning repair, air conditioning tune-up, HVAC technician, air conditioner maintenance, air conditioner tune-up, air conditioner service, air conditioner repair",
	"heating-repair" 	=> "trusted technician, expert furnace services, furnace experts, furnace technicians, local technicians, expert furnace repair, heating repair, furnace fix, expert HVAC repair, HVAC repair service",
	"heating-replace" 	=> "trusted technician, expert heating services, heat experts, heat technicians, local technicians, expert heat replace, HVAC system replace, HVAC replacement, HVAC installation, heater installation, furnace installation, furnace replacement, heating replacement, expert HVAC technician,",
	"heating-tuneup" 	=> "trusted technician, expert heating services, heat experts, heat technicians, local technicians, expert heat tune-up, furnace repair, local furnace repair, broken furnace, fix furnace, heating repair, annual furnace tune-ups",
	
	//plumbing
	"plumbing"			=> "plumbing service, local plumber, local plumbing repair, plumbing installation, plumbing expert, trusted plumber, plumbing emergency, reliable plumber, plumbing replacement, plumbing repair, expert plumbing repair",
	"drain-clean"		=> "drain cleaning, clog removal, clogged drain, drain repair, tough clog, unclog drain, drain cleaning repair, main line cleaning, sewer line cleaning, drain cleaning expert, plumbing drain service, drain clean service,",
	"water-heater"		=> "water heater experts, expert water heater installation, water heater technicians, local technician, trusted technician, water heater repair, water heater replacement, water heater installation, water heater service, expert ",
	
	//specialties
);

/* This is for the meta tag descriptions */
$meta_descriptions = array(
	//branding
	"index"				=> "We specialize in expert electrical repair and service. Schedule your appointment today!",
	"about-us"			=> "We specialize in expert electrical repair and service. Schedule your appointment today!",
	"our-services"		=> "Call " . $company_name . " now for on-time expert electrical service!",
	"testimonials"		=> "We love our customers and truly care about their opinions. See what they have to say about our top-notch service!",
	"coupons"			=> "For more information on our current coupon offers, give us a call. Hurry, these deals expire soon!",
	
	//electrical
	"electrical"		=> "We will locate and diagnose your electrical problem efficiently and accurately!",
	"breakers"			=> "Call " . $company_name . " immediately if you suspect any problems with your circuit breaker.",
	"panels"			=> ": Is your panel up to date? Call " . $company_name . " to have it inspected!",
	"surge"				=> "Keep your expensive devices and electronics safe with whole-house surge protection!",
	"ceiling-fans"		=> "Boost your home’s efficiency and appeal with ceiling fans!",
	"generators"		=> "Don’t be left in the dark! At " . $company_name . " we offer a variety of home and backup generators that will fit both your needs and budget. ",
	
	//hvac
	"cooling-repair" 	=> "While some repairs may be an easy fix, if you do not know what you are doing, it’s best to leave the job to a certified technician as an improper repair can further damage your system. Our trusted technicians will work to repair your problem as quickly and efficiently as possible in order to prevent any additional damages from occurring. ",
	"cooling-replace" 	=> "Is it time to say goodbye to an air conditioner that has kept you cool and comfortable for so many years? As you try to find a replacement air conditioner that suits both your needs and budget, we hope that you give us a call.",
	"cooling-tuneup" 	=> "We recommend scheduling annual tune-ups for your air conditioner. Annual tune-ups dramatically extend the lifespan of your air conditioner while also making sure your manufacturer’s warranty stays in effect.",
	"heating-repair" 	=> "We want you to have reliable comfort and warmth for your home. For this reason, we provide 24-hour emergency repair service when you need it. When your heat fails, you can depend on the technician to perform your repair service quickly, accurately, and affordably. ",
	"heating-replace" 	=> "Installing or replacing a new heating system is a big decision. If your heating system frequently breaks down or stops working properly, call our experts to quickly diagnose your problem and provide you with effective and affordable options.",
	"heating-tuneup" 	=> "Annual heating tune-ups are critical to the performance of your HVAC system. Our technicians are familiar with every furnace make and model and are always comprehensive and thorough with every tune-up.",
	
	//plumbing
	"plumbing"			=> "We'll make sure you can remain confident that your home will be handled with the utmost care from the start. ",
	"drain-clean"		=> "It’s important to address any clogs promptly so that your plumbing system doesn’t incur any further damages. ",
	"water-heater"		=> "We understand how important it is to have hot water available at all times. That is why Mr. Rooter provides fast and professional water heater installation and repair services at fair prices.",
	
	//specialties
);

/* This is for the the header tag */
$header = array(
	//branding
	"index"				=>  "Learn More About Us",
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
	"cooling-repair" 	=> "Expert ". ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Air Conditioning Repair",
	"cooling-replace" 	=> "Trusted " . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Air Conditioning Replacement",
	"cooling-tuneup" 	=> "Professional " . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Air Conditioning Tune-Up",
	"heating-repair" 	=> "Expert " . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Heating Repair",
	"heating-replace" 	=> "Trusted " . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Heating Replacement",
	"heating-tuneup" 	=> "Professional " . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Heating Tune-Ups",
	
	//plumbing
	"plumbing"			=> "Trusted " . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Plumbing Services",
	"drain-clean"		=> ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Drain Cleaning Experts",
	"water-heater"		=> ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Water Heater Repair and Installation",
	
	//specialties
	"boilers"			=> "" . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Boiler Repair & Replacement",
	"thermostats"			=> "" . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Thermostat Services",
	"generators"			=> "" . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Whole Home Generator Services",
	"lighting"			=> "" . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Lighting Experts",
	"carbon-detectors"			=> "" . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Smoke &amp; Carbon Monoxide Detectors",
	"toilets"			=> "" . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Toilet Repair &amp; Replacement",
	"tubs-showers"			=> "" . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Tubs &amp; Shower Replacement",
	"water-conditioners"			=> "" . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Water Conditioning Systems",
	"faucets"			=> ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Faucet and Fixture Services",
	"disposals"			=> "Expert " . ucwords(str_replace('-', ' ', $_GET['expansion'])) . " Garbage Disposal Services",
);


/* This is for coupon names */
$coupon_name = array(
	"coupons",
	
	//electrical
	"electrical",
	"breakers",
	"panels",
	"surge",
	"ceiling-fans",
	
	//hvac
	"cooling-repair",
	"cooling-replace",
	"cooling-tuneup",
	"heating-repair",
	"heating-replace",
	"heating-tuneup",
	
	//plumbing
	"plumbing",
	"drain-clean",
	"water-heater",
	"disposals",
	
	//
	
	"boilers",
	"thermostats",
	"generators",
	"lighting",
	"carbon-detectors",
	"toilets",
	"tubs-showers",
	"water-conditioners",
	"faucets",
);

$specials = array(
	"breakers",

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