<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ExtensionHttpDestinationModel extends JsonObjectModel implements ExtensionHttpDestination
{
    const DISCRIMINATOR_VALUE = 'HTTP';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $url;

    /**
     * @var ?ExtensionHttpDestinationAuthentication
     */
    protected $authentication;

    public function __construct(
        string $type = null,
        string $url = null,
        ExtensionHttpDestinationAuthentication $authentication = null
    ) {
        $this->type = $type;
        $this->url = $url;
        $this->authentication = $authentication;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ExtensionDestination::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getUrl()
    {
        if (is_null($this->url)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ExtensionHttpDestination::FIELD_URL);
            if (is_null($data)) {
                return null;
            }
            $this->url = (string) $data;
        }

        return $this->url;
    }

    /**
     * @return null|ExtensionHttpDestinationAuthentication
     */
    public function getAuthentication()
    {
        if (is_null($this->authentication)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ExtensionHttpDestination::FIELD_AUTHENTICATION);
            if (is_null($data)) {
                return null;
            }
            $className = ExtensionHttpDestinationAuthenticationModel::resolveDiscriminatorClass($data);
            $this->authentication = $className::of($data);
        }

        return $this->authentication;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    public function setAuthentication(?ExtensionHttpDestinationAuthentication $authentication): void
    {
        $this->authentication = $authentication;
    }
}