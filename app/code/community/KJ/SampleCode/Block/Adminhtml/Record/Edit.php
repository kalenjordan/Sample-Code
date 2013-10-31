<?php

class KJ_SampleCode_Block_Adminhtml_Record_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        $this->_objectId = 'record_id';
        $this->_controller = 'adminhtml_record';
        $this->_blockGroup = 'samplecode';

        $this->_headerText = Mage::helper('core')->__('Edit Record');

        parent::__construct();

        $this->_addDeleteButton();

        $this->_removeButton('reset');
    }

    protected function _addDeleteButton()
    {
        $deleteUrl = $this->getDeleteUrl();
        $confirmText = Mage::helper('adminhtml')->__('Sure you want to delete this?');
        $this->_addButton('delete', array(
            'label'     => 'Delete',
            'onclick'   => "deleteConfirm('$confirmText', '$deleteUrl');",
            'class'     => 'save',
        ));
    }
}
