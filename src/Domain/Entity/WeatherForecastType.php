<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class WeatherForecastType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    /** @var Float[]|null  */
    private ?array $vTemperature = null;
    /** @var Int[]|null  */
    private ?array $vSymbol = null;
    /** @var Int[]|null  */
    private ?array $ts = null;

    public function getVTemperature(): ?array
    {
        return $this->vTemperature;
    }

    public function setVTemperature(?array $vTemperature): self
    {
        $this->vTemperature = $vTemperature;

        return $this;
    }

    public function getVSymbol(): ?array
    {
        return $this->vSymbol;
    }

    public function setVSymbol(?array $vSymbol): self
    {
        $this->vSymbol = $vSymbol;

        return $this;
    }

    public function getTs(): ?array
    {
        return $this->ts;
    }

    public function setTs(?array $ts): self
    {
        $this->ts = $ts;

        return $this;
    }
}
