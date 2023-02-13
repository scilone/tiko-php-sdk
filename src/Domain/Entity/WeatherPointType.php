<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class WeatherPointType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    private ?int $weatherId = null;
    private ?string $description = null;
    private ?string $city = null;
    private ?float $temperature = null;
    private ?float $minTemperature = null;
    private ?float $maxTemperature = null;
    private ?float $humidity = null;
    private ?float $cloudiness = null;
    private ?float $windSpeed = null;
    private ?bool $isNightTime = null;
    private ?int $timestamp = null;

    public function getWeatherId(): ?int
    {
        return $this->weatherId;
    }

    public function setWeatherId(?int $weatherId): self
    {
        $this->weatherId = $weatherId;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getTemperature(): ?float
    {
        return $this->temperature;
    }

    public function setTemperature(?float $temperature): self
    {
        $this->temperature = $temperature;

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

    public function getHumidity(): ?float
    {
        return $this->humidity;
    }

    public function setHumidity(?float $humidity): self
    {
        $this->humidity = $humidity;

        return $this;
    }

    public function getCloudiness(): ?float
    {
        return $this->cloudiness;
    }

    public function setCloudiness(?float $cloudiness): self
    {
        $this->cloudiness = $cloudiness;

        return $this;
    }

    public function getWindSpeed(): ?float
    {
        return $this->windSpeed;
    }

    public function setWindSpeed(?float $windSpeed): self
    {
        $this->windSpeed = $windSpeed;

        return $this;
    }

    public function getIsNightTime(): ?bool
    {
        return $this->isNightTime;
    }

    public function setIsNightTime(?bool $isNightTime): self
    {
        $this->isNightTime = $isNightTime;

        return $this;
    }

    public function getTimestamp(): ?int
    {
        return $this->timestamp;
    }

    public function setTimestamp(?int $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }
}
