'use strict';
import { containClass } from './functions.js';

export const stickyHeader = document.getElementById('stickyHeader');

export const checkScrollDown = (lastScrollPos, el, className, defaultOffset) => {
    return scrollPosition() > lastScrollPos && !containClass(el, className) && scrollPosition() > defaultOffset;
}

export const checkScrollUp = (lastScrollPos, el, className) => {
    return scrollPosition() < lastScrollPos && containClass(el, className);
}

export const scrollPosition = () => window.scrollY || document.documentElement.scrollTop