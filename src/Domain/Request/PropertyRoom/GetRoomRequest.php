<?php

namespace Scilone\TikoSDK\Domain\Request\PropertyRoom;

use Scilone\TikoSDK\Domain\Factory\PropertyRoom\GetRoomResponseFactory;
use Scilone\TikoSDK\Domain\Request\AbstractRequest;
use Symfony\Component\HttpFoundation\Request;

class GetRoomRequest extends AbstractRequest
{
    protected const HEADERS = [
        'Content-Type' => 'application/json',
    ];
    private int $propertyId;
    private int $roomId;

    public function __construct(int $propertyId, int $roomId)
    {
        $this->propertyId = $propertyId;
        $this->roomId     = $roomId;
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

    public function getResponseFactory(): GetRoomResponseFactory
    {
        return new GetRoomResponseFactory();
    }

    public function getBody(): ?string
    {
        return json_encode(
            [
                'operationName' => 'GET_PROPERTY',
                'variables' => [
                    'roomId'     => $this->roomId,
                    'propertyId' => $this->propertyId,
                ],
                'query' => 'query GET_PROPERTY($roomId: Int!, $propertyId: Int!) {
                  room(id: $roomId, propertyId: $propertyId) {
                    id
                    name
                    type
                    heaters
                    sensors
                    hasTemperatureSchedule
                    temperatureSchedule
                    formattedTemperatureSchedule
                    currentTemperatureDegrees
                    targetTemperatureDegrees
                    humidity
                    color
                    externalDevices {
                      id
                      __typename
                    }
                    devices {
                      id
                      __typename
                    }
                    status {
                      disconnected
                      heatingOperating
                      heaterDisconnected
                      temporaryAdjustment
                      sensorModeActive
                      sensorModeActiveUntil
                      sensorDisconnected
                      sensorBatteryLow
                      __typename
                    }
                    __typename
                  }
                }',
            ]
        );
    }
}
