<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class CampaignType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    private ?int $id = null;
    private ?int $maxNumberOfSkip = null;
    private ?bool $lockUser = null;
    private ?string $messageBody = null;
    private ?string $messageHeader = null;
    /** @var ActionType[]|null  */
    private ?array $actions = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getMaxNumberOfSkip(): ?int
    {
        return $this->maxNumberOfSkip;
    }

    public function setMaxNumberOfSkip(?int $maxNumberOfSkip): self
    {
        $this->maxNumberOfSkip = $maxNumberOfSkip;

        return $this;
    }

    public function getLockUser(): ?bool
    {
        return $this->lockUser;
    }

    public function setLockUser(?bool $lockUser): self
    {
        $this->lockUser = $lockUser;

        return $this;
    }

    public function getMessageBody(): ?string
    {
        return $this->messageBody;
    }

    public function setMessageBody(?string $messageBody): self
    {
        $this->messageBody = $messageBody;

        return $this;
    }

    public function getMessageHeader(): ?string
    {
        return $this->messageHeader;
    }

    public function setMessageHeader(?string $messageHeader): self
    {
        $this->messageHeader = $messageHeader;

        return $this;
    }

    public function getActions(): ?array
    {
        return $this->actions;
    }

    public function setActions(?array $actions): self
    {
        $this->actions = $actions;

        return $this;
    }
}
