<?php

/** @var Mage_Core_Model_Resource_Setup $installer */
$installer = $this;
$installer->startSetup();
$installer->run("CREATE TABLE `ign_siteblock` (
  `block_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `phone` text NOT NULL,
  `block_status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `ign_siteblock`
  ADD PRIMARY KEY (`block_id`);

ALTER TABLE `ign_siteblock`
  MODIFY `block_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
");
/*$installer->getConnection()
    ->newTable('ign_siteblock')
    ->addColumn('block_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity' => true,
        'unsigned' => true,
        'nullable' => false,
        'primary'  => true
    ))
    ->addColumn('title', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
        'nullable' => false
    ))
    ->addColumn('content', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable' => false
    ))
    ->addColumn('block_status', Varien_Db_Ddl_Table::TYPE_TINYINT, null, array(
        'nullable' => false
    ))
    ->addColumn('created_at', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
        'nullable' => false
    ));*/
$installer->endSetup();