<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class UserType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    /** @var CampaignType[]|null  */
    private ?array $inbox = null;
    /** @var ExternalDeviceType[]|null  */
    private ?array $externalDevices = null;
    private ?PropertyType $property = null;
    /** @var PropertyType[]|null  */
    private ?array $properties = null;
    private ?int $id = null;
    private ?string $customerId = null;
    private ?string $clientCustomerId = null;
    private ?string $email = null;
    private ?string $mobile = null;
    private ?string $firstName = null;
    private ?string $lastName = null;
    private ?bool $upgradeRequired = null;
    private ?object $accessRights = null;
    private ?bool $hasSmsAuth = null;
    /** @var Object[]|null  */
    private ?array $agreements = null;

    public function getInbox(): ?array
    {
        return $this->inbox;
    }

    public function setInbox(?array $inbox): self
    {
        $this->inbox = $inbox;

        return $this;
    }

    public function getExternalDevices(): ?array
    {
        return $this->externalDevices;
    }

    public function setExternalDevices(?array $externalDevices): self
    {
        $this->externalDevices = $externalDevices;

        return $this;
    }

    public function getProperty(): ?PropertyType
    {
        return $this->property;
    }

    public function setProperty(?PropertyType $property): self
    {
        $this->property = $property;

        return $this;
    }

    public function getProperties(): ?array
    {
        return $this->properties;
    }

    public function setProperties(?array $properties): self
    {
        $this->properties = $properties;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    public function setCustomerId(?string $customerId): self
    {
        $this->customerId = $customerId;

        return $this;
    }

    public function getClientCustomerId(): ?string
    {
        return $this->clientCustomerId;
    }

    public function setClientCustomerId(?string $clientCustomerId): self
    {
        $this->clientCustomerId = $clientCustomerId;

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

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getUpgradeRequired(): ?bool
    {
        return $this->upgradeRequired;
    }

    public function setUpgradeRequired(?bool $upgradeRequired): self
    {
        $this->upgradeRequired = $upgradeRequired;

        return $this;
    }

    public function getAccessRights(): ?object
    {
        return $this->accessRights;
    }

    public function setAccessRights(?object $accessRights): self
    {
        $this->accessRights = $accessRights;

        return $this;
    }

    public function getHasSmsAuth(): ?bool
    {
        return $this->hasSmsAuth;
    }

    public function setHasSmsAuth(?bool $hasSmsAuth): self
    {
        $this->hasSmsAuth = $hasSmsAuth;

        return $this;
    }

    public function getAgreements(): ?array
    {
        return $this->agreements;
    }

    public function setAgreements(?array $agreements): self
    {
        $this->agreements = $agreements;

        return $this;
    }
}
