jQuery(function(){
   jQuery('#camera_wrap_1').camera({
      thumbnails: true
   });
});

// jquery for BackToTop button
jQuery(document).ready(function($){    
if($(".scrollToTop").length > 0){
$(window).scroll(function () {
   var e = $(window).scrollTop();
   if (e > 250) {
      $(".scrollToTop").fadeIn(500);
   } else {
      $(".scrollToTop").fadeOut(500);
   }
});
$(".scrollToTop").click(function () {
   $('body,html').animate({
      scrollTop: 0
      })
   })
   }     
});

//Carousel slide

$(document).ready(function() {
   $('.carousel-slide').owlCarousel({
     autoPlay: 3000,
     stopOnHover: true,
     items: 6,
     lazyLoad: true,
     slideSpeed: 100,
     pagination: false,
     navigation: true,
     navigationText: [
     '<img src="images/arrow-left.svg" alt="left arrow">',
     '<img src="images/arrow-right.svg" alt="right arrow">'
     ],
     itemsTablet: [769,2],
     itemsMobile: [480,2],
     slideSpeed: 1000
   });
 });