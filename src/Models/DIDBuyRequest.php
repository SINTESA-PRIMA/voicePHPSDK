<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class DIDBuyRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $did;

    /**
     * @param string $did
     */
    public function __construct(string $did)
    {
        $this->did = $did;
    }

    /**
     * Returns Did.
     */
    public function getDid(): string
    {
        return $this->did;
    }

    /**
     * Sets Did.
     *
     * @required
     * @maps did
     */
    public function setDid(string $did): void
    {
        $this->did = $did;
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
        $json['did'] = $this->did;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
