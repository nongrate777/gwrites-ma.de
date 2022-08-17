import Swiper, {Navigation} from 'swiper';

export function progressSlider() {
    new Swiper('.js-progress', {
        modules: [Navigation],
        slidesPerView: 1,
        spaceBetween: 24,
        navigation: {
            nextEl: '.js-progress-next',
            prevEl: '.js-progress-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            },
        }
    });
}