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
 * Helper Samsolutions_RequestPrice
 *
 * @category    Samsolutions
 * @package     Samsolutions_RequestPrice
 * @author      Shitikov Dmitry <shitikovda@gmail.com>
 * @description Test for position Magento developer
 * @license     http://opensource.org/licenses/OSL-3.0 The Open Software License 3.0
 */
class Samsolutions_Requestprice_Block_Adminhtml_Requestprice_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    protected $_blockGroup = 'requestprice';
    public function __construct()
    {
        parent::__construct();

        $this->_controller  = 'adminhtml_requestprice';
        $this->_mode        = 'edit';
        $this->_removeButton('delete');

    }

    public function getHeaderText()
    {
        $request = Mage::registry('current_request');
        return Mage::helper('requestprice')->__("Edit request: " . $request->getName());

    }

    public function getHeaderCssClass()
    {
        return 'icon-head';
    }
}