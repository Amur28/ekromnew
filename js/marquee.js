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
        speed: 1,
        pauseOnHover: false,
    },
});