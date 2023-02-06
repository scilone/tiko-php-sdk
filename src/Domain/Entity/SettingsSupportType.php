<?php

namespace Scilone\TikoSDK\Domain\Entity;

class SettingsSupportType
{
    /** @var SupportSubjectType[]|null  */
    private ?array $subjects = null;
    private ?string $phone = null;
    private ?string $email = null;
    private ?string $hours = null;
    private ?string $emergencyPhone = null;
    private ?string $emergencyEmail = null;
    private ?bool $serviceActive = null;
    private $sysMessage = null;
    private ?string $content = null;
    private ?string $contentMobile = null;

    public function getSubjects(): ?array
    {
        return $this->subjects;
    }

    public function setSubjects(?array $subjects): self
    {
        $this->subjects = $subjects;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getHours(): ?string
    {
        return $this->hours;
    }

    public function setHours(?string $hours): self
    {
        $this->hours = $hours;

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

    public function getServiceActive(): ?bool
    {
        return $this->serviceActive;
    }

    public function setServiceActive(?bool $serviceActive): self
    {
        $this->serviceActive = $serviceActive;

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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getContentMobile(): ?string
    {
        return $this->contentMobile;
    }

    public function setContentMobile(?string $contentMobile): self
    {
        $this->contentMobile = $contentMobile;

        return $this;
    }
}
