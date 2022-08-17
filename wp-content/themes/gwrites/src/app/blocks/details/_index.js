export function detailsItemAccordion() {
    const items = document.querySelectorAll('.details__item');
    if (!items.length) {
        return;
    }

    items.forEach(item => {
        item.addEventListener('click', () => {
            const itemText = item.querySelector('.details__item-text');
            itemText.classList.toggle('_hidden_sm');
            item.classList.toggle('active');
        });
    });
}