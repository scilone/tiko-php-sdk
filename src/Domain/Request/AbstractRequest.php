<?php

namespace Scilone\TikoSDK\Domain\Request;

use Scilone\TikoSDK\Infrastructure\RequestInterface;

abstract class AbstractRequest implements RequestInterface
{
    protected const HEADERS = [];

    private array $headers = [];

    public function getHeaders(): array
    {
        return array_merge(static::HEADERS, $this->headers);
    }
    public function setHeader(string $key, string $value): void
    {
        $this->headers[$key] = $value;
    }
}
