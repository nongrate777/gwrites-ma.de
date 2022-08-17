export function toggleWidget() {
    const btn = document.querySelector('.js-widget-btn');
    if (!btn) {
        return;
    }

    const content = document.querySelector('.widget__content');

    btn.addEventListener('click', () => {
        btn.classList.toggle('_widget_close');
        content.classList.toggle('_hidden');
    });

    // if (e.target.className != "widget__content") {
    //     content.style.display = "none";
    // };


}

export function animationWidgetClasses() {
    const btn = document.querySelector('.js-widget-btn');
    if (!btn) {
        return;
    }

    setInterval(() => {
        if (btn.classList.contains('_widget_dark-blue')) {
            btn.classList.remove('_widget_dark-blue');
            btn.classList.add('_widget_blue');
        } else if (btn.classList.contains('_widget_blue')) {
            btn.classList.remove('_widget_blue');
            btn.classList.add('_widget_green');
        } else if (btn.classList.contains('_widget_green')) {
            btn.classList.remove('_widget_green');
            btn.classList.add('_widget_orange');
        } else if (btn.classList.contains('_widget_orange')) {
            btn.classList.remove('_widget_orange');
            btn.classList.add('_widget_dark-blue');
        }
    }, 3000);
}

export function widgetArrow() {
    const btn = document.querySelector('.widget__arrow');
    if (!btn) {
        return;
    }

    document.addEventListener('scroll', () => {
        if (window.scrollY > 700) {
            btn.classList.remove('_hidden');
            btn.classList.add('_d-block');
        } else {
            btn.classList.add('_hidden');
            btn.classList.remove('_d-block');
        }
    });
}