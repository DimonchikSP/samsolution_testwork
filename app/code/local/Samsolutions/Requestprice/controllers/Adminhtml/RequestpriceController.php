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
 * Backend controller
 *
 * @category    Samsolutions
 * @package     Samsolutions_RequestPrice
 * @author      Shitikov Dmitry <shitikovda@gmail.com>
 * @description Test for position Magento developer
 * @license     http://opensource.org/licenses/OSL-3.0 The Open Software License 3.0
 */
class Samsolutions_Requestprice_Adminhtml_RequestpriceController extends Mage_Adminhtml_Controller_Action
{
    protected function _initRequestprice()
    {

        $this->_title('Price request');
        Mage::register('current_request', Mage::getModel('requestprice/requestprice'));
        $requestId =   $this->getRequest()->getParam('id');
        if($requestId){
            Mage::registry('current_request')->load($requestId);
        }
    }
    public function indexAction()
    {
        $this->_title($this->__('Price requests'));
        $this->loadLayout();
        $this->_setActiveMenu('requestprice');
        $this->_addBreadcrumb(Mage::helper('requestprice')->__('Price requests'), Mage::helper('requestprice')->__('Price request'));
        $this->renderLayout();
    }

    public function editAction()
    {
        $this->_initRequestprice();
        $this->loadLayout();
        $request = Mage::registry('current_request');
        $this->_title($request->getName());
        $this->_setActiveMenu('requestprice');
        $this->_addContent($this->getLayout()->createBlock('requestprice/adminhtml_requestprice_edit'));
        $this->renderLayout();
    }

    public function saveAction()
    {
        $data = $this->getRequest()->getPost();
        if(!empty($data)){
            try {
                Mage::getModel('requestprice/requestprice')->setData($data)->save();
                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('requestprice')->__('Price request succefuly saved!'));
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            } catch (Exception $e) {
                Mage::logException($e);
                Mage::getSingleton('adminhtml/session')->addError($this->__('Something went wrong!'));
            }
        }
        return $this->_redirect('*/*/');
    }

    public function deleteAction()
    {

        $id = $this->getRequest()->getParam('id', false);
        try {
            Mage::getModel('requestprice/requestprice')->setId($id)->delete();
            Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('requestprice')->__('Price request successfuly deleted'));
        } catch (Mage_Core_Exception $e) {
            Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
        } catch (Exception $e) {
            Mage::logException($e);
            Mage::getSingleton('adminhtml/session')->addError($this->__('Something went wrong!'));
        }
        return $this->_redirect('*/*/');
    }

    public function gridAction()
    {
        $this->loadLayout();
        $this->getResponse()->setBody($this->getLayout()->createBlock('requestprice/adminhtml_requestprice')->toHtml());
    }
}
