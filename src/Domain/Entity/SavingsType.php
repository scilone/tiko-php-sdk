<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class SavingsType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    private ?float $ecomode = null;
    private ?float $photovoltaic = null;
    private ?float $tariff = null;
    private ?float $total = null;

    public function getEcomode(): ?float
    {
        return $this->ecomode;
    }

    public function setEcomode(?float $ecomode): self
    {
        $this->ecomode = $ecomode;

        return $this;
    }

    public function getPhotovoltaic(): ?float
    {
        return $this->photovoltaic;
    }

    public function setPhotovoltaic(?float $photovoltaic): self
    {
        $this->photovoltaic = $photovoltaic;

        return $this;
    }

    public function getTariff(): ?float
    {
        return $this->tariff;
    }

    public function setTariff(?float $tariff): self
    {
        $this->tariff = $tariff;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(?float $total): self
    {
        $this->total = $total;

        return $this;
    }
}
