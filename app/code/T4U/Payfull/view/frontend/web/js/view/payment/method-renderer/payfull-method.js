/**
 * Payfull payment method model
 *
 * @category    Payfull
 * @package     Payfull
 * @author      Mohammad Alabed
 * @copyright   payfull (http://payfull.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
/*browser:true*/
/*global define*/
define(
    [
        'Magento_Payment/js/view/payment/cc-form',
        'jquery',
        'Magento_Payment/js/model/credit-card-validation/validator'
    ],
    function (Component, $) {
        'use strict';
        return Component.extend({
            defaults: {
                template: 'T4U_Payfull/payment/payfull-form'
            },

            getCode: function() {
                return getPayfullPaymentCode();
            },

            isActive: function() {
                return true;
            },

            validate: function() {
                var $form = $('#' + this.getCode() + '-form');
                return $form.validation() && $form.validation('isValid');
            },

            buildInstallmentEngine: function() {
                var $form = $('#' + getPayfullPaymentCode() + '-form');
                $form.bind("DOMSubtreeModified",function(){
                    var $cc =  document.getElementById(getPayfullPaymentCode()+'_cc_number');
                    if($cc !== null){
                        $cc.addEventListener('keyup', getCardBrandAndInstallmentsList, false);
                    }

                });
            },

        });
    }
);

function getPayfullPaymentCode() {
    return 't4u_payfull';
}

function getCardBrandAndInstallmentsList() {
    alert('yyy');
}

