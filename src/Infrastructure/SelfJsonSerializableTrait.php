<?php

namespace Scilone\TikoSDK\Infrastructure;

use DateTimeInterface;

trait SelfJsonSerializableTrait
{
    public function jsonSerialize(): array
    {
        $vars = get_object_vars($this);

        foreach ($vars as &$var) {
            if ($var instanceof DateTimeInterface) {
                $var = $var->format(DATE_RFC3339);
            }
        }

        return $vars;
    }
}
