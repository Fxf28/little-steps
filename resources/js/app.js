import "./bootstrap";
// Initialization for ES Users
import { Carousel, initTWE } from "tw-elements";
initTWE({ Carousel });
// import Swiper bundle with all modules installed
import Swiper from "swiper/bundle";
// import styles bundle
import "swiper/css/bundle";
var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});
