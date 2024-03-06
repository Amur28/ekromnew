'use strict';
import './sliders.js';
import { addClass, removeClass, containClass, hideOtherItems, toggleClass, checkClassAndClick } from './functions.js';
const body = document.body;
const clientWidth = window.innerWidth;

/* Липкий HEADER */

let lastScrollPos = 0;

function scrollPosition() {
    return window.scrollY || document.documentElement.scrollTop;
};

function addScroll(arr) {
    arr.forEach(el => {
        if (el) {
            addClass(el, 'scroll');
        }
    });
};

function removeScroll(arr) {
    arr.forEach(el => {
        if (el) {
            removeClass(el, 'scroll');
        }
    });
};

const catalogPopup = document.querySelector('.catalog-popup');

function showOrHideContentOnScroll() {
    const defaultOffset = 500;
    const stickyHeader = document.querySelector('.header');
    const cartAside = document.querySelector('.cart-aside');

    const elementsArr = [stickyHeader, cartAside]

    if (scrollPosition() > lastScrollPos && !containClass(stickyHeader, 'scroll') && scrollPosition() > defaultOffset) {
        addScroll(elementsArr);
        if (headerTopInfoLink) {
            const headerDropdown = headerTopInfoLink.nextElementSibling;
            removeClass(headerDropdown, 'active')
        }
    } else if (scrollPosition() < lastScrollPos && containClass(stickyHeader, 'scroll') && scrollPosition() < defaultOffset) {
        removeScroll(elementsArr);
    }
    if (!catalogPopup) return;
    if (containClass(catalogPopup, 'active')) {
        addClass(stickyHeader, 'popup-active')
    } else {
        removeClass(stickyHeader, 'popup-active')
    }

    lastScrollPos = scrollPosition();
};

window.addEventListener('scroll', showOrHideContentOnScroll)

/* Инициализация бегущей строки брендов */

