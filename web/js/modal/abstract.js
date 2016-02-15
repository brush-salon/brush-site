function Abstract() {
    var _this = this;
    this.$modal = $('#mainModal').modal({show: false});

    this.appendContent();

    this.$modal.one('hidden.bs.modal', function () {
        console.warn('here', _this);
        _this.onClose();
    });
    this.$modal.one('shown.bs.modal', function () {
        console.warn('here', _this);
        _this.onShown();
    });
}
Abstract.prototype.appendContent = function () {
    this.content.appendTo('#modalContainer');
};
Abstract.prototype.show = function () {
    this.$modal.modal('show');
};
Abstract.prototype.onClose = function () {
};
Abstract.prototype.onShown = function () {
};

module.exports = Abstract;