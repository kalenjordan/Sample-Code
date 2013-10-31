<?php

class KJ_SampleCode_Adminhtml_RecordController extends Mage_Adminhtml_Controller_Action
{
    const RECORD_NAME = 'Records';

    protected $_record;

    protected function _initAction()
    {
        $this->_title($this->__(self::RECORD_NAME));

        $this->loadLayout()
            ->_setActiveMenu('sales/orders');

        return $this;
    }

    public function indexAction()
    {
        $this->_initAction();
        $this->_title('Manage ' . self::RECORD_NAME);
        $this->renderLayout();
    }

    public function editAction()
    {
        Mage::register('current_record', $this->_getRecord());
        $this->_initAction();
        $this->_title($this->_getRecord()->getTitle());

        $this->renderLayout();
    }

    public function saveAction()
    {
        $record = $this->_getRecord();
        $postData = $this->getRequest()->getParams();

        foreach ($postData['record'] as $key => $value) {
            $record->setData($key, $value);
        }

        $record->save();
        Mage::getSingleton('adminhtml/session')->addSuccess("Updated record: " . $record->getId());
        $this->_redirect('admin_samplecode/adminhtml_record');

        return $this;
    }

    /**
     * @return KJ_SampleCode_Model_Record
     */
    protected function _getRecord()
    {
        if (isset($this->_record)) {
            return $this->_record;
        }

        $record = Mage::getModel('samplecode/record');
        if ($this->getRequest()->getParam('record_id')) {
            $record->load($this->getRequest()->getParam('record_id'));
        }

        $this->_record = $record;
        return $this->_record;
    }
}