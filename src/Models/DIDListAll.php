<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class DIDListAll implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $response;

    /**
     * @var int
     */
    private $total;

    /**
     * @var Data11[]
     */
    private $data;

    /**
     * @param bool $response
     * @param int $total
     * @param Data11[] $data
     */
    public function __construct(bool $response, int $total, array $data)
    {
        $this->response = $response;
        $this->total = $total;
        $this->data = $data;
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
     * Returns Total.
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * Sets Total.
     *
     * @required
     * @maps total
     */
    public function setTotal(int $total): void
    {
        $this->total = $total;
    }

    /**
     * Returns Data.
     *
     * @return Data11[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * Sets Data.
     *
     * @required
     * @maps data
     *
     * @param Data11[] $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
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
        $json['total']    = $this->total;
        $json['data']     = $this->data;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
