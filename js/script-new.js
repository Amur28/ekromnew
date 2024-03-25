// 'use strict';
// import './sliders.js';
// import { addClass, removeClass, containClass, hideOtherItems, toggleClass, checkClassAndClick } from './functions.js';
// const body = document.body;
// const clientWidth = window.innerWidth;

// const productCards = document.querySelectorAll('.product-card');

// class ProductCard {
//     constructor(el) {
//         this.el = el;
//         this.status = {
//             inFav: false,
//             inCompare: false,
//             inCart: false,
//         };
//         this.buttons = {
//             favBtn: 'round-btn--fav',
//             compareBtn: 'round-btn--compare',
//             cartBtn: 'round-btn--cart',
//         }
//         this.events();
//     }

//     events() {
//         const roundBtns = this.el.querySelectorAll('.round-btn');
//         roundBtns.forEach(btn => {
//             btn.addEventListener('click', (e) => {
//                 const classes = Array.from(e.currentTarget.classList)
//                 switch (classes[1]) {
//                     case this.buttons.favBtn:
//                         e.currentTarget.classList.toggle('active')
//                         this.status.inFav = this.changeStatus(this.status.inFav, e)
//                         break;
//                     case this.buttons.compareBtn:
//                         e.currentTarget.classList.toggle('active')
//                         this.status.inCompare = this.changeStatus(this.status.inCompare, e)
//                         break;
//                     case this.buttons.cartBtn:
//                         e.currentTarget.classList.add('active')
//                         this.status.inCart = this.changeStatus(this.status.inCart, e)
//                         break;
//                 }
//             })
//         })
//     }

//     changeStatus(status ,e) {
//         if (e.currentTarget.classList.contains('active')) {
//             status = true;
//         } else {
//             status = false
//         }
//         return status
//     }

//     showToast() {

//     }
// }

// productCards.forEach(card => {
//     card = new ProductCard(card);
// });