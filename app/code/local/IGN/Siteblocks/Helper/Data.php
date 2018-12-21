<?php
class IGN_Siteblocks_Helper_Data extends Mage_Core_Helper_Abstract {
    public function _construct() {
        parent::_construct();
        $this->_init('siteblocks/block');
        echo Mage::helper('siteblocks')->__('Siteblocks');
    }
}