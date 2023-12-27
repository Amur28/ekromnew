'use strict';

/* Функции для работы с классами */

const containClass = (el, className) => el.classList.contains(`${className}`);
const addClass = (el, className) => el.classList.add(`${className}`);
const removeClass = (el, className) => el.classList.remove(`${className}`);
const toggleClass = (el, className) => el.classList.toggle(`${className}`);

/* Проверка и скрытие элемента при клике вне его или по кнопке "Закрыть" */

const checkClickWithCloseBtn = (targetEl, className, target, closeBtn, parentEl) => {
    const itsEl = target == targetEl || targetEl.contains(target);
    const itsCloseBtn = target == closeBtn || closeBtn.contains(target);

    if (!itsEl || itsCloseBtn) {
        removeClass(parentEl, className);
    }
};

/* Проверка и скрытие элемента при клике вне его */
const checkClassAndClick = (targetEl, className, target, parentEl) => {
    const itsEl = target == targetEl || targetEl.contains(target);
    const elHasClass = containClass(parentEl, className);

    if (!itsEl && elHasClass) {
        removeClass(parentEl, className);
    }
};

/* Липкий HEADER */

let lastScrollPos = 0;
const stickyHeader = document.getElementById('stickyHeader');

window.addEventListener('scroll', () => {
    const defaultOffset = 200;

    if (scrollPosition() > lastScrollPos && !containClass(stickyHeader, 'scroll') && scrollPosition() > defaultOffset) {
        addClass(stickyHeader, 'scroll');
    } else if (scrollPosition() < lastScrollPos && containClass(stickyHeader, 'scroll')) {
        removeClass(stickyHeader, 'scroll')
    }
    if (containClass(catalogPopup, 'active')) {
        addClass(stickyHeader, 'popup-active')
    } else {
        removeClass(stickyHeader, 'popup-active')
    }

    lastScrollPos = scrollPosition();
});

const scrollPosition = () => window.scrollY || document.documentElement.scrollTop;

/* Показ/скрытие попапа со всеми категориями */

const allCategoriesBtn = document.getElementById('allCategoriesBtn');
const catalogPopup = document.getElementById('catalogPopup');

allCategoriesBtn.addEventListener('click', (event) => {
    event.stopPropagation()
    toggleClass(catalogPopup, 'active')
    toggleClass(allCategoriesBtn, 'active')
});

document.addEventListener('click', (event) => {
    const target = event.target;
    const allCategoriesWrapper = catalogPopup.querySelector('.catalog-popup__wrapper');

    checkClassAndClick(allCategoriesWrapper, 'active', target, catalogPopup);
    checkClassAndClick(allCategoriesWrapper, 'active', target, allCategoriesBtn);

    checkClassAndClick(headerTopInfoDropdown, 'active', target, headerTopInfoDropdown);

    checkClassAndClick(authPopup, 'active', target, authPopup);

    const itsFaqInner = target == faqInner || faqInner.contains(target);
    if (!itsFaqInner) hideOtherFaqItems(faqItems);
});

/* Header dropdown */

const headerTopInfoLink = document.querySelector('.header__top-link--info');
const headerTopInfoDropdown = headerTopInfoLink.nextElementSibling;

headerTopInfoLink.addEventListener('click', (event) => {
    event.stopPropagation();
    toggleClass(headerTopInfoDropdown, 'active');
});

/* Auth popup */

const authBtn = document.querySelector('.auth-btn');
const authPopup = document.querySelector('.auth-popup')

authBtn.addEventListener('click', (event) => {
    event.stopPropagation();
    toggleClass(authPopup, 'active');
});

/* Форма авторизации */

const authRegister = document.getElementById('authRegister');
const authRegisterBtn = document.querySelector('.rect-btn--register');
const authLogin = document.getElementById('authLogin');
const authLoginBtn = document.querySelector('.rect-btn--login');

authRegisterBtn.addEventListener('click', () => {
    addClass(authRegister, 'active');
    removeClass(authPopup, 'active');
});

authLoginBtn.addEventListener('click', () => {
    addClass(authLogin, 'active');
    removeClass(authPopup, 'active');
});

authRegister.addEventListener('click', (event) => {
    const authInner = authRegister.querySelector('.auth__inner');
    let target = event.target;
    checkClassAndClick(authInner, 'active', target, authRegister);
});

authLogin.addEventListener('click', (event) => {
    const authInner = authLogin.querySelector('.auth__inner');
    let target = event.target;
    checkClassAndClick(authInner, 'active', target, authLogin);
});

/* FAQ section */

const faqInner = document.querySelector('.faq__inner');
const faqItems = document.querySelectorAll('.faq__item');

const hideOtherFaqItems = (parentEl) => {
    parentEl.forEach(faqItem => {
        removeClass(faqItem, 'active')
    });
};

faqInner.addEventListener('click', (event) => {
    const currentFaqItem = event.target.closest('.faq__item');

    if (!currentFaqItem) return;

    if (containClass(currentFaqItem, 'active')) {
        removeClass(currentFaqItem, 'active');
        return;
    };

    hideOtherFaqItems(faqItems);

    addClass(currentFaqItem, 'active');
});

/* Форма "Задать свой вопрос" */

const faqBtn = document.getElementById('rectBtnFaq');
const questionForm = document.getElementById('questionForm');


faqBtn.addEventListener('click', (event) => {
    event.stopPropagation()
    addClass(questionForm, 'active');
});

