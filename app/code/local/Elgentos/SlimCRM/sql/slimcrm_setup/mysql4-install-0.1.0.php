<?php

$installer = $this;
$setup = new Mage_Catalog_Model_Resource_Eav_Mysql4_Setup('core_setup');
$installer->startSetup();

$setup->addAttribute('customer', 'slimcrm_remark', array(
    'position' => 1,
    'type'  => 'text',
    'input' => 'text',
    'label'    => 'Customer Remarks',
    'global'=> 1,
    'visible'           => 1,
    'required'          => 0,
    'user_defined'      => 1,
    'searchable'        => 0,
    'filterable'        => 0,
    'comparable'        => 0,
    'visible_on_front'  => 0,
    'visible_in_advanced_search' => 0,
    'unique'=> 0,
    'is_configurable'   => 0
));

$installer->endSetup();