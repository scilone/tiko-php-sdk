<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class SettingsClientType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    private ?string $code = null;
    private ?string $name = null;
    private ?string $legalName = null;
    private ?string $brandName = null;
    private ?string $copyrightUrl = null;
    private ?string $legalPageUrl = null;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

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

    public function getLegalName(): ?string
    {
        return $this->legalName;
    }

    public function setLegalName(?string $legalName): self
    {
        $this->legalName = $legalName;

        return $this;
    }

    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;

        return $this;
    }

    public function getCopyrightUrl(): ?string
    {
        return $this->copyrightUrl;
    }

    public function setCopyrightUrl(?string $copyrightUrl): self
    {
        $this->copyrightUrl = $copyrightUrl;

        return $this;
    }

    public function getLegalPageUrl(): ?string
    {
        return $this->legalPageUrl;
    }

    public function setLegalPageUrl(?string $legalPageUrl): self
    {
        $this->legalPageUrl = $legalPageUrl;

        return $this;
    }
}
