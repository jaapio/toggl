<?php
namespace Jaapio\Toggl;

use ApiClients\Foundation\Hydrator\Options as HydratorOptions;
use ApiClients\Foundation\Options as FoundationOptions;
use ApiClients\Foundation\Transport\Middleware\JsonDecodeMiddleware;
use ApiClients\Foundation\Transport\Middleware\JsonEncodeMiddleware;
use ApiClients\Foundation\Transport\Options as TransportOptions;
use function ApiClients\Foundation\options_merge;
use ApiClients\Foundation\Transport\UserAgentStrategies;
use ApiClients\Middleware\BasicAuthorization\BasicAuthorizationHeaderMiddleware;
use ApiClients\Middleware\BasicAuthorization\Options as BasicAuthorizationOptions;


final class ApiSettings
{
    const NAMESPACE = "Jaapio\\Toggl\\Resource";

    const DEFAULT_TRANSPORT_OPTIONS = [
        FoundationOptions::HYDRATOR_OPTIONS => [
            HydratorOptions::NAMESPACE => self::NAMESPACE,
            HydratorOptions::NAMESPACE_DIR => __DIR__ . DIRECTORY_SEPARATOR . 'Resource' . DIRECTORY_SEPARATOR,
        ],
        FoundationOptions::TRANSPORT_OPTIONS => [
            TransportOptions::SCHEMA => 'https',
            TransportOptions::HOST => 'www.toggl.com',
            TransportOptions::PATH => '/api/v8/',
            TransportOptions::HEADERS => [
                'Accept' => 'application/json',
            ],
            TransportOptions::USER_AGENT_STRATEGY => UserAgentStrategies::PACKAGE_VERSION,
            TransportOptions::PACKAGE => 'jaapio/toggl',
            TransportOptions::MIDDLEWARE => [
                JsonDecodeMiddleware::class,
                JsonEncodeMiddleware::class,
            ],
        ],
    ];

    public static function getOptions($token, $suffix, $suppliedOptions)
    {
        $options = options_merge(self::DEFAULT_TRANSPORT_OPTIONS, $suppliedOptions);
        $options[FoundationOptions::HYDRATOR_OPTIONS][HydratorOptions::NAMESPACE_SUFFIX] = $suffix;
        if ($token !== '') {
            $transportOptions = $options[FoundationOptions::TRANSPORT_OPTIONS];
            $transportOptions[TransportOptions::MIDDLEWARE][] = BasicAuthorizationHeaderMiddleware::class;
            $transportOptions[TransportOptions::DEFAULT_REQUEST_OPTIONS] = array_merge_recursive(
                $transportOptions[TransportOptions::DEFAULT_REQUEST_OPTIONS] ?? [],
                [
                    BasicAuthorizationHeaderMiddleware::class => [
                        BasicAuthorizationOptions::USERNAME => $token,
                        BasicAuthorizationOptions::PASSWORD => 'api_token',
                    ],
                ]
            );
            $options[FoundationOptions::TRANSPORT_OPTIONS] = $transportOptions;
        }
        return $options;
    }
}
