<?php

namespace Scilone\TikoSDK\Domain\Response\Property;

use JsonSerializable;
use Scilone\TikoSDK\Domain\Entity\PropertyType;
use Scilone\TikoSDK\Domain\Entity\SettingsType;
use Scilone\TikoSDK\Infrastructure\ResponseInterface;
use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class GetPropertiesResponse implements ResponseInterface, JsonSerializable
{
    use SelfJsonSerializableTrait;

    private SettingsType $settingsType;
    /** @var PropertyType[] */
    private array $properties;

    public function __construct(SettingsType $settingsType, array $properties)
    {
        $this->settingsType = $settingsType;
        $this->properties   = $properties;
    }

    public function getSettingsType(): SettingsType
    {
        return $this->settingsType;
    }

    public function getProperties(): array
    {
        return $this->properties;
    }
}
