'use strict';
import { fastViewSlider, fastViewSliderThumbs, productSlider, productSliderThumbs } from './sliders.js';
import './libs.js';
import { addClass, removeClass, containClass, hideOtherItems } from './functions.js';
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
        if (clientWidth <= 992) return;
        initZoom(globalX, globalY, productBox, zoomImg);
    });

    zoomImg.addEventListener('mouseleave', () => {
        if (clientWidth <= 992) return;
        removeZoom(zoomImg);
    });
});

/* Выбор цвета в окне быстрого просмотра */

import { moveColorFrame } from './fastView.js';

const mobileProductBox = document.querySelector('.mobile-product-info')
const productColorsList = productBox.querySelector('.product-box__colors-list');
const mobileProductColorsList = mobileProductBox.querySelector('.product-box__colors-list');
const fastViewColorsList = fastViewPopup.querySelector('.product-box__colors-list');

productColorsList.addEventListener('click', (event) => {
    moveColorFrame(event, productColorsList);
});

fastViewColorsList.addEventListener('click', (event) => {
    moveColorFrame(event, fastViewColorsList);
});

mobileProductColorsList.addEventListener('click', (event) => {
    moveColorFrame(event, mobileProductColorsList);
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

import { productCards, changeColorOnCard, changeImgOnHover, returnFirstImg } from './productCards.js';

productCards.forEach(card => {
    card.addEventListener('change', (event) => {
        changeColorOnCard(event, card);
    });

    const productImg = card.querySelector('.product-card__img');
    const progressBarItems = card.querySelectorAll('.progressbar-item');

    progressBarItems.forEach(item => {
        const length = progressBarItems.length;
        item.style.width = 100 / length + '%';
    });

    /* Смена картинки при наведении */
    const thumbsList = card.querySelector('.thumbs');
    const thumbs = thumbsList.querySelectorAll('.thumb');

    thumbs.forEach((thumb, index) => {
        thumb.addEventListener('mouseover', () => {
            const length = thumbs.length;
            thumb.style.width = 100 / length + '%';
            thumb.addEventListener('mouseover', () => {
                changeImgOnHover(thumb, progressBarItems, productImg, index);
            });
        });
    });

    thumbsList.addEventListener('mouseleave', () => {
        returnFirstImg(thumbs, progressBarItems, productImg);
    });
});

/* Смена кнопки "Добавить в корзину" на счётчик */

import { changeCartButtonOnCounter } from './productCards.js';

productCards.forEach(card => {
    card.addEventListener('click', (event) => {
        changeCartButtonOnCounter(event);
    })
});