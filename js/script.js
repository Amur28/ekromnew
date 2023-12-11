'use strict';

/* Функции для работы с классами */

const containClass = (el, className) => el.classList.contains(`${className}`);
const addClass = (el, className) => el.classList.add(`${className}`);
const removeClass = (el, className) => el.classList.remove(`${className}`);
const toggleClass = (el, className) => el.classList.toggle(`${className}`);

/* Липкий HEADER */

let lastScrollPos = 0;
const stickyHeader = document.getElementById('stickyHeader');

window.addEventListener('scroll', () => {
    const defaultOffset = 200;

    if (scrollPosition() > lastScrollPos && !containClass(stickyHeader, 'scroll') && scrollPosition() > defaultOffset) {
        addClass(stickyHeader, 'scroll');
    } else if (scrollPosition() < lastScrollPos && containClass(stickyHeader, 'scroll')) {
        removeClass(stickyHeader, 'scroll')
    }
    if (containClass(allCategoriesPopup, 'active')) {
        addClass(stickyHeader, 'popup-active')
    } else {
        removeClass(stickyHeader, 'popup-active')
    }

    lastScrollPos = scrollPosition();
});

const scrollPosition = () => window.scrollY || document.documentElement.scrollTop;

/* Показ/скрытие попапа со всеми категориями */

const allCategoriesBtn = document.getElementById('allCategoriesBtn');
const allCategoriesPopup = document.getElementById('allCategoriesPopup');

allCategoriesBtn.addEventListener('click', (event) => {
    event.stopPropagation()
    toggleClass(allCategoriesPopup, 'active')
    toggleClass(allCategoriesBtn, 'active')
});

document.addEventListener('click', (event) => {
    const target = event.target;
    const allCategoriesWrapper = allCategoriesPopup.querySelector('.all-categories__wrapper');

    checkClassAndClick(allCategoriesWrapper, 'active', target, allCategoriesPopup);
    checkClassAndClick(allCategoriesWrapper, 'active', target, allCategoriesBtn);

    checkClassAndClick(headerTopInfoDropdown, 'active', target, headerTopInfoDropdown);
    
    checkClassAndClick(authPopup, 'active', target, authPopup);

    const itsFaqInner = target == faqInner || faqInner.contains(target);
    if (!itsFaqInner) hideOtherFaqItems(faqItems);
});

const checkClassAndClick = (el, className, target, el2) => {
    const itsEl = target == el || el.contains(target);
    const elHasClass = containClass(el2, className);

    if (!itsEl && elHasClass) {
        removeClass(el2, className);
    }
};

/* Header dropdown */

const headerTopInfoLink = document.querySelector('.header__top-link--info');
const headerTopInfoDropdown = headerTopInfoLink.nextElementSibling;

headerTopInfoLink.addEventListener('click', (event) => {
    event.stopPropagation();
    toggleClass(headerTopInfoDropdown, 'active');
});

/* Auth popup */

const authBtn = document.querySelector('.auth-btn');
const authPopup = document.querySelector('.auth-popup')


authBtn.addEventListener('click', (event) => {
    event.stopPropagation();
    toggleClass(authPopup, 'active');
})


/* FAQ section */

const faqInner = document.querySelector('.faq__inner');
const faqItems = document.querySelectorAll('.faq__item');

const hideOtherFaqItems = (parentEl) => {
    parentEl.forEach(faqItem => {
        removeClass(faqItem, 'active')
    });
};

faqInner.addEventListener('click', (event) => {
    const currentFaqItem = event.target.closest('.faq__item');

    if (!currentFaqItem) return;

    if (containClass(currentFaqItem, 'active')) {
        removeClass(currentFaqItem, 'active');
        return;
    };

    hideOtherFaqItems(faqItems);

    addClass(currentFaqItem, 'active');
});

/* Форма "Задать свой вопрос" */

const faqBtn = document.getElementById('rectBtnFaq');
const questionForm = document.getElementById('questionForm');


faqBtn.addEventListener('click', (event) => {
    event.stopPropagation()
    addClass(questionForm, 'active');
});

questionForm.addEventListener('click', (event) => {
    const target = event.target;
    const questionFormContainer = questionForm.querySelector('form.question-form');
    const closeQuestionFormBtn = questionForm.querySelector('.close-btn--question');

    checkClickWithCloseBtn(questionFormContainer, 'active', target, closeQuestionFormBtn, questionForm);
});

const checkClickWithCloseBtn = (el, className, target, closeBtn, el2) => {
    const itsEl = target == el || el.contains(target);
    const itsCloseBtn = target == closeBtn || closeBtn.contains(target);

    if (!itsEl || itsCloseBtn) {
        removeClass(el2, className);
    }
};

/* Окно быстрого просмотра */

const fastViewPopup = document.getElementById('fastView');
const fastViewBtnList = document.querySelectorAll('.fast-view-btn');

fastViewBtnList.forEach(btn => {
    btn.addEventListener('click', () => {
        addClass(fastViewPopup, 'active')
    });
});

fastViewPopup.addEventListener('click', (event) => {
    const target = event.target;
    const fastViewContainer = fastViewPopup.querySelector('.fast-view__container');
    const fastViewCloseBtn = fastViewPopup.querySelector('.close-btn--fastview');
    checkClickWithCloseBtn(fastViewContainer, 'active', target, fastViewCloseBtn, fastViewPopup)
});

const skeletons = document.querySelectorAll('.skeleton');
const hiddenElements = document.querySelectorAll('.hidden');

setTimeout(() => {
    skeletons.forEach(skeleton => {
        skeleton.classList.add('hidden');
    });
    hiddenElements.forEach(hiddenElement => {
        hiddenElement.classList.remove('hidden')
    })
}, 3000)