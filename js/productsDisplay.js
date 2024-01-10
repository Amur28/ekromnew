'use strict';
import { containClass, removeClass, addClass, hideOtherItems } from "./functions.js";

/* Смена отображения карточек в каталоге */

export const productsViewBtnsParent = document.querySelector('.products-view-buttons');
const productsViewBtns = productsViewBtnsParent.querySelectorAll('.products-view-btn');

export const swapProductsDisplay = (event) => {
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
}