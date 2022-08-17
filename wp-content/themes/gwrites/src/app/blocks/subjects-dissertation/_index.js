import Swiper, {Navigation, Pagination} from 'swiper';

export function subjectsSlider() {
    new Swiper('.js-subjects', {
        modules: [Navigation, Pagination],
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.js-subjects-next',
            prevEl: '.js-subjects-prev',
        },
        pagination: {
            el: '.js-subjects-pagination',
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