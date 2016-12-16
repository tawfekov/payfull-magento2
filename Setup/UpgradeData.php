<?php
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

namespace Payfull\Pay\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Class UpgradeData
 * @package Payfull\Pay\Setup
 */
class UpgradeData implements UpgradeDataInterface {

    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
	public function upgrade(
		ModuleDataSetupInterface $setup,
		ModuleContextInterface $context
	){
		$setup->startSetup();
		if(version_compare($context->getVersion(), "0.0.1", "<")){
		//Your upgrade script
		}
		$setup->endSetup();
	}
}