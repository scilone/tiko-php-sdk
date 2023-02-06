<?php

namespace Scilone\TikoSDK\Infrastructure;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\ClientInterface;

class Client
{
    private const HOST = 'https://tiko.ch';
    private const TIMEOUT = 50;

    private const USER_AGENT = 'Mozilla/5.0 (Linux; Android 13; Pixel 4a Build/T1B3.221003.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36';

    private ?ClientInterface $client = null;
    private ?string $token = null;

    private function getHttpClient(): ClientInterface
    {
        if ($this->client instanceof ClientInterface === false) {
            $this->initHttpClient();
        }

        return $this->client;
    }

    private function initHttpClient(): void
    {
        $this->client = new GuzzleClient(
            [
                'base_uri' => self::HOST,
                'timeout'  => self::TIMEOUT,
            ]
        );
    }

    public function setToken(?string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function execute(RequestInterface $request): ResponseInterface
    {
        $options = [
            'headers' => ['User-agent' => self::USER_AGENT]
        ];

        if ($this->token !== null) {
            $options['headers']['authorization'] = "Token $this->token";
        }

        if ($request->getHeaders() !== []) {
            $options['headers'] = array_merge($options['headers'], $request->getHeaders());
        }
        if ($request->getBody() !== null) {
            $options['body'] = $request->getBody();
        }

        $uri = $request->getPath();
        if ($request->getPathParameters() !== []) {
            $uri .= '?' . http_build_query($request->getPathParameters());
        }

        $response = $this->getHttpClient()->request(
            $request->getHttpMethod(),
            $uri,
            $options
        );

        return $request->getResponseFactory()->createFromResponse($response);
    }

    public function getToken(): ?string
    {
        return $this->token;
    }
}
