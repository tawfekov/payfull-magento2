<?php
/**
 * T4U - Payfull payment method model
 *
 * @category    Payfull
 * @package     Payfull
 * @author      Mohammad Alabed
 * @copyright   payfull (http://payfull.com)
 * @license     GPL
 */

namespace T4U\Payfull\Model\Source;

class Cctype extends \Magento\Payment\Model\Source\Cctype
{
    /**
     * @return array
     */
    public function getAllowedTypes()
    {
        return array('VI', 'MC');
    }
}
