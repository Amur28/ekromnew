'use strict';
import { addClass, removeClass, containClass, toggleClass, checkClickWithCloseBtn } from "./functions.js";
const mobileOverlay = document.querySelector('.mobile-overlay');

let xDown = null;
let yDown = null;

/* Touch функции */

const handleTouchStart = (evt) => {                                         
    xDown = evt.touches[0].clientX;                                      
    yDown = evt.touches[0].clientY;                                   
};                                             

const handleTouchMove = (evt) => {
    if ( !xDown || ! yDown) {
        return;
    }
    let xUp = evt.touches[0].clientX;                                    
    let yUp = evt.touches[0].clientY;

    let xDiff = xDown - xUp;
    let yDiff = yDown - yUp;
    // немного поясню здесь. Тут берутся модули движения по оси абсцисс и ординат (почему модули? потому что если движение сделано влево или вниз, то его показатель будет отрицательным) и сравнивается, чего было больше: движения по абсциссам или ординатам. Нужно это для того, чтобы, если пользователь провел вправо, но немного наискосок вниз, сработал именно коллбэк для движения вправо, а ни как-то иначе.
    if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {/*most significant*/
        if ( xDiff > 0 ) {
            if (containClass(headerMenu, 'active')){
                removeClass(headerMenu, 'active');
                removeClass(mobileOverlay, 'active');
            }
        } else if (xDiff < 0 && xDown <= 15) {
            addClass(headerMenu, 'active');
            addClass(mobileOverlay, 'active');
        }                       
    }
    /* reset values */
    xDown = null;
    yDown = null;                                             
};

/* Открытие/скрытие бокового меню по свайпу */

document.addEventListener('touchstart', handleTouchStart, false);
document.addEventListener('touchmove', handleTouchMove, false);

/* Раскрывающиеся списки в футере/хэдере */

const headerMobileMenu = document.querySelector('.header__mobile')
const headerMenu = document.querySelector('.header-menu');
const footerNav = document.querySelector('.footer__nav');
const headerNav = headerMenu.querySelector('.header-menu__nav');

const showFooterItem = () => {
    const currentNavItem = event.target.closest('.footer__nav-title');

    if (!currentNavItem) return;

    toggleClass(currentNavItem, 'active');
}

const showHeaderItem = () => {
    const currentNavItem = event.target.closest('.header-menu__nav-title');

    if (!currentNavItem) return;

    toggleClass(currentNavItem, 'active');
}

footerNav.addEventListener('click', showFooterItem);
headerNav.addEventListener('click', showHeaderItem);

/* Раскрытие/скрытие бокового меню */

const headerMenuInner = headerMenu.querySelector('.header-menu__inner');
const headerMenuCloseBtn = headerMenuInner.querySelector('.close-btn--header-menu');
const headerMobileMenuButton = document.querySelector('.header__mobile-menu');

headerMobileMenuButton.addEventListener('click', () => {
    addClass(headerMenu, 'active');
    addClass(mobileOverlay, 'active');
});

const hideHeaderMenu = () => {
    const target = event.target;
    checkClickWithCloseBtn(headerMenuInner, 'active', target, headerMenuCloseBtn, headerMenu);
    checkClickWithCloseBtn(headerMenuInner, 'active', target, headerMenuCloseBtn, mobileOverlay);
};

headerMenu.addEventListener('click', hideHeaderMenu);

/* Форма поиска */

const headerMobileSearch = document.querySelector('.header__mobile-search');
const headerMobileForm = headerMobileSearch.querySelector('form');
const headerMobileSearchButton = document.querySelector('.header__mobile-button');
const headerMobileSearchResult = headerMobileSearch.querySelector('.search-result');
const headerSearchHide = headerMobileSearch.querySelector('.header__mobile-search-hide');
const headerSearchReset = headerMobileSearch.querySelector('.header__mobile-search-reset');
const headerMobileInput = headerMobileSearch.querySelector('input');

headerMobileMenu.addEventListener('click', () => {
    const target = event.target;
    if (target === headerMobileSearchButton || headerMobileSearchButton.contains(target)) {
        addClass(headerMobileSearch, 'active');
    }
    if (target === headerSearchHide || headerSearchHide.contains(target)) {
        removeClass(headerMobileSearch, 'active');
        removeClass(headerMobileSearchResult, 'active');
        removeClass(headerSearchReset, 'active');
        headerMobileInput.value = '';
    }
});

headerMobileForm.addEventListener('reset', () => {
    removeClass(headerSearchReset, 'active');
    removeClass(headerMobileSearchResult, 'active');
})

headerMobileInput.addEventListener('input', () => {
    addClass(headerSearchReset, 'active');
    addClass(headerMobileSearchResult, 'active');

    if (!headerMobileInput.value.length) {
        removeClass(headerSearchReset, 'active');
        removeClass(headerMobileSearchResult, 'active');
    }
});

/* Кнопки добавления в корзину на мобильной версии */

const mobileCartButtons = document.querySelectorAll('.product-card__mobile-cart');

mobileCartButtons.forEach(button => {
    button.addEventListener('click', () => {
        const mobileFoterButtons = button.nextElementSibling;

        addClass(button, 'hide');
        addClass(mobileFoterButtons, 'active');
    })
});

/* Открытие скрытие меню фильтров в каталоге */
const filterBtn = document.querySelector('.rect-btn--product-header-mobile');
const aside = document.querySelector('.aside');
const asideInner = aside.querySelector('.aside__inner');

filterBtn.addEventListener('click', () => {
    addClass(aside, 'active');
    addClass(mobileOverlay, 'active');
});

aside.addEventListener('click', (event) => {
    const target = event.target;
    if (!asideInner.contains(target)) {
        removeClass(aside, 'active')
        removeClass(mobileOverlay, 'active')
    }
});