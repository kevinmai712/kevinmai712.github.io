$(document).ready(function (){

    $(window).scroll(function (){
        if($(document).scrollTop() > 200){
            $("header, footer").addClass('scrolled');
        } else if($(document).scrollTop() < 200){
            $("header, footer").removeClass('scrolled');
        }
    });
    
});