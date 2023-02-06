<?php

namespace Scilone\TikoSDK\Domain\Request\User;

use Scilone\TikoSDK\Domain\Factory\User\LoginResponseFactory;
use Scilone\TikoSDK\Domain\Request\AbstractRequest;
use Symfony\Component\HttpFoundation\Request;

class LoginRequest extends AbstractRequest
{
    protected const HEADERS = [
        'Content-Type' => 'application/json',
    ];

    private string $email;
    private string $password;
    private string $langCode;

    public function __construct(string $email, string $password, string $langCode)
    {
        $this->email    = $email;
        $this->password = $password;
        $this->langCode = $langCode;
    }

    public function getHttpMethod(): string
    {
        return Request::METHOD_POST;
    }

    public function getPath(): string
    {
        return '/api/v3/graphql/';
    }

    public function getPathParameters(): array
    {
        return [];
    }

    public function getResponseFactory(): LoginResponseFactory
    {
        return new LoginResponseFactory();
    }

    public function getBody(): ?string
    {
        return json_encode(
            [
                'operationName' => 'LogIn',
                'variables' => [
                    'email' => $this->email,
                    'password' => $this->password,
                    'langCode' => $this->langCode,
                    'retainSession' => true,
                ],
                'query' => 'mutation LogIn(
                      $email: String!
                      $password: String!
                      $langCode: String
                      $retainSession: Boolean
                    ) {
                      logIn(
                        input: {
                          email: $email
                          password: $password
                          langCode: $langCode
                          retainSession: $retainSession
                        }
                      ) {
                        settings {
                          client {
                            name
                            __typename
                          }
                          support {
                            serviceActive
                            phone
                            email
                            __typename
                          }
                          __typename
                        }
                        user {
                          id
                          clientCustomerId
                          agreements
                          properties {
                            id
                            allInstalled
                            __typename
                          }
                          inbox(modes: ["app"]) {
                            actions {
                              label
                              type
                              value
                              __typename
                            }
                            id
                            lockUser
                            maxNumberOfSkip
                            messageBody
                            messageHeader
                            __typename
                          }
                          __typename
                        }
                        token
                        firstLogin
                        __typename
                      }
                    }',
            ]
        );
    }
}
