<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class Data implements \JsonSerializable
{
    /**
     * @var string
     */
    private $extension;

    /**
     * @var string
     */
    private $secret;

    /**
     * @var string
     */
    private $deviceOwner;

    /**
     * @param string $extension
     * @param string $secret
     * @param string $deviceOwner
     */
    public function __construct(string $extension, string $secret, string $deviceOwner)
    {
        $this->extension = $extension;
        $this->secret = $secret;
        $this->deviceOwner = $deviceOwner;
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
        $json['secret']       = $this->secret;
        $json['device_owner'] = $this->deviceOwner;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
