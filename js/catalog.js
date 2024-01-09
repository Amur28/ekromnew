'use strict';
import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';

const body = document.querySelector('body')

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

/* Функция скрытия остальных элементов */

const hideOtherItems = (parentEl, className) => {
    parentEl.forEach(faqItem => {
        removeClass(faqItem, className)
    });
};

/* Липкий HEADER */

let lastScrollPos = 0;
const stickyHeader = document.getElementById('stickyHeader');

const hideShowHeaderOnScroll = () => {
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
};

const scrollPosition = () => window.scrollY || document.documentElement.scrollTop;

window.addEventListener('scroll', hideShowHeaderOnScroll);

/* Показ/скрытие попапа со всеми категориями */

const allCategoriesBtns = document.querySelectorAll('.oval-btn--all-categories');
const catalogPopup = document.getElementById('catalogPopup');

allCategoriesBtns.forEach(button => {
    button.addEventListener('click', (event) => {
        event.stopPropagation()
        toggleClass(catalogPopup, 'active')
        toggleClass(button, 'active')
    });
})

document.addEventListener('click', (event) => {
    const target = event.target;
    const allCategoriesWrapper = catalogPopup.querySelector('.catalog-popup__wrapper');

    checkClassAndClick(allCategoriesWrapper, 'active', target, catalogPopup);
    allCategoriesBtns.forEach(button => {
        checkClassAndClick(allCategoriesWrapper, 'active', target, button)
    });
    checkClassAndClick(headerTopInfoDropdown, 'active', target, headerTopInfoDropdown);

    authPopup.forEach(popup => {
        checkClassAndClick(popup, 'active', target, popup)
    });
});

/* Header dropdown */

const headerTopInfoLink = document.querySelector('.header__top-link--info');
const headerTopInfoDropdown = headerTopInfoLink.nextElementSibling;

headerTopInfoLink.addEventListener('click', (event) => {
    event.stopPropagation();
    toggleClass(headerTopInfoDropdown, 'active');
});

/* Auth popup */

const authBtns = document.querySelectorAll('.auth-btn');
const authPopup = document.querySelectorAll('.auth-popup');

authBtns.forEach(authBtn => {
    authBtn.addEventListener('click', (event) => {
        event.stopPropagation();
        const authPopupClosest = authBtn.nextElementSibling;

        toggleClass(authPopupClosest, 'active');
    });
})

/* Форма авторизации */

const authRegisterBtns = document.querySelectorAll('.rect-btn--register');
const authLoginBtns = document.querySelectorAll('.rect-btn--login');
const authRegister = document.getElementById('authRegister');
const authLogin = document.getElementById('authLogin');

authRegisterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const parentPopup = btn.parentNode;
        removeClass(parentPopup, 'active');
        addClass(authRegister, 'active');
        addClass(body, 'active')
    });
});

authLoginBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const parentPopup = btn.parentNode;
        removeClass(parentPopup, 'active');
        addClass(authLogin, 'active');
        addClass(body, 'active')
    });
});

authRegister.addEventListener('click', (event) => {
    const authInner = authRegister.querySelector('.auth__inner');
    let target = event.target;
    checkClassAndClick(authInner, 'active', target, authRegister);
    checkClassAndClick(authInner, 'active', target, body);
});

authLogin.addEventListener('click', (event) => {
    const authInner = authLogin.querySelector('.auth__inner');
    let target = event.target;
    checkClassAndClick(authInner, 'active', target, authLogin);
    checkClassAndClick(authInner, 'active', target, body);
});

/* Окно быстрого просмотра */

const fastViewPopup = document.getElementById('fastView');
const fastViewBtnList = document.querySelectorAll('.fast-view-btn');

fastViewBtnList.forEach(btn => {
    btn.addEventListener('click', () => {
        addClass(fastViewPopup, 'active')
        addClass(body, 'active')
    });
});

fastViewPopup.addEventListener('click', (event) => {
    const target = event.target;
    const fastViewContainer = fastViewPopup.querySelector('.fast-view__container');
    const fastViewCloseBtn = fastViewPopup.querySelector('.close-btn--fastview');
    checkClickWithCloseBtn(fastViewContainer, 'active', target, fastViewCloseBtn, fastViewPopup);
    checkClickWithCloseBtn(fastViewContainer, 'active', target, fastViewCloseBtn, body);
    checkClassAndClick(fastViewContainer, 'active', target, body);

    const currentSlide = fastViewPopup.querySelector('.swiper-slide-active');
    const currentSlideImg = currentSlide.firstElementChild;
    const isSlide = target == zoomImg || zoomImg.contains(target);
    if (isSlide) {
        currentSlideImg.click()
    }
});

/* Выбор города */

const citySelect = document.getElementById('citySelect');
const citySelectCloseBtn = citySelect.querySelector('.close-btn--city-select');
const headerCityButton = document.querySelector('.header-city__button');

headerCityButton.addEventListener('click', () => {
    addClass(citySelect, 'active');
    addClass(body, 'active');
});

citySelect.addEventListener('click', (event) => {
    let target = event.target;
    const citySelectInner = citySelect.querySelector('.city-select');
    checkClickWithCloseBtn(citySelectInner, 'active', target, citySelectCloseBtn, citySelect);
    checkClickWithCloseBtn(citySelectInner, 'active', target, citySelectCloseBtn, body);
    checkClassAndClick(citySelectInner, 'active', target, body);
});

/* Скрытие/показ фильтров */
const filterItems = document.querySelector('.filter-items');

