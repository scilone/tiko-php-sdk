<?php

namespace Scilone\TikoSDK\Domain\Entity;

class SettingsType
{
    private ?SettingsAuthType $auth = null;
    private ?SettingsMyStromType $mystrom = null;
    private ?SettingsNotificationsType $notifications = null;
    private ?SettingsSupportType $support = null;
    private ?SettingsBenchmarkType $benchmark = null;
    private ?SettingsClientType $client = null;
    private ?string $currency = null;
    private ?string $currentYear = null;
    private ?string $timezone = null;
    /** @var []|null  */
    private ?array $languages = null;
    private ?SettingsWeatherType $weather = null;

    public function getAuth(): ?SettingsAuthType
    {
        return $this->auth;
    }

    public function setAuth(?SettingsAuthType $auth): self
    {
        $this->auth = $auth;

        return $this;
    }

    public function getMystrom(): ?SettingsMyStromType
    {
        return $this->mystrom;
    }

    public function setMystrom(?SettingsMyStromType $mystrom): self
    {
        $this->mystrom = $mystrom;

        return $this;
    }

    public function getNotifications(): ?SettingsNotificationsType
    {
        return $this->notifications;
    }

    public function setNotifications(?SettingsNotificationsType $notifications): self
    {
        $this->notifications = $notifications;

        return $this;
    }

    public function getSupport(): ?SettingsSupportType
    {
        return $this->support;
    }

    public function setSupport(?SettingsSupportType $support): self
    {
        $this->support = $support;

        return $this;
    }

    public function getBenchmark(): ?SettingsBenchmarkType
    {
        return $this->benchmark;
    }

    public function setBenchmark(?SettingsBenchmarkType $benchmark): self
    {
        $this->benchmark = $benchmark;

        return $this;
    }

    public function getClient(): ?SettingsClientType
    {
        return $this->client;
    }

    public function setClient(?SettingsClientType $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getCurrentYear(): ?string
    {
        return $this->currentYear;
    }

    public function setCurrentYear(?string $currentYear): self
    {
        $this->currentYear = $currentYear;

        return $this;
    }

    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    public function setTimezone(?string $timezone): self
    {
        $this->timezone = $timezone;

        return $this;
    }

    public function getLanguages(): ?array
    {
        return $this->languages;
    }

    public function setLanguages(?array $languages): self
    {
        $this->languages = $languages;

        return $this;
    }

    public function getWeather(): ?SettingsWeatherType
    {
        return $this->weather;
    }

    public function setWeather(?SettingsWeatherType $weather): self
    {
        $this->weather = $weather;

        return $this;
    }
}
