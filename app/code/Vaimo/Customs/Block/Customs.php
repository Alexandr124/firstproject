<?php
namespace Vaimo\Customs\Block;
class Customs extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    )
    {
        parent::__construct($context, $data);
    }
    public function getMymodule()
    {
        return 'Module Created Successfully';
    }
}
?>