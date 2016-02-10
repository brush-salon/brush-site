var Abstract = require('./abstract');

function Price() {
    Abstract.apply(this, arguments);
    this.createTabs();
}

Price.prototype = $.extend({constructor: Price}, Object.create(Abstract.prototype), {
    el: '.b-price',
    bindEvents: function () {
        var _this = this;
        this.$('.price-toggle-controller').click(function (event) {
            var target = _this.$(event.currentTarget).data('target');
            _this.$(target).collapse('toggle');
            $(this).find('.chevron').toggleClass('open');
        });
    },
    createTabs: function () {
        var _this = this;
        console.warn("this.$('.tabController')", this.$('.tabController'));
        _this.$('.tabController').click(function (e) {
            $(this).tab('show');
        })
    },
});

module.exports = Price;