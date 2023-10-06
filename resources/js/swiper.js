// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';
// import styles bundle
import 'swiper/css/bundle';

var swiper = new Swiper(".navigation-swiper", {
    // loop: true,
    // autoplay: {
    //     delay: 2500,
    //     disableOnInteraction: false,
    // },
    // navigation: {
    //     nextEl: ".swiper-button-next",
    //     prevEl: ".swiper-button-prev",
    // },
    pagination: {
        clickable: true,
        el: ".swiper-pagination",
    },
});