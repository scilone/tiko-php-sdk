<?php

namespace Scilone\TikoSDK\Domain\Entity;

class SettingsNotificationsType
{
    private ?bool $isAppEnabled = null;
    private ?bool $isSmsEnabled = null;
    private ?bool $isEmailEnabled = null;

    public function getIsAppEnabled(): ?bool
    {
        return $this->isAppEnabled;
    }

    public function setIsAppEnabled(?bool $isAppEnabled): self
    {
        $this->isAppEnabled = $isAppEnabled;

        return $this;
    }

    public function getIsSmsEnabled(): ?bool
    {
        return $this->isSmsEnabled;
    }

    public function setIsSmsEnabled(?bool $isSmsEnabled): self
    {
        $this->isSmsEnabled = $isSmsEnabled;

        return $this;
    }

    public function getIsEmailEnabled(): ?bool
    {
        return $this->isEmailEnabled;
    }

    public function setIsEmailEnabled(?bool $isEmailEnabled): self
    {
        $this->isEmailEnabled = $isEmailEnabled;

        return $this;
    }
}
