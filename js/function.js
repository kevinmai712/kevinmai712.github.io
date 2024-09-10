$(document).ready(function () {

    $(window).scroll(function () {
        if ($(document).scrollTop() > 10) {
            $("header, footer").addClass('scrolled');
        } else if ($(document).scrollTop() < 10) {
            $("header, footer").removeClass('scrolled');
        }
    });

    VANTA.WAVES({
        el: "#hero",
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
    });

 
    const progressBars = document.querySelectorAll('.fill');
    function checkScroll() {
        progressBars.forEach(function (bar) {
            const barTop = bar.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (barTop < windowHeight - 50) {
                const fillPercent = bar.getAttribute('data-fill');
                bar.style.width = fillPercent;
            }
        });
    }
     $(window).on('scroll', checkScroll);
    checkScroll(); 
});
