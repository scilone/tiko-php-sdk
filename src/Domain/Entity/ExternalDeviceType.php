<?php

namespace Scilone\TikoSDK\Domain\Entity;

class ExternalDeviceType
{
    private ?string $id = null;
    private ?int $partnerId = null;
    private ?string $name = null;
    private ?string $mac = null;
    private ?bool $isOn = null;
    private ?bool $isOffline = null;
    private ?bool $isPvLocked = null;
    private ?bool $isPvMode = null;
    private ?float $consumption = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getPartnerId(): ?int
    {
        return $this->partnerId;
    }

    public function setPartnerId(?int $partnerId): self
    {
        $this->partnerId = $partnerId;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

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

    public function getIsOn(): ?bool
    {
        return $this->isOn;
    }

    public function setIsOn(?bool $isOn): self
    {
        $this->isOn = $isOn;

        return $this;
    }

    public function getIsOffline(): ?bool
    {
        return $this->isOffline;
    }

    public function setIsOffline(?bool $isOffline): self
    {
        $this->isOffline = $isOffline;

        return $this;
    }

    public function getIsPvLocked(): ?bool
    {
        return $this->isPvLocked;
    }

    public function setIsPvLocked(?bool $isPvLocked): self
    {
        $this->isPvLocked = $isPvLocked;

        return $this;
    }

    public function getIsPvMode(): ?bool
    {
        return $this->isPvMode;
    }

    public function setIsPvMode(?bool $isPvMode): self
    {
        $this->isPvMode = $isPvMode;

        return $this;
    }

    public function getConsumption(): ?float
    {
        return $this->consumption;
    }

    public function setConsumption(?float $consumption): self
    {
        $this->consumption = $consumption;

        return $this;
    }
}
