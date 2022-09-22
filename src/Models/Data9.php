<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class Data9 implements \JsonSerializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $aiName;

    /**
     * @var string
     */
    private $createDate;

    /**
     * @param int $id
     * @param string $aiName
     * @param string $createDate
     */
    public function __construct(int $id, string $aiName, string $createDate)
    {
        $this->id = $id;
        $this->aiName = $aiName;
        $this->createDate = $createDate;
    }

    /**
     * Returns Id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Ai Name.
     */
    public function getAiName(): string
    {
        return $this->aiName;
    }

    /**
     * Sets Ai Name.
     *
     * @required
     * @maps ai_name
     */
    public function setAiName(string $aiName): void
    {
        $this->aiName = $aiName;
    }

    /**
     * Returns Create Date.
     */
    public function getCreateDate(): string
    {
        return $this->createDate;
    }

    /**
     * Sets Create Date.
     *
     * @required
     * @maps create_date
     */
    public function setCreateDate(string $createDate): void
    {
        $this->createDate = $createDate;
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
        $json['id']          = $this->id;
        $json['ai_name']     = $this->aiName;
        $json['create_date'] = $this->createDate;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
