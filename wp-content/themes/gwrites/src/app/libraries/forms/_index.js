import { Datepicker } from 'vanillajs-datepicker';
import intlTelInput from 'intl-tel-input';

export function phoneInput() {
    const input = document.getElementById('popup-call-me-phone');
    if (!input) {
        return;
    }

    intlTelInput(input, {
        initialCountry : 'DE',
        autoPlaceholder : 'aggressive',
        preferredCountries: ["DE","GB"],
        nationalMode: true,
        utilsScript: "wp-content/themes/gwrites/node_modules/intl-tel-input/build/js/utils.js"
    });
}

export function phoneInputOnline() {
    const input = document.getElementById('popup-call-me-phone-online');
    if (!input) {
        return;
    }

    intlTelInput(input, {
        initialCountry : 'DE',
        autoPlaceholder : 'aggressive',
        preferredCountries: ["DE","GB"],
        nationalMode: true,
        utilsScript: "wp-content/themes/gwrites/node_modules/intl-tel-input/build/js/utils.js"
    });
}

export function calendar() {
    const dateInputs = document.querySelectorAll('.form-date__input');
    if (!dateInputs.length) {
        return;
    }

    for (let dateInput of dateInputs) {
        new Datepicker(dateInput, {
            buttonClass: dateInput,
            weekStart: 1
        });
    }
}

export function calendar() {
    const dateInputs = document.querySelectorAll('.form-date');
    if (!dateInputs.length) {
        return;
    }

    for (let dateInput of dateInputs) {
        new Datepicker(dateInput, {
            buttonClass: dateInput,
            weekStart: 1
        });
    }
}

export function formElements() {
    const selectItems = document.querySelectorAll('.form-select');
    if (!selectItems.length) {
        return;
    }

    selectItems.forEach((dropDownWrapper) => {
        const dropDownList = dropDownWrapper.querySelector('.form-select__list');
        const dropDownListItems = dropDownList.querySelectorAll('.form-select__list-item');
        const dropDownInput = dropDownWrapper.querySelector('.form-select__input-hidden');

        // Клик по кнопке. Открыть/Закрыть select
        const dropDownBtn = dropDownWrapper.querySelector('.form-select__btn');
        dropDownBtn.addEventListener('click', function (e) {
            dropDownList.classList.toggle('form-select__list_visible');
            this.classList.add('form-select__btn_active');
        });

        // Выбор элемента списка. Запомнить выбранное значение. Закрыть дропдаун
        dropDownListItems.forEach((listItem) => {
            listItem.addEventListener('click', () => {
                dropDownBtn.innerText = listItem.innerText;
                dropDownBtn.focus();
                dropDownInput.value = listItem.innerText;
                dropDownBtn.classList.add('form-select__btn_current');
                dropDownList.classList.remove('form-select__list_visible');
            });
        });

        // Клик снаружи дропдауна. Закрыть дропдаун
        document.addEventListener('click', function (e) {
            if (e.target !== dropDownBtn) {
                dropDownBtn.classList.remove('form-select__btn_active');
                dropDownList.classList.remove('form-select__list_visible');
            }
        });

        // Нажатие на Tab или Escape. Закрыть дропдаун
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Tab' || e.key === 'Escape') {
                dropDownBtn.classList.remove('form-select__btn_active');
                dropDownList.classList.remove('form-select__list_visible');
            }
        });
    });
}

export function stepper() {
    const formCounts = document.querySelectorAll(".form-counter");
    if (!formCounts.length) {
        return;
    }

    formCounts.forEach(item => {
        item.onclick = (e) => {
            const target = e.target;

            if (target.classList.contains("counter-btn")) {
                let input = item.querySelector(".count-input");
                let min = input.getAttribute("min");
                let max = input.getAttribute("max");
                let step = input.getAttribute("step");
                let val = input.getAttribute("value");

                let id = target.getAttribute("data-id")
                let calcStep = (id === "increment") ? (step * 1) : (step * -1);
                let newValue = parseInt(val) + calcStep;

                if (newValue >= min && newValue <= max) {
                    input.setAttribute("value", newValue);
                }
            }
        };
    });
}

