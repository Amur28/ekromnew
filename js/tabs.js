'use strict';
import { containClass, addClass, hideOtherItems } from "./functions.js";

/* Табы */

export const swapContentOnTabs = (tabsArr, tab, contentArr, index) => {
    hideOtherItems(tabsArr, 'active');

    if (!containClass(tab, 'active') && !containClass(contentArr[index], 'active')) {
        hideOtherItems(contentArr, 'active')
        addClass(tab, 'active')
        addClass(contentArr[index], 'active')
    }

    addClass(tab, 'active')
}