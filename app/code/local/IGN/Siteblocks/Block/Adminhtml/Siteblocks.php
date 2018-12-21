<?php

/**
 * Adminhtml cms blocks content block
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class IGN_Siteblocks_Block_Adminhtml_Siteblocks extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    public function __construct()
    {
        $this->_controller = 'adminhtml_siteblocks';
        $this->_blockGroup = 'siteblocks';
        $this->_headerText = Mage::helper('siteblocks')->__('Siteblocks');
        $this->_addButtonLabel = Mage::helper('siteblocks')->__('Add New Block');
        parent::__construct();
    }

}
