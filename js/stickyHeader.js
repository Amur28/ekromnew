'use strict';
import { addClass, containClass, removeClass } from './functions.js';
import {catalogPopup} from './popups.js'
const cartAside = document.querySelector('.cart-aside');
const stickyHeader = document.getElementById('stickyHeader');
let lastScrollPos = 0;

export const scrollPosition = () => window.scrollY || document.documentElement.scrollTop;

export const showOrHideContentOnScroll = () => {
    

    if (scrollPosition() > lastScrollPos && !containClass(stickyHeader, 'scroll')) {
        addClass(stickyHeader, 'scroll');
        if (cartAside) {
            addClass(cartAside, 'scroll')
        }
    } else if (scrollPosition() < lastScrollPos && containClass(stickyHeader, 'scroll')) {
        removeClass(stickyHeader, 'scroll');
        if (cartAside) {
            removeClass(cartAside, 'scroll');
        }
    }
    if (containClass(catalogPopup, 'active')) {
        addClass(stickyHeader, 'popup-active')
    } else {
        removeClass(stickyHeader, 'popup-active')
    }

    lastScrollPos = scrollPosition();
};