filterItems.addEventListener('click', (event) => {
    let target = event.target;
    const filterItem = event.target.closest('.filter-item')
    const filterItemHeader = filterItem.querySelector('.filter-item__header');
    const filterItemFooter = filterItem.querySelector('.filter-item__footer');

    if (target == filterItemHeader || filterItemHeader.contains(target)) {
        toggleClass(filterItem, 'hidden');

    } else if (target == filterItemFooter || filterItemFooter.contains(target)) {
        if (!containClass(filterItem, 'expand')) {
            filterItemFooter.textContent = 'Скрыть';
            addClass(filterItem, 'expand');
        } else {
            filterItemFooter.textContent = 'Больше';
            removeClass(filterItem, 'expand')
        }
    } else {
        return;
    }

});

/* Ползунок в каталоге */

const rangeSliders = document.querySelectorAll('.filter-item__slider');

rangeSliders.forEach(rangeSlider => {
    noUiSlider.create(rangeSlider, {
        start: [0, 1000000],
        connect: true,
        step: 100,
        range: {
            'min': 0,
            'max': 1000000,
        },
    });
    const inputs = rangeSlider.nextElementSibling;
    const inputMin = inputs.firstElementChild;
    const inputMax = inputs.lastElementChild;
    const inputsRange = [inputMin, inputMax];

    rangeSlider.noUiSlider.on('update', function (values, handle) {
        inputsRange[handle].value = Math.round(values[handle]);
    });

    const setRangeSlider = (i, value) => {
        let arr = [null, null];
        arr[i] = value;
        rangeSlider.noUiSlider.set(arr);
    }

    inputsRange.forEach((input, index) => {
        input.addEventListener('change', (event) => {
            setRangeSlider(index, event.currentTarget.value)
        });
    })
});

const fastViewSliderThumbs = new Swiper('.slider-fastview-thumbs', {
    slidesPerView: 6,
    spaceBetween: 5,
});

const fastViewSlider = new Swiper('.slider-fastview', {
    slidesPerView: 1,
    loop: true,
    thumbs: {
        swiper: fastViewSliderThumbs,
    }
});

Fancybox.bind('[data-fancybox="fastview-gallery"]', {

});

/* Зум картинки в окне быстрого просмотра */

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

/* Форма "Задать свой вопрос" */

const faqBtn = document.querySelectorAll('.feedback');
const questionForm = document.getElementById('questionForm');

faqBtn.forEach(btn => {
    btn.addEventListener('click', (event) => {
        event.stopPropagation()
        addClass(questionForm, 'active');
        addClass(body, 'active')
    });
})

questionForm.addEventListener('click', (event) => {
    const target = event.target;
    const questionFormContainer = questionForm.querySelector('form.question-form');
    const closeQuestionFormBtn = questionForm.querySelector('.close-btn--question');

    checkClickWithCloseBtn(questionFormContainer, 'active', target, closeQuestionFormBtn, questionForm);
    checkClickWithCloseBtn(questionFormContainer, 'active', target, closeQuestionFormBtn, body);
    checkClassAndClick(questionFormContainer, 'active', target, body);
});

/* Смена отображения карточек в каталоге */

const productsViewBtnsParent = document.querySelector('.products-view-buttons');
const productsViewBtns = productsViewBtnsParent.querySelectorAll('.products-view-btn')

productsViewBtnsParent.addEventListener('click', (event) => {
    const currentBtn = event.target.closest('.products-view-btn');
    const productsRows = document.querySelector('.products__main.rows')
    const productsTiles = document.querySelector('.products__main.tiles')

    if (!currentBtn) return;

    if (containClass(currentBtn, 'active')) {
        removeClass(currentBtn, 'active')
    }

    hideOtherItems(productsViewBtns, 'active')

    addClass(currentBtn, 'active');
    if (containClass(currentBtn, 'tiles')) {
        removeClass(productsRows, 'active');
        addClass(productsTiles, 'active');
    } else if (containClass(currentBtn, 'row')) {
        removeClass(productsTiles, 'active');
        addClass(productsRows, 'active')
    }
});

/* Выбор цвета в окне быстрого просмотра */

const productBoxColorsList = fastViewPopup.querySelector('.product-box__colors-list');

productBoxColorsList.addEventListener('click', (event) => {
    const colorLabel = event.target.closest('.product-box__colors-item');
    if (!colorLabel) return;
    const frame = productBoxColorsList.querySelector('.frame');
    let posX = colorLabel.offsetLeft;
    let posY = colorLabel.offsetTop;

    frame.style.cssText = `transform: translate(${posX}px, ${posY}px)`;
});

/* Выбор цвета у карточки */
const productCards = document.querySelectorAll('.product-card');

productCards.forEach(card => {
    card.addEventListener('change', (event) => {
        const colorLabels = card.querySelectorAll('.product-card__color-label')
        const colorLabel = event.target.closest('.product-card__color-label');

        if (!colorLabel) return;

        if (containClass(colorLabel, 'checkdd')) {
            removeClass(colorLabel, 'checked');
            return
        }

        hideOtherItems(colorLabels, 'checked');

        addClass(colorLabel, 'checked')
    })
});

const productCardsRow = document.querySelectorAll('.product-card.row');

productCardsRow.forEach(card => {
    card.addEventListener('click', (event) => {
        const cartButton = event.target.closest('.product-card__buy-cart');
        const counter = cartButton.nextElementSibling;
        addClass(cartButton, 'hide');
        removeClass(counter, 'hide');
    })
})