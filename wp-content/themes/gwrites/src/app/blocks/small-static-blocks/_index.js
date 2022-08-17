import Swiper, {Navigation} from 'swiper';

export function statsSlider() {
    new Swiper('.js-stats', {
        modules: [Navigation],
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.js-stats-next',
            prevEl: '.js-stats-prev',
        },
        breakpoints: {
            576: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
                loop: true,
            },
            1200: {
                slidesPerView: 4,
            },
            1201: {
                slidesPerView: 5,
            },
        }
    });
}

export function animationNumbers() {
    const numbers = document.querySelectorAll('.js-number');
    if (!numbers.length) {
        return;
    }

    const element = document.querySelector('.stats');
    let isActive = true;

    document.addEventListener('scroll', () => {
        if (window.scrollY > (element.offsetTop - window.innerHeight + 100) && isActive) {
            isActive = false;
            numbers.forEach(number => {
                let i = 0;
                let num = number.getAttribute('data-number');
                const counter = setInterval(() => {
                    if (i <= num) {
                        number.innerHTML = i;
                    } else {
                        clearInterval(counter);
                    }
                    i++;
                });
            });
        }
    });
}

export function animationSwitcher() {
    const blocks = document.querySelectorAll('.js-switcher');
    if (!blocks.length) {
        return;
    }

    setInterval(() => {
        blocks.forEach(block => {
            block.classList.toggle('_hidden');
        });
    }, 5000);
}