<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class Blast implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $response;

    /**
     * @var Rcode
     */
    private $rcode;

    /**
     * @param bool $response
     * @param Rcode $rcode
     */
    public function __construct(bool $response, Rcode $rcode)
    {
        $this->response = $response;
        $this->rcode = $rcode;
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
     * Returns Rcode.
     */
    public function getRcode(): Rcode
    {
        return $this->rcode;
    }

    /**
     * Sets Rcode.
     *
     * @required
     * @maps rcode
     */
    public function setRcode(Rcode $rcode): void
    {
        $this->rcode = $rcode;
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
        $json['response'] = $this->response;
        $json['rcode']    = $this->rcode;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
