<?php

declare(strict_types=1);

use Laminas\Mvc\Application;

chdir(dirname(__DIR__));
require __DIR__ . '/../vendor/autoload.php';


(function () {
    Application::init()->run();
})();