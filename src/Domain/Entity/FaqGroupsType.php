<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class FaqGroupsType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    private ?int $id = null;
    private ?string $name = null;
    /** @var FaqContentsType[]|null  */
    private ?array $contents = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getContents(): ?array
    {
        return $this->contents;
    }

    public function setContents(?array $contents): self
    {
        $this->contents = $contents;

        return $this;
    }
}
