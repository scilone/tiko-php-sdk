<?php

namespace Scilone\TikoSDK\Domain\Entity;

class Co2SavingsType
{
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
