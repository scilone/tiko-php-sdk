<?php

namespace Scilone\TikoSDK\Domain\Entity;

class TemperatureType
{
    private $averageExternalTemperature = null;
    private ?int $start = null;
    private ?int $end = null;
    private ?string $resolution = null;
    private ?TemperatureSeriesType $series = null;

    public function getAverageExternalTemperature()
    {
        return $this->averageExternalTemperature;
    }

    public function setAverageExternalTemperature($averageExternalTemperature)
    {
        $this->averageExternalTemperature = $averageExternalTemperature;

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

    public function getResolution(): ?string
    {
        return $this->resolution;
    }

    public function setResolution(?string $resolution): self
    {
        $this->resolution = $resolution;

        return $this;
    }

    public function getSeries(): ?TemperatureSeriesType
    {
        return $this->series;
    }

    public function setSeries(?TemperatureSeriesType $series): self
    {
        $this->series = $series;

        return $this;
    }
}
