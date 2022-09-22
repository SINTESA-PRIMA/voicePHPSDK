<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class Data6 implements \JsonSerializable
{
    /**
     * @var int
     */
    private $queueId;

    /**
     * @var string
     */
    private $queueName;

    /**
     * @var string
     */
    private $musiclass;

    /**
     * @var string
     */
    private $strategy;

    /**
     * @var Member[]
     */
    private $members;

    /**
     * @param int $queueId
     * @param string $queueName
     * @param string $musiclass
     * @param string $strategy
     * @param Member[] $members
     */
    public function __construct(int $queueId, string $queueName, string $musiclass, string $strategy, array $members)
    {
        $this->queueId = $queueId;
        $this->queueName = $queueName;
        $this->musiclass = $musiclass;
        $this->strategy = $strategy;
        $this->members = $members;
    }

    /**
     * Returns Queue Id.
     */
    public function getQueueId(): int
    {
        return $this->queueId;
    }

    /**
     * Sets Queue Id.
     *
     * @required
     * @maps queue_id
     */
    public function setQueueId(int $queueId): void
    {
        $this->queueId = $queueId;
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
     * Returns Musiclass.
     */
    public function getMusiclass(): string
    {
        return $this->musiclass;
    }

    /**
     * Sets Musiclass.
     *
     * @required
     * @maps musiclass
     */
    public function setMusiclass(string $musiclass): void
    {
        $this->musiclass = $musiclass;
    }

    /**
     * Returns Strategy.
     */
    public function getStrategy(): string
    {
        return $this->strategy;
    }

    /**
     * Sets Strategy.
     *
     * @required
     * @maps strategy
     */
    public function setStrategy(string $strategy): void
    {
        $this->strategy = $strategy;
    }

    /**
     * Returns Members.
     *
     * @return Member[]
     */
    public function getMembers(): array
    {
        return $this->members;
    }

    /**
     * Sets Members.
     *
     * @required
     * @maps members
     *
     * @param Member[] $members
     */
    public function setMembers(array $members): void
    {
        $this->members = $members;
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
        $json['queue_id']   = $this->queueId;
        $json['queue_name'] = $this->queueName;
        $json['musiclass']  = $this->musiclass;
        $json['strategy']   = $this->strategy;
        $json['members']    = $this->members;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
