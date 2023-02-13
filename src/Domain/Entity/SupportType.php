<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class SupportType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    private ?string $timezone = null;
    private ?string $partner = null;
    private ?string $clientCode = null;
    private ?string $clientName = null;
    private ?string $brandName = null;
    private ?string $supportPhone = null;
    private ?string $supportEmail = null;
    private ?string $supportHours = null;
    private ?string $emergencyPhone = null;
    private ?string $emergencyEmail = null;
    private $sysMessage = null;

    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    public function setTimezone(?string $timezone): self
    {
        $this->timezone = $timezone;

        return $this;
    }

    public function getPartner(): ?string
    {
        return $this->partner;
    }

    public function setPartner(?string $partner): self
    {
        $this->partner = $partner;

        return $this;
    }

    public function getClientCode(): ?string
    {
        return $this->clientCode;
    }

    public function setClientCode(?string $clientCode): self
    {
        $this->clientCode = $clientCode;

        return $this;
    }

    public function getClientName(): ?string
    {
        return $this->clientName;
    }

    public function setClientName(?string $clientName): self
    {
        $this->clientName = $clientName;

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

    public function getSupportPhone(): ?string
    {
        return $this->supportPhone;
    }

    public function setSupportPhone(?string $supportPhone): self
    {
        $this->supportPhone = $supportPhone;

        return $this;
    }

    public function getSupportEmail(): ?string
    {
        return $this->supportEmail;
    }

    public function setSupportEmail(?string $supportEmail): self
    {
        $this->supportEmail = $supportEmail;

        return $this;
    }

    public function getSupportHours(): ?string
    {
        return $this->supportHours;
    }

    public function setSupportHours(?string $supportHours): self
    {
        $this->supportHours = $supportHours;

        return $this;
    }

    public function getEmergencyPhone(): ?string
    {
        return $this->emergencyPhone;
    }

    public function setEmergencyPhone(?string $emergencyPhone): self
    {
        $this->emergencyPhone = $emergencyPhone;

        return $this;
    }

    public function getEmergencyEmail(): ?string
    {
        return $this->emergencyEmail;
    }

    public function setEmergencyEmail(?string $emergencyEmail): self
    {
        $this->emergencyEmail = $emergencyEmail;

        return $this;
    }

    public function getSysMessage()
    {
        return $this->sysMessage;
    }

    public function setSysMessage($sysMessage): self
    {
        $this->sysMessage = $sysMessage;

        return $this;
    }
}
