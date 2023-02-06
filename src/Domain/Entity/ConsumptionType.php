<?php

namespace Scilone\TikoSDK\Domain\Entity;

class ConsumptionType
{
    private ?string $currency = null;
    private ?float $averageExternalTemperature = null;
    private ?float $cost = null;
    private ?int $start = null;
    private ?int $end = null;
    private ?float $energyWh = null;
    private ?string $resolution = null;
    private ?ConsumptionSeriesType $series = null;

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getAverageExternalTemperature(): ?float
    {
        return $this->averageExternalTemperature;
    }

    public function setAverageExternalTemperature(?float $averageExternalTemperature): self
    {
        $this->averageExternalTemperature = $averageExternalTemperature;

        return $this;
    }

    public function getCost(): ?float
    {
        return $this->cost;
    }

    public function setCost(?float $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

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

    public function getResolution(): ?string
    {
        return $this->resolution;
    }

    public function setResolution(?string $resolution): self
    {
        $this->resolution = $resolution;

        return $this;
    }

    public function getSeries(): ?ConsumptionSeriesType
    {
        return $this->series;
    }

    public function setSeries(?ConsumptionSeriesType $series): self
    {
        $this->series = $series;

        return $this;
    }
}
