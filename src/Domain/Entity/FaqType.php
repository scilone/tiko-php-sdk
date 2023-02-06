<?php

namespace Scilone\TikoSDK\Domain\Entity;

class FaqType
{
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
