<?php

namespace Scilone\TikoSDK\Domain\Request;

use Scilone\TikoSDK\Domain\Factory\Property\GetPropertiesResponseFactory;
use Symfony\Component\HttpFoundation\Request;

class QueryRequest extends AbstractRequest
{
    private array $variables = [];

    private bool $getSettings = true;
    private bool $getProperty = true;

    protected const HEADERS = [
        'Content-Type' => 'application/json',
    ];

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

    public function getResponseFactory(): GetPropertiesResponseFactory
    {
        return new GetPropertiesResponseFactory();
    }

    public function getBody(): ?string
    {
        [$querySettings, $queryProperty] = $this->getQueries();
        [$paramProperty] = $this->getParams();
        [$fragmentSettings, $fragmentProperty] = $this->getFragments();

        return json_encode(
            [
                'operationName' => 'QUERY',
                'variables' => $this->variables,
                'query' => "query QUERY($paramProperty) {
                  $querySettings
                  $queryProperty
                }
                $fragmentSettings
                $fragmentProperty
                ",
            ]
        );
    }

    private function getParams(): array
    {
        return [
            $this->getProperty ? '$propertyId: Int!' : ''
        ];
    }

    private function getQueries(): array
    {
        return [
            $this->getSettings ? '...Settings' : '',
            $this->getProperty ? '...Property' : ''
        ];
    }

    private function getFragments(): array
    {
        return [
            $this->getSettings ? $this->getSettingsFragment() : '',
            $this->getProperty ? $this->getPropertyFragment() : '',
        ];
    }

    private function getSettingsFragment(): string
    {
        return 'fragment Settings on Query {
                  settings {
                    currency
                    currentYear
                    timezone
                    languages
                    client {
                      code
                      name
                      legalName
                      brandName
                      copyrightUrl
                      legalPageUrl
                      __typename
                    }
                    auth {
                      isSmsEnabled
                      __typename
                    }
                    mystrom {
                      isEnabled
                      redirectUri
                      linkAccountUrl
                      storeUrl
                      webUrl
                      __typename
                    }
                    notifications {
                      isAppEnabled
                      isSmsEnabled
                      isEmailEnabled
                      __typename
                    }
                    support {
                      subjects {
                        value
                        label
                        __typename
                      }
                      phone
                      email
                      hours
                      emergencyPhone
                      emergencyEmail
                      serviceActive
                      sysMessage
                      content
                      contentMobile
                    }
                    benchmark {
                      isEnabled
                      __typename
                    }
                    weather {
                      isEnabled
                      __typename
                    }
                    __typename
                  }
                  __typename
                }';
    }

    private function getPropertyFragment(): string
    {
        return 'fragment Property on Query {
          property(id: $propertyId) {
            id
            co2Savings {
              totalSavingsKg
              __typename
            }
            faq {
              groups {
                id
                name
                contents {
                  id
                  question
                  answer
                  __typename
                }
                __typename
              }
              __typename
            }
            alarms {
              devicesSettings {
                id
                mac
                enabled
                __typename
              }
              sensorsSettings {
                id
                mac
                temperatureEnabled
                minTemperature
                maxTemperature
                humidityEnabled
                minHumidity
                maxHumidity
                __typename
              }
              communication {
                id
                notification
                sms
                email
                __typename
              }
              history {
                id
                openDate
                closeDate
                code
                message
                deviceId
                deviceMac
                hwType
                __typename
              }
              __typename
            }
            optimisation {
              devicesPriority
              defaultDevicesPriority
              __typename
            }
            savings {
              ecomode
              photovoltaic
              tariff
              total
              __typename
            }
            tips {
              id
              tip
              __typename
            }
            externalDevices {
              id
              partnerId
              name
              mac
              isOn
              isOffline
              isPvLocked
              isPvMode
              consumption
              __typename
            }
            __typename
          }
          __typename
        }';
    }

    public function setGetSettings(bool $getSettings): void
    {
        $this->getSettings = $getSettings;
    }

    public function setGetProperty(bool $getProperty): void
    {
        $this->getProperty = $getProperty;
    }

    public function addVariable(string $key, $value): void
    {
        $this->variables[$key] = $value;
    }
}
