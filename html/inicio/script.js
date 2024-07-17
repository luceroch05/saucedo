document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelector('.slides');
    
    const totalSlides = document.querySelectorAll('.slide').length;
    let currentIndex = 0;
  
    function getSlideWidth(){
        return slides.clientWidth;
    }
    
    function goToSlide(index) {
      if (index < 0) {
        index = totalSlides - 1;
      } else if (index >= totalSlides) {
        index = 0;
      }
  
      currentIndex = index;
      const offset = -currentIndex * getSlideWidth();
      slides.style.transform = `translateX(${offset}px)`;
    }
  
    function slideNext() {
      goToSlide(currentIndex + 1);
    }
  
    function slidePrevious() {
      goToSlide(currentIndex - 1);
    }
  
    document.querySelector('.next').addEventListener('click', slideNext);
    document.querySelector('.prev').addEventListener('click', slidePrevious);
  
    // Auto play
    setInterval(slideNext, 7000); // Cambiar cada 5 segundos (5000 milisegundos)
  });
  

  // carrusel de productos
  const carSld = document.getElementById("carrusel-slides");
const carSlds = document.querySelector(".slidep");
const carRight = document.querySelector(".btn-next");
const carLeft = document.querySelector(".btn-prev");
let direction;

carRight.onclick = function () {
  carSld.scrollLeft += 220;  
};

carLeft.onclick = function () {
  carSld.scrollLeft -= 220;
};