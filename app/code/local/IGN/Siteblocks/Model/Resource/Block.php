<?php
class IGN_Siteblocks_Model_Resource_Block extends Mage_Core_Model_Mysql4_Abstract {
    public function _construct()
    {
        $this->_init('siteblocks/block', 'block_id');
    }
}