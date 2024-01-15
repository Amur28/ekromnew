'use strict';
import './sliders.js';
import { addClass, removeClass, containClass, hideOtherItems } from './functions.js';
import { body } from './popups.js';

/* Скрытие общих элементов */

document.addEventListener('click', (event) => {
    hideGeneralElements(event);
});

/* Липкий HEADER */

import { stickyHeader, checkScrollDown, checkScrollUp, scrollPosition } from './stickyHeader.js';

let lastScrollPos = 0;

const showOrHideContentOnScroll = () => {
    const defaultOffset = 0;
    if (checkScrollDown(lastScrollPos, stickyHeader, 'scroll', defaultOffset)) {
        addClass(stickyHeader, 'scroll');
    } else if (checkScrollUp(lastScrollPos, stickyHeader, 'scroll')) {
        removeClass(stickyHeader, 'scroll');
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

headerCityButton.addEventListener('click', () => {
    addClass(citySelect, 'active');
    addClass(body, 'active');
});

hideCitySelect();

/* Tabs */

import { swapContentOnTabs } from './tabs.js';

const personalTabs = document.querySelectorAll('.personal__aside-item');
const personalContentArr = document.querySelectorAll('.personal__item');

personalTabs.forEach((tab, index) => {
    tab.addEventListener('click', () => {
        swapContentOnTabs(personalTabs, tab, personalContentArr, index)
    });
});

const personalTiles = document.querySelectorAll('.personal__tile');
const personalTabsTile = document.querySelectorAll('.personal__aside-item.tile');
const personalContentTile = document.querySelectorAll('.personal__item.tile');

personalTiles.forEach((tile, index) => {
    tile.addEventListener('click', () => {
        removeClass(personalTabs[0], 'active');
        swapContentOnTabs(personalTabsTile, personalTabsTile[index], personalContentTile, index + 1)
    });
});