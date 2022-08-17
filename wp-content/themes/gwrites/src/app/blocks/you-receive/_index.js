import Swiper, {Navigation} from 'swiper';

export function receiveSlider() {
    new Swiper('.js-receive', {
        modules: [Navigation],
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.js-receive-next',
            prevEl: '.js-receive-prev',
        },
        breakpoints: {
            576: {
                slidesPerView: 3,
            }
        }
    });
}