import Swiper, {Navigation} from 'swiper';

export function additionalSlider() {
    new Swiper('.js-additional', {
        modules: [Navigation],
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.js-additional-next',
            prevEl: '.js-additional-prev',
        },
        breakpoints: {
            480: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 3
            },
            1024: {
                slidesPerView: 4
            },
        }
    });
}