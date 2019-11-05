<?php

namespace Vaimo\Quote\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Quote extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('vaimo_quote', 'id');
    }
}