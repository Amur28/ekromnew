'use strict';
import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';

export const bannerSlider = new Swiper('.banner-slider', {
    loop: true,
    pagination: {
        el: '.banner-pagination',
        clickable: true,
        enabled: true,
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
    spaceBetween: 20,
    autoplay: {
        delay: 1500,
        disableOnInteraction: true,
    },
    speed: 200,
    navigation: {
        nextEl: '.categories-button-next',
        prevEl: '.categories-button-prev',
    },
    breakpoints: {
        1400: {
            slidesPerView: 8.5,
        },
        1200: {
            slidesPerView: 7.5,
        },
        992: {
            slidesPerView: 6.5,
        },
        650: {
            slidesPerView: 4.5,
        },
        576: {
            slidesPerView: 3.5,
        },
        400: {
            slidesPerView: 2.5,
        },
        320: {
            slidesPerView: 1.5,
        },
    }
});

export const complectsSlide = new Swiper('.complects-swiper', {
    spaceBetween: 15,
    breakpoints: {
        1400: {
            enabled: false,
            slidesPerView: 3,
        },
        992: {
            enabled: true,
            slidesPerView: 2,
            navigation: {
                nextEl: '.complects-swiper-button-next',
                prevEl: '.complects-swiper-button-prev',
            }
        }
    }
})

export const bestsellerSlider = new Swiper('.bestseller-slider', {
    loop: true,
    speed: 300,
    simulateTouch: false,
    navigation: {
        nextEl: '.bestseller-button-next',
        prevEl: '.bestseller-button-prev',
    },
    spaceBetween: 15,
    breakpoints: {
        1400: {
            slidesPerView: 5,
        },
        1200: {
            slidesPerView: 4,
        },
        992: {
            slidesPerView: 3.5,
        },
        880: {
            slidesPerView: 3,
        },
        760: {
            slidesPerView: 2.5,
        },
        320: {
            slidesPerView: 2,
            grid: {
                fill: 'row',
                rows: 2,
            },
        },
    }
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

export const productSliderThumbs = new Swiper('.slider-product-thumbs', {
    slidesPerView: 6,
    spaceBetween: 5,
});

export const productSlider = new Swiper('.slider-product', {
    slidesPerView: 1,
    loop: true,
    thumbs: {
        swiper: productSliderThumbs,
    }
});