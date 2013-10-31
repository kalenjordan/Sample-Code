Sample Code for Magento
=======================

This provides some boilerplate code for common things in Magento, like 
creating backend grids and forms.

### Create a grid

  1. [Menu](https://github.com/kalenjordan/Sample-Code/blob/master/app/code/community/KJ/SampleCode/etc/adminhtml.xml#L2)
  2. [Controller](https://github.com/kalenjordan/Sample-Code/blob/master/app/code/community/KJ/SampleCode/controllers/Adminhtml/RecordController.php#L19)
  3. [Layout XML](https://github.com/kalenjordan/Sample-Code/blob/master/app/design/adminhtml/base/default/layout/samplecode.xml#L4)
  4. [Grid Container Block](https://github.com/kalenjordan/Sample-Code/blob/master/app/code/community/KJ/SampleCode/Block/Adminhtml/Record.php)
  5. [Grid Block](https://github.com/kalenjordan/Sample-Code/blob/master/app/code/community/KJ/SampleCode/Block/Adminhtml/Record/Grid.php)

### Create a backend form

  1. [Controller](https://github.com/kalenjordan/Sample-Code/blob/master/app/code/community/KJ/SampleCode/controllers/Adminhtml/RecordController.php)
  2. [Form Container Block](https://github.com/kalenjordan/Sample-Code/blob/master/app/code/community/KJ/SampleCode/Block/Adminhtml/Record/Edit.php)
  3. [Form Block](https://github.com/kalenjordan/Sample-Code/blob/master/app/code/community/KJ/SampleCode/Block/Adminhtml/Record/Edit/Form.php)
  4. [Layout XML](https://github.com/kalenjordan/Sample-Code/blob/master/app/design/adminhtml/base/default/layout/samplecode.xml)

##To Do

  - Maybe hook this into a generator MageRun command that can generate
    code specific to a given module and record.
