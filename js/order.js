'use strict';
import { addClass, removeClass, containClass, hideOtherItems } from './functions.js';
import { body } from './popups.js';

/* Скрытие общих элементов */

document.addEventListener('click', (event) => {
    const target = event.target;
    hideGeneralElements(event);
});

/* Липкий HEADER */

import { stickyHeader, checkScrollDown, checkScrollUp, scrollPosition } from './stickyHeader.js';

let lastScrollPos = 0;
const cartAside = document.querySelector('.cart-aside');

const showOrHideContentOnScroll = () => {
    const defaultOffset = 200;
    if (checkScrollDown(lastScrollPos, stickyHeader, 'scroll', defaultOffset)) {
        addClass(stickyHeader, 'scroll');
        if (cartAside) {
            addClass(cartAside, 'scroll');
        }
        
    } else if (checkScrollUp(lastScrollPos, stickyHeader, 'scroll')) {
        removeClass(stickyHeader, 'scroll');
        if (cartAside) {
            removeClass(cartAside, 'scroll');
        }
    }
    if (containClass(catalogPopup, 'active')) {
        addClass(stickyHeader, 'popup-active')
    } else {
        removeClass(stickyHeader, 'popup-active')
    }

    lastScrollPos = scrollPosition();
};

window.addEventListener('scroll', showOrHideContentOnScroll);

/* Показ/скрытие попапа со всеми категориями */

import { showHideAllCategories, catalogPopup, hideGeneralElements } from './popups.js';
showHideAllCategories();

/* Header dropdown */

import { headerTopInfoLink, showHideHeaderDrodown } from './popups.js';

headerTopInfoLink.addEventListener('click', showHideHeaderDrodown)

/* Auth popup */

import { showHideAuthPopup } from './popups.js';

showHideAuthPopup();

/* Форма авторизации */

import { authRegister, authLogin, authRegisterBtns, authLoginBtns, showAuthForm, hideAuthForm } from './popups.js'

showAuthForm(authRegisterBtns, authRegister);
showAuthForm(authLoginBtns, authLogin);
hideAuthForm(authRegister);
hideAuthForm(authLogin);

/*Выбор города*/

import { headerCityButton, hideCitySelect } from './popups.js';

headerCityButton.addEventListener('click', () => {
    addClass(citySelect, 'active');
    addClass(body, 'active');
});

hideCitySelect();

/* Форма "Задать свой вопрос" */

import { hideQuestionForm, questionForm } from './popups.js';

const faqBtn = document.querySelectorAll('.feedback');

faqBtn.forEach(btn => {
    btn.addEventListener('click', (event) => {
        event.stopPropagation()
        addClass(questionForm, 'active');
        addClass(body, 'active')
    });
});

questionForm.addEventListener('click', (event) => {
    hideQuestionForm(event);
});

/* Табы */

import { swapContentOnTabs } from './tabs.js';

const orderTabs = document.querySelectorAll('.rect-btn--order-make');
const contentArr = document.querySelectorAll('.order-make__inner');

orderTabs.forEach((tab, index) => {
    tab.addEventListener('click', () => {
        swapContentOnTabs(orderTabs, tab, contentArr, index)
    })
})