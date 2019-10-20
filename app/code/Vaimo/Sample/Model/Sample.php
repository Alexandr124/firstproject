<?php

namespace Vaimo\Sample\Model;

use Magento\Framework\Model\AbstractModel;
use Vaimo\Sample\Model\ResourceModel\Sample as SampleResource;

class Sample extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(SampleResource::class);
    }

}