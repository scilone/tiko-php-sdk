<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class FastConsumptionSummaryType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    private ?int $start = null;
    private ?int $end = null;
    private ?float $energyWh = null;
    private ?float $energyKwh = null;
    /** @var RoomConsumptionType[]|null  */
    private ?array $roomsConsumption = null;
    private ?string $resolution = null;

    public function getStart(): ?int
    {
        return $this->start;
    }

    public function setStart(?int $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getEnd(): ?int
    {
        return $this->end;
    }

    public function setEnd(?int $end): self
    {
        $this->end = $end;

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

    public function getRoomsConsumption(): ?array
    {
        return $this->roomsConsumption;
    }

    public function setRoomsConsumption(?array $roomsConsumption): self
    {
        $this->roomsConsumption = $roomsConsumption;

        return $this;
    }

    public function getResolution(): ?string
    {
        return $this->resolution;
    }

    public function setResolution(?string $resolution): self
    {
        $this->resolution = $resolution;

        return $this;
    }
}
