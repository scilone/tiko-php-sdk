<?php

namespace Scilone\TikoSDK\Domain\Entity;

class SettingsMyStromType
{
    private ?bool $isEnabled = null;
    private ?string $redirectUri = null;
    private ?string $linkAccountUrl = null;
    private ?string $storeUrl = null;
    private ?string $webUrl = null;

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    public function getRedirectUri(): ?string
    {
        return $this->redirectUri;
    }

    public function setRedirectUri(?string $redirectUri): self
    {
        $this->redirectUri = $redirectUri;

        return $this;
    }

    public function getLinkAccountUrl(): ?string
    {
        return $this->linkAccountUrl;
    }

    public function setLinkAccountUrl(?string $linkAccountUrl): self
    {
        $this->linkAccountUrl = $linkAccountUrl;

        return $this;
    }

    public function getStoreUrl(): ?string
    {
        return $this->storeUrl;
    }

    public function setStoreUrl(?string $storeUrl): self
    {
        $this->storeUrl = $storeUrl;

        return $this;
    }

    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;

        return $this;
    }
}
