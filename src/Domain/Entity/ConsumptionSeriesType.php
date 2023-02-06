<?php

namespace Scilone\TikoSDK\Domain\Entity;

class ConsumptionSeriesType
{
    /** @var Int[]|null  */
    private ?array $vDisconnected = null;
    /** @var Float[]|null  */
    private ?array $vConsumption = null;
    /** @var Int[]|null  */
    private ?array $ts = null;

    public function getVDisconnected(): ?array
    {
        return $this->vDisconnected;
    }

    public function setVDisconnected(?array $vDisconnected): self
    {
        $this->vDisconnected = $vDisconnected;

        return $this;
    }

    public function getVConsumption(): ?array
    {
        return $this->vConsumption;
    }

    public function setVConsumption(?array $vConsumption): self
    {
        $this->vConsumption = $vConsumption;

        return $this;
    }

    public function getTs(): ?array
    {
        return $this->ts;
    }

    public function setTs(?array $ts): self
    {
        $this->ts = $ts;

        return $this;
    }
}
