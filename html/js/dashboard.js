$(function(){
	//scroll fire for nav
  	//$(window).scroll(function (event) {
     //   var scroll = $(window).scrollTop();
      /*  if(scroll >= 100)
        {
            $(".nav-bar").removeClass("transparent-nav");
            //$(".nav-bar").addClass("deep-orange darken-3");
        }
        else
        {
            //$(".nav-bar").removeClass("deep-orange darken-3");
            $(".nav-bar").addClass("transparent-nav");
        }
    });*/
	$('.carousel.carousel-slider').carousel({fullWidth: true,indicators:true, time_constant: 100});
  
  /*
    setInterval(function() {
    $('.carousel.carousel-slider').carousel('next');
  }, 10000);
*/
    $('.parallax').parallax();
    $(".button-collapse").sideNav();


      $('.fa-angle-right').click(function(){
        $('.carousel').carousel('next');
        clearInterval(carouselAutoplay);
        carouselAutoplay = setInterval(function(){
            $('.fa-angle-right').click();
          }, 7000);
      });
      $('.fa-angle-left').click(function(){
        $('.carousel').carousel('prev');
        clearInterval(carouselAutoplay);
        carouselAutoplay = setInterval(function(){
            $('.fa-angle-right').click();
          }, 7000);
      });



});