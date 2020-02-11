<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Api\Client;

use Commercetools\Client\AuthConfig;

abstract class BaseAuthConfig implements AuthConfig
{
    public const AUTH_URI = '{accessTokenUri}';

    public const OPT_ACCESS_TOKEN_URI = '{accessTokenUri}';

    public const GRANT_TYPE = '';

    /** @psalm-var string */
    private $authUri;

    /** @psalm-var array */
    private $options;

    public function __construct(string $accessTokenUri = null, array $clientOptions = [], string $authUri = self::AUTH_URI)
    {
        /** @psalm-var string authUri */
        $authUri = str_replace(
            [
                self::OPT_ACCESS_TOKEN_URI
            ],
            [
                $accessTokenUri ?? "https://auth.europe-west1.gcp.commercetools.com/oauth/token"
            ],
            $authUri
        );
        $this->authUri = $authUri;
        $this->options = array_replace(
            [self::OPT_BASE_URI => $this->authUri],
            $clientOptions
        );
    }

    public function getGrantType(): string
    {
        /** @psalm-var string */
        return static::GRANT_TYPE;
    }

    public function getAuthUri(): string
    {
        return $this->authUri;
    }

    public function getOptions(): array
    {
        return $this->options;
    }
}
