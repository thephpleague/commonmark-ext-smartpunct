<?php

/*
 * This file is part of the league/commonmark-ext-smartpunct package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * Original code based on the CommonMark JS reference parser (http://bitly.com/commonmark-js)
 *  - (c) John MacFarlane
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Ext\SmartPunct;

use League\CommonMark\Delimiter\DelimiterInterface;
use League\CommonMark\Delimiter\Processor\DelimiterProcessorInterface;
use League\CommonMark\Extension\SmartPunct\Quote;
use League\CommonMark\Extension\SmartPunct\QuoteProcessor as CoreProcessor;
use League\CommonMark\Inline\Element\AbstractStringContainer;

/**
 * @deprecated The league/commonmark-ext-smartpunct extension is now deprecated. All functionality has been moved into league/commonmark 1.3+, so use that instead.
 */
final class QuoteProcessor implements DelimiterProcessorInterface
{
    /** @var CoreProcessor */
    private $coreProcessor;

    private function __construct(CoreProcessor $coreProcessor)
    {
        @trigger_error(sprintf('league/commonmark-ext-external-link is deprecated; use %s from league/commonmark 1.3+ instead', CoreProcessor::class), E_USER_DEPRECATED);
        $this->coreProcessor = $coreProcessor;
    }

    /**
     * {@inheritdoc}
     */
    public function getOpeningCharacter(): string
    {
        return $this->coreProcessor->getOpeningCharacter();
    }

    /**
     * {@inheritdoc}
     */
    public function getClosingCharacter(): string
    {
        return $this->coreProcessor->getClosingCharacter();
    }

    /**
     * {@inheritdoc}
     */
    public function getMinLength(): int
    {
        return $this->coreProcessor->getMinLength();
    }

    /**
     * {@inheritdoc}
     */
    public function getDelimiterUse(DelimiterInterface $opener, DelimiterInterface $closer): int
    {
        return $this->coreProcessor->getDelimiterUse($opener, $closer);
    }

    /**
     * {@inheritdoc}
     */
    public function process(AbstractStringContainer $opener, AbstractStringContainer $closer, int $delimiterUse)
    {
        return $this->coreProcessor->process($opener, $closer, $delimiterUse);
    }

    /**
     * Create a double-quote processor
     *
     * @param string $opener
     * @param string $closer
     *
     * @return QuoteProcessor
     */
    public static function createDoubleQuoteProcessor(string $opener = Quote::DOUBLE_QUOTE_OPENER, string $closer = Quote::DOUBLE_QUOTE_CLOSER): self
    {
        return new self(CoreProcessor::createDoubleQuoteProcessor($opener, $closer));
    }

    /**
     * Create a single-quote processor
     *
     * @param string $opener
     * @param string $closer
     *
     * @return QuoteProcessor
     */
    public static function createSingleQuoteProcessor(string $opener = Quote::SINGLE_QUOTE_OPENER, string $closer = Quote::SINGLE_QUOTE_CLOSER): self
    {
        return new self(CoreProcessor::createSingleQuoteProcessor($opener, $closer));
    }
}
