<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class TemperatureSeriesType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    private ?array $vDisconnected = null;
    private ?array $vMeasuredTemperature = null;
    private ?array $vTargetTemperature = null;
    private ?array $vMode = null;
    private ?array $ts = null;

    public function getVDisconnected(): ?array
    {
        return $this->vDisconnected;
    }

    public function setVDisconnected(?array $vDisconnected): self
    {
        $this->vDisconnected = $vDisconnected;

        return $this;
    }

    public function getVMeasuredTemperature(): ?array
    {
        return $this->vMeasuredTemperature;
    }

    public function setVMeasuredTemperature(?array $vMeasuredTemperature): self
    {
        $this->vMeasuredTemperature = $vMeasuredTemperature;

        return $this;
    }

    public function getVTargetTemperature(): ?array
    {
        return $this->vTargetTemperature;
    }

    public function setVTargetTemperature(?array $vTargetTemperature): self
    {
        $this->vTargetTemperature = $vTargetTemperature;

        return $this;
    }

    public function getVMode(): ?array
    {
        return $this->vMode;
    }

    public function setVMode(?array $vMode): self
    {
        $this->vMode = $vMode;

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
