<?php

declare(strict_types=1);

namespace Coderun\SmallDifferentTasks\Service;

use function strrev;
use function mb_strtolower;
use function iconv;

/**
 * Class Strings
 *
 * @package Coderun\SmallDifferentTasks\Service
 */
class Strings
{
    /**
     * Является полиндромом
     *
     * @param string $string
     *
     * @return bool
     */
    public function isPalindrome(string $string): bool
    {
        $originalString = mb_strtolower($string);
        $string = iconv('utf-8', 'windows-1251', $string);
        $string = strrev($string);
        $string = iconv('windows-1251', 'utf-8', $string);
        return $originalString === mb_strtolower($string);
    }
}
