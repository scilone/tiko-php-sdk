<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class PropertyType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    private ?FastConsumptionSummaryType $fastConsumption = null;
    private ?Co2SavingsType $co2Savings = null;
    private ?FaqType $faq = null;
    private ?AlarmsType $alarms = null;
    private ?OptimisationType $optimisation = null;
    private ?SavingsType $savings = null;
    /** @var TipType[]|null  */
    private ?array $tips = null;
    private ?ConsumptionType $consumption = null;
    /** @var ExternalDeviceType[]|null  */
    private ?array $externalDevices = null;
    /** @var DeviceType[]|null  */
    private ?array $devices = null;
    private ?RoomType $room = null;
    /** @var RoomType[]|null  */
    private ?array $rooms = null;
    private ?int $id = null;
    private ?int $partnerId = null;
    private ?string $name = null;
    private ?string $zipCode = null;
    private ?PropertyAddressType $address = null;
    private ?int $numberOfActiveAlarms = null;
    private ?int $numberOfEcomodeHours = null;
    private ?int $constructionYear = null;
    private ?int $surfaceArea = null;
    private ?int $floors = null;
    private ?int $numberOfInhabitants = null;
    private ?int $renovationYear = null;
    private ?bool $basement = null;
    private ?bool $attic = null;
    private ?string $windows = null;
    private ?bool $thermostat = null;
    private ?bool $powerLineCommunicationEquipment = null;
    private ?bool $allInstalled = null;
    private ?bool $isNetatmoAuthorised = null;
    private ?bool $isNetatmoEnabled = null;
    private ?string $netatmoLinkAccountUrl = null;
    private ?bool $isSinapsiEnabled = null;
    private ?bool $isSinapsiAuthorised = null;
    private ?bool $ownerPermission = null;
    private ?bool $isPhotovoltaic = null;
    private array $mode = [];
    private array $setting = [];
    private ?bool $isDecentralised = null;
    private ?bool $hasMbox = null;
    private ?array $valueProposition = null;
    private ?bool $contribution = null;
    private ?PropertySelfConsumptionSettingsType $selfConsumptionSettings = null;
    private ?PropertyProductionType $production = null;
    private ?string $organisationalUnit = null;
    private ?bool $mboxDisconnected = null;
    /** @var PropertyHouseSummaryStatus[]|null  */
    private ?array $houseSummaryStatus = null;

    public function getFastConsumption(): ?FastConsumptionSummaryType
    {
        return $this->fastConsumption;
    }

    public function setFastConsumption(?FastConsumptionSummaryType $fastConsumption): self
    {
        $this->fastConsumption = $fastConsumption;

        return $this;
    }

    public function getCo2Savings(): ?Co2SavingsType
    {
        return $this->co2Savings;
    }

    public function setCo2Savings(?Co2SavingsType $co2Savings): self
    {
        $this->co2Savings = $co2Savings;

        return $this;
    }

    public function getFaq(): ?FaqType
    {
        return $this->faq;
    }

    public function setFaq(?FaqType $faq): self
    {
        $this->faq = $faq;

        return $this;
    }

    public function getAlarms(): ?AlarmsType
    {
        return $this->alarms;
    }

    public function setAlarms(?AlarmsType $alarms): self
    {
        $this->alarms = $alarms;

        return $this;
    }

    public function getOptimisation(): ?OptimisationType
    {
        return $this->optimisation;
    }

    public function setOptimisation(?OptimisationType $optimisation): self
    {
        $this->optimisation = $optimisation;

        return $this;
    }

    public function getSavings(): ?SavingsType
    {
        return $this->savings;
    }

    public function setSavings(?SavingsType $savings): self
    {
        $this->savings = $savings;

        return $this;
    }

    public function getTips(): ?array
    {
        return $this->tips;
    }

    public function setTips(?array $tips): self
    {
        $this->tips = $tips;

        return $this;
    }

    public function getConsumption(): ?ConsumptionType
    {
        return $this->consumption;
    }

    public function setConsumption(?ConsumptionType $consumption): self
    {
        $this->consumption = $consumption;

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

    public function getDevices(): ?array
    {
        return $this->devices;
    }

    public function setDevices(?array $devices): self
    {
        $this->devices = $devices;

        return $this;
    }

    public function getRoom(): ?RoomType
    {
        return $this->room;
    }

    public function setRoom(?RoomType $room): self
    {
        $this->room = $room;

        return $this;
    }

    public function getRooms(): ?array
    {
        return $this->rooms;
    }

    public function setRooms(?array $rooms): self
    {
        $this->rooms = $rooms;

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

    public function getPartnerId(): ?int
    {
        return $this->partnerId;
    }

    public function setPartnerId(?int $partnerId): self
    {
        $this->partnerId = $partnerId;

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

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getAddress(): ?PropertyAddressType
    {
        return $this->address;
    }

    public function setAddress(?PropertyAddressType $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getNumberOfActiveAlarms(): ?int
    {
        return $this->numberOfActiveAlarms;
    }

    public function setNumberOfActiveAlarms(?int $numberOfActiveAlarms): self
    {
        $this->numberOfActiveAlarms = $numberOfActiveAlarms;

        return $this;
    }

    public function getNumberOfEcomodeHours(): ?int
    {
        return $this->numberOfEcomodeHours;
    }

    public function setNumberOfEcomodeHours(?int $numberOfEcomodeHours): self
    {
        $this->numberOfEcomodeHours = $numberOfEcomodeHours;

        return $this;
    }

    public function getConstructionYear(): ?int
    {
        return $this->constructionYear;
    }

    public function setConstructionYear(?int $constructionYear): self
    {
        $this->constructionYear = $constructionYear;

        return $this;
    }

    public function getSurfaceArea(): ?int
    {
        return $this->surfaceArea;
    }

    public function setSurfaceArea(?int $surfaceArea): self
    {
        $this->surfaceArea = $surfaceArea;

        return $this;
    }

    public function getFloors(): ?int
    {
        return $this->floors;
    }

    public function setFloors(?int $floors): self
    {
        $this->floors = $floors;

        return $this;
    }

    public function getNumberOfInhabitants(): ?int
    {
        return $this->numberOfInhabitants;
    }

    public function setNumberOfInhabitants(?int $numberOfInhabitants): self
    {
        $this->numberOfInhabitants = $numberOfInhabitants;

        return $this;
    }

    public function getRenovationYear(): ?int
    {
        return $this->renovationYear;
    }

    public function setRenovationYear(?int $renovationYear): self
    {
        $this->renovationYear = $renovationYear;

        return $this;
    }

    public function getBasement(): ?bool
    {
        return $this->basement;
    }

    public function setBasement(?bool $basement): self
    {
        $this->basement = $basement;

        return $this;
    }

    public function getAttic(): ?bool
    {
        return $this->attic;
    }

    public function setAttic(?bool $attic): self
    {
        $this->attic = $attic;

        return $this;
    }

    public function getWindows(): ?string
    {
        return $this->windows;
    }

    public function setWindows(?string $windows): self
    {
        $this->windows = $windows;

        return $this;
    }

    public function getThermostat(): ?bool
    {
        return $this->thermostat;
    }

    public function setThermostat(?bool $thermostat): self
    {
        $this->thermostat = $thermostat;

        return $this;
    }

    public function getPowerLineCommunicationEquipment(): ?bool
    {
        return $this->powerLineCommunicationEquipment;
    }

    public function setPowerLineCommunicationEquipment(?bool $powerLineCommunicationEquipment): self
    {
        $this->powerLineCommunicationEquipment = $powerLineCommunicationEquipment;

        return $this;
    }

    public function getAllInstalled(): ?bool
    {
        return $this->allInstalled;
    }

    public function setAllInstalled(?bool $allInstalled): self
    {
        $this->allInstalled = $allInstalled;

        return $this;
    }

    public function getIsNetatmoAuthorised(): ?bool
    {
        return $this->isNetatmoAuthorised;
    }

    public function setIsNetatmoAuthorised(?bool $isNetatmoAuthorised): self
    {
        $this->isNetatmoAuthorised = $isNetatmoAuthorised;

        return $this;
    }

    public function getIsNetatmoEnabled(): ?bool
    {
        return $this->isNetatmoEnabled;
    }

    public function setIsNetatmoEnabled(?bool $isNetatmoEnabled): self
    {
        $this->isNetatmoEnabled = $isNetatmoEnabled;

        return $this;
    }

    public function getNetatmoLinkAccountUrl(): ?string
    {
        return $this->netatmoLinkAccountUrl;
    }

    public function setNetatmoLinkAccountUrl(?string $netatmoLinkAccountUrl): self
    {
        $this->netatmoLinkAccountUrl = $netatmoLinkAccountUrl;

        return $this;
    }

    public function getIsSinapsiEnabled(): ?bool
    {
        return $this->isSinapsiEnabled;
    }

    public function setIsSinapsiEnabled(?bool $isSinapsiEnabled): self
    {
        $this->isSinapsiEnabled = $isSinapsiEnabled;

        return $this;
    }

    public function getIsSinapsiAuthorised(): ?bool
    {
        return $this->isSinapsiAuthorised;
    }

    public function setIsSinapsiAuthorised(?bool $isSinapsiAuthorised): self
    {
        $this->isSinapsiAuthorised = $isSinapsiAuthorised;

        return $this;
    }

    public function getOwnerPermission(): ?bool
    {
        return $this->ownerPermission;
    }

    public function setOwnerPermission(?bool $ownerPermission): self
    {
        $this->ownerPermission = $ownerPermission;

        return $this;
    }

    public function getIsPhotovoltaic(): ?bool
    {
        return $this->isPhotovoltaic;
    }

    public function setIsPhotovoltaic(?bool $isPhotovoltaic): self
    {
        $this->isPhotovoltaic = $isPhotovoltaic;

        return $this;
    }

    public function getMode()
    {
        return $this->mode;
    }

    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    public function getSetting()
    {
        return $this->setting;
    }

    public function setSetting($setting)
    {
        $this->setting = $setting;

        return $this;
    }

    public function getIsDecentralised(): ?bool
    {
        return $this->isDecentralised;
    }

    public function setIsDecentralised(?bool $isDecentralised): self
    {
        $this->isDecentralised = $isDecentralised;

        return $this;
    }

    public function getHasMbox(): ?bool
    {
        return $this->hasMbox;
    }

    public function setHasMbox(?bool $hasMbox): self
    {
        $this->hasMbox = $hasMbox;

        return $this;
    }

    public function getValueProposition(): ?array
    {
        return $this->valueProposition;
    }

    public function setValueProposition(?array $valueProposition): self
    {
        $this->valueProposition = $valueProposition;

        return $this;
    }

    public function getContribution(): ?bool
    {
        return $this->contribution;
    }

    public function setContribution(?bool $contribution): self
    {
        $this->contribution = $contribution;

        return $this;
    }

    public function getSelfConsumptionSettings(): ?PropertySelfConsumptionSettingsType
    {
        return $this->selfConsumptionSettings;
    }

    public function setSelfConsumptionSettings(?PropertySelfConsumptionSettingsType $selfConsumptionSettings): self
    {
        $this->selfConsumptionSettings = $selfConsumptionSettings;

        return $this;
    }

    public function getProduction(): ?PropertyProductionType
    {
        return $this->production;
    }

    public function setProduction(?PropertyProductionType $production): self
    {
        $this->production = $production;

        return $this;
    }

    public function getOrganisationalUnit(): ?string
    {
        return $this->organisationalUnit;
    }

    public function setOrganisationalUnit(?string $organisationalUnit): self
    {
        $this->organisationalUnit = $organisationalUnit;

        return $this;
    }

    public function getMboxDisconnected(): ?bool
    {
        return $this->mboxDisconnected;
    }

    public function setMboxDisconnected(?bool $mboxDisconnected): self
    {
        $this->mboxDisconnected = $mboxDisconnected;

        return $this;
    }

    public function getHouseSummaryStatus(): ?array
    {
        return $this->houseSummaryStatus;
    }

    public function setHouseSummaryStatus(?array $houseSummaryStatus): self
    {
        $this->houseSummaryStatus = $houseSummaryStatus;

        return $this;
    }
}
