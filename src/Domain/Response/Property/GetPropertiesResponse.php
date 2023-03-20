<?php

namespace Scilone\TikoSDK\Domain\Response\Property;

use JsonSerializable;
use Scilone\TikoSDK\Infrastructure\ResponseInterface;
use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class GetPropertiesResponse implements ResponseInterface, JsonSerializable
{
    use SelfJsonSerializableTrait;

    private array $properties;

    public function __construct(array $properties)
    {
        $this->properties = $properties;
    }

    public function getProperties(): array
    {
        return $this->properties;
    }
}
