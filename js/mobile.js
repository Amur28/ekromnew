'use strict';
import { addClass, removeClass, containClass, toggleClass } from "./functions.js";
import { headerMenu } from "./script.js";
let xDown = null;
let yDown = null;

const handleTouchStart = (evt) => {                                         
    xDown = evt.touches[0].clientX;                                      
    yDown = evt.touches[0].clientY;                                   
};                                             

const handleTouchMove = (evt) => {
    if ( !xDown || ! yDown) {
        return;
    }
    let xUp = evt.touches[0].clientX;                                    
    let yUp = evt.touches[0].clientY;

    let xDiff = xDown - xUp;
    let yDiff = yDown - yUp;
    // немного поясню здесь. Тут берутся модули движения по оси абсцисс и ординат (почему модули? потому что если движение сделано влево или вниз, то его показатель будет отрицательным) и сравнивается, чего было больше: движения по абсциссам или ординатам. Нужно это для того, чтобы, если пользователь провел вправо, но немного наискосок вниз, сработал именно коллбэк для движения вправо, а ни как-то иначе.
    if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {/*most significant*/
        if ( xDiff > 0 ) {
            if (containClass(headerMenu, 'active')){
                removeClass(headerMenu, 'active')
            }
        } else if (xDiff < 0 && xDown <= 15) {
            addClass(headerMenu, 'active');
        }                       
    }
    /* reset values */
    xDown = null;
    yDown = null;                                             
};

document.addEventListener('touchstart', handleTouchStart, false);
document.addEventListener('touchmove', handleTouchMove, false);

const list = document.querySelectorAll(".mobile-bottom-menu__item");

function activelink() {
    list.forEach((item) => item.classList.remove("active"));
    console.log('bnjhhbkl')
    this.classList.add("active");
}
list.forEach((item) => item.addEventListener("click", activelink));

const headerMobileButton = document.querySelector('.header__mobile-button');
const headerMobileSearch = document.querySelector('.header__mobile-search');
const headerMobileForm = headerMobileSearch.querySelector('form')
const headerSearchHide = headerMobileSearch.querySelector('.header__mobile-search-hide');
const headerSearchReset = headerMobileSearch.querySelector('.header__mobile-search-reset');
const headerMobileInput = headerMobileSearch.querySelector('input');

headerMobileForm.addEventListener('reset', () => {
    removeClass(headerSearchReset, 'active')
})

headerMobileInput.addEventListener('input', () => {
    addClass(headerSearchReset, 'active');
    if (!headerMobileInput.value.length) {
        removeClass(headerSearchReset, 'active')
    }
    console.log(headerMobileInput.value)
})

headerMobileButton.addEventListener('click', () => {
    addClass(headerMobileSearch, 'active');
});

headerSearchHide.addEventListener('click', () => {
    removeClass(headerMobileSearch, 'active')
});