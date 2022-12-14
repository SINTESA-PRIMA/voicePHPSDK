<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class Data1 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $extension;

    /**
     * @var string
     */
    private $host;

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
    private $secret;

    /**
     * @var int
     */
    private $isOnline;

    /**
     * @var string|null
     */
    private $deviceState;

    /**
     * @param string $extension
     * @param string $host
     * @param string $deviceType
     * @param string $deviceOwner
     * @param string $secret
     * @param int $isOnline
     */
    public function __construct(
        string $extension,
        string $host,
        string $deviceType,
        string $deviceOwner,
        string $secret,
        int $isOnline
    ) {
        $this->extension = $extension;
        $this->host = $host;
        $this->deviceType = $deviceType;
        $this->deviceOwner = $deviceOwner;
        $this->secret = $secret;
        $this->isOnline = $isOnline;
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
     * Returns Host.
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * Sets Host.
     *
     * @required
     * @maps host
     */
    public function setHost(string $host): void
    {
        $this->host = $host;
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
     * Returns Is Online.
     */
    public function getIsOnline(): int
    {
        return $this->isOnline;
    }

    /**
     * Sets Is Online.
     *
     * @required
     * @maps isOnline
     */
    public function setIsOnline(int $isOnline): void
    {
        $this->isOnline = $isOnline;
    }

    /**
     * Returns Device State.
     */
    public function getDeviceState(): ?string
    {
        return $this->deviceState;
    }

    /**
     * Sets Device State.
     *
     * @maps device_state
     */
    public function setDeviceState(?string $deviceState): void
    {
        $this->deviceState = $deviceState;
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
        $json['host']         = $this->host;
        $json['device_type']  = $this->deviceType;
        $json['device_owner'] = $this->deviceOwner;
        $json['secret']       = $this->secret;
        $json['isOnline']     = $this->isOnline;
        $json['device_state'] = $this->deviceState;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
