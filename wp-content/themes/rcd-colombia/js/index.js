const cajaImg = document.querySelector('.caja1-img-section4');
const cajaActiva = document.querySelector('.caja-activa1');
const cajaActiva2 = document.querySelector('.caja-activa2');
const cajaActiva3 = document.querySelector('.caja-activa3');


// evento mostrar ocultar card 1 section 4
cajaImg.addEventListener('click', mostrarCaja);

function mostrarCaja(){

    if(cajaActiva.classList.contains('caja-activa1')){
        cajaActiva.classList.remove('caja-activa1');
        cajaActiva.classList.add('animate__slideInRight')
    } else{
        cajaActiva.classList.add('caja-activa1');
    }
}

// evento mostrar ocultar card 2 section 4


const caja1 = document.getElementById('caja1')
caja1.addEventListener('click', ()=>{
    if(cajaActiva1.classList.contains('caja-activa1')){
        cajaActiva1.classList.remove('caja-activa1');
        cajaActiva1.classList.add('animate__slideInRight')
    } else{
        cajaActiva1.classList.add('caja-activa1');
    }
})

// evento mostrar ocultar card 2 section 4
const caja2 = document.getElementById('caja2')
caja2.addEventListener('click', ()=>{
    if(cajaActiva2.classList.contains('caja-activa2')){
        cajaActiva2.classList.remove('caja-activa2');
        cajaActiva2.classList.add('animate__slideInRight')
    } else{
        cajaActiva2.classList.add('caja-activa2');
    }
})

// evento mostrar ocultar card 3 section 4
const caja3 = document.getElementById('caja3')
caja3.addEventListener('click', ()=>{
    if(cajaActiva3.classList.contains('caja-activa3')){
        cajaActiva3.classList.remove('caja-activa3');
        cajaActiva3.classList.add('animate__slideInRight')
    } else{
        cajaActiva3.classList.add('caja-activa3');
    }
})


//Menu mobile
// selector
var menu = document.querySelector('.hamburger');

// method
function toggleMenu (event) {
  this.classList.toggle('is-active');
  document.querySelector( ".menuppal" ).classList.toggle("is_active");
  event.preventDefault();
}

// event
menu.addEventListener('click', toggleMenu, false);


// Slider Jquery
$(document).ready(function () {

    /* slider nuestros servicios */
    $(".slider-nuestros-servicios").slick({
      dots: true,
      arrows: false,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 3000,
      slidesToShow: 2,
      slidesToScroll: 1,
      //adaptiveHeight: true,
      responsive: [
        {
        breakpoint: 768,
        settings: {
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
        },
        },
    ],
    });

    /* slider-marcas-mapa */
    $('.slider').slick({
      dots: false,
      speed: 9000,
      autoplay: true,
      autoplaySpeed: 0,
      cssEase: 'linear',
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: true,
      swipeToSlide: true,
      centerMode: true,
      focusOnSelect: true,
      arrows: true,
      responsive: [{
              breakpoint: 1024,
              settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  infinite: true,
                  dots: false,
                  arrows: true
              }
          },
          {
              breakpoint: 600,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  arrows: true
              }
          },
          {
              breakpoint: 480,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  arrows: true
              }
          }
      ]
  });

    /* slider tendencias digitales */
    $(".slider-tendencias-digitales").slick({
        dots: true,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 2,
        slidesToScroll: 1,
        adaptiveHeight: true,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              dots: true,
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 568,
            settings: {
              dots: true,
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 414,
            settings: {
              dots: true,
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 375,
            settings: {
              dots: true,
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });

      /* slider cards industrias  */
     $(".slider-cards-industrias").slick({
        dots: false,
        arrows: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 3,
        slidesToScroll: 1,
        adaptiveHeight: true,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              dots: false,
              arrows: true,
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });

  });


