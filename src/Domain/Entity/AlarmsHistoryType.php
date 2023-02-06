<?php

namespace Scilone\TikoSDK\Domain\Entity;

class AlarmsHistoryType
{
    private ?string $id = null;
    private ?int $openDate = null;
    private ?int $closeDate = null;
    private ?int $code = null;
    private ?string $message = null;
    private ?int $deviceId = null;
    private ?string $deviceMac = null;
    private ?string $hwType = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getOpenDate(): ?int
    {
        return $this->openDate;
    }

    public function setOpenDate(?int $openDate): self
    {
        $this->openDate = $openDate;

        return $this;
    }

    public function getCloseDate(): ?int
    {
        return $this->closeDate;
    }

    public function setCloseDate(?int $closeDate): self
    {
        $this->closeDate = $closeDate;

        return $this;
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(?int $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getDeviceId(): ?int
    {
        return $this->deviceId;
    }

    public function setDeviceId(?int $deviceId): self
    {
        $this->deviceId = $deviceId;

        return $this;
    }

    public function getDeviceMac(): ?string
    {
        return $this->deviceMac;
    }

    public function setDeviceMac(?string $deviceMac): self
    {
        $this->deviceMac = $deviceMac;

        return $this;
    }

    public function getHwType(): ?string
    {
        return $this->hwType;
    }

    public function setHwType(?string $hwType): self
    {
        $this->hwType = $hwType;

        return $this;
    }
}
