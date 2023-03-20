<?php

namespace Scilone\TikoSDK\Domain\Request\PropertyRoom;

use Scilone\TikoSDK\Domain\Factory\PropertyRoom\SetPropertyRoomTemperatureResponseFactory;
use Scilone\TikoSDK\Domain\Request\AbstractRequest;
use Symfony\Component\HttpFoundation\Request;

class SetPropertyRoomTemperatureRequest extends AbstractRequest
{
    protected const HEADERS = [
        'Content-Type' => 'application/json',
    ];
    private int   $propertyId;
    private int   $roomId;
    private float $temperature;

    public function __construct(int $propertyId, int $roomId, float $temperature)
    {
        $this->propertyId  = $propertyId;
        $this->roomId      = $roomId;
        $this->temperature = $temperature;
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

    public function getResponseFactory(): SetPropertyRoomTemperatureResponseFactory
    {
        return new SetPropertyRoomTemperatureResponseFactory();
    }

    public function getBody(): ?string
    {
        return json_encode(
            [
                'operationName' => 'SET_PROPERTY_ROOM_ADJUST_TEMPERATURE',
                'variables' => [
                    'roomId'      => $this->roomId,
                    'propertyId'  => $this->propertyId,
                    'temperature' => $this->temperature,
                ],
                'query' => 'mutation SET_PROPERTY_ROOM_ADJUST_TEMPERATURE(
                  $propertyId: Int!
                  $roomId: Int!
                  $temperature: Float!
                ) {
                  setRoomAdjustTemperature(
                    input: {
                      propertyId: $propertyId
                      roomId: $roomId
                      temperature: $temperature
                    }
                  ) {
                    id
                    adjustTemperature {
                      active
                      endDateTime
                      temperature
                      __typename
                    }
                    __typename
                  }
                }',
            ]
        );
    }
}
