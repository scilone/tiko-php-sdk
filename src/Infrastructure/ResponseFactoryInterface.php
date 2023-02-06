<?php

namespace Scilone\TikoSDK\Infrastructure;

use Psr\Http\Message\ResponseInterface as PsrResponseInterface;

interface ResponseFactoryInterface
{
    /**
     * @throw ResponseException
     */
    public function createFromResponse(PsrResponseInterface $response): ResponseInterface;

    public function decodeResponse(PsrResponseInterface $response): array;
}
