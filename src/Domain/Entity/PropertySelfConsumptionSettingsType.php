<?php

namespace Scilone\TikoSDK\Domain\Entity;

class PropertySelfConsumptionSettingsType
{
    private ?string $photovoltaic = null;
    private ?string $savings = null;
    private ?string $optimisationBoiler = null;
    private ?string $optimisationDevices = null;
    private ?string $optimisationExternalDevices = null;
    private ?string $optimisationEvc = null;

    public function getPhotovoltaic(): ?string
    {
        return $this->photovoltaic;
    }

    public function setPhotovoltaic(?string $photovoltaic): self
    {
        $this->photovoltaic = $photovoltaic;

        return $this;
    }

    public function getSavings(): ?string
    {
        return $this->savings;
    }

    public function setSavings(?string $savings): self
    {
        $this->savings = $savings;

        return $this;
    }

    public function getOptimisationBoiler(): ?string
    {
        return $this->optimisationBoiler;
    }

    public function setOptimisationBoiler(?string $optimisationBoiler): self
    {
        $this->optimisationBoiler = $optimisationBoiler;

        return $this;
    }

    public function getOptimisationDevices(): ?string
    {
        return $this->optimisationDevices;
    }

    public function setOptimisationDevices(?string $optimisationDevices): self
    {
        $this->optimisationDevices = $optimisationDevices;

        return $this;
    }

    public function getOptimisationExternalDevices(): ?string
    {
        return $this->optimisationExternalDevices;
    }

    public function setOptimisationExternalDevices(?string $optimisationExternalDevices): self
    {
        $this->optimisationExternalDevices = $optimisationExternalDevices;

        return $this;
    }

    public function getOptimisationEvc(): ?string
    {
        return $this->optimisationEvc;
    }

    public function setOptimisationEvc(?string $optimisationEvc): self
    {
        $this->optimisationEvc = $optimisationEvc;

        return $this;
    }
}
