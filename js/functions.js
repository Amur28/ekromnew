'use strict';

/* Функции для работы с классами */

export const containClass = (el, className) => el.classList.contains(`${className}`);
export const addClass = (el, className) => el.classList.add(`${className}`);
export const removeClass = (el, className) => el.classList.remove(`${className}`);
export const toggleClass = (el, className) => el.classList.toggle(`${className}`);

/* Проверка и скрытие элемента при клике вне его или по кнопке "Закрыть" */

export const checkClickWithCloseBtn = (targetEl, className, target, closeBtn, parentEl) => {
    const itsEl = target == targetEl || targetEl.contains(target);
    const itsCloseBtn = target == closeBtn || closeBtn.contains(target);

    if (!itsEl || itsCloseBtn) {
        removeClass(parentEl, className);
    }
};

/* Проверка и скрытие элемента при клике вне его */

export const checkClassAndClick = (targetEl, className, target, parentEl) => {
    const itsEl = target == targetEl || targetEl.contains(target);
    const elHasClass = containClass(parentEl, className);

    if (!itsEl && elHasClass) {
        removeClass(parentEl, className);
    }
};

/* Функция скрытия остальных элементов */

export const hideOtherItems = (elArr, className) => {
    elArr.forEach(faqItem => {
        removeClass(faqItem, className)
    });
};