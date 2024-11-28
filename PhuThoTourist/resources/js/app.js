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
