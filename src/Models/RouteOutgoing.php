<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class RouteOutgoing implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $response;

    /**
     * @var string
     */
    private $device;

    /**
     * @var string
     */
    private $routeTo;

    /**
     * @var string
     */
    private $routeDetail;

    /**
     * @param bool $response
     * @param string $device
     * @param string $routeTo
     * @param string $routeDetail
     */
    public function __construct(bool $response, string $device, string $routeTo, string $routeDetail)
    {
        $this->response = $response;
        $this->device = $device;
        $this->routeTo = $routeTo;
        $this->routeDetail = $routeDetail;
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
     * Returns Device.
     */
    public function getDevice(): string
    {
        return $this->device;
    }

    /**
     * Sets Device.
     *
     * @required
     * @maps device
     */
    public function setDevice(string $device): void
    {
        $this->device = $device;
    }

    /**
     * Returns Route To.
     */
    public function getRouteTo(): string
    {
        return $this->routeTo;
    }

    /**
     * Sets Route To.
     *
     * @required
     * @maps route_to
     */
    public function setRouteTo(string $routeTo): void
    {
        $this->routeTo = $routeTo;
    }

    /**
     * Returns Route Detail.
     */
    public function getRouteDetail(): string
    {
        return $this->routeDetail;
    }

    /**
     * Sets Route Detail.
     *
     * @required
     * @maps route_detail
     */
    public function setRouteDetail(string $routeDetail): void
    {
        $this->routeDetail = $routeDetail;
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
        $json['response']     = $this->response;
        $json['device']       = $this->device;
        $json['route_to']     = $this->routeTo;
        $json['route_detail'] = $this->routeDetail;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
