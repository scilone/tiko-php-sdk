<?php

namespace Scilone\TikoSDK\Domain\Request\Property;

use Scilone\TikoSDK\Domain\Factory\Property\SetPropertyModeResponseFactory;
use Scilone\TikoSDK\Domain\Request\AbstractRequest;
use Symfony\Component\HttpFoundation\Request;

class SetPropertyModeRequest extends AbstractRequest
{
    protected const HEADERS = [
        'Content-Type' => 'application/json',
    ];

    private int    $propertyId;
    private string $mode;

    public function __construct(string $propertyId, string $mode)
    {
        $this->propertyId = $propertyId;
        $this->mode       = $mode;
    }

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

    public function getResponseFactory(): SetPropertyModeResponseFactory
    {
        return new SetPropertyModeResponseFactory();
    }

    public function getBody(): ?string
    {
        return json_encode(
            [
                'operationName' => 'SET_PROPERTY_MODE',
                'variables' => [
                    'propertyId' => $this->propertyId,
                    'mode'       => $this->mode,
                ],
                'query' => 'mutation SET_PROPERTY_MODE($propertyId: Int!, $mode: String!) {
                  setPropertyMode(input: { propertyId: $propertyId, mode: $mode }) {
                    id
                    mode
                    __typename
                  }
                }',
            ]
        );
    }
}
