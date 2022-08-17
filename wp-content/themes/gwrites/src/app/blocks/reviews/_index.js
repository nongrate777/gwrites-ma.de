import Swiper, {Navigation, Pagination} from 'swiper';

export function reviewsSlider() {
    new Swiper('.js-reviews', {
        modules: [Navigation, Pagination],
        slidesPerView: 1,
        spaceBetween: 32,
        navigation: {
            nextEl: '.js-reviews-next',
            prevEl: '.js-reviews-prev',
        },
        pagination: {
            el: '.js-reviews-pagination',
            type: 'bullets',
            clickable: true
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