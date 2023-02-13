<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class TipType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    private ?int $id = null;
    private ?string $tip = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getTip(): ?string
    {
        return $this->tip;
    }

    public function setTip(?string $tip): self
    {
        $this->tip = $tip;

        return $this;
    }
}
