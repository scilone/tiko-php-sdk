<?php

namespace Scilone\TikoSDK\Domain\Entity;

class SettingsAuthType
{
    private ?bool $isSmsEnabled = null;

    public function getIsSmsEnabled(): ?bool
    {
        return $this->isSmsEnabled;
    }

    public function setIsSmsEnabled(?bool $isSmsEnabled): self
    {
        $this->isSmsEnabled = $isSmsEnabled;

        return $this;
    }
}
