<?php

namespace Vaimo\Sample\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $installer, ModuleContextInterface $context)
    {
        $installer->startSetup();
        $table = $installer->getConnection()->newTable(
            $installer->getTable('vaimo_sample')
        )
            ->addColumn(
                'post_id',
                Table::TYPE_INTEGER,
                null,
                [
                    'identity' => true,
                    'nullable' => false,
                    'primary'  => true,
                    'unsignrd' => true,
                ],
                'Post ID'
            )
            ->addColumn(
                'title',
                Table::TYPE_TEXT,
                255,
                [
                    'nullable' => false,
                ],
                'Title'
            )
            ->addColumn(
                'description',
                Table::TYPE_TEXT,
                1000,
                [
                    'nullable' => true,
                ],
                'Description'
            )
            ->addColumn(
                'url',
                Table::TYPE_TEXT,
                255,
                [
                    'nullable' => true,
                ],
                'Url'
            )
            ->addColumn(
                'created_at',
                Table::TYPE_TEXT,
                null,
                [
                    'nullable' => true,

                ],
                'Created At'
            )
            ->addColumn(
                'updated_at',
                Table::TYPE_TEXT,
                null,
                [
                ],
                'Updated At'
            ) ->setComment('Vaimo Post Table');
        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }
}

