import Flickity from 'flickity';
import ScrollReveal from 'scrollreveal';
import IMask from 'imask';

/**
 * Header
 */
window.addEventListener('scroll', function () {
    if (pageYOffset > 0) {
        document.getElementById('app-header').classList.add('is-scroll');
    } else {
        document.getElementById('app-header').classList.remove('is-scroll');
    }
});

/**
 * Form settlement
 */
let formSettlement = document.querySelector('#form-settlement');
let formSettlementItemRadio = document.querySelectorAll('.form-radio-group label');
let formGroupCheck = document.querySelector('.form-group-check');

if (!!formSettlement) {
    formSettlement.addEventListener('submit', function (e) {
        e.preventDefault();
        formGroupCheck.classList.add('is-completed');
        formSettlementItemRadio.forEach(item => {
            if (!item.querySelector('input').checked) {
                item.classList.add('is-hidden');
            }
        });
    });
    let resetFormSettlement = document.querySelector('#reset-form-settlement');
    resetFormSettlement.addEventListener('click', function () {
        formGroupCheck.classList.remove('is-completed');
        formSettlementItemRadio.forEach(item => {
            item.classList.remove('is-hidden');
        });
    });
}

/**
 * Tabs
 */
if (!!document.querySelector('.custom-tabs-directions .custom-tabs-nav li') && document.querySelector('.custom-tabs-directions .custom-tabs-body .custom-tabs-body-item')) {
    document.querySelector('.custom-tabs-directions .custom-tabs-nav li').classList.add('active');
    document.querySelector('.custom-tabs-directions .custom-tabs-body .custom-tabs-body-item').classList.add('active');
}

let tabsDirectionsNavItem = document.querySelectorAll('.custom-tabs-directions .custom-tabs-nav li');
let tabsDirectionsBodyItem = document.querySelectorAll('.custom-tabs-directions .custom-tabs-body .custom-tabs-body-item');
if (!!tabsDirectionsNavItem) {
    tabsDirectionsNavItem.forEach(item => {
        item.addEventListener('click', function () {
            tabsDirectionsNavItem.forEach(value => {
                value.classList.remove('active');
            });
            this.classList.add('active');

            let index = Array.from(this.parentNode.children).indexOf(this);
            tabsDirectionsBodyItem.forEach(value => {
                value.classList.remove('active');
            });
            tabsDirectionsBodyItem[index].classList.add('active');
        });
    });
}


/**
 * Accordion
 */
let accordionDirectionsNav = document.querySelectorAll('.custom-accordion-nav');
if (!!accordionDirectionsNav) {
    accordionDirectionsNav.forEach(item => {
        item.addEventListener('click', function () {
            this.classList.toggle('active');
            let accordionDirectionsBodyItem = this.nextElementSibling;
            slideToggle(accordionDirectionsBodyItem)
        });
    });
}

/**
 * About open full text
 */
let aboutDescription = document.querySelector('.about-item-description__text');
let openFullAboutDescription = document.querySelector('.open-full-text--about');
if (openFullAboutDescription) {
    openFullAboutDescription.addEventListener('click', function () {
        this.style.display = 'none';
        slideDown(aboutDescription.lastElementChild);
    });
}

/**
 * Phone mask
 */
const phones = document.querySelectorAll('[type="tel"]');
Array.from(phones).forEach(phone => {
    new IMask(phone, {
        mask: '+{38} (000) 000-00-00'
    });
});

/**
 * Modal
 */
let orderModal = document.querySelector('.custom-modal--order');
let vacanciesModal = document.querySelector('.custom-modal--vacancies');
let closeModal = document.querySelectorAll('.close-modal');
let modalMask = document.querySelector('.modal-mask');
let openOrder = document.querySelectorAll('.open-order');
let openVacancies = document.querySelectorAll('.open-vacancies');

openOrder.forEach(item => {
    item.addEventListener('click', function (e) {
        e.preventDefault();
        orderModal.classList.add('active');
        modalMask.classList.add('active');
    });
});

openVacancies.forEach(item => {
    item.addEventListener('click', function (e) {
        e.preventDefault();
        vacanciesModal.classList.add('active');
        modalMask.classList.add('active');
    });
});