export function mailer() {
    const forms = document.querySelectorAll('.js-form');
    if (!forms.length) {
        return;
    }

    const popupBg = document.getElementById('popup-bg');
    const popupThanks = document.getElementById('thanks-popup');
    const popupThanksCall = document.getElementById('thanks-call-popup');
    const popupWraps = document.querySelectorAll('.popup-wrap');

    for (let form of forms) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();

            let formData = new FormData(form),
                formId = formData.get('form-id'),
                button = form.querySelector('.btn'),
                buttonText = button.innerHTML,
                isErrors = false,
                errors = [],
                data = {};

            button.innerHTML = 'Sendung...';
            button.disabled = true;


            // Большая форма онлайн и форма на первом экране онлайн
            if (formId === 'full-form-online') {
                data = ['name-online','email-online','deadline-online','specialization-online','nachricht-online','der-arbeit-online','bearbeitet-sein-online','die-anzahl-online','phone-online','myFile'];
                // data = ['name-online','email-online','deadline-online','specialization-online','nachricht-online','der-arbeit-online','bearbeitet-sein-online','die-anzahl-online','phone-online','myFile'];
                // data = ['theme','specialization','name','whatsapp','email','deadline'];
            }

            // Форма квиза
            if (formId === 'quiz-form') {
                data = ['quiz-step-1','quiz-step-2'];
            }

             // Большая форма онлайн и форма на первом экране онлайн
             if (formId === 'first-form-online') {
                 data = ['des-online-header','fachrichtung-online-header','abgabetermin-online-header_name','der-arbeit-online-header','bearbeitet-sein-online-header','die-anzahl-online-header','ihre-nachricht-online-header','name-online-header','email-online-header','myFileHeader'];
             } 

            // Большая форма онлайн и форма на первом экране онлайн
            if (formId === 'full-form-online-popup') {
                data = ['type-inline-popup','abgabetermin-online-popup_name','specialization-online-popup','nachricht-online-popup','der-arbeit-online-popup','name-online-popup','bearbeitet-sein-online-popup','die-anzahl-online-popup','phone-online-popup','email-online-popup','myFilepopup'];
            } 

            // Большая форма и форма на первом экране
            if (formId === 'first-form' || formId === 'full-form') {
                data = ['theme','specialization','name','whatsapp','email','deadline'];
            }

            // Большая форма и форма на первом экране
            if (formId === 'first-form_v2' || formId === 'full-form_v2') {
                data = ['theme','name','whatsapp','email','deadline'];
            }

            // Форма "Optionale Dienste"
            if (formId === 'medium-form') {
                data = ['theme','specialization','name','whatsapp','email'];
            }

            // Форма с почтой - средняя
            if (formId === 'mail-form-small') {
                data = ['email'];
            }

            // Форма с почтой - средняя
            if (formId === 'mail-form-medium') {
                data = ['name','email'];
            }

            // Форма с почтой - большая
            if (formId === 'mail-form-large') {
                data = ['message','whatsapp','email'];
            }

            // Форма обратного звонка
            if (formId === 'call-form') {
                data = ['name','phone'];
            }

            // Форма обратного звонка
            if (formId === 'calculator-form') {
                data = ['specialization','urgency','degree','name','whatsapp','email'];
            }

            // Форма обратного звонка
            if (formId === 'close-form') {
                data = ['whatsapp','email'];
            }

            setTimeout(() => {
                // Проверям на заполнение обязательных полей
                data.forEach(item => {
                    if (formData.get(item) === '') {
                        errors.push(item);
                        button.innerHTML = buttonText;
                        button.disabled = false;
                        isErrors = true;
                    } else {
                        let elem = form.querySelector('[name="' + item + '"]'),
                            elemId = elem.getAttribute('id');
                        document.querySelector('label[for="' + elemId + '"]').classList.remove('_error');
                    }
                });

                if (errors) {
                    errors.forEach(item => {
                        let elem = form.querySelector('[name="' + item + '"]'),
                            elemId = elem.getAttribute('id');
                        document.querySelector('label[for="' + elemId + '"]').classList.add('_error');
                    });

                    setTimeout(() => {
                        errors.forEach(item => {
                            let elem = form.querySelector('[name="' + item + '"]'),
                                elemId = elem.getAttribute('id');
                            document.querySelector('label[for="' + elemId + '"]').classList.remove('_error');
                        });
                    }, 2000);
                }

                if (!isErrors) {
                    fetch('/wp-admin/admin-ajax.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded; charset=utf-8'
                        },
                        body: 'action=sendForm&' + getQueryString(formData),
                        credentials: 'same-origin'
                    })
                        .then(response => response.json())
                        .then(response => {
                            button.innerHTML = buttonText;
                            button.disabled = false;

                            if (response.success) {
                                popupWraps.forEach(item => {
                                    item.classList.add('_hidden');
                                });

                                if (formId === 'call-form') {
                                    popupThanksCall.classList.remove('_hidden');
                                } else {
                                    popupThanks.classList.remove('_hidden');
                                }

                                popupBg.classList.remove('_hidden');
                                document.body.classList.add('_scroll-hidden');

                                form.reset();
                            }
                        })
                    ;
                }
            }, 500);
        });
    }
}

function getQueryString(formData) {
    let pairs = [];

    for (let [key, value] of formData.entries()) {
        pairs.push(encodeURIComponent(key) + '=' + encodeURIComponent(value));
    }

    return pairs.join('&');
}