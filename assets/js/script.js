$(document).ready(function(){
  $('.carousel').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      prevArrow: '<button type="button" class="slick-prev"></button>',
      nextArrow: '<button type="button" class="slick-next"></button>'
  });

  // Event listeners for the arrows
  $('.slick-prev').on('click', function() {
      $('.carousel').slick('slickPrev');
  });

  $('.slick-next').on('click', function() {
      $('.carousel').slick('slickNext');
  });
});
