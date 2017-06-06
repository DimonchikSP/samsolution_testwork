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
 * Business model SamSolutions_RequestPrice
 *
 * @category    SamSolutions
 * @package     SamSolutions_RequestPrice
 * @author      Shitikov Dmitry <shitikovda@gmail.com>
 * @description Test for position Magento developer
 * @license     http://opensource.org/licenses/OSL-3.0 The Open Software License 3.0
 */
class Samsolutions_Requestprice_Model_Requestprice extends Mage_Core_Model_Abstract
{

    public function _construct()
    {
        parent::_construct();
        $this->_init('requestprice/requestprice');
    }
}