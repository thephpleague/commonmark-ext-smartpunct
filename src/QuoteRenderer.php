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

use League\CommonMark\ElementRendererInterface;
use League\CommonMark\Extension\SmartPunct\QuoteRenderer as CoreRenderer;
use League\CommonMark\HtmlElement;
use League\CommonMark\Inline\Element\AbstractInline;
use League\CommonMark\Inline\Renderer\InlineRendererInterface;

/**
 * @deprecated The league/commonmark-ext-smartpunct extension is now deprecated. All functionality has been moved into league/commonmark 1.3+, so use that instead.
 */
final class QuoteRenderer implements InlineRendererInterface
{
    private $coreRenderer;

    public function __construct()
    {
        @trigger_error(sprintf('league/commonmark-ext-smartpunct is deprecated; use %s from league/commonmark 1.3+ instead', CoreRenderer::class), E_USER_DEPRECATED);
        $this->coreRenderer = new CoreRenderer();
    }

    /**
     * @param AbstractInline           $inline
     * @param ElementRendererInterface $htmlRenderer
     *
     * @return HtmlElement|string|null
     */
    public function render(AbstractInline $inline, ElementRendererInterface $htmlRenderer)
    {
        return $this->coreRenderer->render($inline, $htmlRenderer);
    }
}
