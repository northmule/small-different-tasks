<?php

declare(strict_types=1);

namespace Coderun\SmallDifferentTasks\Common;

use Coderun\SmallDifferentTasks\Common\Service\Strings;
use Coderun\SmallDifferentTasks\Service\Symbols;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencies(),
        ];
    }

    /**
     * Returns the container dependencies
     */
    public function getDependencies(): array
    {
        return [
            'invokables' => [
                Strings::class => Strings::class,
                Symbols::class => Symbols::class,
            ],
        ];
    }
}
