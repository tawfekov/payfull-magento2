<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
/**
 *
 * Payfull
 *
 * @category    Magento2-module
 * @license MIT
 * @version 0.0.1
 * @author Payfull Tech team <tech@payfull.com>
 * @copyright Copyright (c) 2016  Payfull, Inc <http://www.Payfull.com/>
 *
 */

namespace Payfull\Pay\Model\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 *
 * Payfull Payment Action Dropdown source
 */
class PaymentAction implements ArrayInterface
{
    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => \Magento\Authorizenet\Model\Authorizenet::ACTION_AUTHORIZE,
                'label' => __('Authorize Only'),
            ],
            [
                'value' => \Magento\Authorizenet\Model\Authorizenet::ACTION_AUTHORIZE_CAPTURE,
                'label' => __('Authorize and Capture')
            ]
        ];
    }
}
