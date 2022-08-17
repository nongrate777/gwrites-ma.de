import Swiper, {Navigation, Pagination} from 'swiper';

export function subjectsSlider() {
    new Swiper('.js-rabbate', {
        modules: [Navigation, Pagination],
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.js-rabbate-next',
            prevEl: '.js-rabbate-prev',
        },
        pagination: {
            el: '.js-rabbate-pagination',
            type: 'bullets',
            clickable: true
        },
        breakpoints: {
            576: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        }
    });
}