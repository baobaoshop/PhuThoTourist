import './bootstrap';
import 'bootstrap';

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 5,
  spaceBetween: -30,
  loop: true,
  centeredSlides: true,
  slideActiveClass: "active-slide",
  slideToClickedSlide: true,
  on: {
    transitionEnd: function () {
      // Loại bỏ class cũ
      document.querySelectorAll(".swiper-slide").forEach((slide) => {
        slide.classList.remove("swiper-slide-prev1","swiper-slide-next1");
      });

      // Lấy slide hiện tại (active) và slide liền kề trước
      const activeSlide = document.querySelector(".active-slide");
      if (activeSlide) {
        const prevSlide = activeSlide.previousElementSibling?.previousElementSibling;
        const nextSlide = activeSlide.nextElementSibling?.nextElementSibling;

        // Thêm class `previous` và `next` vào các slide liền kề
        if (prevSlide) prevSlide.classList.add("swiper-slide-prev1");
        if (nextSlide) nextSlide.classList.add("swiper-slide-next1");
      }
      
    },
  },
});

// Swiper 2
var swiper2 = new Swiper(".mySwiper2", {
  loop: true,
  slidesPerView: 1, 
  spaceBetween: 0,
  navigation: {
      nextEl: ".mySwiper2-button-next",
      prevEl: ".mySwiper2-button-prev",
  },
  pagination: {
      el: ".mySwiper2-pagination",
      clickable: true,
  },
});

var swiper = new Swiper(".mySwiper2", {
  loop:true,
  pagination: {
    el: ".mySwiper2-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return `
        <span class="${className}">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="17" viewBox="0 0 28 17" fill="none">
            <path d="M22.6105 8.30527C22.6105 12.8921 18.8921 16.6105 14.3053 16.6105C9.7184 16.6105 6 12.8921 6 8.30527C6 3.7184 9.7184 0 14.3053 0C18.8921 0 22.6105 3.7184 22.6105 8.30527Z" fill="#0054A6"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.3053 16.2373C18.686 16.2373 22.2373 12.686 22.2373 8.30527C22.2373 3.92455 18.686 0.37327 14.3053 0.37327C9.92455 0.37327 6.37327 3.92455 6.37327 8.30527C6.37327 12.686 9.92455 16.2373 14.3053 16.2373ZM14.3053 16.6105C18.8921 16.6105 22.6105 12.8921 22.6105 8.30527C22.6105 3.7184 18.8921 0 14.3053 0C9.7184 0 6 3.7184 6 8.30527C6 12.8921 9.7184 16.6105 14.3053 16.6105Z" fill="white"/>
            <path d="M10.3434 5.6062L1 10.5894L8.99382 8.09778L17.6105 11.1084L27.0578 6.12528L18.9601 8.72068L10.3434 5.6062Z" fill="white" stroke="#0054A6" stroke-width="0.186635" stroke-linejoin="round"/>
          </svg>
        </span>`;
    },
  },
  navigation: {
    nextEl: ".mySwiper2-button-next",
    prevEl: ".mySwiper2-button-prev",
  },
});

