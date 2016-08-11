<?php
/**
 * T4U - Payfull payment method model
 *
 * @category    Payfull
 * @package     Payfull
 * @author      Mohammad Alabed
 * @copyright   payfull (http://payfull.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
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
