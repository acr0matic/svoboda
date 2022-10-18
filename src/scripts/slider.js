function InitSlider() {
  const team = new Swiper('.slider-team', {
    slidesPerView: 1,
    loop: true,
    simulateTouch: false,

    navigation: {
      nextEl: '.team__slider .swiper-button-next',
      prevEl: '.team__slider .swiper-button-prev',
    },

    on: {
      slideChangeTransitionStart() {
        lazyLoadInstance.update();
      }
    }
  });

  const interior = new Swiper('.slider-interior', {
    slidesPerView: 'auto',
    spaceBetween: 60,
    simulateTouch: false,

    navigation: {
      nextEl: '.interior__slider .swiper-button-next',
      prevEl: '.interior__slider .swiper-button-prev',
    },

    breakpoints: {
      1200: {
        spaceBetween: 80,
      },
    },
  });

  const feedback = new Swiper('.slider-feedback', {
    slidesPerView: 3,
    spaceBetween: 40,
    simulateTouch: false,

    navigation: {
      nextEl: '.feedback__slider .swiper-button-next',
      prevEl: '.feedback__slider .swiper-button-prev',
    },

    breakpoints: {
      1200: {
        slidesPerView: 4,
      },
    },
  });
}

