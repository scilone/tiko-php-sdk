<?php

namespace Scilone\TikoSDK\Domain\Response\PropertyRoom;

use JsonSerializable;
use Scilone\TikoSDK\Domain\Entity\RoomType;
use Scilone\TikoSDK\Infrastructure\ResponseInterface;
use Scilone\TikoSDK\Infrastructure\SelfJsonSerializableTrait;

class SetPropertyRoomTemperatureResponse implements ResponseInterface, JsonSerializable
{
    use SelfJsonSerializableTrait;

    private RoomType $room;

    public function __construct(RoomType $room)
    {
        $this->room = $room;
    }

    public function getRoom(): RoomType
    {
        return $this->room;
    }
}
