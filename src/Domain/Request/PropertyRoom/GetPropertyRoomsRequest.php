<?php

namespace Scilone\TikoSDK\Domain\Request\PropertyRoom;

use Scilone\TikoSDK\Domain\Factory\PropertyRoom\GetPropertyRoomsResponseFactory;
use Scilone\TikoSDK\Domain\Request\AbstractRequest;
use Symfony\Component\HttpFoundation\Request;

class GetPropertyRoomsRequest extends AbstractRequest
{
    protected const HEADERS = [
        'Content-Type' => 'application/json',
    ];

    private string $propertyId;

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

    public function getResponseFactory(): GetPropertyRoomsResponseFactory
    {
        return new GetPropertyRoomsResponseFactory();
    }

    public function getBody(): ?string
    {
        return json_encode(
            [
                'operationName' => 'GET_PROPERTY_ROOMS',
                'variables' => [
                    'id' => $this->propertyId
                ],
                'query' => 'query GET_PROPERTY_ROOMS($id: Int!, $excludeRooms: [Int]) {
                  property(id: $id) {
                    id
                    mode
                    mboxDisconnected
                    isNetatmoAuthorised
                    netatmoLinkAccountUrl
                    isSinapsiEnabled
                    isSinapsiAuthorised
                    rooms(excludeRooms: $excludeRooms) {
                      id
                      name
                      type
                      color
                      heaters
                      hasTemperatureSchedule
                      currentTemperatureDegrees
                      targetTemperatureDegrees
                      heaters
                      hasTemperatureSchedule
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
                    sensorModeActive
                    sensorModeActiveUntil
                    __typename
                  }
                  __typename
                }',
            ]
        );
    }
}
