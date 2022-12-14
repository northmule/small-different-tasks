<?php

declare(strict_types=1);

namespace Coderun\SmallDifferentTasks\Api;

use Coderun\SmallDifferentTasks\Api\Handler\HomeHandler;
use Coderun\SmallDifferentTasks\Api\Handler\StringHandler;
use Coderun\SmallDifferentTasks\Api\Handler\SymbolHandler;

/**
 * The configuration provider for the App module
 *
 * @see https://docs.laminas.dev/laminas-component-installer/
 */
class ConfigProvider
{
    /**
     * Returns the configuration array
     *
     * To add a bit of a structure, each section is defined in a separate
     * method which returns an array with its configuration.
     */
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencies(),
            'templates'    => $this->getTemplates(),
        ];
    }

    /**
     * Returns the container dependencies
     */
    public function getDependencies(): array
    {
        return [
            'invokables' => [
                StringHandler::class => StringHandler::class,
                SymbolHandler::class => SymbolHandler::class,
                HomeHandler::class   => HomeHandler::class,
            ],
        ];
    }

    /**
     * Returns the templates configuration
     */
    public function getTemplates(): array
    {
        return [];
    }
}
