'use strict';
import './sliders.js';
import { brandsMarquee } from './marquee.js';
import './libs.js';
import { addClass, removeClass, containClass, toggleClass, checkClickWithCloseBtn, checkClassAndClick, hideOtherItems } from './functions.js';
import { body } from './popups.js';

/* Инициализация бегущей строки брендов */

brandsMarquee.mount(window.splide.Extensions);

/* Скрытие общих элементов */

document.addEventListener('click', (event) => {
    const target = event.target;
    hideGeneralElements(event);
    const itsFaqInner = target == faqInner || faqInner.contains(target);

    if (!itsFaqInner) hideOtherItems(faqItems, 'active');
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

/* FAQ section */

const faqInner = document.querySelector('.faq__inner');
const faqItems = document.querySelectorAll('.faq__item');

const showFaqItem = () => {
    const currentFaqItem = event.target.closest('.faq__item');

    if (!currentFaqItem) return;

    if (containClass(currentFaqItem, 'active')) {
        removeClass(currentFaqItem, 'active');
        return;
    };

    hideOtherItems(faqItems, 'active');

    addClass(currentFaqItem, 'active');
}

faqInner.addEventListener('click', showFaqItem);

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

/* Окно быстрого просмотра */

import { showFastView, fastViewBtnList, fastViewPopup, zoomImg, hideFastView, fakeClickOnImg, moveColorFrame } from './fastView.js';

showFastView(fastViewBtnList, body)

fastViewPopup.addEventListener('click', (event) => {
    hideFastView(body, event);
    fakeClickOnImg(event)
});

/* Выбор цвета в окне быстрого просмотра */

const productBoxColorsList = fastViewPopup.querySelector('.product-box__colors-list');

productBoxColorsList.addEventListener('click', (event) => {
    moveColorFrame(event, productBoxColorsList);
});

/*Выбор города*/

import { headerCityButton, hideCitySelect } from './popups.js';

headerCityButton.addEventListener('click', () => {
    addClass(citySelect, 'active');
    addClass(body, 'active');
});

hideCitySelect();

/* ZOOM */

import { initZoom, removeZoom } from './fastView.js';

let globalX = 0;
let globalY = 0;

document.addEventListener('mousemove', (event) => {
    globalX = event.pageX;
    globalY = event.pageY;
});

zoomImg.addEventListener('mousemove', () => {
    initZoom(globalX, globalY);
});

zoomImg.addEventListener('mouseleave', removeZoom);

/* Выбор цвета у карточки */

import { productCards, changeColorOnCard, changeImgOnHover } from './productCards.js';

productCards.forEach(card => {
    card.addEventListener('change', (event) => {
        changeColorOnCard(event, card);
    });

    const thumbs = card.querySelectorAll('.thumb');
    const productImg = card.querySelector('.product-card__img');
    const progressBar = card.querySelector('.thumbs-progressbar');
    const progressBarItems = card.querySelectorAll('.progressbar-item');

    progressBarItems.forEach(item => {
        const length = progressBarItems.length;
        item.style.width = 100 / length + '%';
    });

    /* Смена картинки при наведении */

    thumbs.forEach((thumb, index) => {
        const length = thumbs.length;
        thumb.style.width = 100 / length + '%';
        thumb.addEventListener('mouseover', (event) => {
            changeImgOnHover(thumb, progressBar, progressBarItems, productImg, index)
        });
    });
});

/* Видео */

const videosList = document.querySelector('.videos__list');

videosList.addEventListener('click', (event) => {
    const playButtons = videosList.querySelectorAll('.videos__item-button');
    playButtons.forEach(button => {
        if (event.target == button)
            button.previousElementSibling.click()
    });
});