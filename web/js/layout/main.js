var Abstract = require('./abstract');

function Main() {
    Abstract.apply(this, arguments);
}

Main.prototype = $.extend({constructor: Main}, Object.create(Abstract.prototype), {
    bindEvents: function () {
        var _this = this;
        this.$('.menuController').click(function (event) {
            console.warn('here');
            _this.$('#menuContainer').toggle();
        });
    },
});

module.exports = Main;