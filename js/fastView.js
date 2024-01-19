'use strict';
import { addClass, checkClassAndClick, checkClickWithCloseBtn, hideOtherItems } from "./functions.js";

const fastViewPopup = document.getElementById('fastView');
export const fastViewBtnList = document.querySelectorAll('.fast-view-btn');

/* Открыть окно быстрого просмотра */

export const showFastView = (arr, body) => {
    arr.forEach(btn => {
        btn.addEventListener('click', () => {
            addClass(fastViewPopup, 'active');
            addClass(body, 'active');
        })
    });
}

/* Закрыть окно быстрого просмотра */

export const hideFastView = (body, event) => {
    const target = event.target;
    const fastViewContainer = fastViewPopup.querySelector('.fast-view__container');
    const fastViewCloseBtn = fastViewPopup.querySelector('.close-btn--fastview');

    checkClickWithCloseBtn(fastViewContainer, 'active', target, fastViewCloseBtn, fastViewPopup);
    checkClickWithCloseBtn(fastViewContainer, 'active', target, fastViewCloseBtn, body);
    checkClassAndClick(fastViewContainer, 'active', target, body);
}

/* Имитация клика по картинке (для правильной работы галереи Fancybox) */

export const fakeClickOnImg = (event, parentEl, zoomImg) => {
    const target = event.target;
    const currentSlide = parentEl.querySelector('.swiper-slide-active');
    const currentSlideImg = currentSlide.firstElementChild;
    const isSlide = target == zoomImg || zoomImg.contains(target);
    if (isSlide) {
        currentSlideImg.click()
    }
}

/* Выбор цвета в окне быстрого просмотра */

export const moveColorFrame = (event, el) => {
    const colorLabel = event.target.closest('.product-box__colors-item');

    if (!colorLabel) return;

    const frame = el.querySelector('.frame');
    let posX = colorLabel.offsetLeft;
    let posY = colorLabel.offsetTop;

    frame.style.cssText = `transform: translate(${posX}px, ${posY}px)`;
}

/* Zoom картинки в окне быстрого просмотра */

export const initZoom = (globalX, globalY, parentEl, zoomImg) => {
    let zoom = 5;
    let currentSlide = parentEl.querySelector('.swiper-slide-active');
    let currentImg = currentSlide.firstElementChild;
    let currentImgSrc = currentImg.getAttribute('data-src');
    let imgWidth = currentImg.offsetWidth;
    let imgHeight = currentImg.offsetHeight;
    const zoomOverlay = zoomImg.nextElementSibling;
    const cursor = zoomImg.firstElementChild;
    cursor.style.width = `${zoomOverlay.offsetWidth / zoom}px`
    cursor.style.height = `${zoomOverlay.offsetHeight / zoom}px`
    let cursorWidth = cursor.offsetWidth;
    let cursorHeight = cursor.offsetHeight;
    let posX = globalX - (zoomImg.getBoundingClientRect().left + window.scrollX) - cursorWidth / 2;
    let posY = globalY - (zoomImg.getBoundingClientRect().top + window.scrollY) - cursorHeight / 2;
    if (posX < 0) {
        posX = 0
    }
    if (posY < 0) {
        posY = 0
    }
    if (posX > (imgWidth - cursorWidth)) {
        posX = imgWidth - cursorWidth
    }
    if (posY > (imgHeight - cursorHeight)) {
        posY = imgHeight - cursorHeight
    }
    cursor.style.display = 'block';
    cursor.style.left = posX + 'px';
    cursor.style.top = posY + 'px';

    posX *= zoom
    posY *= zoom
    zoomOverlay.style.display = 'block';
    zoomOverlay.style.backgroundImage = `url(${currentImgSrc})`;
    zoomOverlay.style.backgroundSize = `${imgWidth * zoom}px`;
    zoomOverlay.style.backgroundPosition = `-${posX}px -${posY}px`;
}

export const removeZoom = (zoomImg) => {
    const cursor = zoomImg.firstElementChild;
    const zoomOverlay = zoomImg.nextElementSibling;
    cursor.style.display = 'none';
    zoomOverlay.style.display = 'none';
}