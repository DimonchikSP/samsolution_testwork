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
class Samsolutions_Requestprice_Block_Adminhtml_Requestprice_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Prepare form for render
     */

    protected function _prepareLayout()
    {
        parent::_prepareLayout();

        $helper     = Mage::helper('requestprice');
        $form       = new Varien_Data_Form();
        $request   = Mage::registry('current_request');

        $fieldset = $form->addFieldset('base_fieldset', array('legend' => $helper->__('Request information')));
        if ($request->getId() != null) {
            $fieldset->addField('entity_id', 'hidden', array(
                'name'      => 'entity_id',
                'label'     => $helper->__('ID'),
                'required'  => true
            ));
        }

        $fieldset->addField('name', 'text', array(
            'name'      => 'name',
            'label'     => $helper->__('Name'),
            'required'  => true
        ));

        $fieldset->addField('email', 'text', array(
            'name'      => 'email',
            'label'     => $helper->__('Email'),
            'required'  => true
        ));

        $fieldset->addField('sku', 'text', array(
            'name'      => 'sku',
            'label'     => $helper->__('Product SKU'),
            'required'  => true
        ));
        $fieldset->addField('comment', 'text', array(
            'name'      => 'comment',
            'label'     => $helper->__('Comment'),
            'required'  => true

        ));
        $fieldset->addField('status', 'select', array(
            'name'      => 'status',
            'label'     => $helper->__('Status'),
            'required'  => true,
            'options' => array(
                'new' => 'new',
                'in_progress' => 'in_progress',
                'closed' => 'closed',
            )

        ));
        $form->addValues($request->getData());
        $form->setMethod('post');
        $form->setUseContainer(true);
        $form->setid('edit_form');
        $form->setAction($this->getUrl('*/*/save'));
        $this->setForm($form);

    }
}