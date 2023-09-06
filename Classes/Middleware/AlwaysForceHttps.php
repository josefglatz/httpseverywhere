<?php

declare(strict_types=1);

namespace Josefglatz\Httpseverywhere\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use TYPO3\CMS\Core\Http\RedirectResponse;

class AlwaysForceHttps implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        if (!$request->getAttribute('normalizedParams')->isHttps()) {
            $requestedUrl = $request->getAttribute('normalizedParams')->getRequestUrl();
            if(str_contains($requestedUrl, 'http://')) {
                $requestUrl = str_replace('http://', 'https://', $requestedUrl
                );

                return new RedirectResponse($requestUrl);
            }
        }

        return $handler->handle($request);
    }
}