questionForm.addEventListener('click', (event) => {
    const target = event.target;
    const questionFormContainer = questionForm.querySelector('form.question-form');
    const closeQuestionFormBtn = questionForm.querySelector('.close-btn--question');

    checkClickWithCloseBtn(questionFormContainer, 'active', target, closeQuestionFormBtn, questionForm);
});

/* Окно быстрого просмотра */

const fastViewPopup = document.getElementById('fastView');
const fastViewBtnList = document.querySelectorAll('.fast-view-btn');

fastViewBtnList.forEach(btn => {
    btn.addEventListener('click', () => {
        addClass(fastViewPopup, 'active')
    });
});

fastViewPopup.addEventListener('click', (event) => {
    const target = event.target;
    const fastViewContainer = fastViewPopup.querySelector('.fast-view__container');
    const fastViewCloseBtn = fastViewPopup.querySelector('.close-btn--fastview');
    checkClickWithCloseBtn(fastViewContainer, 'active', target, fastViewCloseBtn, fastViewPopup);

    const currentSlide = fastViewPopup.querySelector('.swiper-slide-active');
    const currentSlideImg = currentSlide.firstElementChild;
    const isSlide = target == zoomImg || zoomImg.contains(target);
    if (isSlide) {
        currentSlideImg.click()
    }
});

/* Попап сравнения/избранного */

const compareBtns = document.querySelectorAll('.round-btn--compare');
const comparePopup = document.getElementById('popupCompare');
const favBtns = document.querySelectorAll('.round-btn--fav');
const favPopup = document.getElementById('popupFav');

compareBtns.forEach(btn => {
    btn.addEventListener('click', (event) => {
        addClass(comparePopup, 'active');
        setTimeout(() => {
            removeClass(comparePopup, 'active')
        }, 3000)
    })
});

favBtns.forEach(btn => {
    btn.addEventListener('click', (event) => {
        addClass(favPopup, 'active');
        setTimeout(() => {
            removeClass(favPopup, 'active')
        }, 3000)
    })
});

/*Выбор города*/

const citySelect = document.getElementById('citySelect');
const citySelectCloseBtn = citySelect.querySelector('.close-btn--city-select');
const headerCityButton = document.querySelector('.header-city__button');

headerCityButton.addEventListener('click', () => {
    addClass(citySelect, 'active');
});

citySelect.addEventListener('click', (event) => {
    let target = event.target;
    const citySelectInner = citySelect.querySelector('.city-select');
    checkClickWithCloseBtn(citySelectInner, 'active', target, citySelectCloseBtn, citySelect);
});

/* ZOOM */
let globalX = 0;
let globalY = 0;

document.addEventListener('mousemove', (event) => {
    globalX = event.pageX;
    globalY = event.pageY;
});

const zoomImg = document.querySelector('.zoom-img');

zoomImg.addEventListener('mousemove', (event) => {
    let zoom = 5;
    let currentSlide = fastViewPopup.querySelector('.swiper-slide-active');
    let currentImg = currentSlide.firstElementChild;
    let currentImgSrc = currentImg.getAttribute('data-src');
    let imgWidth = currentImg.offsetWidth;
    let imgHeight = currentImg.offsetHeight;
    const zoomOverlay = zoomImg.nextElementSibling;
    const cursor = zoomImg.firstElementChild;
    cursor.style.width = `${zoomOverlay.offsetWidth / zoom}px`
    cursor.style.height = `${zoomOverlay.offsetHeight / zoom}px`
    let cursorWidth = cursor.offsetWidth;
    let cursorHeight = cursor.offsetHeight;
    let posX = globalX - (zoomImg.getBoundingClientRect().left + window.scrollX) - cursorWidth / 2;
    let posY = globalY - (zoomImg.getBoundingClientRect().top + window.scrollY) - cursorHeight / 2;
    if (posX < 0) {
        posX = 0
    }
    if (posY < 0) {
        posY = 0
    }
    if (posX > (imgWidth - cursorWidth)) {
        posX = imgWidth - cursorWidth
    }
    if (posY > (imgHeight - cursorHeight)) {
        posY = imgHeight - cursorHeight
    }
    cursor.style.display = 'block';
    cursor.style.left = posX + 'px';
    cursor.style.top = posY + 'px';

    posX *= zoom
    posY *= zoom
    zoomOverlay.style.display = 'block';
    zoomOverlay.style.backgroundImage = `url(${currentImgSrc})`;
    zoomOverlay.style.backgroundSize = `${imgWidth * zoom}px`;
    zoomOverlay.style.backgroundPosition = `-${posX}px -${posY}px`;
});

zoomImg.addEventListener('mouseleave', (event) => {
    const cursor = zoomImg.firstElementChild;
    const zoomOverlay = zoomImg.nextElementSibling;
    cursor.style.display = 'none';
    zoomOverlay.style.display = 'none';
});

/* Выбор цвета */

const productBoxColorsList = fastViewPopup.querySelector('.product-box__colors-list');

productBoxColorsList.addEventListener('click', (event) => {
    const colorLabel = event.target.closest('.product-box__colors-item');
    if (!colorLabel) return;
    const frame = productBoxColorsList.querySelector('.frame');
    let posX = colorLabel.offsetLeft;
    let posY = colorLabel.offsetTop;

    frame.style.cssText = `transform: translate(${posX}px, ${posY}px)`;
});