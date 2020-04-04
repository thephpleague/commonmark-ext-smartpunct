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

use League\CommonMark\ConfigurableEnvironmentInterface;
use League\CommonMark\Extension\ExtensionInterface;
use League\CommonMark\Extension\SmartPunct\SmartPunctExtension as CoreExtension;

/**
 * @deprecated The league/commonmark-ext-smartpunct extension is now deprecated. All functionality has been moved into league/commonmark 1.3+, so use that instead.
 */
class SmartPunctExtension implements ExtensionInterface
{
    private $coreExtension;

    public function __construct()
    {
        @trigger_error(sprintf('league/commonmark-ext-smartpunct is deprecated; use %s from league/commonmark 1.3+ instead', CoreExtension::class), E_USER_DEPRECATED);
        $this->coreExtension = new CoreExtension();
    }

    public function register(ConfigurableEnvironmentInterface $environment)
    {
        $this->coreExtension->register($environment);
    }
}
