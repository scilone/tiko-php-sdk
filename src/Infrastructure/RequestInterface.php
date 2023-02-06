<?php

namespace Scilone\TikoSDK\Infrastructure;

interface RequestInterface
{
        public function getHttpMethod(): string;

        public function getPath(): string;

        public function getPathParameters(): array;

        public function getResponseFactory(): ResponseFactoryInterface;

        public function getHeaders(): array;

        public function setHeader(string $key, string $value): void;

        public function getBody(): ?string;
}
