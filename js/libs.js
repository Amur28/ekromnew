"use strict";
import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';

/* Инициализация слайдеров */

const bannerSlider = new Swiper('.banner-slider', {
    loop: false,
    pagination: {
        el: '.banner__pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.banner__button-next',
        prevEl: '.banner__button-prev',
    },
    effect: 'cards',
    cardsEffect: {
        perSlideOffset: 5,
        perSlideRotate: 2,
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: true,
    },
    speed: 500,
    spaceBetween: 0,
});

const categoriesSlider = new Swiper('.categories-slider', {
    loop: true,
    slidesPerView: 8.5,
    spaceBetween: 20,
    autoplay: {
        delay: 3000,
        disableOnInteraction: true,
    },
    speed: 1000,
});

const bestsellerSlider = new Swiper('.bestseller-slider', {
    slidesPerView: 5,
    loop: true,
    speed: 300,
    simulateTouch: false,
    navigation: {
        nextEl: '.bestseller-button-next',
        prevEl: '.bestseller-button-prev',
    },
    spaceBetween: 15,
});

const showroomGallerySlider = new Swiper('.showroom-gallery-slider', {
    slidesPerView: 2.5,
    speed: 1000,
    autoplay: {
        delay: 1500,
    },
});

const showroomSlider = new Swiper('.showroom-slider', {
    slidesPerView: 1,
    speed: 500,
    pagination: {
        el: '.showroom-slider-pagination',
        clickable: true,
    },
});

const fastViewSliderThumbs = new Swiper('.slider-fastview-thumbs', {
    slidesPerView: 6,
    spaceBetween: 5,
});

const fastViewSlider = new Swiper('.slider-fastview', {
    slidesPerView: 1,
    loop: true,
    thumbs: {
        swiper: fastViewSliderThumbs,
    }
});

const fastViewColorSlider = new Swiper('.slider-fastview-color', {
    slidesPerView: 3,
    spaceBetween: 20,
    navigation: {
        nextEl: '.slider-fastview-color-button-next',
        prevEl: '.slider-fastview-color-button-prev',
    }
});

/* Инициализация бегущей строки брендов */

const brandsMarquee = new Splide('.brands__marquee', {
    type: 'loop',
    drag: 'free',
    focus: 'center',
    perPage: 6,
    arrows: false,
    pagination: false,
    gap: 20,
    autoScroll: {
        speed: 2,
        pauseOnHover: false,
    },
});

brandsMarquee.mount(window.splide.Extensions);

/* Галереи FANCYBOX */

Fancybox.bind('[data-fancybox="fastview-gallery"]', {

});

Fancybox.bind('[data-fancybox="video"]', {
    Carousel: {
        infinite: false,
    },
    autoFocus: false,
    Html: {
        videoTpl: `
            <video class="fancybox__html5video" playsinline loop controlsList="nodownload" poster="{{poster}}">
                <source src="{{src}}" type="{{format}}" />Sorry, your browser doesn't support embedded videos.
            </video>
        `,
    }
});

/* Видео */

const videosList = document.querySelector('.videos__list');

videosList.addEventListener('click', (event) => {
    const playButtons = videosList.querySelectorAll('.videos__item-button');
    playButtons.forEach(button => {
        if (event.target == button)
            button.previousElementSibling.click()
    });
});

/* Маски для инпутов */

document.addEventListener('DOMContentLoaded', () => {
    const questionPhoneInput = document.getElementById('questionPhoneInput');
    const questionPhoneMaskOptions = {
        mask: '+{7} (000) 000-00-00'
    };
    IMask(questionPhoneInput, questionPhoneMaskOptions)
})