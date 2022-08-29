$(document).ready(function () {
  $('.thang').slick({
    //   change prev and next button

    prevArrow:
      '<button class="thang-prev" aria-label="Previous" type="button"><i class="fas fa-chevron-left"></i></button>',
    nextArrow:
      '<button class="thang-next" aria-label="Next" type="button"><i class="fas fa-chevron-right"></i></button>',

    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
  });
});
