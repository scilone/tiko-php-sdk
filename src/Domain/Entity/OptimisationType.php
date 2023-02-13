<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class OptimisationType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    private ?array $devicesPriority = null;
    private ?array $defaultDevicesPriority = null;

    public function getDevicesPriority(): ?array
    {
        return $this->devicesPriority;
    }

    public function setDevicesPriority(?array $devicesPriority): self
    {
        $this->devicesPriority = $devicesPriority;

        return $this;
    }

    public function getDefaultDevicesPriority(): ?array
    {
        return $this->defaultDevicesPriority;
    }

    public function setDefaultDevicesPriority(?array $defaultDevicesPriority): self
    {
        $this->defaultDevicesPriority = $defaultDevicesPriority;

        return $this;
    }
}
