<?php

namespace Scilone\TikoSDK\Domain\Response\Property;

use JsonSerializable;
use Scilone\TikoSDK\Domain\Entity\PropertyType;
use Scilone\TikoSDK\Infrastructure\ResponseInterface;
use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class GetPropertyModeAndRoomsResponse implements ResponseInterface, JsonSerializable
{
    use SelfJsonSerializableTrait;

    private PropertyType $property;

    public function __construct(PropertyType $property)
    {
        $this->property = $property;
    }

    public function getProperty(): PropertyType
    {
        return $this->property;
    }
}
