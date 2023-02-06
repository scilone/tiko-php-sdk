<?php

namespace Scilone\TikoSDK\Domain\Request\Property;

use Scilone\TikoSDK\Domain\Factory\Property\GetPropertyModeAndRoomsResponseFactory;
use Scilone\TikoSDK\Domain\Request\AbstractRequest;
use Symfony\Component\HttpFoundation\Request;

class GetPropertyModeAndRoomsRequest extends AbstractRequest
{
    protected const HEADERS = [
        'Content-Type' => 'application/json',
    ];

    private int $propertyId;

    public function __construct(string $propertyId)
    {
        $this->propertyId = $propertyId;
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

    public function getResponseFactory(): GetPropertyModeAndRoomsResponseFactory
    {
        return new GetPropertyModeAndRoomsResponseFactory();
    }

    public function getBody(): ?string
    {
        return json_encode(
            [
                'operationName' => 'GET_PROPERTY_MODE_AND_ROOMS',
                'variables' => [
                    'id' => $this->propertyId
                ],
                'query' => 'query GET_PROPERTY_MODE_AND_ROOMS($id: Int!, $excludeRooms: [Int]) {
                  property(id: $id) {
                    id
                    mode
                    mboxDisconnected
                    rooms(excludeRooms: $excludeRooms) {
                      id
                      name
                      type
                      color
                      heaters
                      hasTemperatureSchedule
                      currentTemperatureDegrees
                      targetTemperatureDegrees
                      humidity
                      sensors
                      ...Status
                      __typename
                    }
                    __typename
                  }
                }
                fragment Status on RoomType {
                  status {
                    disconnected
                    heaterDisconnected
                    heatingOperating
                    sensorBatteryLow
                    sensorDisconnected
                    temporaryAdjustment
                    __typename
                  }
                  __typename
                }',
            ]
        );
    }
}
