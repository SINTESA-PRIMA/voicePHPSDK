<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class RouteList implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $response;

    /**
     * @var IncomingRoute[]
     */
    private $incomingRoute;

    /**
     * @var OutgoingRoute[]
     */
    private $outgoingRoute;

    /**
     * @param bool $response
     * @param IncomingRoute[] $incomingRoute
     * @param OutgoingRoute[] $outgoingRoute
     */
    public function __construct(bool $response, array $incomingRoute, array $outgoingRoute)
    {
        $this->response = $response;
        $this->incomingRoute = $incomingRoute;
        $this->outgoingRoute = $outgoingRoute;
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
     * Returns Incoming Route.
     *
     * @return IncomingRoute[]
     */
    public function getIncomingRoute(): array
    {
        return $this->incomingRoute;
    }

    /**
     * Sets Incoming Route.
     *
     * @required
     * @maps incoming_route
     *
     * @param IncomingRoute[] $incomingRoute
     */
    public function setIncomingRoute(array $incomingRoute): void
    {
        $this->incomingRoute = $incomingRoute;
    }

    /**
     * Returns Outgoing Route.
     *
     * @return OutgoingRoute[]
     */
    public function getOutgoingRoute(): array
    {
        return $this->outgoingRoute;
    }

    /**
     * Sets Outgoing Route.
     *
     * @required
     * @maps outgoing_route
     *
     * @param OutgoingRoute[] $outgoingRoute
     */
    public function setOutgoingRoute(array $outgoingRoute): void
    {
        $this->outgoingRoute = $outgoingRoute;
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
        $json['response']       = $this->response;
        $json['incoming_route'] = $this->incomingRoute;
        $json['outgoing_route'] = $this->outgoingRoute;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
