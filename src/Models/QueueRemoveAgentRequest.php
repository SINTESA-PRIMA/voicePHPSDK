<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class QueueRemoveAgentRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $queueName;

    /**
     * @var string
     */
    private $agents;

    /**
     * @var string
     */
    private $agentType;

    /**
     * @param string $queueName
     * @param string $agents
     * @param string $agentType
     */
    public function __construct(string $queueName, string $agents, string $agentType)
    {
        $this->queueName = $queueName;
        $this->agents = $agents;
        $this->agentType = $agentType;
    }

    /**
     * Returns Queue Name.
     */
    public function getQueueName(): string
    {
        return $this->queueName;
    }

    /**
     * Sets Queue Name.
     *
     * @required
     * @maps queue_name
     */
    public function setQueueName(string $queueName): void
    {
        $this->queueName = $queueName;
    }

    /**
     * Returns Agents.
     */
    public function getAgents(): string
    {
        return $this->agents;
    }

    /**
     * Sets Agents.
     *
     * @required
     * @maps agents
     */
    public function setAgents(string $agents): void
    {
        $this->agents = $agents;
    }

    /**
     * Returns Agent Type.
     */
    public function getAgentType(): string
    {
        return $this->agentType;
    }

    /**
     * Sets Agent Type.
     *
     * @required
     * @maps agent_type
     */
    public function setAgentType(string $agentType): void
    {
        $this->agentType = $agentType;
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
        $json['queue_name'] = $this->queueName;
        $json['agents']     = $this->agents;
        $json['agent_type'] = $this->agentType;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
