<?php

declare(strict_types=1);

$rootDir = realpath(__DIR__.'/../../');

require $rootDir.'/vendor/autoload.php';

$symbols = new \Coderun\SmallDifferentTasks\Service\Symbols();

var_export($symbols->searchForSecondMostCommonCharacterInString('abccdceffgihhhhj'));