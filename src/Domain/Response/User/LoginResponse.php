<?php

namespace Scilone\TikoSDK\Domain\Response\User;

use JsonSerializable;
use Scilone\TikoSDK\Domain\Entity\SettingsType;
use Scilone\TikoSDK\Domain\Entity\UserType;
use Scilone\TikoSDK\Infrastructure\ResponseInterface;
use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class LoginResponse implements ResponseInterface, JsonSerializable
{
    use SelfJsonSerializableTrait;

    private SettingsType $settings;
    private UserType $user;
    private string $token;
    private bool $firstLogin;

    public function __construct(SettingsType $settings, UserType $user, string $token, bool $firstLogin)
    {
        $this->settings   = $settings;
        $this->user       = $user;
        $this->token      = $token;
        $this->firstLogin = $firstLogin;
    }

    public function getSettings(): SettingsType
    {
        return $this->settings;
    }

    public function getUser(): UserType
    {
        return $this->user;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function isFirstLogin(): bool
    {
        return $this->firstLogin;
    }
}
