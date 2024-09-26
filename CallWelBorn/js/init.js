jQuery(document).ready(function($){
// slide open contact form
$('.coupon_container').on('click', '.nav-trigger', function(event){
// open primary navigation on mobile
event.preventDefault();
$('.coupon_container').toggleClass('nav-open');
});
//PULL PHONE NUMBER INTO FORM
var timesChecked = 0;
	var $vsref = $('input[name="Field5"]');
	if($vsref.length < 1){
		$vsref = $('input[name=vsref]');
	}
	var interval = setInterval(function(){
		if(typeof _vsrkpd == 'object' && typeof _vsrkpd.d != 'undefined'){
			if(_vsrkpd.d == null){
				$vsref.val($('#number_rewrite').text().replace(/[^0-9]/g,''));
			}else{
				$vsref.val(_vsrkpd.d[0].num);
			}
			clearInterval(interval);
		}else if(timesChecked > 50){
			$vsref.val($('#number_rewrite').text().replace(/[^0-9]/g,''));
			clearInterval(interval);
		}else{
			timesChecked++;
		}
	},100);

	// MAKE CONTACT FORM STICK TO TOP //
	var $sliding_marque = $("#sliding_marque");
	var $asset_container = $("#h4_service").parent();
	var h4_serviceWidth = $("#h4_service").width();
	var slide_in_numberWidth = $("#slide_in_number").width();
	var frame_view = h4_serviceWidth + "px";

	/* Set the position of the sliding of the sliding element #sliding_marque.
	When #schedule element is fixed to top of the screen the #h4_service element
	will slide to the left and the phone number will slide into the frame_view
	element.  The code below is the initial css style. */


	if($(window).width() > 785){
		function stickContact(){
			/* Get the position of the scroll bar */
			var scrollTop = $(document).scrollTop();

			/* Get the height of the .slider */
			var reviewBlurbHeight = $("#review_blurb").outerHeight();

			/* Get handle of the #schedule, this will get fixed to the top if
			the scrollTop is more than the sum of topContainerHeight and sliderHeight */
			var $schedule = $("#schedule");

			var $slidingMarque = $("#sliding_marque");

			var $contactForm = $("#include_desktop_contact_form");

		

			/* Check to see if the scrollTop
			is more than the sum of topContainerHeight
			and sliderHeight.  If it is than add a position
			fixed with top value of 0 for $schedule */
		//	if(scrollTop > (reviewBlurbHeight)){$schedule.css({position : "fixed",height : "auto",top: 150 + "px",});
			//	$slidingMarque.slideUp('1500');
		//		$contactForm.slideUp('1500');
		//	}
		}

		$(window).scroll(function(){
			stickContact();
		});
	}
	/* DESKTOP FORM SLIDE DOWN */
	//var $schedule = $("#schedule");
	var $open_coupon_button = $(".coupon_container_open, .desktop-schedule");
	var $slidingMarque = $("#sliding_marque, #include_desktop_contact_form");
	$open_coupon_button.click(function(){
		$slidingMarque.toggle('1500');
		//$schedule.css('transform', 'translateY(0px)');
	});

	  $(".coupon_container_open").click(function(){
	    $(".schedule-non-active").toggleClass("schedule-active");
	  });

	 // $(".coupon_container_open").click(function(){
	    //$(".desktop-schedule").toggleClass("desktop-schedule-active-open");
	 //});


	  $(".desktop-schedule").click(function(){
	    $(".schedule-non-active").toggleClass("schedule-active");
	  });

  	  $(".desktop-schedule").click(function(){
	    $(".desktop-schedule").toggleClass("desktop-schedule-active-open");
	  });

	  $(".form-popup").click(function(){
	    $("schedule-non-active").toggleClass("schedule-active");
	  });

	  $(".coupon_container_open").click(function(){
	    $(".nav-trigger").toggleClass("nav-trigger-active");
	  });

	  $(".desktop-schedule").click(function(){
	    $(".nav-trigger").toggleClass("nav-trigger-active");
	  });


	/* MOBILE OPEN CLOSE FUNCTION */
	var $mobile_form = $("#include_mobile_contact_form");
	var $mobile_form_button = $(".mobile-contact-schedule");
	$mobile_form_button.click(function(){
		$mobile_form.css({transform: "none",});
	});

	var $mobile_form = $("#include_mobile_contact_form");
	var $mobile_form_close = $("#mobile_button_close");
	$mobile_form_close.click(function(){
		$mobile_form.css('transform', 'translate(2050px, 30px) rotate(25deg) scale(2,.7) skewX(-45deg)');
		//$mobile_form.css('transform', 'translateY(1900px)');
	});


	var $desktop_form = $(".contact-form-popup");
	var $desktop_form_button = $(".form-popup, .desktop-schedule-active-open");
	$desktop_form_button.click(function(){
		$desktop_form.css({display: "flex",});
	});

	var $desktop_form = $(".contact-form-popup");
	var $desktop_form_close_button = $(".closeform");
	$desktop_form_close_button.click(function(){
		$desktop_form.css({display: "none",});
	});

	var $desktop_form = $(".contact-form-popup");
	$desktop_form_button.click(function(){
            $("body").addClass("form-open");
            $("body").addClass("noscroll");
            window.scrollTo(0,0);
	});

	var $desktop_form_close_button = $(".closeform");
	$desktop_form_close_button.click(function(){
		            $("body").removeClass("form-open");
            $("body").removeClass("noscroll");
	});	


	var $mobile_form_button = $(".mobile-contact-schedule");
	$mobile_form_button.click(function(){
            $("body").addClass("noscroll");
            window.scrollTo(0,0);
	});

	var $mobile_form_close_button = $("#mobile_button_close");
	$mobile_form_close_button.click(function(){
            $("body").removeClass("noscroll");
	});	



	// PRINT COUPON //
	var $print_coupon = $("#print_coupon");
	function titleOfPage(){
		// get pathname of current file
		var pathString = window.location.pathname;

		// Split the path name into array elements
		var pageName = pathString.split("/");

		// Select the last array element
		pageName = pageName[pageName.length - 1];

		// Select the last array element
		pageName = pageName.substring(0,pageName.length - 4);

		// Render the pageName
		return pageName;
	}

	$print_coupon.click(function(){
		window.open("resources/coupon.php?coupon=" + titleOfPage() + "&expansion=","specials","width=" + screen.width + "height=" + screen.height + ",fullscreen=yes");
	});

	var $close_coupon_button = $(".close");
	var $print_coupon_button = $(".print");
	$close_coupon_button.click(function(){
		window.close();
	});

	$print_coupon_button.click(function(){
		window.print();
	});




	
//formating tel number field
$('#mail-tel').mask('(000) 000-0000');

});


$(function() {
    //caches a jQuery object containing the header element
    var header = $(".top_container");
    var overflow =$("body");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            header.removeClass('clearHeader').addClass("top_container_fixed");
        } else {
            header.removeClass("top_container_fixed").addClass('clearHeader');
        }
    });
});
