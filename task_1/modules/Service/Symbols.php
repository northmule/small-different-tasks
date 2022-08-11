<?php

declare(strict_types=1);

namespace Coderun\SmallDifferentTasks\Service;

use function array_count_values;
use function array_slice;
use function arsort;
use function mb_str_split;

/**
 * Class Symbols
 *
 * @package Coderun\SmallDifferentTasks\Service
 */
class Symbols
{
    /**
     * Поиск второго по встречаемости символа в строке
     *
     * @return array<string, int> Символ - количество раз
     */
    public function searchForSecondMostCommonCharacterInString(string $string): array
    {
        $chars = mb_str_split($string, 1);
        $charsAndCount = array_count_values($chars);
        arsort($charsAndCount);

        return array_slice($charsAndCount, 1, 1);
    }
}
