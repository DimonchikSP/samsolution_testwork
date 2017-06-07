<?php
/**
 * Samsolutions
 *
 * PHP Version 5.6.30
 *
 * @category    Samsolutions
 * @package     Samsolutions_RequestPrice
 * @author      Shitikov Dmitry <shitikovda@gmail.com>
 * @description Test for position Magento developer
 * @license     http://opensource.org/licenses/OSL-3.0 The Open Software License 3.0
 */
/**
 * Install db script
 *
 * @category    Samsolutions
 * @package     Samsolutions_RequestPrice
 * @author      Shitikov Dmitry <shitikovda@gmail.com>
 * @description Test for position Magento developer
 * @license     http://opensource.org/licenses/OSL-3.0 The Open Software License 3.0
 */
/**
 * @var $this Mage_Core_Model_Resource_Setup
 */
$installer = $this;
$installer->startSetup();
$table = $installer->getConnection()->newTable($this->getTable('requestprice/requestprice'))
    ->addColumn('entity_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 10, array(
        'auto_increment'    => true,
        'primary'           => true,
        'nullable'          => false
    ),'Entity Id')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 50, array(
        'nullable'          => false
    ), 'Name')
    ->addColumn('email', Varien_Db_Ddl_Table::TYPE_VARCHAR, 50, array(
        'nullable'          => false
    ), 'Email')
    ->addColumn('created_at', Varien_Db_Ddl_Table::TYPE_DATE, null,array(
        'nullable'          => false
    ), 'Created At')
    ->addColumn('status', Varien_Db_Ddl_Table::TYPE_VARCHAR, 10, array(
        'nullable'          => false
    ), 'Request price status')
    ->addColumn('sku', Varien_Db_Ddl_Table::TYPE_VARCHAR, 64, array(
        'nullable'          => false
    ), 'SKU')
    ->addColumn('comment', Varien_Db_Ddl_Table::TYPE_TEXT, 1024, array(
        'nullable'          => false
    ), 'Comment');

$installer->getConnection()->createTable($table);
$installer->endSetup();
