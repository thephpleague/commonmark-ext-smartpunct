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

use League\CommonMark\Extension\SmartPunct\Quote;
use League\CommonMark\Extension\SmartPunct\QuoteParser as CoreParser;
use League\CommonMark\Inline\Parser\InlineParserInterface;
use League\CommonMark\InlineParserContext;

/**
 * @deprecated The league/commonmark-ext-smartpunct extension is now deprecated. All functionality has been moved into league/commonmark 1.3+, so use that instead.
 */
final class QuoteParser implements InlineParserInterface
{
    public const DOUBLE_QUOTES = [Quote::DOUBLE_QUOTE, Quote::DOUBLE_QUOTE_OPENER, Quote::DOUBLE_QUOTE_CLOSER];
    public const SINGLE_QUOTES = [Quote::SINGLE_QUOTE, Quote::SINGLE_QUOTE_OPENER, Quote::SINGLE_QUOTE_CLOSER];

    private $coreParser;

    public function __construct()
    {
        @trigger_error(sprintf('league/commonmark-ext-smartpunct is deprecated; use %s from league/commonmark 1.3+ instead', CoreParser::class), E_USER_DEPRECATED);
        $this->coreParser = new CoreParser();
    }

    /**
     * @return string[]
     */
    public function getCharacters(): array
    {
        return $this->coreParser->getCharacters();
    }

    /**
     * Normalizes any quote characters found and manually adds them to the delimiter stack
     *
     * @param InlineParserContext $inlineContext
     *
     * @return bool
     */
    public function parse(InlineParserContext $inlineContext): bool
    {
        return $this->coreParser->parse($inlineContext);
    }
}
