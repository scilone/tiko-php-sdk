<?php

namespace Scilone\TikoSDK\Domain\Entity;

class OptimisationType
{
    /** @var DevicePriority[]|null  */
    private ?array $devicesPriority = null;
    /** @var defaultDevicePriority[]|null  */
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
