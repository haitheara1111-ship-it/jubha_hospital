var swiper = new Swiper(".mySwiper", {
      slidesPerView: 2,
      spaceBetween: 30,
      centeredSlides: true,
      loop: true,     
      loopFillGroupWithBlank: false,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    });