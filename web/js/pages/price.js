var Abstract = require('./abstract');

function Price() {
    Abstract.apply(this, arguments);
}

Price.prototype = $.extend({constructor: Price}, Object.create(Abstract.prototype), {
    bindEvents: function () {
        var _this = this;
        $('.price-toggle-controller').click(function (event) {
            var target = $(event.currentTarget).data('target');
            //$(target).slideToggle(400);
            console.warn($(target).collapse);
            $(target).collapse('toggle');
            $(this).find('.chevron').toggleClass('open');
        });
    },
});

module.exports = Price;