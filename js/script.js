'use strict';
import './sliders.js';
import { brandsMarquee } from './marquee.js';
import './libs.js';
import { addClass, removeClass, containClass, hideOtherItems, toggleClass } from './functions.js';
import { body } from './popups.js';

const clientWidth = window.innerWidth;

/* Инициализация бегущей строки брендов */

brandsMarquee.mount(window.splide.Extensions);

/* Скрытие общих элементов */

document.addEventListener('click', (event) => {
    hideGeneralElements(event);
    const target = event.target;
    const itsFaqInner = target == faqInner || faqInner.contains(target);

    if (!itsFaqInner) hideOtherItems(faqItems, 'active');
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

import { showFastView, fastViewBtnList, hideFastView, fakeClickOnImg, moveColorFrame } from './fastView.js';

showFastView(fastViewBtnList, body);

const fastViewPopup = document.getElementById('fastView');

fastViewPopup.addEventListener('click', (event) => {
    hideFastView(body, event);
    fakeClickOnImg(event, fastViewPopup, zoomImg)
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
const zoomImg = fastViewPopup.querySelector('.zoom-img');

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
            if (clientWidth <= 992) return;

            const length = thumbs.length;
            thumb.style.width = 100 / length + '%';
            thumb.addEventListener('mouseover', () => {
                changeImgOnHover(thumb, progressBarItems, productImg, index);
            });
        });
    });

    thumbsList.addEventListener('mouseleave', () => {
        if (clientWidth <= 992) return;

        returnFirstImg(thumbs, progressBarItems, productImg);
    });

});

/* Видео */

const videosButtons = document.querySelectorAll('.videos__item-button');

videosButtons.forEach(button => {
    button.addEventListener('click', (event) => {
        if (event.target == button)
            button.previousElementSibling.click()
    });
});

/* Смена кнопки "Добавить в корзину" на счётчик */

import { changeCartButtonOnCounter } from './productCards.js';

productCards.forEach(card => {
    card.addEventListener('click', (event) => {
        changeCartButtonOnCounter(event);
    })
});

/* Кнопки добавления в корзину на мобильной версии */
const mobileCartButtons = document.querySelectorAll('.product-card__mobile-cart');

mobileCartButtons.forEach(button => {
    button.addEventListener('click', () => {
        const mobileFoterButtons = button.nextElementSibling;

        addClass(button, 'hide');
        addClass(mobileFoterButtons, 'active');
    })
})

/* Раскрывающиеся списки в футере */
const footerTitles = document.querySelectorAll('.footer__nav-title');
const footerNav = document.querySelector('.footer__nav');

const showFooterItem = () => {
    const currentNavItem = event.target.closest('.footer__nav-title');

    if (!currentNavItem) return;

    toggleClass(currentNavItem, 'active');
}

footerNav.addEventListener('click', showFooterItem);

// const faqInner = document.querySelector('.faq__inner');
// const faqItems = document.querySelectorAll('.faq__item');

// const showFaqItem = () => {
//     const currentFaqItem = event.target.closest('.faq__item');

//     if (!currentFaqItem) return;

//     if (containClass(currentFaqItem, 'active')) {
//         removeClass(currentFaqItem, 'active');
//         return;
//     };

//     hideOtherItems(faqItems, 'active');

//     addClass(currentFaqItem, 'active');
// }

// faqInner.addEventListener('click', showFaqItem);