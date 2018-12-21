<?php
class IGN_Siteblocks_Model_Block extends Mage_Core_Model_Abstract {
    public function _construct()
    {
        parent::_construct();
        $this->_init("siteblocks/block");
    }
}