<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class Co2SavingsType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    private ?float $totalSavingsKg = null;

    public function getTotalSavingsKg(): ?float
    {
        return $this->totalSavingsKg;
    }

    public function setTotalSavingsKg(?float $totalSavingsKg): self
    {
        $this->totalSavingsKg = $totalSavingsKg;

        return $this;
    }
}
