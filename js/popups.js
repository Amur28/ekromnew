'use strict';
import { toggleClass, checkClassAndClick, removeClass, addClass, checkClickWithCloseBtn, containClass, hideOtherItems } from './functions.js';

export const body = document.querySelector('body');

/* Попап всех категорий в шапке */

const allCategoriesBtns = document.querySelectorAll('.oval-btn--all-categories');
export const catalogPopup = document.getElementById('catalogPopup');

export const showHideAllCategories = () => {
    allCategoriesBtns.forEach(button => {
        button.addEventListener('click', (event) => {
            event.stopPropagation()
            toggleClass(catalogPopup, 'active')
            toggleClass(button, 'active')
        });
    });
}

/* Header DropDown */

export const headerTopInfoLink = document.querySelector('.header__top-link--info');
const headerTopInfoDropdown = headerTopInfoLink.nextElementSibling;

export const showHideHeaderDrodown = () => {
    event.stopPropagation();
    toggleClass(headerTopInfoDropdown, 'active');
}

/* Auth popup */

const authBtns = document.querySelectorAll('.auth-btn');
const authPopup = document.querySelectorAll('.auth-popup');

export const showHideAuthPopup = () => {
    authBtns.forEach(authBtn => {
        authBtn.addEventListener('click', (event) => {
            event.stopPropagation();
            const authPopupClosest = authBtn.nextElementSibling;

            toggleClass(authPopupClosest, 'active');
        });
    });
}

/* Форма авторизации */

export const authRegisterBtns = document.querySelectorAll('.rect-btn--register');
export const authLoginBtns = document.querySelectorAll('.rect-btn--login');
export const authRegister = document.getElementById('authRegister');
export const authLogin = document.getElementById('authLogin');

export const showAuthForm = (arr, el) => {
    arr.forEach(btn => {
        btn.addEventListener('click', () => {
            const parentPopup = btn.parentNode;
            removeClass(parentPopup, 'active');
            addClass(el, 'active');
            addClass(body, 'active')
        })
    })
}

export const hideAuthForm = (el) => {
    el.addEventListener('click', (event) => {
        const authInner = el.querySelector('.auth__inner');
        let target = event.target;
        checkClassAndClick(authInner, 'active', target, el);
        checkClassAndClick(authInner, 'active', target, body);
    });
}

/* Скрытие общих элементов */

export const hideGeneralElements = (event) => {
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

}

/* Выбор города */

export const headerCityButton = document.querySelectorAll('.header-city__button');

export const hideCitySelect = () => {
    citySelect.addEventListener('click', (event) => {
        let target = event.target;
        const citySelect = document.getElementById('citySelect');
        const citySelectCloseBtn = citySelect.querySelector('.close-btn--city-select');
        const citySelectInner = citySelect.querySelector('.city-select');

        checkClickWithCloseBtn(citySelectInner, 'active', target, citySelectCloseBtn, citySelect);
        checkClickWithCloseBtn(citySelectInner, 'active', target, citySelectCloseBtn, body);
        checkClassAndClick(citySelectInner, 'active', target, body);
    });
};

/* Форма "Задать свой вопрос" */

export const questionForm = document.getElementById('questionForm');

export const hideQuestionForm = (event) => {
    const target = event.target;
    const questionFormContainer = questionForm.querySelector('form.question-form');
    const closeQuestionFormBtn = questionForm.querySelector('.close-btn--question');

    checkClickWithCloseBtn(questionFormContainer, 'active', target, closeQuestionFormBtn, questionForm);
    checkClickWithCloseBtn(questionFormContainer, 'active', target, closeQuestionFormBtn, body);
    checkClassAndClick(questionFormContainer, 'active', target, body);
};