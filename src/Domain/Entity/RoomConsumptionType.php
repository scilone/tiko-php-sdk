<?php

namespace Scilone\TikoSDK\Domain\Entity;

class RoomConsumptionType
{
    private ?int $id = null;
    private ?string $name = null;
    private ?float $energyWh = null;
    private ?float $energyKwh = null;
    private ?string $color = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEnergyWh(): ?float
    {
        return $this->energyWh;
    }

    public function setEnergyWh(?float $energyWh): self
    {
        $this->energyWh = $energyWh;

        return $this;
    }

    public function getEnergyKwh(): ?float
    {
        return $this->energyKwh;
    }

    public function setEnergyKwh(?float $energyKwh): self
    {
        $this->energyKwh = $energyKwh;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }
}
