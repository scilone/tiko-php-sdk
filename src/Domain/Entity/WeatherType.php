<?php

namespace Scilone\TikoSDK\Domain\Entity;

class WeatherType
{
    private ?WeatherPointType $current = null;
    /** @var WeatherPointType[]|null  */
    private ?array $forecast = null;
    /** @var WeatherPointType[]|null  */
    private ?array $hourlyForecast = null;

    public function getCurrent(): ?WeatherPointType
    {
        return $this->current;
    }

    public function setCurrent(?WeatherPointType $current): self
    {
        $this->current = $current;

        return $this;
    }

    public function getForecast(): ?array
    {
        return $this->forecast;
    }

    public function setForecast(?array $forecast): self
    {
        $this->forecast = $forecast;

        return $this;
    }

    public function getHourlyForecast(): ?array
    {
        return $this->hourlyForecast;
    }

    public function setHourlyForecast(?array $hourlyForecast): self
    {
        $this->hourlyForecast = $hourlyForecast;

        return $this;
    }
}
