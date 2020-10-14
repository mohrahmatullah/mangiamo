
$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $(".nav-header-index").addClass("header-active");
            $('.menu-text').addClass("text-black");
            $('.logo-header').html('<a href="index.html" class="mx-2">' 
            + '<img src="assets/img/logo.png" class="" style="width: 80px; height: auto;">' +'</a>' );

        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $(".nav-header-index").removeClass("header-active");
           $('.menu-text').removeClass("text-black");
           $('.logo-header').html('<a href="index.html" class="mx-2">' 
            + '<img src="assets/img/logo-white.png" class="" style="width: 150px; height: auto;">' +'</a>' );
        }
    });
});


window.onload=function(){
  $('.slider-buffet').slick({
  autoplay:true,
  autoplaySpeed:1000,
  arrows:false,
  prevArrow:false,
  nextArrow:false,
  centerMode:true,
  slidesToShow:6,
  slidesToScroll:1
  });
};
