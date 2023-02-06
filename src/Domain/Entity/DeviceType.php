<?php

namespace Scilone\TikoSDK\Domain\Entity;

class DeviceType
{
    private ?int $id = null;
    private ?string $code = null;
    private ?string $type = null;
    private ?string $name = null;
    private ?string $mac = null;
    private ?string $brand = null;
    private ?string $model = null;
    private ?string $setting = null;
    private ?string $thermostat = null;
    private ?bool $screen = null;
    private ?string $wiring = null;
    /** @var SupportSettingsType[]|null  */
    private ?array $supportedSettings = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

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

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(?string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getSetting(): ?string
    {
        return $this->setting;
    }

    public function setSetting(?string $setting): self
    {
        $this->setting = $setting;

        return $this;
    }

    public function getThermostat(): ?string
    {
        return $this->thermostat;
    }

    public function setThermostat(?string $thermostat): self
    {
        $this->thermostat = $thermostat;

        return $this;
    }

    public function getScreen(): ?bool
    {
        return $this->screen;
    }

    public function setScreen(?bool $screen): self
    {
        $this->screen = $screen;

        return $this;
    }

    public function getWiring(): ?string
    {
        return $this->wiring;
    }

    public function setWiring(?string $wiring): self
    {
        $this->wiring = $wiring;

        return $this;
    }

    public function getSupportedSettings(): ?array
    {
        return $this->supportedSettings;
    }

    public function setSupportedSettings(?array $supportedSettings): self
    {
        $this->supportedSettings = $supportedSettings;

        return $this;
    }
}
