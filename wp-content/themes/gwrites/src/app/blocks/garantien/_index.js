import Swiper, {Navigation, Pagination} from 'swiper';

export function subjectsSlider() {
    new Swiper('.js-garantien', {
        modules: [Navigation, Pagination],
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.js-garantien-next',
            prevEl: '.js-garantien-prev',
        },
        pagination: {
            el: '.js-garantien-pagination',
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
                slidesPerView: 4,
                spaceBetween: 20,
            },
        }
    });
}