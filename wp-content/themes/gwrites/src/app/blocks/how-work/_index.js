import Swiper, {Navigation, Pagination} from 'swiper';

export function workSlider() {
    new Swiper('.js-work', {
        modules: [Navigation, Pagination],
        slidesPerView: 1,
        spaceBetween: 32,
        slidesPerGroup: 1,
        navigation: {
            nextEl: '.js-work-next',
            prevEl: '.js-work-prev',
        },
        pagination: {
            el: '.js-work-pagination',
            type: 'bullets',
            clickable: true
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                slidesPerGroup: 2,
            },
            992: {
                slidesPerView: 3,
                slidesPerGroup: 3,
            },
        }
    });
}