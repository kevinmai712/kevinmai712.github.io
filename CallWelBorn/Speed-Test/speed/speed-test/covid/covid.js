jQuery(document).ready(function($){
	$(document).ready(function(){
  	$("#close-covid-message").click(function(){
    $("#pop-up-covid").hide();
  		});
	});

	$(document).ready(function(){
  	$("#close-ccpa").click(function(){
    $("#pop-up-ccpa").hide();
  		});
	});

	$(document).ready(function(){
		$("#covid-more").click(function(){
		$("#pop-up-covid").show();
		});
	});
	
});
