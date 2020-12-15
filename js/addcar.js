$(".custom-nav").css("backgroundColor", "rgba(255, 255, 255, 1)");
$(".custom-nav .navbar > a").css("color", "black");
$(".navbar-collapse .navbar-nav .nav-item >a").css("color", "black");
$(".custom-nav").css('box-shadow', '0 1px 8px 3px rgba(0, 0, 0, 0.5)');
$(".btn-st").addClass("btn-st-scroll");
var check = document.querySelector('input[name="Sale"]');
$('input[name="Sale"]').click(function() {
    if($('input[name="Sale"]').is(':checked')) { 
        if($(this).val() === "yes"){
            $('input[id="inputnewPrice"]').removeAttr( "disabled" );
        } else{
            $('input[id="inputnewPrice"]').attr( "disabled","" );
        }
    }
 });
 /* button to top */
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
  
    $("html").animate({ scrollTop: '0' }, 1000);
  
  });
  