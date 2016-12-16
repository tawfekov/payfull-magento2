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
namespace Payfull\Pay\Block\Info;

class Payfull extends \Magento\Payment\Block\Info\cc
{
    /**
     * @var string
     */
    //protected $_template = 'Payfull_Pay::info/payfull.phtml';

    /**
     * @return string
     */
    /*public function toPdf()
    {
        $this->setTemplate('Payfull_Pay::info/pdf/payfull.phtml');
        return $this->toHtml();
    }*/
}
