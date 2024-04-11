'use strict';

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
    grabCursor: true,
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
        300: {
            slidesPerView: 1.5,
        },
    },
});

export const complectsSlide = new Swiper('.complects-swiper', {
    enabled: true,
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
            },
            autoplay: {
                delay: 1500,
                disableOnInteraction: true,
            },
        },
        300: {
            enabled: true,
            slidesPerView: 1,
            navigation: {
                nextEl: '.complects-swiper-button-next',
                prevEl: '.complects-swiper-button-prev',
            },
            autoplay: {
                delay: 1500,
                disableOnInteraction: true,
            },
        }
    }
})

export const bestsellerSlider = new Swiper('.bestseller-slider', {
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
            loop: true,
        },
        1200: {
            slidesPerView: 4,
            loop: true,
        },
        992: {
            slidesPerView: 3.5,
            loop: true,
        },
        880: {
            slidesPerView: 3,
            loop: true,
        },
        760: {
            slidesPerView: 2.5,
            loop: true,
            grid: {
                fill: 'column',
            },
        },
        300: {
            slidesPerView: 2,
            loop: false,
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
    slidesPerView: 1,
    autoplay: {
        delay: 1500,
    },
    speed: 500,
    breakpoints: {
        992: {
            slidesPerView: 1.5,
        },

    },
});

export const brandsSlider = new Swiper('.swiper-brands', {
    spaceBetween: 10,
    slidesPerView: 1.05,
    breakpoints: {
        992: {
            enabled: false,
            slidesPerView: 3,
            spaceBetween: 40,
        },
        576: {
            slidesPerView: 2.1,
            spaceBetween: 20,
        },
        300: {
            slidesPerView: 1.05,
            centeredSlides: true,
            initialSlide: 1,
        }
    }
});

export const videosSlider = new Swiper('.swiper-videos', {
    enable: true,
    breakpoints: {
        1440: {
            spaceBetween: 40,
            slidesPerView: 3,
        },
        1320: {
            slidesPerView: 2.75,
        },
        1250: {
            slidesPerView: 2.5,
        },
        1170: {
            slidesPerView: 2.25,
        },
        1130: {
            slidesPerView: 2,
        },
        992: {
            enable: false,
            spaceBetween: 20,
            slidesPerView: 1.5,
        },
        880: {
            slidesPerView: 3,
        },
        815: {
            slidesPerView: 2.75,
        },
        740: {
            slidesPerView: 2.5,
        },
        670: {
            slidesPerView: 2.25,
        },
        590: {
            slidesPerView: 2,
        },
        420: {
            slidesPerView: 1.75,
        },
        300: {
            slidesPerView: 1.5,
            enable: true,
        }
    }
});

export const fastViewSliderThumbs = new Swiper('.slider-fastview-thumbs', {
    slidesPerView: 'auto',
    spaceBetween: 5,
});

export const fastViewSlider = new Swiper('.slider-fastview', {
    slidesPerView: 1,
    loop: true,
    thumbs: {
        swiper: fastViewSliderThumbs,
        autoScrollOffset: 2,
    }
});

export const productSliderThumbs = new Swiper('.slider-product-thumbs', {
    slidesPerView: 'auto',
    spaceBetween: 5,
});

export const productSlider = new Swiper('.slider-product', {
    slidesPerView: 1,
    loop: true,
    thumbs: {
        swiper: productSliderThumbs,
        autoScrollOffset: 2,
    }
});

export const productTabsSlider = new Swiper('.product-tabs__inner', {
    slidesPerView: 'auto',
    enabled: true,
    centeredSlides: true,
    centeredSlidesBounds: true,
    centerInsufficientSlides: true,
    slideToClickedSlide: true,
    breakpoints: {
        800: {
            enabled: false,
            slidesPerView: 'auto',
        },
        600: {
            slidesPerView: 2.5,
            spaceBetween: 8,
        },
        400: {
            slidesPerView: 2.2,
            spaceBetween: 8,
        },
        300: {
            slidesPerView: 1.5,
            spaceBetween: 8,
        },
    },
})

export const compareSwiper = new Swiper('.swiper-compare', {
    slidesPerView: 5,
    spaceBetween: 12,
    simulateTouch: false,
    navigation: {
        nextEl: '.swiper-compare-next-button',
        prevEl: '.swiper-compare-prev-button',
    },
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
        300: {
            slidesPerView: 2,
        },
    },
})

export const aboutPromoSwiper = new Swiper('.swiper-about-promo', {
    slidesPerView: 1,
    pagination: {
        el: '.swiper-about-promo-pagination',
        clickable: true,
    }
})

export const aboutOfficeSwiper = new Swiper('.swiper-office-city', {
    slidesPerView: 1,
    pagination: {
        el: '.swiper-pagination-office-city',
        clickable: true,
    }
})

export const aboutOfficeTyumenSwiper = new Swiper('.swiper-office-city-tyumen', {
    slidesPerView: 1,
    pagination: {
        el: '.swiper-pagination-office-city-tyumen',
        clickable: true,
    }
})

// export const authSwiper = new Swiper('.swiper-auth', {
//     slidesPerView: 1,
//     autoHeight: true,
//     effect: 'fade',
//     // allowTouchMove: false,
//     hashNavigation: {
//         watchState: true,
//     },
// })