function initBrandsMarquee() {
    const brandsMarquee = document.querySelector('.brands__marquee');

    if (brandsMarquee) {
        const marquee = new Splide(brandsMarquee, {
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
        marquee.mount(window.splide.Extensions)
    }
}

initBrandsMarquee();

/* Скрытие общих элементов */

function closeModalOnClick() {
    const modalArr = document.querySelectorAll('[data-modal]');

    modalArr.forEach(modal => {
        modal.addEventListener('click', checkModalClick)
    });
};

function checkModalClick(event) {
    const target = event.target;
    const modalContainer = this.querySelector('[data-modal-container]');
    const closeBtn = this.querySelector('.close-btn');
    const isModal = target == modalContainer || modalContainer.contains(target);

    if (closeBtn) {
        const isCloseBtn = target == closeBtn || closeBtn.contains(target);
        if (isCloseBtn) {
            removeClass(this, 'active');
            removeClass(body, 'active');
            removeClass(mobileOverlay, 'active');
        }
    }
    if (!isModal) {
        removeClass(this, 'active');
        removeClass(body, 'active');
        removeClass(mobileOverlay, 'active');
    }

};

document.addEventListener('click', closeModalOnClick);

/* Показ/скрытие попапа со всеми категориями */

const catalogPopupBtns = document.querySelectorAll('.oval-btn--all-categories');

function toggleCatalogPopup() {
    const catalogPopup = document.querySelector('.catalog-popup');
    toggleClass(catalogPopup, 'active');
};

catalogPopupBtns.forEach(btn => {
    btn.addEventListener('click', toggleCatalogPopup);
});

/* Header dropdown */

const headerTopInfoLink = document.querySelector('.header__top-link--info');

if (headerTopInfoLink) {
    const headerDropdown = headerTopInfoLink.nextElementSibling;

    function toggleHeaderDropdown(event) {
        event.stopPropagation();
        toggleClass(headerDropdown, 'active');
    };

    function closeHeaderDropdown(event) {
        const target = event.target;
        const itsHeaderDropdown = target == headerDropdown || headerDropdown.contains(target);
        if (!itsHeaderDropdown && containClass(headerDropdown, 'active')) {
            removeClass(headerDropdown, 'active')
        }
    };

    headerTopInfoLink.addEventListener('click', toggleHeaderDropdown);
    document.addEventListener('click', closeHeaderDropdown);
}

/* Auth popup */

const authBtns = document.querySelectorAll('.auth-btn');

authBtns.forEach(btn => {
    btn.addEventListener('click', toggleAuthPopup)
})

function toggleAuthPopup(event) {
    event.stopPropagation()
    const authPopup = this.nextElementSibling;
    toggleClass(authPopup, 'active');
}

document.addEventListener('click', closeAuthPopup);

function closeAuthPopup(event) {
    const target = event.target;
    const authPopups = document.querySelectorAll('.auth-popup');
    authPopups.forEach(item => {
        const isPopup = target == item || item.contains(target);
        if (!isPopup) {
            removeClass(item, 'active')
        }
    })
};

/* Форма авторизации */

const authRegisterBtns = document.querySelectorAll('.rect-btn--register');
const authLoginBtns = document.querySelectorAll('.rect-btn--login');
const authRegister = document.getElementById('authRegister');
const authLogin = document.getElementById('authLogin');

if (authLogin) {
    showAuthForm(authLoginBtns, authLogin);
    hideAuthForm(authLogin);
}

if (authRegister) {
    showAuthForm(authRegisterBtns, authRegister);
    hideAuthForm(authRegister);
}

function showAuthForm(arr, el) {
    arr.forEach(btn => {
        btn.addEventListener('click', () => {
            const parentPopup = btn.parentNode;
            removeClass(parentPopup, 'active');
            addClass(el, 'active');
            addClass(body, 'active')
        })
    })
}

function hideAuthForm(el) {
    el.addEventListener('click', (event) => {
        const authInner = el.querySelector('.auth__inner');
        let target = event.target;
        checkClassAndClick(authInner, 'active', target, el);
        checkClassAndClick(authInner, 'active', target, body);
    });
}

/* FAQ section */

const faqInner = document.querySelector('.faq__inner');
const faqItems = document.querySelectorAll('.faq__item');

function showFaqItem(event) {
    const currentFaqItem = event.target.closest('.faq__item');

    if (!currentFaqItem) return;

    if (containClass(currentFaqItem, 'active')) {
        removeClass(currentFaqItem, 'active');
        return;
    };

    hideOtherItems(faqItems, 'active');

    addClass(currentFaqItem, 'active');
}

function checkFaqInner(event) {
    const target = event.target;
    const itsFaqInner = target == faqInner || faqInner.contains(target);
    if (!itsFaqInner) hideOtherItems(faqItems, 'active');
}

if (faqInner) {
    faqInner.addEventListener('click', showFaqItem);
    document.addEventListener('click', checkFaqInner);
}

/* Форма "Задать свой вопрос" */

const questionForm = document.getElementById('questionForm');
const faqBtn = document.querySelectorAll('.feedback');

faqBtn.forEach(btn => {
    btn.addEventListener('click', showQuestionForm)
});

function showQuestionForm() {
    addClass(questionForm, 'active');
    addClass(body, 'active');
}

/* Окно быстрого просмотра */

const fastViewPopup = document.getElementById('fastView');
const fastViewBtnList = document.querySelectorAll('.fast-view-btn');

function showFastView() {
    addClass(fastViewPopup, 'active');
    addClass(body, 'active');
}

fastViewBtnList.forEach(btn => {
    btn.addEventListener('click', showFastView)
});

if (fastViewPopup) {
    fastViewPopup.addEventListener('click', fakeClickOnImg);

    const productBoxColorsList = fastViewPopup.querySelector('.product-box__colors-list');
    productBoxColorsList.addEventListener('click', moveColorFrame);

    const fastviewZoomImg = fastViewPopup.querySelector('.zoom-img');

    fastviewZoomImg.addEventListener('mouseleave', removeZoom)
    fastviewZoomImg.addEventListener('mousemove', initZoom)
}

function fakeClickOnImg(event) {
    const target = event.target;
    const currentSlide = this.querySelector('.swiper-slide-active');
    const imgBox = this.querySelector('.zoom-img')
    const currentSlideImg = currentSlide.firstElementChild;
    const isSlide = target == imgBox || imgBox.contains(target);
    if (isSlide) {
        currentSlideImg.click()
    }
}

/* Выбор цвета в окне быстрого просмотра */

function moveColorFrame(event) {
    const colorLabel = event.target.closest('.product-box__colors-item');

    if (!colorLabel) return;

    const frame = this.querySelector('.frame');
    let posX = colorLabel.offsetLeft;
    let posY = colorLabel.offsetTop;

    frame.style.cssText = `transform: translate(${posX}px, ${posY}px)`
}

/*Выбор города*/

const headerCityButton = document.querySelectorAll('.header-city__button');

function showCitySelect() {
    const citySelect = document.querySelector('#citySelect')
    addClass(citySelect, 'active');
    addClass(body, 'active')
}

headerCityButton.forEach(button => {
    button.addEventListener('click', showCitySelect)
});

/* ZOOM */

let globalX = 0;
let globalY = 0;

document.addEventListener('mousemove', (event) => {
    globalX = event.pageX;
    globalY = event.pageY;
});

function initZoom() {
    let zoomLevel = 5;
    const currentSlide = this.parentNode.nextElementSibling.querySelector('.swiper-slide-active');
    const currentImg = currentSlide.firstElementChild;
    const currentImgSrc = currentImg.getAttribute('src');
    let imgWidth = currentImg.offsetWidth;
    let imgHeight = currentImg.offsetHeight;
    const zoomOverlay = this.nextElementSibling;
    const zoomCursor = this.firstElementChild;
    zoomCursor.style.width = `${zoomOverlay.offsetWidth / zoomLevel}px`
    zoomCursor.style.height = `${zoomOverlay.offsetHeight / zoomLevel}px`
    let zoomCursorWidth = zoomCursor.offsetWidth;
    let zoomCursorHeight = zoomCursor.offsetHeight;
    let posX = globalX - (this.getBoundingClientRect().left + window.scrollX) - zoomCursorWidth / 2;
    let posY = globalY - (this.getBoundingClientRect().top + window.scrollY) - zoomCursorHeight / 2;
    if (posX < 0) {
        posX = 0
    }
    if (posY < 0) {
        posY = 0
    }
    if (posX > (imgWidth - zoomCursorWidth)) {
        posX = imgWidth - zoomCursorWidth
    }
    if (posY > (imgHeight - zoomCursorHeight)) {
        posY = imgHeight - zoomCursorHeight
    }
    zoomCursor.style.display = 'block';
    zoomCursor.style.left = posX + 'px';
    zoomCursor.style.top = posY + 'px';

    posX *= zoomLevel
    posY *= zoomLevel
    zoomOverlay.style.display = 'block';
    zoomOverlay.style.backgroundImage = `url(${currentImgSrc})`;
    zoomOverlay.style.backgroundSize = `${imgWidth * zoomLevel}px`;
    zoomOverlay.style.backgroundPosition = `-${posX}px -${posY}px`;
}

function removeZoom() {
    const zoomCursor = this.firstElementChild;
    const zoomOverlay = this.nextElementSibling;
    zoomCursor.style.display = 'none';
    zoomOverlay.style.display = 'none';
}

/* События для карточек товаров */

const toastObj = {
    compareText: 'Товар добавлен в список сравнения!',
    compareHref: './compare.html',
    compareLinkText: 'Перейти в сравнение',
    cartText: 'Товар добавлен в корзину!',
    cartHref: './cart.html',
    cartLinkText: 'Перейти в корзину',
    favLinkText: 'Перейти в избранное',
    favText: 'Товар добавлен в список избранного!',
    favHref: './favorites.html',
    authText: 'Вы успешно авторизовались в системе!',
    pickText: 'Подберите товар с умной системой!',
}

const productCards = document.querySelectorAll('.product-card');
let xDown = null;
let yDown = null;

productCards.forEach(card => {

    const progressBarItems = card.querySelectorAll('.progressbar-item');
    const thumbsContainer = card.querySelector('.thumbs')
    const thumbs = card.querySelectorAll('.thumb');
    const productImg = card.querySelector('.product-card__img');

    /* Смена кнопки "Добавить в корзину" на счётчик */

    card.addEventListener('click', changeCartButtonOnCounter);

    function changeCartButtonOnCounter(event) {
        const cartButton = event.target.closest('.product-card__buy-cart');
        const roundCartBtn = this.querySelector('.round-btn--cart')

        if (!cartButton) return;
        const counter = cartButton.nextElementSibling;

        if (roundCartBtn) {
            addClass(roundCartBtn, 'active');
        }

        addClass(cartButton, 'hide');
        removeClass(counter, 'hide');
    }

    /* Всплывающие уведомления */

    card.addEventListener('click', showToast);

    function createLink(hrefText, linkText) {
        const link = document.createElement('a');
        link.setAttribute('href', hrefText);
        link.textContent = linkText;
        return link
    }

    function addLinkToToast(hrefText, linkText) {
        const container = document.querySelectorAll('.toast_message');
        container.forEach(item => {
            const toastBody = item.querySelector('.toast__body')
            if (toastBody.querySelector('a') == null) {
                toastBody.append(createLink(hrefText, linkText))
            }

        })
    }

    function createToast(toastText, hrefText, linkText) {
        new Toast({
            title: false,
            text: toastText,
            theme: 'default',
            autohide: true,
            interval: 3500,
        })
        addLinkToToast(hrefText, linkText)
    }

    function showToast(event) {
        const productCardRoundBtn = event.target.closest('.round-btn');
        if (!productCardRoundBtn) return;

        const classes = Array.from(productCardRoundBtn.classList)
        if (!containClass(productCardRoundBtn, 'active')) {
            switch (classes[1]) {
                case 'round-btn--fav':
                    createToast(toastObj.favText, toastObj.favHref, toastObj.favLinkText)
                    break;
                case 'round-btn--compare':
                    createToast(toastObj.compareText, toastObj.compareHref, toastObj.compareLinkText)
                    break;
                case 'round-btn--cart':
                    createToast(toastObj.cartText, toastObj.cartHref, toastObj.cartLinkText)
                    break;
                default:
                    console.log('gogosd')
            };
        }
    }

    /* Кнопки избранного/сравнения/корзины */

    card.addEventListener('click', toggleActiveOnRoundBtn);

    function toggleActiveOnRoundBtn(event) {
        const productCardRoundBtn = event.target.closest('.round-btn');

        if (!productCardRoundBtn) return;

        if (containClass(this, 'row')) {
            toggleClass(productCardRoundBtn, 'active')
            return
        }
        const productFooter = this.querySelector('.product-card__footer');
        const buyCartBtn = productFooter.querySelector('.product-card__buy-cart');
        const counterBtn = productFooter.querySelector('.product-card__counter');
        const productFooterButtons = productFooter.querySelector('.product-card__footer-buttons');

        if (containClass(productCardRoundBtn, 'round-btn--cart')) {
            addClass(productFooterButtons, 'active')
            addClass(buyCartBtn, 'hide')
            removeClass(counterBtn, 'hide')
            addClass(productCardRoundBtn, 'active')
            return;
        }
        toggleClass(productCardRoundBtn, 'active')
    }

    /* Cмена количества товаров */

    card.addEventListener('click', changeProductQuantity);

    function changeProductQuantity(event) {
        const minus = event.target.closest('.minus');
        const plus = event.target.closest('.plus');

        if (containClass(this, 'row')) {
            changeOnProductRow(this, minus, plus);
            return;
        }

        if (window.innerWidth <= 992) {
            changeOnMobileCard(this, minus, plus);
            return;
        }

        changeOnProductCard(this, minus, plus);

    }

    function changeOnProductRow(el, minus, plus) {
        const counter = el.querySelector('.product-card__counter');
        const cartBtn = el.querySelector('.product-card__buy-cart');
        const counterSpan = counter.querySelector('span');
        let counterQuantity = Number(counterSpan.textContent);
        if (minus) {
            if (counterSpan.textContent === '1') {
                addClass(counter, 'hide');
                removeClass(cartBtn, 'hide');
                return;
            }
            counterSpan.textContent = counterQuantity - 1;
        }
        if (plus) {
            counterQuantity += 1;
            counterSpan.textContent = counterQuantity;
        }
    }

    function changeOnProductCard(el, minus, plus) {
        const footer = el.querySelector('.product-card__footer');

        if (minus) {
            changeOnMinusBtn(footer, el);
        }

        if (plus) {
            changeOnPlusBtn(footer, el)
        }
    }

    function changeOnMobileCard(el, minus, plus) {
        const footer = el.querySelector('.product-card__mobile-footer');

        if (minus) {
            changeOnMinusBtn(footer, el);
        }

        if (plus) {
            changeOnPlusBtn(footer, el)
        }
    }

    function changeOnMinusBtn(footer, el) {
        const footerButtons = footer.querySelector('.product-card__footer-buttons');
        const counter = footer.querySelector('.product-card__counter');
        const counterSpan = counter.querySelector('span')
        const cartBtn = footer.querySelector('.product-card__buy-cart');
        const mobileCartBtn = footer.querySelector('.product-card__mobile-cart')
        let counterQuantity = Number(counterSpan.textContent);
        const roundCartBtn = el.querySelector('.round-btn--cart');
        const roundSpan = roundCartBtn.querySelector('span');

        if (counterSpan.textContent === '1') {
            if (window.innerWidth <= 992) {
                removeClass(mobileCartBtn, 'hide');
                removeClass(footerButtons, 'active');
                return
            }
            addClass(counter, 'hide');
            removeClass(cartBtn, 'hide');
            removeClass(roundCartBtn, 'active');
            removeClass(footerButtons, 'active');

            return;
        }

        counterSpan.textContent = counterQuantity - 1;
        roundSpan.textContent = counterSpan.textContent;
    }

    function changeOnPlusBtn(footer, el) {
        const counter = footer.querySelector('.product-card__counter');
        const counterSpan = counter.querySelector('span');
        let counterQuantity = Number(counterSpan.textContent);
        const roundCartBtn = el.querySelector('.round-btn--cart')
        const roundSpan = roundCartBtn.querySelector('span')

        counterQuantity += 1;
        counterSpan.textContent = counterQuantity;
        roundSpan.textContent = counterSpan.textContent
    }

    /* Смена цвета по клику */

    card.addEventListener('change', changeColorOnCard);

    function changeColorOnCard(event) {
        const colorLabelList = this.querySelectorAll('.product-card__color-label')
        const colorLabel = event.target.closest('.product-card__color-label');

        if (containClass(colorLabel, 'checked')) {
            removeClass(colorLabel, 'checked');
            return;
        }

        hideOtherItems(colorLabelList, 'checked');
        addClass(colorLabel, 'checked')
    }

    /* Рассчет ширины элементов прогрессбара и скрытых контейнеров смены картинок */

    progressBarItems.forEach(setItemWidth)
    thumbs.forEach(setItemWidth)

    function setItemWidth(item, index, arr) {
        const length = arr.length;
        item.style.width = 100 / length + '%'
    }

    /* Смена картинки при наведении */

    function initChangeImgOnHover(item, index) {
        if (clientWidth <= 992) return;

        item.addEventListener('mouseover', function () {

            const thumbImg = this.querySelector('img');
            const thumbImgSrc = thumbImg.getAttribute('src');
            const currentProgressbarItem = progressBarItems[index];

            hideOtherItems(progressBarItems, 'current');
            addClass(currentProgressbarItem, 'current');
            productImg.setAttribute('src', thumbImgSrc)
        });
    }

    thumbs.forEach(initChangeImgOnHover);

    /* Смена на первую картинку, если курсор покинул контейнер картинки */

    thumbsContainer.addEventListener('mouseleave', () => {
        if (clientWidth <= 992) return;

        returnFirstImg(thumbs, progressBarItems, productImg);
    });

    function returnFirstImg() {
        const firstThumbImg = thumbs[0].querySelector('img');
        const firstThumbImgSrc = firstThumbImg.getAttribute('src');
        const firstProgressbarItem = progressBarItems[0];

        hideOtherItems(progressBarItems, 'current');
        addClass(firstProgressbarItem, 'current');

        productImg.setAttribute('src', firstThumbImgSrc)
    }

    /* Смена картинки при свайпе */

    const productImgBox = card.querySelector('.product-card__img-box');

    productImgBox.addEventListener('touchstart', cardTouchStart);

    productImgBox.addEventListener('touchmove', cardTouchMove);

    function cardTouchStart(event) {
        xDown = event.touches[0].clientX;
        yDown = event.touches[0].clientY;
    }

    function cardTouchMove(event) {
        if (containClass(card.parentNode, 'swiper-slide')) return;

        if (!xDown || !yDown) {
            return;
        }
        let xUp = event.touches[0].clientX;
        let yUp = event.touches[0].clientY;

        let xDiff = xDown - xUp;
        let yDiff = yDown - yUp;

        const progressBarContainer = productImgBox.querySelector('.thumbs-progressbar');
        const currentItem = progressBarContainer.querySelector('.current');
        const nextItem = currentItem.nextElementSibling;
        const prevItem = currentItem.previousElementSibling;
        const progressBarArr = Array.from(progressBarItems);
        let currentIndex = progressBarArr.indexOf(currentItem);

        if (Math.abs(xDiff) > Math.abs(yDiff)) {
            if (xDiff > 0) {
                if (nextItem) {
                    hideOtherItems(progressBarItems, 'current');
                    addClass(nextItem, 'current');
                    currentIndex += 1;
                    const thumb = thumbs[currentIndex];
                    const thumbImg = thumb.querySelector('img');
                    const thumbImgSrc = thumbImg.getAttribute('src');
                    productImg.setAttribute('src', thumbImgSrc)
                }
            } else if (xDiff < 0) {
                if (prevItem) {
                    hideOtherItems(progressBarItems, 'current');
                    addClass(prevItem, 'current')
                    currentIndex -= 1;
                    const thumb = thumbs[currentIndex];
                    const thumbImg = thumb.querySelector('img');
                    const thumbImgSrc = thumbImg.getAttribute('src');
                    productImg.setAttribute('src', thumbImgSrc)
                }
            }
        }
        /* reset values */
        xDown = null;
        yDown = null;
    }

});

/* Видео */

const videosButtons = document.querySelectorAll('.videos__item-button');

videosButtons.forEach(button => {
    button.addEventListener('click', fakeClickOnVideoButton);
});

function fakeClickOnVideoButton(event) {
    if (event.target == this) {
        this.previousElementSibling.click()
    }
}

/* Форма поиска в шапке */

const headerSearchForm = document.querySelector('.header__search');
if (headerSearchForm) {
    const headerSearchInput = headerSearchForm.querySelector('.header__search-input');

    headerSearchInput.addEventListener('input', hideShowHeaderSearchDropdown);
    document.addEventListener('click', hideHeaderSearchResult);
}

function hideShowHeaderSearchDropdown() {
    const headerSearchResult = headerSearchForm.querySelector('.search-result');

    addClass(headerSearchResult, 'active');

    if (!this.value.length) {
        removeClass(headerSearchResult, 'active')
    }
}

function hideHeaderSearchResult(event) {
    const target = event.target;
    const headerSearchResult = headerSearchForm.querySelector('.search-result');
    const isResult = target == headerSearchResult || headerSearchResult.contains(target);
    if (!isResult) {
        removeClass(headerSearchResult, 'active');
    }
}

/* Смена контента в попапе каталога */

const catalogPopupMenuItems = document.querySelectorAll('.catalog-popup__menu-item');
const catalogPopupContent = document.querySelectorAll('.catalog-popup__categories-menu');

catalogPopupMenuItems.forEach(changeContentInCatalogPopup)

function changeContentInCatalogPopup(item, index) {
    item.addEventListener('mouseover', function () {
        const currentContent = catalogPopupContent[index];
        hideOtherItems(catalogPopupContent, 'active');
        addClass(currentContent, 'active')
    });
};

/* Скрытие/показ фильтров */

const filterItems = document.querySelector('.filter-items');

if (filterItems) {
    filterItems.addEventListener('click', showHideFilter);

    function showHideFilter(event) {
        const target = event.target;
        const filterItem = target.closest('.filter-item');

        if (!filterItem) return;
        const filterItemHeader = filterItem.querySelector('.filter-item__header');
        const filterItemFooter = filterItem.querySelector('.filter-item__footer');

        if (target == filterItemHeader) {
            toggleClass(filterItem, 'hidden');
        } else if (target == filterItemFooter) {
            if (!containClass(filterItem, 'expand')) {
                filterItemFooter.textContent = 'Скрыть';
                addClass(filterItem, 'expand');
            } else {
                filterItemFooter.textContent = 'Больше';
                removeClass(filterItem, 'expand');
            }
        } else {
            return;
        }
    };
};

/* Ползунок в каталоге */

const rangeSliders = document.querySelectorAll('.filter-item__slider');

function initRangeSliders(filterSliders) {
    filterSliders.forEach(rangeSlider => {
        noUiSlider.create(rangeSlider, {
            start: [0, 1000000],
            connect: true,
            step: 100,
            range: {
                'min': 0,
                'max': 1000000,
            },
        });
        const inputs = rangeSlider.nextElementSibling;
        const inputMin = inputs.firstElementChild;
        const inputMax = inputs.lastElementChild;
        const inputsRange = [inputMin, inputMax];

        rangeSlider.noUiSlider.on('update', function (values, handle) {
            inputsRange[handle].value = Math.round(values[handle]);
        });

        function setRangeSlider(i, value) {
            let arr = [null, null];
            arr[i] = value;
            rangeSlider.noUiSlider.set(arr)
        }

        inputsRange.forEach((input, index) => {
            input.addEventListener('change', (event) => {
                setRangeSlider(index, event.currentTarget.value)
            });
        })
    });
}

initRangeSliders(rangeSliders);

/* Смена отображения карточек в каталоге */

const categoryDisplayTabs = document.querySelectorAll('.swap-display-button');
const categoryContents = document.querySelectorAll('.products__main');

categoryDisplayTabs.forEach((tab, index) => {
    tab.addEventListener('click', function () {
        swapContentOnTabs(categoryDisplayTabs, tab, categoryContents, index)
    })
})

/* Кастомный Select */

import { ItcCustomSelect } from './itc-custom-select.js';

let selectItem = document.querySelectorAll('.itc-select');

if (selectItem.length) {
    selectItem.forEach(item => {
        const selectId = item.getAttribute('id');
        new ItcCustomSelect(`#${selectId}`);
    })
}

/* Галереи FANCYBOX */

document.addEventListener('DOMContentLoaded', checkFancyBox);

function checkFancyBox() {
    const fastviewFancyElements = document.querySelectorAll('[data-fancybox="fastview-gallery"]');
    const productFancyElements = document.querySelectorAll('[data-fancybox="product-gallery"]');
    const videosFancyElements = document.querySelectorAll('[data-fancybox="video"]');

    if (fastviewFancyElements.length) {
        Fancybox.bind('[data-fancybox="fastview-gallery"]', {});
    }
    if (productFancyElements.length) {
        Fancybox.bind('[data-fancybox="product-gallery"]', {});
    }
    if (videosFancyElements.length) {
        Fancybox.bind('[data-fancybox="video"]', {
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
    }
};

/* Слайдер страницы авторизации */

import { authSwiper } from './sliders.js';

document.addEventListener('click', function (event) {
    if (event.target.closest('.auth-check-btn--login')) {
        goToLoginForm()
    }

    if (event.target.closest('.auth-check-btn--register')) {
        goToRegisterForm()
    }

    if (event.target.closest('.go-to-password-recovery')) {
        authSwiper.slideTo(4)
    }

    if (event.target.closest('.auth-form__show-password')) {
        showHidePassword(event)
    }
});

authSwiper.on('slideChange', changeHeadertitle);

function changeHeadertitle() {
    let title = document.querySelector('.header__mobile-title');

    if (this.activeIndex === 0 || this.activeIndex === 1) {
        title.textContent = 'Вход'
    }
    if (this.activeIndex === 2 || this.activeIndex === 3) {
        title.textContent = 'Регистрация'
    }
    if (this.activeIndex === 4 || this.activeIndex === 5) {
        title.textContent = 'Восстановление пароля'
    }
}

function goToLoginForm() {
    authSwiper.slideTo(1, 300, false);
};

function goToRegisterForm() {
    authSwiper.slideTo(2, 300, false);
};

function showHidePassword(event) {
    const btn = event.target;
    const passwordInput = event.target.previousElementSibling;
    let inputType = passwordInput.getAttribute('type');

    if (inputType === 'password') {
        passwordInput.setAttribute('type', 'text');
        addClass(btn, 'active');
        return;
    }

    passwordInput.setAttribute('type', 'password');
    removeClass(btn, 'active')
};

/* Функция для табов */

const swapContentOnTabs = (tabsArr, tab, contentArr, index) => {
    hideOtherItems(tabsArr, 'active');

    if (!containClass(tab, 'active') && !containClass(contentArr[index], 'active')) {
        hideOtherItems(contentArr, 'active')
        addClass(tab, 'active')
        addClass(contentArr[index], 'active')
    }

    addClass(tab, 'active')
}

/* Табы в сравнении */

const compareTabs = document.querySelectorAll('.rect-btn--compare-category');
const compareProductArr = document.querySelectorAll('.swiper-compare');

compareTabs.forEach((tab, index) => {
    tab.addEventListener('click', function () {
        swapContentOnTabs(compareTabs, tab, compareProductArr, index);
    })
});

/* Табы в оформлении заказа */

const orderTabs = document.querySelectorAll('.rect-btn--order-make');
const orderContentArr = document.querySelectorAll('.order-make__inner');

orderTabs.forEach((tab, index) => {
    tab.addEventListener('click', function () {
        swapContentOnTabs(orderTabs, tab, orderContentArr, index)
    })
});

/* Свернуть/развернуть поля форм в оформлении заказа */

function toggleOrderMakeItem() {
    toggleClass(this, 'active')
}

if (window.innerWidth <= 992) {
    const orderMakeItemTitle = document.querySelectorAll('.order-make__item-title');
    orderMakeItemTitle.forEach(item => {
        item.addEventListener('click', toggleOrderMakeItem)
    })
}

/* Табы в личном кабинете */

const personalTabs = document.querySelectorAll('.personal__aside-item');
const personalContentArr = document.querySelectorAll('.personal__item');

personalTabs.forEach((tab, index) => {
    tab.addEventListener('click', function () {
        swapContentOnTabs(personalTabs, tab, personalContentArr, index);
    })
});

/* Разделы в личном кабинете */

const personalTiles = document.querySelectorAll('.personal__tile');
const personalTabsTile = document.querySelectorAll('.personal__aside-item.tile');
const personalContentTile = document.querySelectorAll('.personal__item.tile');

personalTiles.forEach((tile, index) => {
    tile.addEventListener('click', () => {
        removeClass(personalTabs[0], 'active');
        swapContentOnTabs(personalTabsTile, personalTabsTile[index], personalContentTile, index + 1);
    });
});

/* Выбор цвета на странице товара */

const productBox = document.querySelector('.product-box');
const mobileProductBox = document.querySelector('.mobile-product-info');

if (productBox) {
    const productColorsList = productBox.querySelector('.product-box__colors-list');
    const productZoomImg = productBox.querySelector('.zoom-img');
    productColorsList.addEventListener('click', moveColorFrame);
    productZoomImg.addEventListener('mousemove', initZoom);
    productZoomImg.addEventListener('mouseleave', removeZoom);
    productBox.addEventListener('click', fakeClickOnImg)
}
if (mobileProductBox) {
    const mobileProductColorsList = mobileProductBox.querySelector('.product-box__colors-list');
    mobileProductColorsList.addEventListener('click', moveColorFrame);
}

/* Табы на странице товара */

const productTabs = document.querySelectorAll('.product-tabs__item');
const productContentArray = document.querySelectorAll('.product-info__inner');

productTabs.forEach((tab, index) => {
    tab.addEventListener('click', function () {
        swapContentOnTabs(productTabs, tab, productContentArray, index);
    })
});

/* Открытие/скрытие бокового меню на мобильной версии сайта */

const headerMenu = document.querySelector('.header-menu');
const mobileOverlay = document.querySelector('.mobile-overlay');
const aside = document.querySelector('.aside');

document.addEventListener('touchstart', handleTouchStart, false);
document.addEventListener('touchmove', handleTouchMove, false);

function handleTouchStart(event) {
    xDown = event.touches[0].clientX;
    yDown = event.touches[0].clientY;
};

function handleTouchMove(event) {
    if (!xDown || !yDown) {
        return;
    }
    let xUp = event.touches[0].clientX;
    let yUp = event.touches[0].clientY;

    let xDiff = xDown - xUp;
    let yDiff = yDown - yUp;
    // немного поясню здесь. Тут берутся модули движения по оси абсцисс и ординат (почему модули? потому что если движение сделано влево или вниз, то его показатель будет отрицательным) и сравнивается, чего было больше: движения по абсциссам или ординатам. Нужно это для того, чтобы, если пользователь провел вправо, но немного наискосок вниз, сработал именно коллбэк для движения вправо, а ни как-то иначе.
    if (Math.abs(xDiff) > Math.abs(yDiff)) {/*most significant*/
        if (!headerMenu) return;
        if (xDiff > 0) {
            if (containClass(headerMenu, 'active')) {
                removeClass(headerMenu, 'active');
                removeClass(mobileOverlay, 'active');
            }
            if (!aside) return;
            if (containClass(aside, 'active')) {
                removeClass(aside, 'active');
                removeClass(mobileOverlay, 'active');
            }
        } else if (xDiff < 0 && xDown <= 15) {
            addClass(headerMenu, 'active');
            addClass(mobileOverlay, 'active');
        }
    }
    /* reset values */
    xDown = null;
    yDown = null;
}

if (clientWidth <= 992 && headerMenu) {
    /* Открытие/скрытие бокового меню по клику */

    const headerMobileMenu = document.querySelector('.header__mobile')
    const headerMobileMenuBtn = headerMobileMenu.querySelector('.header__mobile-menu');

    headerMobileMenuBtn.addEventListener('click', showHeaderMenu);

    function showHeaderMenu() {
        addClass(headerMenu, 'active');
        addClass(mobileOverlay, 'active');
    }

    /* Раскрытие/скрытие списков в боковом меню шапки и футере */
    const headerNav = headerMenu.querySelector('.header-menu__nav');
    const footerNav = document.querySelector('.footer__nav');

    footerNav.addEventListener('click', toggleMobileDropdown);
    headerNav.addEventListener('click', toggleMobileDropdown);

    function toggleMobileDropdown(event) {
        const currentNavItem = event.target.closest('h4');

        if (!currentNavItem) return;

        toggleClass(currentNavItem, 'active')
    }

    /* Форма поиска */

    const headerMobileSearch = document.querySelector('.header__mobile-search');
    const headerMobileForm = headerMobileSearch.querySelector('form');
    const headerMobileSearchResult = headerMobileSearch.querySelector('.search-result');
    const headerSearchReset = headerMobileSearch.querySelector('.header__mobile-search-reset');
    const headerMobileInput = headerMobileSearch.querySelector('input');

    /* Открытие/скрытие строки поиска на мобильной версии */

    document.addEventListener('click', showHideSearch);

    function showHideSearch(event) {
        const isHeaderMobile = event.target == headerMobileMenu || headerMobileMenu.contains(event.target);
        const headerMobileSearchButton = event.target.closest('.header__mobile-button');
        const headerMobileSearchHideButton = event.target.closest('.header__mobile-search-hide');

        if (headerMobileSearchButton) {
            addClass(headerMobileSearch, 'active');
        } else if (headerMobileSearchHideButton || !isHeaderMobile) {
            hideSearch([headerMobileSearch, headerMobileSearchResult, headerSearchReset], headerMobileInput);
        }
    }

    function hideSearch(arr, input) {
        arr.forEach(item => {
            removeClass(item, 'active');
        });
        input.value = '';
    }

    /* Сброс текста из строки поиска */

    headerMobileForm.addEventListener('reset', resetHeaderSearch);

    function resetHeaderSearch() {
        removeClass(headerSearchReset, 'active');
        removeClass(headerMobileSearchResult, 'active')
    }

    /* Ввод текста в строку поиска */

    headerMobileInput.addEventListener('input', showHideSearchResult);

    function showHideSearchResult() {
        addClass(headerSearchReset, 'active');
        addClass(headerMobileSearchResult, 'active');

        if (!headerMobileInput.value.length) {
            removeClass(headerSearchReset, 'active');
            removeClass(headerMobileSearchResult, 'active');
        }
    }
}

/* Кнопки добавления в корзину на мобильной версии */

const mobileCartButtons = document.querySelectorAll('.product-card__mobile-cart');

mobileCartButtons.forEach(btn => {
    btn.addEventListener('click', changeMobileCartButtons);
})

function changeMobileCartButtons() {
    const mobileFooterButtons = this.nextElementSibling;
    addClass(this, 'hide');
    addClass(mobileFooterButtons, 'active')
}

/* Открытие скрытие меню фильтров в каталоге */

const filterBtn = document.querySelector('.rect-btn--product-header-mobile');

if (filterBtn && aside) {
    filterBtn.addEventListener('click', showAside);

    function showAside() {
        addClass(aside, 'active');
        addClass(mobileOverlay, 'active');
    }

    aside.addEventListener('click', hideAside);

    function hideAside(event) {
        const asideInner = this.querySelector('.aside__inner');
        if (!asideInner.contains(event.target)) {
            removeClass(aside, 'active');
            removeClass(mobileOverlay, 'active')
        }
    }
}

/* Header more */

const headerMobileMore = document.querySelector('.header__mobile-more-btn');

if (headerMobileMore) {
    document.addEventListener('click', openCloseDropDown);

    function openCloseDropDown(event) {
        const headerMobileMoreDropdown = headerMobileMore.nextElementSibling;
        if (event.target.closest('.header__mobile-more-btn')) {
            addClass(headerMobileMoreDropdown, 'active')
        }
        if (event.target === headerMobileMore || headerMobileMore.contains(event.target) || event.target === headerMobileMoreDropdown || headerMobileMoreDropdown.contains(event.target)) {
            return;
        }
        if (event.target !== headerMobileMoreDropdown && containClass(headerMobileMoreDropdown, 'active')) {
            removeClass(headerMobileMoreDropdown, 'active')
        }
    }
}

/* Кнопка "Выбрать все" */

const headerMobileCheckbox = document.querySelector('.cart-mobile__choice-label input');

if (headerMobileCheckbox) {
    headerMobileCheckbox.addEventListener('input', checkAllProducts);
}

function checkAllProducts() {
    const productCheckboxes = document.querySelectorAll('.cart-item__checkbox input');

    productCheckboxes.forEach(toggleCheckboxes)
}

function toggleCheckboxes(item) {
    if (headerMobileCheckbox.checked === true) {
        item.checked = true
    } else {
        item.checked = false
    }
}

/* Смена филиалов на странице контактов */

const contactTabsArray = document.querySelectorAll('.rect-btn--contact-tab');
const contactCityArray = document.querySelectorAll('.contacts-city');

contactTabsArray.forEach((tab, index) => {
    tab.addEventListener('click', function () {
        swapContentOnTabs(contactTabsArray, tab, contactCityArray, index)
    })
});

contactCityArray.forEach(city => {
    const contactInfoBtnArray = city.querySelectorAll('.rect-btn--contact-info-tab');
    const contactInfoContentArr = city.querySelectorAll('.contacts-city__info-item');
    contactInfoBtnArray.forEach((tab, index) => {
        tab.addEventListener('click', function () {
            swapContentOnTabs(contactInfoBtnArray, tab, contactInfoContentArr, index)
        })
    });
})

/* Открытие формы рекламации на странице контактов */

const contactsComplaintBtn = document.querySelectorAll('.rect-btn--departments');
contactsComplaintBtn.forEach(btn => {
    btn.addEventListener('click', showComplaintForm);
});

function showComplaintForm() {
    const complaintForm = document.querySelector('#complaintForm')
    addClass(complaintForm, 'active')
    addClass(body, 'active')
}

/* Открытие формы заявления директору на странице контактов */

const contactsCeoBtn = document.querySelectorAll('.contacts-city__departments-text a');
contactsCeoBtn.forEach(btn => {
    btn.addEventListener('click', showCeoForm);
});

function showCeoForm(event) {
    event.preventDefault()
    const ceoForm = document.querySelector('#ceoForm')
    addClass(ceoForm, 'active')
    addClass(body, 'active')
}

/* Вставка имени прикрепленного файла в форме рекламации на странице контактов */
const contactsForms = document.querySelectorAll('.contact-form')

if (contactsForms.length) {
    contactsForms.forEach(form => {
        const contactsFileInput = form.querySelector('.contacts-form-label-file input');
        contactsFileInput.addEventListener('change', changeFileParagraphText)

        function changeFileParagraphText() {
            const files = this.files;
            const paragraph = this.previousElementSibling;
            let filesString = '';
            for (let i = 0; i < files.length; i++) {
                const fileName = files[i].name;
                if (i === files.length - 1) {
                    filesString += `${fileName}`
                } else {
                    filesString += `${fileName}, `
                }

            }
            paragraph.textContent = filesString
        }

        /* Удаление файлов из инпута в форме рекламации на странице контактов */

        const contactsClearFileBtn = form.querySelector('.contacts-form-file-row button');
        contactsClearFileBtn.addEventListener('click', clearFileInput)

        function clearFileInput() {
            const paragraph = contactsFileInput.previousElementSibling;
            if (contactsFileInput.value !== '') {
                contactsFileInput.value = '';
                paragraph.textContent = 'Выберите файлы';
            }
        };
    })
}