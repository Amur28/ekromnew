'use strict';
import { addClass, containClass, removeClass, hideOtherItems } from "./functions.js";

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

export const changeImgOnHover = (thumb, progressBar, progressBarItems, productImg, index) => {
    const thumbImg = thumb.querySelector('img');
    const thumbImgSrc = thumbImg.getAttribute('src');
    const currentProgressbarItem = progressBarItems[index];

    hideOtherItems(progressBarItems, 'current');
    addClass(currentProgressbarItem, 'current');

    productImg.setAttribute('src', thumbImgSrc);
}

/* Смена кнопки "Добавить в корзину" на счётчик */

export const changeCartButtonOnCounter = (event) => {
    const cartButton = event.target.closest('.product-card__buy-cart');

    if (!cartButton) return;

    const counter = cartButton.nextElementSibling;
    addClass(cartButton, 'hide');
    removeClass(counter, 'hide');
}