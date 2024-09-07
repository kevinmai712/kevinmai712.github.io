$(document).ready(function (){

    $(window).scroll(function (){
        if($(document).scrollTop() > 200){
            $("header, footer").addClass('scrolled');
        } else if($(document).scrollTop() < 200){
            $("header, footer").removeClass('scrolled');
        }
    });

    VANTA.WAVES({
        el: ".hero",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,
        color: 0x12829b,
        shininess: 0.00,
        waveHeight: 5.50,
        waveSpeed: 0.10,
        zoom: 1
      })

});
