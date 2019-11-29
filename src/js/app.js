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
 * Tabs
 */
document.querySelector('.custom-tabs-directions .custom-tabs-nav li').classList.add('active');
document.querySelector('.custom-tabs-directions .custom-tabs-body .custom-tabs-body-item').classList.add('active');

let tabsDirectionsNavItem = document.querySelectorAll('.custom-tabs-directions .custom-tabs-nav li');
let tabsDirectionsBodyItem = document.querySelectorAll('.custom-tabs-directions .custom-tabs-body .custom-tabs-body-item');
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


/**
 * Accordion
 */
let accordionDirectionsNav = document.querySelectorAll('.custom-accordion-nav');
accordionDirectionsNav.forEach(item => {
    item.addEventListener('click', function () {
        this.classList.toggle('active');
        let accordionDirectionsBodyItem = this.nextElementSibling;
        slideToggle(accordionDirectionsBodyItem)
    });
});

/**
 * About open full text
 */
let aboutDescription = document.querySelector('.about-item-description__text');
let openFullAboutDescription = document.querySelector('.open-full-text--about');
openFullAboutDescription.addEventListener('click', function () {
   this.style.display = 'none';
    slideDown(aboutDescription.lastElementChild);
});

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