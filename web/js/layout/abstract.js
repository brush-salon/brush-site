function Abstract() {
    this.bindEvents();
}
Abstract.prototype.$el = $('html');
Abstract.prototype.$ = function (selector) {
    return this.$el.find(selector);
}
Abstract.prototype.bindEvents = function () {
    console.warn('abstract bind events');
};
module.exports = Abstract;