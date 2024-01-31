'use strict';
import './sliders.js';
import './libs.js';
import { addClass, removeClass, containClass } from './functions.js';
import { body } from './popups.js';

/* Скрытие общих элементов */

document.addEventListener('click', (event) => {
    hideGeneralElements(event);
});

/* Липкий HEADER */

import { showOrHideContentOnScroll } from './stickyHeader.js';

window.addEventListener('scroll', showOrHideContentOnScroll);

/* Показ/скрытие попапа со всеми категориями */

import { showHideAllCategories, catalogPopup, hideGeneralElements } from './popups.js';
showHideAllCategories();

/* Header dropdown */

import { headerTopInfoLink, showHideHeaderDrodown } from './popups.js';

headerTopInfoLink.addEventListener('click', showHideHeaderDrodown);

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

headerCityButton.forEach(button => {
    button.addEventListener('click', () => {
        addClass(citySelect, 'active');
        addClass(body, 'active');
    })
});

hideCitySelect();

/* Окно быстрого просмотра */

import { showFastView, fastViewBtnList, hideFastView, fakeClickOnImg, moveColorFrame } from './fastView.js';

showFastView(fastViewBtnList, body);

const fastViewPopup = document.getElementById('fastView');

fastViewPopup.addEventListener('click', (event) => {
    hideFastView(body, event);
    fakeClickOnImg(event, fastViewPopup, zoomImg);
});

/* Выбор цвета в окне быстрого просмотра */

const productBoxColorsList = fastViewPopup.querySelector('.product-box__colors-list');

productBoxColorsList.addEventListener('click', (event) => {
    moveColorFrame(event, productBoxColorsList);
});

/* ZOOM */

import { initZoom, removeZoom } from './fastView.js';

let globalX = 0;
let globalY = 0;
const zoomImg = fastViewPopup.querySelector('.zoom-img');

document.addEventListener('mousemove', (event) => {
    globalX = event.pageX;
    globalY = event.pageY;
});

zoomImg.addEventListener('mousemove', () => {
    initZoom(globalX, globalY, fastViewPopup, zoomImg);
});

zoomImg.addEventListener('mouseleave', () => {
    removeZoom(zoomImg)
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

/* Смена кнопки "Добавить в корзину" на счётчик */

import { changeCartButtonOnCounter } from './productCards.js';

productCards.forEach(card => {
    card.addEventListener('click', changeCartButtonOnCounter);
});

/* Смена контента в попапе каталога */
import { catalogPopupMenuItems, changeContentInCatalogPopup } from './popups.js';

catalogPopupMenuItems.forEach(changeContentInCatalogPopup);

/* Кнопки избранного/сравнения/корзины и смена количества товаров */

import { addProductsToCart } from './productCards.js';

productCards.forEach(addProductsToCart)

productCards.forEach(item => {
    item.addEventListener('change', () => {
        console.log('hi')
    })
});