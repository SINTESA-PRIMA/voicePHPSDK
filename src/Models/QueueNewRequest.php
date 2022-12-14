<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class QueueNewRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $queueName;

    /**
     * @var string
     */
    private $ringStrategy;

    /**
     * @param string $queueName
     * @param string $ringStrategy
     */
    public function __construct(string $queueName, string $ringStrategy)
    {
        $this->queueName = $queueName;
        $this->ringStrategy = $ringStrategy;
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
     * Returns Ring Strategy.
     */
    public function getRingStrategy(): string
    {
        return $this->ringStrategy;
    }

    /**
     * Sets Ring Strategy.
     *
     * @required
     * @maps ring_strategy
     */
    public function setRingStrategy(string $ringStrategy): void
    {
        $this->ringStrategy = $ringStrategy;
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
        $json['queue_name']    = $this->queueName;
        $json['ring_strategy'] = $this->ringStrategy;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
