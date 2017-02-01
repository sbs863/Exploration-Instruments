$(function () {

   $('.homeGraphic').css("visibility", "visible");

    //scroll graphic fades out when user scrolls

    $(".parallax").scroll(function() {
        $('.footer').addClass('animated fadeOut')
    });

    $(".parallax").scroll(function(){
        if($(".parallax").scrollTop()>300){
            // $(window).off("scroll");

            $(".thumbnail").css("visibility", "visible").addClass('animated fadeInRightBig');

            $(".textBox").css("visibility","visible").addClass('animated fadeIn');
        }
    });
});
