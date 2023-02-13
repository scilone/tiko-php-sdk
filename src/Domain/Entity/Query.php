<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class Query implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    /** @var CampaignType[]|null  */
    private ?array $inbox = null;
    /** @var ExternalDeviceType[]|null  */
    private ?array $externalDevices = null;
    /** @var DeviceType[]|null  */
    private ?array $devices = null;
    private ?DeviceType $device = null;
    private ?SettingsType $settings = null;
    private ?SupportType $support = null;
    private ?UserType $user = null;
    private ?bool $logOut = null;
    private ?WeatherForecastType $weatherForecast = null;
    private ?WeatherType $weather = null;
    private ?RoomType $room = null;
    /** @var RoomType[]|null  */
    private ?array $rooms = null;
    private ?PropertyType $property = null;
    /** @var PropertyType[]|null  */
    private ?array $properties = null;

    public function getInbox(): ?array
    {
        return $this->inbox;
    }

    public function setInbox(?array $inbox): self
    {
        $this->inbox = $inbox;

        return $this;
    }

    public function getExternalDevices(): ?array
    {
        return $this->externalDevices;
    }

    public function setExternalDevices(?array $externalDevices): self
    {
        $this->externalDevices = $externalDevices;

        return $this;
    }

    public function getDevices(): ?array
    {
        return $this->devices;
    }

    public function setDevices(?array $devices): self
    {
        $this->devices = $devices;

        return $this;
    }

    public function getDevice(): ?DeviceType
    {
        return $this->device;
    }

    public function setDevice(?DeviceType $device): self
    {
        $this->device = $device;

        return $this;
    }

    public function getSettings(): ?SettingsType
    {
        return $this->settings;
    }

    public function setSettings(?SettingsType $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    public function getSupport(): ?SupportType
    {
        return $this->support;
    }

    public function setSupport(?SupportType $support): self
    {
        $this->support = $support;

        return $this;
    }

    public function getUser(): ?UserType
    {
        return $this->user;
    }

    public function setUser(?UserType $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getLogOut(): ?bool
    {
        return $this->logOut;
    }

    public function setLogOut(?bool $logOut): self
    {
        $this->logOut = $logOut;

        return $this;
    }

    public function getWeatherForecast(): ?WeatherForecastType
    {
        return $this->weatherForecast;
    }

    public function setWeatherForecast(?WeatherForecastType $weatherForecast): self
    {
        $this->weatherForecast = $weatherForecast;

        return $this;
    }

    public function getWeather(): ?WeatherType
    {
        return $this->weather;
    }

    public function setWeather(?WeatherType $weather): self
    {
        $this->weather = $weather;

        return $this;
    }

    public function getRoom(): ?RoomType
    {
        return $this->room;
    }

    public function setRoom(?RoomType $room): self
    {
        $this->room = $room;

        return $this;
    }

    public function getRooms(): ?array
    {
        return $this->rooms;
    }

    public function setRooms(?array $rooms): self
    {
        $this->rooms = $rooms;

        return $this;
    }

    public function getProperty(): ?PropertyType
    {
        return $this->property;
    }

    public function setProperty(?PropertyType $property): self
    {
        $this->property = $property;

        return $this;
    }

    public function getProperties(): ?array
    {
        return $this->properties;
    }

    public function setProperties(?array $properties): self
    {
        $this->properties = $properties;

        return $this;
    }
}
