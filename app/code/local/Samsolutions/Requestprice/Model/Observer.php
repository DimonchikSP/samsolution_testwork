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
 * Observer SamSolutions_RequestPrice
 *
 * @category    SamSolutions
 * @package     SamSolutions_RequestPrice
 * @author      Shitikov Dmitry <shitikovda@gmail.com>
 * @description Test for position Magento developer
 * @license     http://opensource.org/licenses/OSL-3.0 The Open Software License 3.0
 */
class Samsolutions_Requestprice_Model_Observer
{

    public function changePriceBlock(Varien_Event_Observer $observer)
    {
        $observer->getProduct()->setCanShowPrice(false);
        Mage::unregister('current_sku');
        Mage::register('current_sku', $observer->getProduct()->getSku());
    }
}