<?php

namespace Scilone\TikoSDK\Domain\Factory\User;

use Psr\Http\Message\ResponseInterface as PsrResponseInterface;
use Scilone\TikoSDK\Domain\Factory\AbstractResponseFactory;
use Scilone\TikoSDK\Domain\Response\User\InitSessionResponse;
use Scilone\TikoSDK\Infrastructure\ResponseInterface;

class InitSessionResponseFactory extends AbstractResponseFactory
{
    public function createFromResponse(PsrResponseInterface $response): ResponseInterface
    {
        return new InitSessionResponse();
    }
}
