var swiper = new Swiper(".partnerSwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  centeredSlides: true,
  loop: true,
  autoplay: {
      delay: 0, 
      disableOnInteraction: false,
  },
  speed: 3000,
  pagination: {
      el: ".swiper-pagination",
      clickable: true,
  },
  loopAdditionalSlides: 3,
  
});
