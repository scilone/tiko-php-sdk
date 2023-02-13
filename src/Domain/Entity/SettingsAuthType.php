<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class SettingsAuthType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

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
