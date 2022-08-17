/** SCSS */
import "../src/app/libraries/index.scss";
import "../src/app/blocks/index.scss";
import "../src/app/libraries/media/_index.scss";

/** Swiper SCSS */
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

/** Init-tel-input */
import 'intl-tel-input/build/css/intlTelInput.css';

/** JS */
import {addBookmark, fixesHeader, mobileMenu, smoothScrolling, activeLinkOnScroll} from "./app/blocks/header/_index";
import {additionalSlider} from "./app/blocks/additional-service/_index";
import {workSlider} from "./app/blocks/how-work/_index";
import {reviewsSlider} from "./app/blocks/reviews/_index";
import {subjectsSlider, rabbateSlider} from "./app/blocks/subjects-dissertation/_index";
import {rabbateSlider} from "./app/blocks/rabbate/_index";
import {garantienSlider} from "./app/blocks/garantien/_index";
import {whySlider} from "./app/blocks/why-we/_index";
import {receiveSlider} from "./app/blocks/you-receive/_index";
import {formElements, mailer, stepper, calendar, phoneInput, phoneInputOnline} from "./app/libraries/forms/_index";
import {accordion} from "./app/blocks/faq/_index";
import {progressSlider} from "./app/blocks/work-progress/_index";
import {animationNumbers, animationSwitcher, statsSlider} from "./app/blocks/small-static-blocks/_index";
import {popupClose, popupOpen, modalOpen} from "./app/blocks/popup/_index";
import {calculator} from "./app/blocks/price/_index";
import {toggleWidget, animationWidgetClasses, widgetArrow} from "./app/blocks/widget/_index";
import {detailsItemAccordion} from "./app/blocks/details/_index";

document.addEventListener("DOMContentLoaded", () => {
    // Header
    addBookmark();
    fixesHeader();
    smoothScrolling();
    mobileMenu();
    activeLinkOnScroll();

    // Sliders
    additionalSlider();
    workSlider();
    reviewsSlider();
    subjectsSlider();
    rabbateSlider();
    garantienSlider();
    progressSlider();
    whySlider();
    receiveSlider();
    statsSlider();

    // Form
    formElements();
    stepper();
    mailer();
    calendar();
    phoneInputOnline();
    phoneInput();
    

    // Accordion
    accordion();
    detailsItemAccordion();

    // Stats
    animationNumbers();
    animationSwitcher();

    // Popups
    popupClose();
    popupOpen();
    modalOpen();

    // Calculator
    calculator();

    // Widget
    toggleWidget();
    animationWidgetClasses();
    widgetArrow();
});

