<?php
/**
 * Copyright © 2015 Mkt. All rights reserved.
 */

namespace Mkt\Favorite\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();
        $table  = $installer->getConnection()
            ->newTable($installer->getTable('mkt_favorite_items'))
            ->addColumn(
                'id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Id'
            )
           ->addColumn(
			'store_id',
			\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
			11,
			['nullable' => false],
			'Store ID'
		    )
			->addColumn(
			'customer_id',
			\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
			11,
			['nullable' => false],
			'Customer ID'
		    )
			->addColumn(
			'product_id',
			\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
			11,
			['nullable' => false],
			'Product ID'
		    )
			->addColumn(
			'qty',
			\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
			11,
			['nullable' => false],
			'QTY'
		    )
			->addColumn('status', \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT, 1, ['nullable' => false], 'Status')
            ->addColumn(
            'created_date',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false, 'default' =>  \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
            'Created Date'
            )
			->addColumn(
            'updated_date',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false, 'default' =>  \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
            'Updated Date'
            );
        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }
}
