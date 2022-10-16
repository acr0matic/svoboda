function InitSlider() {
  const interior = new Swiper('.slider-interior', {
    slidesPerView: 'auto',
    spaceBetween: 80,
    simulateTouch: false,

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
}

