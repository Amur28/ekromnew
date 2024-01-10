'use strict';
import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';

export const bannerSlider = new Swiper('.banner-slider', {
    loop: true,
    pagination: {
        el: '.banner-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.banner-button-next',
        prevEl: '.banner-button-prev',
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: true,
    },
    speed: 500,
    spaceBetween: 0,
});

export const categoriesSlider = new Swiper('.categories-slider', {
    loop: true,
    slidesPerView: 8.5,
    spaceBetween: 20,
    autoplay: {
        delay: 3000,
        disableOnInteraction: true,
    },
    speed: 500,
    navigation: {
        nextEl: '.categories-button-next',
        prevEl: '.categories-button-prev',
    }
});

export const bestsellerSlider = new Swiper('.bestseller-slider', {
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

export const showroomSlider = new Swiper('.showroom-slider', {
    pagination: {
        el: '.showroom-pagination',
        clickable: true,
    },
});

export const showroomGallerySlider = new Swiper('.showroom-gallery-slider', {
    loop: true,
    slidesPerView: 1.5,
    autoplay: {
        delay: 1500,
    },
    speed: 500,
    navigation: {
        nextEl: '.showroom-gallery-button-next',
        prevEl: '.showroom-gallery-button-prev',
    },
})

export const fastViewSliderThumbs = new Swiper('.slider-fastview-thumbs', {
    slidesPerView: 6,
    spaceBetween: 5,
});

export const fastViewSlider = new Swiper('.slider-fastview', {
    slidesPerView: 1,
    loop: true,
    thumbs: {
        swiper: fastViewSliderThumbs,
    }
});

export const fastViewColorSlider = new Swiper('.slider-fastview-color', {
    slidesPerView: 3,
    spaceBetween: 20,
    navigation: {
        nextEl: '.slider-fastview-color-button-next',
        prevEl: '.slider-fastview-color-button-prev',
    }
});