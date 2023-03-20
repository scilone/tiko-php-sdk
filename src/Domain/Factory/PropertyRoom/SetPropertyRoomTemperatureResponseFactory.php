<?php

namespace Scilone\TikoSDK\Domain\Factory\PropertyRoom;

use Psr\Http\Message\ResponseInterface as PsrResponseInterface;
use Scilone\TikoSDK\Domain\Factory\AbstractResponseFactory;
use Scilone\TikoSDK\Domain\Response\PropertyRoom\SetPropertyRoomTemperatureResponse;
use Scilone\TikoSDK\Infrastructure\ResponseException;
use Scilone\TikoSDK\Infrastructure\ResponseInterface;

class SetPropertyRoomTemperatureResponseFactory extends AbstractResponseFactory
{
    public function createFromResponse(PsrResponseInterface $response): ResponseInterface
    {
        $data = $this->decodeResponse($response);

        if (isset($data['data']) === false) {
            throw new ResponseException('Structure error');
        }

        return new SetPropertyRoomTemperatureResponse($this->generateEntityFromArray($data['data']['setRoomAdjustTemperature']));
    }
}
