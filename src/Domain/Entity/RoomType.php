<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class RoomType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    /** @var ExternalDeviceType[]|null  */
    private ?array $externalDevices = null;
    /** @var DeviceType[]|null  */
    private ?array $devices = null;
    private ?TemperatureType $temperature = null;
    private ?bool $hasTemperatureSchedule = null;
    private $temperatureSchedule = null;
    private $formattedTemperatureSchedule = null;
    private ?AdjustTemperatureType $adjustTemperature = null;
    private ?ConsumptionType $consumption = null;
    private ?int $id = null;
    private ?string $name = null;
    private ?int $type = null;
    private ?int $heaters = null;
    private ?int $sensors = null;
    private ?float $currentTemperatureDegrees = null;
    private ?float $targetTemperatureDegrees = null;
    private ?float $humidity = null;
    private ?RoomStatusType $status = null;
    private ?string $color = null;

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

    public function getTemperature(): ?TemperatureType
    {
        return $this->temperature;
    }

    public function setTemperature(?TemperatureType $temperature): self
    {
        $this->temperature = $temperature;

        return $this;
    }

    public function getHasTemperatureSchedule(): ?bool
    {
        return $this->hasTemperatureSchedule;
    }

    public function setHasTemperatureSchedule(?bool $hasTemperatureSchedule): self
    {
        $this->hasTemperatureSchedule = $hasTemperatureSchedule;

        return $this;
    }

    public function getTemperatureSchedule()
    {
        return $this->temperatureSchedule;
    }

    public function setTemperatureSchedule($temperatureSchedule): self
    {
        $this->temperatureSchedule = $temperatureSchedule;

        return $this;
    }

    public function getFormattedTemperatureSchedule()
    {
        return $this->formattedTemperatureSchedule;
    }

    public function setFormattedTemperatureSchedule($formattedTemperatureSchedule): self
    {
        $this->formattedTemperatureSchedule = $formattedTemperatureSchedule;

        return $this;
    }

    public function getAdjustTemperature(): ?AdjustTemperatureType
    {
        return $this->adjustTemperature;
    }

    public function setAdjustTemperature(?AdjustTemperatureType $adjustTemperature): self
    {
        $this->adjustTemperature = $adjustTemperature;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

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

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getHeaters(): ?int
    {
        return $this->heaters;
    }

    public function setHeaters(?int $heaters): self
    {
        $this->heaters = $heaters;

        return $this;
    }

    public function getSensors(): ?int
    {
        return $this->sensors;
    }

    public function setSensors(?int $sensors): self
    {
        $this->sensors = $sensors;

        return $this;
    }

    public function getCurrentTemperatureDegrees(): ?float
    {
        return $this->currentTemperatureDegrees;
    }

    public function setCurrentTemperatureDegrees(?float $currentTemperatureDegrees): self
    {
        $this->currentTemperatureDegrees = $currentTemperatureDegrees;

        return $this;
    }

    public function getTargetTemperatureDegrees(): ?float
    {
        return $this->targetTemperatureDegrees;
    }

    public function setTargetTemperatureDegrees(?float $targetTemperatureDegrees): self
    {
        $this->targetTemperatureDegrees = $targetTemperatureDegrees;

        return $this;
    }

    public function getHumidity(): ?float
    {
        return $this->humidity;
    }

    public function setHumidity(?float $humidity): self
    {
        $this->humidity = $humidity;

        return $this;
    }

    public function getStatus(): ?RoomStatusType
    {
        return $this->status;
    }

    public function setStatus(?RoomStatusType $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }
}
