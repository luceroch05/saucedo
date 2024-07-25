$(document).ready(function(){
  $('.carousel').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      prevArrow: $('.slick-prev'),
      nextArrow: $('.slick-next')
  });
});
