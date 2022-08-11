<?php

declare(strict_types=1);

namespace Coderun\SmallDifferentTasks\Controller;

use Coderun\SmallDifferentTasks\Service\Strings;
use Coderun\SmallDifferentTasks\Service\Symbols;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\ApiTools\ContentNegotiation\ViewModel;

/**
 * Class Api
 *
 * @package Coderun\SmallDifferentTasks\Controller
 */
class Api extends AbstractActionController
{
    /** @var string  */
    protected const KEY = 'result';

    /**
     * Поиск второго по встречаемости символа в строке
     *
     * @return ViewModel
     */
    public function searchSecondMostCommonCharacterAction(): ViewModel
    {
        $string = $this->getRequest()->getQuery('string', '');
        return new ViewModel([
            self::KEY => (new Symbols())->searchForSecondMostCommonCharacterInString($string),
        ]);
    }

    /**
     * Являтся полиндромом
     *
     * @return ViewModel
     */
    public function isPalindromeAction(): ViewModel
    {
        $string = $this->getRequest()->getQuery('string', '');
        return new ViewModel([
            self::KEY => (new Strings())->isPalindrome($string),
        ]);
    }
}
