/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
/*browser:true*/
/*global define*/
define(
    [
        'jquery',
        'Magento_Checkout/js/view/payment/default'
    ],
    function ($, Component) {
        'use strict';

        return Component.extend({
            defaults: {
                template: 'Payfull_Pay/payment/payfull',
                clientConfig: {
                    id: 'co-transparent-form-payfull'
                },
                isValidCardNumber: false
            },

            /**
             * @returns {exports.initialize}
             */
            initialize: function () {
                this._super();
                return this;
            },

            /**
             * Init config
             */
            initClientConfig: function () {
                this._super();
            },

            /** Returns send check to info */
            getMailingAddress: function () {
                return window.checkoutConfig.payment.payfull.mailingAddress;
            },

            /**
             * Validate current credit card type
             * @returns {Boolean}
             */
            validateCardType: function () {
                var $selector = $('#cc_number'),
                    invalidClass = 'payfull-fields-invalid';

                $selector.removeClass(invalidClass);

                if (this.selectedCardType() === null || !this.isValidCardNumber) {
                    $('#cc_number').addClass(invalidClass);

                    return false;
                }

                return true;
            },

            /**
             * Trigger order placing
             */
            placeOrderClick: function () {
                if (this.validateCardType()) {
                    $(this.getSelector('submit')).trigger('click');
                }
            },

        });
    }
);
