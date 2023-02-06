<?php

namespace Scilone\TikoSDK\Domain\Response\Property;

use Scilone\TikoSDK\Domain\Entity\PropertyType;
use Scilone\TikoSDK\Infrastructure\ResponseInterface;

class GetPropertyModeAndRoomsResponse implements ResponseInterface
{
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
