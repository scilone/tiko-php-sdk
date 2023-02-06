<?php

namespace Scilone\TikoSDK\Domain\Entity;

class SettingsWeatherType
{
    private ?bool $isEnabled = null;

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }
}
