export function accordion() {
    const accordions = document.querySelectorAll('.faq__item');
    if (!accordions.length) {
        return;
    }

    for (let accordion of accordions) {
        accordion.addEventListener('click', () => {
            const head = accordion.querySelector('.faq__item-head');
            head.classList.toggle('active');

            const body = accordion.querySelector('.faq__item-body');
            body.classList.toggle('_hidden');
        });
    }
}