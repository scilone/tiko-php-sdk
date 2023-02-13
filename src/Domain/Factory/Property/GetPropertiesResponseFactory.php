<?php

namespace Scilone\TikoSDK\Domain\Factory\Property;

use Psr\Http\Message\ResponseInterface as PsrResponseInterface;
use Scilone\TikoSDK\Domain\Entity\PropertyType;
use Scilone\TikoSDK\Domain\Factory\AbstractResponseFactory;
use Scilone\TikoSDK\Domain\Response\Property\GetPropertiesResponse;
use Scilone\TikoSDK\Infrastructure\ResponseException;
use Scilone\TikoSDK\Infrastructure\ResponseInterface;

class GetPropertiesResponseFactory extends AbstractResponseFactory
{
    public function createFromResponse(PsrResponseInterface $response): ResponseInterface
    {
        $data = $this->decodeResponse($response);

        if (isset($data['data']) === false) {
            throw new ResponseException('Structure error');
        }

        return new GetPropertiesResponse(
            $this->generateEntityFromArray($data['data']['settings']),
            $this->generateProperties($data['data']['properties'])
        );
    }

    /**
     * @return PropertyType[]
     */
    private function generateProperties(array $data): array
    {
        $properties = [];
        foreach ($data as $property) {
            $properties[] = $this->generateEntityFromArray($property);
        }

        return $properties;
    }
}
