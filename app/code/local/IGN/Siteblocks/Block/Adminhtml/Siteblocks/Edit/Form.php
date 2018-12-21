<?php

class IGN_Siteblocks_Block_Adminhtml_Siteblocks_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{

    /**
     * Init form
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('block_form');
        $this->setTitle(Mage::helper('siteblocks')->__('Block Information'));
    }



    protected function _prepareForm()
    {
        $model = Mage::registry('siteblocks_block');

        $form = new Varien_Data_Form(
            array('id' => 'edit_form',
                'action' => $this->getUrl('*/*/save', array('block_id' => $this->getRequest()->getParam('block_id'))),
                'method' => 'post')
        );

        $form->setHtmlIdPrefix('block_');

        $fieldset = $form->addFieldset('base_fieldset', array('legend'=>Mage::helper('siteblocks')->__('General Information'), 'class' => 'fieldset-wide'));

        if ($model->getBlockId()) {
            $fieldset->addField('block_id', 'hidden', array(
                'name' => 'block_id',
            ));
        }

        $fieldset->addField('name', 'text', array(
            'name'      => 'name',
            'label'     => Mage::helper('siteblocks')->__('Name'),
            'title'     => Mage::helper('siteblocks')->__('Name'),
            'required'  => true,
        ));





        $fieldset->addField('block_status', 'select', array(
            'label'     => Mage::helper('siteblocks')->__('Status'),
            'title'     => Mage::helper('siteblocks')->__('Status'),
            'name'      => 'block_status',
            'required'  => true,
            'options'   => Mage::getModel('siteblocks/source_status')->toArray()
        ));


        $fieldset->addField('phone', 'text', array(
            'name'      => 'phone',
            'label'     => Mage::helper('siteblocks')->__('Phone'),
            'title'     => Mage::helper('siteblocks')->__('Phone'),
            'required'  => true,
        ));

        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }

}
