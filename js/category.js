'use strict';
import './sliders.js';
import './libs.js';
import { addClass, removeClass, containClass, toggleClass, checkClickWithCloseBtn, checkClassAndClick, hideOtherItems } from './functions.js';
import { body } from './popups.js';

/* Скрытие общих элементов */

document.addEventListener('click', (event) => {
    const target = event.target;
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

/* Окно быстрого просмотра */

import { showFastView, fastViewBtnList, hideFastView, fakeClickOnImg, moveColorFrame } from './fastView.js';

showFastView(fastViewBtnList, body);

const fastViewPopup = document.getElementById('fastView');

fastViewPopup.addEventListener('click', (event) => {
    hideFastView(body, event);
    fakeClickOnImg(event, fastViewPopup, zoomImg)
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

/* Скрытие/показ фильтров */

import { initRangeSliders, showHideFilters } from './filter.js';

const filterItems = document.querySelector('.filter-items');

filterItems.addEventListener('click', (event) => {
    showHideFilters(event);
});

/* Ползунок в каталоге */

const rangeSliders = document.querySelectorAll('.filter-item__slider');

initRangeSliders(rangeSliders);

/* ZOOM */

import { initZoom, removeZoom } from './fastView.js';

let globalX = 0;
let globalY = 0;
const zoomImg = fastViewPopup.querySelector('.zoom-img')

document.addEventListener('mousemove', (event) => {
    globalX = event.pageX;
    globalY = event.pageY;
});

zoomImg.addEventListener('mousemove', () => {
    initZoom(globalX, globalY, fastViewPopup, zoomImg);
});

zoomImg.addEventListener('mouseleave', () => {
    removeZoom(zoomImg);
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

/* Смена отображения карточек в каталоге */

import { swapProductsDisplay, productsViewBtnsParent } from './productsDisplay.js';

productsViewBtnsParent.addEventListener('click', (event) => {
    swapProductsDisplay(event);
});

/* Выбор цвета в окне быстрого просмотра */

const productBoxColorsList = fastViewPopup.querySelector('.product-box__colors-list');

productBoxColorsList.addEventListener('click', (event) => {
    moveColorFrame(event, productBoxColorsList);
});

/* Выбор цвета у карточки */

import { productCards, changeColorOnCard, changeImgOnHover, returnFirstImg } from './productCards.js';

let xDown = null;
let yDown = null;

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

    const productImgBox = card.querySelector('.product-card__img-box');

    productImgBox.addEventListener('touchstart', (evt) => {
        xDown = evt.touches[0].clientX;
        yDown = evt.touches[0].clientY;
    });

    productImgBox.addEventListener('touchmove', (evt) => {
        if (!xDown || !yDown) {
            return;
        }
        let xUp = evt.touches[0].clientX;
        let yUp = evt.touches[0].clientY;

        let xDiff = xDown - xUp;
        let yDiff = yDown - yUp;

        const progressBarContainer = productImgBox.querySelector('.thumbs-progressbar');
        const currentItem = progressBarContainer.querySelector('.current');
        const nextItem = currentItem.nextElementSibling;
        const prevItem = currentItem.previousElementSibling;
        const progressBarArr = Array.from(progressBarItems);
        let currentIndex = progressBarArr.indexOf(currentItem);


        // немного поясню здесь. Тут берутся модули движения по оси абсцисс и ординат (почему модули? потому что если движение сделано влево или вниз, то его показатель будет отрицательным) и сравнивается, чего было больше: движения по абсциссам или ординатам. Нужно это для того, чтобы, если пользователь провел вправо, но немного наискосок вниз, сработал именно коллбэк для движения вправо, а ни как-то иначе.
        if (Math.abs(xDiff) > Math.abs(yDiff)) {/*most significant*/
            if (xDiff > 0) {
                if (nextItem) {
                    hideOtherItems(progressBarItems, 'current');
                    addClass(nextItem, 'current');
                    currentIndex += 1;
                    const thumb = thumbs[currentIndex];
                    const thumbImg = thumb.querySelector('img');
                    const thumbImgSrc = thumbImg.getAttribute('src');
                    productImg.setAttribute('src', thumbImgSrc)
                }
            } else if (xDiff < 0) {
                if (prevItem) {
                    hideOtherItems(progressBarItems, 'current');
                    addClass(prevItem, 'current')
                    currentIndex -= 1;
                    const thumb = thumbs[currentIndex];
                    const thumbImg = thumb.querySelector('img');
                    const thumbImgSrc = thumbImg.getAttribute('src');
                    productImg.setAttribute('src', thumbImgSrc)
                }
            }
        }
        /* reset values */
        xDown = null;
        yDown = null;
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