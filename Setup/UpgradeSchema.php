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

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * Class UpgradeSchema
 * @package Payfull\Pay\Setup
 */
class UpgradeSchema implements UpgradeSchemaInterface {

    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */
	public function upgrade(
		SchemaSetupInterface $setup,
		ModuleContextInterface $context
	){
		$setup->startSetup();
		if(version_compare($context->getVersion(), "0.0.1", "<")){
		    //Your upgrade script
		}
		$setup->endSetup();
	}
}