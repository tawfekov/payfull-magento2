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
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';

        rendererList.push(
            {
                type: 't4u_payfull',
                component: 'T4U_Payfull/js/view/payment/method-renderer/payfull-method'
            }
        );
        /** Add view logic here if needed */
        return Component.extend({
        });
    }
);