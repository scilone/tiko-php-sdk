<?php

namespace Scilone\TikoSDK\Domain\Request\Property;

use Scilone\TikoSDK\Domain\Factory\Property\GetPropertiesResponseFactory;
use Scilone\TikoSDK\Domain\Request\AbstractRequest;
use Symfony\Component\HttpFoundation\Request;

class GetPropertiesRequest extends AbstractRequest
{
    protected const HEADERS = [
        'Content-Type' => 'application/json',
    ];

    public function getHttpMethod(): string
    {
        return Request::METHOD_POST;
    }

    public function getPath(): string
    {
        return '/api/v3/graphql/';
    }

    public function getPathParameters(): array
    {
        return [];
    }

    public function getResponseFactory(): GetPropertiesResponseFactory
    {
        return new GetPropertiesResponseFactory();
    }

    public function getBody(): ?string
    {
        return json_encode(
            [
                'operationName' => 'GET_PROPERTIES',
                'variables' => [],
                'query' => 'query GET_PROPERTIES {
                  properties {
                    id
                    __typename
                  }
                }
                ',
            ]
        );
    }
}
