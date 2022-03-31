$(document).ready(function(){
    $('.sliders__inner').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        arrows: true,
        prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",

    });
  });