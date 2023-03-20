<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class RoomStatusType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    private ?bool $disconnected = null;
    private ?bool $heatingOperating = null;
    private ?bool $heaterDisconnected = null;
    private ?bool $temporaryAdjustment = null;
    private ?bool $sensorModeActive = null;
    private ?bool $sensorModeActiveUntil = null;
    private ?bool $sensorDisconnected = null;
    private ?bool $sensorBatteryLow = null;

    public function getDisconnected(): ?bool
    {
        return $this->disconnected;
    }

    public function setDisconnected(?bool $disconnected): self
    {
        $this->disconnected = $disconnected;

        return $this;
    }

    public function getHeatingOperating(): ?bool
    {
        return $this->heatingOperating;
    }

    public function setHeatingOperating(?bool $heatingOperating): self
    {
        $this->heatingOperating = $heatingOperating;

        return $this;
    }

    public function getHeaterDisconnected()
    {
        return $this->heaterDisconnected;
    }

    public function setHeaterDisconnected($heaterDisconnected)
    {
        $this->heaterDisconnected = $heaterDisconnected;

        return $this;
    }

    public function getTemporaryAdjustment()
    {
        return $this->temporaryAdjustment;
    }

    public function setTemporaryAdjustment($temporaryAdjustment)
    {
        $this->temporaryAdjustment = $temporaryAdjustment;

        return $this;
    }

    public function getSensorModeActive()
    {
        return $this->sensorModeActive;
    }

    public function setSensorModeActive($sensorModeActive)
    {
        $this->sensorModeActive = $sensorModeActive;

        return $this;
    }

    public function getSensorModeActiveUntil()
    {
        return $this->sensorModeActiveUntil;
    }

    public function setSensorModeActiveUntil($sensorModeActiveUntil)
    {
        $this->sensorModeActiveUntil = $sensorModeActiveUntil;

        return $this;
    }

    public function getSensorDisconnected()
    {
        return $this->sensorDisconnected;
    }

    public function setSensorDisconnected($sensorDisconnected)
    {
        $this->sensorDisconnected = $sensorDisconnected;

        return $this;
    }

    public function getSensorBatteryLow()
    {
        return $this->sensorBatteryLow;
    }

    public function setSensorBatteryLow($sensorBatteryLow)
    {
        $this->sensorBatteryLow = $sensorBatteryLow;

        return $this;
    }
}
