<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class IVRDeleteRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $ivrName;

    /**
     * @param string $ivrName
     */
    public function __construct(string $ivrName)
    {
        $this->ivrName = $ivrName;
    }

    /**
     * Returns Ivr Name.
     */
    public function getIvrName(): string
    {
        return $this->ivrName;
    }

    /**
     * Sets Ivr Name.
     *
     * @required
     * @maps ivr_name
     */
    public function setIvrName(string $ivrName): void
    {
        $this->ivrName = $ivrName;
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
        $json['ivr_name'] = $this->ivrName;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
