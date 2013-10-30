<?php

class KJ_SampleCode_Block_Adminhtml_Record_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        $this->_objectId = 'id';
        $this->_controller = 'adminhtml_record';
        $this->_blockGroup = 'samplecode';

        $this->_headerText = Mage::helper('core')->__('Edit Record');

        parent::__construct();

        $this->_removeButton('reset');
    }

    public function getFormActionUrl()
    {
        return $this->getUrl('*/*/save');
    }
}
