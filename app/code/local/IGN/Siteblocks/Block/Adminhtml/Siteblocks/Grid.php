<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Mage
 * @package     Mage_Adminhtml
 * @copyright  Copyright (c) 2006-2018 Magento, Inc. (http://www.magento.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Adminhtml cms blocks grid
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class IGN_Siteblocks_Block_Adminhtml_Siteblocks_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

    public function __construct()
    {
        parent::__construct();
        $this->setId('siteblocksBlockGrid');
        $this->setDefaultSort('block_identifier');
        $this->setDefaultDir('ASC');
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('siteblocks/block')->getCollection();
        /* @var $collection Mage_Cms_Model_Mysql4_Block_Collection */
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {


        $this->addColumn('name', array(
            'header'    => Mage::helper('siteblocks')->__('Name'),
            'align'     => 'left',
            'index'     => 'name',
        ));

        $this->addColumn('block_status', array(
            'header'    => Mage::helper('siteblocks')->__('Status'),
            'align'     => 'left',
            'type'      => 'options',
            'options'   => Mage::getModel('siteblocks/source_status')->toArray(),
            'index'     => 'block_status'
        ));


        $this->addColumn('created_at', array(
            'header'    => Mage::helper('siteblocks')->__('Created At'),
            'index'     => 'created_at',
            'type'      => 'date'
        ));


        return parent::_prepareColumns();
    }


    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('block_id');
        $this->getMassactionBlock()->setIdFieldName('block_id');
        $this->getMassactionBlock()
            ->addItem('delete',
                array(
                    'label' => Mage::helper('siteblocks')->__('Delete'),
                    'url' => $this->getUrl('*/*/massDelete'),
                    'confirm' => Mage::helper('siteblocks')->__('Are you sure?')
                ))
            ->addItem('status',
                array(
                    'label' => Mage::helper('siteblocks')->__('Update status'),
                    'url' => $this->getUrl('*/*/massStatus'),
                    'additional' =>
                        array('block_status' =>
                        array(
                            'name' => 'block_status',
                            'type' => 'select',
                            'class' => 'required-entry',
                            'label' => Mage::helper('siteblocks')->__('Status'),
                            'values' => Mage::getModel('siteblocks/source_status')->toOptionArray()
                        ))
                ));
        return $this;
    }


    /**
     * Row click url
     *
     * @return string
     */
    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('block_id' => $row->getId()));
    }

}
