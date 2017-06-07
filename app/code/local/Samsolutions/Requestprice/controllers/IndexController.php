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
 * Frontend controlller
 *
 * @category    Samsolutions
 * @package     Samsolutions_RequestPrice
 * @author      Shitikov Dmitry <shitikovda@gmail.com>
 * @description Test for position Magento developer
 * @license     http://opensource.org/licenses/OSL-3.0 The Open Software License 3.0
 */
class Samsolutions_Requestprice_IndexController extends Mage_Core_Controller_Front_Action
{

    public function saverequestAction()
    {
        $data = $this->getRequest()->getParams();
        if(!empty($data)){
            try {
                $data['created_at'] = Mage::getModel('core/date')->gmtDate('Y-m-d');
                $data['status'] = "new";
                Mage::getModel('requestprice/requestprice')->setData($data)->save();
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('customer/session')->addError($e->getMessage());
            } catch (Exception $e) {
                Mage::logException($e);
            }
        }
    }
}