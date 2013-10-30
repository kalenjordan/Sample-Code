<?php

class KJ_SampleCode_Block_Adminhtml_Record_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('record_edit_form');
    }

    protected function _prepareForm()
    {
        $form = new Varien_Data_Form(
            array('id' => 'edit_form', 'action' => $this->getData('action'), 'method' => 'post')
        );

        $form->setData('use_container', true);
        $this->setForm($form);

        $this->_addBaseFieldset();

        $form->setValues($this->_getRecord()->getData());

        return parent::_prepareForm();
    }

    /**
     * @return KJ_SampleCode_Model_Record
     */
    protected function _getRecord()
    {
        return Mage::registry('current_record');
    }

    protected function _addBaseFieldset()
    {
        $fieldset = $this->getForm()->addFieldset('base_fieldset', array(
            'legend'    => Mage::helper('core')->__('General'),
        ));

        $fieldset->addField('record_id', 'hidden', array(
            'name'      => 'record_id',
        ));

        $fieldset->addField('title', 'text', array(
            'name'      => 'rule[title]',
            'label'     => Mage::helper('core')->__('Title'),
            'required'  => true,
        ));
    }
}
