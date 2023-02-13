<?php

namespace Scilone\TikoSDK\Domain\Entity;

use JsonSerializable;
use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class ActionType implements JsonSerializable
{
    use SelfJsonSerializableTrait;
    private ?string $value = null;
    private ?string $label = null;
    private ?string $type = null;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
