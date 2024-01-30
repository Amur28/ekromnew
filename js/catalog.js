'use strict';
import { addClass, removeClass, containClass, hideOtherItems, toggleClass, checkClickWithCloseBtn } from './functions.js';
import { body } from './popups.js';

const clientWidth = window.innerWidth;

/* Скрытие общих элементов */

document.addEventListener('click', (event) => {
    hideGeneralElements(event);
});

/* Липкий HEADER */

import { showOrHideContentOnScroll } from './stickyHeader.js';

window.addEventListener('scroll', showOrHideContentOnScroll);

/* Показ/скрытие попапа со всеми категориями */

import { showHideAllCategories, hideGeneralElements } from './popups.js';

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

/*Выбор города*/

import { headerCityButton, hideCitySelect } from './popups.js';

headerCityButton.forEach(button => {
    button.addEventListener('click', () => {
        addClass(citySelect, 'active');
        addClass(body, 'active');
    })
});

hideCitySelect();

/* Форма поиска в шапке */

const headerSearchForm = document.querySelector('.header__search');
const headerSearchInput = headerSearchForm.querySelector('.header__search-input');
const headerSearchResult = headerSearchForm.querySelector('.search-result');

headerSearchInput.addEventListener('input', () => {
    addClass(headerSearchResult, 'active');
    if (!headerSearchInput.value.length) {
        removeClass(headerSearchResult, 'active');
    }
});