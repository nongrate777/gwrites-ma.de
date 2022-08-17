export function addBookmark() {
    const bookmarks = document.querySelectorAll('.js-bookmark');
    if (!bookmarks.length) {
        return;
    }

    bookmarks.forEach(item => {
        item.addEventListener('click', () => {
            alert('Drücken Sie Ctrl+D, um zu den Favoriten hinzuzufügen');
        });
    });
}

export function fixesHeader() {
    window.addEventListener('scroll', () => {
        const top = document.querySelector('.top');
        const header = document.querySelector('.header__wrap');
        const headerMenu = document.querySelector('.header__menu');
        const headerWrap = document.querySelector('.header__fixes');
        if (window.scrollY > 10) {
            header.classList.add('_bg_grey_gradient');
            headerMenu.classList.add('_bg');
            top.classList.add('_hidden');
            headerWrap.classList.add('active');
        } else {
            header.classList.remove('_bg_grey_gradient');
            headerMenu.classList.remove('_bg');
            top.classList.remove('_hidden');
            headerWrap.classList.remove('active');
        }
    });
}

export function smoothScrolling() {
    const anchors = document.querySelectorAll('a[href*="#"]')

    for (let anchor of anchors) {
        anchor.addEventListener('click', (e) => {
            e.preventDefault()

            const blockId = anchor.getAttribute('href').substr(1);

            document.getElementById(blockId).scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    }
}

export function mobileMenu() {
    const mobileMenu = document.querySelector('.header__menu-mobile');

    const menuBtn = document.querySelector('.header__menu-mobile-btn');
    menuBtn.addEventListener('click', (e) => {
        e.preventDefault();
        mobileMenu.classList.remove('_hidden');
        document.body.classList.add('_scroll-hidden');
    });

    const closeBtn = document.querySelector('.header__menu-mobile-close');
    closeBtn.addEventListener('click', (e) => {
        e.preventDefault();
        mobileMenu.classList.add('_hidden');
        document.body.classList.remove('_scroll-hidden');
    });

    const menuItems = document.querySelectorAll('.header__menu-mobile-a');
    for (let menuItem of menuItems) {
        menuItem.addEventListener('click', () => {
            mobileMenu.classList.add('_hidden');
            document.body.classList.remove('_scroll-hidden');

            const blockId = menuItem.getAttribute('href').substr(1);

            document.getElementById(blockId).scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    }
}

export function activeLinkOnScroll() {
    let offset = window.innerWidth >= 992 ? 160 : 100;

    document.addEventListener('scroll', () => {
        let links = document.querySelectorAll('.header__menu-link'),
            scrollPosition = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

        for (let i = 0; i < links.length; i++) {
            let currentLink = links[i],
                href = currentLink.getAttribute('href'),
                element = document.querySelector(href + '-wrap');

            if (!element) {
                return;
            }

            if (element.offsetTop - offset <= scrollPosition && (element.offsetTop + element.offsetHeight > scrollPosition)) {
                links.forEach(item => {
                    item.classList.remove('current');
                });
                currentLink.classList.add('current');
            } else {
                currentLink.classList.remove('current');
            }
        }
    });
}