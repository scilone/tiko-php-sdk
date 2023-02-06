<?php

namespace Scilone\TikoSDK\Domain\Entity;

class AlarmsType
{
    /** @var AlarmsDevicesSettingsType[]|null  */
    private ?array $devicesSettings = null;
    /** @var AlarmsSensorsSettingsType[]|null  */
    private ?array $sensorsSettings = null;
    private ?AlarmsCommunicationType $communication = null;
    /** @var AlarmsHistoryType[]|null  */
    private ?array $history = null;
}
