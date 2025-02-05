<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\FormatterBundle\Twig;

use Sonata\FormatterBundle\Formatter\PoolInterface;
use Twig\Extension\RuntimeExtensionInterface;

final class TextFormatterRuntime implements RuntimeExtensionInterface
{
    private PoolInterface $pool;

    public function __construct(PoolInterface $pool)
    {
        $this->pool = $pool;
    }

    public function transform(string $text, string $type): string
    {
        return $this->pool->transform($type, $text);
    }
}
