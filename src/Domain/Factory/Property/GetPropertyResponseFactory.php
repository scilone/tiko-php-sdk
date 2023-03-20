<?php

namespace Scilone\TikoSDK\Domain\Factory\Property;

use Psr\Http\Message\ResponseInterface as PsrResponseInterface;
use Scilone\TikoSDK\Domain\Factory\AbstractResponseFactory;
use Scilone\TikoSDK\Domain\Response\Property\GetPropertiesResponse;
use Scilone\TikoSDK\Infrastructure\ResponseException;
use Scilone\TikoSDK\Infrastructure\ResponseInterface;

class GetPropertyResponseFactory extends AbstractResponseFactory
{
    public function createFromResponse(PsrResponseInterface $response): ResponseInterface
    {
        $data = $this->decodeResponse($response);

        if (isset($data['data']) === false) {
            throw new ResponseException('Structure error');
        }

        return new GetPropertiesResponse(
            $this->generateEntityFromArray($data['data']['property'])
        );
    }
}
