<?php

namespace Scilone\TikoSDK\Domain\Request\User;

use Scilone\TikoSDK\Domain\Factory\User\InitSessionResponseFactory;
use Scilone\TikoSDK\Domain\Request\AbstractRequest;
use Symfony\Component\HttpFoundation\Request;

class InitSessionRequest extends AbstractRequest
{
    public function getHttpMethod(): string
    {
        return Request::METHOD_OPTIONS;
    }

    public function getPath(): string
    {
        return '/api/v3/graphql/';
    }

    public function getPathParameters(): array
    {
        return [];
    }

    public function getResponseFactory(): InitSessionResponseFactory
    {
        return new InitSessionResponseFactory();
    }

    public function getBody(): ?string
    {
        return '';
    }
}
