<?php
/**
 * SamSolutions
 *
 * PHP Version 5.6.30
 *
 * @category    SamSolutions
 * @package     SamSolutions_RequestPrice
 * @author      Shitikov Dmitry <shitikovda@gmail.com>
 * @description Test for position Magento developer
 * @license     http://opensource.org/licenses/OSL-3.0 The Open Software License 3.0
 */
/**
 * Collection of SamSolutions_RequestPrice
 *
 * @category    SamSolutions
 * @package     SamSolutions_RequestPrice
 * @author      Shitikov Dmitry <shitikovda@gmail.com>
 * @description Test for position Magento developer
 * @license     http://opensource.org/licenses/OSL-3.0 The Open Software License 3.0
 */
class Samsolutions_Requestprice_Model_Resource_Requestprice_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{

    public function _construct()
    {
        $this->_init('requestprice/requestprice');
    }
}