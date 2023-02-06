<?php

namespace Scilone\TikoSDK\Domain\Factory;

use Psr\Http\Message\ResponseInterface;
use Scilone\TikoSDK\Infrastructure\ResponseFactoryInterface;

abstract class AbstractResponseFactory implements ResponseFactoryInterface
{
    private const NAMESPACE_PATTERN = 'Scilone\\TikoSDK\\Domain\\Entity\\';
    private const CLASS_NAME_KEY = '__typename';

    public function decodeResponse(ResponseInterface $response): array
    {
        return json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
    }

    protected function generateEntityFromArray(array $data): object
    {
        $className = self::NAMESPACE_PATTERN . $data[self::CLASS_NAME_KEY];
        $class = new $className();

        foreach ($data as $key => $value) {
            if (method_exists($class, "set$key") === false) {
                continue;
            }
            $settedValue = $value;

            if (is_array($value)) {
                if (isset($value[self::CLASS_NAME_KEY])) {
                    $settedValue = $this->generateEntityFromArray($value);
                } elseif (is_array(current($value))) {
                    if (isset(current($value)[self::CLASS_NAME_KEY])) {
                        $settedValue = [];
                        foreach ($value as $val) {
                            $settedValue[] = ($this->generateEntityFromArray($val));
                        }
                    }
                }
            }

            $class->{"set$key"}($settedValue);
        };

        return $class;
    }
}
