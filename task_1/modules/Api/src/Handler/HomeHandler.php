<?php

declare(strict_types=1);

namespace Coderun\SmallDifferentTasks\Api\Handler;

use Laminas\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class HomeHandler implements RequestHandlerInterface
{
    /**
     * @param ServerRequestInterface $request
     *
     * @return ResponseInterface
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return new HtmlResponse($this->getHtmlPage());
    }

    /**
     * @return string
     */
    protected function getHtmlPage(): string
    {
        return <<<HTML
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title></title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<h2>API</h2>
<p>/api/symbol?string={поиск_второго_по_встречаемости_символа_в_строке}</p>
<p>/api/string?string={проверка_строки_на_полиндром}</p>
</body>
</html>
HTML;
    }
}
