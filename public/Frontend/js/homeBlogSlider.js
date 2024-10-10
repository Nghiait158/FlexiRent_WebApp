var swiper = new Swiper(".blogSwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  rewind: true,
  coverflowEffect: {
    rotate: 10,
    stretch: 0,
    depth: 200,
    modifier: 1,
    slideShadows: true,
  },
  scrollbar: {
    el: ".swiper-scrollbar",
    hide: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});


// JS for calendar
const inputs = document.querySelectorAll('.pick-date input');

// Add event listeners for focus and blur
inputs.forEach(input => {
  input.addEventListener('focus', () => {
    input.placeholder = ''; // Clear placeholder on focus
  });

  input.addEventListener('blur', () => {
    if (input.value === '') {
      input.placeholder = input.getAttribute('data-placeholder'); // Restore placeholder if empty
    }
  });

  // Store the original placeholder in a data attribute
  input.setAttribute('data-placeholder', input.placeholder);
});

