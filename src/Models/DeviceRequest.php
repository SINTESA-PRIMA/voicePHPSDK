<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class DeviceRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $deviceType;

    /**
     * @var string
     */
    private $deviceOwner;

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
    private $ipAddress;

    /**
     * @param string $deviceType
     * @param string $deviceOwner
     * @param string $extension
     * @param string $secret
     * @param string $ipAddress
     */
    public function __construct(
        string $deviceType,
        string $deviceOwner,
        string $extension,
        string $secret,
        string $ipAddress
    ) {
        $this->deviceType = $deviceType;
        $this->deviceOwner = $deviceOwner;
        $this->extension = $extension;
        $this->secret = $secret;
        $this->ipAddress = $ipAddress;
    }

    /**
     * Returns Device Type.
     */
    public function getDeviceType(): string
    {
        return $this->deviceType;
    }

    /**
     * Sets Device Type.
     *
     * @required
     * @maps device_type
     */
    public function setDeviceType(string $deviceType): void
    {
        $this->deviceType = $deviceType;
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
     * Returns Ip Address.
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    /**
     * Sets Ip Address.
     *
     * @required
     * @maps ip_address
     */
    public function setIpAddress(string $ipAddress): void
    {
        $this->ipAddress = $ipAddress;
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
        $json['device_type']  = $this->deviceType;
        $json['device_owner'] = $this->deviceOwner;
        $json['extension']    = $this->extension;
        $json['secret']       = $this->secret;
        $json['ip_address']   = $this->ipAddress;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
