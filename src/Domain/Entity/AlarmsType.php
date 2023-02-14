<?php

namespace Scilone\TikoSDK\Domain\Entity;

use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class AlarmsType implements \JsonSerializable
{
    use SelfJsonSerializableTrait;

    /** @var AlarmsDevicesSettingsType[]|null  */
    private ?array $devicesSettings = null;
    /** @var AlarmsSensorsSettingsType[]|null  */
    private ?array $sensorsSettings = null;
    private ?AlarmsCommunicationType $communication = null;
    /** @var AlarmsHistoryType[]|null  */
    private ?array $history = null;
}
