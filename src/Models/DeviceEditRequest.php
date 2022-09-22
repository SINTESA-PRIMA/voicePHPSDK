<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class DeviceEditRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $extension;

    /**
     * @var string
     */
    private $deviceOwner;

    /**
     * @var string
     */
    private $secret;

    /**
     * @param string $extension
     * @param string $deviceOwner
     * @param string $secret
     */
    public function __construct(string $extension, string $deviceOwner, string $secret)
    {
        $this->extension = $extension;
        $this->deviceOwner = $deviceOwner;
        $this->secret = $secret;
    }

    /**
     * Returns Extension.
     */
    public function getExtension(): string
    {
        return $this->extension;
    }

    /**
     * Sets Extension.
     *
     * @required
     * @maps extension
     */
    public function setExtension(string $extension): void
    {
        $this->extension = $extension;
    }

    /**
     * Returns Device Owner.
     */
    public function getDeviceOwner(): string
    {
        return $this->deviceOwner;
    }

    /**
     * Sets Device Owner.
     *
     * @required
     * @maps device_owner
     */
    public function setDeviceOwner(string $deviceOwner): void
    {
        $this->deviceOwner = $deviceOwner;
    }

    /**
     * Returns Secret.
     */
    public function getSecret(): string
    {
        return $this->secret;
    }

    /**
     * Sets Secret.
     *
     * @required
     * @maps secret
     */
    public function setSecret(string $secret): void
    {
        $this->secret = $secret;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['extension']    = $this->extension;
        $json['device_owner'] = $this->deviceOwner;
        $json['secret']       = $this->secret;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
