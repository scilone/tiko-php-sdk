<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class SupportSettingsType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    private ?string $value = null;
    private ?string $label = null;

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }
}
