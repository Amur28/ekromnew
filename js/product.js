'use strict';
import { fastViewSlider, fastViewSliderThumbs, productSlider, productSliderThumbs } from './sliders.js';
import './libs.js';
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

/* Окно быстрого просмотра */

import { showFastView, fastViewBtnList, hideFastView } from './fastView.js';

showFastView(fastViewBtnList, body);

const fastViewPopup = document.getElementById('fastView');

fastViewPopup.addEventListener('click', (event) => {
    const zoomImg = fastViewPopup.querySelector('.zoom-img');
    hideFastView(body, event);
    fakeClickOnImg(event, fastViewPopup, zoomImg);
});

/* ZOOM */

import { initZoom, removeZoom, fakeClickOnImg } from './fastView.js';

const zoomImages = document.querySelectorAll('.zoom-img');

let globalX = 0;
let globalY = 0;

const productBox = document.querySelector('.product-box');

productBox.addEventListener('click', (event) => {
    const zoomImg = productBox.querySelector('.zoom-img');
    fakeClickOnImg(event, productBox, zoomImg);
})

document.addEventListener('mousemove', (event) => {
    globalX = event.pageX;
    globalY = event.pageY;
});

zoomImages.forEach(zoomImg => {
    zoomImg.addEventListener('mousemove', () => {
        initZoom(globalX, globalY, productBox, zoomImg);
    });

    zoomImg.addEventListener('mouseleave', () => {
        removeZoom(zoomImg);
    });
});

/* Выбор цвета в окне быстрого просмотра */

import { moveColorFrame } from './fastView.js';

const productColorsList = productBox.querySelector('.product-box__colors-list');
const fastViewColorsList = fastViewPopup.querySelector('.product-box__colors-list');

productColorsList.addEventListener('click', (event) => {
    moveColorFrame(event, productColorsList);
});

fastViewColorsList.addEventListener('click', (event) => {
    moveColorFrame(event, fastViewColorsList);
});

/* Смена контента по табам товара */

import { swapContentOnTabs } from './tabs.js';

const productTabs = document.querySelectorAll('.product-tabs__item');
const productContentArray = document.querySelectorAll('.product-info__inner');

productTabs.forEach((tab, index) => {
    tab.addEventListener('click', () => {
        swapContentOnTabs(productTabs, tab, productContentArray, index);
    })
});

/* Выбор цвета у карточки */

import { productCards, changeColorOnCard, changeImgOnHover } from './productCards.js';

productCards.forEach(card => {
    card.addEventListener('change', (event) => {
        changeColorOnCard(event, card);
    });

    const thumbs = card.querySelectorAll('.thumb');
    const productImg = card.querySelector('.product-card__img');
    const progressBarItems = card.querySelectorAll('.progressbar-item');

    progressBarItems.forEach(item => {
        const length = progressBarItems.length;
        item.style.width = 100 / length + '%';
    });

    /* Смена картинки при наведении */

    thumbs.forEach((thumb, index) => {
        const length = thumbs.length;
        thumb.style.width = 100 / length + '%';
        thumb.addEventListener('mouseover', () => {
            changeImgOnHover(thumb, progressBarItems, productImg, index)
        });
    });
});

/* Смена кнопки "Добавить в корзину" на счётчик */

import { changeCartButtonOnCounter } from './productCards.js';

productCards.forEach(card => {
    card.addEventListener('click', (event) => {
        changeCartButtonOnCounter(event);
    })
});