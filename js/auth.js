'use strict';
import { authSwiper } from "./sliders.js";
import { addClass, removeClass } from './functions.js';

document.addEventListener('click', function (event) {
    const headerTitle = document.querySelector('.header__mobile-auth-title');
    const headerLink = document.querySelector('.header__mobile-auth-return');
    if (event.target.closest('.auth-check-btn--login')) {
        goToLoginForm(headerTitle)
    }

    if (event.target.closest('.auth-check-btn--register')) {
        goToRegisterForm(headerTitle)
    }

    if (event.target.closest('.go-to-password-recovery')) {
        authSwiper.slideTo(4)
    }

    if (event.target === headerLink || headerLink.contains(event.target)) {
        changeHeaderLink(headerLink, event)
    }

    if (event.target.closest('.auth-form__show-password')) {
        showHidePassword(event)
    }

    const inputs = document.querySelectorAll('input')

});

function goToLoginForm(title) {
    authSwiper.slideTo(1, 300, false);
    title.textContent = 'Вход';
};

function goToRegisterForm(title) {
    authSwiper.slideTo(2, 300, false);
    title.textContent = 'Регистрация';
};

function changeHeaderLink(link, event) {
    let previousSlideIndex = authSwiper.clickedIndex;
    if (authSwiper.activeIndex === 0) {
        link.setAttribute('href', './index.html');
        return;
    }

    event.preventDefault();
    authSwiper.slideTo(previousSlideIndex);
};

function showHidePassword(event) {
    const btn = event.target;
    const passwordInput = event.target.previousElementSibling;
    let inputType = passwordInput.getAttribute('type');

    if (inputType === 'password') {
        passwordInput.setAttribute('type', 'text');
        addClass(btn, 'active');
        return;
    }

    passwordInput.setAttribute('type', 'password');
    removeClass(btn, 'active')
};