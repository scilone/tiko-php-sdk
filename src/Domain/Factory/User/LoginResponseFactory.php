<?php

namespace Scilone\TikoSDK\Domain\Factory\User;

use Psr\Http\Message\ResponseInterface as PsrResponseInterface;
use Scilone\TikoSDK\Domain\Factory\AbstractResponseFactory;
use Scilone\TikoSDK\Domain\Response\User\LoginResponse;
use Scilone\TikoSDK\Infrastructure\ResponseException;
use Scilone\TikoSDK\Infrastructure\ResponseInterface;

class LoginResponseFactory extends AbstractResponseFactory
{
    public function createFromResponse(PsrResponseInterface $response): ResponseInterface
    {
        $data = $this->decodeResponse($response);

        if (isset($data['data'], $data['data']['logIn']) === false) {
            throw new ResponseException('Structure error');
        }

        return new LoginResponse(
            $this->generateEntityFromArray($data['data']['logIn']['settings']),
            $this->generateEntityFromArray($data['data']['logIn']['user']),
            $data['data']['logIn']['token'],
            $data['data']['logIn']['firstLogin'],
        );
    }
}
