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

use League\CommonMark\Extension\SmartPunct\PunctuationParser as CoreParser;
use League\CommonMark\Inline\Parser\InlineParserInterface;
use League\CommonMark\InlineParserContext;

/**
 * @deprecated The league/commonmark-ext-smartpunct extension is now deprecated. All functionality has been moved into league/commonmark 1.3+, so use that instead.
 */
class PunctuationParser implements InlineParserInterface
{
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
     * @param InlineParserContext $inlineContext
     *
     * @return bool
     */
    public function parse(InlineParserContext $inlineContext): bool
    {
        return $this->coreParser->parse($inlineContext);
    }
}
