import Swiper, {Navigation} from 'swiper';

export function whySlider() {
    const swiper = new Swiper('.js-why', {
        modules: [Navigation],
        slidesPerView: 1,
        navigation: {
            nextEl: '.js-why-next',
            prevEl: '.js-why-prev',
        },
    });

    const tabItems = document.querySelectorAll('.why-we__tabs-item');
    tabItems.forEach(tab => {
        tab.addEventListener('click', (e) => {
            e.preventDefault();
            let id = tab.getAttribute('data-slide');
            swiper.slideTo(id, 500);

            tabItems.forEach(item => {
                item.classList.remove('active');
            });
            tab.classList.add('active');
        });
    });

    // Tabs
    const wrapper = document.querySelector('.why-we');
    if (!wrapper) {
        return;
    }

    wrapper.onclick = (e) => {
        const target = e.target;

        if (target.classList.contains('why-we__arrow')) {
            const tabs = document.querySelectorAll('.why-we__tabs-item');
            if (!tabs.length) {
                return;
            }

            tabs.forEach(tab => {
                tab.classList.remove('active');
            });

            document.querySelector('[data-slide="' + swiper.activeIndex + '"]').classList.add('active');
        }
    };
}