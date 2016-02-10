var Abstract = require('./abstract');

function About() {
    Abstract.apply(this, arguments);
    console.warn('here')
    this.swiper = new Swiper('.swiper-container', {
        centeredSlides: true,
        slidesPerView: 'auto',
        loop: true,
        nextButton: $('.aboutSliderControl').find('.next')[0],
        prevButton: $('.aboutSliderControl').find('.prev')[0]
    });
}

About.prototype = $.extend({constructor: About}, Object.create(Abstract.prototype), {});

module.exports = About;