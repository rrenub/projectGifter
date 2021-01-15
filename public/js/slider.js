window.noUiSlider = require('nouislider');
var slider = document.getElementById('slider-html');

noUiSlider.create(slider, {
    start: [20, 80],
    connect: true,
    range: {
        'min': 0,
        'max': 100
    }
});
