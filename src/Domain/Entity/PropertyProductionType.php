<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class PropertyProductionType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    /** @var string[]|null  */
    private ?array $eligibleDevicesTypes = null;

    public function getEligibleDevicesTypes(): ?array
    {
        return $this->eligibleDevicesTypes;
    }

    public function setEligibleDevicesTypes(?array $eligibleDevicesTypes): self
    {
        $this->eligibleDevicesTypes = $eligibleDevicesTypes;

        return $this;
    }
}
