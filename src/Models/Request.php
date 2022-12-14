<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class Request implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $response;

    /**
     * @var string
     */
    private $callerId;

    /**
     * @var int
     */
    private $isActive;

    /**
     * @param bool $response
     * @param string $callerId
     * @param int $isActive
     */
    public function __construct(bool $response, string $callerId, int $isActive)
    {
        $this->response = $response;
        $this->callerId = $callerId;
        $this->isActive = $isActive;
    }

    /**
     * Returns Response.
     */
    public function getResponse(): bool
    {
        return $this->response;
    }

    /**
     * Sets Response.
     *
     * @required
     * @maps response
     */
    public function setResponse(bool $response): void
    {
        $this->response = $response;
    }

    /**
     * Returns Caller Id.
     */
    public function getCallerId(): string
    {
        return $this->callerId;
    }

    /**
     * Sets Caller Id.
     *
     * @required
     * @maps caller_id
     */
    public function setCallerId(string $callerId): void
    {
        $this->callerId = $callerId;
    }

    /**
     * Returns Is Active.
     */
    public function getIsActive(): int
    {
        return $this->isActive;
    }

    /**
     * Sets Is Active.
     *
     * @required
     * @maps isActive
     */
    public function setIsActive(int $isActive): void
    {
        $this->isActive = $isActive;
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
        $json['response']  = $this->response;
        $json['caller_id'] = $this->callerId;
        $json['isActive']  = $this->isActive;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
