<?php

namespace Vaimo\Quote\Model;

use Magento\Framework\Model\AbstractModel;
use Vaimo\Quote\Model\ResourceModel\Quote as Grid;

    class Quote extends AbstractModel
    {
        protected function _construct()
        {
            $this->_init(Quote::class);
        }
    }