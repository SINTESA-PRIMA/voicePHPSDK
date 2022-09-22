<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class Requestrequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $callerId;

    /**
     * @param string $callerId
     */
    public function __construct(string $callerId)
    {
        $this->callerId = $callerId;
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
        $json['caller_id'] = $this->callerId;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
