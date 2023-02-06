<?php

namespace Scilone\TikoSDK\Domain\Entity;

class AlarmsCommunicationType
{
    private ?int $id = null;
    private ?bool $notification = null;
    private ?bool $sms = null;
    private ?bool $email = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNotification(): ?bool
    {
        return $this->notification;
    }

    public function setNotification(?bool $notification): self
    {
        $this->notification = $notification;

        return $this;
    }

    public function getSms(): ?bool
    {
        return $this->sms;
    }

    public function setSms(?bool $sms): self
    {
        $this->sms = $sms;

        return $this;
    }

    public function getEmail(): ?bool
    {
        return $this->email;
    }

    public function setEmail(?bool $email): self
    {
        $this->email = $email;

        return $this;
    }
}
