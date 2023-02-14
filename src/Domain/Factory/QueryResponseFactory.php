<?php

namespace Scilone\TikoSDK\Domain\Factory;

use Psr\Http\Message\ResponseInterface as PsrResponseInterface;
use Scilone\TikoSDK\Domain\Entity\Query;
use Scilone\TikoSDK\Domain\Response\QueryResponse;
use Scilone\TikoSDK\Infrastructure\ResponseException;
use Scilone\TikoSDK\Infrastructure\ResponseInterface;

class QueryResponseFactory extends AbstractResponseFactory
{
    public function createFromResponse(PsrResponseInterface $response): ResponseInterface
    {
        $data = $this->decodeResponse($response);

        if (isset($data['data']) === false) {
            throw new ResponseException('Structure error');
        }

        $query = new Query();
        $query->setSettings(isset($data['data']['settings']) ? $this->generateEntityFromArray($data['data']['settings']) : null);

        return new QueryResponse($query);
    }
}
