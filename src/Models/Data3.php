<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class Data3 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $agentCode;

    /**
     * @param string $agentCode
     */
    public function __construct(string $agentCode)
    {
        $this->agentCode = $agentCode;
    }

    /**
     * Returns Agent Code.
     */
    public function getAgentCode(): string
    {
        return $this->agentCode;
    }

    /**
     * Sets Agent Code.
     *
     * @required
     * @maps agent_code
     */
    public function setAgentCode(string $agentCode): void
    {
        $this->agentCode = $agentCode;
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
        $json['agent_code'] = $this->agentCode;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
