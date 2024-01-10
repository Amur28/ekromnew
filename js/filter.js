'use strict';
import { toggleClass, containClass, addClass, removeClass } from "./functions.js";

/* Скрытие/показ фильтров */

export const showHideFilters = (event) => {
    const target = event.target;
    const filterItem = target.closest('.filter-item')

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
}

export const initRangeSliders = (fliterSliders) => {
    fliterSliders.forEach(rangeSlider => {
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
    
        const setRangeSlider = (i, value) => {
            let arr = [null, null];
            arr[i] = value;
            rangeSlider.noUiSlider.set(arr);
        }
    
        inputsRange.forEach((input, index) => {
            input.addEventListener('change', (event) => {
                setRangeSlider(index, event.currentTarget.value)
            });
        })
    });
}