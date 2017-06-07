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
 * Adminhtml Samsolutions_RequestPrice grid block
 *
 * @category    Samsolutions
 * @package     Samsolutions_RequestPrice
 * @author      Shitikov Dmitry <shitikovda@gmail.com>
 * @description Test for position Magento developer
 * @license     http://opensource.org/licenses/OSL-3.0 The Open Software License 3.0
 */
class Samsolutions_Requestprice_Block_Adminhtml_Requestprice_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('requestpriceGrid');
        $this->_controller  = 'adminhtml_requestprice';
        $this->setDefaultSort('entity_id');
        $this->setDefaultDir('ASC');
        $this->setUseAjax(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('requestprice/requestprice')->getCollection();
        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    /**
     * Configuration of grid
     */
    protected function _prepareColumns()
    {
        $helper = Mage::helper('requestprice');
        $this->addColumn('entity_id', array(
            'header'          => $helper->__('id'),
            'index'           => 'entity_id',
            'column_css_class'=>'no-display',
            'header_css_class'=>'no-display',
        ));
        $this->addColumn('name', array(
            'header'        => $helper->__('Name'),
            'index'         => 'name',
            'filter_index'  => 'name',
            'type'          => 'text'
        ));
        $this->addColumn('email', array(
            'header'        => $helper->__('Email'),
            'index'         => 'email',
            'filter_index'  => 'email',
            'type'          => 'text'
        ));
        $this->addColumn('created_at', array(
            'header'        => $helper->__('Created At'),
            'index'         => 'created_at',
            'filter_index'  => 'created_at',
            'type'          => 'text'
        ));
        $this->addColumn('status', array(
            'header'        => $helper->__('Status'),
            'index'         => 'status',
            'filter_index'  => 'status',
            'type'          => 'text'
        ));
        $this->addColumn('action', array(
            'header'    => $helper->__('Action'),
            'width'     => '50px',
            'type'      => 'action',
            'getter'     => 'getId',
            'actions'   => array(
                array(
                    'caption' => $helper->__('Edit'),
                    'url'     => array(
                        'base'=>'*/*/edit',
                    ),
                    'field'   => 'id'
                )
            ),
            'filter'    => false,
            'sortable'  => false,
            'index'     => 'id',
        ));
        return parent::_prepareColumns();
    }
    public function getRowUrl($row)
    {
        $url = $this->getUrl('*/*/edit', array(
            'id' => $row->getId()
        ));

        return $url;
    }
    public function getGridUrl()
    {
        return $this->getUrl('*/*/grid', array('_current' => true));
    }
}