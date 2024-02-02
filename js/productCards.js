'use strict';
import { addClass, containClass, removeClass, hideOtherItems, toggleClass } from "./functions.js";

/* Выбор цвета у карточки */

export const productCards = document.querySelectorAll('.product-card');

export const changeColorOnCard = (event, card) => {
    const colorLabels = card.querySelectorAll('.product-card__color-label')
    const colorLabel = event.target.closest('.product-card__color-label');

    if (!colorLabel) return;

    if (containClass(colorLabel, 'checkdd')) {
        removeClass(colorLabel, 'checked');
        return
    }

    hideOtherItems(colorLabels, 'checked');

    addClass(colorLabel, 'checked')
}

/* Смена картинки при наведении */

export const changeImgOnHover = (thumb, progressBarItems, productImg, index) => {
    const thumbImg = thumb.querySelector('img');
    const thumbImgSrc = thumbImg.getAttribute('src');
    const currentProgressbarItem = progressBarItems[index];

    hideOtherItems(progressBarItems, 'current');
    addClass(currentProgressbarItem, 'current');

    productImg.setAttribute('src', thumbImgSrc);
}

export const returnFirstImg = (thumbs, progressBarItems, productImg) => {
    const thumbImg = thumbs[0].querySelector('img');
    const thumbImgSrc = thumbImg.getAttribute('src');
    const firstProgressbarItem = progressBarItems[0];

    hideOtherItems(progressBarItems, 'current');
    addClass(firstProgressbarItem, 'current');

    productImg.setAttribute('src', thumbImgSrc)
}

/* Смена кнопки "Добавить в корзину" на счётчик */

export function changeCartButtonOnCounter() {
    const cartButton = event.target.closest('.product-card__buy-cart');
    const roundCartBtn = this.querySelector('.round-btn--cart')

    if (!cartButton) return;
    const counter = cartButton.nextElementSibling;

    if (roundCartBtn) {
        addClass(roundCartBtn, 'active');
    }


    addClass(cartButton, 'hide');
    removeClass(counter, 'hide');
}

/* Кнопки избранного/сравнения/корзины и смена количества товаров  */

export const addProductsToCart = (card) => {
    card.addEventListener('click', toggleActiveOnRoundBtn);
    card.addEventListener('click', changeProductQuantity);
}

function toggleActiveOnRoundBtn(event) {
    const productCardRoundBtn = event.target.closest('.round-btn');

    if (!productCardRoundBtn) return;

    if (containClass(this, 'row')) {
        toggleClass(productCardRoundBtn, 'active')
        return
    }
    const productFooter = this.querySelector('.product-card__footer');
    const buyCartBtn = productFooter.querySelector('.product-card__buy-cart');
    const counterBtn = productFooter.querySelector('.product-card__counter');
    const productFooterButtons = productFooter.querySelector('.product-card__footer-buttons');

    if (containClass(productCardRoundBtn, 'round-btn--cart')) {
        addClass(productFooterButtons, 'active')
        addClass(buyCartBtn, 'hide')
        removeClass(counterBtn, 'hide')
        addClass(productCardRoundBtn, 'active')
        return
    }
    toggleClass(productCardRoundBtn, 'active')
}

/* Скорее всего временная функция, будет делаться через бэк */

function changeProductQuantity(event) {
    const minus = event.target.closest('.minus');
    const plus = event.target.closest('.plus');

    if (containClass(this, 'row')) {
        changeOnProductRow(this, minus, plus);
        return;
    }

    if (window.innerWidth <= 992) {
        changeOnMobileCard(this, minus, plus);
        return;
    }

    changeOnProductCard(this, minus, plus);

}

function changeOnProductRow(el, minus, plus) {
    const counter = el.querySelector('.product-card__counter');
    const cartBtn = el.querySelector('.product-card__buy-cart');
    const counterSpan = counter.querySelector('span');
    let counterQuantity = Number(counterSpan.textContent);
    if (minus) {
        if (counterSpan.textContent === '1') {
            addClass(counter, 'hide');
            removeClass(cartBtn, 'hide');
            return;
        }
        counterSpan.textContent = counterQuantity - 1;
    }
    if (plus) {
        counterQuantity += 1;
        counterSpan.textContent = counterQuantity;
    }
}

function changeOnProductCard(el, minus, plus) {
    const footer = el.querySelector('.product-card__footer');
    const roundCartBtn = el.querySelector('.round-btn--cart');
    const roundSpan = roundCartBtn.querySelector('span');

    if (minus) {
        changeOnMinusBtn(footer, el);
    }

    if (plus) {
        changeOnPlusBtn(footer, el)
    }
}

function changeOnMobileCard(el, minus, plus) {
    const footer = el.querySelector('.product-card__mobile-footer');

    if (minus) {
        changeOnMinusBtn(footer, el);
    }

    if (plus) {
        changeOnPlusBtn(footer, el)
    }
}

function changeOnMinusBtn(footer, el) {
    const footerButtons = footer.querySelector('.product-card__footer-buttons');
    const counter = footer.querySelector('.product-card__counter');
    const counterSpan = counter.querySelector('span')
    const cartBtn = footer.querySelector('.product-card__buy-cart');
    const mobileCartBtn = footer.querySelector('.product-card__mobile-cart')
    let counterQuantity = Number(counterSpan.textContent);
    const roundCartBtn = el.querySelector('.round-btn--cart')
    const activeArr = [roundCartBtn, footerButtons];
    const roundSpan = roundCartBtn.querySelector('span');

    if (counterSpan.textContent === '1') {
        if (window.innerWidth <= 992) {
            removeClass(mobileCartBtn, 'hide');
            removeClass(footerButtons, 'active');
            return
        }
        addClass(counter, 'hide');
        removeClass(cartBtn, 'hide');
        removeClass(roundCartBtn, 'active')
        
        return;
    }

    counterSpan.textContent = counterQuantity - 1;
    roundSpan.textContent = counterSpan.textContent;
}

function changeOnPlusBtn(footer, el) {
    const counter = footer.querySelector('.product-card__counter');
    const counterSpan = counter.querySelector('span');
    let counterQuantity = Number(counterSpan.textContent);
    const roundCartBtn = el.querySelector('.round-btn--cart')
    const roundSpan = roundCartBtn.querySelector('span')

    counterQuantity += 1;
    counterSpan.textContent = counterQuantity;
    roundSpan.textContent = counterSpan.textContent
}

