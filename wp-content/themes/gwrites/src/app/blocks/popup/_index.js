export function popupClose () {
    const popups = document.querySelectorAll('.popup-wrap');
    if (!popups.length) {
        return;
    }

    const popupBg = document.getElementById('popup-bg');

    popups.forEach(popup => {
        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('popup-bg') || e.target.classList.contains('popup-close')) {
                popup.classList.add('_hidden');
                popupBg.classList.add('_hidden');

                document.body.classList.remove('_scroll-hidden');
            }
        });
    });
}

export function popupOpen() {
    const links = document.querySelectorAll('.js-open-popup');
    if (!links.length) {
        return;
    }

    const popupBg = document.getElementById('popup-bg');

    links.forEach(link => {
        link.addEventListener('click', () => {
            const id = link.getAttribute('data-id');
            if (!id) {
                return;
            }

            popupBg.classList.remove('_hidden');
            document.getElementById(id).classList.remove('_hidden');
            document.body.classList.add('_scroll-hidden');
        });
    });
}

export function modalOpen() {
    const links = document.querySelectorAll('.js-open-modal');
    if (!links.length) {
        return;
    }

    links.forEach(link => {
        link.addEventListener('click', () => {
            const id = link.getAttribute('data-id');
            if (!id) {
                return;
            }

            document.getElementById(id).classList.remove('_hidden');
        });
    });
}