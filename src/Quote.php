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

use League\CommonMark\Inline\Element\AbstractStringContainer;

@trigger_error('league/commonmark-ext-smartpunct is deprecated; use League\CommonMark\Extension\SmartPunct\Quote from league/commonmark 1.3+ instead', E_USER_DEPRECATED);
class_alias('League\CommonMark\Extension\SmartPunct\Quote', 'League\CommonMark\Ext\SmartPunct\Quote');

if (false) {
    /**
     * @deprecated The league/commonmark-ext-smartpunct extension is now deprecated. All functionality has been moved into league/commonmark 1.3+, so use that instead.
     */
    final class Quote extends AbstractStringContainer
    {
    }
}
