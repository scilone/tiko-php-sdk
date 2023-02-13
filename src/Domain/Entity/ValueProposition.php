<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class ValueProposition implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    private ?bool $alarming = null;
    private ?bool $ecoMode = null;
    private ?bool $contribution = null;
    private ?bool $tariffOptimisation = null;

    public function getAlarming(): ?bool
    {
        return $this->alarming;
    }

    public function setAlarming(?bool $alarming): self
    {
        $this->alarming = $alarming;

        return $this;
    }

    public function getEcoMode(): ?bool
    {
        return $this->ecoMode;
    }

    public function setEcoMode(?bool $ecoMode): self
    {
        $this->ecoMode = $ecoMode;

        return $this;
    }

    public function getContribution(): ?bool
    {
        return $this->contribution;
    }

    public function setContribution(?bool $contribution): self
    {
        $this->contribution = $contribution;

        return $this;
    }

    public function getTariffOptimisation(): ?bool
    {
        return $this->tariffOptimisation;
    }

    public function setTariffOptimisation(?bool $tariffOptimisation): self
    {
        $this->tariffOptimisation = $tariffOptimisation;

        return $this;
    }
}
