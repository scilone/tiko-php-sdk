<?php

namespace Scilone\TikoSDK\Domain\Entity;

class LogInQuery
{
    private ?SettingsType $settings = null;
    private ?UserType $user = null;
    private ?string $token = null;
    private ?bool $firstLogin = null;

    public function getSettings(): ?SettingsType
    {
        return $this->settings;
    }

    public function setSettings(?SettingsType $settings): self
    {
        $this->settings = $settings;

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

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getFirstLogin(): ?bool
    {
        return $this->firstLogin;
    }

    public function setFirstLogin(?bool $firstLogin): self
    {
        $this->firstLogin = $firstLogin;

        return $this;
    }
}
