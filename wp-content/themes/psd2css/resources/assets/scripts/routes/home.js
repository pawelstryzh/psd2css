import 'slick-carousel/slick/slick.min';

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    $('.slider__slides').each(function () {
      let arrowLeft = $(this).parent().find('.left-arrow');
      let arrowRight = $(this).parent().find('.right-arrow');
      $(this).slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: arrowLeft,
        nextArrow: arrowRight,
        responsive: [
          {
            breakpoint: 985,
            settings: {
              slidesToShow: 2,
            },
          },
          {
            breakpoint: 575,
            settings: {
              slidesToShow: 1,
            },
          },
        ],
      })
    })
  },
};
