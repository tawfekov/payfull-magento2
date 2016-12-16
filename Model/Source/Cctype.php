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

use Magento\Payment\Model\Source\Cctype as PaymentCctype;

/**
 * Payfull Payment CC Types Source Model
 */
class Cctype extends PaymentCctype
{
    /**
     * @return string[]
     */
    public function getAllowedTypes()
    {
        return ['VI', 'MC'];
    }
}
