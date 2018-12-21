<?php
class IGN_Siteblocks_Model_Source_Status {
    const ENABLED = '1';
    const DISABLED = '0';

    public function toOptionArray() {
        return array(
            array('value' => self::ENABLED, 'label' => Mage::helper('siteblocks')->__('Active')),
            array('value' => self::DISABLED, 'label' => Mage::helper('siteblocks')->__('Inactive'))
        );
    }

    public function toArray() {
        return array(
            self::DISABLED => Mage::helper('siteblocks')->__('Inactive'),
            self::ENABLED => Mage::helper('siteblocks')->__('Active')
        );
    }
}