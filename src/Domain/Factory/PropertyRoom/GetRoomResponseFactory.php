<?php

namespace Scilone\TikoSDK\Domain\Factory\PropertyRoom;

use Psr\Http\Message\ResponseInterface as PsrResponseInterface;
use Scilone\TikoSDK\Domain\Factory\AbstractResponseFactory;
use Scilone\TikoSDK\Domain\Response\PropertyRoom\GetRoomResponse;
use Scilone\TikoSDK\Infrastructure\ResponseException;
use Scilone\TikoSDK\Infrastructure\ResponseInterface;

class GetRoomResponseFactory extends AbstractResponseFactory
{
    public function createFromResponse(PsrResponseInterface $response): ResponseInterface
    {
        $data = $this->decodeResponse($response);

        if (isset($data['data']) === false) {
            throw new ResponseException('Structure error');
        }

        return new GetRoomResponse($this->generateEntityFromArray($data['data']['room']));
    }
}
