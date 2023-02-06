<?php

namespace Scilone\TikoSDK\Domain\Entity;

class AdjustTemperatureType
{
    private ?bool $active = null;
    private ?float $temperature = null;
    private ?int $endDateTime = null;

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getTemperature(): ?float
    {
        return $this->temperature;
    }

    public function setTemperature(?float $temperature): self
    {
        $this->temperature = $temperature;

        return $this;
    }

    public function getEndDateTime(): ?int
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?int $endDateTime): self
    {
        $this->endDateTime = $endDateTime;

        return $this;
    }
}
