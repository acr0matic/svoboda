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
    spaceBetween: 30,
    simulateTouch: false,

    navigation: {
      nextEl: '.interior__slider .swiper-button-next',
      prevEl: '.interior__slider .swiper-button-prev',
    },

    breakpoints: {
      768: {
        spaceBetween: 60,
      },

      1200: {
        spaceBetween: 80,
      },
    },
  });

  const feedback = new Swiper('.slider-feedback', {
    slidesPerView: 1,
    spaceBetween: 40,
    simulateTouch: false,

    navigation: {
      nextEl: '.feedback__slider .swiper-button-next',
      prevEl: '.feedback__slider .swiper-button-prev',
    },

    breakpoints: {
      540: {
        slidesPerView: 2,
      },

      768: {
        slidesPerView: 3,
      },

      1200: {
        slidesPerView: 4,
      },
    },
  });

  const portfolio = new Swiper('.slider-portfolio', {
    slidesPerView: 1,
    spaceBetween: 20,
    simulateTouch: false,

    navigation: {
      nextEl: '.portfolio__slider .swiper-button-next',
      prevEl: '.portfolio__slider .swiper-button-prev',
    },

    breakpoints: {
      540: {
        slidesPerView: 2,
      },

      768: {
        slidesPerView: 3,
      },
    },
  });
}

