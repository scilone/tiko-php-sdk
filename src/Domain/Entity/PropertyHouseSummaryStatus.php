<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class PropertyHouseSummaryStatus implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    private ?string $shortOrder = null;
    private ?string $deviceGroup = null;
    private ?string $title = null;
    private ?string $active = null;
    private ?string $activePaths = null;
    private ?string $total = null;
    private ?string $soc = null;

    public function getShortOrder(): ?string
    {
        return $this->shortOrder;
    }

    public function setShortOrder(?string $shortOrder): self
    {
        $this->shortOrder = $shortOrder;

        return $this;
    }

    public function getDeviceGroup(): ?string
    {
        return $this->deviceGroup;
    }

    public function setDeviceGroup(?string $deviceGroup): self
    {
        $this->deviceGroup = $deviceGroup;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getActive(): ?string
    {
        return $this->active;
    }

    public function setActive(?string $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getActivePaths(): ?string
    {
        return $this->activePaths;
    }

    public function setActivePaths(?string $activePaths): self
    {
        $this->activePaths = $activePaths;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(?string $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getSoc(): ?string
    {
        return $this->soc;
    }

    public function setSoc(?string $soc): self
    {
        $this->soc = $soc;

        return $this;
    }
}
