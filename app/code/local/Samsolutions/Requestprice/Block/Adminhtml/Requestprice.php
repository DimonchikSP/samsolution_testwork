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
 * Adminhtml Samsolutions_RequestPrice grid container block
 *
 * @category    Samsolutions
 * @package     Samsolutions_RequestPrice
 * @author      Shitikov Dmitry <shitikovda@gmail.com>
 * @description Test for position Magento developer
 * @license     http://opensource.org/licenses/OSL-3.0 The Open Software License 3.0
 */
class Samsolutions_Requestprice_Block_Adminhtml_Requestprice extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    public function __construct()
    {

        parent::__construct();
        $this->_blockGroup      = 'requestprice';
        $this->_controller      = 'adminhtml_requestprice';
        $this->_headerText      = Mage::helper('requestprice')->__('Price requests');
        $this->_removeButton('add');
    }

    public function getHeaderCssClass()
    {
        return 'icon-head';
    }
}