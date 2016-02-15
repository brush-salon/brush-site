var Abstract = require('./abstract');

function Price() {
    Abstract.apply(this, arguments);
    this.createTabs();
    this.createPopovers();
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
        _this.$('.tabController').click(function (e) {
            $(this).tab('show');
        })
    },
    createPopovers: function () {
        this.$('#example').popover({
            html: true,
            content: function () {
                return $('.popoverContent').html()
            },
            template: '<div class="popover popover_price" role="tooltip"><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
        });
    }
})
;

module.exports = Price;