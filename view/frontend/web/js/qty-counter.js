define([
    'ko',
    'uiElement'
], function (ko, Element) {
    return Element.extend({
        defaults: {
            template: 'Bytology_CodeTest/qty-counter'
        },
        initObservable: function () {
            this._super().observe('qty');
            return this;
        },
        getDataValidator: function() {
            return JSON.stringify(this.dataValidate);
        },
        decreaseQty: function() {
            let qty;
            if (this.qty() > 1) {
                qty = this.qty() - 1;
            } else {
                qty = 1;
            }
            this.qty(qty);
        },
        increaseQty: function() {
            let qty = this.qty() + 1;
            this.qty(qty);
        }
    });
});
