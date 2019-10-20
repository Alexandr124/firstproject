<?php

namespace Vaimo\Sample\Model\ResourceModel\Sample;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     *
     */
    protected function _construct()
    {
        $this->_init(
            Vaimo\Sample\Model\Sample::class,
        Vaimo\Sample\Model\ResourceModel\Sample::class
        );
    }
}