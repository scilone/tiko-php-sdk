<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class AlarmsSensorsSettingsType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    private ?int $id = null;
    private ?string $mac = null;
    private ?bool $temperatureEnabled = null;
    private ?float $minTemperature = null;
    private ?float $maxTemperature = null;
    private ?bool $humidityEnabled = null;
    private ?float $minHumidity = null;
    private ?float $maxHumidity = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getMac(): ?string
    {
        return $this->mac;
    }

    public function setMac(?string $mac): self
    {
        $this->mac = $mac;

        return $this;
    }

    public function getTemperatureEnabled(): ?bool
    {
        return $this->temperatureEnabled;
    }

    public function setTemperatureEnabled(?bool $temperatureEnabled): self
    {
        $this->temperatureEnabled = $temperatureEnabled;

        return $this;
    }

    public function getMinTemperature(): ?float
    {
        return $this->minTemperature;
    }

    public function setMinTemperature(?float $minTemperature): self
    {
        $this->minTemperature = $minTemperature;

        return $this;
    }

    public function getMaxTemperature(): ?float
    {
        return $this->maxTemperature;
    }

    public function setMaxTemperature(?float $maxTemperature): self
    {
        $this->maxTemperature = $maxTemperature;

        return $this;
    }

    public function getHumidityEnabled(): ?bool
    {
        return $this->humidityEnabled;
    }

    public function setHumidityEnabled(?bool $humidityEnabled): self
    {
        $this->humidityEnabled = $humidityEnabled;

        return $this;
    }

    public function getMinHumidity(): ?float
    {
        return $this->minHumidity;
    }

    public function setMinHumidity(?float $minHumidity): self
    {
        $this->minHumidity = $minHumidity;

        return $this;
    }

    public function getMaxHumidity(): ?float
    {
        return $this->maxHumidity;
    }

    public function setMaxHumidity(?float $maxHumidity): self
    {
        $this->maxHumidity = $maxHumidity;

        return $this;
    }
}
