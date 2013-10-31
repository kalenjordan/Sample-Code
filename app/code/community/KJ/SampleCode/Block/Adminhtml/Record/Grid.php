<?php

class KJ_SampleCode_Block_Adminhtml_Record_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('recordsGrid');
        $this->setDefaultSort('record_id');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('samplecode/record')->getCollection();
        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('record_id', array(
            'header'    => Mage::helper('core')->__('ID'),
            'width'     => '50px',
            'index'     => 'record_id',
        ));

        $this->addColumn('title', array(
            'header'    => Mage::helper('core')->__('Title'),
            'index'     => 'title',
        ));

        return parent::_prepareColumns();
    }

    /**
     * @param $item KJ_SampleCode_Model_Record
     */
    public function getRowUrl($item)
    {
        return $this->getUrl('*/*/edit', array('record_id' => $item->getId()));
    }
}