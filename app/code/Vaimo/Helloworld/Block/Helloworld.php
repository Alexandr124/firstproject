<?php
namespace Vaimo\Helloworld\Block;

class Helloworld extends \Magento\Framework\View\Element\Template
{
    public function getHelloWorldTxt()
    {
        return 'Hello world! I guess I\'m static block';
    }
}