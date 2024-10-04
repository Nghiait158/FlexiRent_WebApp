var swiper = new Swiper(".blog-picture", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      autoplay: {  
        delay: 3000, 
        disableOnInteraction: false, 
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      on: {
        // Pause autoplay on mouse enter
        mouseenter: function () {
            this.autoplay.stop();
        },
        // Resume autoplay on mouse leave
        mouseleave: function () {
            this.autoplay.start();
        },
    },
    });

