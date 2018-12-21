<?php
class IGN_Siteblocks_TestController extends Mage_Core_Controller_Front_Action {
    public function renamedAction() {
        $enabled = Mage::getStoreConfig('siteblocks/settings/enabled');
        $count = Mage::getStoreConfig('siteblocks/settings/blocks_count');
        $text = Mage::getStoreConfig('siteblocks/settings/raw_text');
        var_dump($text);
    }
}