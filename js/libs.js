"use strict";

/* Галереи FANCYBOX */

export const fastviewFancy = Fancybox.bind('[data-fancybox="fastview-gallery"]', {});
export const productFancy = Fancybox.bind('[data-fancybox="product-gallery"]', {
    Carousel: {
        dragToClose: true,
    },
})
export const videosFancy = Fancybox.bind('[data-fancybox="video"]', {
    Carousel: {
        infinite: false,
        defaultType: 'html',
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