<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class FaqType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    /** @var FaqGroupsType[]|null  */
    private ?array $groups = null;

    public function getGroups(): ?array
    {
        return $this->groups;
    }

    public function setGroups(?array $groups): self
    {
        $this->groups = $groups;

        return $this;
    }
}