closeModal.forEach(item => {
    item.addEventListener('click', function () {
        orderModal.classList.remove('active');
        vacanciesModal.classList.remove('active');
        modalMask.classList.remove('active');
    })
});

modalMask.addEventListener('click', function () {
    orderModal.classList.remove('active');
    vacanciesModal.classList.remove('active');
    modalMask.classList.remove('active');
});

/**
 * Slider
 */
window.addEventListener('load', function () {
    if (!!document.querySelector('.car-intro-slider')) {

        let elem1 = document.querySelector('.car-intro-slider');
        if (elem1) {
            const flkty1 = new Flickity(elem1, {
                prevNextButtons: false,
                pageDots: false,
                contain: true,
                draggable: false,
                wrapAround: false,
                cellAlign: 'left',
                adaptiveHeight: true
            });

            let prevArrowIntro = document.querySelector('.slider-arrow--car .slider-arrow-item--prev');

            prevArrowIntro.addEventListener('click', function () {
                flkty1.previous(false, false);
            });

            let nextArrowIntro = document.querySelector('.slider-arrow--car .slider-arrow-item--next');

            nextArrowIntro.addEventListener('click', function () {
                flkty1.next(false, false);
            });
        }
    }
    if (!!document.querySelector('.car-advantages-slider')) {

        let elem2 = document.querySelector('.car-advantages-slider');
        if (elem2) {
            const flkty2 = new Flickity(elem2, {
                prevNextButtons: false,
                pageDots: false,
                contain: true,
                draggable: false,
                wrapAround: false,
                cellAlign: 'left',
                // adaptiveHeight: true
            });

            let prevArrowIntro = document.querySelector('.slider-arrow--advantages .slider-arrow-item--prev');

            prevArrowIntro.addEventListener('click', function () {
                flkty2.previous(false, false);
            });

            let nextArrowIntro = document.querySelector('.slider-arrow--advantages .slider-arrow-item--next');

            nextArrowIntro.addEventListener('click', function () {
                flkty2.next(false, false);
            });
        }
    }
});


/**
 * Slide function
 */
let slideUp = (target, duration = 500) => {
    target.style.transitionProperty = 'height, margin, padding';
    target.style.transitionDuration = duration + 'ms';
    target.style.boxSizing = 'border-box';
    target.style.height = target.offsetHeight + 'px';
    target.offsetHeight;
    target.style.overflow = 'hidden';
    target.style.height = '0';
    target.style.paddingTop = '0';
    target.style.paddingBottom = '0';
    target.style.marginTop = '0';
    target.style.marginBottom = '0';
    window.setTimeout(() => {
        target.style.display = 'none';
        target.style.removeProperty('height');
        target.style.removeProperty('padding-top');
        target.style.removeProperty('padding-bottom');
        target.style.removeProperty('margin-top');
        target.style.removeProperty('margin-bottom');
        target.style.removeProperty('overflow');
        target.style.removeProperty('transition-duration');
        target.style.removeProperty('transition-property');
        //alert("!");
    }, duration);
};

let slideDown = (target, duration = 500) => {
    target.style.removeProperty('display');
    let display = window.getComputedStyle(target).display;

    if (display === 'none')
        display = 'block';

    target.style.display = display;
    let height = target.offsetHeight;
    target.style.overflow = 'hidden';
    target.style.height = '0';
    target.style.paddingTop = '0';
    target.style.paddingBottom = '0';
    target.style.marginTop = '0';
    target.style.marginBottom = '0';
    target.offsetHeight;
    target.style.boxSizing = 'border-box';
    target.style.transitionProperty = "height, margin, padding";
    target.style.transitionDuration = duration + 'ms';
    target.style.height = height + 'px';
    target.style.removeProperty('padding-top');
    target.style.removeProperty('padding-bottom');
    target.style.removeProperty('margin-top');
    target.style.removeProperty('margin-bottom');
    window.setTimeout(() => {
        target.style.removeProperty('height');
        target.style.removeProperty('overflow');
        target.style.removeProperty('transition-duration');
        target.style.removeProperty('transition-property');
    }, duration);
};

let slideToggle = (target, duration = 500) => {
    if (window.getComputedStyle(target).display === 'none') {
        return slideDown(target, duration);
    } else {
        return slideUp(target, duration);
    }
};