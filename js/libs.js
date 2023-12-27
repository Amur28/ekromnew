"use strict";
import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';

/* Инициализация слайдеров */

const bannerSlider = new Swiper('.banner-slider', {
    loop: false,
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

const categoriesSlider = new Swiper('.categories-slider', {
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

const showroomSlider = new Swiper('.showroom-slider', {
    pagination: {
        el: '.showroom-pagination',
        clickable: true,
    },
});

const showroomGallerySlider = new Swiper('.showroom-gallery-slider', {
    loop: true,
    slidesPerView: 1.5,
    autoplay: {
        delay: 2000,
    },
    speed: 500,
    navigation: {
        nextEl: '.showroom-gallery-button-next',
        prevEl: '.showroom-gallery-button-prev',
    },
})

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
        speed: 1,
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
    const registerPhoneInput = document.getElementById('registerPhone');
    const questionPhoneMaskOptions = {
        mask: '+{7} (000) 000-00-00'
    };
    IMask(questionPhoneInput, questionPhoneMaskOptions);
});