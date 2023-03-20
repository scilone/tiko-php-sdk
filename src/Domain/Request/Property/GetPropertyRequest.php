<?php

namespace Scilone\TikoSDK\Domain\Request\Property;

use Scilone\TikoSDK\Domain\Factory\Property\GetPropertyResponseFactory;
use Scilone\TikoSDK\Domain\Request\AbstractRequest;
use Symfony\Component\HttpFoundation\Request;

class GetPropertyRequest extends AbstractRequest
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

    public function getResponseFactory(): GetPropertyResponseFactory
    {
        return new GetPropertyResponseFactory();
    }

    public function getBody(): ?string
    {
        return json_encode(
            [
                'operationName' => 'GET_PROPERTY',
                'variables' => [
                    'propertyId' => $this->propertyId,
                ],
                'query' => 'query GET_PROPERTY($propertyId: Int!) {
                  property(id: $propertyId) {
                    id
                    partnerId
                    name
                    zipCode
                    numberOfActiveAlarms
                    numberOfEcomodeHours
                    constructionYear
                    surfaceArea
                    floors
                    numberOfInhabitants
                    renovationYear
                    basement
                    attic
                    windows
                    thermostat
                    powerLineCommunicationEquipment
                    allInstalled
                    isNetatmoAuthorised
                    isNetatmoEnabled
                    netatmoLinkAccountUrl
                    isSinapsiEnabled
                    isSinapsiAuthorised
                    ownerPermission
                    isPhotovoltaic
                    isDecentralised
                    hasMbox
                    contribution
                    valueProposition
                    mboxDisconnected
                    organisationalUnit
                    mode
                    setting
                    co2Savings {
                      totalSavingsKg
                      __typename
                    }
                    tips {
                      id
                      __typename
                    }
                    externalDevices {
                      id
                      __typename
                    }
                    devices {
                      id
                      __typename
                    }
                    rooms {
                      id
                      __typename
                    }
                    address {
                      id
                      street
                      number
                      city
                      zipCode
                      timezone
                      __typename
                    }
                    savings {
                      ecomode
                      photovoltaic
                      tariff
                      total
                      __typename
                    }
                    selfConsumptionSettings {
                      photovoltaic
                      savings
                      optimisationBoiler
                      optimisationDevices
                      optimisationExternalDevices
                      optimisationEvc
                      __typename
                    }
                    __typename
                  }
                }',
            ]
        );
    }
}
