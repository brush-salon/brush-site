function Abstract() {
    this.createElement();
    this.bindEvents();
}
Abstract.prototype.showPopup = function () {

};
Abstract.prototype.$ = function (selector) {
    return this.$el.find(selector);
}
Abstract.prototype.createElement = function () {
    this.$el = $(this.el);
};
Abstract.prototype.bindEvents = function () {
    console.warn('abstract bind events');
};
module.exports = Abstract;