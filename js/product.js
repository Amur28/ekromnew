'use strict';
import './libs.js';
import { fastViewSlider, fastViewSliderThumbs } from './sliders.js';
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

const showOrHideContentOnScroll = () => {
    const defaultOffset = 200;
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

/* Выбор города */

import { headerCityButton, hideCitySelect } from './popups.js';

headerCityButton.addEventListener('click', () => {
    addClass(citySelect, 'active');
    addClass(body, 'active');
});

hideCitySelect();

/* ZOOM */

import { initZoom, removeZoom, zoomImg } from './fastView.js';

let globalX = 0;
let globalY = 0;
const productBox = document.querySelector('.product-box');

document.addEventListener('mousemove', (event) => {
    globalX = event.pageX;
    globalY = event.pageY;
});

zoomImg.addEventListener('mousemove', () => {
    initZoom(globalX, globalY, productBox);
});

zoomImg.addEventListener('mouseleave', removeZoom);

/* Выбор цвета в окне быстрого просмотра */

import { moveColorFrame } from './fastView.js';

const productBoxColorsList = productBox.querySelector('.product-box__colors-list');

productBoxColorsList.addEventListener('click', (event) => {
    moveColorFrame(event, productBoxColorsList);
});