require('../less/main.less');
require('bootstrap/js/modal');

var PressPage = require('./pages/press.js');
var AboutPage = require('./pages/about.js');
var PricePage = require('./pages/price.js');

var PressModal = require('./modal/press.js');

function PageController(page, layout) {
    this.pages = {
        press: PressPage,
        about: AboutPage,
        price: PricePage,
    };
    this.layouts = {
        layout: function () {
        }
    };
    this.modals = {
        press: PressModal
    };
    this.layout = this.layouts[layout] ? new this.layouts[layout] : {};
    this.page = this.pages[page] ? new this.pages[page] : {};
}

PageController.prototype.showModal = function (modal, options) {
    if (this.modals[modal]) {
        this.modal = new this.modals[modal](options);
        this.modal.show();
    }
};
window.PageController = PageController;
