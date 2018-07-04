$(document).ready(function() {
  var owl = $("#owl-demo");
 
  owl.owlCarousel({
     
      itemsCustom : [
        [0, 0],
        [450, 1],
        [600, 1],
        [700, 1],
        [1000, 4],
        [1200, 4],
        [1400, 4],
        [1600, 4]
      ],
      navigation : true,
      paginationNumbers: true
 
  });
    var ResOwl = $("#res-slider");
 
  ResOwl.owlCarousel({
     
      itemsCustom : [
        [0, 0],
        [450, 1],
        [600, 1],
        [700, 1],
        [1000, 1],
        [1200, 1],
        [1400, 1],
        [1600, 1]
      ],
      navigation : true,
      paginationNumbers: true
 
  });
        /* Nice Scroll */
    $("html").niceScroll({
            scrollspeed: 180,
            bouncescroll: true,
            cursorcolor: "#C0392B",
            cursorborder: "1px solid #C0392B",
            cursoropacitymin: "1",
            zindex: "9999",
            mousescrollstep: "30",
            cursorwidth: "6px",
            cursorborderradius: "0",
            cursormaxheight: 5
        })
        /* Nice Scroll */
        $(window).scroll(function(){
        if($(this).scrollTop() >= 20 )
        {
            $("nav").css({
                "background": "#222",
                "padding-top" : "10px",
                "padding-bottom" : "2px",
                });
        }
        else
        {
            $("nav").css({
                "background": "none",
                "padding-top" : "20px",
                "padding-bottom" : "20px",
                "border-bottom": "none"
                });
        }
    })
    
    $(".background").click(function(){
        
        $(".popup").fadeOut(300,function(){
            $("#wrap").css("-webkit-filter","none");
            $(".background").fadeOut(300);
        })
    });

       $(".popup .no , .popup i").click(function(){
           
           $(".popup").fadeOut(300,function(){
               $("#wrap").css("-webkit-filter","none");
               $(".background").fadeOut(300);
           });
       });
    $("*").click(function(){
        if(this.hasAttribute('data-popup'))
            {
                var popup = $(this).attr("data-popup");
           $(".popup").fadeOut(300,function(){
        $("#wrap").css("-webkit-filter","blur(10px)");
            $(".background").fadeIn(300,function(){
            $("#"+popup).fadeIn(300);

        })
        })            
            }
 
    });
$("#login-popup .forget").click(function(){
        
        $(".popup").fadeOut(300);
            $("#forget-popup").delay(100).fadeIn(300);
    });
$("*").click(function(){
if($('#Hours').is(':checked'))
    {
        $(".days").fadeOut(1);
        $(".hours").fadeIn();
    }
    else if($('#Days').is(':checked'))
    {
        $(".hours").fadeOut(1);
        $(".days").fadeIn();
    }

});
});
$(window).load(function () {

    $("#ajaxloader2").fadeOut(400, function () {
        $(".loading").fadeOut(400, function () {
            $(this).remove();
        });
    });
});
