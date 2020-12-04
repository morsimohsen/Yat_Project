$(function() {
    $(window).scroll(()=>{

        let scroll = $(window).scrollTop();
    
        if (scroll == 0) {
    
            scrollTop();
        }
        else {
    
            scrollAny();
        }
    });
    
    function scrollTop() {
        $(".custom-nav").css("backgroundColor", "transparent");
        $(".custom-nav .navbar > a").css("color", "white");
        $(".navbar-collapse .navbar-nav .nav-item >a").css("color", "white");
        $(".custom-nav").css('box-shadow', 'none');
        $(".btn-st").removeClass("btn-st-scroll");
    
    }
    
    function scrollAny() {
        $(".custom-nav").css("backgroundColor", "rgba(255, 255, 255, 1)");
        $(".custom-nav .navbar > a").css("color", "black");
        $(".navbar-collapse .navbar-nav .nav-item >a").css("color", "black");
        $(".custom-nav").css('box-shadow', '0 1px 8px 3px rgba(0, 0, 0, 0.5)');
        $(".btn-st").addClass("btn-st-scroll");
    }
    
    
    
    
    $(window).scroll(()=> {
    
        let scroll = $(window).scrollTop();
    
        if (scroll > 200) {
            $('.btn-up').fadeIn(500);
        }
        else {
            $('.btn-up').fadeOut(500);
        }
    
    });
    
    $(".btn-up").click(()=> {
    
        $("html").animate({ scrollTop: '0' }, 1200);
    
    });
    
    
       
    
    AOS.init();
    
    
    var typed = new Typed('.element',{
        strings: ["MotorKo Auto.^1000", "Brand New Cars.^1000","Great Deal For You.^1000","Don't Miss Opportunity.^1000"],
        typeSpeed: 80,
        loop:true,
        smartBackspace: true,
        backSpeed:80,
        showCursor: true,
        cursorChar: '|',
        autoInsertCss: true,
    });
    
    
});
