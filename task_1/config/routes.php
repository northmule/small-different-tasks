<?php

declare(strict_types=1);

use Coderun\SmallDifferentTasks\Api\Handler\HomeHandler;
use Coderun\SmallDifferentTasks\Api\Handler\StringHandler;
use Coderun\SmallDifferentTasks\Api\Handler\SymbolHandler;
use Mezzio\Application;
use Mezzio\MiddlewareFactory;
use Psr\Container\ContainerInterface;


return static function (Application $app, MiddlewareFactory $factory, ContainerInterface $container): void {
    $app->get('/', HomeHandler::class, 'page.home');
    $app->get('/api/string', StringHandler::class, 'api.string');
    $app->get('/api/symbol', SymbolHandler::class, 'api.symbol');
};
