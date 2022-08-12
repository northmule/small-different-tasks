<?php

declare(strict_types=1);

namespace Coderun\SmallDifferentTasks\Api\Handler;

use Coderun\SmallDifferentTasks\Common\Service\Symbols;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class SymbolHandler implements RequestHandlerInterface
{
    /**
     * @param ServerRequestInterface $request
     *
     * @return ResponseInterface
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $string = $request->getQueryParams()['string'] ?? '';
        return new JsonResponse(['result' => (new Symbols())->searchForSecondMostCommonCharacterInString($string)]);
    }
}
