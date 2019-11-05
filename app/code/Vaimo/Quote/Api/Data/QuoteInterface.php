<?php

namespace Vaimo\Quote\Api\Data;
use Magento\Framework\Api\ExtensibleDataInterface;
/**
 * Interface Quote
 * @api
 * @since 0.0.1
 */
interface QuoteInterface extends ExtensibleDataInterface
{
    const QUOTE_ID = 'quote_id';

    /**
     * Retrieve quote identifier
     *
     * @return int
     */
    public function getQuoteId();

    /**
     * Set quote identifier
     *
     * @param int $quoteId
     * @return $this
     */
    public function setQuoteId($quoteId);
}