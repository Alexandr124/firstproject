<?php

namespace Vaimo\Sample\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Sample extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('vaimo_sample', 'post_id');
    }

}