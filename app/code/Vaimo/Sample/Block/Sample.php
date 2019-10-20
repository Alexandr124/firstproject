<?php

namespace Vaimo\Sample\Block;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

/**
 * Class Sample
 * @package Vaimo\Sample\Block
 */

class Sample extends Template implements BlockInterface
{
    /**
     * @var Vaimo\Sample\Model\SampleFactory
     */
    protected $postFactory;

    /**
     * @var
     */
    protected $post;

    /**
     * Sample constructor.
     * @param Template\Context $context
     * @param Vaimo\Sample\Model\SampleFactory $postFactory
     * @param array $data
     */
    public function __construct(Template\Context $context, Vaimo\Sample\Model\SampleFactory $postFactory, array $data = [])
    {
        parent::_construct($context, $data);
        $this->postFactory = $postFactory;

    }

    /**
     * @return mixed
     */
    public function getSample()
    {
        $samples = $this->postFactory->create();
        $Id = $this->getRequest()->getParam('id');
        $this->post = $samples ->load($Id);
        return $samples;
    }
}