'use strict';
/* Инициализация бегущей строки брендов */

export const brandsMarquee = new Splide('.brands__marquee', {
    type: 'loop',
    drag: 'free',
    focus: 'center',
    perPage: 6,
    arrows: false,
    pagination: false,
    gap: 20,
    autoScroll: {
        speed: 0.5,
        pauseOnHover: false,
    },
    breakpoints: {
        1400: {
            perPage: 5,
        },
        1000: {
            perPage: 4,
        },
        768: {
            perPage: 3,
        },
        560: {
            perPage: 2,
            gap: 0,
        },
        400: {
            perPage: 1.5,
        }
    }
});