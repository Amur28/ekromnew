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
        const counter = this.querySelector('.product-card__counter');
        const cartBtn = this.querySelector('.product-card__buy-cart');
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
        return
    }

    const footer = this.querySelector('.product-card__footer');
    const counter = footer.querySelector('.product-card__counter');
    const productFooterButtons = footer.querySelector('.product-card__footer-buttons');
    const counterSpan = counter.querySelector('span');
    let counterQuantity = Number(counterSpan.textContent);
    const roundCartBtn = this.querySelector('.round-btn--cart');
    const cartBtn = this.querySelector('.product-card__buy-cart');
    const roundSpan = roundCartBtn.querySelector('span');

    if (minus) {
        if (counterSpan.textContent === '1') {
            addClass(counter, 'hide');
            removeClass(cartBtn, 'hide');
            removeClass(roundCartBtn, 'active');
            removeClass(productFooterButtons, 'active')
            return;
        }
        counterSpan.textContent = counterQuantity - 1;
        roundSpan.textContent = counterSpan.textContent
    }
    if (plus) {
        counterQuantity += 1;
        counterSpan.textContent = counterQuantity;
        roundSpan.textContent = counterSpan.textContent
    }
}