const slides = $('.slide-carousel-item').length
if(slides == 1) {
  slides = 1
} else if (slides == 2) {
  slides = 2
} else if(slides == 3) {
  slides = 3
}

$('#courses-slider').slick({
    infinite: true,
    speed: 300,
    slidesToShow: slides,
    slidesToScroll: slides,
    responsive: [
        {
          breakpoint: 860,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
          },
        },
    ]
});