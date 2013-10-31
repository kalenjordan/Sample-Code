<?php

class KJ_SampleCode_Block_Adminhtml_Record extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->_controller = 'adminhtml_record';
        $this->_blockGroup = 'samplecode';
        $this->_headerText = Mage::helper('core')->__('Manage Records');
        $this->_addButtonLabel = Mage::helper('core')->__('Add Record');

        parent::__construct();
    }
}