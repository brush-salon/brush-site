require('../less/main.less');
require('bootstrap/js/transition');
require('bootstrap/js/tab');
require('bootstrap/js/modal');
require('bootstrap/js/collapse');
require('bootstrap/js/tooltip');
require('bootstrap/js/popover');

var PressPage = require('./pages/press.js');
var AboutPage = require('./pages/about.js');
var PricePage = require('./pages/price.js');

var PressModal = require('./modal/press.js');

var MainLayout = require('./layout/main.js');

function PageController(page, layout) {
    this.pages = {
        press: PressPage,
        about: AboutPage,
        price: PricePage,
    };
    this.layouts = {
        main: MainLayout
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
